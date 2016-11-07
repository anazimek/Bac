<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Sexes'), ['controller' => 'Sexes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sex'), ['controller' => 'Sexes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ads'), ['controller' => 'Ads', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ad'), ['controller' => 'Ads', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Articles'), ['controller' => 'Articles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Article'), ['controller' => 'Articles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Comments'), ['controller' => 'Comments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Comment'), ['controller' => 'Comments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List User Images'), ['controller' => 'UserImages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User Image'), ['controller' => 'UserImages', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List User Messages'), ['controller' => 'UserMessages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User Message'), ['controller' => 'UserMessages', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->input('first_name');
            echo $this->Form->input('last_name');
            echo $this->Form->input('email');
            echo $this->Form->input('birthday');
            echo $this->Form->input('city');
            echo $this->Form->input('description');
            echo $this->Form->input('password');
            echo $this->Form->input('sexe_id', ['options' => $sexes, 'empty' => true]);
            echo $this->Form->input('work');
            echo $this->Form->input('profil_picture');
            echo $this->Form->input('linkedin_link');
            echo $this->Form->input('website_link');
            echo $this->Form->input('study');
            echo $this->Form->input('hobbie');
            echo $this->Form->input('username');
            echo $this->Form->input('is_admin');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
