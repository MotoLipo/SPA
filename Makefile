#!/bin/bash

install: ## Развёртывания проекта
	if [ ! -f ./database/database.sqlite ]; \
	then \
	> ./database/database.sqlite; \
	fi \

	if [ ! -e ./.env ]; \
	then \
	cp ./.env.example ./.env; \
	fi

	composer install; \
	npm install; \
	php artisan migrate;