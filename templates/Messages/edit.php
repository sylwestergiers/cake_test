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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $message->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $message->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Messages'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="messages form content">
            <?= $this->Form->create($message) ?>
            <fieldset>
                <legend><?= __('Edit Message') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('subject');
                    echo $this->Form->control('email');
                    echo $this->Form->control('body');
                    echo $this->Form->control('agr_1', [
                        'type' => "checkbox",
                        'label' => !empty($message['agr_1'])?
                            $message['agr_1'] : $agr_1,
                        'value' => !empty($message['agr_1'])?
                            $message['agr_1'] : $agr_1,
                        'checked' => !empty($message['agr_1']),
                        'hiddenField' => false
                    ]);
                    echo $this->Form->control('agr_2', [
                        'type' => "checkbox",
                        'label' => !empty($message['agr_2'])?
                            $message['agr_2'] : $agr_2,
                        'value' => !empty($message['agr_1'])?
                            $message['agr_2'] : $agr_2,
                        'checked' => !empty($message['agr_2']),
                        'hiddenField' => false
                    ]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
