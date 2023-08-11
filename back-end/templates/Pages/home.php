
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
</head>
<body>
<div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="row">
          <div class="col-12 bg-secondary text-center text-white mt-5">
            <h3 class="text-white">Clientes</h3>
            <i class="fas fa-users fa-6x mb-3"></i>
            <div class="mt-3 mb-3">
            <?= $this->Html->link('Lista Clientes', ['controller' => 'Clientes', 'action' => 'index'], ['class' => 'btn btn-lg btn-primary  mb-3']) ?>
            <?= $this->Html->link('Agregar Clientes', ['controller' => 'Clientes', 'action' => 'add '], ['class' => 'btn btn-lg btn-primary ml-5 mb-3']) ?>
            </div>  
        </div>
          <div class="col-12 bg-secondary text-center text-white mt-5">
            <h3 class="text-white">Contactos</h3>
            <i class="fas fa-address-book fa-6x mb-3"></i>
            <div class="mt-3 mb-3">
            <?= $this->Html->link('Lista Contactos', ['controller' => 'Contactos', 'action' => 'index'], ['class' => 'btn btn-lg btn-primary  mb-3']) ?>
            <?= $this->Html->link('Agregar Contactos', ['controller' => 'Contactos', 'action' => 'add '], ['class' => 'btn btn-lg btn-primary ml-5 mb-3']) ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="row">
          <div class="col-12 bg-secondary text-center text-white mt-5">
            <h3 class="text-white">Inventarios</h3>
            <i class="fas fa-clipboard-list fa-6x mb-3"></i>
            <div class="mt-3 mb-3">
            <?= $this->Html->link('Lista Inventarios', ['controller' => 'Inventarios', 'action' => 'index'], ['class' => 'btn btn-lg btn-primary  mb-3']) ?>
            <?= $this->Html->link('Agregar Inventarios', ['controller' => 'Inventarios', 'action' => 'add '], ['class' => 'btn btn-lg btn-primary ml-5 mb-3']) ?>
            </div>
          </div>
          <div class="col-12 bg-secondary text-center text-white mt-5">
            <h3 class="text-white">Pedidos</h3>
            <i class="fas fa-shopping-cart fa-6x mb-3"></i>
            <div class="mt-3 mb-3">
            <?= $this->Html->link('Lista Pedidos', ['controller' => 'Pedidos', 'action' => 'index'], ['class' => 'btn btn-lg btn-primary  mb-3']) ?>
            <?= $this->Html->link('Agregar Pedidos', ['controller' => 'Pedidos', 'action' => 'add '], ['class' => 'btn btn-lg btn-primary ml-5 mb-3']) ?>
            </div>
          </div>
          <div class="col-12 bg-secondary text-center text-white mt-5">
            <h3 class="text-white">Productos</h3>
            <i class="fas fa-box-open fa-6x mb-3"></i>
            <div class="mt-3 mb-3">
            <?= $this->Html->link('Lista Productos', ['controller' => 'Productos', 'action' => 'index'], ['class' => 'btn btn-lg btn-primary  mb-3']) ?>
            <?= $this->Html->link('Agregar Productos', ['controller' => 'Productos', 'action' => 'add '], ['class' => 'btn btn-lg btn-primary ml-5 mb-3']) ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="row">
          <div class="col-12 bg-secondary text-center text-white mt-5">
            <h3 class="text-white">Proveedores</h3>
            <i class="fas fa-clipboard-list fa-6x mb-3"></i>
            <div class="mt-3 mb-3">
            <?= $this->Html->link('Lista Proveedores', ['controller' => 'Proveedores', 'action' => 'index'], ['class' => 'btn btn-lg btn-primary  mb-3']) ?>
            <?= $this->Html->link('Agregar Proveedores', ['controller' => 'Proveedores', 'action' => 'add '], ['class' => 'btn btn-lg btn-primary ml-5 mb-3']) ?>
            </div>
          </div>
          <div class="col-12 bg-secondary text-center text-white mt-5">
            <h3 class="text-white">Ventas</h3>
            <i class="fas fa-shopping-cart fa-6x mb-3"></i>
            <div class="mt-3 mb-3">
            <?= $this->Html->link('Lista Ventas', ['controller' => 'Ventas', 'action' => 'index'], ['class' => 'btn btn-lg btn-primary  mb-3']) ?>
            <?= $this->Html->link('Agregar Ventas', ['controller' => 'Ventas', 'action' => 'add '], ['class' => 'btn btn-lg btn-primary ml-5 mb-3']) ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class=" text-center mt-4">
        <a href="..\php\CerrarSesion.php" class="btn btn-lg btn-danger">Salir modo admin</a>
        </div>
  </div>
</body>
</html>