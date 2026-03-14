<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tabela.css">
    <link rel="stylesheet" href="dash.css">    
    <title>Listagem de Usuários</title>
</head>
<body>
    <div class="dashboard-container">
        <nav>
            <ul>
                <li><a href="index.php">Início</a></li>
                <li><a href="#">Projetos</a></li>
                <li><a href="#">Relatórios</a></li>
                <li><a href="#">Configurações</a></li>
            </ul>
            <div class="perfil-usuario">
                <img src="https://ui-avatars.com/api/?name=Olivar&color=fff" alt="Avatar">
                <span>Olivar</span>
            </div>
            </nav>



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
                        <td>Olivar de Lima Campos Neto</td>
                        <td>olivar@unifev.edu.br</td>
                        <td>Admin</td>
                        <td>Ativo</td>
                        <td>Editar</td>
                    </tr>
                    <tr>
                        <td>02</td>
                        <td>Olivar de Lima Campos</td>
                        <td>olivar2@unifev.edu.br</td>
                        <td>Editor</td>
                        <td>Ativo</td>
                        <td>Editar</td>
                        </tr>
                    </tbody>
                </table>
            </div>  
        </main>
    </div>
    <footer>
        <p>&copy; <?php echo date('Y'); ?> - Desenvolvido por Olivar</p>
    </footer>
</body>
</html>