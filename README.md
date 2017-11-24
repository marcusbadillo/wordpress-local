# WordPress Local
> simple docker compose script to get WP up and running on a local server.


# How to get started
1. docker-compose up -d
> docker-compose up in detached mode
  a. pulls the needed images,
  b starts the WordPress and database containers



# How to stop images and containers
1. docker-compose down
> removes the containers and default network, but preserves WordPress database.

2. docker-compose down --volumes
> removes the containers, default network, and the Wordpress database.
