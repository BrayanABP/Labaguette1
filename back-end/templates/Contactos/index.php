<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Contacto> $contactos
 */
?>
<div class="contactos index content">
    <?= $this->Html->link(__('Nuevo Contacto'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Contactos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idcontacto') ?></th>
                    <th><?= $this->Paginator->sort('correo') ?></th>
                    <th><?= $this->Paginator->sort('mensaje') ?></th>
                    <th class="actions"><?= __('Acciones') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($contactos as $contacto): ?>
                <tr>
                    <td><?= $this->Number->format($contacto->idcontacto) ?></td>
                    <td><?= h($contacto->correo) ?></td>
                    <td><?= h($contacto->mensaje) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $contacto->idcontacto]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $contacto->idcontacto]) ?>
                        <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $contacto->idcontacto], ['confirm' => __('¿Estás seguro de que quieres eliminarlo {0}?', $contacto->idcontacto)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>