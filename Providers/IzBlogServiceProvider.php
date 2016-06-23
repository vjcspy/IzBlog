<?php namespace Modules\Izblog\Providers;

use Illuminate\Support\ServiceProvider;

class IzBlogServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot() {
        $this->registerTranslations();
        $this->registerConfig();
        $this->registerViews();
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register() {
        $this->app->singleton(
            'blogMenu',
            function ($app) {
                return $app->make('\Modules\IzBlog\Repositories\MenuManagement');
            });

        $this->app->singleton(
            'blogView',
            function ($app) {
                return $app->make('\Modules\IzBlog\Repositories\Theme\Views\ViewManagement');
            });
        $this->app->singleton(
            'blogLayout',
            function ($app) {
                return $app->make('\Modules\IzBlog\Repositories\Theme\Layouts\LayoutManagement');
            }
        );
    }

    /**
     * Register config.
     *
     * @return void
     */
    protected function registerConfig() {
        $this->publishes(
            [
                __DIR__ . '/../Config/config.php' => config_path('izblog.php'),
            ]);
        $this->mergeConfigFrom(
            __DIR__ . '/../Config/config.php',
            'izblog'
        );
    }

    /**
     * Register views.
     *
     * @return void
     */
    public function registerViews() {
        $viewPath = base_path('resources/views/modules/izblog');

        $sourcePath = __DIR__ . '/../Resources/views';

        $this->publishes(
            [
                $sourcePath => $viewPath
            ]);

        $this->loadViewsFrom(
            array_merge(
                array_map(
                    function ($path) {
                        return $path . '/modules/izblog';
                    },
                    \Config::get('view.paths')),
                [$sourcePath]),
            'izblog');
    }

    /**
     * Register translations.
     *
     * @return void
     */
    public function registerTranslations() {
        $langPath = base_path('resources/lang/modules/izblog');

        if (is_dir($langPath)) {
            $this->loadTranslationsFrom($langPath, 'izblog');
        }
        else {
            $this->loadTranslationsFrom(__DIR__ . '/../Resources/lang', 'izblog');
        }
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides() {
        return [];
    }

}
