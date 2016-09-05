/**
 * Created by vjcspy on 23/06/2016.
 */
(function (angular) {
    "use strict";
    angular.module('app')
        .controller('BlogCategoryCtrl', ['$scope', '$timeout', 'BlogCategory', '_', function ($scope, $timeout, BlogCategory, _) {
            var apple_selected, tree, treedata_avm, treedata_geography;
            $scope.optionsEnableCate = [
                {'id': 0, 'label': 'Disable'},
                {'id': 1, 'label': 'Enable'}
            ];
            $scope.my_tree_handler = function (branch) {
                var _ref;
                $scope.output = "You selected: " + branch.label;
                $scope.selectedCat = branch;
                if ((_ref = branch.data) != null ? _ref.description : void 0) {
                    return $scope.output += '(' + branch.data.description + ')';
                }
            };
            apple_selected = function (branch) {
                return $scope.output = "APPLE! : " + branch.label;
            };
            treedata_avm = [
                {
                    label: 'Animal',
                    children: [
                        {
                            label: 'Dog',
                            data: {
                                description: "man's best friend"
                            }
                        }, {
                            label: 'Cat',
                            data: {
                                description: "Felis catus"
                            }
                        }, {
                            label: 'Hippopotamus',
                            data: {
                                description: "hungry, hungry"
                            }
                        }, {
                            label: 'Chicken',
                            children: ['White Leghorn', 'Rhode Island Red', 'Jersey Giant']
                        }
                    ]
                }, {
                    label: 'Vegetable',
                    data: {
                        definition: "A plant or part of a plant used as food, typically as accompaniment to meat or fish, such as a cabbage, potato, carrot, or bean.",
                        data_can_contain_anything: true
                    },
                    onSelect: function (branch) {
                        return $scope.output = "Vegetable: " + branch.data.definition;
                    },
                    children: [
                        {
                            label: 'Oranges'
                        }, {
                            label: 'Apples',
                            children: [
                                {
                                    label: 'Granny Smith',
                                    onSelect: apple_selected
                                }, {
                                    label: 'Red Delicous',
                                    onSelect: apple_selected
                                }, {
                                    label: 'Fuji',
                                    onSelect: apple_selected
                                }
                            ]
                        }
                    ]
                }, {
                    label: 'Mineral',
                    children: [
                        {
                            label: 'Rock',
                            children: ['Igneous', 'Sedimentary', 'Metamorphic']
                        }, {
                            label: 'Metal',
                            children: ['Aluminum', 'Steel', 'Copper']
                        }, {
                            label: 'Plastic',
                            children: [
                                {
                                    label: 'Thermoplastic',
                                    children: ['polyethylene', 'polypropylene', 'polystyrene', ' polyvinyl chloride']
                                }, {
                                    label: 'Thermosetting Polymer',
                                    children: ['polyester', 'polyurethane', 'vulcanized rubber', 'bakelite', 'urea-formaldehyde']
                                }
                            ]
                        }
                    ]
                }
            ];
            $scope.my_data = BlogCategory.getCategories();
            $scope.try_changing_the_tree_data = function () {
                if ($scope.my_data === treedata_avm) {
                    return $scope.my_data = treedata_geography;
                } else {
                    return $scope.my_data = treedata_avm;
                }
            };
            $scope.my_tree = tree = {};
            $scope.try_async_load = function () {
                $scope.my_data = [];
                $scope.doing_async = true;
                return $timeout(function () {
                    if (Math.random() < 0.5) {
                        $scope.my_data = treedata_avm;
                    } else {
                        $scope.my_data = treedata_geography;
                    }
                    $scope.doing_async = false;
                    $timeout(function () {
                        return tree.expand_all();
                    }, 100);
                    return tree.expand_all();
                }, 1000);
            };
            $scope.try_adding_a_branch = function () {
                if ($scope.newCatName == '' || !$scope.newCatName)
                    return;
                $scope.doing_async = true;
                var b;
                b = tree.get_selected_branch();
                BlogCategory.createNewCate({
                    name: $scope.newCatName,
                    label: $scope.newCatName,
                    parentId: b.id,
                    enable: 1
                }).then(function () {
                    $scope.my_data = BlogCategory.getCategories();
                    $scope.doing_async = false;
                    $timeout(function () {
                        return tree.expand_all();
                    }, 100);
                    return $scope.my_tree.expand_all();
                });
            };
            $scope.saveDataCategory = function () {
                BlogCategory.saveDataCategory($scope.selectedCat).then(function () {
                    $scope.my_data = BlogCategory.getCategories();
                    $scope.doing_async = false;
                    $timeout(function () {
                        return tree.expand_all();
                    }, 100);
                    return $scope.my_tree.expand_all();
                });
            }
        }]);
})(angular);