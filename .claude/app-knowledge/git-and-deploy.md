# Git, Deploy & Onboarding — Buildio.au

> Lives in `.claude/` so Claude has it in context every session.

---

## Before You Start Working

**Always pull before you code.** Every session:

```bash
git fetch origin
git status
git pull origin master
```

If `git status` shows uncommitted changes, commit or stash first:

```bash
# Option A: commit
git add <files>
git commit -m "WIP: describe what you were doing"

# Option B: stash
git stash push -m "description"
git pull origin master
git stash pop
```

---

## Daily Workflow

### 1. Start of session
```bash
git pull origin master
```

### 2. Make your changes
Edit files as normal.

### 3. Check what changed
```bash
git status
git diff
```

### 4. Commit
```bash
git add <specific files>          # prefer named files over `git add .`
git commit -m "Short description of what and why"
```

### 5. Push
```bash
git push origin master
```

**"Commit" always means commit AND push** — don't stop at a local commit when the user says "commit". Push in the same step.

---

## Rules for This Project

1. **We work on `master` directly** — no feature branches, no `claude/*` worktree branches
2. **Pull before you push** — always
3. **Never force push** — banned
4. **Commit often** — small, logical chunks, not giant dumps
5. **Write real commit messages** — future you will thank present you
6. **Don't commit `.env`** — gitignored
7. **Don't commit `node_modules/`** — the buildio2 theme has its own; gitignored
8. **`vendor/` IS committed** — only contains `vlucas/phpdotenv` and its tiny tree, used by `wp-config.php` to load `.env`
9. **`.claude/settings.local.json` and `.claude/worktrees/` are gitignored** — other `.claude/*` files are shared
10. **Default WP themes are NOT in the repo** — only `buildio2` is tracked

---

## Deploying to Production (InterServer)

> {TBD: Confirm and expand once production deploy details are reviewed.}

Deploy is **manual rsync** from WSL/Ubuntu.

### The process (every deploy)

1. Make changes locally
2. Commit + push to `master`
3. **Dry run first** — `bash _deploy/deploy_all_TEST.sh` from WSL. This rsyncs with `-avn` (no-op) so you see the file list that *would* transfer + delete.
4. Review the dry-run output. If it looks right, run `bash _deploy/deploy_all_LIVE.sh`.
5. Verify https://buildio.au

### What the scripts do

Both live in `_deploy/`. Both:

- Prepend `cwrsync` to PATH (`/c/Users/RohanKleem/scoop/apps/cwrsync/current/bin`) so they work from Git Bash on Windows. *Note:* the user runs them from WSL/Ubuntu in practice; the cwrsync line is a fallback if running from Git Bash directly.
- Use `--include-from="../_rsync/.rsync_all"` to apply project-level rsync filters
- Sync from `../` (the project root) → `buildiod@vda4300.is.cc:domains/buildio.au`
- `--delete-after` removes files from the server that no longer exist locally
- `--chmod=Du=rwx,Dgo=rx,Fu=rw,Fog=r` sets sane file modes on transfer

The TEST script adds `-n` (dry run, no actual transfer). LIVE writes for real.

### What's excluded

See `_rsync/.rsync_all` for the authoritative list. Notable excludes:
- `cgi-bin/`
- `public_html/wp-content/themes/buildio2/node_modules/`
- `public_html/wp-content/themes/buildio2/custom-logs/`
- `public_html/wp-content/uploads/` — uploads live only on the server (you don't deploy them)
- `public_html/wp-content/cache/`

> **Gap to fix:** the current filter does NOT exclude project-level dev directories — `.claude/`, `_deploy/`, `_rsync/`, `_tools/`, `.git/`, `wp-cli.yml`, `wp`, `wp.bat`. Until added, the next deploy will push them to the server. They sit outside `public_html/` so they're not web-accessible, but they're noise. Tighten the filter when convenient.

### `git push` does NOT deploy

Pushing to GitHub puts code on the remote repo, not on the server. Production only changes when you run `_deploy/deploy_all_LIVE.sh`. There is no GitHub Actions workflow for deploy on this project (yet).

### Before deploying

- [ ] Local changes committed and pushed
- [ ] Tested in browser at `https://bdoau.local.site`
- [ ] If theme code: rebuilt assets (`npm run prod` from `buildio2/`) — production loads `dist/main.bundle.{js,css}`, not source
- [ ] DB schema changes captured if any (see "Database Migrations" below)

### After deploying

- Verify the site at https://buildio.au
- Spot-check the affected pages
- If anything looks broken, the rsync log + the `_TEST` script let you reproduce + diff against expected state

### Server access

- **Host:** `vda4300.is.cc` (InterServer, CloudLinux 8 — kernel `4.18.0-553.111.1.lve.el8`)
- **SSH user:** `buildiod`
- **Auth:** SSH key (already trusted — known_hosts has the host fingerprint, no password prompt). No specific entry needed in `~/.ssh/config` — default keys (`id_ed25519` then `id_rsa`) are tried.
- **Connection test:** `ssh buildiod@vda4300.is.cc 'hostname && pwd'`
- **Home dir:** `/home/buildiod/`
- **Domains dir:** `/home/buildiod/domains/` (one subdir per site)
- **Project path:** `/home/buildiod/domains/buildio.au/`
- **Panel:** DirectAdmin — {TBD: panel URL, check InterServer welcome email}

### Server-side stack

- **PHP:** 8.3.30 at `/usr/local/bin/php` — matches local exactly. (Was 8.0.30 prior to 2026-05-07; switched to 8.3 in InterServer panel for parity.)
- **WP-CLI:** installed globally at `/usr/local/bin/wp` — no wrapper needed on the server
- **Web root:** `/home/buildiod/domains/buildio.au/public_html/`
- **`.env` lives on the server** at the project root (separate from local `.env` — production DB creds live here, not in the repo)
- **`vendor/`** is rsynced from local (committed to git) — composer is not run on the server
- **`private_html`** is a symlink to `public_html` (DirectAdmin convention)

### Quick SSH commands

```bash
# Open shell in the project directory
ssh buildiod@vda4300.is.cc -t "cd domains/buildio.au && bash"

# Run a one-off WP-CLI command
ssh buildiod@vda4300.is.cc "cd domains/buildio.au/public_html && wp option get siteurl"

# Tail debug log
ssh buildiod@vda4300.is.cc "tail -f domains/buildio.au/public_html/debug_buildio.log"

# Check disk usage for the site
ssh buildiod@vda4300.is.cc "du -sh domains/buildio.au"
```

> {TBD: Server-side post-deploy steps — cache flushes, opcache reset, anything that needs to run after rsync completes. To be filled in after the next deploy.}

---

## Database Migrations

WordPress doesn't have a Laravel-style migration system. Schema changes happen via:

1. **WP itself** — core upgrades, `dbDelta()` calls in plugins/themes — applied automatically when WP runs.
2. **Plugin activation/deactivation** — plugins can create their own tables on activation hooks.
3. **Manual edits** — sometimes a hand-written `ALTER TABLE` via `wp db query` or phpMyAdmin.

There's no commit-tracked migration history. Be deliberate when you change schema:

- Take a backup first: `./wp db export _ignore/backup-$(date +%F-%H%M).sql`
- Document the change in a project doc (`.claude/projects/{name}.md`)
- Note any required follow-up on the server in the project doc

---

## Restore / Rollback

### Local DB restore

```bash
./wp db import _ignore/backup-2026-05-07-1430.sql
./wp cache flush
```

### Code rollback

Standard git:
```bash
git log --oneline -10                    # find the commit
git revert <commit-sha>                  # reverse a specific commit
# or for a hard reset (only if not pushed):
git reset --hard HEAD~1
```

### Production rollback

> {TBD: Confirm rollback procedure once first real deploy lands. Rough plan: take a server-side backup before each deploy, rsync that backup back, restore DB if needed.}

---

## When Things Go Wrong

### "I edited files but haven't committed and need to pull"
```bash
git stash
git pull origin master
git stash pop
```

### "I committed but there are conflicts after pulling"
```bash
git pull origin master
# Fix files with <<<<<<< markers
git add .
git commit -m "Resolve merge conflict in [filename]"
```

### "I want to undo my last commit (not pushed yet)"
```bash
git reset --soft HEAD~1
```

### "I want to see what's on the server without changing anything"
```bash
git fetch origin
git log origin/master --oneline -10
```

### "wp db query fails with caching_sha2_password error"
PATH is pointing at XAMPP's mysql, not Laragon's. Use the `./wp` wrapper — it forces Laragon's binary.

### "Local site won't load"
1. Is Laragon running? (`C:\laragon\laragon.exe` → Start All)
2. Is the DB running? (Laragon panel → MySQL should be green)
3. Check Apache error log: Laragon panel → Apache → Open Error Log

---

## Database Safety

**Never run destructive DB commands without warning first.**

### Rules

1. **Never run `wp db reset`, `wp db drop`, or `DROP TABLE` without explicit confirmation**
2. **Always back up first** before any UPDATE/DELETE that affects multiple rows:
   ```bash
   ./wp db export _ignore/backup-$(date +%F-%H%M).sql
   ```
3. **Production is more critical** — never run destructive DB commands on production without a fresh backup and explicit sign-off.
4. **Always use `--dry-run` for `wp db search-replace`** the first time. Then run for real.

---

## Getting On Board (New Machine)

```bash
# 1. Clone
git clone https://github.com/rohankleem/bdoau.git C:/xampp/htdocs/bdoau
cd C:/xampp/htdocs/bdoau

# 2. Composer (only needed for phpdotenv)
composer install

# 3. Environment
cp .env.example .env
# Edit .env — DB_NAME, DB_USER, DB_PASSWORD (root/blank for Laragon default), salts

# 4. Database
# Either: import a recent dump via phpMyAdmin / wp db import
# Or: fresh WP install + run setup wizard

# 5. Laragon — make sure bdoau.local.site auto-vhost is recognised
# (Laragon usually picks up new dirs automatically; restart Apache from the panel if not)

# 6. Verify
curl -sk https://bdoau.local.site/ | head -5
./wp core version    # → 6.9.4
./wp option get siteurl
```

Then follow Daily Workflow above.

---

## Instructions for Claude (All Instances)

> **Claude: read and follow these rules every session.**

1. Start each session with `git fetch origin && git log --oneline -10` — check for remote commits
2. If local is behind remote, run `git pull origin master` before making changes
3. If there are uncommitted changes, ask the user whether to commit, stash, or discard before pulling
4. Never commit without explicit instruction
5. Never push without explicit instruction
6. Never force push. Ever.
7. When the user says "commit" — commit AND push in one step
8. Use real commit messages describing what and why
9. Don't commit `.env`, `node_modules/`, or theme `dist/` is committed (production loads it; not gitignored)
10. Deploy is manual rsync from WSL — `bash _deploy/deploy_all_TEST.sh` first, then `_LIVE.sh`. `git push` alone does NOT deploy.
11. Before destructive DB commands, stop and warn — suggest `./wp db export` first
12. Use the `./wp` wrapper for WP-CLI, not bare `wp` or `php _tools/wp-cli.phar` — it forces Laragon's PHP/MySQL onto PATH

---

## Quick Reference Card

| I want to... | Command |
|---|---|
| Get latest code | `git pull origin master` |
| See what I changed | `git status` / `git diff` |
| Save my work | `git add <files> && git commit -m "message"` |
| Send to GitHub | `git push origin master` |
| Commit AND push (one step) | `git add <files> && git commit -m "..." && git push` |
| See recent history | `git log --oneline -10` |
| Shelve changes | `git stash push -m "desc"` / `git stash pop` |
| See remote without changing | `git fetch origin` |
| Undo last commit (not pushed) | `git reset --soft HEAD~1` |
| Dry-run a deploy (from WSL) | `bash _deploy/deploy_all_TEST.sh` |
| Real deploy to production (from WSL) | `bash _deploy/deploy_all_LIVE.sh` |
| Back up local DB | `./wp db export _ignore/backup-$(date +%F).sql` |
| Restore local DB | `./wp db import _ignore/backup-XXXX.sql` |
| Run a WP-CLI command | `./wp <command>` (or `wp.bat` on cmd/PowerShell) |
