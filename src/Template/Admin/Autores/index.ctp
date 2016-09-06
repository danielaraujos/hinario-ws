
<section>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"> <?= $subtitle ?> </h3>
        </div>

        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
					<tr>
						<th><?= $this->Paginator->sort('id') ?></th>
						<th><?= $this->Paginator->sort('name') ?></th>
						<th>Editar</th>
						<th>Deletar</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($autores as $autore): ?>
					<tr>
						<td><?= $this->Number->format($autore->id) ?></td>
						<td><?= $autore->name ?></td>
						<td><?= $this->Html->link('Editar', ['action' => 'edit', $autore->id]) ?></td>
						<td><?= $this->Form->postLink('Deletar', 
							['action' => 'delete', $autore->id], 
							['confirm' => __('Tem certeza que deseja deletar o(a) autore {0}?', $autore->id)]) ?>
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
                <p><?= $this->Paginator->counter('Página {{page}} de {{pages}}, mostrando {{current}} de {{count}} autores'); ?></p>
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