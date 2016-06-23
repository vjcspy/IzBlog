<?php
/**
 * Created by IntelliJ IDEA.
 * User: vjcspy
 * Date: 23/06/2016
 * Time: 14:38
 */

namespace Modules\IzBlog\Providers;


class DeclareViewServiceProvider extends \Illuminate\Support\ServiceProvider {

    public function boot() {
        /** @var \Modules\IzBlog\Repositories\Theme\Views\ViewManagement $blogView */
        $blogView = app()['blogView'];
        
        $blogView->registerView('\Modules\IzBlog\Repositories\Theme\Views\PostGridDefault');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register() {
        // TODO: Implement register() method.
    }
}