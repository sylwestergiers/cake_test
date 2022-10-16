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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $param->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $param->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Params'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="params form content">
            <?= $this->Form->create($param) ?>
            <fieldset>
                <legend><?= __('Edit Param') ?></legend>
                <?php
                    echo $this->Form->control('param_key');
                    echo $this->Form->control('value_str');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
