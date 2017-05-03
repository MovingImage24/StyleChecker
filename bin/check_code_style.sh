#!/usr/bin/env bash
cd "$(dirname "$0")/../"
php bin/php-cs-fixer fix --config=movingimage/style-checker/.php_cs --dry-run --diff