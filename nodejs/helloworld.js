var http = require("http")

http.createServer(function(request, response){
    response.writeHeader(200, {'Content-Type':'text/plain'});
    response.end('Hello World\n');
    
}).listen(8080, "0.0.0.0");

console.log("Server running at http://0.0.0.0:8080");

