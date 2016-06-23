<?php
/**
 * Created by IntelliJ IDEA.
 * User: vjcspy
 * Date: 23/06/2016
 * Time: 15:05
 */

namespace Modules\IzBlog\Providers;


use Illuminate\Support\ServiceProvider;

class DeclareThemeServiceProvider extends ServiceProvider {

    public function boot() {
        /*Register theme*/
        /** @var \Modules\IzCore\Repositories\Theme $izTheme */
        $izTheme = app()['izTheme'];
        $izTheme->registerTheme('frontend.default', $isFrontend = false);
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