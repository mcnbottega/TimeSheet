<?php $s = $this->uri->segment(URI_METODO); ?>
<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <ul class="page-sidebar-menu" data-auto-scroll="false" data-auto-speed="200">
            
            <li class="start <?php if($s == 'inicial') { echo 'active'; } ?>">
                <a href="<?php echo base_url();?>">
                    <i class="fa fa-home"></i>
                    <span class="title">Dashboard</span>
                    <span class="selected"></span>
                </a>
            </li>
            
            <!-- Pedidos 
            <li>
                <a href="pedidos">
                    <i class="fa fa-shopping-cart"></i>
                    <span class="title">Pedidos</span>
                </a>
            </li>-->
            
            <li class="<?php if($s == 'produto' || $s == 'tipos_lanches' || $s == 'estabelecimento') { echo 'active open'; } ?>">
                <a href="javascript:;">
                    <i class="fa fa-pencil"></i>
                    <span class="title">Cadastros</span>
                    <span class="selected"></span>
                    <span class="arrow <?php if($s == 'produto' || $s == 'tipos_lanches' || $s == 'estabelecimento') { echo 'open'; } ?>"></span>
                </a>
                <ul class="sub-menu">
                    <li class="<?php if($s == 'produto') { echo 'active'; } ?>">
                        <a href="<?php echo base_url('produto');?>">
                            <i class="fa fa-cutlery"></i> Produtos
                        </a>
                    </li>
                    <li class="<?php if($s == 'tipos_lanches') { echo 'active'; } ?>">
                        <a href="<?php echo base_url('tipos_lanches');?>">
                            <i class="fa fa-sitemap"></i> Tipos de Lanches
                        </a>
                    </li>
                    <li class="<?php if($s == 'estabelecimento') { echo 'active'; } ?>">
                        <a href="<?php echo base_url('estabelecimento');?>">
                            <i class="fa fa-home"></i> Estabelecimentos
                        </a>
                    </li>
                </ul>
            </li>
            
            <li class="last <?php if($s == 'usuario' || $s == 'tipopermissao') { echo 'active open'; } ?>">
                <a href="javascript:;">
                    <i class="fa fa-unlock-alt"></i>
                    <span class="title">Segurança</span>
                    <span class="selected"></span>
                    <span class="arrow <?php if($s == 'usuario' || $s == 'tipopermissao') { echo 'open'; } ?>"></span>
                </a>
                <ul class="sub-menu">
                    <li class="<?php if($s == 'usuario') { echo 'active'; } ?>">
                        <a href="<?php echo base_url('usuario');?>">
                            <i class="fa fa-user"></i> Usuários
                        </a>
                    </li>
                    <li class="<?php if($s == 'tipopermissao') { echo 'active'; } ?>">
                        <a href="<?php echo base_url('tipopermissao');?>">
                            <i class="fa fa-unlock"></i> Permissões
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="<?php echo base_url('login/sair');?>">
                    <i class="fa fa-sign-out"></i>Sair </a>
            </li>
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
</div>
<!-- END SIDEBAR -->

<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <div class="page-content">