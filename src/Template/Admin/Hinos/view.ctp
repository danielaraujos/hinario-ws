<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Hino'), ['action' => 'edit', $hino->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Hino'), ['action' => 'delete', $hino->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hino->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Hinos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Hino'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Autores'), ['controller' => 'Autores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Autore'), ['controller' => 'Autores', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Indices'), ['controller' => 'Indices', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Index'), ['controller' => 'Indices', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="hinos view large-9 medium-8 columns content">
    <h3><?= h($hino->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Autore') ?></th>
            <td><?= $hino->has('autore') ? $this->Html->link($hino->autore->name, ['controller' => 'Autores', 'action' => 'view', $hino->autore->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Index') ?></th>
            <td><?= $hino->has('index') ? $this->Html->link($hino->index->name, ['controller' => 'Indices', 'action' => 'view', $hino->index->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($hino->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Name') ?></h4>
        <?= $this->Text->autoParagraph(h($hino->name)); ?>
    </div>
    <div class="row">
        <h4><?= __('Body') ?></h4>
        <?= $this->Text->autoParagraph(h($hino->body)); ?>
    </div>
</div>
