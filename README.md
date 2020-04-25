# WordPress Local

> simple docker compose script to get WP up and running on a local server.

## Requirements

1. [docker](https://www.docker.com/products/docker-desktop)

## How to get started

```bash
docker-compose up -d
```

> docker-compose up in detached mode
  a. pulls the needed images,
  b starts the WordPress and database containers

## How to stop images and containers

```bash
docker-compose down
```

> removes the containers and default network, but preserves WordPress database.

```bash
docker-compose down --volumes
```

> removes the containers, default network, and the Wordpress database.
