<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu">

            <?= $this->Menu->item('fa fa-dashboard', 'Welcome', 'Welcome'); ?>

            <?= $this->Menu->treeView('fa fa-tags', 'Hinos', 'Hinos', [
                    ['Adicionar hinos', 'add'],
                    ['Gerenciar hinos', 'index'],
                ]
            );
            ?>

            <?= $this->Menu->treeView('fa fa-tags', 'Autores', 'Autores', [
                    ['Adicionar autores', 'add'],
                    ['Gerenciar autores', 'index'],
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