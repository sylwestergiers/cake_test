<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Message $message
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Messages'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="messages form content">
            <?= $this->Form->create($message) ?>
            <fieldset>
                <legend><?= __('Add Message') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('subject');
                    echo $this->Form->control('email');
                    echo $this->Form->control('body');
                    echo $this->Form->control('agr_1', [
                        'type' => "checkbox",
                        'label' => $agr_1,
                        'value' => $agr_1,
                        'hiddenField' => false
                    ]);
                    echo $this->Form->control('agr_2', [
                        'type' => "checkbox",
                        'label' => $agr_2,
                        'value' => $agr_2,
                        'hiddenField' => false
                    ]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
