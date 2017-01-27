<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Plans'), ['controller' => 'Plans', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Plan'), ['controller' => 'Plans', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Domains'), ['controller' => 'Domains', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Domain'), ['controller' => 'Domains', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($user->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Plan') ?></th>
            <td><?= $user->has('plan') ? $this->Html->link($user->plan->name, ['controller' => 'Plans', 'action' => 'view', $user->plan->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cpf') ?></th>
            <td><?= h($user->cpf) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($user->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Birth Date') ?></th>
            <td><?= h($user->birth_date) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Domains') ?></h4>
        <?php if (!empty($user->domains)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->domains as $domains): ?>
            <tr>
                <td><?= h($domains->id) ?></td>
                <td><?= h($domains->name) ?></td>
                <td><?= h($domains->created) ?></td>
                <td><?= h($domains->modified) ?></td>
                <td><?= h($domains->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Domains', 'action' => 'view', $domains->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Domains', 'action' => 'edit', $domains->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Domains', 'action' => 'delete', $domains->id], ['confirm' => __('Are you sure you want to delete # {0}?', $domains->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
