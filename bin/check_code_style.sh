#!/usr/bin/env bash
cd "$(dirname "$0")/../../../"
php vendor/bin/php-cs-fixer fix --config=vendor/movingimage/style-checker/.php_cs --dry-run --diff