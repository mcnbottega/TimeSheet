<body class="login">
<!-- BEGIN LOGO -->
<div class="logo">
	<a href="index.html">
	<img src="<?php echo base_url('assets/img/logo-big.png');?>" alt=""/>
	</a>
</div>
<!-- END LOGO -->
<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
<div class="menu-toggler sidebar-toggler">
</div>
<!-- END SIDEBAR TOGGLER BUTTON -->
<!-- BEGIN LOGIN -->
<div class="content">
    <!-- BEGIN LOGIN FORM -->
    <form class="login-form" action="<?php echo base_url('login/validar');?>" method="post">
        <h3 class="form-title">Entre com sua conta</h3>
        <?php if ($this->session->flashdata('mensagem_login')) { ?>
        <?php $a = $this->session->flashdata('mensagem_login')?>
        <div class="alert alert-<?php echo $a['alert'];?>">
            <button class="close" data-close="alert"></button>
            <span><?php echo $a['mensagem'];?></span>
        </div>
        <?php } ?>
        <div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">Usuário</label>
            <div class="input-icon">
                <i class="fa fa-user"></i>
                <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Usuário" name="login" value="<?php echo isset($_COOKIE['login']) ? $_COOKIE['login'] : '';?>"/>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Senha</label>
            <div class="input-icon">
                <i class="fa fa-lock"></i>
                <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Senha" name="senha" value="<?php echo isset($_COOKIE['senha']) ? $_COOKIE['senha'] : '';?>"/>
            </div>
        </div>
        <div class="form-actions">
            <label class="checkbox">
            <input type="checkbox" name="lembrar" value="1"/> Lembrar-me </label>
            <button type="submit" class="btn green pull-right">
            Login
            </button>
            <button type="button" id="esquecer" class="btn blue pull-right">
            Esquecer-me
            </button>
        </div>
        <!-- 2.0
        <div class="forget-password">
            <h4>Esqueceu sua senha?</h4>
            <p>
                Clique <a href="javascript:;" id="forget-password">
               aqui </a>
               para conseguir uma nova.
            </p>
        </div>
    </form>
    <!-- END LOGIN FORM 
	<!-- BEGIN FORGOT PASSWORD FORM 
	<form class="forget-form" action="index.html" method="post">
		<h3>Esqueceu sua senha?</h3>
		<p>Informe seu email</p>
		<div class="form-group">
                    <div class="input-icon">
                        <i class="fa fa-envelope"></i>
                        <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email"/>
                    </div>
		</div>
		<div class="form-actions">
                    <button type="button" id="back-btn" class="btn">
                    <i class="m-icon-swapleft"></i> Voltar </button>
                    <button type="submit" class="btn green pull-right">
                    Enviar <i class="m-icon-swapright m-icon-white"></i>
                    </button>
		</div>
	</form>
	<!-- END FORGOT PASSWORD FORM -->
</div>
<!-- END LOGIN -->
<!-- BEGIN COPYRIGHT -->
<div class="copyright">
	 2014 &copy; Metronic. Admin Dashboard Template.
</div>
<!-- END COPYRIGHT -->