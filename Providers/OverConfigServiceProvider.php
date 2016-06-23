<?php
/**
 * Created by IntelliJ IDEA.
 * User: vjcspy
 * Date: 6/23/16
 * Time: 11:21 PM
 */

namespace Modules\IzBlog\Providers;


use Illuminate\Support\ServiceProvider;

class OverConfigServiceProvider extends ServiceProvider {

    public function boot() {
        /** @var \Modules\IzCore\Repositories\CoreConfig $coreConfig */
        $coreConfig = $this->app['coreConfig'];
        $coreConfig->addConfigProvider('\Modules\IzBlog\Repositories\CoreConfig\AdminConfig', 'admin', 0);
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