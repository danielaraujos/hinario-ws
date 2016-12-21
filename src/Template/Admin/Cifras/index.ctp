
<section>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"> <?= $subtitle ?> </h3>
        </div>

        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
					<tr>
						<th>ID</th>
						<th>Titulo</th>
						<th>Tonalidade</th>
						<th>Compasso</th>
						<th>Ações</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($cifras as $cifra): ?>
					<tr>
						<td><?= $this->Number->format($cifra->id) ?></td>
						<td><?= $cifra->name ?></td>
						<td><?= $cifra->tone ?></td>
						<td><?= $cifra->compass ?></td>
						<td>
							<?= $this->Html->link('Editar', ['action' => 'edit', $cifra->id],['class'=> 'btn btn-primary btn-sm']) ?>
							<?= $this->Form->postLink('Deletar',
							['action' => 'delete', $cifra->id], 
							['confirm' => __('Tem certeza que deseja deletar o(a) cifra {0}?', $cifra->name),'class'=> 'btn btn-danger btn-sm']) ?>
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
                <p><?= $this->Paginator->counter('Página {{page}} de {{pages}}, mostrando {{current}} de {{count}} cifras'); ?></p>
            </div>
        </div>
    </div>
</section>

<?= $this->Html->css('/plugins/datatables/dataTables.bootstrap.css', ['block' => 'script']); ?>

<?= $this->Html->script('/plugins/datatables/dataTables.bootstrap.min.js', ['block' => 'scriptBottom']); ?>
<?= $this->Html->script('/plugins/datatables/jquery.dataTables.min.js', ['block' => 'scriptBottom']); ?>

<?= $this->Html->scriptStart(['block' => "scriptBottom"]); ?>
$(function () {
$('#example1').DataTable({
"paging": false,
"lengthChange": false,
"searching": true,
"ordering": true,
"info": false,
"autoWidth": false
});
});
<?= $this->Html->scriptEnd(); ?>