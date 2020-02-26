FROM scalecommerce/dev-php:7.3.14-v6

RUN apt-get update --yes && apt-get install software-properties-common --yes && add-apt-repository ppa:ondrej/php && apt-get update

RUN curl -O https://pear.php.net/go-pear.phar && php -d detect_unicode=0 go-pear.phar

RUN apt-get install php7.3-xdebug --yes

COPY xdebug.ini /etc/php/7.3/apache2/conf.d/xdebug.ini
COPY xdebug-cli.ini /etc/php/7.3/cli/conf.d/xdebug.ini

RUN php -v

EXPOSE 9000
