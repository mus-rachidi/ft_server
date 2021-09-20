FROM debian:buster
RUN apt-get -y update && apt-get -y install nginx
RUN apt-get -y install php php-cli php-fpm
COPY index.html /tmp/index.html
COPY default /etc/nginx/sites-available/default
COPY test.php /tmp/test.php
EXPOSE 80/tcp
CMD service php7.4-fpm start && service nginx start && tail -f /dev/null


 
