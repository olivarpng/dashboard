<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dash.css">
    <title>Dashboard</title>
</head>

<body>
    <div class="dashboard-container">
        <?php include 'barra.php'; ?>
        <main>
            <section class="container-cards">

                <article>
                    <h2>Módulo de Usuários</h2>
                    <p>Gerencie os acessos e permissões do sistema nesta área.</p>
                    <a href="usuarios.php" class="btn">Acessar</a>
                </article>

                <article>
                    <h2>Relatórios de Vendas</h2>
                    <p>Acompanhe os gráficos de desempenho deste mês.</p>
                    <a href="#" class="btn">Acessar</a>
                </article>

                <article>
                    <h2>Configurações do Servidor</h2>
                    <p>Ajuste as portas do Apache e o banco de dados.</p>
                    <a href="#" class="btn">Acessar</a>
                </article>

            </section>
        </main>
    </div>

    <?php include 'rodape.php'; ?>

</body>

</html>
