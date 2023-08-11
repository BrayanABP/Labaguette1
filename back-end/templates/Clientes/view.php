<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cliente $cliente
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Editar Cliente'), ['action' => 'edit', $cliente->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Eliminar Cliente'), ['action' => 'delete', $cliente->id], ['confirm' => __('¿Estás seguro de que quieres eliminarlo {0}?', $cliente->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Clientes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Cliente Nuevo'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="clientes view content">
            <h3><?= h($cliente->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Tdoc') ?></th>
                    <td><?= h($cliente->tdoc) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($cliente->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fnaci') ?></th>
                    <td><?= h($cliente->fnaci) ?></td>
                </tr>
                <tr>
                    <th><?= __('Correo') ?></th>
                    <td><?= h($cliente->correo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Direccion') ?></th>
                    <td><?= h($cliente->direccion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Numcont') ?></th>
                    <td><?= h($cliente->numcont) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($cliente->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ndocu') ?></th>
                    <td><?= $this->Number->format($cliente->ndocu) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contra') ?></th>
                    <td><?= $this->Number->format($cliente->contra) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
