(function (angular) {
    "use strict";
    angular.module('app')
        .directive('izBlogCategory', ['$q', function ($q) {
            return {
                restrict: "EAC",
                templateUrl: "modules/themes/admin.default/assets/views/blog/directives/catalog.html",
                link: function (scope, elem, attrs) {

                },
                controller: ['$scope', 'BlogCategory', function ($scope, BlogCategory) {
                    $scope.categories = BlogCategory.getCategories();
                    $scope.remove = function (scope) {
                        scope.remove();
                    };

                    $scope.toggle = function (scope) {
                        scope.toggle();
                    };

                    $scope.moveLastToTheBeginning = function () {
                        var a = $scope.data.pop();
                        $scope.data.splice(0, 0, a);
                    };

                    $scope.newSubItem = function (scope) {
                        var nodeData = scope.$modelValue;
                        nodeData.nodes.push({
                            id: nodeData.id * 10 + nodeData.nodes.length,
                            title: nodeData.title + '.' + (nodeData.nodes.length + 1),
                            nodes: []
                        });
                    };

                    $scope.collapseAll = function () {
                        $scope.$broadcast('angular-ui-tree:collapse-all');
                    };

                    $scope.expandAll = function () {
                        $scope.$broadcast('angular-ui-tree:expand-all');
                    };
                }]
            };
        }]);

})(angular);