const express = require('express');
const app = express();

app.get('*', function (req, res, next) {
    var condition = req.get('x-forwarded-proto') !== "https" || (req.get('host').indexOf('www.') > -1);
    if (condition) {
        res.set('x-forwarded-proto', 'https');
        let host = req.get('host').replace('www.', '')
        res.redirect('https://' + host + req.url);
    } else {
        next();
    }
});
app.use(express.static('dist'))
const server = app.listen(8080, () => {
    const host = server.address().address;
    const port = server.address().port;
});
