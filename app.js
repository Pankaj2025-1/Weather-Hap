const express = require("express");
const fs= require("fs");
const path= require('path');
// const { stringify } = require("querystring");
const app= express();
// const mongoose= require('mongoose')
// mongoose.connect('mongodb://localhost/MedicaAppointment', {useNewUrlParser: true, useUnifiedTopology: true});
const port=80;

app.use('/static', express.static('static'))
app.use(express.urlencoded())

app.set('view engine', 'pug');

app.set('views', path.join(__dirname, 'views'))
app.get("/", (req, res)=>{
    const params={}

    res.status(200).render('index.pug', params)

})

app.get("/developers", (req, res)=>{
    const params={}

    res.status(200).render('developers.pug', params)

})

app.listen(port,()=>{

    console.log(`The app started successfully at port ${port}`);
})