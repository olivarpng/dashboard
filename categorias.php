<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>
    <link rel="stylesheet" href="dash.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <div class="dashboard-container">
        <?php include 'components/menu.php'; ?>
        <main>
            <div class="header-content">
                <div class="header-title">
                    <h2>Gestão de Categorias</h2>
                    <p>Visualize e gerencie as categorias do sistema.</p>
                </div>
                <a href="cad-categorias.php" class="btn registro">Nova Categoria</a>
            </div>
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th style="text-align: center;">Nome</th>
                            <th>Status</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody id="lista-categorias">
                        <!-- Categorias renderizadas pelo JavaScript -->
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
            const tbody = document.getElementById('lista-categorias');
            const lista = JSON.parse(localStorage.getItem('bancoCategorias')) || [];
            
            tbody.innerHTML = '';
            
            if (lista.length === 0) {
                tbody.innerHTML = '<tr><td colspan="4" style="text-align:center;">Nenhuma categoria encontrada.</td></tr>';
                return;
            }

            lista.forEach((cat, index) => {
                const tr = document.createElement('tr');
                
                // Formatação do Status (value 1 = Ativo, 2 = Inativo)
                const isAtivo = (cat.status === '1' || cat.status === 'Ativo');
                const badgeClass = isAtivo ? 'badge ativo' : 'badge inativo';
                const statusText = isAtivo ? 'Ativo' : 'Inativo';
                
                tr.innerHTML = `
                    <td>${(index + 1).toString().padStart(2, '0')}</td>
                    <td style="text-align: center;">${cat.nome}</td>
                    <td><span class="${badgeClass}">${statusText}</span></td>
                    <td>
                        <a href="#" class="btn-icon" style="text-decoration:none; color:inherit; margin-right: 5px;"><i class="fa-solid fa-pen"></i></a>
                        <button class="btn-icon" onclick="deletarCategoria(${index})" style="cursor:pointer;"><i class="fa fa-trash" aria-hidden="true"></i></button>
                    </td>
                `;
                tbody.appendChild(tr);
            });
        }

        window.deletarCategoria = function(index) {
            if (confirm('Tem certeza que deseja excluir esta categoria?')) {
                let lista = JSON.parse(localStorage.getItem('bancoCategorias')) || [];
                lista.splice(index, 1);
                localStorage.setItem('bancoCategorias', JSON.stringify(lista));
                renderTable();
            }
        };
    </script>
</body>
</html>