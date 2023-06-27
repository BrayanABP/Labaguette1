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
            <?= $this->Html->link(__('Edit Baki'), ['action' => 'edit', $baki->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Baki'), ['action' => 'delete', $baki->id], ['confirm' => __('Are you sure you want to delete # {0}?', $baki->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Baki'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Baki'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="baki view content">
            <h3><?= h($baki->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($baki->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($baki->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
