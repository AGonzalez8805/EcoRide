FROM php:8.2-apache

# Mise à jour et nettoyage
RUN apt-get update && apt-get install -y \
    zip unzip git \
    && rm -rf /var/lib/apt/lists/*

# Installation des extensions PHP
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Définir le répertoire de travail
WORKDIR /var/www/html

# Copier le code source
COPY . /var/www/html

# Donner les bons droits
RUN chown -R www-data:www-data /var/www/html

# Exposer le port Apache
EXPOSE 80
