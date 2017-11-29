1. input text field using AngularJS.

<div ng-app="myApp" ng-controller="formCtrl">
  <form>
    First Name: <input ng-click="fill()" placeholder="Please fill" type="text" ng-model="firstname">
  </form>

<p ng-hide="myHide">{{firstname? firstname: 'Can\'t be numeric'}}</p>

</div>

<script>

  var app = angular.module('myApp', []);

  app.controller('formCtrl', function($scope) {
      $scope.myHide = true;
      $scope.fill = function(){
        $scope.myHide = false;
      }

  });

</script>


2. Auto grow textarea using AngularJS.

<div ng-app="myApp" ng-controller="formCtrl">
  <form>
    <textarea id="txtnotes" ng-keyup="resize($event)" ng-keydown="resize($event)"></textarea>
  </form>
</div>

<script>

  var app = angular.module('myApp', []);

  app.controller('formCtrl', function($scope) {
        $scope.resize = function($event){
        $event.target.style.height = $event.target.scrollHeight + "px";
    };

  });

</script>


3. Checkbox using AngularJS.

<div ng-app="">
  <form>
    <input type="checkbox" ng-model="myVar">
  </form>
  <h1 ng-show="myVar">My Header</h1>
</div>


4. Radio button using AngularJS

<body ng-app="">

<form>
  Pick a topic:
  <input type="radio" ng-model="myVar" value="dogs">Dogs
  <input type="radio" ng-model="myVar" value="tuts">Tutorials
  <input type="radio" ng-model="myVar" value="cars">Cars
</form>

<div ng-switch="myVar">
  <div ng-switch-when="dogs">
     <h1>Dogs</h1>
  </div>
  <div ng-switch-when="tuts">
     <h1>Tutorials</h1>
  </div>
  <div ng-switch-when="cars">
     <h1>Cars</h1>
  </div>
</div>


5. Selectbox using AngularJS

<body ng-app="">

<form>
  Select a topic:
  <select ng-model="myVar">
    <option value="">
    <option value="dogs">Dogs
    <option value="tuts">Tutorials
    <option value="cars">Cars
  </select>
</form>

<div ng-switch="myVar">
  <div ng-switch-when="dogs">
     <h1>Dogs</h1>
  </div>
  <div ng-switch-when="tuts">
     <h1>Tutorials</h1>
  </div>
  <div ng-switch-when="cars">
     <h1>Cars</h1>
  </div>
</div>


6. Form validation. Here "novalidate" prevent the default HTML5 validations since we'll be doing that ourselves.

<style>
  input.ng-invalid {
      background-color:pink;
  }
  input.ng-valid {
      background-color:lightgreen;
  }
  form.ng-pristine {
      background-color: lightblue;
  }
  form.ng-dirty {
      background-color: red;
  }
</style>

<body ng-app="">

  <form name="myForm" novalidate ng-submit="submit()">

    <div class="form-group">
      <label for="Name">Name:</label>
      <input type="text" name="name" class="form-control" ng-model="name" placeholder="Name" required ng-pattern="/^(\D)+$/" />
      <span style="color:red" ng-show="myForm.name.$touched && myForm.name.$invalid || myForm.$submitted">
        <span ng-show="myForm.name.$error.required">Name is required.</span>
        <span ng-show="myForm.name.$error.pattern">Invalid Name.</span>
      </span>
    </div>

    <div class="form-group">
      <label for="username">Username:</label>
      <input type="text" name="username" class="form-control" ng-model="username" placeholder="UserName" ng-minlength="3" ng-maxlength="8" required>
      <span style="color:red" ng-show="myForm.username.$touched && myForm.username.$invalid || myForm.$submitted">
        <span ng-show="myForm.username.$error.required">Username is required.</span>
        <span ng-show="myForm.username.$error.minlength" >Username is too short.</span>
        <span ng-show="myForm.username.$error.maxlength" >Username is too long.</span>
      </span>
    </div>

    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" name="email" class="form-control" ng-model="email" placeholder="Email" required>
      <span style="color:red" ng-show="myForm.email.$touched && myForm.email.$invalid || myForm.$submitted">
        <span ng-show="myForm.email.$error.required">Email is required.</span>
      <span ng-show="myForm.email.$error.email">Invalid email address.</span>
      </span>
    </div>

    <div class="form-group">
      <label for="phone">Phone:</label>
      <input type="number" name="phone" class="form-control" ng-model="phone" placeholder="Phone" ng-minlength="7" ng-maxlength="9" required>
      <span style="color:red" ng-show="myForm.phone.$touched && myForm.phone.$invalid || myForm.$submitted">
        <span ng-show="myForm.phone.$error.required">Phone number is required.</span>
        <span ng-show="myForm.phone.$error.minlength" >Phone number is too short.</span>
      <span ng-show="myForm.phone.$error.maxlength">Phone number is long.</span>
      <span ng-show="myForm.phone.$error.number">Invalid Phone number.</span>
      </span>
    </div>

    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" name="password" class="form-control" ng-model="password" placeholder="Password" ng-minlength="8" ng-maxlength="12" required>
      <span style="color:red" ng-show="myForm.password.$touched && myForm.password.$invalid || myForm.$submitted">
        <span ng-show="myForm.password.$error.required">Password is required.</span>
        <span ng-show="myForm.password.$error.minlength" >Password is too short.</span>
      <span ng-show="myForm.password.$error.maxlength">Password is long.</span>
      </span>
    </div>

    <div class="form-group">
      <label for="userMessage">User Message:</label>
      <textarea type="text" name="userMessage" class="form-control" ng-model="userMessage" ng-minlength="100" ng-maxlength="1000" required>
    </textarea>
      <span style="color:red" ng-show="myForm.userMessage.$touched && myForm.userMessage.$invalid || myForm.$submitted">
        <span ng-show="myForm.userMessage.$error.required">User Message is required.</span>
        <span ng-show="myForm.userMessage.$error.minlength" >User Message is too short.</span>
      <span ng-show="myForm.userMessage.$error.maxlength">User Message is long.</span>
      </span>
    </div>

    <div class="form-group">
      <label for="sel1">Select car </label>
      <select class="form-control" name="car" ng-model="car" required>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
      </select>
      <span style="color:red" ng-show="myForm.car.$dirty || myForm.$submitted">
        <span ng-show="myForm.car.$error.required">select any car</span>
      </span>   
    </div>
    
    <div class="form-group">
      <label class="radio-inline">
        <input type="radio" name="gender" ng-model="gender" value="Male" required>Male
      </label>
      <label class="radio-inline">
        <input type="radio" name="gender" ng-model="gender" value="Female" required>Female
      </label>
      <span style="color:red" ng-show="myForm.gender.$dirty || myForm.$submitted">
        <span ng-show="myForm.gender.$error.required">select any gender</span>
      </span>
    </div>

  <hr>

    <div class="form-check">
      <label class="form-check-label">
        <input type="checkbox" name="userAgree" class="form-check-input" ng-model="userAgree" > I Agree
      </label>
    </div>

    <div class="form-group">
      <input ng-show="userAgree" type="text" name="agreeSign" class="form-control" ng-model="agreeSign" placeholder="Sign" required>
      <span style="color:red" ng-show="myForm.userAgree.$touched && myForm.agreeSign.$invalid || myForm.$submitted">
        <span ng-show="myForm.agreeSign.$error.required">Agree and Sign are required.</span>
      </span>
    </div>

  <button type="submit" class="btn btn-primary" ng-disabled="myForm.$invalid">Submit</button>

  </form>

</body>
