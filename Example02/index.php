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


6. Another example of "ng-controller"

<div ng-app="myApp" ng-controller="personCtrl">

	<input type="text" ng-model="firstName"><br>
	
	<input type="text" ng-model="lastName"><br>
	
	{{fullName()}}

</div>

<script>

	var app = angular.module('myApp', []);

	app.controller('personCtrl', function($scope) {
	    $scope.firstName = "John";
	    $scope.lastName = "Doe";
	    $scope.fullName = function() {
	        return $scope.firstName + " " + $scope.lastName;
	    };
	});

</script>


7. Controllers In External Files

<div ng-app="myApp" ng-controller="personCtrl">

	<input type="text" ng-model="firstName"><br>
	
	<input type="text" ng-model="lastName"><br>
	
	{{fullName()}}

</div>

<script src="personController.js"></script>


8. Another example of Controllers In External Files

<div ng-app="myApp" ng-controller="namesCtrl">

<ul>
  <li ng-repeat="x in names">
    {{ x.name + ', ' + x.country }}
  </li>
</ul>

</div>

<script src="namesController.js"></script>

namesController.js
-------------------

angular.module('myApp', []).controller('namesCtrl', function($scope) {
    $scope.names = [
        {name:'Jani',country:'Norway'},
        {name:'Hege',country:'Sweden'},
        {name:'Kai',country:'Denmark'}
    ];
});
