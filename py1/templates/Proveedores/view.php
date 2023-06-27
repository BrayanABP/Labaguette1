<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Proveedore $proveedore
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Proveedore'), ['action' => 'edit', $proveedore->id_proveedor], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Proveedore'), ['action' => 'delete', $proveedore->id_proveedor], ['confirm' => __('Are you sure you want to delete # {0}?', $proveedore->id_proveedor), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Proveedores'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Proveedore'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="proveedores view content">
            <h3><?= h($proveedore->id_proveedor) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($proveedore->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Apellidos') ?></th>
                    <td><?= h($proveedore->apellidos) ?></td>
                </tr>
                <tr>
                    <th><?= __('Numero De Contacto') ?></th>
                    <td><?= h($proveedore->numero_de_contacto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Proveedor') ?></th>
                    <td><?= $this->Number->format($proveedore->id_proveedor) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
