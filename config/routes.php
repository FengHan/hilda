<?php
use NoahBuscher\Macaw\Macaw;

Macaw::get('hi', function() {
    echo 'success';
});

Macaw::get('', 'HomeController@home');

//Macaw::get('(:all)', function($fo) {
//    echo "don't find a route <br>" . $fo;
//});

Macaw::$error_callback = function() {
    throw new Exception("路由无匹配项 404 Not Found");
};

Macaw::dispatch();


