
<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3><?php echo $dados['hinos'];?></h3>

                    <p>Hinos cadastradas</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="<?php echo $this->Html->Url->build(['controller'=>'Hinos','action'=>'index']);?>" class="small-box-footer">
                    Ver mais <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3><?php echo $dados['indices'];?></h3>

                    <p>Indices cadastrados</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="<?php echo $this->Html->Url->build(['controller'=>'Indices','action'=>'index']);?>" class="small-box-footer">
                    Ver mais <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                    <h3><?php echo $dados['cifras'];?></h3>

                    <p>Cifras cadastradas</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>

                <a href="<?php echo $this->Html->Url->build(['controller'=>'Cifras','action'=>'index']);?>" class="small-box-footer">
                    Ver mais <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->

        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3><?php echo $dados['users'];?></h3>

                    <p>Administradores</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="<?php echo $this->Html->Url->build(['controller'=>'Users','action'=>'index']);?>" class="small-box-footer">
                    Ver mais <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>



    </div>


</section>
<!-- /.content -->

