<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Inventario $inventario
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Acciones') ?></h4>
            <?= $this->Html->link(__('Lista de Inventarios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="inventarios form content">
            <?= $this->Form->create($inventario) ?>
            <fieldset>
                <legend><?= __('Añadir Inventario') ?></legend>
                <?php
                    echo $this->Form->control('cantidad_inicial');
                    echo $this->Form->control('cantidad_disponible');
                    echo $this->Form->control('producto');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Guardars')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
