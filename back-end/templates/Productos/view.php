<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Producto $producto
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading mt-5"><?= __('Acciones') ?></h4>
            <?= $this->Html->link(__('Editar Producto'), ['action' => 'edit', $producto->id_producto], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Eliminar Producto'), ['action' => 'delete', $producto->id_producto], ['confirm' => __('¿Estás seguro de que quieres eliminarlo {0}?', $producto->id_producto), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Productos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Nuevo Producto'), ['action' => 'add'], ['class' => 'side-nav-item mb-5']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="productos view content">
            <h3><?= h($producto->id_producto) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($producto->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Producto') ?></th>
                    <td><?= $this->Number->format($producto->id_producto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Precio') ?></th>
                    <td><?= $this->Number->format($producto->precio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cantidad') ?></th>
                    <td><?= $this->Number->format($producto->cantidad) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
