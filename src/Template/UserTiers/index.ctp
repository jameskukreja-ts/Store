<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New User Tier'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="userTiers index large-9 medium-8 columns content">
    <h3><?= __('User Tiers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('amount_spent') ?></th>
                <th><?= $this->Paginator->sort('year') ?></th>
                <th><?= $this->Paginator->sort('effective_discount_rate') ?></th>
                <th><?= $this->Paginator->sort('start_date') ?></th>
                <th><?= $this->Paginator->sort('end_date') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th><?= $this->Paginator->sort('tier_id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($userTiers as $userTier): ?>
            <tr>
                <td><?= $this->Number->format($userTier->id) ?></td>
                <td><?= $this->Number->format($userTier->amount_spent) ?></td>
                <td><?= $this->Number->format($userTier->year) ?></td>
                <td><?= $this->Number->format($userTier->effective_discount_rate) ?></td>
                <td><?= h($userTier->start_date) ?></td>
                <td><?= h($userTier->end_date) ?></td>
                <td><?= $userTier->has('user') ? $this->Html->link($userTier->user->id, ['controller' => 'Users', 'action' => 'view', $userTier->user->id]) : '' ?></td>
                <td><?= $this->Number->format($userTier->tier_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $userTier->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $userTier->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $userTier->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userTier->id)]) ?>
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
