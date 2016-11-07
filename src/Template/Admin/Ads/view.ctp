<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ad'), ['action' => 'edit', $ad->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ad'), ['action' => 'delete', $ad->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ad->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ads'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ad'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Type Ads'), ['controller' => 'TypeAds', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Type Ad'), ['controller' => 'TypeAds', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Towns'), ['controller' => 'Towns', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Town'), ['controller' => 'Towns', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ad Images'), ['controller' => 'AdImages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ad Image'), ['controller' => 'AdImages', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ad Messages'), ['controller' => 'AdMessages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ad Message'), ['controller' => 'AdMessages', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ads view large-9 medium-8 columns content">
    <h3><?= h($ad->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $ad->has('user') ? $this->Html->link($ad->user->id, ['controller' => 'Users', 'action' => 'view', $ad->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Type Ad') ?></th>
            <td><?= $ad->has('type_ad') ? $this->Html->link($ad->type_ad->id, ['controller' => 'TypeAds', 'action' => 'view', $ad->type_ad->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Town') ?></th>
            <td><?= $ad->has('town') ? $this->Html->link($ad->town->id, ['controller' => 'Towns', 'action' => 'view', $ad->town->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Ads Name') ?></th>
            <td><?= h($ad->ads_name) ?></td>
        </tr>
        <tr>
            <th><?= __('Picture Url') ?></th>
            <td><?= h($ad->picture_url) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($ad->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Price') ?></th>
            <td><?= $this->Number->format($ad->price) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($ad->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($ad->modified) ?></td>
        </tr>
        <tr>
            <th><?= __('For Rent') ?></th>
            <td><?= $ad->for_rent ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th><?= __('For Sale') ?></th>
            <td><?= $ad->for_sale ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($ad->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Ad Images') ?></h4>
        <?php if (!empty($ad->ad_images)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Ad Id') ?></th>
                <th><?= __('Description') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($ad->ad_images as $adImages): ?>
            <tr>
                <td><?= h($adImages->id) ?></td>
                <td><?= h($adImages->ad_id) ?></td>
                <td><?= h($adImages->description) ?></td>
                <td><?= h($adImages->created) ?></td>
                <td><?= h($adImages->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'AdImages', 'action' => 'view', $adImages->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'AdImages', 'action' => 'edit', $adImages->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'AdImages', 'action' => 'delete', $adImages->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adImages->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Ad Messages') ?></h4>
        <?php if (!empty($ad->ad_messages)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Ad Id') ?></th>
                <th><?= __('First Name') ?></th>
                <th><?= __('Email') ?></th>
                <th><?= __('Message') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($ad->ad_messages as $adMessages): ?>
            <tr>
                <td><?= h($adMessages->id) ?></td>
                <td><?= h($adMessages->ad_id) ?></td>
                <td><?= h($adMessages->first_name) ?></td>
                <td><?= h($adMessages->email) ?></td>
                <td><?= h($adMessages->message) ?></td>
                <td><?= h($adMessages->created) ?></td>
                <td><?= h($adMessages->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'AdMessages', 'action' => 'view', $adMessages->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'AdMessages', 'action' => 'edit', $adMessages->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'AdMessages', 'action' => 'delete', $adMessages->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adMessages->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
