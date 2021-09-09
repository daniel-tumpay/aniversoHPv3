let carts = document.querySelectorAll('.addToCart');

let products = [
    {
        name: "Toallitas Desinfectantes",
        tag: "toallitasdesinfectantes",
        price: 9,
        inCart: 0,
    },
    {
        name: "Lejía Clorox Tradicional",
        tag: "lejíacloroxtradicional",
        price: 6,
        inCart: 0,
    },
    {
        name: "Detergente en polvo Ace 4.0Kg",
        tag: "detergenteenpolvoace4.0kg",
        price: 32,
        inCart: 0,
    },
    {
        name: "Mantequilla Gloria Pote 400 g",
        tag: "mantequillagloriapote400g",
        price: 13,
        inCart: 0,
    },
    {
        name: "Yogurt Vainilla Gloria Gal 1.9 Kg",
        tag: "yogurtvainillagloriagal1.9kg",
        price: 8,
        inCart: 0,
    },
    {
        name: "Yogurt Fresa Gloria Gal 1.9 kg",
        tag: "yogurtfresagloriagal1.9kg",
        price: 8,
        inCart: 0,
    },
    {
        name: "Leche Entera Gloria Tripack 1 Litro",
        tag: "lecheenteragloriatripack1litro",
        price: 13,
        inCart: 0,
    },
    {
        name: "Bebida Four Loko Gold Lata 473 ml",
        tag: "bebidafourlokogoldlata473ml",
        price: 11,
        inCart: 0,
    },
    {
        name: "Bebida Four Loko Blue Lata 473 ml",
        tag: "bebidafourlokobluelata473ml",
        price: 11,
        inCart: 0,
    },
    {
        name: "Cerveza Pilsen Callao 473 ml Pack 6 Unid",
        tag: "cervezapilsencallao473mlpack6unid",
        price: 26,
        inCart: 0,
    },
    {
        name: "Cerveza Cusqueña Trigo Pack 6 Botellas 310 ml",
        tag: "cervezacusqueñatrigopack6botellas310ml",
        price: 20,
        inCart: 0,
    },
    {
        name: "Agua Sin Gas Mineral San Mateo Botella 2.5 L",
        tag: "aguasingasmineralsanmateobotella2.5l",
        price: 3,
        inCart: 0,
    },
    {
        name: "Bebida de Durazno Gloria Caja 1 L",
        tag: "bebidadeduraznogloriacaja1l",
        price: 3,
        inCart: 0,
    },
    {
        name: "Gaseosa Coca Cola Botella 2.25 Lt",
        tag: "gaseosacocacolabotella2.25lt",
        price: 7,
        inCart: 0,
    },
    {
        name: "Gaseosa Inca Kola Botella 1 Lt",
        tag: "gaseosaincakolabotella1lt",
        price: 4,
        inCart: 0,
    },
    {
        name: "Arroz Extra Costeño Bolsa 5 Kg",
        tag: "arrozextracosteñobolsa5kg",
        price: 20,
        inCart: 0,
    },
    {
        name: "Spaguetti Don Vittorio Paquete 1 Kg",
        tag: "spaguettidonvittoriopaquete1kg",
        price: 4,
        inCart: 0,
    },
    {
        name: "Sal de Mesa Marina Emsal Bolsa 1 kg",
        tag: "saldemesamarinaemsalbolsa1kg",
        price: 2,
        inCart: 0,
    },
    {
        name: "Filete de Atun Florida Lata 170 g",
        tag: "filetedeatunfloridalata170g",
        price: 6,
        inCart: 0,
    },
    {
        name: "Kolynos Triple Limpieza CompletaTubo 90 g",
        tag: "kolynostriplelimpiezacompletatubo90g",
        price: 3,
        inCart: 0,
    },
    {
        name: "Shampoo Head Shoulders Frasco 375 ml",
        tag: "shampooheadshouldersfrasco375ml",
        price: 17,
        inCart: 0,
    },
    {
        name: "Toalla Higienica Nosotras Paquete 30 Unid",
        tag: "toallahigienicanosotraspaquete30unid",
        price: 9,
        inCart: 0,
    },
    {
        name: "Jabon Neko Fresh Pack 3 Unid 125 g",
        tag: "jabonnekofreshpack3unid125g",
        price: 8,
        inCart: 0,
    },
    {
        name: "Mini Corrector Liquido Faber Castell Rojo",
        tag: "minicorrectorliquidofabercastellrojo",
        price: 2,
        inCart: 0,
    },
    {
        name: "Pintura Escolar Apu Frasco 30 ml",
        tag: "pinturaescolarapufrasco30ml",
        price: 3,
        inCart: 0,
    },
    {
        name: "Cuaderno College Deluxe 100 Hojas Surtido",
        tag: "cuadernocollegedeluxe100hojassurtido",
        price: 4,
        inCart: 0,
    },
    {
        name: "Vinifan Forro Plastico Forro Escolar",
        tag: "vinifanforroplasticoforroescolar",
        price: 3,
        inCart: 0,
    },
    {
        name: "Cebada Instantanea Ecco Lata 190 g",
        tag: "cebadainstantaneaeccolata190g",
        price: 8,
        inCart: 0,
    },
    {
        name: "Pan Integral Sin Bordes Bimbo Bolsa 650 g",
        tag: "panintegralsinbordesbimbobolsa650g",
        price: 9,
        inCart: 0,
    },
    {
        name: "Nesquik Chocolate Opti Start Doypack 200 g",
        tag: "nesquikchocolateoptistartdoypack200g",
        price: 7,
        inCart: 0,
    },
    {
        name: "Mermelada de Fresa Gloria Doypack 800 gr",
        tag: "mermeladadefresagloriadoypack800gr",
        price: 8,
        inCart: 0,
    },
    {
        name: "Manzanilla Filtrante Herbi Caja 100 unid",
        tag: "manzanillafiltranteherbicaja100unid",
        price: 7,
        inCart: 0,
    },
    {
        name: "Cereal Fruta Aros Maiz Cereal Angel Bolsa 420 g",
        tag: "cerealfrutaarosmaizcerealangelbolsa420g",
        price: 13,
        inCart: 0,
    },
];

for (let i=0; i < carts.length; i++){
    carts[i].addEventListener('click', () => {
        cartNumbers(products[i]);
        totalCost(products[i]);
    })
}

function onLoadCartNumbers() {
    let productNumbers = localStorage.getItem('cartNumbers');

    if ( productNumbers ) {
        document.querySelector('.cart span').textContent = productNumbers;
    }
}


function cartNumbers(product, action) {
    let productNumbers = localStorage.getItem('cartNumbers');
    productNumbers = parseInt(productNumbers);

    let cartItems = localStorage.getItem('productsInCart');
    cartItems = JSON.parse(cartItems);

    if( action ) {
        localStorage.setItem("cartNumbers", productNumbers - 1);
        document.querySelector('.cart span').textContent = productNumbers - 1;
        console.log("action running");
    } else if( productNumbers ) {
        localStorage.setItem("cartNumbers", productNumbers + 1);
        document.querySelector('.cart span').textContent = productNumbers + 1;
    } else {
        localStorage.setItem("cartNumbers", 1);
        document.querySelector('.cart span').textContent = 1;
    }
    setItems(product);
}

function setItems(product) {
    // let productNumbers = localStorage.getItem('cartNumbers');
    // productNumbers = parseFloat(productNumbers);
    let cartItems = localStorage.getItem('productsInCart');
    cartItems = JSON.parse(cartItems);

    if(cartItems != null) {
        let currentProduct = product.tag;
    
        if( cartItems[currentProduct] == undefined ) {
            cartItems = {
                ...cartItems,
                [currentProduct]: product
            }
        } 
        cartItems[currentProduct].inCart += 1;

    } else {
        product.inCart = 1;
        cartItems = { 
            [product.tag]: product
        };
    }

    localStorage.setItem('productsInCart', JSON.stringify(cartItems));
}

function totalCost(product, action) {
    let cart = localStorage.getItem("totalCost");

    if( action) {
        cart = parseInt(cart);

        localStorage.setItem("totalCost", cart - product.price);
    } else if(cart != null) {
        
        cart = parseInt(cart);
        localStorage.setItem("totalCost", cart + product.price);
    
    } else {
        localStorage.setItem("totalCost", product.price);
    }
}

function displayCart() {
    let cartItems = localStorage.getItem('productsInCart');
    cartItems = JSON.parse(cartItems);

    let cart = localStorage.getItem("totalCost");
    cart = parseInt(cart);

    let productContainer = document.querySelector('.products');
    if ( cartItems && productContainer ) {
        productContainer.innerHTML = '';
        Object.values(cartItems).map( (item, index) => {
            productContainer.innerHTML += `
            <div class="product">
                <i class="fas fa-times-circle"></i>
                <img src="./img/productosDestacados/${item.tag}.jpg">
                <span>${item.name}</span>
            </div>
            <div class="price">S/${item.price}.00</div>
            <div class="quantity">
                <i class="fas fa-arrow-alt-circle-left"></i>
                <span>${item.inCart}</span>
                <i class="fas fa-arrow-alt-circle-right"></i>
            </div>
            <div class="total">
                S/${item.inCart * item.price}.00
            </div>
            `;
        });

        productContainer.innerHTML += `
        <div class="basketTotalContainer">
            <h4 class="basketTotalTitle">Basket Total</h4>
            <h4 class="basketTotal">S/${cart}.00</h4>
        </div>`
        deleteButtons();
        manageQuantity();
    }
}

function manageQuantity() {
    let decreaseButtons = document.querySelectorAll('.fas.fa-arrow-alt-circle-left');
    let increaseButtons = document.querySelectorAll('.fas.fa-arrow-alt-circle-right');
    let currentQuantity = 0;
    let currentProduct = '';
    let cartItems = localStorage.getItem('productsInCart');
    cartItems = JSON.parse(cartItems);

    for(let i=0; i < increaseButtons.length; i++) {
        decreaseButtons[i].addEventListener('click', () => {
            console.log(cartItems);
            currentQuantity = decreaseButtons[i].parentElement.querySelector('span').textContent;
            console.log(currentQuantity);
            currentProduct = decreaseButtons[i].parentElement.previousElementSibling.previousElementSibling.querySelector('span').textContent.toLocaleLowerCase().replace(/ /g,'').trim();
            console.log(currentProduct);

            if( cartItems[currentProduct].inCart > 1 ) {
                cartItems[currentProduct].inCart -= 1;
                cartNumbers(cartItems[currentProduct], "fas fa-arrow-alt-circle-left");
                totalCost(cartItems[currentProduct], "fas fa-arrow-alt-circle-left");
                localStorage.setItem('productsInCart', JSON.stringify(cartItems));
                displayCart();
            }
        });

        increaseButtons[i].addEventListener('click', () => {
            console.log(cartItems);
            currentQuantity = increaseButtons[i].parentElement.querySelector('span').textContent;
            console.log(currentQuantity);
            currentProduct = increaseButtons[i].parentElement.previousElementSibling.previousElementSibling.querySelector('span').textContent.toLocaleLowerCase().replace(/ /g,'').trim();
            console.log(currentProduct);

            cartItems[currentProduct].inCart += 1;
            cartNumbers(cartItems[currentProduct]);
            totalCost(cartItems[currentProduct]);
            localStorage.setItem('productsInCart', JSON.stringify(cartItems));
            displayCart();
        });
    }
}

function deleteButtons() {
    let deleteButtons = document.querySelectorAll('.product .fas.fa-times-circle');
    let productNumbers = localStorage.getItem('cartNumbers');
    let cartCost = localStorage.getItem("totalCost");
    let cartItems = localStorage.getItem('productsInCart');
    cartItems = JSON.parse(cartItems);
    let productName;
    console.log(cartItems);

    for(let i=0; i < deleteButtons.length; i++) {
        deleteButtons[i].addEventListener('click', () => {
            productName = deleteButtons[i].parentElement.textContent.toLocaleLowerCase().replace(/ /g,'').trim();

            localStorage.setItem('cartNumbers', productNumbers - cartItems[productName].inCart);
            localStorage.setItem('totalCost', cartCost - ( cartItems[productName].price * cartItems[productName].inCart));

            delete cartItems[productName];
            localStorage.setItem('productsInCart', JSON.stringify(cartItems));

            displayCart();
            onLoadCartNumbers();
        })
    }
}

onLoadCartNumbers();
displayCart();
