#!/bin/bash

git pull

echo "STARTING DOCKER ENVIRONMENT..."
docker-compose up -d

echo "INSTALLING COMPOSER DEPENDENCIES..."
docker-compose exec -T php bash -c '/usr/local/bin/composer install --no-plugins --no-scripts --no-interaction --prefer-dist --optimize-autoloader'

echo "EXECUTING DB MIGRATIONS..."
docker-compose exec -T php bash -c 'php bin/console doctrine:migrations:migrate --no-interaction'

./nodejs.sh $1