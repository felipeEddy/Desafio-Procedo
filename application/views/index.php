<!DOCTYPE html>
<html lang="pt-BR">
<head>

    <?php $this->load->view("site-base");?>

</head>
<body>

    <div id="content-box-login">
        <div id="box-login">
            <form action="<?= base_url('validation'); ?>" method="post">
                <div id="header-box-login">
                    <img src="<?= base_url('assets/src/img/logo.svg');?>" alt="imagem logo" id="logo-login" />
                </div>

                <div id="body-box-login">

                    <input type="email" name="email" class="input-login" placeholder="Exemplo@hotmail.com" required />
                    <input type="password" name="password" class="input-login" placeholder="*********" required />

                </div>

                <div id="footer-box-login">

                    <button id="btn-login" type="submit">Entrar</button>
                    <p id="content-options-login">
                        <a href="<?= base_url('new-password'); ?>">Esqueci minha senha</a>
                        <a href="<?= base_url('new-account'); ?>">Criar nova conta</a>
                    </p>

                </div>
            </form>

        </div>
    </div>

</body>
</html>