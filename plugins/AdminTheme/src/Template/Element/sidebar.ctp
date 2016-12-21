<aside class="main-sidebar">

    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <?php
                if($user_auth['image'] != null){
                    echo $this->Html->Image($user_auth['dir'].'/'.$user_auth['image'],['class'=>"img-circle"]);
                }else{
                echo $this->Html->Image('avatar.png',['class'=>"img-circle"]);
                }?>
            </div>
            <div class="pull-left info">
                <p><?= $user_auth['name'] ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <ul class="sidebar-menu">

            <li class="header">MENU DE NAVEGAÇÃO</li>

            <?= $this->Menu->item('fa fa-dashboard', 'Welcome', 'Welcome'); ?>

            <?= $this->Menu->treeView('fa fa-tags', 'Letras ', 'Hinos', [
                    ['Adicionar hinos', 'add'],
                    ['Gerenciar hinos', 'index'],
                ]
            );
            ?>

            <?= $this->Menu->treeView('fa fa-tags', 'Cifras ', 'Cifras', [
                    ['Adicionar cifras', 'add'],
                    ['Gerenciar cifras', 'index'],
                ]
            );
            ?>


            <?= $this->Menu->treeView('fa fa-tags', 'Indices', 'Indices', [
                    ['Adicionar indices', 'add'],
                    ['Gerenciar indices', 'index'],
                ]
            );
            ?>

            <?= $this->Menu->treeView('fa fa-users', 'Usuários', 'users', [
                    ['Adicionar usuários', 'add'],
                    ['Gerenciar usuários', 'index'],
                ]
            );
            ?>
            <?= $this->Menu->item('fa fa-sign-out', 'Sair', 'users', 'logout'); ?>
        </ul>
    </section>
</aside>