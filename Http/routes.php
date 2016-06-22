<?php

Route::group(
    ['middleware' => 'web', 'prefix' => 'izblog', 'namespace' => 'Modules\IzBlog\Http\Controllers'],
    function () {
        Route::controller('/', 'HomeController');
    });