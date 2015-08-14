<?php
use NoahBuscher\Macaw\Macaw;

Macaw::get('hi', function() {
    echo 'success';
});

Macaw::get('', 'HomeController@home');

Macaw::get('(:all)', function($fo) {
    echo "don't find a route <br>" . $fo;
});

Macaw::dispatch();


