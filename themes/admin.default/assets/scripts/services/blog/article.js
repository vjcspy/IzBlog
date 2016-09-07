/**
 * Created by vjcspy on 05/09/2016.
 */
(function (angular) {
    "use strict";
    angular.module('app')
        .service('Article', ['$q', '$http', 'IzAdminConfigService',
            function ($q, $http, IzAdminConfigService) {
                var currentArticle;
                this.getCurrentArticle = function (articleId) {
                    var defer = $q.defer();
                    $http.get(IzAdminConfigService.getConfig('blog_post_url', 'admin') + '/post?article_id=' + articleId).then(function (res) {
                        currentArticle = res.data;
                        return defer.resolve(currentArticle);
                    });
                    return defer.promise;
                };
                this.postArticle = function (articleData) {
                    var defer = $q.defer();
                    $http.post(IzAdminConfigService.getConfig('blog_post_url', 'admin') + '/post', {data: articleData}).then(function (res) {
                        currentArticle = res.data;
                        return defer.resolve(currentArticle);
                    });
                    return defer.promise;
                }
            }]);
})(angular);