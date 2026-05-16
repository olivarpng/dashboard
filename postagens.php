<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postagens</title>
    <link rel="stylesheet" href="dash.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <div class="dashboard-container">
        <?php include 'components/menu.php'; ?>
        <main>
            <div class="header-content">
                <div class="header-title">
                    <h2>Gestão de Postagens</h2>
                    <p>Visualize e gerencie as postagens do sistema.</p>
                </div>
            <a href="cad-postagens.php" class="btn registro">Nova Postagem</a>
            </div>
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Titulo</th>
                            <th>Conteudo</th>
                            <th>Categoria</th>
                            <th>Status</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody id="lista-postagens">
                        <!-- Postagens renderizadas pelo JavaScript -->
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="6" align="right">Informação da quantidade de registros</td>
                        </tr>
                    </tfoot>
                </table>
        </main>
    </div>
    <?php include 'components/footer.php'; ?>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            renderTable();
        });

        function renderTable() {
            const tbody = document.getElementById('lista-postagens');
            const lista = JSON.parse(localStorage.getItem('bancoPostagens')) || [];
            
            tbody.innerHTML = '';

            if (lista.length === 0) {
                tbody.innerHTML = '<tr><td colspan="6" style="text-align:center;">Nenhuma postagem encontrada.</td></tr>';
                return;
            }

            lista.forEach((post, index) => {
                const tr = document.createElement('tr');
                
                const isAtivo = (post.status === '1' || post.status === 'Ativo');
                const badgeClass = isAtivo ? 'badge ativo' : 'badge inativo';
                const statusText = isAtivo ? 'Ativo' : 'Inativo';
                const categoriaText = post.nivel == "1" ? "Notícias" : "Outros";
                
                tr.innerHTML = `
                    <td>${(index + 1).toString().padStart(2, '0')}</td>
                    <td>${post.nome}</td>
                    <td>${post.email}</td>
                    <td>${categoriaText}</td>
                    <td><span class="${badgeClass}">${statusText}</span></td>
                    <td>
                        <a href="#" class="btn-icon" style="text-decoration:none; color:inherit; margin-right: 5px;"><i class="fa-solid fa-pen"></i></a>
                        <button class="btn-icon" onclick="deletarPostagem(${index})" style="cursor:pointer;"><i class="fa fa-trash" aria-hidden="true"></i></button>
                    </td>
                `;
                tbody.appendChild(tr);
            });
        }

        window.deletarPostagem = function(index) {
            if (confirm('Tem certeza que deseja excluir esta postagem?')) {
                let lista = JSON.parse(localStorage.getItem('bancoPostagens')) || [];
                lista.splice(index, 1);
                localStorage.setItem('bancoPostagens', JSON.stringify(lista));
                renderTable();
            }
        };
    </script>
</body>
</html>