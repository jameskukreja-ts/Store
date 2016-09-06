<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tier'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tiers index large-9 medium-8 columns content">
    <h3><?= __('Tiers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('lowerbound') ?></th>
                <th><?= $this->Paginator->sort('upperbound') ?></th>
                <th><?= $this->Paginator->sort('multiplier') ?></th>
                <th><?= $this->Paginator->sort('point_limit') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tiers as $tier): ?>
            <tr>
                <td><?= $this->Number->format($tier->id) ?></td>
                <td><?= h($tier->name) ?></td>
                <td><?= $this->Number->format($tier->lowerbound) ?></td>
                <td><?= $this->Number->format($tier->upperbound) ?></td>
                <td><?= $this->Number->format($tier->multiplier) ?></td>
                <td><?= $this->Number->format($tier->point_limit) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tier->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tier->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tier->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tier->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
