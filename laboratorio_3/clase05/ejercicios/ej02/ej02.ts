let funcion : Function = () :void=>{
    let p1 = {"codigoBarra":1111,"nombre":"mate","precio":650};
    let p2 = {"codigoBarra":2222,"nombre":"termo","precio":1500};
    let p3 = {"codigoBarra":3333,"nombre":"pava","precio":1100};

    let productos = {"primerProducto":p1,
                    "segundoProducto":p2,
                    "tercerProducto":p3
                };
    

    console.log("codigos de barra: ");
    console.log(productos.primerProducto.codigoBarra);
    console.log(productos.segundoProducto.codigoBarra);
    console.log(productos.tercerProducto.codigoBarra);
    
    

}

