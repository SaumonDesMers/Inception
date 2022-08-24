SRC		= srcs/docker-compose.yml

all:	build up

build:
			docker-compose -f $(SRC) build

up:
			mkdir -p ~/data/mysql
			mkdir -p ~/data/wordpress
			docker-compose -f $(SRC) up

stop:
			docker-compose -f $(SRC) stop
rm:		stop
			docker-compose -f $(SRC) down
			docker system prune -a


re:		rm build up

.PHONY: all build up stop rm