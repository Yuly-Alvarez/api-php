// Importar módulos
const express = require('express');
const bodyParser = require('body-parser');
const mongoose = require('mongoose');
const ModelUser = require('./models/userModel');

// Crear la app
const app = express();

// Middleware
app.use(bodyParser.json());

// Conexión a MongoDB
mongoose.connect('mongodb://localhost:27017/primera_api')
.then(() => console.log('Conectado a MongoDB'))
.catch(err => console.error('Error al conectar a MongoDB:', err));


// Creación de rutas CRUD

//Crear
app.post('/', async (req, res) => {
    const body = req.body;
    const respuesta = await ModelUser.create(body);
    res.send(respuesta);
});

//Consultar todos los datos
app.get('/', async (req, res) => {
    const respuesta = await ModelUser.find({});
    res.send(respuesta);
});

//Consultar un sólo dato por id
app.get('/:id', async (req, res) => {
    const id = req.params.id;
    const respuesta = await ModelUser.findById(id);
    res.send(respuesta);
});

//Actualizar
app.put('/:id', async (req, res) => {
    const body = req.body;
    const id = req.params.id;
    const respuesta = await ModelUser.findOneAndUpdate({_id: id}, body, {new: true});
    res.send(respuesta);
});

//Eliminar
app.delete('/:id', async (req, res) => {
    const id = req.params.id;
    const respuesta = await ModelUser.deleteOne({_id: id});
    res.send(respuesta);
})

//Usar objetos JSON
app.use(express.json())

// Puerto de escucha
const PORT = process.env.PORT || 3000;
app.listen(PORT, () => {
    console.log(`Servidor corriendo en http://localhost:${PORT}`);
});