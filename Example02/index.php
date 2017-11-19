1. AngularJS Module contain 

	Different parts of an application 
	Application controllers (Controllers always belong to a module)


2. To create a module use "angular.module" 

<div ng-app="myApp">...</div>

<script>

  var app = angular.module("myApp", []); 

</script>


3. Next to add controller use "ng-controller"

<div ng-app="myApp" ng-controller="myCtrl">

	{{ firstName + " " + lastName }}

</div>

<script>

var app = angular.module("myApp", []);

	app.controller("myCtrl", function($scope) {
	    $scope.firstName = "John";
	    $scope.lastName = "Doe";
	});

</script>
