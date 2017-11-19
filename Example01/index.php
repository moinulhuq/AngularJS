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


11. AngularJS Objects

<div ng-app="" ng-init="person={firstName:'John',lastName:'Doe'}">

	<p>The name is {{ person.lastName }}</p>

	<p>The name is <span ng-bind="person.lastName"></span></p>

</div>


12. AngularJS Arrays

<div ng-app="" ng-init="points=[1,15,19,2,40]">

	<p>The third result is {{ points[2] }}</p>

	<p>The third result is <span ng-bind="points[2]"></span></p>

</div>


13. "ng-repeat" used for repeating an HTML elements

<div ng-app="" ng-init="names=['Jani','Hege','Kai']">

  <ul>
    <li ng-repeat="x in names">
      {{ x }}
    </li>
  </ul>

</div>


14. "ng-repeat" directive used on an array of objects

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
