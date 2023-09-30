const compression = require('compression')
const express = require('express');
const app = express();
app.use(compression());
app.disable('x-powered-by');

app.use(function (req, res, next) {
    let host = req.headers.host;
    if (host.match(/^www\..*/i)) {
        return res.redirect(301, "https://" + host.replace('www.', '') + req.url);
    } else if (req.headers['x-forwarded-proto'] !== 'https') {
        return res.redirect(301, 'https://' + req.hostname + req.url);
    }
    res.set('Strict-Transport-Security', 'max-age=31536000');
    next();
});

app.use(express.static('public'));

const server = app.listen(8080, () => {
    const host = server.address().address;
    const port = server.address().port;
    console.log(`Serving at ${host}:${port}`)
});