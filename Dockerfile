#menggunakan base image php:8.1-apache
From php:8.1-apache

#menyalin file index.php ke dalam container
COPY index.php /var/www/html/

#memasang dependensi untuk koneksi ke database
RUN docker-php-ext-install mysqli pdo pdo_mysql

#run module rewrite apache
RUN a2enmod rewrite