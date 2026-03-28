<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de usuários</title>
    <link rel="stylesheet" href="tabela.css">
    <link rel="stylesheet" href="dash.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <div class="dashboard-container">
      <?php include 'barra.php'; ?>
        <main>
            <div class="header-content">
                <h2>Gestão de Usuários</h2>
                <p>Visualize e gerencie as permissões dos usuários do sistema.</p>
            </div>

            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Acesso</th>
                            <th>Status</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>Olivar Neto</td>
                            <td>eric@unifev.edu.br</td>
                            <td>Administrador</td>
                            <td><span class="badge ativo">Ativo</span></td>
                            <td><button class="btn-icon"><i class="fa-solid fa-pen"></i></button></td>
                        </tr>
                        <tr>
                            <td>02</td>
                            <td>Ana Souza</td>
                            <td>ana.souza@email.com</td>
                            <td>Editor</td>
                            <td><span class="badge ativo">Ativo</span></td>
                            <td><button class="btn-icon"><i class="fa-solid fa-pen"></i></button></td>
                        </tr>
                        <tr>
                            <td>03</td>
                            <td>Carlos Lima</td>
                            <td>carlos.lima@servidor.com</td>
                            <td>Usuário</td>
                            <td><span class="badge inativo">Inativo</span></td>
                            <td><button class="btn-icon"><i class="fa-solid fa-pen"></i></button></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="6" align="right"><a href="cad-usuarios.php" class="bnt-add"><i
                                        class="fa-solid fa-plus"></i>Adicionar Usuário</a>
                    </tfoot>
                </table>
            </div>
        </main>
    </div>
    <?php include 'rodape.php'; ?>
</body>

</html>
