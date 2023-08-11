<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Inventario> $inventarios
 */
?>
<div class="inventarios index content">
    <?= $this->Html->link(__('Nuevo Inventario'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Inventarios') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_referencia') ?></th>
                    <th><?= $this->Paginator->sort('cantidad_inicial') ?></th>
                    <th><?= $this->Paginator->sort('cantidad_disponible') ?></th>
                    <th><?= $this->Paginator->sort('producto') ?></th>
                    <th class="actions"><?= __('Acciones') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($inventarios as $inventario): ?>
                <tr>
                    <td><?= $this->Number->format($inventario->id_referencia) ?></td>
                    <td><?= $this->Number->format($inventario->cantidad_inicial) ?></td>
                    <td><?= $this->Number->format($inventario->cantidad_disponible) ?></td>
                    <td><?= h($inventario->producto) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $inventario->id_referencia]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $inventario->id_referencia]) ?>
                        <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $inventario->id_referencia], ['confirm' => __('¿Estás seguro de que quieres eliminarlo {0}?', $inventario->id_referencia)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
