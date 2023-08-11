<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Producto $producto
 * @var \Cake\Collection\CollectionInterface|string[] $proveedores
 */
?>
<div class="row">
    <aside class="container ">
        <div class="side-nav">
            <h4 class="heading text-center"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Productos'), ['action' => 'index'], ['class' => 'side-nav-item mb-5 text-center']) ?>
        </div>
    </aside>
    <div class="column-responsive d-flex justify-content-center align-items-center">
        <div class="productos form content col-6 text-center ">
            <?= $this->Form->create($producto) ?>
            <fieldset>
                <div class="">
                    <legend><?= __('Añadir Producto') ?></legend>
                    <?php
                        echo $this->Form->control('Nombre',['class' => 'col-9 text-center']);
                        echo $this->Form->control('Precio',['class' => 'col-9 text-center']);
                        echo $this->Form->control('Cantidad',['class' => 'col-9 text-center']);
                    ?>
                </div>
            </fieldset>
            <?= $this->Form->button(__('Guardar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
