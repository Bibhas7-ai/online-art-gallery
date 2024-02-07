<html>
<script>
const http = require('http');

const dataFromDatabase = [
  { id: 1, name: 'John', age: 25 },
  { id: 2, name: 'Jane', age: 30 },
  { id: 3, name: 'Mike', age: 22 },
];

const server = http.createServer((req, res) => {
  res.setHeader('Content-Type', 'text/plain');
  res.setHeader('Access-Control-Allow-Origin', '*');

  if (req.method === 'GET' && req.url === '/data') {
    // Simulating database retrieval, convert data to plain text format
    const dataInTextFormat = dataFromDatabase.map(({ id, name, age }) => `${id},${name},${age}`).join('\n');
    res.end(dataInTextFormat);
  } else {
    res.end('Invalid request.');
  }
});

const port = 3000;
server.listen(port, () => {
  console.log(`Server listening on http://localhost:${port}`);
});
</script>
</html>