# Telegram Bot Client

## Technical stack:

### Backend:

- PHP 8.4
- Laravel 12
- PostgreSQL
- RabbitMQ

### Frontend:

- Vue 3
- Typescript

## Docker

### Services

| Service    | Description                     | Port (Host)  |
|------------|---------------------------------|--------------|
| `nginx`    | Web-server                      | 8080         |
| `app`      | PHP 8.3-FPM (Laravel)           | —            |
| `postgres` | PostgreSQL 16                   | 5432         |
| `rabbitmq` | RabbitMQ 3.13 + Management UI   | 5672 / 15672 |
| `queue`    | Laravel queue worker (RabbitMQ) | —            |

### Quickstart

```bash
cp .env.example .env

docker compose up -d --build

docker compose exec app php artisan key:generate

docker compose exec app php artisan migrate
```

Application is available: http://localhost:8080

RabbitMQ Management UI: http://localhost:15672 (login/password: `guest` / `guest`)
