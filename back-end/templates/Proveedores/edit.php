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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $proveedore->id_proveedor],
                ['confirm' => __('Are you sure you want to delete # {0}?', $proveedore->id_proveedor), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Proveedores'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="proveedores form content">
            <?= $this->Form->create($proveedore) ?>
            <fieldset>
                <legend><?= __('Edit Proveedore') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('apellidos');
                    echo $this->Form->control('numero_de_contacto');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
