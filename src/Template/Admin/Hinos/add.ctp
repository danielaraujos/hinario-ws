<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title"> <?= $subtitle ?> </h3>
    </div>
	
    <?= $this->Form->create($hino) ?>
        <div class="box-body">
			<div class="form-group">
				<?= $this->Form->input('name', ['label'=>'Titulo do Hino','class' => 'form-control', 'placeholder' => 'Digite o nome do Hino']) ?>
			</div>
			<div class="form-group">
				<?= $this->Form->input('body', ['label'=>'Conteudo','class' => 'form-control', 'placeholder' => '']) ?>
			</div>
            <div class="form-group">
                <?= $this->Form->input('audio', ['label'=>'Música','class' => 'form-control', 'placeholder' => 'Digite o link do áudio']) ?>
            </div>
			<div class="form-group">
				<?= $this->Form->input('indices_id', ['label'=>'Tipo do hino','class' => 'form-control', 'placeholder' => '', 'options' => $indices]) ?>
            </div>
    </div><!-- /.box-body -->
    <div class="box-footer">
        <?= $this->Form->button(__('Salvar'), ["class" => "btn btn-primary"]) ?>
    </div>
    <?= $this->Form->end() ?>
</div><!-- /.box -->