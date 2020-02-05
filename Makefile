install:
	composer install

redump:
	composer dump-autoload -o

make lint:
	composer run-script phpcs -- --standard=PSR12 src bin
