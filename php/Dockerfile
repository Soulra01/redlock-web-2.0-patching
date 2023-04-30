FROM php:8.1-apache
# RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
# RUN apt-get update && apt-get upgrade -y
WORKDIR /var/www/html/
# Copy content dari direktori aplikasi ke dalam container
COPY . /var/www/html/

# Copy file redlock-db.sql ke dalam container
COPY Redlock-db.sql /docker-entrypoint-initdb.d/
# Install extension mysqli
RUN docker-php-ext-install mysqli

# Konfigurasi akses control list
RUN chown -R www-data:www-data /var/www/html/
RUN chmod -R o-wx /var/www/html

# Expose port 80 dan jalankan web server Apache
EXPOSE 80
CMD ["apache2-foreground"]