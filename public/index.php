<?php
    require_once '../config/init.php';
    require_once '../vendor/shop/core/libs/show.php';

    
    new \shop\App();
    show(\shop\App::$app->getProperties());

    throw new Exception('Страница не найдена!!!', 404);
