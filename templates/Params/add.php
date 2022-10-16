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
            <?= $this->Html->link(__('List Params'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="params form content">
            <?= $this->Form->create($param) ?>
            <fieldset>
                <legend><?= __('Add Param') ?></legend>
                <?php
                    echo $this->Form->control('param_key');
                    echo $this->Form->control('valueStr');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
