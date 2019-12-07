function Car(color){
    this.color = color;
    console.log(0)
}

Car.prototype.run = function(){
    console.log('car is run')
}
//new会执行car这个方法
var s = new Car('blue');
console.log(s)



var Gruze = function(color="blue"){
    Car.call(this,color)
}

// console.log(Car.prototype,0)
Gruze.prototype = Object.create(Car.prototype);
Gruze.prototype.constructor = Gruze;

console.dir(Gruze)



