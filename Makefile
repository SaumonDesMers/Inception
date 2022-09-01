SRC		= srcs/docker-compose.yml

all:	up

up:			dns
			mkdir -p ~/data/mysql
			mkdir -p ~/data/wordpress
			docker-compose -f $(SRC) up --build

dns:
			@sudo sed -i "s/localhost/sgaubert.42.fr/g" /etc/hosts

dns-reset:
			@sudo sed -i "s/sgaubert.42.fr/localhost/g" /etc/hosts

stop:
			docker-compose -f $(SRC) stop

down:
			docker-compose -f $(SRC) down

rm:		stop
			docker-compose -f $(SRC) down
			docker system prune -a

fclean:	down
		docker system prune -af
		docker volume prune -f
		sudo rm -rf ~/data/

re:		rm up

.PHONY: all up stop rm fclean dns dns-reset down