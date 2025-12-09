<?php
namespace Deployer;

require 'recipe/laravel.php';

set('application', 'ElTeuProjecte');
set('repository', 'https://github.com/JorgeVidal20/Proyecto-Despliegues'); // O https
set('http_user', 'www-data');
set('writable_mode', 'acl'); // Important per a usar ACL

host('deployer.cipfpbatoi.es') // O la IP del servidor
    ->set('remote_user', 'sa04-deployer')
    ->set('deploy_path', '/var/www/es-cipfpbatoi-deployer/html')
    ->set('identity_file', '~/.ssh/id_rsa'); // La teua clau privada

task('reload:php-fpm', function () {
    run('sudo /usr/sbin/service php8.3-fpm restart');
});

after('deploy', 'reload:php-fpm');