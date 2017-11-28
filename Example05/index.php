1. AngularJS "$http" service makes a request to the server, and returns a response.

welcome.htm
-----------

Hello AngularJS


index.php
----------
<div ng-app="myApp" ng-controller="myCtrl"> 

	<h1>{{myWelcome}}</h1>

</div>

<script>

	var app = angular.module('myApp', []);
	
	app.controller('myCtrl', function($scope, $http) {
	  $http.get("welcome.htm")
	  .then( function(response) { $scope.myWelcome = response.data; } );
	});

</script>

2. "$http" service ".get()" method page "Not Found" example

welcome.htm
-----------

Hello AngularJS


index.php
----------
<div ng-app="myApp" ng-controller="myCtrl"> 

	<h1>{{myWelcome}}</h1>

</div>

<script>

	var app = angular.module('myApp', []);
	
	app.controller('myCtrl', function($scope, $http) {
	  $http({
			    method : "GET",
			    url : "welcome.htm"
	  		})
	  .then(
		  		function mySuccess(response) {$scope.myWelcome = response.data;}, 
		  		function myError(response) {$scope.myWelcome = response.statusText;}
	  		);
	});

</script>

3. "$http" service ".get()" method JSON response example

customers.php
--------------

{  
   "recordss":[  
      {  
         "Name":"Alfreds Futterkiste",
         "City":"Berlin",
         "Country":"Germany"
      },
      {  
         "Name":"Ana Trujillo Emparedados y helados",
         "City":"México D.F.",
         "Country":"Mexico"
      }
	]
}


index.php
---------
<div ng-app="myApp" ng-controller="customersCtrl"> 

	<table>
	  <tr ng-repeat="x in myData">
	    <td> {{ x.Name }} </td> 
	    <td> {{ x.Country }} </td>
	  </tr>
	</table>

</div>

<script>

	var app = angular.module('myApp', []);

	app.controller('customersCtrl', function($scope, $http) {
	  $http.get("customers.php")
	  .then(function (response) { $scope.myData = response.data.recordss; } );
	});

</script>
