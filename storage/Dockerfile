FROM yiisoftware/yii2-php:7.2-apache

# Change document root for Apache
RUN sed -i -e 's|/app|/app/storage|g' /etc/apache2/sites-available/000-default.conf