<?php
if(!function_exists('set_active')){
    function set_active($route){
        return Route::is($route) ? 'active' : '';
    }
}