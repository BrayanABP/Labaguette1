<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pedido $pedido
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Pedido'), ['action' => 'edit', $pedido->id_pedido], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Pedido'), ['action' => 'delete', $pedido->id_pedido], ['confirm' => __('Are you sure you want to delete # {0}?', $pedido->id_pedido), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Pedidos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Pedido'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="pedidos view content">
            <h3><?= h($pedido->id_pedido) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nom Producto') ?></th>
                    <td><?= h($pedido->nom_producto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estado') ?></th>
                    <td><?= h($pedido->estado) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estado Producto') ?></th>
                    <td><?= h($pedido->estado_producto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Pedido') ?></th>
                    <td><?= $this->Number->format($pedido->id_pedido) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cantidad') ?></th>
                    <td><?= $this->Number->format($pedido->cantidad) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>