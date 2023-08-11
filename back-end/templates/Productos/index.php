<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Producto> $productos
 */
?>
<div class="productos index content">
    <?= $this->Html->link(__('Nuevo Producto'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Productos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_producto') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('precio') ?></th>
                    <th><?= $this->Paginator->sort('cantidad') ?></th>
                    <th class="actions"><?= __('Acciones') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productos as $producto): ?>
                <tr>
                    <td><?= $this->Number->format($producto->id_producto) ?></td>
                    <td><?= h($producto->nombre) ?></td>
                    <td><?= $this->Number->format($producto->precio) ?></td>
                    <td><?= $this->Number->format($producto->cantidad) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $producto->id_producto]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $producto->id_producto]) ?>
                        <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $producto->id_producto], ['confirm' => __('¿Estás seguro de que quieres eliminarlo {0}?', $producto->id_producto)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
