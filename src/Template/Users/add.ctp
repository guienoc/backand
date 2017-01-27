<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Plans'), ['controller' => 'Plans', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Plan'), ['controller' => 'Plans', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Domains'), ['controller' => 'Domains', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Domain'), ['controller' => 'Domains', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('username');
            echo $this->Form->input('password');
            echo $this->Form->input('status');
            echo $this->Form->input('plan_id', ['options' => $plans]);
            echo $this->Form->input('cpf');
            echo $this->Form->input('birth_date');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
