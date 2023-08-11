<?php
session_start();
error_reporting(0);
$varsesion = $_SESSION['role'];
if ($varsesion == NULL || $varsesion = '') {
  header("location: ../IniciarSesion.html");
  // session_destroy();
  die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/css/Default-Styles/Catalogs.css">
  <link rel="stylesheet" href="../assets/css/Default-Styles/PagarCarrito.css">
  <link rel="stylesheet" href="../assets/css/Default-Styles/Footer-and-Header.css">
  <link rel="icon" href="https://raw.githubusercontent.com/Ronaldo07rgr/Repositorio_LaBaguette/master/assets/Icon/LaBaguette.ico">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/c34d8fffbe.js" crossorigin="anonymous"></script>
  <title>Productos | La Baguette</title>
</head>

<body>
  <div class="parent-container">
    <header>
      <div class="menu_encabezadop1">
        <div class="conteiner">
          <div class="social">
            <ul>
              <li>
                <a href="">
                  <i class="fab fa-facebook-f icon"></i>
                </a>
              </li>

              <li>
                <a href="#">
                  <i class="fa-brands fa-x-twitter"></i>
                </a>
              </li>

              <li>
                <a href="https://wa.me/+573154875304">
                  <i class="fab fa-whatsapp icon"></i>
                </a>
              </li>

              <li>
                <a href="">
                  <i class="fab fa-instagram icon"></i>
                </a>
              </li>
            </ul>

            <div class="user">

              <a href="/baguette/usuario.html">
                <i class="fa fa-user"></i>
              </a>
              <a href="../php/CerrarSesion.php">
                <span>Cerrar sesion</span>
              </a>

            </div>

            <div class="shopping">
              <i class="fa fa-shopping-cart" onclick="showCartMenu()"></i>
              <div class="cart-menu" id="cartMenu">
                <h2>Mi Carrito</h2>
                <div class="direction">
                  <i class="fas fa-map-marker-alt"></i>
                  <p>Direccion de Residencia</p>
                </div>
                <hr>
                <button class="close" onclick="hideCartMenu()">X</button>
                <div class="cart-items">

                </div>
                <div class="buttons">
                  <button id="button1">Seleccionar metodo de pago</button>
                  <div>
                    <button class="button-option" id="button2" onclick="selectButton(this)">Domicilio</button>
                    <button class="button-option" id="button3" onclick="selectButton(this)">Ir a la tienda</button>
                  </div>
                  <div class="cam">

                    <button class="bott" id="subtotal">Pagar Subtotal: $10.000</button>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

      <div class="conteiner">

        <div class="menuconteiner">

          <div class="menu">

            <nav>
              <a href="iniciado.php">
                <p>INICIO</p>
              </a>
              <a href="#" class="has-submenu">
                <p>NOSOTROS</p>
              </a>
              <ul class="submenu">
                <li><a href="Nosotros.php">MISION Y VISION</a></li>
                <li><a href="Nosotros.php">QUIENES SOMOS</a></li>
              </ul>
            </nav>

            <div class="logo">
              <a href="iniciado.php"><img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Encabezado%20y%20pie%20de%20pagina/LaBaguette-Encabezado.png?raw=true"></a>
            </div>

            <nav>
              <a href="ContactosUsuario.php">
                <p>CONTACTOS</p>
              </a>
              <a href="Sucursales.php">
                <p>SUCURSALES</p>
              </a>
            </nav>

          </div>
        </div>
      </div>
    </header>

    <main>
      <div class="product-catalog" id="novedades">
        <div class="hero">
          <div class="conteiner">
            <div class="Nov">
              <p>NOVEDADES</p>
            </div>
            <hr>
          </div>
          <div id="nav-menu">
            <div class="conteiner" style="position: relative;">
              <button id="menu-button"><i class="fa fa-bars"></i></button>
              <nav id="menu">
                <ul>
                  <li><a href="#" onclick="mostrarCatalogo('novedades')">Novedades</a></li>
                  <li><a href="#" onclick="mostrarCatalogo('dulces')">Dulces</a></li>
                  <li><a href="#" onclick="mostrarCatalogo('empaquetados')">Paquetes</a></li>
                  <li><a href="#" onclick="mostrarCatalogo('Bebidas')">Bebidas</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>

        <div class="news" style="padding-top: 70px;">
          <div class="conteiner">
            <div class="row">
              <div class="col">
                <div class="slider">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Novedades/Chocolate%20en%20leche/Chocolateenleche%20(1).webp?raw=true" class="active">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Novedades/Chocolate%20en%20leche/Chocolateenleche%20(2).webp?raw=true">
                </div>
                <div class="product-info">
                  <h3>Chocolate en leche </h3>
                  <p class="precio">$1500</p>
                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                </div>
                <div class="popup">
                  <div class="popup-content">
                    <div class="product-image">
                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Novedades/Chocolate%20en%20leche/Chocolateenleche%20(1).webp?raw=true">
                    </div>
                    <div class="product-details">
                      <div class="product-header">
                        <h3>Chocolate en leche </h3>
                        <button class="close"><i class="fas fa-times"></i></button>
                      </div>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta quod soluta id, illo eaque, qui illum a quasi assumenda hic perspiciatis ut asperiores, natus deserunt sed culpa minus officiis quos.</p>
                      <p><b>Peso:</b> 150 gramos</p>
                      <p><b>Cantidad disponible:</b> 10</p>
                      <button class="add-to-cart1">Agregar al carrito</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col">
                <div class="slider">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Novedades/Nevado%20de%20cafe/Nevadodecafe%20(1).webp?raw=true" class="active">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Novedades/Nevado%20de%20cafe/Nevadodecafe%20(2).webp?raw=true">
                </div>
                <div class="product-info">
                  <h3>Nevado de café </h3>
                  <p class="precio">$3000</p>
                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                </div>
                <div class="popup">
                  <div class="popup-content">
                    <div class="product-image">
                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Novedades/Nevado%20de%20cafe/Nevadodecafe%20(1).webp?raw=true">
                    </div>
                    <div class="product-details">
                      <div class="product-header">
                        <h3>Nevado de café </h3>
                        <button class="close"><i class="fas fa-times"></i></button>
                      </div>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque a consequuntur aliquam ea voluptatum dolorum blanditiis facilis error laudantium fugit accusamus, quia debitis illum sed aut reiciendis distinctio necessitatibus dolor.</p>
                      <p><b>Peso:</b> 150 gramos</p>
                      <p><b>Cantidad disponible:</b> 10</p>
                      <button class="add-to-cart1">Agregar al carrito</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="slider">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Novedades/T%C3%A9/t%C3%A9%20(1).webp?raw=true" class="active">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Novedades/T%C3%A9/t%C3%A9%20(2).webp?raw=true">
                </div>
                <div class="product-info">
                  <h3>Té</h3>
                  <p class="precio">$1500</p>
                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                </div>
                <div class="popup">
                  <div class="popup-content">
                    <div class="product-image">
                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Novedades/T%C3%A9/t%C3%A9%20(1).webp?raw=true">
                    </div>
                    <div class="product-details">
                      <div class="product-header">
                        <h3>Té</h3>
                        <button class="close"><i class="fas fa-times"></i></button>
                      </div>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque a consequuntur aliquam ea voluptatum dolorum blanditiis facilis error laudantium fugit accusamus, quia debitis illum sed aut reiciendis distinctio necessitatibus dolor.</p>
                      <p><b>Peso:</b> 150 gramos</p>
                      <p><b>Cantidad disponible:</b> 10</p>
                      <button class="add-to-cart1">Agregar al carrito</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col">
                <div class="slider">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Novedades/Cebada/cebaada%20(1).webp?raw=true" class="active">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Novedades/Cebada/cebaada%20(2).webp?raw=true">
                </div>
                <div class="product-info">
                  <h3>Cebada</h3>
                  <p class="precio">$2000</p>
                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                </div>
                <div class="popup">
                  <div class="popup-content">
                    <div class="product-image">
                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Novedades/Cebada/cebaada%20(1).webp?raw=true">
                    </div>
                    <div class="product-details">
                      <div class="product-header">
                        <h3>Cebada</h3>
                        <button class="close"><i class="fas fa-times"></i></button>
                      </div>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque a consequuntur aliquam ea voluptatum dolorum blanditiis facilis error laudantium fugit accusamus, quia debitis illum sed aut reiciendis distinctio necessitatibus dolor.</p>
                      <p><b>Peso:</b> 150 gramos</p>
                      <p><b>Cantidad disponible:</b> 10</p>
                      <button class="add-to-cart1">Agregar al carrito</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="slider">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Novedades/Avena%20cubana/avenacubana%20(1).webp?raw=true" class="active">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Novedades/Avena%20cubana/avenacubana%20(2).webp?raw=true">
                </div>
                <div class="product-info">
                  <h3>Avena cubana</h3>
                  <p class="precio">$2000</p>
                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                </div>
                <div class="popup">
                  <div class="popup-content">
                    <div class="product-image">
                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Novedades/Avena%20cubana/avenacubana%20(1).webp?raw=true">
                    </div>
                    <div class="product-details">
                      <div class="product-header">
                        <h3>Avena cubana</h3>
                        <button class="close"><i class="fas fa-times"></i></button>
                      </div>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque a consequuntur aliquam ea voluptatum dolorum blanditiis facilis error laudantium fugit accusamus, quia debitis illum sed aut reiciendis distinctio necessitatibus dolor.</p>
                      <p><b>Peso:</b> 150 gramos</p>
                      <p><b>Cantidad disponible:</b> 10</p>
                      <button class="add-to-cart1">Agregar al carrito</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="slider">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Novedades/Jugo%20de%20guanabana%20en%20leche/Jugodeguanabana%20(1).webp?raw=true" class="active">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Novedades/Jugo%20de%20guanabana%20en%20leche/Jugodeguanabana%20(2).webp?raw=true">
                </div>
                <div class="product-info">
                  <h3>Jugo de guanábana en leche </h3>
                  <p class="precio">$3000</p>
                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                </div>
                <div class="popup">
                  <div class="popup-content">
                    <div class="product-image">
                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Novedades/Jugo%20de%20guanabana%20en%20leche/Jugodeguanabana%20(1).webp?raw=true">
                    </div>
                    <div class="product-details">
                      <div class="product-header">
                        <h3>Jugo de guanábana en leche </h3>
                        <button class="close"><i class="fas fa-times"></i></button>
                      </div>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque a consequuntur aliquam ea voluptatum dolorum blanditiis facilis error laudantium fugit accusamus, quia debitis illum sed aut reiciendis distinctio necessitatibus dolor.</p>
                      <p><b>Peso:</b> 150 gramos</p>
                      <p><b>Cantidad disponible:</b> 10</p>
                      <button class="add-to-cart1">Agregar al carrito</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="product-catalog" id="dulces" style="display: none;">
        <div class="hero">
          <div class="conteiner">
            <div class="Nov">
              <p>DULCES</p>
            </div>
            <hr>
          </div>
          <div id="nav-menu">
            <div class="conteiner" style="position: relative;">
              <button id="menu-button"><i class="fa fa-bars"></i></button>
              <nav id="menu">
                <ul>
                  <li><a href="#" onclick="mostrarCatalogo('novedades')">Novedades</a></li>
                  <li><a href="#" onclick="mostrarCatalogo('dulces')">Dulces</a></li>
                  <li><a href="#" onclick="mostrarCatalogo('empaquetados')">Paquetes</a></li>
                  <li><a href="#" onclick="mostrarCatalogo('Bebidas')">Bebidas</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>

        <div class="news" style="padding-top: 70px;">
          <div class="conteiner">
            <div class="row">
              <div class="col">
                <div class="slider">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Dulces/1/Chocolatina%20jumbo/Chocolatinajumbo%20(1).webp?raw=true" class="active">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Dulces/1/Chocolatina%20jumbo/Chocolatinajumbo%20(2).webp?raw=true">
                </div>
                <div class="product-info">
                  <h3>Chocolatina jumbo</h3>
                  <p class="precio">$2000</p>
                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                </div>
                <div class="popup">
                  <div class="popup-content">
                    <div class="product-image">
                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Dulces/1/Chocolatina%20jumbo/Chocolatinajumbo%20(1).webp?raw=true">
                    </div>
                    <div class="product-details">
                      <div class="product-header">
                        <h3>Chocolatina jumbo</h3>
                        <button class="close"><i class="fas fa-times"></i></button>
                      </div>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta quod soluta id, illo eaque, qui illum a quasi assumenda hic perspiciatis ut asperiores, natus deserunt sed culpa minus officiis quos.</p>
                      <p><b>Peso:</b> 150 gramos</p>
                      <p><b>Cantidad disponible:</b> 10</p>
                      <button class="add-to-cart1">Agregar al carrito</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col">
                <div class="slider">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Dulces/1/Bombon%20bum%20unidad/bombon%20(1).webp?raw=true" class="active">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Dulces/1/Bombon%20bum%20unidad/bombon%20(2).webp?raw=true">
                </div>
                <div class="product-info">
                  <h3>Bombón bum unidad</h3>
                  <p class="precio">$500</p>
                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                </div>
                <div class="popup">
                  <div class="popup-content">
                    <div class="product-image">
                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Dulces/1/Bombon%20bum%20unidad/bombon%20(1).webp?raw=true">
                    </div>
                    <div class="product-details">
                      <div class="product-header">
                        <h3>Bombón bum unidad</h3>
                        <button class="close"><i class="fas fa-times"></i></button>
                      </div>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque a consequuntur aliquam ea voluptatum dolorum blanditiis facilis error laudantium fugit accusamus, quia debitis illum sed aut reiciendis distinctio necessitatibus dolor.</p>
                      <p><b>Peso:</b> 150 gramos</p>
                      <p><b>Cantidad disponible:</b> 10</p>
                      <button class="add-to-cart1">Agregar al carrito</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="slider">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Dulces/1/Gomitas/Gomitas%20(1).webp?raw=true" class="active">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Dulces/1/Gomitas/Gomitas%20(2).webp?raw=true">
                </div>
                <div class="product-info">
                  <h3>Gomitas</h3>
                  <p class="precio">$2000</p>
                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                </div>
                <div class="popup">
                  <div class="popup-content">
                    <div class="product-image">
                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Dulces/1/Gomitas/Gomitas%20(1).webp?raw=true">
                    </div>
                    <div class="product-details">
                      <div class="product-header">
                        <h3>Gomitas</h3>
                        <button class="close"><i class="fas fa-times"></i></button>
                      </div>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque a consequuntur aliquam ea voluptatum dolorum blanditiis facilis error laudantium fugit accusamus, quia debitis illum sed aut reiciendis distinctio necessitatibus dolor.</p>
                      <p><b>Peso:</b> 150 gramos</p>
                      <p><b>Cantidad disponible:</b> 10</p>
                      <button class="add-to-cart1">Agregar al carrito</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col">
                <div class="slider">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Dulces/1/frunas/Frunas%20(1).webp?raw=true" class="active">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Dulces/1/frunas/Frunas%20(2).webp?raw=true">
                </div>
                <div class="product-info">
                  <h3>Frunas</h3>
                  <p class="precio">$500</p>
                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                </div>
                <div class="popup">
                  <div class="popup-content">
                    <div class="product-image">
                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Dulces/1/frunas/Frunas%20(1).webp?raw=true">
                    </div>
                    <div class="product-details">
                      <div class="product-header">
                        <h3>Frunas</h3>
                        <button class="close"><i class="fas fa-times"></i></button>
                      </div>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque a consequuntur aliquam ea voluptatum dolorum blanditiis facilis error laudantium fugit accusamus, quia debitis illum sed aut reiciendis distinctio necessitatibus dolor.</p>
                      <p><b>Peso:</b> 150 gramos</p>
                      <p><b>Cantidad disponible:</b> 10</p>
                      <button class="add-to-cart1">Agregar al carrito</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="slider">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Dulces/1/M_M/M&M's%20(1).webp?raw=true" class="active">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Dulces/1/M_M/M&M's%20(2).webp?raw=true">
                </div>
                <div class="product-info">
                  <h3>M&M</h3>
                  <p class="precio">$3000</p>
                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                </div>
                <div class="popup">
                  <div class="popup-content">
                    <div class="product-image">
                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Dulces/1/M_M/M&M's%20(1).webp?raw=true">
                    </div>
                    <div class="product-details">
                      <div class="product-header">
                        <h3>M&M</h3>
                        <button class="close"><i class="fas fa-times"></i></button>
                      </div>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque a consequuntur aliquam ea voluptatum dolorum blanditiis facilis error laudantium fugit accusamus, quia debitis illum sed aut reiciendis distinctio necessitatibus dolor.</p>
                      <p><b>Peso:</b> 150 gramos</p>
                      <p><b>Cantidad disponible:</b> 10</p>
                      <button class="add-to-cart1">Agregar al carrito</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="slider">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Dulces/1/Trident/trident%20(1).webp?raw=true" class="active">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Dulces/1/Trident/trident%20(2).webp?raw=true">
                </div>
                <div class="product-info">
                  <h3>Trident</h3>
                  <p class="precio">$1000</p>
                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                </div>
                <div class="popup">
                  <div class="popup-content">
                    <div class="product-image">
                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Dulces/1/Trident/trident%20(1).webp?raw=true">
                    </div>
                    <div class="product-details">
                      <div class="product-header">
                        <h3>Trident</h3>
                        <button class="close"><i class="fas fa-times"></i></button>
                      </div>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque a consequuntur aliquam ea voluptatum dolorum blanditiis facilis error laudantium fugit accusamus, quia debitis illum sed aut reiciendis distinctio necessitatibus dolor.</p>
                      <p><b>Peso:</b> 150 gramos</p>
                      <p><b>Cantidad disponible:</b> 10</p>
                      <button class="add-to-cart1">Agregar al carrito</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="product-catalog" id="empaquetados" style="display: none;">
        <div class="hero">
          <div class="conteiner">
            <div class="Nov">
              <p>EMPAQUETADOS</p>
            </div>
            <hr>
          </div>
          <div id="nav-menu">
            <div class="conteiner" style="position: relative;">
              <button id="menu-button"><i class="fa fa-bars"></i></button>
              <nav id="menu">
                <ul>
                  <li><a href="#" onclick="mostrarCatalogo('novedades')">Novedades</a></li>
                  <li><a href="#" onclick="mostrarCatalogo('dulces')">Dulces</a></li>
                  <li><a href="#" onclick="mostrarCatalogo('empaquetados')">Paquetes</a></li>
                  <li><a href="#" onclick="mostrarCatalogo('Bebidas')">Bebidas</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>

        <div class="news" style="padding-top: 70px;">
          <div class="conteiner">
            <div class="row">
              <div class="col">
                <div class="slider">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Empaquetados/Choclitos/choclitos(1).webp?raw=true" class="active">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Empaquetados/Choclitos/choclitos(2).webp?raw=true">
                </div>
                <div class="product-info">
                  <h3>Choclitos</h3>
                  <p class="precio">$1000</p>
                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                </div>
                <div class="popup">
                  <div class="popup-content">
                    <div class="product-image">
                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Empaquetados/Choclitos/choclitos(1).webp?raw=true">
                    </div>
                    <div class="product-details">
                      <div class="product-header">
                        <h3>Choclitos</h3>
                        <button class="close"><i class="fas fa-times"></i></button>
                      </div>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat assumenda esse illum expedita quos architecto ut. Esse exercitationem officiis reprehenderit sunt, iste rem. Repudiandae molestiae, natus impedit pariatur maxime debitis?</p>
                      <p><b>Peso:</b> 100 gramos</p>
                      <p><b>Cantidad disponible:</b> 10</p>
                      <button class="add-to-cart1">Agregar al carrito</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col">
                <div class="slider">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Empaquetados/Sabritas%20personal/sabritaspersonal%20(1).webp?raw=true" class="active">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Empaquetados/Sabritas%20personal/sabritaspersonal%20(2).webp?raw=true">
                </div>
                <div class="product-info">
                  <h3>Sabritas personal</h3>
                  <p class="precio">$2000</p>
                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                </div>
                <div class="popup">
                  <div class="popup-content">
                    <div class="product-image">
                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Empaquetados/Sabritas%20personal/sabritaspersonal%20(1).webp?raw=true">
                    </div>
                    <div class="product-details">
                      <div class="product-header">
                        <h3>Sabritas personal</h3>
                        <button class="close"><i class="fas fa-times"></i></button>
                      </div>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque a consequuntur aliquam ea voluptatum dolorum blanditiis facilis error laudantium fugit accusamus, quia debitis illum sed aut reiciendis distinctio necessitatibus dolor.</p>
                      <p><b>Peso:</b> 150 gramos</p>
                      <p><b>Cantidad disponible:</b> 10</p>
                      <button class="add-to-cart1">Agregar al carrito</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="slider">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Empaquetados/Detodito/detoditos%20(1).webp?raw=true" class="active">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Empaquetados/Detodito/detoditos%20(2).webp?raw=true">
                </div>
                <div class="product-info">
                  <h3>Detodito</h3>
                  <p class="precio">$2500</p>
                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                </div>
                <div class="popup">
                  <div class="popup-content">
                    <div class="product-image">
                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Empaquetados/Detodito/detoditos%20(1).webp?raw=true">
                    </div>
                    <div class="product-details">
                      <div class="product-header">
                        <h3>Detodito</h3>
                        <button class="close"><i class="fas fa-times"></i></button>
                      </div>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque a consequuntur aliquam ea voluptatum dolorum blanditiis facilis error laudantium fugit accusamus, quia debitis illum sed aut reiciendis distinctio necessitatibus dolor.</p>
                      <p><b>Peso:</b> 150 gramos</p>
                      <p><b>Cantidad disponible:</b> 10</p>
                      <button class="add-to-cart1">Agregar al carrito</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col">
                <div class="slider">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Empaquetados/Sabritas%20familiar/sabritasfamiliar%20(1).webp?raw=true" class="active">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Empaquetados/Sabritas%20familiar/sabritasfamiliar%20(2).webp?raw=true">
                </div>
                <div class="product-info">
                  <h3>Sabritas familiar</h3>
                  <p class="precio">$7800</p>
                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                </div>
                <div class="popup">
                  <div class="popup-content">
                    <div class="product-image">
                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Empaquetados/Sabritas%20familiar/sabritasfamiliar%20(1).webp?raw=true">
                    </div>
                    <div class="product-details">
                      <div class="product-header">
                        <h3>Sabritas familiar</h3>
                        <button class="close"><i class="fas fa-times"></i></button>
                      </div>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque a consequuntur aliquam ea voluptatum dolorum blanditiis facilis error laudantium fugit accusamus, quia debitis illum sed aut reiciendis distinctio necessitatibus dolor.</p>
                      <p><b>Peso:</b> 150 gramos</p>
                      <p><b>Cantidad disponible:</b> 10</p>
                      <button class="add-to-cart1">Agregar al carrito</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="slider">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Empaquetados/Tocineta/tocinetas%20(1).webp?raw=true" class="active">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Empaquetados/Tocineta/tocinetas%20(1).webp?raw=true">
                </div>
                <div class="product-info">
                  <h3>Tocineta</h3>
                  <p class="precio">$500</p>
                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                </div>
                <div class="popup">
                  <div class="popup-content">
                    <div class="product-image">
                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Empaquetados/Tocineta/tocinetas%20(1).webp?raw=true">
                    </div>
                    <div class="product-details">
                      <div class="product-header">
                        <h3>Tocineta</h3>
                        <button class="close"><i class="fas fa-times"></i></button>
                      </div>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque a consequuntur aliquam ea voluptatum dolorum blanditiis facilis error laudantium fugit accusamus, quia debitis illum sed aut reiciendis distinctio necessitatibus dolor.</p>
                      <p><b>Peso:</b> 100 gramos</p>
                      <p><b>Cantidad disponible:</b> 10</p>
                      <button class="add-to-cart1">Agregar al carrito</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="slider">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Empaquetados/Pringles/springles%20(1).webp?raw=true" class="active">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Empaquetados/Pringles/springles%20(2).webp?raw=true">
                </div>
                <div class="product-info">
                  <h3>Pringles</h3>
                  <p class="precio">$9000</p>
                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                </div>
                <div class="popup">
                  <div class="popup-content">
                    <div class="product-image">
                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Empaquetados/Pringles/springles%20(1).webp?raw=true">
                    </div>
                    <div class="product-details">
                      <div class="product-header">
                        <h3>Pringles</h3>
                        <button class="close"><i class="fas fa-times"></i></button>
                      </div>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque a consequuntur aliquam ea voluptatum dolorum blanditiis facilis error laudantium fugit accusamus, quia debitis illum sed aut reiciendis distinctio necessitatibus dolor.</p>
                      <p><b>Peso:</b> 100 gramos</p>
                      <p><b>Cantidad disponible:</b> 10</p>
                      <button class="add-to-cart1">Agregar al carrito</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="product-catalog" id="Bebidas" style="display: none;">
        <div class="hero">
          <div class="conteiner">
            <div class="Nov">
              <p>BEBIDAS</p>
            </div>
            <hr>
          </div>
          <div id="nav-menu">
            <div class="conteiner" style="position: relative;">
              <button id="menu-button"><i class="fa fa-bars"></i></button>
              <nav id="menu">
                <ul>
                  <li><a href="#" onclick="mostrarCatalogo('novedades')">Novedades</a></li>
                  <li><a href="#" onclick="mostrarCatalogo('dulces')">Dulces</a></li>
                  <li><a href="#" onclick="mostrarCatalogo('empaquetados')">Paquetes</a></li>
                  <li><a href="#" onclick="mostrarCatalogo('Bebidas')">Bebidas</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>

        <div class="news" style="padding-top: 70px;">
          <div class="conteiner">
            <div class="row">
              <div class="col">
                <div class="slider">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Bebidas/Aromatica/aromatica%20(1).webp?raw=true" class="active">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Bebidas/Aromatica/aromatica%20(2).webp?raw=true">
                </div>
                <div class="product-info">
                  <h3>Aromatica</h3>
                  <p class="precio">$1000</p>
                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                </div>
                <div class="popup">
                  <div class="popup-content">
                    <div class="product-image">
                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Bebidas/Aromatica/aromatica%20(1).webp?raw=true">
                    </div>
                    <div class="product-details">
                      <div class="product-header">
                        <h3>Aromatica</h3>
                        <button class="close"><i class="fas fa-times"></i></button>
                      </div>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat assumenda esse illum expedita quos architecto ut. Esse exercitationem officiis reprehenderit sunt, iste rem. Repudiandae molestiae, natus impedit pariatur maxime debitis?</p>
                      <p><b>Peso:</b> 100 gramos</p>
                      <p><b>Cantidad disponible:</b> 10</p>
                      <button class="add-to-cart1">Agregar al carrito</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col">
                <div class="slider">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Bebidas/Cafe/Cafe%20(1).webp?raw=true" class="active">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Bebidas/Cafe/Cafe%20(2).webp?raw=true">
                </div>
                <div class="product-info">
                  <h3>Cafe</h3>
                  <p class="precio">$2000</p>
                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                </div>
                <div class="popup">
                  <div class="popup-content">
                    <div class="product-image">
                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Bebidas/Cafe/Cafe%20(1).webp?raw=true">
                    </div>
                    <div class="product-details">
                      <div class="product-header">
                        <h3>Cafe</h3>
                        <button class="close"><i class="fas fa-times"></i></button>
                      </div>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque a consequuntur aliquam ea voluptatum dolorum blanditiis facilis error laudantium fugit accusamus, quia debitis illum sed aut reiciendis distinctio necessitatibus dolor.</p>
                      <p><b>Peso:</b> 150 gramos</p>
                      <p><b>Cantidad disponible:</b> 10</p>
                      <button class="add-to-cart1">Agregar al carrito</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="slider">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Bebidas/Capuchino/capuchino%20(1).webp?raw=true" class="active">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Bebidas/Capuchino/capuchino%20(2).webp?raw=true">
                </div>
                <div class="product-info">
                  <h3>Capuchino</h3>
                  <p class="precio">$3500</p>
                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                </div>
                <div class="popup">
                  <div class="popup-content">
                    <div class="product-image">
                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Bebidas/Capuchino/capuchino%20(1).webp?raw=true">
                    </div>
                    <div class="product-details">
                      <div class="product-header">
                        <h3>Capuchino</h3>
                        <button class="close"><i class="fas fa-times"></i></button>
                      </div>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque a consequuntur aliquam ea voluptatum dolorum blanditiis facilis error laudantium fugit accusamus, quia debitis illum sed aut reiciendis distinctio necessitatibus dolor.</p>
                      <p><b>Peso:</b> 150 gramos</p>
                      <p><b>Cantidad disponible:</b> 10</p>
                      <button class="add-to-cart1">Agregar al carrito</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col">
                <div class="slider">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Bebidas/Cerveza%20tradicional/cerveza%20(1).webp?raw=true" class="active">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Bebidas/Cerveza%20tradicional/cerveza%20(2).webp?raw=true">
                </div>
                <div class="product-info">
                  <h3>Cerveza tradicional</h3>
                  <p class="precio">$7800</p>
                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                </div>
                <div class="popup">
                  <div class="popup-content">
                    <div class="product-image">
                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Bebidas/Cerveza%20tradicional/cerveza%20(1).webp?raw=true">
                    </div>
                    <div class="product-details">
                      <div class="product-header">
                        <h3>Cerveza tradicional</h3>
                        <button class="close"><i class="fas fa-times"></i></button>
                      </div>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque a consequuntur aliquam ea voluptatum dolorum blanditiis facilis error laudantium fugit accusamus, quia debitis illum sed aut reiciendis distinctio necessitatibus dolor.</p>
                      <p><b>Peso:</b> 150 gramos</p>
                      <p><b>Cantidad disponible:</b> 10</p>
                      <button class="add-to-cart1">Agregar al carrito</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="slider">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Bebidas/Coca-cola/Coca-cola%20(1).webp?raw=true" class="active">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Bebidas/Coca-cola/Coca-cola%20(2).webp?raw=true">
                </div>
                <div class="product-info">
                  <h3>Coca-cola</h3>
                  <p class="precio">$2500</p>
                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                </div>
                <div class="popup">
                  <div class="popup-content">
                    <div class="product-image">
                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Bebidas/Coca-cola/Coca-cola%20(1).webp?raw=true">
                    </div>
                    <div class="product-details">
                      <div class="product-header">
                        <h3>Coca-cola</h3>
                        <button class="close"><i class="fas fa-times"></i></button>
                      </div>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque a consequuntur aliquam ea voluptatum dolorum blanditiis facilis error laudantium fugit accusamus, quia debitis illum sed aut reiciendis distinctio necessitatibus dolor.</p>
                      <p><b>Peso:</b> 100 gramos</p>
                      <p><b>Cantidad disponible:</b> 10</p>
                      <button class="add-to-cart1">Agregar al carrito</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="slider">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Bebidas/Jugo%20de%20guanabana%20en%20agua/Jugodeguanabana%20(1).webp?raw=true" class="active">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Bebidas/Jugo%20de%20guanabana%20en%20agua/Jugodeguanabana%20(2).webp?raw=true">
                </div>
                <div class="product-info">
                  <h3>Jugo de guanabana en agua</h3>
                  <p class="precio">$5000</p>
                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                </div>
                <div class="popup">
                  <div class="popup-content">
                    <div class="product-image">
                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Bebidas/Jugo%20de%20guanabana%20en%20agua/Jugodeguanabana%20(1).webp?raw=true">
                    </div>
                    <div class="product-details">
                      <div class="product-header">
                        <h3>Jugo de guanabana en agua</h3>
                        <button class="close"><i class="fas fa-times"></i></button>
                      </div>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque a consequuntur aliquam ea voluptatum dolorum blanditiis facilis error laudantium fugit accusamus, quia debitis illum sed aut reiciendis distinctio necessitatibus dolor.</p>
                      <p><b>Peso:</b> 100 gramos</p>
                      <p><b>Cantidad disponible:</b> 10</p>
                      <button class="add-to-cart1">Agregar al carrito</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <footer>
      <div class="conteiner">
        <div class="header">
          <div class="logo">
            <span></span>
          </div>
        </div>
        <hr>
        <div class="section">
          <div>
            <h2>Empresa</h2>
            <a href="Index.php">Inicio</a>
            <a href="ContactosUsuario.php">Contactanos</a>
            <a href="Nosotros.php">Nosotros</a>
          </div>
          <div>
            <h2>Servicios</h2>
            <a href="#">Domicilios</a>
            <a href="#">Pedios Especiales</a>
          </div>
          <div>
            <h2>Redes Sociales</h2>
            <div class="shop-cart">
              <ul>
                <li>
                  <a href="https://www.facebook.com/ronaldo.stiven52">
                    <i class="fab fa-facebook-f icon"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa-brands fa-x-twitter"></i>
                  </a>
                </li>
                <li>
                  <a href="https://wa.me/+573154875304">
                    <i class="fab fa-whatsapp icon"></i>
                  </a>
                </li>
                <li>
                  <a href="https://www.instagram.com/ronaldo07_rg/">
                    <i class="fab fa-instagram icon"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="Rights">
          <p>Copyright©2023LaBaguette. All right reserved</p>
          <p>Privacy Policy Terms and conditions</p>
        </div>
      </div>
    </footer>
  </div>
  <div id="over" class="over">
    <div id="lay" class="lay">
      <h1>Factura</h1>
      <div class="logos">
        <img class="imgs" src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Encabezado%20y%20pie%20de%20pagina/LaBaguette-Encabezado.png?raw=true"></a>
      </div class="colum">
      <div class="col1">
        <div class="lum">
          <h1>Para</h1>
          <p>Alberto Gustabo Perez</p>
        </div>
        <div class="lum">
          <h1>N°factura</h1>
          <p>2023-000001</p>
        </div>
        <div class="lum">
          <h1>Fecha</h1>
          <p>31/01/2023</p>
        </div>
      </div>
      <div class="sol">
        <h1>Direccion de entrega</h1>
        <p>Cll XY # AB-CD B/ ""</p>
      </div>
      <div class="linea"></div>
      <div class="col2">
        <div class="lum">
          <h1>Cantidad</h1>
          <p>03</p>
          <p>05</p>
        </div>
        <div class="lum">
          <h1>Articulo</h1>
          <p>galletas</p>
          <p>panes</p>
        </div>
        <div class="lum">
          <h1>Producto</h1>
          <p>cucas</p>
          <p>pan de coco</p>
        </div>
        <div>
          <h1>Total</h1>
          <p>$1.500</p>
          <p>$15.000</p>
        </div>
      </div>
      <div class="linea"></div>
      <div class="col3">
        <div class="domi">
          <h1>Domicilo</h1>
          <p>$2.000</p>
        </div>
        <div class="domi">
          <h1>Subtotal</h1>
          <p>$18.500</p>
        </div>
      </div>
      <div>
        <button id="bon" class="bon">Volver al inicio</button>
      </div>
    </div>
  </div>
  </div>
</body>
<script src="../assets/js/main.js"></script>
<script src="../assets/js/botonSubtotal.js"></script>
<script src="../assets/js/mainCatalogo.js"></script>

</html>