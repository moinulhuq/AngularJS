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


4. "ng-model" use for binding. Take input using "ng-model" and to dsiplay that value use either {{ }} or "ng-bind". 

<div ng-app="">

	<input type="text" ng-model="name">

	<p ng-bind="name"></p>

	{{name}}
	
</div>


5. AngularJS expression

<div ng-app="">

  <p>My first expression: {{ 5 + 5 }}</p>
  <p>My first expression: {{ "Moin" + " " + "Tanim" }}</p>

</div>


6. AngularJS best example of binding.

<div ng-app="" ng-init="myColor='green'">

	<input style="background-color:{{myColor}}" ng-model="myColor">

</div>


7. AngularJS "ng-init" for initializing the multiple value.

<div ng-app="" ng-init="quantity=1;cost=5">

	<p>Total in dollar: {{ quantity * cost }}</p>

	<p>Total in dollar: <span ng-bind="quantity * cost"></span></p>

</div>


8. AngularJS Objects

<div ng-app="" ng-init="person={firstName:'John',lastName:'Doe'}">

	<p>The name is {{ person.lastName }}</p>

	<p>The name is <span ng-bind="person.lastName"></span></p>

</div>


9. AngularJS Arrays

<div ng-app="" ng-init="points=[1,15,19,2,40]">

	<p>The third result is {{ points[2] }}</p>

	<p>The third result is <span ng-bind="points[2]"></span></p>

</div>
