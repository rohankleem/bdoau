# Session State — Rohan

**Last updated:** 2026-05-07

> **Update protocol (for Claude):** When Rohan says "update session state", rewrite this file entirely:
> - Shift "What we worked on" → "Where we came from"
> - Write fresh "What we worked on" covering this session's decisions, fixes, and code changes
> - Write fresh "Where we need to go" with enough detail to hit the ground running next session
> - Update the "Last updated" date

---

## Where We Came From

*(Blank — first session under this docs structure)*

---

## What We Worked On

**Session date:** 2026-05-07

- Cleaned up the repo and pushed initial state to https://github.com/rohankleem/bdoau (master). Removed unused default WP themes (`twentytwentyone` through `twentytwentyfive`) and the legacy `buildio` theme — only `buildio2` is tracked now.
- Switched deploy targets in `_deploy/deploy_all_LIVE.sh` and `_deploy/deploy_all_TEST.sh` from `buildio.dev` to `buildio.au`.
- Added WP-CLI infrastructure: `_tools/wp-cli.phar` (gitignored), `_tools/wp-cli-bootstrap.php`, `wp-cli.yml`, and `wp` / `wp.bat` wrappers that auto-discover the newest Laragon PHP and MySQL. `wp-config.php` got idempotent dotenv guards so the bootstrap doesn't fight web context.
- Diagnosed and documented that the local stack is **Laragon**, not XAMPP — even though files live under `C:\xampp\htdocs\bdoau\`. The XAMPP `mysql.exe` is broken (missing `caching_sha2_password.dll`); Laragon's MySQL 8.4.3 is the actual server.
- Created the `.claude/` documentation structure mirroring the build app's pattern: `CLAUDE.md` (operating manual) at root; `.claude/app-knowledge/` with `app-knowledge.md`, `git-and-deploy.md`, and `buildio2-theme.md` (renamed from the root-level `buildio-projects-truth.md`); `.claude/domain-knowledge/domain-knowledge.md` as a skeleton; `.claude/session-state-rohan.md` (this file).

---

## Where We Need To Go

### Immediate (small, ready to action)

- Commit the new docs structure to master and push.
- Decide whether to commit the `better-search-replace` plugin (currently untracked).
- Fill in the `domain-knowledge.md` `{TBD}` sections when the conversation surfaces the facts (what Buildio actually does, what Unipixel/SubItem are, audience, content pillars).
- Fill in the `git-and-deploy.md` `{TBD}` sections about server-side post-deploy steps and rollback procedures (user said this comes later).

### Bigger picture

- No active projects in `.claude/projects/` yet. Next initiative will get its own doc there.
- Consider whether the `_deploy/*.bak` files should be deleted (now that `*.bak` is gitignored, they're noise).
