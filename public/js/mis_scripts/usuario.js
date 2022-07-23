var constraints = {
    Usuario: {
        presence: true,
        length: {
            minimum: 5,
            maximum: 10,
            message:'^Usuario debe poseer entre 5 y 10 caracteres'
        }
    },
    Clave: {
        presence: true,
        length: {
            minimum: 5,
            maximum: 10,
            message:'^Clave debe poseer entre 5 y 10 caracteres'
        }
    },
    Correo: {
        presence: true,
        email: true,
        length: {
            minimum: 5,
            maximum: 30,
            message:'^Correo debe poseer entre 5 y 30 caracteres'
        }
    }
}