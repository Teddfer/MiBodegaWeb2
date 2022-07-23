var constraints = {
    Nombre: {
        presence: true,
        length: {
            minimum: 5,
            maximum: 30,
            message:'^Nombre debe poseer entre 5 y 30 caracteres'
        }
    },
    Descripcion: {
        presence: true
    },
    PrecioCosto: {
        presence: { message: '^Precio costo no puede estar vacío' },
        numericality: {
            greaterThanOrEqualTo: 0,
            notGreaterThanOrEqualTo: '^Precio costo no puede ser menor que 0'
        }
    },
    PrecioVenta: {
        presence: { message: '^Precio venta no puede estar vacío' },
        numericality: {
            greaterThanOrEqualTo: 0,
            notGreaterThanOrEqualTo: '^Precio venta no puede ser menor que 0'
        }
    },
    Stock: {
        presence: { message: '^Stock no puede estar vacío' },
        numericality: {
            greaterThanOrEqualTo: 0,
            notGreaterThanOrEqualTo: '^Stock no puede ser menor que 0'
        }
    },
    StockMinimo: {
        presence: { message: '^Stock Minimo no puede estar vacío' },
        numericality: {
            greaterThanOrEqualTo: 0,
            notGreaterThanOrEqualTo: '^Stock Minimo no puede ser menor que 0'
        }
    }
}