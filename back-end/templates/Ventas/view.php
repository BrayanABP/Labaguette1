<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Venta $venta
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Venta'), ['action' => 'edit', $venta->id_venta], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Venta'), ['action' => 'delete', $venta->id_venta], ['confirm' => __('Are you sure you want to delete # {0}?', $venta->id_venta), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Ventas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Venta'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="ventas view content">
            <h3><?= h($venta->id_venta) ?></h3>
            <table>
                <tr>
                    <th><?= __('Factura') ?></th>
                    <td><?= h($venta->factura) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Venta') ?></th>
                    <td><?= $this->Number->format($venta->id_venta) ?></td>
                </tr>
                <tr>
                    <th><?= __('Total') ?></th>
                    <td><?= $this->Number->format($venta->total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cajero Identificacion') ?></th>
                    <td><?= $this->Number->format($venta->cajero_identificacion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha') ?></th>
                    <td><?= h($venta->fecha) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hora') ?></th>
                    <td><?= h($venta->hora) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
