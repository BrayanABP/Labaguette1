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
            <?= $this->Form->postLink(
                __('Eliminar'),
                ['action' => 'delete', $contacto->idcontacto],
                ['confirm' => __('¿Estás seguro de que quieres eliminarlo {0}?', $contacto->idcontacto), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Contactos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="contactos form content">
            <?= $this->Form->create($contacto) ?>
            <fieldset>
                <legend><?= __('Editar Contacto') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('apellido');
                    echo $this->Form->control('correo');
                    echo $this->Form->control('mensaje');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
