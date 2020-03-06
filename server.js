const compression = require('compression')
const express = require('express');
const app = express();
app.use(compression());
app.disable('x-powered-by');

app.get('*', function (req, res, next) {
    var isHttps = req.protocol === 'https';
    // var isProto = req.get('x-forwarded-proto') === "https";
    var isWWW = (req.get('host').indexOf('www.') > -1);
   
    res.set('x-forwarded-proto', req.protocol);
    res.set('Strict-Transport-Security', 'max-age=31536000');
    if (isWWW || !isHttps) {
        let host = req.get('host');
        
        if (isWWW) {
            host = host.replace('www.', '')            
        }
        res.redirect('https://' + host + req.url);
    } else {
        next();
    }
});
app.use(express.static('public'));
const server = app.listen(8080, () => {
    const host = server.address().address;
    const port = server.address().port;
});
