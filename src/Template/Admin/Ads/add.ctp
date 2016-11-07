<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Ads'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Type Ads'), ['controller' => 'TypeAds', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Type Ad'), ['controller' => 'TypeAds', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Towns'), ['controller' => 'Towns', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Town'), ['controller' => 'Towns', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ad Images'), ['controller' => 'AdImages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ad Image'), ['controller' => 'AdImages', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ad Messages'), ['controller' => 'AdMessages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ad Message'), ['controller' => 'AdMessages', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ads form large-9 medium-8 columns content">
    <?= $this->Form->create($ad) ?>
    <fieldset>
        <legend><?= __('Add Ad') ?></legend>
        <?php
            echo $this->Form->input('user_id', ['options' => $users]);
            echo $this->Form->input('type_ad_id', ['options' => $typeAds]);
            echo $this->Form->input('for_rent');
            echo $this->Form->input('for_sale');
            echo $this->Form->input('price');
            echo $this->Form->input('description');
            echo $this->Form->input('town_id', ['options' => $towns]);
            echo $this->Form->input('ads_name');
            echo $this->Form->input('picture_url');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
