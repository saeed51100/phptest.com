FROM php:7.4-cli
COPY . /usr/src/myapp
WORKDIR /usr/src/myapp
# CMD [ "php", "./src/main.php" ]
CMD [ "php", "./vendor/bin/phpunit tests" ]

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- \
--install-dir=/usr/bin --filename=composer
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer
