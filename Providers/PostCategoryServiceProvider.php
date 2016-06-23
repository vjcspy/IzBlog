<?php
/**
 * Created by IntelliJ IDEA.
 * User: vjcspy
 * Date: 6/23/16
 * Time: 10:28 PM
 */

namespace Modules\IzBlog\Providers;


use Illuminate\Support\ServiceProvider;

class PostCategoryServiceProvider extends ServiceProvider {

    public function boot() {
        //app()['blogCategory']->dummyCategory();
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register() {
        // TODO: Implement register() method.
        $this->app->singleton(
            'blogCategory',
            function ($app) {
                return $app->make('\Modules\IzBlog\Repositories\PostCategory');
            });
    }
}