var constraints = {
    Nombres: {
        presence: true,
        length: {
            minimum: 10,
            maximum: 40,
            message:'^Nombres debe poseer entre 10 y 40 caracteres'
        }
    },
    Apellidos: {
        presence: true,
        length: {
            minimum: 10,
            maximum: 40,
            message:'^Apellidos debe poseer entre 10 y 40 caracteres'
        }
    },
    Direccion: {
        presence: true,
        length: {
            minimum: 10,
            maximum: 50,
            message:'^Direccion debe poseer entre 10 y 50 caracteres'
        }
    },
    Ubicacion: {
        presence: true,
        length: {
            minimum: 10,
            maximum: 50,
            message:'^Apellidos debe poseer entre 10 y 50 caracteres'
        }
    },
    Telf: {
        presence: true,
        length: {
            minimum: 9,
            maximum: 20,
            message:'^Telefono debe poseer entre 9 y 20 caracteres'
        }
    },
    DNI: {
        presence: true,
        length: {
            minimum: 8,
            maximum: 8,
            message:'^DNI debe poseer 8 caracteres'
        }
    },Nacimiento: {
        presence: true
    },
    Sexo: {
        presence: '^Sexo debe ser masculino o femenino',
        length: {
            minimum: 8,
            maximum: 9,
            message:'^Sexo debe ser Masculino o Femenino'
        }
    }
}