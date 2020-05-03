# Projeto para autenticação por JWT

Projeto que utiliza a biblioteca [tymondesigns/jwt-auth](https://github.com/tymondesigns/jwt-auth) para autenticação via JWT.


## Requisitos

* PHP 7.2.5 ou superior
* Servidor Web (ex: Apache, Nginx, IIS)

## Instalação

* Clonar o repositório: `git clone https://github.com/pedrodalvy/autenticacao_laravel_jwt.git`
* Acessar a pasta do projeto e installar as dependências: `composer install`


## Rotas

```http
POST /api/login
```
```http
GET /api/users
```
```http
GET /api/logout
```

## Exemplos de Request e Response

### POST /api/login

Exemplo: POST  http://localhost:8000/api/login

Request body:
```json
{
    "email": "admin@user.com",
    "password": "password"
}
```

### GET /api/users

Exemplo: GET  http://localhost:8000/api/users

Response body:
```json
[
    {
        "id": 1,
        "name": "Sid Graham",
        "email": "admin@user.com",
        "email_verified_at": "2020-05-03T19:10:19.000000Z",
        "created_at": "2020-05-03T19:10:19.000000Z",
        "updated_at": "2020-05-03T19:10:19.000000Z"
    }
]
```

### POST /api/logout

Exemplo: POST  http://localhost:8000/api/logout

Response code: 204

#### Observação

- A biblioteca do tymon/jwt-auth utilizada é da branch d4cf9fd2b98790712d3e6cd1094e5ff018431f19 de desenvolvimento, devido a necessidade de compatibilidade com o Laravel 7.
- Para intalação foi utilizado o comando  `composer require tymon/jwt-auth:dev-develop#d4cf9fd2b98790712d3e6cd1094e5ff018431f19`.