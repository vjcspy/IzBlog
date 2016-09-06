/**
 * Created by vjcspy on 2/5/16.
 */
app.controller('ArticleCrudCtrl', ['$scope', '$timeout', 'IzAdminConfigService', function ($scope, $timeout, IzAdminConfigService) {
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
                {"data": "post_type"},
                // {"data": "image_title_url"}
            ],
            "columnDefs": [ //FIXME: HAVE TO FILTER BY CLASS, sẽ chuyển cái này thành code
                {className: "id", "targets": [0]},
                {className: "post_title", "targets": [1]},
                {className: "post_short_content", "targets": [2]},
                {className: "post_type", "targets": [3]},
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
            {
                columnId: "post_type",
                name: "Article Type",
                show: true,
                filterType: "text",
                filterChecked: false
            },
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
}
]);
