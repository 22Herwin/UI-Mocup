#!/usr/bin/env bash
set -euo pipefail

REPO_INPUT="${1:-}"
REPO_SLUG=""

if [[ -n "$REPO_INPUT" ]]; then
	if [[ "$REPO_INPUT" == http*://* ]]; then
		REPO_SLUG=$(echo "$REPO_INPUT" | sed -E 's#^https?://[^/]+/##' | cut -d/ -f1)
	elif [[ "$REPO_INPUT" == /* ]]; then
		REPO_SLUG=$(echo "$REPO_INPUT" | sed -E 's#^/##' | cut -d/ -f1)
	else
		REPO_SLUG="$REPO_INPUT"
	fi
else
	origin_url=$(git config --get remote.origin.url 2>/dev/null || true)
	if [[ -n "$origin_url" ]]; then
		repo_name="${origin_url##*/}"
		repo_name="${repo_name%.git}"
		REPO_SLUG="$repo_name"
	fi
fi

if [[ -z "$REPO_SLUG" ]]; then
	REPO_SLUG=""
fi

if [[ -n "$REPO_SLUG" ]]; then
	REPO_BASE="/${REPO_SLUG}/"
else
	REPO_BASE="/"
fi

export VITE_BASE="$REPO_BASE"
export ASSET_URL=""
export EXPORT_BASE="$REPO_BASE"
export REPO_SLUG="$REPO_SLUG"

rm -f public/hot

php scripts/export_static.php

rm -rf docs/build

echo "Static site ready in docs/. Configure GitHub Pages to use /docs on main branch."
