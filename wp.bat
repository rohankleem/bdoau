@echo off
REM WP-CLI wrapper. Auto-discovers the newest Laragon PHP and MySQL.
setlocal enabledelayedexpansion

set "PHP_DIR="
for /f "delims=" %%i in ('dir /b /ad "C:\laragon\bin\php\php-*" 2^>nul') do set "PHP_DIR=C:\laragon\bin\php\%%i"
if not defined PHP_DIR (
  echo wp: cannot find Laragon PHP under C:\laragon\bin\php 1>&2
  exit /b 1
)

set "MYSQL_DIR="
for /f "delims=" %%i in ('dir /b /ad "C:\laragon\bin\mysql\mysql-*-winx64" 2^>nul') do set "MYSQL_DIR=C:\laragon\bin\mysql\%%i"
if not defined MYSQL_DIR (
  echo wp: cannot find Laragon MySQL under C:\laragon\bin\mysql 1>&2
  exit /b 1
)

set "PATH=%PHP_DIR%;%MYSQL_DIR%\bin;%PATH%"
php "%~dp0_tools\wp-cli.phar" %*
