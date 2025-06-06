FROM php:8.2-apache

#Mise à jour et installe les dépendances nécessaire et nettoie les caches APT pour réduire la taille de l'image
RUN apt-get update && apt-get install -y && rm -rf /var/lib/apt/lists/*

#Installe les extensions PHP 
RUN docker-php-ext-install mysqli pdo pdo_mysql 

EXPOSE 80
