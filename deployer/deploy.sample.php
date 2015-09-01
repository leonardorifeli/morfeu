<?php
require 'recipe/symfony.php';

server('prod', 'host', 22)
->user('username')
->password('password')
->stage('production')
->env('deploy_path', 'path');

set('repository', 'https://github.com/leonardorifeli/morfeu.git');

task('composer', function ($input) {
    run("sudo composer update");
})
->desc('Composer update');

task('cache', function ($input) {
    run("php app/console clear:cache --end=prod");
})
->desc('Clear cache');

task('run', array('composer', 'cache'))
->desc('OK!');
