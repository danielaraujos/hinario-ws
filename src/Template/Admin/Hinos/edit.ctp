<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title"> <?= $subtitle ?> </h3>
    </div>
	
    <?= $this->Form->create($hino) ?>
        <div class="box-body">
			<div class="form-group">
				<?= $this->Form->input('name', ['class' => 'form-control', 'placeholder' => '']) ?>
			</div>
			<div class="form-group">
				<?= $this->Form->input('body', ['class' => 'form-control', 'placeholder' => '']) ?>
			</div>
			<div class="form-group">
				<?= $this->Form->input('autores_id', ['class' => 'form-control', 'placeholder' => '', 'options' => $autores]) ?>
			<div class="form-group">
				<?= $this->Form->input('indices_id', ['class' => 'form-control', 'placeholder' => '', 'options' => $indices]) ?>
    </div><!-- /.box-body -->
    <div class="box-footer">
        <?= $this->Form->button(__('Salvar'), ["class" => "btn btn-primary"]) ?>
    </div>
    <?= $this->Form->end() ?>
</div><!-- /.box -->