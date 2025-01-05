var myApp = angular.module('myApp', ['ngRoute']);

myApp.config(['$routeProvider', '$locationProvider', 
    function($routeProvider, $locationProvider) {
        $routeProvider
            .when('/', {
                templateUrl: 'templates/home',
                controller: 'HomeController'
            })
            .when('/login', {
                templateUrl: 'templates/login',
                controller: 'LoginController'
            })
            .otherwise({
                redirectTo: '/'
            });
            
        $locationProvider.html5Mode({
            enabled: true,
            requireBase: false
        });
    }
]);