<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto 2 faculdade</title>
    <link rel="stylesheet" href="dash.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <div class="dashboard-container">
        <?php include 'components/menu.php'; ?>
        <main>
            <section class="card-form">
                <div class="form-header">
                    <h2><i class="fa-solid fa-user-plus"></i> Nova Postagem</h2>
                    <p>Preencha os dados abaixo para registrar uma nova postagem.</p>
                </div>
                <form>
                    <div class="form-group">
                        <label for="nome">Título:</label>
                        <input type="text" id="nome" name="nome" placeholder="As Crônicas de Rachel" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Conteúdo:</label>
                        <input type="email" id="email" name="email" placeholder="Lorem Ipsum é bom demais" required>
                    </div>
                    <div class="form-row">
                        <div class="form-group flex-1">
                            <label for="nivel">Categoria:</label>
                            <select id="nivel" name="nivel">
                                <option value="1">Notícias</option>
                            </select>
                        </div>
                        <div class="form-group flex-1">
                            <label for="status">Status</label>
                            <select id="status">
                                <option value="1">Ativo</option>
                                <option value="2">Inativo</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="button" class="btn-save" id="btn-salvar" href="postagens.php">Finalizar Cadastro<i class="fa-floppy-disk"></i></button>
                        <a href="dashboard.php" class="btn-cancel">Cancelar</a>
                    </div>
                </form>
            </section>
        </main>
    </div>
    <?php include 'components/footer.php'; ?>
</body>

</html>
<script>
    const btnSalvar = document.getElementById('btn-salvar');
    btnSalvar.addEventListener('click', function () {
        const inputNome = document.getElementById('nome').value;
        const inputEmail = document.getElementById('email').value;
        const inputNivel = document.getElementById('nivel').value;
        const inputStatus = document.getElementById('status').value;

        const novaPostagem = { nome: inputNome, email: inputEmail, nivel: inputNivel, status: inputStatus };

        let lista = JSON.parse(localStorage.getItem('bancoPostagens')) || [];
        lista.push(novaPostagem);
        localStorage.setItem('bancoPostagens', JSON.stringify(lista));

        alert("Postagem salva com sucesso!");

        document.getElementById('nome').value = '';
        document.getElementById('email').value = '';
    });
</script>