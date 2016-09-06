<?php
/**
 * Created by IntelliJ IDEA.
 * User: vjcspy
 * Date: 6/23/16
 * Time: 9:19 PM
 */

namespace modules\IzBlog\Providers;


use Illuminate\Support\ServiceProvider;

class OverMenuServiceProvider extends ServiceProvider {

    public function boot() {
        /** @var \Modules\IzCore\Repositories\IzMenu $izMenu */
        $izMenu = $this->app['izMenu'];

        $izAdminNav = $izMenu->getMenu('izAdminNav');

        if ($izMenu->getParentNamePosition($izAdminNav, 'blog_post')) {

        }
        else {
            $izMenu->addMenu(
                'izAdminNav',
                [
                    [
                        'name_id'       => 'post',
                        'name'          => 'Post',
                        'url'           => 'post',
                        'badge'         => '1',
                        'icon-class'    => 'icon mdi-editor-border-color i-20',
                        'priority'      => 3,
                        'active-router' => 'post',
                        'children'      => [
                            [
                                'name'     => 'Categories',
                                'url'      => 'post.categories',
                                'priority' => 2
                            ],
                            [
                                'name'     => 'Article',
                                'url'      => 'post.article',
                                'priority' => 1
                            ],
                            [
                                'name'     => 'Article Crud',
                                'url'      => 'post.articlecrud',
                                'priority' => 3
                            ]
                        ]
                    ],
                ]);
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