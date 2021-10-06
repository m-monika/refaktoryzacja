FROM php:7.4-cli
RUN apt update && apt install zip unzip && pecl install ast && docker-php-ext-enable ast
WORKDIR /usr/src/refactoring
CMD [ "bash" ]