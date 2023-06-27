<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Inventario $inventario
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $inventario->id_referencia],
                ['confirm' => __('Are you sure you want to delete # {0}?', $inventario->id_referencia), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Inventarios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="inventarios form content">
            <?= $this->Form->create($inventario) ?>
            <fieldset>
                <legend><?= __('Edit Inventario') ?></legend>
                <?php
                    echo $this->Form->control('cantidad_inicial');
                    echo $this->Form->control('cantidad_disponible');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
