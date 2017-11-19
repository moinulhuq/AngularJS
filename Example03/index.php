1. AngularJS Filters to Expressions

<div ng-app="myApp" ng-controller="personCtrl">

	<p>The name is {{ lastName | uppercase }}</p>

	<p>The name is {{ lastName | lowercase }}</p>

	<p>Rate is {{ price | currency }}</p>

</div>

<script>

	angular.module('myApp', []).controller('personCtrl', function($scope) {
	    $scope.firstName = "John",
	    $scope.lastName = "Doe",
	    $scope.price = 58;
	});

</script>


2. Adding Filters to Directives

<div ng-app="myApp" ng-controller="namesCtrl">

	<ul>
	  <li ng-repeat="x in names | orderBy:'country'">
	    {{ x.name + ', ' + x.country }}
	  </li>
	</ul>

</div>

<script>

	angular.module('myApp', []).controller('namesCtrl', function($scope) {
	    $scope.names = [
	        {name:'Jani',country:'Norway'},
	        {name:'Carl',country:'Sweden'},
	        {name:'Margareth',country:'England'},
	        {name:'Hege',country:'Norway'},
	        {name:'Joe',country:'Denmark'},
	        {name:'Gustav',country:'Sweden'},
	        {name:'Birgit',country:'Denmark'},
	        {name:'Mary',country:'England'},
	        {name:'Kai',country:'Norway'}
	        ];
	});

</script>


3. Adding "filter" keyword to Directives. "filter" can only be used on arrays, and it returns an array containing only the matching items.

<div ng-app="myApp" ng-controller="namesCtrl">

	<ul>
	  <li ng-repeat="x in names | filter : 'i'">
	    {{ x }}
	  </li>
	</ul>

</div>

<script>

angular.module('myApp', []).controller('namesCtrl', function($scope) {
    $scope.names = [
        'Jani',
        'Carl',
        'Margareth',
        'Hege',
        'Joe',
        'Gustav',
        'Birgit',
        'Mary',
        'Kai'
    ];
});

</script>


4. Filter an Array Based on User Input

<div ng-app="myApp" ng-controller="namesCtrl">

	<input type="text" ng-model="test">

	<ul>
	  <li ng-repeat="x in names | filter:test">
	    {{ x }}
	  </li>
	</ul>

</div>

<script>

angular.module('myApp', []).controller('namesCtrl', function($scope) {
    $scope.names = [
        'Jani',
        'Carl',
        'Margareth',
        'Hege',
        'Joe',
        'Gustav',
        'Birgit',
        'Mary',
        'Kai'
    ];
});

</script>


5. Order an array

<div ng-app="myApp" ng-controller="sortCtrl" >

	<table>
		<tr>
			<td> name</td>
			<td> addr</td>
		</tr>
		<tr ng-repeat=" x in names | orderBy: 'addr' ">
			<td >
				{{ x.name }}
			</td>
			<td >
				{{ x.addr }}
			</td>
		</tr>
	</table>

</div>

<script>

	var app = angular.module('myApp',[]);

	app.controller("sortCtrl", function($scope){
		
		$scope.names = [
						{name:'moin', addr: 'b'}, 
						{name:'tanim', addr: 'a'}, 
						{name:'shajib', addr: 'c'}, 
						];
	});

</script>


6. Order an array using user input

<div ng-app="myApp" ng-controller="sortCtrl" >

	<table>
		<tr>
			<td ng-click="sortMe('name')"> name</td>
			<td ng-click="sortMe('addr')"> addr</td>
		</tr>
		<tr ng-repeat=" x in names | orderBy: filt ">
			<td >
				{{ x.name }}
			</td>
			<td >
				{{ x.addr }}
			</td>
		</tr>
	</table>

</div>

<script>

	var app = angular.module('myApp',[]);

	app.controller("sortCtrl", function($scope){
		
		$scope.names = [
						{name:'moin', addr: 'b'}, 
						{name:'tanim', addr: 'a'}, 
						{name:'shajib', addr: 'c'}, 
						];

		$scope.sortMe = function($x){
			$scope.filt = $x;
		}
	});

</script>
