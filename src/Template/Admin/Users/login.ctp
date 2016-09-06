<?php

$this->layout = false;

?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <?= $this->Html->meta('viewport', 'width=device-width, initial-scale=1.0') ?>

    <title> <?= $this->fetch('title') ?> </title>

    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('AdminLTE.min.css') ?>

    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="login-page">

<div class="login-box">
    <div class="login-logo">
        <b></b>
    </div><!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Por favor, realize o login</p>
        <?= $this->Flash->render('auth') ?>
        <div class="users form">
            <?= $this->Form->create() ?>
            <fieldset>
                <div class="form-group has-feedback">
                    <?= $this->Form->input('username', [
                        'class' => "form-control",
                        'label' => false,
                        'placeholder' => 'Usuário'
                    ]) ?>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <?= $this->Form->input('password', [
                        'class' => "form-control",
                        'label' => false,
                        'placeholder' => 'Senha'
                    ]) ?>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
            </fieldset>

            <div class="row">
                <div class="col-xs-4"></div>

                <div class="col-md-offset-4 col-xs-4">
                    <?= $this->Form->submit( 'Logar', [
                        'class' => "btn btn-primary btn-block btn-flat"
                    ]); ?>
                </div><!-- /.col -->
            </div>
            <?= $this->Form->end() ?>
        </div>
        <!-- <a href="#">Esqueci a senha</a><br> -->
    </div><!-- /.login-box-body -->
</div><!-- /.login-box -->

<?= $this->Html->script("/plugins/jQuery/jQuery-2.2.0.min.js"); ?>
<script src="public/admin/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>
