angular.module('app')
    .run(
        ['$rootScope', '$state', '$stateParams',
            function ($rootScope, $state, $stateParams) {
                $rootScope.$state = $state;
                $rootScope.$stateParams = $stateParams;
            }
        ]
    )
    .config(
        ['$stateProvider', '$urlRouterProvider', 'MODULE_CONFIG',
            function ($stateProvider, $urlRouterProvider, MODULE_CONFIG) {
                $stateProvider
                    .state('post', {
                        abstract: true,
                        url: '/post',
                        views: {
                            '': {
                                templateUrl: 'modules/themes/admin.default/assets/views/layout.html'
                            },
                            'aside': {
                                templateUrl: 'modules/themes/admin.default/assets/views/aside.html'
                            },
                            'content': {
                                templateUrl: 'modules/themes/admin.default/assets/views/content.html'
                            }
                        },
                        resolve: {
                            authenticate: function ($q, IzSentinel, $state) {
                                var defer = $q.defer();
                                IzSentinel.authenticate().then(function (isLogged) {
                                    if (!isLogged)
                                        return $state.go('access.signin');
                                    else
                                        return defer.resolve(true);
                                });
                                return defer.promise;
                            },
                            postCategory: function (BlogCategory) {
                                return BlogCategory.getCategoriesFromServer();
                            }
                        }
                    })
                    .state('post.categories', {
                        url: '/categories',
                        data: {title: 'Danh mục bài viết', folded: true},
                        templateUrl: "modules/themes/admin.default/assets/views/blog/post/categories.html",
                        controller: 'BlogCategoryCtrl',
                        resolve: {
                            deps: load(
                                [
                                    'xeditable',
                                    'modules/themes/admin.default/assets/scripts/controllers/blog/post/category.js'
                                ]
                            ).deps,
                            postCategories: function (BlogCategory) {
                                return BlogCategory.getCategoriesFromServer();
                            }
                        }
                    })
                    .state('post.article', {
                        url: '/article/:articleId',
                        data: {title: 'Bài viết', folded: true},
                        templateUrl: "modules/themes/admin.default/assets/views/blog/post/article.html",
                        controller: 'BlogArticleCtrl',
                        resolve: {
                            deps: load(
                                [
                                    'modules/themes/admin.default/assets/scripts/controllers/blog/post/article.js',
                                    'tinymce'
                                ]
                            ).deps,
                            articleData: function ($stateParams, Article) {
                                if (!!$stateParams['articleId']) {
                                    return Article.getCurrentArticle($stateParams['articleId']);
                                } else
                                    return {};
                            },
                            categoriesData: function (BlogCategory) {
                                return BlogCategory.getCategoryForArticle();
                            }
                        }
                    })
                    .state('post.articlecrud', {
                        url: '/articlecrud',
                        data: {title: 'Bài viết', folded: true},
                        templateUrl: "modules/themes/admin.default/assets/views/blog/post/article_list.html",
                        controller: 'ArticleCrudCtrl',
                        resolve: {
                            deps: load(
                                [
                                    'modules/themes/admin.default/assets/scripts/controllers/blog/post/articlecrud.js',
                                ]
                            ).deps,
                            categoriesData: function (BlogCategory) {
                                return BlogCategory.getCategoryForArticle();
                            }
                        }
                    })
                    .state('system.setting', {
                        url: '/setting',
                        data: {title: 'Setting', folded: true},
                        templateUrl: "modules/themes/admin.default/assets/views/system/setting.html",
                        controller: 'SystemSettingCtrl',
                        resolve: {
                            deps: load(
                                [
                                    'xeditable',
                                    'modules/themes/admin.default/assets/scripts/controllers/blog/system/setting.js'
                                ]
                            ).deps
                        }
                    })
                ;

                function load(srcs, callback) {
                    return {
                        deps: ['$ocLazyLoad', '$q',
                            function ($ocLazyLoad, $q) {
                                var deferred = $q.defer();
                                var promise = false;
                                srcs = angular.isArray(srcs) ? srcs : srcs.split(/\s+/);
                                if (!promise) {
                                    promise = deferred.promise;
                                }
                                angular.forEach(srcs, function (src) {
                                    promise = promise.then(function () {
                                        var name;
                                        angular.forEach(MODULE_CONFIG, function (module) {
                                            if (module.name == src) {
                                                if (!module.module) {
                                                    name = module.files;
                                                } else {
                                                    name = module.name;
                                                }
                                            } else {
                                                name = src;
                                            }
                                        });
                                        return $ocLazyLoad.load(name);
                                    });
                                });
                                deferred.resolve();
                                return callback ? promise.then(function () {
                                    return callback();
                                }) : promise;
                            }]
                    }
                }
            }
        ]
    );
