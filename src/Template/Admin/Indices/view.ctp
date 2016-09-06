<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Index'), ['action' => 'edit', $index->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Index'), ['action' => 'delete', $index->id], ['confirm' => __('Are you sure you want to delete # {0}?', $index->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Indices'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Index'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="indices view large-9 medium-8 columns content">
    <h3><?= h($index->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($index->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($index->id) ?></td>
        </tr>
    </table>
</div>
