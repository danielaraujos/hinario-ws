
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
						<th>Nome de usuário</th>
						<th>E-mail</th>
						<th>Editar</th>
						<th>Deletar</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($users as $user): ?>
					<tr>
						<td><?= $this->Number->format($user->id) ?></td>
						<td><?= $user->username ?></td>
						<td><?= $user->email ?></td>
						<td><?= $this->Html->link('Editar', ['action' => 'perfil', $user->id]) ?></td>
						<td><?= $this->Form->postLink('Deletar', 
							['action' => 'delete', $user->id], 
							['confirm' => __('Tem certeza que deseja deletar o(a) user {0}?', $user->id)]) ?>
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
                <p><?= $this->Paginator->counter('Página {{page}} de {{pages}}, mostrando {{current}} de {{count}} usuários'); ?></p>
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