(function (angular) {
    "use strict";
    angular.module('app')
        .service('BlogCategory', ['$q', '$http', 'IzAdminConfigService', function ($q, $http, IzAdminConfigService) {
            var categories;
            this.getCategoriesFromServer = function () {
                var defer = $q.defer();
                $http.get(IzAdminConfigService.getConfig('blog_post_url','admin') + '/categories').then(function (res) {
                    console.log(res.data);
                    return defer.resolve(true);
                });
                return defer.promise;
            };
            this.getCategories = function () {

            };
        }]);
})(angular);