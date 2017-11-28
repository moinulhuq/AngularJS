AngularJS has many built-in services like

1. "$location" used to get the location of the current web page. works like javascript "window.location".

<div ng-app="myApp" ng-controller="myCtrl">

	<h3>{{myUrl}}</h3>

</div>

<script>

	var app = angular.module('myApp', []);

	app.controller('myCtrl', function($scope, $location) {
	    $scope.myUrl = $location.absUrl();
	});

</script>

2. "$timeout" service in AngularJS works like "window.setTimeout".

<div ng-app="myApp" ng-controller="myCtrl"> 

	<h1>{{myHeader}}</h1>

</div>

<script>

	var app = angular.module('myApp', []);

	app.controller('myCtrl', function($scope, $timeout) {
	  $scope.myHeader = "Hello World!";
	  $timeout(function () {
	      $scope.myHeader = "How are you today?";
	  }, 2000);
	});

</script>

3. "$interval" service in AngularJS works like "window.setInterval".

<div ng-app="myApp" ng-controller="myCtrl"> 

	<h1>{{theTime}}</h1>

</div>

<script>

	var app = angular.module('myApp', []);
	
	app.controller('myCtrl', function($scope, $interval) {
	  $scope.theTime = new Date().toLocaleTimeString();
	  $interval(function () {
	      $scope.theTime = new Date().toLocaleTimeString();
	  }, 1000);
	});

</script>
