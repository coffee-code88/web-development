var fs = require("fs");
var zlib = require("zlib");

var streamReader = fs.createReadStream("input.txt");
var streamWriter = fs.createWriteStream("output.txt.gz");

streamReader.on("data", function(){
    console.log("Processing...");
});

streamReader.on("error", function(err){
    console.log("Catch error!!!");
});

streamReader.on("end", function(){
    console.log("Completed read data");
});

streamReader.pipe(zlib.createGzip()).pipe(streamWriter);

streamWriter.on("finish", function(){
    console.log("Finish compression");
});

streamWriter.on("error", function(err){
    console.log("Error in compression!!!");
});
