<?php

include __DIR__.'/vendor/autoload.php';

foreach (glob(__DIR__.'/src/*.php') as $file) {
    $className = 'XApi\Fixtures\Json\\'.substr(basename($file), 0, -4);

    foreach (get_class_methods($className) as $method) {
        json_decode(call_user_func(array($className, $method)));
    }
}
