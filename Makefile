#!/bin/bash

UID = $(shell id -u)
DOCKER_BE = sf64example-be

help: ## Show makefile help message prod 1
	@echo 'usage: make [target]'
	@echo
	@echo 'targets:'
	@egrep '^(.+)\:\ ##\ (.+)' ${MAKEFILE_LIST} | column -t -c 2 -s ':#'

# >>>> dev
build: ## Rebuilds all the containers
	USERID=${UID} docker-compose build

up: ## Up the containers
	docker network create sf64example-network || true
	USERID=${UID} docker-compose up -d

stop: ## Stop the containers
	USERID=${UID} docker-compose stop

rebuild: ## Restart the containers
	$(MAKE) stop && $(MAKE) build

bash: ## bash into the be container
	USERID=${UID} docker exec -it --user ${UID} ${DOCKER_BE} bash

logs-sf: ## Show Symfony logs in real time
	USERID=${UID} docker exec -it --user ${UID} ${DOCKER_BE} symfony server:log

# Backend commands
composer-install: ## Installs composer dependencies
	USERID=${UID} docker exec --user ${UID} ${DOCKER_BE} composer install --no-interaction
