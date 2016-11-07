<?php $this->layout = 'back'; ?>
<div class="ads index large-9 medium-8 columns content">
    <h3><?= __('Annonces') ?></h3>
    <table class="table">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th><?= $this->Paginator->sort('type_ad_id') ?></th>
                <th><?= $this->Paginator->sort('price') ?></th>
                <th><?= $this->Paginator->sort('town_id')?></th>
                <th><?= $this->Paginator->sort('ads_name') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ads as $ad): ?>
            <tr>
                <td><?= $this->Number->format($ad->id) ?></td>
                <td><?= $ad->has('user') ? $this->Html->link($ad->user->username, ['controller' => 'Users', 'action' => 'view', $ad->user->id]) : '' ?></td>
                <td><?= $ad->has('type_ad') ? $this->Html->link($ad->type_ad->type_name, ['controller' => 'TypeAds', 'action' => 'view', $ad->type_ad->id]) : '' ?></td>
                <td><?= $this->Number->format($ad->price) ?></td>
                <td><?= $ad->has('town') ? $this->Html->link($ad->town->town_name, ['controller' => 'Towns', 'action' => 'view', $ad->town->id]) : '' ?></td>
                <td><?= h($ad->ads_name) ?></td>
                <td>
                    <div class="btn-group">
                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown"
                                aria-expanded="false"> Actions
                            <i class="fa fa-angle-down"></i>
                        </button>
                        <ul class="dropdown-menu pull-left" role="menu">
                            <i class="glyphicon glyphicon-search"></i> <a href="<?= $this->Url->build(['controller' => 'Ads', 'action' => 'view', $ad->id]); ?>">Profil</a><br>
                            <i class="glyphicon glyphicon-pencil"></i> <a href="<?= $this->Url->build(['controller' => 'Ads', 'action' => 'edit', $ad->id]); ?>">Editer</a><br>
                            <i class="glyphicon glyphicon-remove"></i> <a href="<?= $this->Url->build(['controller' => 'Ads', 'action' => 'delete', $ad->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ad->id)]); ?>">Supprimer</a>
                        </ul>
                    </div>
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
