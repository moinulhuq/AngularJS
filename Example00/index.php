1. Javascript variable

	var name = "Ali";
	console.log(name);

	(or)

	var size = 10;
	console.log(size);


2. Javascript array

	var cars = ["Saab", "Volvo", "BMW"];

	console.log(cars[0]);

	for (var i = 0; i < cars.length; i++) {
		console.log( cars[i] );
	}

	(or)

	var model = [1980, 2000, 2007];	

	console.log(model[0]);

	for (var i = 0; i < model.length; i++) {
		console.log( model[i] );
	}


3. Javascript object

	var car = {
				type:"Fiat", 
				model:"500", 
				color:"white"
			};
	
	console.log( car.type );
	console.log( car.model );
	console.log( car.color );

	for (var property in car) {
	    if (car.hasOwnProperty(property)) {
	        console.log(property + " -> " + car[property]);
	    }
	}

	(or)

	var cars = {
			    car01 : "Ford",
			    car02 : "Fiat",
			    car03 : "Volvo"
			};

	console.log( cars.car01 );
	console.log( cars.car02 );
	console.log( cars.car03 );

	for (var property in cars) {
	    if (cars.hasOwnProperty(property)) {
	        console.log(property + " -> " + cars[property]);
	    }
	}


4. Javascript array's array

	var items = [
				  [1, 2],
				  [3, 4],
				  [5, 6]
			];

	console.log( items[0][0] );
	console.log( items[0][1] );

	for (var i = 0; i < items.length; i++) {
		
		for (var j = 0; j < items[i].length; j++) {
			
			console.log( items[i][j] );
		}
	}


5. Javascript object's array

	var cars = [
			    {model : "Ford Mustang", color : "red"},
			    {model : "Fiat 500", color : "white"},
			    {model : "Volvo XC90", color : "black"}
			];

	console.log( cars[0].model );
	console.log( cars[0].color );

	for (var i = 0; i < cars.length; i++) {

			console.log( cars[i].model );
			console.log( cars[i].color );
	}


6. Javascript object's object

	var cars = {
                    car01 : { "model" : "toyota", "year" : "2000"},
                    car02 : { "model" : "mazda", "year" : "2000"},
                    car03 : { "model" : "fiat", "year" : "1999"}
                };

	console.log( cars.car01.model );
	console.log( cars.car01.year );

	for (var property1 in cars) {

	    if (cars.hasOwnProperty(property1)) {

			for (var property2 in cars[property1]) {

	    		if (cars[property1].hasOwnProperty(property2)) {
	    			
	    			console.log(property1 + " : " + property2 + " -> " + cars[property1][property2]);
	    		}
	    	}	        
	    }
	}


7. Javascript array in JSON object

	var myObj = {
			    "name":"John",
			    "age":30,
			    "cars":[ "Ford", "BMW", "Fiat" ]
		};

	console.log(myObj.name);
	console.log(myObj.age);
	console.log(myObj.cars[0]);
	console.log(myObj.cars[1]);
	console.log(myObj.cars[2]);

	for(var property in myObj){

		if(myObj.hasOwnProperty(property)){
		
			console.log(myObj[property]);

			if(Array.isArray(myObj[property]))	{

				for (var i = 0; i < myObj[property].length; i++) {

					console.log(myObj[property][i]);
				}
			}
		}
	}


8. Javascript object in JSON object

	var myHonda = {	
					color: 'red', 
					wheels: 4, 
					engine: {cylinders: 40, size: 2.2}
		};

	console.log(myHonda.color);
	console.log(myHonda.wheels);
	console.log(myHonda.engine.cylinders);
	console.log(myHonda.engine.size);

	for(var property1 in myHonda){

		if(myHonda.hasOwnProperty(property1)){
		
			console.log(myHonda[property1]);
			
			if((typeof myHonda[property1] === "object")) {

				for(var property2 in myHonda[property1]){

					if(myHonda[property1].hasOwnProperty(property2)){

						console.log(myHonda[property1][property2]);
					}
				}
			}
		}
	}	
