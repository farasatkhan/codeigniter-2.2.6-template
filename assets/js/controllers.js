myApp.controller('HomeController', ['$scope', '$http', 
    function($scope, $http) {
        $scope.message = "Home Screen";
    }
]);

myApp.controller('LoginController', ['$scope', '$http', '$location',
    function($scope, $http, $location) {
        $scope.message = "Login Screen";
        $scope.credentials = {
            username: '',
            password: ''
        };
        $scope.error = '';

        $scope.login = function() {
        };
    }
]);