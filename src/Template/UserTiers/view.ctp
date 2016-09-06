<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User Tier'), ['action' => 'edit', $userTier->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User Tier'), ['action' => 'delete', $userTier->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userTier->id)]) ?> </li>
        <li><?= $this->Html->link(__('List User Tiers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Tier'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="userTiers view large-9 medium-8 columns content">
    <h3><?= h($userTier->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $userTier->has('user') ? $this->Html->link($userTier->user->id, ['controller' => 'Users', 'action' => 'view', $userTier->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($userTier->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Amount Spent') ?></th>
            <td><?= $this->Number->format($userTier->amount_spent) ?></td>
        </tr>
        <tr>
            <th><?= __('Year') ?></th>
            <td><?= $this->Number->format($userTier->year) ?></td>
        </tr>
        <tr>
            <th><?= __('Effective Discount Rate') ?></th>
            <td><?= $this->Number->format($userTier->effective_discount_rate) ?></td>
        </tr>
        <tr>
            <th><?= __('Tier Id') ?></th>
            <td><?= $this->Number->format($userTier->tier_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Start Date') ?></th>
            <td><?= h($userTier->start_date) ?></td>
        </tr>
        <tr>
            <th><?= __('End Date') ?></th>
            <td><?= h($userTier->end_date) ?></td>
        </tr>
    </table>
</div>
