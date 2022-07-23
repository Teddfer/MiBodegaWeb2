var constraints = {
    Nombre: {
        presence: true,
        length: {
            minimum: 5,
            maximum: 20,
            message:'^Nombre debe poseer entre 5 y 20 caracteres'
        }
    },
    Descripcion: {
        presence: true
    }
}