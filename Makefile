SRC		= srcs/docker-compose.yml

all:	build up

build:
			sudo docker-compose -f $(SRC) build

up:
			sudo docker-compose -f $(SRC) up

stop:
			sudo docker-compose -f $(SRC) stop
rm:		stop
			sudo docker-compose -f $(SRC) down
			sudo docker system prune -a


re:		rm build up

.PHONY: all build up stop rm