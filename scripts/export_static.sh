#!/usr/bin/env bash
set -euo pipefail

REPO_BASE="${1:-/UI-Mocup/}"

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
