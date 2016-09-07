/**
 * Created by vjcspy on 2/5/16.
 */
app.controller('ArticleCrudCtrl', ['$scope', '$timeout', 'IzAdminConfigService', '$state', 'categoriesData', '_',
    function ($scope, $timeout, IzAdminConfigService, $state, categoriesData, _) {
        /*Config Data table*/
        $scope.dataTable = {
            article: null,
            tableOptions: {
                processing: true,
                serverSide: true,
                "scrollX": true,
                "paging": true,
                scrollCollapse: true,
                responsive: true,
                ajax: IzAdminConfigService.getConfig('article_table_url', 'admin'),
                "columns": [
                    {"data": "id"},
                    {"data": "post_title"},
                    {"data": "post_short_content"},
                    {
                        "data": "category_id",
                        "render": function (data, type, full, meta) {
                            var cat = _.find(categoriesData, function (obj) {
                                return obj.id == data;
                            });
                            if (_.isObject(cat))
                                return cat.label;
                            else
                                return '';
                        }
                    },
                    // {"data": "image_title_url"}
                ],
                "columnDefs": [ //FIXME: HAVE TO FILTER BY CLASS, sẽ chuyển cái này thành code
                    {className: "id", "targets": [0]},
                    {className: "post_title", "targets": [1]},
                    {className: "post_short_content", "targets": [2]},
                    {className: "category_id", "targets": [3]},
                    // {className: "image_title_url", "targets": [4]}
                ]
            },
            filterConfig: [
                {
                    columnId: "id",
                    name: "Id",
                    show: true,
                    filterType: "text",
                    filterChecked: false
                },
                {
                    columnId: "post_title",
                    name: "Title",
                    show: true,
                    filterType: "text",
                    filterChecked: false
                },
                {
                    columnId: "post_short_content",
                    name: "Short Content",
                    show: true,
                    filterType: "text",
                    filterChecked: false
                },
                // {
                //     columnId: "category_id",
                //     name: "Category Id",
                //     show: true,
                //     filterType: "text",
                //     filterChecked: false
                // },
                // {
                //     columnId: "image_title_url",
                //     name: "Image Url",
                //     show: true,
                //     filterType: "text",
                //     filterChecked: false
                // }
            ],
            editorOptions: [
                {
                    id: "id",
                    title: "Id",
                    type: 'text',
                    editAble: false
                },
                {
                    id: "title",
                    title: "Title",
                    type: 'text',
                    editAble: true
                },
                {
                    id: "short_content",
                    title: "Short Content",
                    type: 'editor',
                    editAble: true
                },
                {
                    id: "article_type",
                    title: "Article Type",
                    type: 'text',
                    editAble: true
                },
                {
                    id: "image_title_url",
                    title: "Url Image",
                    type: 'fileUpload',
                    editAble: true
                }
            ]
        };
        $scope.$on('click_selected_row_article_grid', function (event, data) {
            $state.go('post.article', {articleId: data.id});
        });
        $scope.$on('add_new_record_izdatatablearticle_grid', function (event, data) {
            $state.go('post.article');
        });
    }
]);
