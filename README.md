
## Installation Guide

## Install the PHP dependencies:
composer install

## Install the JavaScript dependencies:
npm install

## Copy the example environment file:
## rename to .env

## Generate a new application key:

## Set up your database configuration in the .env file.

## create database

## Run the database migrations with sample data(Seed):
php artisan migrate --seed

## Serve the application:
php artisan serve



## notes

## API Documentation
/request-docs

## API Documentation user name & Password
username: admin@gmail.com
password: admin@gmail.com

## All API Route ID are Encrypt then use following Encrypt ID for ID (Eg: {sellerProductId})
# for ID 1: eyJpdiI6IlZFMjJzcjAzcTluT0d3ZG5zeWRwRHc9PSIsInZhbHVlIjoic2h5STZUWkhOZi9mY2Z6cmdtRkhaZz09IiwibWFjIjoiNzQxY2YxMDFjOGFlZTAxNWI1NWVjZmY2MDg5ZjM2ZTk1NWQ2ZTAyYzYwMjNmZGYyOTU4N2IzOWY2Njg3MTllZCIsInRhZyI6IiJ9


# use bellow code to generate Encrypt ID
encrypt(1) 

# welcome blade uncomment the  {{ dd(encrypt(1)) }} to generate the Encrypt ID

