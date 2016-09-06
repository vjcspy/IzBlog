<?php

Route::group(
    ['middleware' => 'web', 'prefix' => 'izblog', 'namespace' => 'Modules\IzBlog\Http\Controllers'],
    function () {
        Route::controller('/post', 'PostController');
        Route::controller('/articletable', 'PostDataTableController');
        Route::controller('/believe', 'BelieveController');
        Route::controller('/', 'HomeController');
    });