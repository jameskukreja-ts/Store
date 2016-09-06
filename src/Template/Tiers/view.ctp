<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tier'), ['action' => 'edit', $tier->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tier'), ['action' => 'delete', $tier->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tier->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tiers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tier'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tiers view large-9 medium-8 columns content">
    <h3><?= h($tier->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($tier->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($tier->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Lowerbound') ?></th>
            <td><?= $this->Number->format($tier->lowerbound) ?></td>
        </tr>
        <tr>
            <th><?= __('Upperbound') ?></th>
            <td><?= $this->Number->format($tier->upperbound) ?></td>
        </tr>
        <tr>
            <th><?= __('Multiplier') ?></th>
            <td><?= $this->Number->format($tier->multiplier) ?></td>
        </tr>
        <tr>
            <th><?= __('Point Limit') ?></th>
            <td><?= $this->Number->format($tier->point_limit) ?></td>
        </tr>
    </table>
</div>
