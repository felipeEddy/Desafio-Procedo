<!DOCTYPE html>
<html lang="pt-BR">
<head>

    <?php $this->load->view("site-base");?>

</head>
<body>

    <div id="content-box-login">
        <div id="box-login">
            <form action="<?= base_url('recover-password'); ?>" method="post" id="form-add-account">
                <div id="header-box-login">
                    <img src="<?= base_url('assets/src/img/logo.svg');?>" alt="imagem logo" id="logo-login" />
                </div>

                <div id="body-box-login">

                    <label for="input-email">Recuperar senha:</label>
                    <input type="email" name="email" class="input-login" placeholder="Exemplo@123hotmail.com" required id="input-email" />
                   
                </div>

                <div id="footer-box-login">

                    <button id="btn-login" type="submit">Enviar e-mail</button>
                    <p id="content-options-login">
                     <span> Já tem uma conta? <a href="<?= base_url(); ?>">Voltar</a></span>
                        
                    </p>

                </div>
            </form>

        </div>
    </div>

    
</body>
</html>