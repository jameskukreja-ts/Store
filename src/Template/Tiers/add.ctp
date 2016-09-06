<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tiers'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tiers form large-9 medium-8 columns content">
    <?= $this->Form->create($tier) ?>
    <fieldset>
        <legend><?= __('Add Tier') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('lowerbound');
            echo $this->Form->input('upperbound');
            echo $this->Form->input('multiplier');
            echo $this->Form->input('point_limit');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
