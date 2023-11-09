install:
	composer install
brain-games:
	./bin/brain-games
brain-even:
	./bin/brain-even
validate:
	composer validate
lint:
	composer exec --verbose phpcs -- --standard=PSR12 src tests
brain-calc:
	./bin/brain-calc