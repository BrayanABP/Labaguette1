<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Pedido> $pedidos
 */
?>
<div class="pedidos index content">
    <?= $this->Html->link(__('Nuevo Pedido'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Pedidos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_pedido') ?></th>
                    <th><?= $this->Paginator->sort('nom_producto') ?></th>
                    <th><?= $this->Paginator->sort('cantidad') ?></th>
                    <th><?= $this->Paginator->sort('estado') ?></th>
                    <th><?= $this->Paginator->sort('estado_producto') ?></th>
                    <th class="actions"><?= __('Acciones') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pedidos as $pedido): ?>
                <tr>
                    <td><?= $this->Number->format($pedido->id_pedido) ?></td>
                    <td><?= h($pedido->nom_producto) ?></td>
                    <td><?= $this->Number->format($pedido->cantidad) ?></td>
                    <td><?= h($pedido->estado) ?></td>
                    <td><?= h($pedido->estado_producto) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $pedido->id_pedido]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $pedido->id_pedido]) ?>
                        <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $pedido->id_pedido], ['confirm' => __('¿Estás seguro de que quieres eliminarlo {0}?', $pedido->id_pedido)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
