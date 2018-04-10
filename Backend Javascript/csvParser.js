//Use file system to work with the files on the computer
var fs = require("fs");

module.exports = function(csvFile) {
  var lines = [];

  // Read the CSV file
  var f = fs.readFileSync(csvFile, { encoding: "utf-8" }, function(err) {
    console.log(err);
  });

  //Split the content into an array if there is a new line or return
  var allTextLines = f.split(/\r\n|\n/);

  //Go through each element in the array and split it up where there is a comma
  //and then push it to the final array
  for (let i = 0; allTextLines.length > i; i++) {
    let data = allTextLines[i].split(",");
    lines.push(data);
  }
  return lines;
};
