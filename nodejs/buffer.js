buf = new Buffer(8);
len = buf.write("hackinginto nodejs is very cool, really very very cool");
console.log("Octets written: " + len);
console.log(buf.toString());
