SRC		= srcs/docker-compose.yml

all:	up

up:
			mkdir -p ~/data/mysql
			mkdir -p ~/data/wordpress
			docker-compose -f $(SRC) up --build

stop:
			docker-compose -f $(SRC) stop

down:
			docker-compose -f $(SRC) down

rm:		stop
			docker-compose -f $(SRC) down
			docker system prune -a

re:		rm up

fclean:
		docker system prune -af
		docker volume prune -f
		rm -rf ~/data/

.PHONY: all up stop rm