<!DOCTYPE html>
<html lang="pt-BR">
<head>

    <?php $this->load->view("site-base");?>

</head>
<body>

    <form action="<?= base_url('Cliente/updateClient/'.$client[0]->id_client); ?>" method="post">

        <input type="text" readonly='readonly' value="<?= $client[0]->id_client ? $client[0]->id_client : ""; ?>"/>
        <input type="text" name="nome" value="<?= $client[0]->nome ? $client[0]->nome : ""; ?>"/>
        <input type="text" name="email" value="<?= $client[0]->email ? $client[0]->email : ""; ?>"/>
        <input type="text" name="cnpj" value="<?= $client[0]->cnpj ? $client[0]->cnpj : ""; ?>"/>
        <input type="text" name="telefone" value="<?= $client[0]->telefone ? $client[0]->telefone : ""; ?>"/>
        <input type="text" name="origem" value="<?= $client[0]->origem ? $client[0]->origem : ""; ?>"/>
        <input type="text" name="estado" value="<?= $client[0]->estado ? $client[0]->estado : ""; ?>"/>
        <input type="text" name="cidade" value="<?= $client[0]->cidade ? $client[0]->cidade : ""; ?>"/>
        <input type="text" name="situacao" value="<?= $client[0]->situacao ? $client[0]->situacao : ""; ?>"/>
        <input type="text" name="observacao" value="<?= $client[0]->observacao ? $client[0]->observacao : ""; ?>"/>

        <button type="submit">Atualizar</button>
    
    
    </form>

</body>
</html>