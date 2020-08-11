## Lumen API Boilerplate ![Lumem](https://github.com/lacasera/lumen-api-boilerplate/workflows/Lumem/badge.svg?branch=master)

#### Features

1. [JWT Authentication](https://github.com/tymondesigns/jwt-auth)
2. Testing with [PEST PHP](https://pestphp.com/)
3. Fully dockerized 
4. Documentation with [Open API](https://swagger.io/specification)

#### Setup

1. clone project.
2. create your env files with `cp .env.example .env`
3. run `docker-compose up --build`
4. visit `http://localhost:9001/v1/health` for the response below
5. serve documentations `composer docs:serve` and visit `http://localhost:8001`
