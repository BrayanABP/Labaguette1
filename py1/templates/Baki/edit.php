<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $baki
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $baki->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $baki->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Baki'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="baki form content">
            <?= $this->Form->create($baki) ?>
            <fieldset>
                <legend><?= __('Edit Baki') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
