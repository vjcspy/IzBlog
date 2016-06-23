<?php
/**
 * Created by IntelliJ IDEA.
 * User: vjcspy
 * Date: 23/06/2016
 * Time: 15:05
 */

namespace Modules\IzBlog\Providers;


use Illuminate\Database\QueryException;
use Illuminate\Support\ServiceProvider;
use Log;

class DeclareThemeServiceProvider extends ServiceProvider {

    public function boot() {
        /*Register theme*/
        /** @var \Modules\IzCore\Repositories\Theme $izTheme */
        $izTheme = app()['izTheme'];
        try {
            $izTheme->registerTheme('frontend.default', $isFrontend = false);
        } catch (\Exception $e) {
            // truong hop moi tao app chua co table
            Log::error($e->getMessage());
        }
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