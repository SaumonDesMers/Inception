SRC		= srcs/docker-compose.yml

all:	up

up:
			mkdir -p ~/data/mysql
			mkdir -p ~/data/wordpress
			docker-compose -f $(SRC) up --build

stop:
			docker-compose -f $(SRC) stop
rm:		stop
			docker-compose -f $(SRC) down
			docker system prune -a


re:		rm up

.PHONY: all up stop rm