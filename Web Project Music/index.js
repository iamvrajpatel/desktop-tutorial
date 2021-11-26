const express = require("express");
const hostname = 'localhost';
const path = require('path');
const app = express();
const port = 80;

//EXPRESS SPECIFIC STUFF
app.use( express.static('static'));
app.use('/static', express.static('static'));
app.use(express.urlencoded());

//PUG SPECIFIC STUFF
app.set('view engine', 'pug');
app.set('views', path.join(__dirname, 'views'));

//ENDPOINTS
app.get('/', (req, res) => {
    const params = { }
    res.status(200).render('index', params);
});

app.get('/home', (req,res) => {
    const params = { }
    res.status(200).render('home', params)
});

app.get('/home/home', (req,res) => {
    const params = { }
    res.status(200).render('home', params)
});

app.get('/tera-masoom-chehra', (req,res) => {
    const params = { }
    res.status(200).render('tera-masoom-chehra', params)
});

app.get('/about', (req,res) => {
    const params = { }
    res.status(200).render('about', params)
});

app.get('/taaron-ke-shahar', (req,res) => {
    const params = { }
    res.status(200).render('taaron-ke-shahar', params)
});

app.get('/nayan', (req,res) => {
    const params = { }
    res.status(200).render('nayan', params)
});

app.get('/dil-chahte-ho', (req,res) => {
    const params = { }
    res.status(200).render('dil-chahte-ho', params)
});

app.get('/teri-ankhon-mai', (req,res) => {
    const params = { }
    res.status(200).render('teri-ankhon-mai', params)
});

app.get('/meri-ashiqui', (req,res) => {
    const params = { }
    res.status(200).render('meri-ashiqui', params)
});

app.get('/naach-meri-raani', (req,res) => {
    const params = { }
    res.status(200).render('naach-meri-raani', params)
});

app.get('/mahendi-wale-hath', (req,res) => {
    const params = { }
    res.status(200).render('mahendi-wale-hath', params)
});

app.get('/shayad', (req,res) => {
    const params = { }
    res.status(200).render('shayad', params)
});

app.get('/pal-pal-dil-ke-pas', (req,res) => {
    const params = { }
    res.status(200).render('pal-pal-dil-ke-pas', params)
});

app.get('/bheegi-bheegi', (req,res) => {
    const params = { }
    res.status(200).render('bheegi-bheegi', params)
});

app.get('/husn-hai-suhana', (req,res) => {
    const params = { }
    res.status(200).render('husn-hai-suhana', params)
});

app.get('/tera-ban-jaunga', (req,res) => {
    const params = { }
    res.status(200).render('tera-ban-jaunga', params)
});

app.get('/genda-phool', (req,res) => {
    const params = { }
    res.status(200).render('genda-phool', params)
});

app.get('/jinke-liye', (req,res) => {
    const params = { }
    res.status(200).render('jinke-liye', params)
});

app.get('/burjkhalifa', (req,res) => {
    const params = { }
    res.status(200).render('burjkhalifa', params)
});

app.get('/arijitsingh', (req,res) => {
    const params = { }
    res.status(200).render('arijitsingh', params)
});

app.get('/page_2', (req,res) => {
    const params = { }
    res.status(200).render('page_2', params)
});




app.use('/scripts', 
    express.static(path.join(__dirname, './views/search.js')),
    // add some others
    );



//START THE SERVER
app.listen(port, () => {
    console.log(`The Application is running on http://${hostname}:${port}/`);
});
