var hot_girl1 = function(){
    console.log("Hot girl 1 is waiting for you");   
}

var hot_girl2 = function(){
    console.log("Hot girl 2 is waiting for you");
}
var events = require("events");
var eventEmitter = new events.EventEmitter();

eventEmitter.addListener("follower", hot_girl1).addListener("follower", hot_girl2);

eventEmitter.emit("follower");

console.log(require("events").EventEmitter.listenerCount(eventEmitter, "follower") + " girls are following you");
