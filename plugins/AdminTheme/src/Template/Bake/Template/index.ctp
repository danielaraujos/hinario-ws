<%
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.1.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Utility\Inflector;

$fields = collection($fields)
    ->filter(function($field) use ($schema) {
        return !in_array($schema->columnType($field), ['binary', 'text']);
    });

if (isset($modelObject) && $modelObject->behaviors()->has('Tree')) {
    $fields = $fields->reject(function ($field) {
        return $field === 'lft' || $field === 'rght';
    });
}

if (!empty($indexColumns)) {
    $fields = $fields->take($indexColumns);
}

%>

<section>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"> <?= $subtitle ?> </h3>
        </div>

        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
					<tr>
<% foreach ($fields as $field): %>
						<th><?= $this->Paginator->sort('<%= $field %>') ?></th>
<% endforeach; %>
						<th>Editar</th>
						<th>Deletar</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($<%= $pluralVar %> as $<%= $singularVar %>): ?>
					<tr>
<%      			foreach ($fields as $field) {
						$isKey = false;
						if (!empty($associations['BelongsTo'])) {
							foreach ($associations['BelongsTo'] as $alias => $details) {
								if ($field === $details['foreignKey']) {
									$isKey = true;
%>
						<td><?= $<%= $singularVar %>->has('<%= $details['property'] %>') ? $this->Html->link($<%= $singularVar %>-><%= $details['property'] %>-><%= $details['displayField'] %>, ['controller' => '<%= $details['controller'] %>', 'action' => 'view', $<%= $singularVar %>-><%= $details['property'] %>-><%= $details['primaryKey'][0] %>]) : '' ?></td>
<%
									break;
								}
							}
						}
						if ($isKey !== true) {
							if (!in_array($schema->columnType($field), ['integer', 'biginteger', 'decimal', 'float'])) {
%>
						<td><?= $<%= $singularVar %>-><%= $field %> ?></td>
<%
							} else {
%>
						<td><?= $this->Number->format($<%= $singularVar %>-><%= $field %>) ?></td>
<%
							}
						}
					}

					$pk = '$' . $singularVar . '->' . $primaryKey[0];
%>
						<td><?= $this->Html->link('Editar', ['action' => 'edit', <%= $pk %>]) ?></td>
						<td><?= $this->Form->postLink('Deletar', 
							['action' => 'delete', <%= $pk %>], 
							['confirm' => __('Tem certeza que deseja deletar o(a) <%= $singularVar %> {0}?', <%= $pk %>)]) ?>
						</td>
					</tr>
                <?php endforeach; ?>
                </tbody>
            </table>

            <div class="paginator row text-center clearfix">
                <ul class="pagination">
                    <?= $this->Paginator->prev('< Anterior') ?>
                    <?= $this->Paginator->numbers() ?>
                    <?= $this->Paginator->next('Próximo >') ?>
                </ul>
                <p><?= $this->Paginator->counter('Página {{page}} de {{pages}}, mostrando {{current}} de {{count}} <%= $pluralVar %>'); ?></p>
            </div>
        </div>
    </div>
</section>

<?= $this->Html->css('/plugins/datatables/dataTables.bootstrap.css', ['block' => 'script']); ?>

<?= $this->Html->script('/plugins/datatables/dataTables.bootstrap.min.js', ['block' => 'scriptBottom']); ?>
<?= $this->Html->script('/plugins/datatables/jquery.dataTables.min.js', ['block' => 'scriptBottom']); ?>

<?= $this->Html->scriptStart(['block' => "scriptBottom"]); ?>
$(function () {
	$('#example2').DataTable({
		"paging": false,
		"lengthChange": false,
		"searching": false,
		"ordering": true,
		"info": true,
		"autoWidth": false
	});
});
<?= $this->Html->scriptEnd(); ?>