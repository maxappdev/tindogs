#!/bin/bash

ssh -v root@165.22.22.124 << EOF

echo 'Updating sources'
cd /var/www/tindogs.com
git checkout --force master
git pull
php artisan migrate

echo 'Done!'

EOF