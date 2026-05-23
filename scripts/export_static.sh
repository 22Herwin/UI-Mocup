#!/usr/bin/env bash
set -euo pipefail

REPO_BASE="${1:-}"

if [[ -z "$REPO_BASE" ]]; then
	origin_url=$(git config --get remote.origin.url 2>/dev/null || true)
	if [[ -n "$origin_url" ]]; then
		repo_name="${origin_url##*/}"
		repo_name="${repo_name%.git}"
		REPO_BASE="/${repo_name}/"
	fi
fi

if [[ -n "$REPO_BASE" ]]; then
	if [[ "$REPO_BASE" == http*://* ]]; then
		REPO_BASE=$(echo "$REPO_BASE" | sed -E 's#^https?://[^/]+##')
	fi

	if [[ "$REPO_BASE" =~ ^[A-Za-z]: ]]; then
		REPO_BASE="/$(basename "$REPO_BASE")/"
	fi
fi

if [[ -z "$REPO_BASE" ]]; then
	REPO_BASE="/"
fi

if [[ "$REPO_BASE" != /* ]]; then
	REPO_BASE="/${REPO_BASE}"
fi

if [[ "$REPO_BASE" != */ ]]; then
	REPO_BASE="${REPO_BASE}/"
fi

export VITE_BASE="$REPO_BASE"
export ASSET_URL="${REPO_BASE%/}"
export EXPORT_BASE="$REPO_BASE"

rm -f public/hot

npm run build
php scripts/export_static.php

rm -rf docs/build
cp -r public/build docs/build

echo "Static site ready in docs/. Configure GitHub Pages to use /docs on main branch."
