(function (angular) {
    "use strict";
    angular.module('app')
        .controller('BlogArticleCtrl', ['$scope', function ($scope) {
            $scope.tinymceModel = 'Initial content';

            $scope.getContent = function () {
                console.log('Editor content:', $scope.tinymceModel);
            };

            $scope.setContent = function () {
                $scope.tinymceModel = 'Time: ' + (new Date());
            };

            $scope.tinymceOptions = {
                selector: 'textarea',
                height: 500,
                theme: 'modern',
                plugins: [
                    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                    'searchreplace wordcount visualblocks visualchars code fullscreen',
                    'insertdatetime media nonbreaking save table contextmenu directionality',
                    'emoticons template paste textcolor colorpicker textpattern imagetools'
                ],
                toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
                toolbar2: 'print preview media | forecolor backcolor emoticons'
            };
        }]);
})(angular);