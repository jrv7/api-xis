#!/bin/bash

if [[ $1 == "" ]]; then
	echo
	echo "Please give me a name for the new database!"
	echo
else
	if [[ $2 == "" ]]; then
		echo
		echo "At least one schemae must be created!"
	else
		if [[ $7 != "" ]]; then
                        echo
                        echo "Cannot create more than 5 schemas!"
                else
			echo
			echo "Recreating database $1"
			printf "drop database $1;" | psql
			printf "create database $1;" | psql
			printf "create schema $2;" | psql $1
			
			if [[ $3 != "" ]]; then
	                        printf "create schema $3;" | psql $1 
	                fi
			if [[ $4 != "" ]]; then
	                	printf "create schema $4;" | psql $1
	        	fi
			if [[ $5 != "" ]]; then
	                	printf "create schema $5;" | psql $1
		        fi
			if [[ $6 != "" ]]; then
	                	printf "create schema $6;" | psql $1
		        fi
			if [[ $7 != "" ]]; then
	                	echo
				echo "Cannot create more than 5 schemas!"
			else
				php artisan migrate
				php artisan db:seed
				php artisan passport:install
				printf "Xis-APP" | php artisan passport:client --client
				rm ./storage/app/modelsOnTheFly/TABLE_*
				printf "app()->call('App\Http\Controllers\Admin\SystemController@makeModelFile')" | php artisan tinker
				printf "app()->call('App\Http\Controllers\Admin\SystemController@makeModelFile')" | php artisan tinker
				printf "app()->call('App\Http\Controllers\Admin\SystemController@makeModelFile')" | php artisan tinker
				printf "app()->call('App\Http\Controllers\Admin\SystemController@makeModelFile')" | php artisan tinker
				printf "app()->call('App\Http\Controllers\Admin\SystemController@makeModelFile')" | php artisan tinker
			fi
	        fi
	fi
fi
