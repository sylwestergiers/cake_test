<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Param $param
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Param'), ['action' => 'edit', $param->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Param'), ['action' => 'delete', $param->id], ['confirm' => __('Are you sure you want to delete # {0}?', $param->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Params'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Param'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="params view content">
            <h3><?= h($param->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Param Key') ?></th>
                    <td><?= h($param->param_key) ?></td>
                </tr>
                <tr>
                    <th><?= __('value_str') ?></th>
                    <td><?= h($param->value_str) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($param->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($param->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($param->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
