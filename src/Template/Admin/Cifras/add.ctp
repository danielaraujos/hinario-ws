<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title"> <?= $subtitle ?> </h3>
    </div>
	
    <?= $this->Form->create($cifra) ?>
        <div class="box-body">
			<div class="form-group">
				<?= $this->Form->input('name', ['label'=>'Titulo da cifra','class' => 'form-control', 'placeholder' => '']) ?>
			</div>
			<div class="form-group">
				<?= $this->Form->input('body', ['label'=>'Conteudo','class' => 'form-control', 'placeholder' => '']) ?>
			</div>
			<div class="form-group">
				<?= $this->Form->input('tone', ['label'=>'Tonalidade','class' => 'form-control', 'placeholder' => '']) ?>
			</div>
			<div class="form-group">
				<?= $this->Form->input('compass', ['label'=>'Compasso','class' => 'form-control', 'placeholder' => '']) ?>
			</div>
    </div><!-- /.box-body -->
    <div class="box-footer">
        <?= $this->Form->button(__('Salvar'), ["class" => "btn btn-primary"]) ?>
    </div>
    <?= $this->Form->end() ?>
</div><!-- /.box -->

<?= $this->Html->scriptStart(['block' => "scriptBottom"]); ?>
$(function () {
CKEDITOR.replace('body');
});
<?= $this->Html->scriptEnd(); ?>
