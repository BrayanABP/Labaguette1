     
<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */


?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <?= $this->Html->css(['normalize.min', 'milligram.min', 'cake']) ?>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark ">
    <div class=" navbar-collapse container justify-content-center" id="navbarNav">
        <ul class="navbar-nav ">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="menuClientes" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Clientes
                </a>
                <div class="dropdown-menu" aria-labelledby="menuClientes">
                    <?= $this->Html->link('Lista Clientes', ['controller' => 'Clientes', 'action' => 'index'], ['class' => 'dropdown-item']) ?>
                    <?= $this->Html->link('Agregar Cliente', ['controller' => 'Clientes', 'action' => 'add'], ['class' => 'dropdown-item']) ?>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="menuContactos" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Contactos
                </a>
                <div class="dropdown-menu" aria-labelledby="menuContactos">
                    <?= $this->Html->link('Lista Contactos', ['controller' => 'Contactos', 'action' => 'index'], ['class' => 'dropdown-item']) ?>
                    <?= $this->Html->link('Agregar Contactos', ['controller' => 'Contactos', 'action' => 'add'], ['class' => 'dropdown-item']) ?>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="menuInventarios" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Inventarios
                </a>
                <div class="dropdown-menu" aria-labelledby="menuInventarios">
                    <?= $this->Html->link('Lista Inventarios', ['controller' => 'Inventarios', 'action' => 'index'], ['class' => 'dropdown-item']) ?>
                    <?= $this->Html->link('Agregar Inventarios', ['controller' => 'Inventarios', 'action' => 'add'], ['class' => 'dropdown-item']) ?>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="menuPedidos" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Pedidos
                </a>
                <div class="dropdown-menu" aria-labelledby="menuPedidos">
                    <?= $this->Html->link('Lista Pedidos', ['controller' => 'Pedidos', 'action' => 'index'], ['class' => 'dropdown-item']) ?>
                    <?= $this->Html->link('Agregar Pedidos', ['controller' => 'Pedidos', 'action' => 'add'], ['class' => 'dropdown-item']) ?>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="menuProductos" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Productos
                </a>
                <div class="dropdown-menu" aria-labelledby="menuProductos">
                    <?= $this->Html->link('Lista Productos', ['controller' => 'Productos', 'action' => 'index'], ['class' => 'dropdown-item']) ?>
                    <?= $this->Html->link('Agregar Productos', ['controller' => 'Productos', 'action' => 'add'], ['class' => 'dropdown-item']) ?>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="menuProveedores" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Proveedores
                </a>
                <div class="dropdown-menu" aria-labelledby="menuProveedores">
                    <?= $this->Html->link('Lista Proveedores', ['controller' => 'Proveedores', 'action' => 'index'], ['class' => 'dropdown-item']) ?>
                    <?= $this->Html->link('Agregar Proveedores', ['controller' => 'Proveedores', 'action' => 'add'], ['class' => 'dropdown-item']) ?>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="menuVentas" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Ventas
                </a>
                <div class="dropdown-menu" aria-labelledby="menuVentas">
                    <?= $this->Html->link('Lista Ventas', ['controller' => 'Ventas', 'action' => 'index'], ['class' => 'dropdown-item']) ?>
                    <?= $this->Html->link('Agregar Ventas', ['controller' => 'Ventas', 'action' => 'add'], ['class' => 'dropdown-item']) ?>
                </div>
            </li>
        </ul>
    </div>
</nav>
<div class="container text-center">
        <?= $this->Html->link('Mi sitio', ['controller' => 'Pages', 'action' => 'index'], ['class' => 'fas fa-home mt-5 mb-5']) ?>
    </div>
    
    <main class="main">
        <div class="container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>
    <footer>

    </footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
