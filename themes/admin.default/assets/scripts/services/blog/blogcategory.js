(function (angular) {
    "use strict";
    angular.module('app')
        .service('BlogCategory', ['$q', '$http', 'IzAdminConfigService', function ($q, $http, IzAdminConfigService) {
            var categories;
            this.getCategoriesFromServer = function () {
                var defer = $q.defer();
                $http.get(IzAdminConfigService.getConfig('blog_post_url', 'admin') + '/categories').then(function (res) {
                    categories = res.data;
                    return defer.resolve(true);
                });
                return defer.promise;
            };
            this.createNewCate = function (cataData) {
                var defer = $q.defer();
                $http.post(IzAdminConfigService.getConfig('blog_post_url', 'admin') + '/categories', {data: cataData}).then(function (res) {
                    categories = res.data;
                    return defer.resolve(true);
                });
                return defer.promise;
            };
            this.saveDataCategory = function (cateData) {
                var defer = $q.defer();
                $http.post(IzAdminConfigService.getConfig('blog_post_url', 'admin') + '/category-data', {data: cateData}).then(function (res) {
                    categories = res.data;
                    return defer.resolve(true);
                });
                return defer.promise;
            };
            this.getCategories = function () {
                return [
                    {
                        name: 'ROOT CATEGORY',
                        label: 'ROOT CATEGORY',
                        children: categories,
                        id: 'ROOT'
                    }
                ]
            };
        }]);
})(angular);