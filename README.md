## Lumen API Boilerplate

#### Features

1. [JWT Authentication](https://github.com/tymondesigns/jwt-auth)
2. Testing with [PEST PHP](https://pestphp.com/)
3. Fully dockerized 

#### Setup

1. clone project.
2. create your env files with `cp .env.example .env`
3. run `docker-compose up --build`
4. visit `http://localhost:9001/v1/health` for the response below

```json
{
    message: "api is healthy",
    apiVersion: "v1",
    lumenVersion: "Lumen (7.2.1) (Laravel Components ^7.0)"
}
```

#### Routes

| ROUTE  | METHOD  |  DESCRIPTION |  PROTECTED  |
|---|---|---|---|
| `/register`  | POST  |  register a new user | false |
|  `/login` | POST  |  login an existing user | false |
|  `/me` |  GET | retrieves user profile  | true |
|  `/logout` | GET | logouts out an authenticated user | true |
| `/token/refresh`| GET | regenerates new access token for user | true |
