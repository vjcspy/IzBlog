/**
 * Created by vjcspy on 23/06/2016.
 */
(function (angular) {
    "use strict";
    angular.module('app')
        .directive('izBlogCategory', ['$q', function ($q) {
            return {
                restrict: "EAC",
                templateUrl: "modules/themes/admin.default/assets/views/blog/directives/catalog.html",
                link: function (scope, elem, attrs) {

                },
                controller: ['$scope', function ($scope) {

                }]
            };
        }]);

})(angular);