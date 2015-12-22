#!/bin/bash

# Benjamin Ohe
# 21 December 2015
# for use on UBUNTU 14.04.3 LTS


printf "Starting PHP site Deploy"
apt-get install -y apache2 openssh-server
apt-get install -y php5

rm -r /etc/apache2/sites-enabled/*
rm -r /var/www/*

cp ./cfg/site.conf /etc/apache2/sites-enabled/site.conf
cp ./cfg/index.php /var/www/index.php

service apache2 restart
ip=$(hostname -I)
printf "PHP site deployed: \n You may access it from: $ip" 

