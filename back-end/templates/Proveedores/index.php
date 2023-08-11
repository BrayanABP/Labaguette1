<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Proveedore> $proveedores
 */
?>
<div class="proveedores index content">
    <?= $this->Html->link(__('New Proveedore'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Proveedores') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_proveedor') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('apellidos') ?></th>
                    <th><?= $this->Paginator->sort('numero_de_contacto') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($proveedores as $proveedore): ?>
                <tr>
                    <td><?= $this->Number->format($proveedore->id_proveedor) ?></td>
                    <td><?= h($proveedore->nombre) ?></td>
                    <td><?= h($proveedore->apellidos) ?></td>
                    <td><?= h($proveedore->numero_de_contacto) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $proveedore->id_proveedor]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $proveedore->id_proveedor]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $proveedore->id_proveedor], ['confirm' => __('Are you sure you want to delete # {0}?', $proveedore->id_proveedor)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
