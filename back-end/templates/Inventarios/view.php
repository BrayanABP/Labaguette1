<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Inventario $inventario
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Acciones') ?></h4>
            <?= $this->Html->link(__('Editar Inventario'), ['action' => 'edit', $inventario->id_referencia], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Eliminar Inventario'), ['action' => 'delete', $inventario->id_referencia], ['confirm' => __('¿Estás seguro de que quieres eliminarlo {0}?', $inventario->id_referencia), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Inventarios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Inventario Nuevo'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="inventarios view content">
            <h3><?= h($inventario->id_referencia) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id Referencia') ?></th>
                    <td><?= $this->Number->format($inventario->id_referencia) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cantidad Inicial') ?></th>
                    <td><?= $this->Number->format($inventario->cantidad_inicial) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cantidad Disponible') ?></th>
                    <td><?= $this->Number->format($inventario->cantidad_disponible) ?></td>
                </tr>
                <tr>
                    <th><?= __('producto') ?></th>
                    <td><?= h($inventario->producto) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
