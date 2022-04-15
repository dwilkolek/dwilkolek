const compression = require('compression')
const express = require('express');
const app = express();
const gatsyExpress = require('gatsby-plugin-express');
app.use(compression());
app.disable('x-powered-by');

app.use(function (req, res, next) {
    let host = req.headers.host;
    if (host.match(/^www\..*/i)) {
        return res.redirect(301, "https://" + host.replace('www.', '') + req.url);
    } else if (req.headers['x-forwarded-proto'] !== 'https') {
        return res.redirect('https://' + req.hostname + req.url);
    }
    res.set('Strict-Transport-Security', 'max-age=31536000');
    next();
});

app.use(express.static('public'));

app.use(gatsyExpress('config/gatsby-express.json', {
    publicDir: 'public/',
    template: __dirname + '/public/404/index.html',

    // redirects all /path/ to /path
    // should be used with gatsby-plugin-remove-trailing-slashes
    redirectSlashes: true,
}));

const server = app.listen(8080, () => {
    const host = server.address().address;
    const port = server.address().port;
});