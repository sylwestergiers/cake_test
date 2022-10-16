<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Param> $params
 */
?>
<div class="params index content">
    <?= $this->Html->link(__('New Param'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Params') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('param_key') ?></th>
                    <th><?= $this->Paginator->sort('valueStr') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($params as $param): ?>
                <tr>
                    <td><?= $this->Number->format($param->id) ?></td>
                    <td><?= h($param->param_key) ?></td>
                    <td><?= h($param->valueStr) ?></td>
                    <td><?= h($param->created) ?></td>
                    <td><?= h($param->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $param->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $param->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $param->id], ['confirm' => __('Are you sure you want to delete # {0}?', $param->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
