<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $userTier->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $userTier->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List User Tiers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="userTiers form large-9 medium-8 columns content">
    <?= $this->Form->create($userTier) ?>
    <fieldset>
        <legend><?= __('Edit User Tier') ?></legend>
        <?php
            echo $this->Form->input('amount_spent');
            echo $this->Form->input('year');
            echo $this->Form->input('effective_discount_rate');
            echo $this->Form->input('start_date');
            echo $this->Form->input('end_date');
            echo $this->Form->input('user_id', ['options' => $users]);
            echo $this->Form->input('tier_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
