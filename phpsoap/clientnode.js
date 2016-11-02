var soap = require('soap');
var url = 'http://localhost/phpsoap/server.php?wsdl';
var args = {IPAddress: '8.8.8.8'};
soap.createClient(url, function(err, client) {
  console.log(client);
  /*client.hello(args, function(err, result) {
    console.log(result);
  });*/
});