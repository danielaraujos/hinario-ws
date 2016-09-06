<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title"> <?= $subtitle ?> </h3>
    </div>
	
    <?= $this->Form->create($user) ?>
        <div class="box-body">

            <div class="form-group">
                <?= $this->Form->input('name', ['class' => 'form-control', 'placeholder' => 'Digite seu nome']) ?>
            </div>
            <div class="form-group">
                <?= $this->Form->input('email', ['class' => 'form-control', 'placeholder' => 'Digite seu emaill']) ?>
            </div>
            <div class="form-group">
                <?= $this->Form->input('username', ['class' => 'form-control', 'placeholder' => 'Digite seu usuario']) ?>
            </div>
            <div class="form-group">
                <?= $this->Form->input('password', ['class' => 'form-control', 'placeholder' => 'Digite sua senha']) ?>
            </div>

        </div><!-- /.box-body -->
    <div class="box-footer">
        <?= $this->Form->button(__('Salvar'), ["class" => "btn btn-primary"]) ?>
    </div>
    <?= $this->Form->end() ?>
</div><!-- /.box -->