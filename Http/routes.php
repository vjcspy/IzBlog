<?php

Route::group(
    ['middleware' => 'web', 'prefix' => 'izblog', 'namespace' => 'Modules\IzBlog\Http\Controllers'],
    function () {
        Route::controller('/post', 'PostController');
        Route::controller('/believe', 'BelieveController');
        Route::controller('/', 'HomeController');
    });