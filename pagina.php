<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Home</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="css/bootstrap.min.css" rel="stylesheet" />


</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    <img src="imagens/logo.png" alt="Logotipo" width="70" height="50">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Alternar navegação">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a href="#" class="nav-link active" aria-current="home">Home</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Produtos</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Fornecedores</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Categorias</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="container">
        <div class="wrapper">
            <aside id="sidebar">
                <div class="d-flex">
                    <button class="toggle-btn" type="button">
                        <i class="lni lni-grid-alt"></i>
                    </button>
                    <div class="sidebar-logo">
                        <a href="#">Controle de estoque</a>
                    </div>
                </div>
                <ul class="sidebar-nav">
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="lni lni-user"></i>
                            <span>Usuário</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="lni lni-agenda"></i>
                            <span>Agendamento</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                            data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                            <i class="lni lni-protection"></i>
                            <span>Autenticação</span>
                        </a>
                        <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Login</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Cadastrar</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                            data-bs-target="#multi" aria-expanded="false" aria-controls="multi">
                            <i class="lni lni-layout"></i>
                            <span>Movimentação</span>
                        </a>
                        <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#multi-two" aria-expanded="false" aria-controls="multi-two">
                                    Tipo
                                </a>
                                <ul id="multi-two" class="sidebar-dropdown list-unstyled collapse">
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link">Entrada</a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link">Saída</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="lni lni-popup"></i>
                            <span>Notificações</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="lni lni-cog"></i>
                            <span>Configurações</span>
                        </a>
                    </li>
                </ul>
                <div class="sidebar-footer">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-exit"></i>
                        <span>Sair</span>
                    </a>
                </div>
            </aside>
            <div class="main p-3">
                <div class="text-center">
                    <h1>
                        Sistema de controle de estoque
                    </h1>
                    <div class="jumbotron text-center">
                        <h1>My First Bootstrap Page</h1>
                        <p>Resize this responsive page to see the effect!</p>
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col-sm-4">
                                <h3>Column 1</h3>
                                <p>Lorem ipsum dolor..</p>
                            </div>
                            <div class="col-sm-4">
                                <h3>Column 2</h3>
                                <p>Lorem ipsum dolor..</p>
                            </div>
                            <div class="col-sm-4">
                                <h3>Column 3</h3>
                                <p>Lorem ipsum dolor..</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-body-tertiary text-center text-lg-start">
        <div class="text-center p-3" style="background-color: rgba(0,0,0,0.5);">
            © 2024 Copyright:
            <a class="text-body" href="index.php">Home</a>
        </div>
    </footer>







    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>