<!DOCTYPE html>
<html lang="pt-BR">
<head>

    <?php $this->load->view("site-base");?>
    <script src="https://code.jquery.com/jquery-3.4.0.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/ju/dt-1.10.18/datatables.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/v/ju/dt-1.10.18/datatables.min.js"></script>


</head>
<body>

   <table id="table">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Email</th>
                <th>CNPJ</th>
                <th>Telefone</th>
                <th>Origem</th>
                <th>Estado</th>
                <th>Cidade</th>
                <th>Situacao</th>
                <th>Observação</th>
                <th>Ações</th>

            </tr>
        </thead>

        <tbody>
            <?php foreach ($clients as $client) : ?>
                <tr>
                    <td><?= $client->id_client; ?></td>
                    <td><?= $client->nome; ?></td>
                    <td><?= $client->email; ?></td>
                    <td><?= $client->cnpj; ?></td>
                    <td><?= $client->telefone; ?></td>
                    <td><?= $client->origem; ?></td>
                    <td><?= $client->estado; ?></td>
                    <td><?= $client->cidade; ?></td>
                    <td><?= $client->situacao; ?></td>
                    <td><?= $client->observacao; ?></td>
                    <td><a href="<?=base_url('Cliente/editClient/'. $client->id_client) ;?>">Editar</a> 
                    <a href="<?=base_url('Cliente/deleteClient/'. $client->id_client) ;?>">Excluir</a> 
                </tr>
            <?php endforeach; ?>
        </tbody>

   </table>

    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        } );
    </script>

</body>
</html>