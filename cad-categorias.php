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
                    <h2><i class="fa-solid fa-user-plus"></i> Nova Categoria</h2>
                    <p>Preencha os dados abaixo para registrar uma nova categoria.</p>
                </div>
                <form>
                    <div class="form-group">
                        <label for="nome">Categoria:</label>
                        <input type="text" id="nome" name="nome" placeholder="Categoria" required>
                    </div>
                    <div class="form-group flex-1">
                        <label for="ano">Ano de Nascimento</label>
                        <select id="status" name="status">
                            <option value="1">Ativo</option>
                            <option value="2">Inativo</option>
                        </select>
                    </div>
    <div class="form-actions" style="display: flex; gap: 15px; align-items: center; margin-top: 20px;">
        <button type="button" class="btn-save" id="btn-salvar" style="display: flex; align-items: center; gap: 8px;">Finalizar Cadastro <i class="fa-solid fa-floppy-disk"></i></button>
        <a href="categorias.php" class="btn" style="background-color: #95a5a6; padding: 12px 25px; border-radius: 6px; font-weight: bold; text-decoration: none; color: white;">Cancelar</a>
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
        const inputStatus = document.getElementById('status').value;

        const novaCategoria = { nome: inputNome, status: inputStatus };

        // 2. Lemos o que já existe no armazém (ou criamos uma lista vazia)
        let lista = JSON.parse(localStorage.getItem('bancoCategorias')) || [];

        // 3. Adicionamos o novo usuário na lista
        lista.push(novaCategoria);

        // 4. Transformamos a lista em Texto JSON e salvamos
        localStorage.setItem('bancoCategorias', JSON.stringify(lista));

        alert("Categoria salva com sucesso!");

        // Limpa os campos para o proximo cadastro
        document.getElementById('nome').value = '';
        document.getElementById('status').value = '';
    });


</script>