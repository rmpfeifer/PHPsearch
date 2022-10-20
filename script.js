var mysql = require('mysql');

var con = mysql.createConnection({
  host: "localhost",
  user: "phplink",
  password: "phpsqllink",
  database: "landdeeds"
});

con.connect(function(err) {
  if (err) throw err;
  con.query("SELECT * FROM landdeeds", function (err, result, fields) {
    if (err) throw err;
    console.log(result);
  });
});

printfunction(){
  document.getElementById("output").innerHTML = result;
};