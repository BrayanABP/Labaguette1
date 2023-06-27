<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Inventario> $inventarios
 */
?>
<div class="inventarios index content">
    <?= $this->Html->link(__('New Inventario'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Inventarios') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_referencia') ?></th>
                    <th><?= $this->Paginator->sort('cantidad_inicial') ?></th>
                    <th><?= $this->Paginator->sort('cantidad_disponible') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($inventarios as $inventario): ?>
                <tr>
                    <td><?= $this->Number->format($inventario->id_referencia) ?></td>
                    <td><?= $this->Number->format($inventario->cantidad_inicial) ?></td>
                    <td><?= $this->Number->format($inventario->cantidad_disponible) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $inventario->id_referencia]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $inventario->id_referencia]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $inventario->id_referencia], ['confirm' => __('Are you sure you want to delete # {0}?', $inventario->id_referencia)]) ?>
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
