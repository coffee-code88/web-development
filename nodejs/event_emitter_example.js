var events = require("events");
var eventEmitter = new events.EventEmitter();

eventEmitter.on("have a date", function(){
    console.log("Have a date");
    eventEmitter.emit("have lunch");
});

eventEmitter.on("have lunch", function(){
    console.log("Have lunch");
    eventEmitter.emit("walk around");
});

eventEmitter.on("walk around", function(){
    console.log("Walking around");
    eventEmitter.emit("go to the hotel");
});

eventEmitter.on("go to the hotel", function(){
    console.log("Go to the hotel");
    eventEmitter.emit("Have fun");
});

eventEmitter.on("Have fun", function(){
    console.log("Have fun");
    eventEmitter.emit("Get married");
});

eventEmitter.on("Get married", function(){
    console.log("Get married");
});

eventEmitter.emit("have a date");
console.log("HAPPY ENDING");
