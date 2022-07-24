var constraints = {
    Cantidad: {
        presence: { message: '^Cantidad no puede estar vacío' },
        numericality: {
            greaterThanOrEqualTo: 0,
            notGreaterThanOrEqualTo: '^Cantidad no puede ser menor que 0'
        }
    },
    PrecioVenta: {
        presence: { message: '^Precio venta no puede estar vacío' },
        numericality: {
            greaterThanOrEqualTo: 0,
            notGreaterThanOrEqualTo: '^Precio venta no puede ser menor que 0'
        }
    },
    Item: {
        presence: { message: '^Item no puede estar vacío' },
        numericality: {
            greaterThanOrEqualTo: 0,
            notGreaterThanOrEqualTo: '^Item no puede ser menor que 0'
        }
    }
}