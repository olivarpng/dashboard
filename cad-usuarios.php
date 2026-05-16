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
                    <h2><i class="fa-solid fa-user-plus"></i> Novo Usuário</h2>
                    <p>Preencha os dados abaixo para registrar um novo acesso.</p>
                </div>
                <form>
                    <div class="form-group">
                        <label for="nome">Nome Completo</label>
                        <input type="text" id="nome" name="nome" placeholder="Ex: Eric Freitas" required>
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" id="email" name="email" placeholder="nome@empresa.com" required>
                    </div>
                    <div class="form-row">
                        <div class="form-group flex-1">
                            <label for="senha">Senha</label>
                            <input type="password" id="senha" name="senha" required>
                        </div>
                        <div class="form-group flex-1">
                            <label for="nivel">Nível</label>
                            <select id="nivel" name="nivel">
                                <option value="1">Usuário</option>
                                <option value="2">Administrador</option>
                            </select>
                        </div>
                        <div class="form-group flex-1">
                            <label for="ano">Ano de Nascimento</label>
                            <select id="ano" name="ano">
                                <?php
                                $anoAtual = date("Y");
                                for ($i = $anoAtual; $i >= 1900; $i--) {
                                    echo "<option value='$i'>$i</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="button" class="btn-save" id="btn-salvar" href="usuarios.php">Finalizar Cadastro<i class="fa-floppy-disk"></i></button>
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
        const inputSenha = document.getElementById('senha').value;
        const inputNivel = document.getElementById('nivel').value;
        const inputAno = document.getElementById('ano').value;

        const novoUsuario = { nome: inputNome, email: inputEmail, senha: inputSenha, nivel: inputNivel, ano: inputAno, status: "1" };

        let lista = JSON.parse(localStorage.getItem('bancoUsuarios')) || [];
        lista.push(novoUsuario);
        localStorage.setItem('bancoUsuarios', JSON.stringify(lista));

        alert("Usuario salvo com sucesso!");

        document.getElementById('nome').value = '';
        document.getElementById('email').value = '';
        document.getElementById('senha').value = '';
    });
</script>