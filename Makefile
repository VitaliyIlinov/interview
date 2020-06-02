include .env
IMAGE_NAME = app
BUILD_ID ?= $(shell /bin/date "+%Y%m%d-%H%M%S")
ARGS = $(filter-out $@,$(MAKECMDGOALS))

E ?= ternarniy operator

default: help

test: foo:=7.2
test: foo1:=nginx
test:$(foo) $(foo1)
	#echo $(E)
	#echo $(ARGS)
	#echo $(foo)
	#echo $(foo1)
ifneq ($(foo),)
	@echo "with foo"
else
	@echo "without foo"
endif

build: uid:=$(shell id -u)
build:
	@echo "build..."
	 docker build \
  	--build-arg uid=$(uid) \
 	--force-rm  \
 	--no-cache \
 	-t $(IMAGE_NAME) ./docker/app/

up:
	docker-compose up -d

down:
	docker-compose down

restart:
	docker-compose down

bash: up
	docker-compose exec $(IMAGE_NAME) bash

logs:
	@docker-compose logs ${ARGS}

config:
	@docker-compose config

del:
	@docker container rm $(shell docker ps -aq) -f

clear_logs:
	sudo rm -R $(FOLDER_LOG_PATH)/*
	sudo rm -R $(DB_DATA_PATH)/*

help:
	@echo 'Targets:'
	@echo ' - build         Build docker images'
	@echo ' - up            Create and start containers'
	@echo ' - up-d          Create and start containers in the background'
	@echo ' - down          Stop and remove containers, networks, images, and volumes'
	@echo ' - help          Show this help and exit'
