<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Inventario $inventario
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Inventario'), ['action' => 'edit', $inventario->id_referencia], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Inventario'), ['action' => 'delete', $inventario->id_referencia], ['confirm' => __('Are you sure you want to delete # {0}?', $inventario->id_referencia), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Inventarios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Inventario'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
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
            </table>
        </div>
    </div>
</div>
