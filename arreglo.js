const carrito = [
         { producto: "Smartphone iPhone 13", precio: 999 },
        { producto: "Laptop MacBook Air", precio: 1299 },
       { producto: "Tableta Samsung Galaxy Tab S7", precio: 549},
      { producto: "Smart TV LG OLED 4K", precio: 1499 },
     { producto: "Cámara DSLR Canon EOS 90D", precio: 1199 },
       { producto: "Auriculares Sony WH-1000XM4", precio: 349 },
       { producto: "Consola de juegos Xbox Series X", precio: 499 },
       { producto: "Impresora Epson EcoTank ET-4760", precio: 399 },
     ];


     carrito.forEach(producto => console.log(producto.precio));
     carrito.forEach(producto => console.log(producto.nombre));







     carrito.map(producto => console.log(producto.precio));