#!/usr/bin/env bash
# Idempotent hosting setup: acme.sh, Let's Encrypt certificate, cPanel deploy, renewal cron.
set -euo pipefail

DOMAIN=alimatar.org
WEBROOT="$HOME/public_html"
ACME="$HOME/.acme.sh/acme.sh"

if [ ! -x "$ACME" ]; then
    curl -fsSL https://get.acme.sh | sh -s -- --nocron
fi

"$ACME" --set-default-ca --server letsencrypt

if ! "$ACME" --list | grep -q "^$DOMAIN "; then
    "$ACME" --issue --webroot "$WEBROOT" -d "$DOMAIN" -d "www.$DOMAIN"
    "$ACME" --deploy --deploy-hook cpanel_uapi -d "$DOMAIN"
fi

if ! crontab -l 2>/dev/null | grep -q "acme.sh --cron"; then
    "$ACME" --install-cronjob
fi
