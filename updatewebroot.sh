#!/bin/sh
cur_path=`pwd`
cd /var/www/Web
git pull
cd $cur_path
