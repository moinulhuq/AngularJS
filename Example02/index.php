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


4. Two-way Binding with "ng-controller".

<div ng-app="myApp" ng-controller="myCtrl">

    <input ng-model="firstname">
    <h1>{{firstname}}</h1>

</div>

<script>

	var app = angular.module('myApp', []);
	
	app.controller('myCtrl', function($scope) {
	    $scope.firstname = "John";
	    $scope.lastname = "Doe";
	});

</script>


5. "ng-controller" used with "ng-click"

<div ng-app="myApp" ng-controller="myCtrl">

    <h1 ng-click="changeName()">{{firstname}}</h1>

</div>

<script>

	var app = angular.module('myApp', []);

	app.controller('myCtrl', function($scope) {
	    $scope.firstname = "John";
	    $scope.changeName = function() {
	        $scope.firstname = "Nelly";
	    }
	});

</script>
