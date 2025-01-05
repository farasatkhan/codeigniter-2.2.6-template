<!DOCTYPE html>
<html ng-app="myApp">
<head>
    <title>CodeIgniter 2.2.6 + Angular 1.8.x</title>
    <!-- Angular Dependencies -->
    <script src="<?php echo base_url('bower_components/angular/angular.min.js'); ?>"></script>
    <script src="<?php echo base_url('bower_components/angular-route/angular-route.min.js'); ?>"></script>
    
    <!-- Your Angular App -->
    <script src="<?php echo base_url('assets/js/app.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/controllers.js'); ?>"></script>
</head>
<body>
    <div ng-view></div>
</body>
</html>