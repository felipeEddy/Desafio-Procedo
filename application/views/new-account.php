<!DOCTYPE html>
<html lang="pt-BR">
<head>

    <?php $this->load->view("site-base");?>

</head>
<body>

    <div id="content-box-login">
        <div id="box-login">
            <form action="<?= base_url('add-user'); ?>" method="post" id="form-add-account">
                <div id="header-box-login">
                    <img src="<?= base_url('assets/src/img/logo.svg');?>" alt="imagem logo" id="logo-login" />
                </div>

                <div id="body-box-login">

                    <input type="email" name="email" class="input-login" placeholder="Digite um e-mail válido" required />
                    <input type="password" name="password" class="input-login" placeholder="Insira sua senha" required />
                    <input type="password" name="confirm-password" class="input-login" placeholder="Confirmar senha" required />

                </div>

                <div id="footer-box-login">

                    <button id="btn-login" type="submit">Cadastrar</button>
                    <p id="content-options-login">
                     <span> Já tem uma conta? <a href="<?= base_url(); ?>">Voltar</a></span>
                        
                    </p>

                </div>
            </form>

        </div>
    </div>

    <?php if (isset($error)):  ?>
        <script>alert("<?= $error; ?>")</script>
    <?php endif; ?>

    <script src="<?=base_url('assets/src/js/confirm-password.js');?>"></script>
    <script>
        document.querySelector('#btn-login').addEventListener('click', function (e) {
            e.preventDefault()
            let test = validar()

            if (test) {
                document.querySelector('#form-add-account').submit()
            }

        })
    </script>

</body>
</html>