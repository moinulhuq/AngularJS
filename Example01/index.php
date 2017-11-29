1. AngularJS scope will start with "ng-app" and AngularJS code must be inside the "ng-app" directives

<div ng-app="">
	
</div>


2. "ng-init" directive initializes AngularJS application variables and "ng-bind" will display that variable in innerHTML of that tag.

<div ng-app="" ng-init="firstName='Moin'">

	<p ng-bind="firstName"></p>

</div>


3. Alternatively use "{{ expression }}" to show that variable.

<div ng-app="" ng-init="firstName='Moin'">

	<p> {{ firstName }} </p>

</div>


4. AngularJS "ng-init" for initializing the multiple value.

<div ng-app="" ng-init="quantity=1;cost=5">

	<p>Total in dollar: {{ quantity * cost }}</p>

	<p>Total in dollar: <span ng-bind="quantity * cost"></span></p>

</div>


5. To show the variable value inside the <input> tag use "ng-model" in this case "ng-bind" can't display.

<div ng-app="" ng-init="name='Moin'">

	<input ng-model="name">

</div>


6. "ng-model" use for binding. Take input using "ng-model" and to dsiplay that value use either {{ }} or "ng-bind". 

<div ng-app="">

	<input type="text" ng-model="name">

	<p ng-bind="name"></p>

	{{name}}
	
</div>


7. "ng-model" use for multiple inputs.

<div ng-app="" >

	<input type="number" ng-model="quantity">
	<input type="number" ng-model="price">

	<p> {{quantity * price}}</p>

</div>


8. Validate User Input using "ng-model"

<form ng-app="" name="myForm">

    <input type="email" name="myAddress" ng-model="text">

    <span ng-show="myForm.myAddress.$error.email">Not a valid e-mail address</span>

</form>


9. AngularJS best example of binding.

<div ng-app="" ng-init="myColor='green'">

	<input style="background-color:{{myColor}}" ng-model="myColor">

</div>


10. AngularJS expression

<div ng-app="">

  <p>My first expression: {{ 5 + 5 }}</p>
  <p>My first expression: {{ "Moin" + " " + "Tanim" }}</p>

</div>


11. "ng-hide" directive hides or shows an HTML element.

<div ng-app="">

  <p ng-hide="true">I am not visible.</p>

  <p ng-hide="false">I am visible.</p>

</div>


12. "ng-show" directive shows or hides an HTML element.

<div ng-app="" ng-init="hour=13">

  <p ng-show="true">I am visible.</p>

  <p ng-show="false">I am not visible.</p>

  <p ng-show="hour > 12">I am visible.</p>

</div> 


13. "ng-disabled" to the disabled attribute of HTML elements.

<div ng-app="" ng-init="mySwitch=true">
  
  <button ng-disabled="mySwitch">Click Me!</button>
  
  <input type="checkbox" ng-model="mySwitch"/>Button
  
  {{ mySwitch }}

</div>


14. "ng-mousemove" directive example

<div ng-app="" ng-init="count = 0">

  <h1 ng-mousemove="count = count + 1">Mouse Over Me!</h1>

  <h2>{{ count }}</h2>

</div>


14. "ng-click" directive example

<div ng-app="" ng-init="count = 0">

  <button ng-click="count = count + 1">Click Me!</button>

  <h2>{{ count }}</h2>

</div>


15. Toggle, True/False

<div ng-app="myApp" ng-controller="myCtrl">

  <div ng-show="showMe">
      <h1>Hello AngularJS</h1>
  </div>

  <button ng-click="myFunc()">Click Me!</button>

</div>

<script>

  var app = angular.module('myApp', []);

  app.controller('myCtrl', function($scope) {
      $scope.showMe = false;
      $scope.myFunc = function() {
          $scope.showMe = true;
      }
  });

</script>


14. AngularJS Objects

<div ng-app="" ng-init="person={firstName:'John',lastName:'Doe'}">

	<p>The name is {{ person.lastName }}</p>

	<p>The name is <span ng-bind="person.lastName"></span></p>

</div>


15. AngularJS Arrays

<div ng-app="" ng-init="points=[1,15,19,2,40]">

	<p>The third result is {{ points[2] }}</p>

	<p>The third result is <span ng-bind="points[2]"></span></p>

</div>


16. "ng-repeat" used for repeating an HTML elements

<div ng-app="" ng-init="names=['Jani','Hege','Kai']">

  <ul>
    <li ng-repeat="x in names">
      {{ x }}
    </li>
  </ul>

</div>


17. "ng-repeat" directive used on an array of objects

<div ng-app="" ng-init="names=[
				{name:'Jani',country:'Norway'},
				{name:'Hege',country:'Sweden'},
				{name:'Kai',country:'Denmark'}
			      ]
">

<ul>
  <li ng-repeat="x in names">
    {{ x.name + ', ' + x.country }}
  </li>
</ul>

</div>


18. "ng-repeat" directive using table with index number

<div ng-app="" ng-init="names=[
				{name:'Jani',country:'Norway'},
				{name:'Hege',country:'Sweden'},
				{name:'Kai',country:'Denmark'}
			      ]
">

<table>
  <tr ng-repeat="x in names">
    <td>{{ $index + 1 }}</td>
    <td>{{ x.name }}</td>
    <td>{{ x.country }}</td>
  </tr>
</table>

	
19. "ng-repeat" directive using table with "$even" and "$odd"

<div ng-app="" ng-init="names=[
				{name:'Jani',country:'Norway'},
				{name:'Hege',country:'Sweden'},
				{name:'Kai',country:'Denmark'}
			      ]
">

<table>
  <tr ng-repeat="x in names">
    <td ng-if="$odd" style="background-color:#f1f1f1">{{ x.Name }}</td>
    <td ng-if="$even">{{ x.Name }}</td>
    <td ng-if="$odd" style="background-color:#f1f1f1">{{ x.Country }}</td>
    <td ng-if="$even">{{ x.Country }}</td>
  </tr>
</table>
	
	
20. Creating a Select Box Using "ng-options"

<div ng-app="myApp" ng-controller="myCtrl">

  <select ng-model="selectedName" ng-options="x for x in names">
  </select>

</div>

<script>

  var app = angular.module('myApp', []);

  app.controller('myCtrl', function($scope) {
      $scope.names = ["Emil", "Tobias", "Linus"];
  });

</script>


21. Creating a Select Box Using "ng-repeat"

<div ng-app="myApp" ng-controller="myCtrl">

  <select>
    <option ng-repeat="x in names">{{x}}</option>
  </select>

</div>

<script>

  var app = angular.module('myApp', []);

  app.controller('myCtrl', function($scope) {
      $scope.names = ["Emil", "Tobias", "Linus"];
  });

</script>


22. Creating a Select Box Using "ng-repeat" where datasource is object's array.

<div ng-app="myApp" ng-controller="myCtrl">

  <select ng-model="selectedCar">
    <option ng-repeat="x in cars" value="{{x.model}}">{{x.model}}</option>
  </select>

  <h1>You selected: {{selectedCar}}</h1>

</div>

<script>

  var app = angular.module('myApp', []);
  
  app.controller('myCtrl', function($scope) {
      $scope.cars = [
          {model : "Ford Mustang", color : "red"},
          {model : "Fiat 500", color : "white"},
          {model : "Volvo XC90", color : "black"}
      ];
  });

</script>


23. Creating a Select Box Using "ng-options" where datasource is object's array.

<div ng-app="myApp" ng-controller="myCtrl">

  <select ng-model="selectedCar" ng-options="x.model for x in cars">
  </select>

  <h1>You selected: {{selectedCar.model}}</h1>
  <p>Its color is: {{selectedCar.color}}</p>

</div>

<script>

  var app = angular.module('myApp', []);

  app.controller('myCtrl', function($scope) {
      $scope.cars = [
          {model : "Ford Mustang", color : "red"},
          {model : "Fiat 500", color : "white"},
          {model : "Volvo XC90", color : "black"}
      ];
  });

</script>

	
24. Creating a Select Box Using "ng-options" where datasource is object. Here x represents the key, and y represents the value.

<div ng-app="myApp" ng-controller="myCtrl">

  <select ng-model="selectedCar" ng-options="x for (x, y) in cars">
  </select>

  <h1>You selected: {{selectedCar}}</h1>

</div>

<script>

  var app = angular.module('myApp', []);

  app.controller('myCtrl', function($scope) {
      $scope.cars = {
          car01 : "Ford",
          car02 : "Fiat",
          car03 : "Volvo"
      }
  });

</script>

	
25. Creating a Select Box Using "ng-options" where datasource is object inside object. Here x represents the key, and y represents the value.

<div ng-app="myApp" ng-controller="myCtrl">

  <select ng-model="selectedCar" ng-options="y.brand for (x, y) in cars">
  </select>

  <h1>You selected: {{selectedCar.brand}}</h1>
  <h2>Model: {{selectedCar.model}}</h2>
  <h3>Color: {{selectedCar.color}}</h3>

</div>

<script>

  var app = angular.module('myApp', []);
  
  app.controller('myCtrl', function($scope) {
      $scope.cars = {
          car01 : {brand : "Ford", model : "Mustang", color : "red"},
          car02 : {brand : "Fiat", model : "500", color : "white"},
          car03 : {brand : "Volvo", model : "XC90", color : "black"}
      }
  });

</script>
