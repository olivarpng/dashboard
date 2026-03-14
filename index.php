<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="dash.css">
    <title>Dashboard</title>
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
    <section class="container-cards">

        <article>
            <h2>Módulo de Usuários</h2>
            <p>Gerencie os acessos e permissões do sistema nesta área.</p>
            <a href="usuarios.php" class="btn">Acessar</a>
        </article>

    </section>
</main>

</div>
    <footer>
        <p>&copy; <?php echo date('Y'); ?> - Desenvolvido por Olivar</p>
</footer>
</body>
</html>