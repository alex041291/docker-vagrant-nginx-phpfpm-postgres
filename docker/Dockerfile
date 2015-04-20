FROM nginx

USER root

RUN rm /etc/nginx/nginx.conf
ADD nginx.conf /etc/nginx/

# Install PHP and VIM
RUN apt-get update && apt-get -y install apt-utils && apt-get update
RUN echo "deb http://packages.dotdeb.org wheezy-php56 all" >> /etc/apt/sources.list
RUN echo "deb-src http://packages.dotdeb.org wheezy-php56 all" >> /etc/apt/sources.list
RUN apt-get -y install wget
RUN wget http://www.dotdeb.org/dotdeb.gpg && apt-key add dotdeb.gpg
RUN apt-get update && apt-get -y install php5-cli php5-fpm && apt-get -y install vim && apt-get install -y procps

RUN echo "listen.mode = 0666" >> /etc/php5/fpm/pool.d/www.conf && echo "clear_env = no" >> /etc/php5/fpm/pool.d/www.conf

RUN apt-get install -y supervisor
RUN mkdir -p /var/log/supervisor

COPY supervisord.conf /etc/supervisor/conf.d/supervisord.conf

CMD ["/usr/bin/supervisord"]
