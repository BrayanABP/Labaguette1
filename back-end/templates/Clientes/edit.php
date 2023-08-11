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
            <?= $this->Form->postLink(
                __('Eliminar'),
                ['action' => 'delete', $cliente->id],
                ['confirm' => __('¿Estás seguro de que quieres eliminarlo {0}?', $cliente->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Clientes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive d-flex justify-content-center align-items-center">
        <div class="clientes form content col-6 text-center">
            <?= $this->Form->create($cliente) ?>
            <fieldset>
                <legend><?= __('Editar Cliente') ?></legend>
                <?php
                    echo $this->Form->control('tdoc', ['label'=> 'Tipo de documento' , 'class' => 'col-9 text-center']);
                    echo $this->Form->control('ndocu');
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('fnaci');
                    echo $this->Form->control('correo');
                    echo $this->Form->control('direccion');
                    echo $this->Form->control('numcont');
                    echo $this->Form->control('contra');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Guardar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
