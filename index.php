<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Lyracons Challenge V1</title>

</head>
<body>
    <header>
        <div class="headerMain">
            <div class="header_1"></div>
                <div class="header_2">
                    <h2 class="headerTitle_1">¡Aprovechá la promo!</h2>
                    <h2 class="headerTitle_2">Comprá hasta 12 cuotas sin interés</h2>
                </div>
            <div class="header_3">
                <h2>x</h2>
            </div>
        </div>
        <nav class="navHeader">
            <div class="hamburger"><img src="img/menu.svg" alt="menu"></div>
            <div class="search"><img src="img/search.svg" alt="search"></div>
            <div class="logo"><img src="img/Grupo 18550.svg" alt="logo"></div>
                    <div class="dropdownMenu">
                        <button class="dropbtn">SHOP</button>
                        <div class="dropdown-content">
                        <a href="#">Pantalones</a>
                        <a href="#">Remeras</a>
                        <a href="#">Camperas</a>
                        </div>
                    </div>
                <h2 id="desktop_nav_red" >REAL WINTER</h2>
                <h2 class="desktop_nav">COMPLEMENTOS</h2>
                <h2 class="desktop_nav">EDITORIALES</h2>
                <div class="desktop_search">
                    <input class="desktop_search_input" placeholder="BUSCAR">
                    <div class="desktop_search_icon"><img src="img/search.svg" alt="search"></div>
                </div>
                <button class="desktop_btn" href="#" onclick="hiddenFunction()">INGRESAR</button>
                <button class="desktop_btn" type="button">CARRITO</button>
            <div class="clear"></div>
            <div class="bag"><img src="img/Grupo 18567.svg" alt="bag"></div>
        </nav>
    </header>
    <section class="subtitle">
        <div class="subtitle_child">
            <img src="img/Componente 29 – 1.svg" alt="arrow">
            <h2>Invierno 2020</h2>
        </div>
        <div class="subtitle_child"></div>
    </section>
    <section class="title">
        <h2 id="title_category">Título de categoría</h2>
    </section>

    <section class="modal">
        <div class="modal__container">
            <div class="modal__container_left">
                <div class="modal_top_container">
                    <h2 class="modal_title">Filtrá por:</h2>
                    <a href="#" class="modal__close"><img src="img/CRUZ CIERRE - mobile.svg"></a>
                </div>
                <div class="modal_subcontainer">
                    <h2 class="modal_subtitle">Talle:</h2>
                    <div class="modal_size_items">
                        <button>35</button>
                        <button>36</button>
                        <button>37</button>
                        <button>38</button>
                        <button>39</button>
                        <button>40</button>
                        <button>41</button>
                        <button>42</button>
                        <button>43</button>
                    </div>
                </div>
                <div class="modal_subcontainer">
                    <h2 class="modal_subtitle">Color: Animal print negro</h2>
                    <div class="imageAnimalPrint">
                        <img>
                        <img>
                        <img>
                    </div>
                </div>
                <div class="modal_subcontainer">
                    <h2 class="modal_subtitle">Precio</h2>
                    <div class="modal_radio_price">
                        <label class="container">$2.000 - $3.000
                            <input type="checkbox" checked="checked">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container">$3.000 - $4.000
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>
                <div class="modal_button">
                    <a href="#" class="modal_button">Aplicar</a>
                </div>
            </div>
        </div>             
    </section>

    <main>
        <div class="container_1">
            <div class="filter">
                <a href="#" class="btn_filter">FILTRA POR +</a>
            </div>
            <div class="order">
                <a>ORDENÁ POR</a>
                <img src="img/Grupo 7364.svg" alt="arrowR">
            </div>
        </div>
        <div class="container_main">
            <div class="container_left">
                <h2>FILTRAR POR</h2>
                <div class="dropdown_filter">
                    <button>Talle</button>
                    <div class="mas"><img src="img/MAS.svg" alt="mas"></div>
                </div>
                <div class="talle_dropdown">
                    <input type="radio" id="" name="" value="">
                    <label for="">35</label><br>
                    <input type="radio" id="" name="" value="">
                    <label for="">36</label><br>
                    <input type="radio" id="" name="" value="">
                    <label for="">37</label><br>
                    <input type="radio" id="" name="" value="">
                    <label for="">38</label><br>
                    <input type="radio" id="" name="" value="">
                    <label for="">39</label><br>
                    <input type="radio" id="" name="" value="">
                    <label for="">40</label><br>
                    <input type="radio" id="" name="" value="">
                    <label for="">41</label><br>
                </div>
                <div class="dropdown_filter">
                    <button>Color</button>
                    <div class="mas"><img src="img/MAS.svg" alt="mas"></div>
                </div>
                <div class="color_dropdown">
                    <input type="radio" id="" name="" value="">
                    <label for="">Amarillo</label><br>
                    <input type="radio" id="" name="" value="">
                    <label for="">Blanco</label><br>
                    <input type="radio" id="" name="" value="">
                    <label for="">Hueso</label><br>
                    <input type="radio" id="" name="" value="">
                    <label for="">Marrón</label><br>
                    <input type="radio" id="" name="" value="">
                    <label for="">Negro</label><br>
                    <input type="radio" id="" name="" value="">
                    <label for="">Nude</label><br>
                    <input type="radio" id="" name="" value="">
                    <label for="">Plata</label><br>
                    <input type="radio" id="" name="" value="">
                    <label for="">Rojo</label><br>
                    <input type="radio" id="" name="" value="">
                    <label for="">Suela</label><br>
                    <input type="radio" id="" name="" value="">
                    <label for="">Visón</label><br>
                </div>
                <div class="dropdown_filter">
                    <button>Precio</button>
                    <div class="mas"><img src="img/MAS.svg" alt="mas"></div>
                </div>
                <div class="talle_dropdown">
                    <input type="radio" id="" name="" value="">
                    <label for="">$2.000 - $3.000</label><br>
                    <input type="radio" id="" name="" value="">
                    <label for="">$3.000 - $4.000</label><br>
                </div>
                <div class="dropdown_filter">
                    <button>Temporada</button>
                    <div class="mas"><img src="img/MAS.svg" alt="mas"></div>
                </div>
                <div class="talle_dropdown">
                    <input type="radio" id="" name="" value="">
                    <label for="">.</label><br>
                    <input type="radio" id="" name="" value="">
                    <label for="">.</label><br>
                </div>
                <div class="dropdown_filter">
                    <button>Material</button>
                    <div class="mas"><img src="img/MAS.svg" alt="mas"></div>
                </div>
                <div class="talle_dropdown">
                    <input type="radio" id="" name="" value="">
                    <label for="">.</label><br>
                    <input type="radio" id="" name="" value="">
                    <label for="">.</label><br>
                </div>              
            </div>
            <div class="group_container_right">
                <div class="desktop_sub_container">
                    <div class="container_subtitle_mobile">
                        <h2>6 PRODUCTOS</h2>
                    </div>
                    <div class="container_subtitle_desktop">
                        <h2>ORDENAR POR:</h2>
                    </div>
                    <div class="container_subtitle_desktop">
                        <h2>Relevancia</h2>
                    </div>
                    <div class="container_subtitle_desktop">
                        <img src="img/Componente 29 – 1.svg" alt="arrow">
                    </div>
                </div>
                <div id="container_right">
                    <?php
                        include('products.php');
                        foreach($items as $item) { ?>
                            <div id="item_product">
                                <img class="imageSrcMobile" src="<?php echo $item['imageSrcMobile'] ?>" alt="product_image_mobile">
                                <img class="imageSrcDesktop" src="<?php echo $item['imageSrc'] ?>" alt="product_image_desktop">
                                <p class="item_name">
                                    <?php echo $item['name'] ?>
                                </p>
                                <p class="item_bestPrice">
                                    $<?php echo $item['bestPrice'] ?>
                                </p>
                                <p class="item_listPrice">
                                    $<?php echo $item['listPrice'] ?>
                                </p>
                                <p class="item_fees">Hasta <?php echo $item['fees'] ?> cuotas</p><br>
                            </div>
                    <?php
                        }
                    ?>
                    <template id="show_products_template">
                        <div id="clone_item_product">
                            <img class="imageSrcMobile">
                            <img class="imageSrcDesktop">
                                <p class="item_name"></p>
                                <p class="item_bestPrice_copy">
                                    $</p>
                                <p class="item_bestPrice"></p>
                                <p class="item_listPrice_copy">
                                    $</p>
                                <p class="item_listPrice"></p>
                                <p class="item_fees_copy">
                                    Hasta</p>
                                <p class="item_fees"></p>
                                <p class="item_fees_copy">
                                    cuotas</p><br>
                        </div>                          
                    </template>              
                </div>
                <div id="show_more_products"></div>
                <button type="button" class="btn_more_products" id="btn" onclick="showMoreProducts()"><b>
                    Ver más productos</b>
                </button>
            </div>
        </div>
    </main>
    <footer>
        <nav class="nav_footer">
            <h2>CAMBIOS Y DEVOLUCIONES</h2>
            <h2>ENVÍOS</h2>
            <h2>MEDIOS DE PAGO</h2>
            <h2>PREGUNTAS FRECUENTES</h2>
            <h2>VENTA MAYORISTA</h2>        
            <section class="section_footer">
                <h3>News</h3>
                <h4>Suscribite y entérate de las promos!</h4>
            </section>
            <input class="input_email" placeholder="Escribí tu Mail">
            <button class="btn_suscribe">
                SUSCRIBITE
            </button>
        </nav>    
    </footer>

<script type="text/javascript" src="scripts/changeColorHover.js"></script>
<script type="text/javascript" src="scripts/hiddenProducts.js"></script>
<script type="text/javascript" src="scripts/showMoreProducts.js"></script>
<script type="text/javascript" src="scripts/modalFilter.js"></script>
<script type="text/javascript" src="scripts/filterToggle.js"></script>

</body>
</html>
