var app = angular.module('myApp', ['ngMaterial']);
app.controller('MyController', function ($scope, $http, $mdToast) {

    // $http.get('http://127.0.0.1:8000/admin/best-selling').       then(function(res){$scope.all  =res.data;},function(res){});
    $scope.all = [{
        'url': 'images/image_1.jpg'
    }, {
        'url': 'images/image_2.jpg'
    }, {
        'url': 'images/image_2.jpg'
    }, {
        'url': 'images/image_2.jpg'
    }, {
        'url': 'images/image_2.jpg'
    }, {
        'url': 'images/image_2.jpg'
    }, {
        'url': 'images/image_2.jpg'
    }, {
        'url': 'images/image_2.jpg'
    }]
    console.log('test controler');
    console.log($scope.all);


})
