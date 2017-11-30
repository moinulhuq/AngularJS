1. Include AngularJS Code from external file.

myTable.htm
------------
<table>
  <tr ng-repeat="x in names">
    <td>{{ x.Name }}</td>
    <td>{{ x.Country }}</td>
  </tr>
</table>


index.php
---------
<div ng-app="myApp" ng-controller="customersCtrl"> 
  <div ng-include="'myTable.htm'"></div>
</div>

<script>

  var app = angular.module('myApp', []);

  app.controller('customersCtrl', function($scope) {
    $scope.names = [
                  {Name:'Jani',Country:'Norway'},
                  {Name:'Hege',Country:'Sweden'},
                  {Name:'Kai',Country:'Denmark'}
                ];
  });

</script>


2. AngularJS Routing

To make your applications ready for routing, you must include the AngularJS Route module:

  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-route.js"></script>

Then you must add the ngRoute as a dependency in the application module:

  var app = angular.module("myApp", ["ngRoute"]);

Now your application has access to the route module, which provides the $routeProvider.

  app.config(function($routeProvider) {
      $routeProvider
      .when("/", {
        templateUrl : "main.htm"
      });
  });

Your application needs a container to put the content provided by the routing.

  <div ng-view></div>


Example01:
-------------------------------

main.php
--------
<h1>Hello from Main page </h1>

red.php
--------
<p>Hello from Red page </p>

green.php
--------
<span>Hello from Green page </span>

index.php
---------

<body ng-app="myApp">

  <a href="#/!">Main</a>
  <a href="#!red">Red</a>
  <a href="#!green">Green</a>

  <div ng-view></div>

  <script>

    var app = angular.module("myApp", ["ngRoute"]);
    
    app.config(function($routeProvider) {
        $routeProvider
        .when("/", {
            templateUrl : "main.php"
        })
        .when("/red", {
            templateUrl : "red.php"
        })
        .when("/green", {
            templateUrl : "green.php"
        });
    });

  </script>
</body>


Example02:
-------------------------------

Here you can write direcly HTML code using "template" property.

<body ng-app="myApp">

  <a href="#/!">Main</a>
  <a href="#!red">Red</a>
  <a href="#!green">Green</a>

  <div ng-view></div>

  <script>

    var app = angular.module("myApp", ["ngRoute"]);
    
    app.config(function($routeProvider) {
        $routeProvider
        .when("/", {
            template : "<h1>Hello from Main page </h1>"
        })
        .when("/red", {
            template : "<p>Hello from Red page </p>"
        })
        .when("/green", {
            template : "<span>Hello from Green page </span>"
        });
    });

  </script>
</body>


Example02:
-------------------------------

Here If nothing is seleted then you can write default route property "otherwise".  which is the default route when none of the others get a match.

<body ng-app="myApp">

  <a href="#/!">Main</a>
  <a href="#!red">Red</a>
  <a href="#!green">Green</a>

  <div ng-view></div>

  <script>

    var app = angular.module("myApp", ["ngRoute"]);
    
    app.config(function($routeProvider) {
        $routeProvider
        .when("/main", {
            template : "<h1>Hello from Main page </h1>"
        })
        .when("/red", {
            template : "<p>Hello from Red page </p>"
        })
        .when("/green", {
            template : "<span>Hello from Green page </span>"
        })
        .otherwise({
            template : "<h1>None</h1><p>Nothing has been selected</p>"
      });
    });

  </script>
</body>


Example03:
-------------------------------

With the $routeProvider you can also define a controller for each "view".


main.php
--------
<h1>Hello from Main page </h1>

red.php
--------
<p>Hello from Red page </p>
  {{msg}}

green.php
--------
<span>Hello from Green page </span>
  {{msg}}

index.php
---------
<body ng-app="myApp">

  <a href="#/!">Main</a>
  <a href="#!red">Red</a>
  <a href="#!green">Green</a>

  <div ng-view></div>

  <script>

    var app = angular.module("myApp", ["ngRoute"]);
    
    app.config(function($routeProvider) {
        $routeProvider
        .when("/", {
            templateUrl : "main.php"
        })
        .when("/red", {
            templateUrl : "red.php",
            controller : "redCtrl"
        })
        .when("/green", {
            templateUrl : "green.php",
            controller : "greenCtrl"
        });
    });

    app.controller("redCtrl", function ($scope) {
        $scope.msg = "I love Red";
    });

    app.controller("greenCtrl", function ($scope) {
        $scope.msg = "I love Green";
    });

  </script>
</body>
