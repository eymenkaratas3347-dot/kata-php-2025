.PHONY: test check

vendor: composer.json composer.lock
	composer install
	touch vendor

test: vendor
	vendor/bin/phpunit

check: vendor test
	vendor/bin/phpstan analyze --level 0 src/ tests/
