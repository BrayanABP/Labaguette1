<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contacto $contacto
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Acciones') ?></h4>
            <?= $this->Html->link(__('Editar Contacto'), ['action' => 'edit', $contacto->idcontacto], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Eliminar Contacto'), ['action' => 'delete', $contacto->idcontacto], ['confirm' => __('¿Estás seguro de que quieres eliminarlo {0}?', $contacto->idcontacto), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Contactos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Contacto Nueve'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="contactos view content">
            <h3><?= h($contacto->idcontacto) ?></h3>
            <table>
                <tr>
                    <th><?= __('Correo') ?></th>
                    <td><?= h($contacto->correo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mensaje') ?></th>
                    <td><?= h($contacto->mensaje) ?></td>
                </tr>
                <tr>
                    <th><?= __('Idcontacto') ?></th>
                    <td><?= $this->Number->format($contacto->idcontacto) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Nombre') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($contacto->nombre)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Apellido') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($contacto->apellido)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
