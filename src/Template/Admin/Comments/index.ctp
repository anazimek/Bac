<?php $this->layout = 'back'; ?>
<div class="comments index large-9 medium-8 columns content">
    <h3><?= __('Commentaires') ?></h3>
    <table class="table">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('article_id') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th><?= $this->Paginator->sort('description') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($comments as $comment): ?>
            <tr>
                <td><?= $this->Number->format($comment->id) ?></td>
                <td><?= $comment->has('article') ? $this->Html->link($comment->article->description, ['controller' => 'Articles', 'action' => 'view', $comment->article->id]) : '' ?></td>
                <td><?= $comment->has('user') ? $this->Html->link($comment->user->username, ['controller' => 'Users', 'action' => 'view', $comment->user->id]) : '' ?></td>
                <td><?= h($comment->description) ?></td>
                <td>
                    <div class="btn-group">
                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown"
                                aria-expanded="false"> Actions
                            <i class="fa fa-angle-down"></i>
                        </button>
                        <ul class="dropdown-menu pull-left" role="menu">
                            <i class="glyphicon glyphicon-search"></i> <a href="<?= $this->Url->build(['controller' => 'Ads', 'action' => 'view', $comment->id]); ?>">Profil</a><br>
                            <i class="glyphicon glyphicon-pencil"></i> <a href="<?= $this->Url->build(['controller' => 'Ads', 'action' => 'edit', $comment->id]); ?>">Editer</a><br>
                            <i class="glyphicon glyphicon-remove"></i> <a href="<?= $this->Url->build(['controller' => 'Ads', 'action' => 'delete', $comment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $comment->id)]); ?>">Supprimer</a>
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
