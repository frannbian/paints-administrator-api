# Extendeal Challange

[![N|Solid](https://camo.githubusercontent.com/316ccceb2c875497ee2197622c2040a241b8afe4ff78ab7cc0161ee2a644b8a3/68747470733a2f2f696d672e736869656c64732e696f2f62616467652f4c61726176656c2d4646324432303f7374796c653d666f722d7468652d6261646765266c6f676f3d6c61726176656c266c6f676f436f6c6f723d7768697465)](https://laravel.com/)


Paints microservice

## Features

- OAuth Security
- Docker
- Paints CRUD
- Cached responses

## Installation

Require [Docker](https://www.docker.com/) to run.

Install the dependencies and devDependencies and start the server.

```sh
git clone https://github.com/frannbian/extendeal-challange.git
cd extendeal-challange
cp .env.example .env
docker-compose up -d
docker-compose exec app /bin/bash (for Windows use docker-compose exec app //bin//bash)
composer install
php artisan telescope:install
php artisan migrate --seed
php artisan passport:install
php artisan passport:client --client (save the credentials, we gonna user later)

```
After that the microservice will start at http//localhost:8070, you'll see a documentation & playground as a home.

¿How to play with the endpoints?
First we need to get an access_token from the auth endpoint, we need to set the client_id and client_secret (I told you we gonna use it :P).
After we get the token we'll be able to user all the others endpoint, always setting the token header and for the Paint endpoint we also have to set the X-HTTP-USER-ID header.

Example for filters & fields in GET Paint Endpoint:
http://localhost:8070/api/v1/paints?filters[country]=URU&fields[1]=id&fields[2]=name&fields[3]=painter

## Request & Responses 
For logs of the request & responses we gonna use "Laravel Telescope" a powerfull package for this feature.
¿How to use? Easy. Just go to http://localhost:8070/telescope;
## Plugins

This project is currently extended with the following plugins.

| Plugin | README |
| ------ | ------ |
| L5-Swagger | [https://github.com/DarkaOnLine/L5-Swagger] |

## License

Franco Bianco
