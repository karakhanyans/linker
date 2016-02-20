app.controller('LinkController',['$scope','$http',function($scope,$http){

    $scope.links = [];
    $scope.init = function(){
        $http.get('link/get_links').
            success(function (data, status, headers, config) {
                $scope.links = data;
            });
    }
    $scope.init();
}]);