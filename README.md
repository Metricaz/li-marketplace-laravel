# 🚀 BoraComprar

## `develop`

Instruções para executar o projeto em ambiente local.

### `.env`

Crie seu .env baseado no .env.example:

```
cp .env.example .env
```

Informe as variáveis **DOCKER_HOST_USER** e **DOCKER_HOST_UID** com o username e uid do usuário do seu ambiente local. Para saber o username e uid, execute localmente com seu usuário:

```
echo "USER:" $(id -un)
echo "UID:" $(id -u)
```

Após as configurações do .env, execute:

```
./docker/configure-env.sh

docker compose up -d

docker compose exec workspace composer install
docker compose exec workspace php artisan key:generate
docker compose exec workspace npm install
docker compose exec workspace npm run dev
```

Reinicie todos os containers:

```
docker compose restart
```

### `acessos`

- **site:** localhost:8000