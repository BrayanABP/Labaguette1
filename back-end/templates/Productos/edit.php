<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Producto $producto
 * @var string[]|\Cake\Collection\CollectionInterface $proveedores
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading mt-5"><?= __('Acciones') ?></h4>
            <?= $this->Form->postLink(
                __('Eliminar'),
                ['action' => 'delete', $producto->id_producto],
                ['confirm' => __('¿Estás seguro de que quieres eliminarlo {0}?', $producto->id_producto), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Productos'), ['action' => 'index'], ['class' => 'side-nav-item mb-5']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="productos form content">
            <?= $this->Form->create($producto) ?>
            <fieldset>
                <legend><?= __('Edit Producto') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('precio');
                    echo $this->Form->control('cantidad');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Guardar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
