<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>404
    Filmes</title>
  <link rel="stylesheet" href="../css/styleshome.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>
  <header class="navbar fixed-top">
    <div class="container">
      <div class="logo">
        <img src="../img/logo2.png" alt="Logo 404" />

      </div>
      <nav class="menu">
        <ul>
          <li><a href="filmes.php">FILMES</a></li>
          <li><a href="series.php">SÉRIES</a></li>
          <li><a href="login.html">LOGIN</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <main class="content">
    <section class="banner-404">
      <div class="logo-central">
        <img src="../img/logo1.png" alt="404 Filmes Não Encontrados" />
      </div>
    </section>
    <?php
    $imagens = [
      "aftersun.jpg",
      "anatomiadeumaqueda.jpg",
      "carandiru.jpg",
      "littlemisssunshine.jpg",
      "midsommar.jpg",
      "osrejeitados.jpg"
    ];

    $filmes = [
      "aftersun.jpg" => [
        "titulo" => "Aftersun (2022)",
        "direcao" => "Direção de Charlotte Wells",
        "descricao" => "Sophie reflete sobre a alegria compartilhada e a melancolia íntima de umas férias que passou com o pai vinte anos antes. Memórias reais e imaginárias preenchem as lacunas entre as filmagens em miniDV enquanto ela tenta reconciliar o pai que conheceu com o homem que não conheceu."
      ],
      "anatomiadeumaqueda.jpg" => [
        "titulo" => "Anatomia de uma Queda (2023)",
        "direcao" => "Direção de Justine Triet",
        "descricao" => "Uma mulher é suspeita do assassinato do marido, e seu filho cego enfrenta um dilema moral como única testemunha."
      ],
      "osrejeitados.jpg" => [
        "titulo" => "Os Rejeitados (2023)",
        "direcao" => "Direção de Alexander Payne",
        "descricao" => "Um instrutor rabugento de uma escola preparatória da Nova Inglaterra é forçado a permanecer no campus durante as férias de Natal para cuidar de um punhado de alunos sem ter para onde ir. Eventualmente, ele cria um vínculo improvável com um deles — um encrenqueiro intelectual e com problemas — e com a cozinheira-chefe da escola, que acaba de perder um filho no Vietnã."
      ],
      "carandiru.jpg" => [
        "titulo" => "Carandiru (2003)",
        "direcao" => "Direção de Héctor Babenco",
        "descricao" => "Quando um médico decide implementar um programa de prevenção à AIDS dentro da maior penitenciária da América Latina: a Casa de Detenção de São Paulo - Carandiru, ele conhece as futuras vítimas de um dos dias mais sombrios da história brasileira, quando a Polícia Militar do Estado de São Paulo, sob a justificativa de ser policial, matou 111 pessoas a tiros. Baseado em fatos reais e no livro escrito por Dráuzio Varella."
      ],
      "littlemisssunshine.jpg" => [
        "titulo" => "Pequena Miss Sunshine (2006)",
        "direcao" => "Direção de Jonathan Dayton, Valerie Faris",
        "descricao" => "Uma família cheia de personagens excêntricos e coloridos entra em uma velha van e viaja para a Califórnia para levar a pequena Olive a competir em um concurso de beleza."
      ],
      "midsommar.jpg" => [
        "titulo" => "Midsommar (2019)",
        "direcao" => "Direção de Ari Aster",
        "descricao" => "Vários amigos viajam para a Suécia para estudar como antropólogos um festival de verão que acontece a cada noventa anos na remota cidade natal de um deles. O que começa como férias dos sonhos em um lugar onde o sol nunca se põe, gradualmente se transforma em um pesadelo sombrio à medida que os misteriosos habitantes os convidam para participar de suas perturbadoras atividades festivas."
      ]
    ];
    ?>


    <div id="carouselExampleRide" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <?php $first = true; ?>
        <?php foreach ($filmes as $imagem => $dados): ?>
          <div class="carousel-item <?php echo $first ? 'active' : ''; ?>">
            <img src="../img/carrossel/<?php echo $imagem; ?>" class="d-block w-100 imgcarrosel" alt="<?php echo $dados['titulo']; ?>">
            <div class="carousel-caption-custom">
              <h5><?php echo $dados['titulo']; ?></h5>
              <p><strong><?php echo $dados['direcao']; ?></strong></p>
              <p><?php echo $dados['descricao']; ?></p>
            </div>
          </div>
          <?php $first = false; ?>
        <?php endforeach; ?>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Próximo</span>
      </button>
    </div>
    <?php
    $lancamentos = [
      [
        "imagem" => "minecraft.webp",
        "titulo" => "Minecraft: O Filme",
        "diretor" => "Jared Hess",
        "atores" => ["Jason Momoa", "Jack Black", "Emma Myers"],
        "classificacao" => "12 anos",
        "data_lancamento" => "4 de abril de 2025",
        "duracao" => "1h 50min"
      ],
      [
        "imagem" => "pecadores.webp",
        "titulo" => "Pecadores",
        "diretor" => "Trey Edward Shults",
        "atores" => ["Michael B. Jordan", "Willem Dafoe"],
        "classificacao" => "16 anos",
        "data_lancamento" => "2025",
        "duracao" => "2h 5min"
      ],
      [
        "imagem" => "thelastofus.webp",
        "titulo" => "The Last of Us",
        "diretor" => "Kantemir Balagov",
        "atores" => ["Pedro Pascal", "Bella Ramsey"],
        "classificacao" => "18 anos",
        "data_lancamento" => "2025",
        "duracao" => "2h 20min"
      ],
      [
        "imagem" => "thunderbolts.webp",
        "titulo" => "Thunderbolts*",
        "diretor" => "Jake Schreier",
        "atores" => ["Florence Pugh", "Sebastian Stan", "David Harbour", "Wyatt Russell"],
        "classificacao" => "14 anos",
        "data_lancamento" => "2 de maio de 2025",
        "duracao" => "2h 10min"
      ]
    ];
    ?>
    <section class="lancamentos">
      <h2 class="lancamentos-titulo">LANÇAMENTOS</h2>
      <div class="lancamentos-container">
        <?php foreach ($lancamentos as $index => $filme): ?>

          <div class="card-lancamento"
            style="background-image: url('../img/lancamentos/<?= $filme['imagem'] ?>');"
            data-bs-toggle="modal"
            data-bs-target="#modal-lancamento-<?= $index ?>">
          </div>


          <div class="modal fade" id="modal-lancamento-<?= $index ?>" tabindex="-1" aria-labelledby="modalLabel<?= $index ?>" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="modalLabel<?= $index ?>"><?= $filme['titulo'] ?></h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                </div>
                <div class="modal-body">
                  <div class="row g-4 align-items-center">

                    <div class="col-md-5">
                      <img src="../img/lancamentos/<?= $filme['imagem'] ?>" alt="<?= $filme['titulo'] ?>" class="img-fluid rounded shadow">
                    </div>

                    <div class="col-md-7">
                      <p><strong>Diretor:</strong> <?= $filme['diretor'] ?></p>
                      <p><strong>Atores:</strong> <?= implode(', ', $filme['atores']) ?></p>
                      <p><strong>Classificação:</strong> <?= $filme['classificacao'] ?></p>
                      <p><strong>Lançamento:</strong> <?= $filme['data_lancamento'] ?></p>
                      <p><strong>Duração:</strong> <?= $filme['duracao'] ?></p>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </section>

    <?php
    $premiacoes = [
      [
        "imagem" => "anora.webp",
        "premio" => "Melhor Filme",
        "nome" => "Anora",
        "direcao" => "Dirigido por Jean Baker"
      ],
      [
        "imagem" => "aindaestouaqui.webp",
        "premio" => "Melhor Filme Internacional",
        "nome" => "Ainda Estou Aqui",
        "direcao" => "Walter Sales"
      ],
      [
        "imagem" => "flow.webp",
        "premio" => "Melhor Animação",
        "nome" => "Flow",
        "direcao" => "Gints Zilbalodis"
      ],
      [
        "imagem" => "conclave.webp",
        "premio" => "Melhor Roteiro Adaptado",
        "nome" => "Conclave",
        "direcao" => "Edward Berger"
      ]
    ];
    ?>
    <section class="premiacoes">
      <h2>Ganhadores do Oscar 2025!</h2>
      <div class="premiacoes-container">
        <?php foreach ($premiacoes as $premio): ?>
          <div class="card-premio">
            <img src="../img/oscar/<?= $premio['imagem'] ?>" alt="<?= $premio['nome'] ?>" class="img-premio">
            <div class="conteudo-premio">
              <div class="premio-titulo"><?= $premio['premio'] ?></div>
              <div class="filme-nome"><?= $premio['nome'] ?></div>
              <div class="direcao-nome"><?= $premio['direcao'] ?></div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </section>
    <section class="fernanda-section">
      <div class="fernanda-container">
        <img src="../img/oscar/fernanda.webp" alt="Fernanda Torres" class="fernanda-img" />
        <p class="fernanda-legenda">Fernanda Torres comemora primeiro prêmio de Ainda Estou Aqui no Oscar!</p>
      </div>
    </section>
  </main>
  <footer class="footer">
    <div class="footer-content">
      <div class="footer-logo">
        <img src="../img/logo1.png" alt="404 Filmes Não Encontrados" />
      </div>
      <div class="footer-text">
        <h3>SOBRE NÓS</h3>
        <p>Nosso site é dedicado a recomendar filmes e séries de qualidade.
          Nosso objetivo é ajudar você a encontrar boas opções com curadoria
          cuidadosa e conteúdo relevante.
        </p>
        <div class="social-links">
          <a href="https://www.instagram.com/gabbcarlos_/" target="_blank">
            <i class="fab fa-instagram"></i> @gabbcarlos_
          </a>
          <a href="https://www.instagram.com/isa.toldo/" target="_blank">
            <i class="fab fa-instagram"></i> @isa.toldo
          </a>
        </div>
      </div>
    </div>
  </footer>
</body>

</html>