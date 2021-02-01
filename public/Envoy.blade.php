@servers(['web' => $user.'@'.$host,'localhost' => '127.0.0.1'])

<?php $whatever ="hola, whatever" ?>

@task('deploy', ['on' => 'web'])
    cd /data/web/e70791/html/ise-ingles
    git pull
    cd app
    alias php="/usr/bin/php7"
    php -v
    php composer.phar 
    npm install
@endtask