<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="./assets/img/image-logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Pizza</title>
</head>

<?php

$sabores = [
    "Calabresa",
    "Frango com Catupiry",
    "Marguerita",
    "Portuguesa",
    "Quatro Queijos",
    "Vegetariana",
    "Peperoni",
    "Atum",
    "Napolitana"
];

$saboresImg = [
    "Calabresa" => "./assets/img/calabresa.webp",
    "Frango com Catupiry" => "./assets/img/frango.jpg",
    "Marguerita" => "./assets/img/marguerita.jpg",
    "Portuguesa" => "./assets/img/portuguesa.jpg",
    "Quatro Queijos" => "./assets/img/quatroqueijos.jpg",
    "Vegetariana" => "./assets/img/vegetariana.webp",
    "Peperoni" => "./assets/img/peperoni.jpg",
    "Atum" => "./assets/img/atum.webp",
    "Napolitana" => "./assets/img/napolitana.jpeg"
];

?>


<body class="">
    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container-fluid">
            <a class="navbar-brand ms-5 d-block" href="./index.php"><img src="./assets/img/logo-teste.png" alt="logo" id="logo-image"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarNav">

                <ul class="navbar-nav" id="navbar-list">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#novidades">Cardápio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contato</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./suporte.php">Suporte</a>
                    </li>
                </ul>

                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link me-5" href="#"><i class="bi bi-bag" id="card"></i></a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
    <!--------------------------------------------------------------------------------------------------------------------------------->


    <section id="home">
        <div id="principal-home">
            <div class="text">
                <h2>Seja Bem <br> Vindo!</h2>
                <p>Conheca a melhor pizza da região</p>
                <a href="#novidades" id="next-cardapio">Ver Cardápio</a>
            </div>
            <img src="./assets/img/home-transparente.png" alt="">

        </div>
    </section>





    <!--------------------------------------------------------------------------------------------------------------------------------->

    <section id="cardapio">
        <div class="container" id="novidades">
            <h3 class="text-center mb-5 w-50 d-block mx-auto rounded-5 rounded-top-0" id="text-cardapio">Conheça nosso Cardápio</h3>

            <?php
            for ($i = 0; $i < count($sabores); $i++) {
                if ($i % 3 == 0) {
            ?>
                    <div class="d-flex justify-content-around mb-4">
                    <?php
                }
                    ?>
                    <div class="card" style="width: 18rem;">
                        <img src="<?= $saboresImg[$sabores[$i]] ?>" class="card-img-top" alt="<?= $sabores[$i] ?>" style="width: 100%; height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title text-center mb-3"><?= $sabores[$i] ?></h5>
                            <button class="" id="button-pizza" data-bs-toggle="modal" data-bs-target="#modalPizza" sabor-select="<?= $sabores[$i] ?>">Pedir agora</button>
                        </div>
                    </div>
                <?php
                if (($i + 1) % 3 == 0 || $i + 1 == count($sabores)) {
                    echo '</div>';
                }
            }
                ?>
                    </div>

                    <!-- MODAL -->
                    <div class="modal fade" id="modalPizza" tabindex="-1" aria-labelledby="tituloModal" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content shadow-lg">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="tituloModal"></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                                </div>
                                <div class="modal-body">
                                    <p id="saborSelecionado" class="fw-bold text-center fs-5 mb-3"></p>
                                    <form id="formularioTamanho">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="tamanhoPizza" id="tamanhoPequena" value="Pequena">
                                            <label class="form-check-label d-flex justify-content-between" for="tamanhoPequena">
                                                <span>Pequena</span> <span>R$ 25,00</span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="tamanhoPizza" id="tamanhoMedia" value="Média">
                                            <label class="form-check-label d-flex justify-content-between" for="tamanhoMedia">
                                                <span>Média</span> <span>R$ 35,00</span>
                                            </label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="radio" name="tamanhoPizza" id="tamanhoGrande" value="Grande">
                                            <label class="form-check-label d-flex justify-content-between" for="tamanhoGrande">
                                                <span>Grande</span> <span>R$ 45,00</span>
                                            </label>
                                        </div>
                                        <div class="d-grid">
                                            <button type="submit" class="" style="background-color: var(--primary-color); color: var(--white); font-weight: 600; padding: 10px 20px;border-radius: 5px;border: none;cursor: pointer;text-decoration: none;">Confirmar Pedido</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SCRIPT -->
                    <script>
                        const modalPizza = document.getElementById('modalPizza');

                        modalPizza.addEventListener('show.bs.modal', function(evento) {
                            const botao = evento.relatedTarget;
                            const sabor = botao.getAttribute('sabor-select');
                            document.getElementById('saborSelecionado').textContent = `${sabor}`;
                        });

                        document.getElementById('formularioTamanho').addEventListener('submit', function(evento) {
                            evento.preventDefault();

                            const sabor = document.getElementById('saborSelecionado').textContent;
                            const tamanhoSelecionado = document.querySelector('input[name="tamanhoPizza"]:checked');

                            if (tamanhoSelecionado) {
                                const tamanho = tamanhoSelecionado.value;
                                alert(`Você pediu uma pizza ${sabor} - ${tamanho}.`);
                                const instanciaModal = bootstrap.Modal.getInstance(modalPizza);
                                instanciaModal.hide();
                            } else {
                                alert("Por favor, selecione um tamanho!");
                            }
                        });
                    </script>

    </section>
</body>

</html>