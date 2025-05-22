<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Lista de Filmes</title>
  <link rel="stylesheet" href="../css/stylefilme.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>

<body>

  <header class="navbar fixed-top">
    <div class="container">
      <div class="logo">
        <img src="../img/logo2.png" alt="Logo 404" />
        <div class="logo-text">
        </div>
      </div>
      <nav class="menu">
        <ul>
          <li><a href="home.php">HOME</a></li>
          <li><a href="filmes.php">FILMES</a></li>
          <li><a href="series.php">SÉRIES</a></li>
          <li><a href="login.html">LOGIN</a></li>
        </ul>
      </nav>
    </div>
  </header>



  <main>
    <section class="filtros">
      <h1>FILMES</h1>
      <div class="dropdown">
        <button class="dropbtn">FILTRAR</button>
        <div class="dropdown-content">
          <a href="filmes.php">Exibir Todos</a>
          <div class="submenu">
            <span>Por Gênero ▸</span>
            <div class="submenu-content">
              <a href="filmes.php?genero=animacao">Animação</a>
              <a href="filmes.php?genero=ação">Ação</a>
              <a href="filmes.php?genero=drama">Drama</a>
              <a href="filmes.php?genero=terror">Terror</a>

              <!-- Adicione mais se quiser -->
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="cards-section">
      <?php
      $generoSelecionado = $_GET['genero'] ?? 'todos';

      $dadosfilmes = [
        [
          "imagem" => "ação/capitaoamericaeosoldadoinvernal.webp",
          "genero" => "ação",
          "titulo" => "Capitão América e o Soldado Invernal",
          "diretor" => "Anthony e Joe Russo",
          "atores" => "Chris Evans",
          "Scarlett Johansson",
          "Sebastian Stan",
          "classificacao" => "12+",
          "data_lancamento" => "2014-03-26",
          "duracao" => 136,
          "premios" => "https://pt.wikipedia.org/wiki/Captain_America:_The_Winter_Soldier",
          "sinopse" => "Após os eventos catastróficos em Nova York com os Vingadores, Steve Rogers, também conhecido como Capitão América, segue tentando se ajustar ao mundo moderno. Porém, quando um colega da agência S.H.I.E.L.D. é atacado, Steve se vê preso em uma rede de intrigas que ameaça colocar o mundo em risco. Em parceria com a Viúva Negra e Falcão, seu novo aliado, o Capitão América tem que enfrentar um misterioso e inesperado inimigo, o Soldado Invernal."

        ],
        [
          "imagem" => "ação/divergente.webp",
          "genero" => "ação",
          "titulo" => "Divergente",
          "diretor" => "Neil Burger",
          "atores" => "Shailene Woodley",
          "Theo James",
          "Kate Winslet",
          "classificacao" => "14+",
          "data_lancamento" => "2014-03-21",
          "duracao" => 139,
          "premios" => "https://pt.wikipedia.org/wiki/Divergente_(filme)",
          "sinopse" => "Em uma sociedade futurista dividida por facções com base em virtudes, Beatrice Prior descobre que é uma Divergente — alguém que não se encaixa em nenhuma facção. Ao perceber que há uma conspiração para eliminar os Divergentes, ela luta para descobrir seu lugar e proteger aqueles que ama."
        ],
        [
          "imagem" => "ação/doiscaraslegais.webp",
          "genero" => "ação",
          "titulo" => "Dois Caras Legais",
          "diretor" => "Shane Black",
          "atores" => "Russell Crowe",
          "Ryan Gosling",
          "Angourie Rice",
          "classificacao" => "16+",
          "data_lancamento" => "2016-05-20",
          "duracao" => 116,
          "premios" => "https://pt.wikipedia.org/wiki/The_Nice_Guys",
          "sinopse" => "Na Los Angeles dos anos 70, um detetive particular desastrado e um brutamontes se unem para investigar o desaparecimento de uma jovem. O que parecia um caso simples acaba revelando uma conspiração envolvendo pornografia, corrupção e indústria automobilística."
        ],
        [
          "imagem" => "ação/duna.webp",
          "genero" => "ação",
          "titulo" => "Duna",
          "diretor" => "Denis Villeneuve",
          "atores" => "Timothée Chalamet",
          "Zendaya",
          "Rebecca Ferguson",
          "classificacao" => "14+",
          "data_lancamento" => "2021-10-22",
          "duracao" => 155,
          "premios" => "https://pt.wikipedia.org/wiki/The_Nice_Guys",
          "sinopse" => "Em um futuro distante, Paul Atreides, herdeiro de uma casa nobre, é levado ao planeta deserto Arrakis, lar da substância mais valiosa do universo: a especiaria. Em meio a traições e guerras, ele descobre seu destino em um mundo onde sobrevivência depende da adaptação."
        ],
        [
          "imagem" => "ação/emritmodefuga.webp",
          "genero" => "ação",
          "titulo" => "Em Ritmo de Fuga",
          "diretor" => "Edgar Wright",
          "atores" => "Ansel Elgort",
          "Lily James",
          "Jamie Foxx",
          "classificacao" => "16+",
          "data_lancamento" => "2017-07-27",
          "duracao" => 113,
          "premios" => "https://pt.wikipedia.org/wiki/Baby_Driver",
          "sinopse" => "Baby é um jovem motorista talentoso que usa a música para lidar com um zumbido no ouvido e para realizar fugas perfeitas em assaltos. Quando se apaixona, decide deixar o crime, mas seu passado perigoso o puxa de volta para uma última missão arriscada."
        ],
        [
          "imagem" => "ação/mazerunner.webp",
          "genero" => "ação",
          "titulo" => "Maze Runner",
          "diretor" => "Wes Ball",
          "atores" => "Dylan O'Brien",
          "Kaya Scodelario",
          "Thomas Brodie-Sangster",
          "classificacao" => "14+",
          "data_lancamento" => "2014-09-19",
          "duracao" => 113,
          "premios" => "https://pt.wikipedia.org/wiki/Maze_Runner_-_Correr_ou_Morrer",
          "sinopse" => "Thomas acorda sem memória em um misterioso labirinto habitado por outros garotos. Enquanto tenta escapar, ele descobre segredos sombrios sobre a organização responsável pelo experimento e seu papel fundamental em uma luta maior pela sobrevivência."
        ],
        [
          "imagem" => "ação/scoobydoo.webp",
          "genero" => "ação",
          "titulo" => "Scooby Doo",
          "diretor" => "Raja Gosnell",
          "atores" => "Freddie Prinze Jr.",
          "Sarah Michelle Gellar",
          "Matthew Lillard",
          "classificacao" => "L",
          "data_lancamento" => "2002-06-14",
          "duracao" => 88,
          "premios" => "https://pt.wikipedia.org/wiki/Scooby-Doo_(filme)",
          "sinopse" => "A turma da Mistério S/A — Fred, Daphne, Velma, Salsicha e o cachorro Scooby-Doo — se reúne para resolver mistérios envolvendo fantasmas e criaturas assustadoras. Com humor e coragem, desvendam crimes com máscaras por trás de cada susto."
        ],
        [
          "imagem" => "ação/tokyodrift.webp",
          "genero" => "ação",
          "titulo" => "Velozes e Furiosos: Tokyo Drift",
          "diretor" => "Justin Lin",
          "atores" => "Lucas Black",
          "Sung Kang",
          "Bow Wow",
          "classificacao" => "14+",
          "data_lancamento" => "2006-06-16",
          "duracao" => 104,
          "premios" => "https://en.wikipedia.org/wiki/The_Fast_and_the_Furious:_Tokyo_Drift",
          "sinopse" => "Sean Boswell, um adolescente problemático, é enviado a Tóquio e mergulha no mundo das corridas de drift. Lá, aprende sobre honra, respeito e velocidade, enfrentando rivais e desafios em uma cultura totalmente nova."
        ],
        [
          "imagem" => "ação/topgun.webp",
          "genero" => "ação",
          "titulo" => "Top Gun: Ases Indomáveis",
          "diretor" => "Tony Scott",
          "atores" => "Tom Cruise",
          "Kelly McGillis",
          "Val Kilmer",
          "classificacao" => "12+",
          "data_lancamento" => "1986-05-16",
          "duracao" => 110,
          "premios" => "https://en.wikipedia.org/wiki/Top_Gun",
          "sinopse" => "Pete 'Maverick' Mitchell é um piloto de caça talentoso e impulsivo que entra para a elite da Marinha dos EUA: a escola Top Gun. Lá, enfrenta desafios profissionais, romances e precisa provar seu valor como o melhor dos melhores."
        ],
        [
          "imagem" => "ação/venom.webp",
          "genero" => "ação",
          "titulo" => "Venom",
          "diretor" => "Ruben Fleischer",
          "atores" => "Tom Hardy",
          "Michelle Williams",
          "Riz Ahmed",
          "classificacao" => "14+",
          "data_lancamento" => "2018-10-04",
          "duracao" => 112,
          "premios" => "https://pt.wikipedia.org/wiki/Venom_(Marvel_Comics)",
          "sinopse" => "O jornalista Eddie Brock entra em contato com um simbionte alienígena que lhe concede poderes extraordinários. Enquanto tenta controlar a criatura chamada Venom, Eddie precisa enfrentar uma ameaça ainda maior que pode destruir o planeta."
        ],
        [
          "imagem" => "ação/karatekid.webp",
          "genero" => "ação",
          "titulo" => "Karatê Kid",
          "diretor" => "John G. Avildsen",
          "atores" => "Ralph Macchio",
          "Pat Morita",
          "Elisabeth Shue",
          "classificacao" => "L",
          "data_lancamento" => "1984-06-22",
          "duracao" => 126,
          "premios" => "https://pt.wikipedia.org/wiki/The_Karate_Kid",
          "sinopse" => "Daniel LaRusso, um adolescente recém-chegado à Califórnia, sofre bullying de colegas praticantes de caratê. Com a ajuda do Sr. Miyagi, um mestre no esporte, ele aprende lições de luta, respeito e equilíbrio que mudam sua vida."
        ],
        [
          "imagem" => "ação/deadpoolewolverine.webp",
          "genero" => "ação",
          "titulo" => "Deadpool & Wolverine",
          "diretor" => "Shawn Levy",
          "atores" => "Ryan Reynolds",
          "Hugh Jackman",
          "Morena Baccarin",
          "classificacao" => "18+",
          "data_lancamento" => "2025-07-25",
          "duracao" => 127,
          "premios" => "https://pt.wikipedia.org/wiki/Deadpool_%26_Wolverine",
          "sinopse" => "Wade Wilson, o irreverente Deadpool, se junta ao implacável Wolverine em uma aventura caótica e explosiva pelo multiverso. Juntos, enfrentam inimigos perigosos e conflitos pessoais, tudo com muito humor ácido, ação e referências ao universo dos super-heróis."
        ],
        [
          "imagem" => "ação/senhordosaneis.webp",
          "genero" => "ação",
          "titulo" => "O Senhor dos Anéis: A Sociedade do Anel",
          "diretor" => "Peter Jackson",
          "atores" => "Elijah Wood",
          "Ian McKellen",
          "Viggo Mortensen",
          "classificacao" => "12+",
          "data_lancamento" => "2001-12-21",
          "duracao" => 178,
          "premios" => "https://pt.wikipedia.org/wiki/O_Senhor_dos_An%C3%A9is",
          "sinopse" => "Frodo Bolseiro herda um anel poderoso e maligno que precisa ser destruído para salvar a Terra Média. Ao lado de um grupo de companheiros, ele embarca em uma jornada épica enfrentando forças sombrias lideradas pelo senhor do mal Sauron."
        ],
        [
          "imagem" => "ação/matrix.webp",
          "genero" => "ação",
          "titulo" => "Matrix",
          "diretor" => "Lana e Lilly Wachowski",
          "atores" => "Keanu Reeves",
          "Laurence Fishburne",
          "Carrie-Anne Moss",
          "classificacao" => "14+",
          "data_lancamento" => "1999-06-11",
          "duracao" => 136,
          "premios" => "https://pt.wikipedia.org/wiki/Matrix",
          "sinopse" => "Thomas Anderson, um programador conhecido como Neo, descobre que a realidade em que vive é uma simulação criada por máquinas. Ele se junta a um grupo de rebeldes para lutar pela liberdade da humanidade e enfrentar o poderoso sistema da Matrix."
        ],
        [
          "imagem" => "ação/missaoimpossivel.webp",
          "genero" => "ação",
          "titulo" => "Missão Impossível",
          "diretor" => "Brian De Palma",
          "atores" => "Tom Cruise",
          "Jon Voight",
          "Emmanuelle Béart",
          "classificacao" => "14+",
          "data_lancamento" => "1996-05-23",
          "duracao" => 110,
          "premios" => "https://en.wikipedia.org/wiki/Mission:_Impossible_(film_series)",
          "sinopse" => "Ethan Hunt, um agente secreto da IMF, é acusado injustamente de traição e precisa provar sua inocência. Para isso, ele embarca em missões perigosas com sua equipe, enfrentando conspirações e inimigos altamente treinados."
        ],
        [
          "imagem" => "animacao/alvineosesquilos.webp",
          "genero" => "animacao",
          "titulo" => "Alvin e os Esquilos",
          "diretor" => "Tim Hill",
          "atores" => "Jason Lee",
          "David Cross",
          "Justin Long",
          "classificacao" => "L",
          "data_lancamento" => "2007-12-14",
          "duracao" => 92,
          "premios" => "https://pt.wikipedia.org/wiki/Alvin_e_os_Esquilos",
          "sinopse" => "Três esquilos falantes e talentosos — Alvin, Simon e Theodore — se tornam sensação da música pop após conhecerem o compositor Dave. Mas o sucesso traz desafios, e eles precisam equilibrar fama, amizade e travessuras."
        ],
        [
          "imagem" => "animacao/carros.webp",
          "genero" => "animacao",
          "titulo" => "Carros",
          "diretor" => "John Lasseter",
          "atores" => "Owen Wilson",
          "Paul Newman",
          "Bonnie Hunt",
          "classificacao" => "L",
          "data_lancamento" => "2006-06-09",
          "duracao" => 117,
          "premios" =>  "https://pt.wikipedia.org/wiki/Carros_(filme)",
          "sinopse" => "Relâmpago McQueen, um carro de corrida ambicioso, acaba em uma cidade esquecida no interior. Lá, aprende importantes lições sobre humildade, amizade e o verdadeiro significado de vencer."
        ],
        [
          "imagem" => "animacao/coco.webp",
          "genero" => "animacao",
          "titulo" => "Viva: A Vida é uma Festa",
          "diretor" => "Lee Unkrich",
          "atores" => "Anthony Gonzalez",
          "Gael García Bernal",
          "Benjamin Bratt",
          "classificacao" => "L",
          "data_lancamento" => "2017-11-22",
          "duracao" => 105,
          "premios" => "https://pt.wikipedia.org/wiki/Coco_(filme)",
          "sinopse" => "Miguel, um jovem apaixonado por música, é transportado ao mundo dos mortos em busca de seus ancestrais. Lá, descobre segredos sobre sua família e o poder da memória e das tradições."
        ],
        [
          "imagem" => "animacao/comotreinaroseudragao.webp",
          "genero" => "animacao",
          "titulo" => "Como Treinar o Seu Dragão",
          "diretor" => "Dean DeBlois",
          "atores" => "Jay Baruchel",
          "Gerard Butler",
          "America Ferrera",
          "classificacao" => "L",
          "data_lancamento" => "2010-03-26",
          "duracao" => 98,
          "premios" => "https://pt.wikipedia.org/wiki/How_to_Train_Your_Dragon_(filme_de_2010)",
          "sinopse" => "Soluço, um jovem viking, desafia a tradição de sua vila ao fazer amizade com um dragão ferido chamado Banguela. Juntos, provam que humanos e dragões podem viver em harmonia."
        ],
        [
          "imagem" => "animacao/detonaralph.webp",
          "genero" => "animacao",
          "titulo" => "Detona Ralph",
          "diretor" => "Rich Moore",
          "atores" => "John C. Reilly",
          "Sarah Silverman",
          "Jack McBrayer",
          "classificacao" => "L",
          "data_lancamento" => "2012-11-02",
          "duracao" => 101,
          "premios" => "https://pt.wikipedia.org/wiki/Wreck-It_Ralph",
          "sinopse" => "Ralph é o vilão de um videogame que deseja ser herói. Ao fugir para outros jogos em busca de reconhecimento, ele aprende que o verdadeiro heroísmo está em aceitar quem realmente é."
        ],
        [
          "imagem" => "animacao/eradogelo.webp",
          "genero" => "animacao",
          "titulo" => "A Era do Gelo",
          "diretor" => "Chris Wedge",
          "atores" => "Ray Romano",
          "John Leguizamo",
          "Denis Leary",
          "classificacao" => "L",
          "data_lancamento" => "2002-03-15",
          "duracao" => 81,
          "premios" => "https://pt.wikipedia.org/wiki/Ice_Age",
          "sinopse" => "Durante a era glacial, um mamute, uma preguiça e um tigre-dentes-de-sabre improvável formam uma equipe para devolver um bebê humano à sua família, enfrentando perigos e criando laços de amizade."
        ],
        [
          "imagem" => "animacao/moana.webp",
          "genero" => "animacao",
          "titulo" => "Moana",
          "diretor" => "Ron Clements e John Musker",
          "atores" => "Auli\"i Cravalho",
          "Dwayne Johnson",
          "Rachel House",
          "classificacao" => "L",
          "data_lancamento" => "2016-11-23",
          "duracao" => 107,
          "premios" => "https://pt.wikipedia.org/wiki/Moana",
          "sinopse" => "Moana, filha do chefe de uma ilha polinésia, parte em uma jornada pelo oceano para salvar seu povo. Com a ajuda do semideus Maui, ela descobre sua verdadeira identidade e coragem interior."
        ],
        [
          "imagem" => "animacao/procurandonemo.webp",
          "genero" => "animacao",
          "titulo" => "Procurando Nemo",
          "diretor" => "Andrew Stanton",
          "atores" => "Albert Brooks",
          "Ellen DeGeneres",
          "Alexander Gould",
          "classificacao" => "L",
          "data_lancamento" => "2003-05-30",
          "duracao" => 100,
          "premios" => "https://pt.wikipedia.org/wiki/Finding_Nemo",
          "sinopse" => "Quando seu filho Nemo é capturado por um mergulhador, o peixe Marlin atravessa o oceano com a esquecida Dory para resgatá-lo, enfrentando desafios e aprendendo a confiar no processo."
        ],
        [
          "imagem" => "animacao/shrek.webp",
          "genero" => "animacao",
          "titulo" => "Shrek",
          "diretor" => "Andrew Adamson e Vicky Jenson",
          "atores" => "Mike Myers",
          "Eddie Murphy",
          "Cameron Diaz",
          "classificacao" => "L",
          "data_lancamento" => "2001-05-18",
          "duracao" => 90,
          "premios" => "https://pt.wikipedia.org/wiki/Shrek",
          "sinopse" => "Shrek, um ogro solitário, embarca numa missão para resgatar a princesa Fiona e recuperar seu pântano. Ao longo da jornada, ele descobre que o amor verdadeiro vai além das aparências."
        ],
        [
          "imagem" => "animacao/toystory.webp",
          "genero" => "animacao",
          "titulo" => "Toy Story",
          "diretor" => "John Lasseter",
          "atores" => "Tom Hanks",
          "Tim Allen",
          "Don Rickles",
          "classificacao" => "L",
          "data_lancamento" => "1995-11-22",
          "duracao" => 81,
          "premios" => "https://pt.wikipedia.org/wiki/Toy_Story",
          "sinopse" => "Quando o brinquedo favorito Andy ganha um novo brinquedo moderno, Woody, o caubói, sente-se ameaçado. Mas uma série de aventuras une os brinquedos em uma história sobre amizade e lealdade."
        ],
        [
          "imagem" => "animacao/aviagemdechihiro.webp",
          "genero" => "animacao",
          "titulo" => "A Viagem de Chihiro",
          "diretor" => "Hayao Miyazaki",
          "atores" => "Rumi Hiiragi",
          "Miyu Irino",
          "Mari Natsuki",
          "classificacao" => "L",
          "data_lancamento" => "2001-07-20",
          "duracao" => 125,
          "premios" => "https://pt.wikipedia.org/wiki/A_Viagem_de_Chihiro",
          "sinopse" => "Chihiro é uma garota que se vê presa em um mundo mágico após seus pais serem transformados em porcos. Para salvá-los, ela precisa trabalhar em uma casa de banhos para espíritos e descobrir coragem dentro de si mesma."
        ],
        [
          "imagem" => "animacao/coraline.webp",
          "genero" => "animacao",
          "titulo" => "Coraline",
          "diretor" => "Henry Selick",
          "atores" => "Dakota Fanning",
          "Teri Hatcher",
          "John Hodgman",
          "classificacao" => "10+",
          "data_lancamento" => "2009-02-13",
          "duracao" => 100,
          "premios" => "https://pt.wikipedia.org/wiki/Coraline_(filme)",
          "sinopse" => "Coraline descobre uma porta secreta em sua nova casa que a leva a um mundo alternativo. Inicialmente perfeito, o lugar logo revela seu lado sombrio, e ela precisa salvar sua família de uma ameaça sinistra."
        ],
        [
          "imagem" => "animacao/frozen.webp",
          "genero" => "animacao",
          "titulo" => "Frozen: Uma Aventura Congelante",
          "diretor" => "Chris Buck e Jennifer Lee",
          "atores" => "Kristen Bell",
          "Idina Menzel",
          "Josh Gad",
          "classificacao" => "L",
          "data_lancamento" => "2014-01-03",
          "duracao" => 102,
          "premios" => "https://pt.wikipedia.org/wiki/Frozen_(2013)",
          "sinopse" => "Elsa, uma rainha com poderes de gelo, acidentalmente congela seu reino. Sua irmã Anna parte em uma jornada com aliados improváveis para trazer de volta o verão e restaurar o vínculo entre elas."
        ],
        [
          "imagem" => "animacao/patos.webp",
          "genero" => "animacao",
          "titulo" => "Patos!",
          "diretor" => "Benjamin Renner",
          "atores" => "Kumail Nanjiani",
          "Elizabeth Banks",
          "Awkwafina",
          "classificacao" => "L",
          "data_lancamento" => "2024-01-04",
          "duracao" => 82,
          "premios" => "https://pt.wikipedia.org/wiki/Patos!",
          "sinopse" => "Uma família de patos decide deixar o lago para uma viagem rumo ao sul. Durante a jornada, enfrentam obstáculos e aventuras enquanto descobrem o valor da união familiar."
        ],
        [
          "imagem" => "animacao/liloestitch.webp",
          "genero" => "animacao",
          "titulo" => "Lilo & Stitch",
          "diretor" => "Chris Sanders e Dean DeBlois",
          "atores" => "Daveigh Chase",
          "Chris Sanders",
          "Tia Carrere",
          "classificacao" => "L",
          "data_lancamento" => "2002-06-28",
          "duracao" => 85,
          "premios" => "https://pt.wikipedia.org/wiki/Lilo_%26_Stitch",
          "sinopse" => "Lilo, uma garota havaiana solitária, adota Stitch, um experimento alienígena que se torna seu melhor amigo. Juntos, enfrentam caçadores intergalácticos e descobrem o verdadeiro significado de família."
        ],
        [
          "imagem" => "drama/28dias.webp",
          "genero" => "drama",
          "titulo" => "28 Dias",
          "diretor" => "Betty Thomas",
          "atores" => "Sandra Bullock, Viggo Mortensen, Dominic West",
          "classificacao" => "14+",
          "data_lancamento" => "14/04/2000",
          "duracao" => 104,
          "premios" => "https://pt.wikipedia.org/wiki/28_Dias",
          "sinopse" => "Após um escândalo público causado por seu vício, Gwen é enviada para um centro de reabilitação onde precisa enfrentar seus demônios internos e reconstruir sua vida."
        ],
        [
          "imagem" => "drama/adoraveismulheres.webp",
          "genero" => "drama",
          "titulo" => "Adoráveis Mulheres",
          "diretor" => "Greta Gerwig",
          "atores" => "Saoirse Ronan, Emma Watson, Florence Pugh",
          "classificacao" => "12+",
          "data_lancamento" => "25/12/2019",
          "duracao" => 135,
          "premios" => "https://pt.wikipedia.org/wiki/Little_Women_(filme)",
          "sinopse" => "Quatro irmãs amadurecem durante a Guerra Civil Americana, enfrentando desafios pessoais e lutando por seus sonhos em uma sociedade tradicional. Baseado no clássico romance de Louisa May Alcott."
        ],
        [
          "imagem" => "drama/beforesunrise.webp",
          "genero" => "drama",
          "titulo" => "Antes do Amanhecer",
          "diretor" => "Richard Linklater",
          "atores" => "Ethan Hawke, Julie Delpy, Hanno Pöschl",
          "classificacao" => "12+",
          "data_lancamento" => "27/01/1995",
          "duracao" => 101,
          "premios" => "https://pt.wikipedia.org/wiki/Antes_do_Amanhecer",
          "sinopse" => "Jesse e Céline, dois jovens desconhecidos, se conhecem em um trem e decidem passar a noite juntos andando por Viena. Ao longo da noite, compartilham reflexões profundas e conexões emocionais intensas."
        ],
        [
          "imagem" => "drama/clubedaluta.webp",
          "genero" => "drama",
          "titulo" => "Clube da Luta",
          "diretor" => "David Fincher",
          "atores" => "Brad Pitt, Edward Norton, Helena Bonham Carter",
          "classificacao" => "18+",
          "data_lancamento" => "15/10/1999",
          "duracao" => 139,
          "premios" => "https://pt.wikipedia.org/wiki/Fight_Club",
          "sinopse" => "Um homem insatisfeito com a vida cria um clube secreto de lutas com Tyler Durden, onde homens descarregam suas frustrações. A ideia cresce fora de controle, revelando verdades perturbadoras."
        ],
        [
          "imagem" => "drama/clubedoscinco.webp",
          "genero" => "drama",
          "titulo" => "Clube dos Cinco",
          "diretor" => "John Hughes",
          "atores" => "Emilio Estevez, Molly Ringwald, Judd Nelson",
          "classificacao" => "14+",
          "data_lancamento" => "15/02/1985",
          "duracao" => 97,
          "premios" => "https://pt.wikipedia.org/wiki/The_Breakfast_Club",
          "sinopse" => "Cinco estudantes completamente diferentes passam um sábado de detenção juntos. Com o tempo, descobrem que têm mais em comum do que imaginavam, quebrando estereótipos e criando laços inesperados."
        ],
        [
          "imagem" => "drama/genioindomavel.webp",
          "genero" => "drama",
          "titulo" => "Gênio Indomável",
          "diretor" => "Gus Van Sant",
          "atores" => "Matt Damon, Robin Williams, Ben Affleck",
          "classificacao" => "16+",
          "data_lancamento" => "05/12/1997",
          "duracao" => 126,
          "premios" => "https://pt.wikipedia.org/wiki/Good_Will_Hunting",
          "sinopse" => "Will Hunting é um jovem com inteligência extraordinária, mas vive como zelador e se envolve em problemas. Um psicólogo o ajuda a confrontar seu passado e descobrir seu potencial."
        ],
        [
          "imagem" => "drama/oautodacompadecida2.webp",
          "genero" => "drama",
          "titulo" => "O Auto da Compadecida",
          "diretor" => "Guel Arraes",
          "atores" => "Matheus Nachtergaele, Selton Mello, Denise Fraga",
          "classificacao" => "12+",
          "data_lancamento" => "10/09/2000",
          "duracao" => 104,
          "premios" => "https://pt.wikipedia.org/wiki/O_Auto_da_Compadecida_(filme)",
          "sinopse" => "Chicó e João Grilo voltam em novas trapalhadas no sertão nordestino, misturando crítica social, fé e comédia. A dupla se mete em confusões envolvendo o céu, o inferno e a compadecida."
        ],
        [
          "imagem" => "drama/osrejeitados.webp",
          "genero" => "drama",
          "titulo" => "Os Rejeitados",
          "diretor" => "Alexander Payne",
          "atores" => "Paul Giamatti, Da'Vine Joy Randolph, Dominic Sessa",
          "classificacao" => "16+",
          "data_lancamento" => "22/12/2023",
          "duracao" => 133,
          "premios" => "https://pt.wikipedia.org/wiki/The_Holdovers",
          "sinopse" => "Um grupo de adolescentes socialmente excluídos decide se unir para enfrentar a pressão da escola e afirmar sua identidade. Uma comédia dramática sobre amadurecimento e aceitação."
        ],
        [
          "imagem" => "drama/porlugaresincriveis.webp",
          "genero" => "drama",
          "titulo" => "Por Lugares Incríveis",
          "diretor" => "Brett Haley",
          "atores" => "Elle Fanning, Justice Smith, Alexandra Shipp",
          "classificacao" => "14+",
          "data_lancamento" => "28/02/2020",
          "duracao" => 108,
          "premios" => "https://pt.wikipedia.org/wiki/All_the_Bright_Places",
          "sinopse" => "Dois adolescentes com traumas emocionais se conectam em uma jornada por lugares memoráveis. Juntos, enfrentam dores do passado e descobrem a importância de viver o presente."
        ],
        [
          "imagem" => "drama/sociedadedospoetasmortos.webp",
          "genero" => "drama",
          "titulo" => "Sociedade dos Poetas Mortos",
          "diretor" => "Peter Weir",
          "atores" => "Robin Williams, Ethan Hawke, Robert Sean Leonard",
          "classificacao" => "12+",
          "data_lancamento" => "09/06/1989",
          "duracao" => 128,
          "premios" => "https://pt.wikipedia.org/wiki/Dead_Poets_Society",
          "sinopse" => "Um professor de literatura inspira seus alunos a pensar por si mesmos e seguir seus sonhos através da poesia, desafiando as regras rígidas de um colégio tradicional."
        ],
        [
          "imagem" => "drama/titanic.webp",
          "genero" => "drama",
          "titulo" => "Titanic",
          "diretor" => "James Cameron",
          "atores" => "Leonardo DiCaprio, Kate Winslet, Billy Zane",
          "classificacao" => "12+",
          "data_lancamento" => "16/01/1998",
          "duracao" => 195,
          "premios" => "https://pt.wikipedia.org/wiki/Titanic_(filme_de_1997)",
          "sinopse" => "Durante a fatídica viagem do Titanic, o artista pobre Jack e a jovem aristocrata Rose vivem um romance intenso e proibido, enquanto o navio segue para seu trágico destino."
        ],
        [
          "imagem" => "drama/interestelar.webp",
          "genero" => "drama",
          "titulo" => "Interestelar",
          "diretor" => "Christopher Nolan",
          "atores" => "Matthew McConaughey, Anne Hathaway, Jessica Chastain",
          "classificacao" => "10+",
          "data_lancamento" => "06/11/2014",
          "duracao" => 169,
          "premios" => "https://pt.wikipedia.org/wiki/Interstellar",
          "sinopse" => "Em um futuro de crise ambiental, um grupo de astronautas viaja por um buraco de minhoca em busca de um novo lar para a humanidade. Amor, tempo e ciência se entrelaçam numa missão épica."
        ],
        [
          "imagem" => "drama/prendameseforcapaz.webp",
          "genero" => "drama",
          "titulo" => "Prenda-me Se For Capaz",
          "diretor" => "Steven Spielberg",
          "atores" => "Leonardo DiCaprio, Tom Hanks, Christopher Walken",
          "classificacao" => "12+",
          "data_lancamento" => "31/01/2003",
          "duracao" => 141,
          "premios" => "https://pt.wikipedia.org/wiki/Catch_Me_If_You_Can_(2002)",
          "sinopse" => "Frank Abagnale Jr., um jovem golpista brilhante, se passa por piloto, médico e advogado. Enquanto engana o sistema, um agente do FBI tenta capturá-lo. Baseado em uma história real."
        ],
        [
          "imagem" => "drama/olobodewallstreet.webp",
          "genero" => "drama",
          "titulo" => "O Lobo de Wall Street",
          "diretor" => "Martin Scorsese",
          "atores" => "Leonardo DiCaprio, Jonah Hill, Margot Robbie",
          "classificacao" => "18+",
          "data_lancamento" => "24/01/2014",
          "duracao" => 180,
          "premios" => "https://pt.wikipedia.org/wiki/O_Lobo_de_Wall_Street",
          "sinopse" => "Baseado em fatos reais, Jordan Belfort sobe e cai no mundo das finanças com um estilo de vida extravagante, fraudes milionárias, excessos e corrupção em Wall Street."
        ],
        [
          "imagem" => "drama/crepusculo.webp",
          "genero" => "drama",
          "titulo" => "Crepúsculo",
          "diretor" => "Catherine Hardwicke",
          "atores" => "Kristen Stewart, Robert Pattinson, Taylor Lautner",
          "classificacao" => "12+",
          "data_lancamento" => "19/12/2008",
          "duracao" => 122,
          "premios" => "https://pt.wikipedia.org/wiki/Crep%C3%BAsculo_(filme)",
          "sinopse" => "Bella Swan se muda para uma nova cidade e se apaixona por Edward Cullen, um vampiro. O romance proibido entre os dois os coloca em perigo enquanto enfrentam ameaças sobrenaturais."
        ],
        [
          "imagem" => "terror/afreira.png",
          "genero" => "terror",
          "titulo" => "A Freira",
          "diretor" => "Corin Hardy",
          "atores" => "Taissa Farmiga, Demián Bichir, Bonnie Aarons",
          "classificacao" => "16+",
          "data_lancamento" => "06/09/2018",
          "duracao" => 96,
          "premios" => "https://pt.wikipedia.org/wiki/The_Nun",
          "sinopse" => "Em um convento na Romênia, uma jovem freira comete suicídio. O Vaticano envia um padre e uma noviça para investigar, e eles descobrem uma força demoníaca na forma de uma freira aterrorizante."
        ],
        [
          "imagem" => "terror/asubstancia.png",
          "genero" => "terror",
          "titulo" => "A Substância",
          "diretor" => "Coralie Fargeat",
          "atores" => "Demi Moore, Margaret Qualley, Dennis Quaid",
          "classificacao" => "18+",
          "data_lancamento" => "20/05/2024",
          "duracao" => 142,
          "premios" => "https://pt.wikipedia.org/wiki/A_Subst%C3%A2ncia",
          "sinopse" => "Uma atriz em decadência recorre a um misterioso produto revolucionário para recuperar juventude e fama, mas os efeitos colaterais revelam um preço assustador. Uma crítica ao culto da aparência."
        ],
        [
          "imagem" => "terror/babadook.png",
          "genero" => "terror",
          "titulo" => "O Babadook",
          "diretor" => "Jennifer Kent",
          "atores" => "Essie Davis, Noah Wiseman, Daniel Henshall",
          "classificacao" => "16+",
          "data_lancamento" => "17/07/2014",
          "duracao" => 93,

          "premios" => "https://en.wikipedia.org/wiki/The_Babadook",
          "sinopse" => "Uma mãe solteira e seu filho são atormentados por uma entidade maligna vinda de um livro infantil chamado 'Mister Babadook'. O terror psicológico revela traumas profundos e dores do luto."
        ],
        [
          "imagem" => "terror/corra.png",
          "genero" => "terror",
          "titulo" => "Corra!",
          "diretor" => "Jordan Peele",
          "atores" => "Daniel Kaluuya, Allison Williams, Bradley Whitford",
          "classificacao" => "14+",
          "data_lancamento" => "18/05/2017",
          "duracao" => 104,
          "premios" => "https://pt.wikipedia.org/wiki/Get_Out",
          "sinopse" => "Chris, um jovem negro, visita a família da namorada branca e descobre um segredo perturbador envolvendo hipnose, apropriação e racismo. Um suspense social intenso e premiado."
        ],
        [
          "imagem" => "terror/invocacaodomal.png",
          "genero" => "terror",
          "titulo" => "Invocação do Mal",
          "diretor" => "James Wan",
          "atores" => "Patrick Wilson, Vera Farmiga, Lili Taylor",
          "classificacao" => "16+",
          "data_lancamento" => "13/09/2013",
          "duracao" => 112,
          "premios" => "https://pt.wikipedia.org/wiki/The_Conjuring",
          "sinopse" => "Baseado em fatos reais, os investigadores paranormais Ed e Lorraine Warren enfrentam uma entidade demoníaca que assombra uma família em uma fazenda isolada. Clássico moderno do terror sobrenatural."
        ],
        [
          "imagem" => "terror/it.png",
          "genero" => "terror",
          "titulo" => "It: A Coisa",
          "diretor" => "Andy Muschietti",
          "atores" => "Bill Skarsgård, Jaeden Martell, Finn Wolfhard",
          "classificacao" => "16+",
          "data_lancamento" => "07/09/2017",
          "duracao" => 135,
          "premios" => "https://pt.wikipedia.org/wiki/It_(2017)",
          "sinopse" => "Um grupo de crianças enfrenta uma entidade maligna que assume a forma de um palhaço chamado Pennywise, que se alimenta de seus medos. A amizade é sua maior arma contra o mal."
        ],
        [
          "imagem" => "terror/midsommar.png",
          "genero" => "terror",
          "titulo" => "Midsommar: O Mal Não Espera a Noite",
          "diretor" => "Ari Aster",
          "atores" => "Florence Pugh, Jack Reynor, Vilhelm Blomgren",
          "classificacao" => "18+",
          "data_lancamento" => "19/09/2019",
          "duracao" => 147,
          "premios" => "https://pt.wikipedia.org/wiki/Midsommar",
          "sinopse" => "Um casal participa de um festival pagão na Suécia que acontece a cada 90 anos. O que começa como uma experiência cultural torna-se um pesadelo de horror e rituais macabros à luz do dia."
        ],
        [
          "imagem" => "terror/nosferatu.png",
          "genero" => "terror",
          "titulo" => "Nosferatu",
          "diretor" => "F. W. Murnau",
          "atores" => "Max Schreck, Gustav von Wangenheim, Greta Schröder",
          "classificacao" => "14+",
          "data_lancamento" => "04/03/1922",
          "duracao" => 94,

          "premios" => "https://pt.wikipedia.org/wiki/Nosferatu_(2024)",
          "sinopse" => "Clássico do cinema mudo de 1922, retrata o conde Orlok, um vampiro que assombra uma vila alemã. Uma obra-prima do expressionismo alemão e precursor do horror moderno."
        ],
        [
          "imagem" => "terror/ochamado.png",
          "genero" => "terror",
          "titulo" => "O Chamado",
          "diretor" => "Gore Verbinski",
          "atores" => "Naomi Watts, Martin Henderson, David Dorfman",
          "classificacao" => "14+",
          "data_lancamento" => "14/02/2003",
          "duracao" => 115,
          "premios" => "https://pt.wikipedia.org/wiki/The_Ring_(2002)",
          "sinopse" => "Uma fita de vídeo amaldiçoada leva à morte todos que a assistem após sete dias. Uma jornalista investiga o mistério por trás da maldição para salvar sua vida e a de seu filho."
        ],
        [
          "imagem" => "terror/ocorvo.png",
          "genero" => "terror",
          "titulo" => "O Corvo",
          "diretor" => "Alex Proyas",
          "atores" => "Brandon Lee, Ernie Hudson, Michael Wincott",
          "classificacao" => "18+",
          "data_lancamento" => "13/05/1994",
          "duracao" => 102,
          "premios" => "https://pt.wikipedia.org/wiki/O_Corvo_(1994)",
          "sinopse" => "Um músico e sua noiva são assassinados. Um ano depois, ele retorna dos mortos para vingar-se com a ajuda de um corvo místico. Uma história gótica de amor, dor e justiça."
        ],
        [
          "imagem" => "terror/oiluminado.png",
          "genero" => "terror",
          "titulo" => "O Iluminado",
          "diretor" => "Stanley Kubrick",
          "atores" => "Jack Nicholson, Shelley Duvall, Danny Lloyd",
          "classificacao" => "16+",
          "data_lancamento" => "25/12/1980",
          "duracao" => 146,
          "premios" => "https://pt.wikipedia.org/wiki/The_Shining",
          "sinopse" => "Jack Torrance aceita cuidar de um hotel isolado durante o inverno, mas forças sobrenaturais e o isolamento o levam à loucura. Um terror psicológico marcante baseado em Stephen King."
        ],
        [
          "imagem" => "terror/omacaco.png",
          "genero" => "terror",
          "titulo" => "O Macaco",
          "diretor" => "Guillermo del Toro",
          "atores" => "Theo James, Tatiana Maslany, Elijah Wood",
          "classificacao" => "16+",
          "data_lancamento" => "27/10/2025",
          "duracao" => 98,

          "premios" => "https://en.wikipedia.org/wiki/The_Monkey_(film)",
          "sinopse" => "Inspirado em um conto de Stephen King, a trama envolve um brinquedo de macaco sinistro que desencadeia mortes inexplicáveis ao soar seus pratos, revelando um passado amaldiçoado."
        ],
        [
          "imagem" => "terror/panico.png",
          "genero" => "terror",
          "titulo" => "Pânico",
          "diretor" => "Wes Craven",
          "atores" => "Neve Campbell, Courteney Cox, David Arquette",
          "classificacao" => "18+",
          "data_lancamento" => "17/01/1997",
          "duracao" => 111,
          "premios" => "https://pt.wikipedia.org/wiki/Scream_(s%C3%A9rie_de_filmes)",
          "sinopse" => "Um assassino mascarado aterroriza adolescentes em uma pequena cidade, usando referências a filmes de terror. Um clássico slasher que mistura suspense, sátira e violência."
        ],
        [
          "imagem" => "terror/premonicao.png",
          "genero" => "terror",
          "titulo" => "Premonição",
          "diretor" => "James Wong",
          "atores" => "Devon Sawa, Ali Larter, Kerr Smith",
          "classificacao" => "16+",
          "data_lancamento" => "12/05/2000",
          "duracao" => 98,

          "premios" => "https://pt.wikipedia.org/wiki/Final_Destination_(franquia)",
          "sinopse" => "Após prever um desastre mortal, um jovem e seus amigos escapam da morte. Mas ela começa a persegui-los um a um, provando que o destino não pode ser enganado."
        ],
        [
          "imagem" => "terror/sorria.png",
          "genero" => "terror",
          "titulo" => "Sorria",
          "diretor" => "Parker Finn",
          "atores" => "Sosie Bacon, Jessie T. Usher, Kyle Gallner",
          "classificacao" => "16+",
          "data_lancamento" => "29/09/2022",
          "duracao" => 115,
          "premios" => "https://pt.wikipedia.org/wiki/Smile_(2022)",
          "sinopse" => "Após testemunhar um suicídio brutal, uma psiquiatra começa a viver eventos inexplicáveis e aterrorizantes, todos ligados a um sorriso macabro e uma entidade sobrenatural."
        ],
        [
          "imagem" => "lancamentos/minecraft.webp",
          "genero" => "ação",
          "titulo" => "Minecraft: O Filme",
          "diretor" => "Jared Hess",
          "atores" => "Jack Black, Jason Momoa, Danielle Brooks",
          "classificacao" => "10+",
          "data_lancamento" => "04/04/2025",
          "duracao" => 110,
          "premios" => "https://pt.wikipedia.org/wiki/Um_Filme_Minecraft",
          "sinopse" => "Em um mundo de blocos e criatividade, uma jovem precisa salvar seu povo após um ataque devastador. Embarca em uma jornada épica com aliados improváveis no universo Minecraft."
        ],
        [
          "imagem" => "lancamentos/pecadores.webp",
          "genero" => "ação",
          "titulo" => "Pecadores",
          "diretor" => "Ryan Coogler",
          "atores" => "Michael B. Jordan, Hailee Steinfeld, Jack O´Connell",
          "classificacao" => "16+",
          "data_lancamento" => "01/05/2025",
          "duracao" => 120,
          "premios" => "https://pt.wikipedia.org/wiki/Pecadores_(filme)",
          "sinopse" => "Um grupo de jovens religiosos vive sob regras rígidas em uma comunidade isolada. Quando a dúvida e o desejo surgem, segredos sombrios e punições extremas vêm à tona."
        ],
        [
          "imagem" => "lancamentos/thunderbolts.webp",
          "genero" => "ação",
          "titulo" => "Thunderbolts",
          "diretor" => "Jake Schreier",
          "atores" => "Florence Pugh, Sebastian Stan, David Harbour",
          "classificacao" => "14+",
          "data_lancamento" => "25/07/2025",
          "duracao" => 125,
          "premios" => "https://pt.wikipedia.org/wiki/Thunderbolts*",
          "sinopse" => "Um grupo de anti-heróis e vilões reformados é reunido para realizar missões secretas para o governo. Entre conflitos internos e decisões morais, eles precisam provar seu valor."
        ],
        [
          "imagem" => "oscar/aindaestouaqui.webp",
          "genero" => "drama",
          "titulo" => "Ainda Estou Aqui",
          "diretor" => "Walter Salles",
          "atores" => "Fernanda Torres, Fernanda Montenegro, Selton Mello",
          "classificacao" => "14+",
          "data_lancamento" => "19/08/2023",
          "duracao" => 98,

          "premios" => "https://pt.wikipedia.org/wiki/Ainda_Estou_Aqui_(filme_de_2024)",
          "sinopse" => "Após a perda de seu parceiro, um jovem tenta reconstruir a vida em meio ao luto, dor e aceitação. Uma história emocional sobre amor, perda e renascimento pessoal."
        ],
        [
          "imagem" => "oscar/anora.webp",
          "genero" => "drama",
          "titulo" => "Anora",
          "diretor" => "Sean Baker",
          "atores" => "Mikey Madison, Mark Eydelshteyn, Yura Borisov",
          "classificacao" => "16+",
          "data_lancamento" => "17/05/2024",
          "duracao" => 118,
          "premios" => "https://pt.wikipedia.org/wiki/Anora",
          "sinopse" => "Uma jovem stripper do Brooklyn se casa impulsivamente com o filho de um oligarca russo. O choque entre mundos gera tensão, amor inesperado e pressões familiares intensas."
        ],
        [
          "imagem" => "oscar/conclave.webp",
          "genero" => "drama",
          "titulo" => "Conclave",
          "diretor" => "Edward Berger",
          "atores" => "Ralph Fiennes, John Lithgow, Stanley Tucci",
          "classificacao" => "12+",
          "data_lancamento" => "06/12/2024",
          "duracao" => 130,
          "premios" => "https://pt.wikipedia.org/wiki/Conclave_(filme)",
          "sinopse" => "Após a morte do Papa, cardeais se reúnem para eleger o novo líder da Igreja. Intrigas, segredos e conflitos de poder se desenrolam dentro dos muros do Vaticano."
        ],
        [
          "imagem" => "oscar/flow.webp",
          "genero" => "animacao",
          "titulo" => "Flow",
          "diretor" => "Gints Zilbalodis",
          "atores" => "Sem elenco de voz",
          "classificacao" => "L",
          "data_lancamento" => "24/05/2024",
          "duracao" => 84,

          "premios" => "https://en.wikipedia.org/wiki/Flow_(2024_film)",
          "sinopse" => "Um peixe sobrevive em um mundo pós-apocalíptico subaquático e busca segurança em um ambiente hostil. Uma jornada visual sobre sobrevivência e esperança em um oceano devastado."
        ]
      ];


      foreach ($dadosfilmes as $index => $filme): ?>
        <?php if ($generoSelecionado === 'todos' || strpos(strtolower($filme['genero']), $generoSelecionado) === 0): ?>

          <!-- Card com gatilho do modal -->
          <div class="card"
            style="background-image: url('../img/filmes/<?= $filme['imagem'] ?>');"
            data-bs-toggle="modal"
            data-bs-target="#modal-filme-<?= $index ?>">
          </div>

          <!-- Modal -->
          <div class="modal fade" id="modal-filme-<?= $index ?>" tabindex="-1" aria-labelledby="modalLabel<?= $index ?>" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="modalLabel<?= $index ?>"><?= $filme['titulo'] ?></h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                </div>
                <div class="modal-body">
                  <div class="row g-4 align-items-center">
                    <!-- Imagem -->
                    <div class="col-md-5">
                      <img src="../img/filmes/<?= $filme['imagem'] ?>" alt="<?= $filme['titulo'] ?>" class="img-fluid rounded shadow">
                    </div>
                    <!-- Informações -->
                    <div class="col-md-7">
                      <p><strong>Diretor:</strong> <?= $filme['diretor'] ?></p>
                      <p><strong>Atores:</strong> <?= $filme['atores'] ?></p>
                      <p><strong>Classificação:</strong> <?= $filme['classificacao'] ?></p>
                      <p><strong>Lançamento:</strong> <?= $filme['data_lancamento'] ?></p>
                      <p><strong>Duração:</strong> <?= $filme['duracao'] ?> min</p>
                      <p><strong>Sinopse:</strong> <?= $filme['sinopse'] ?></p>
                      <button onclick="window.open('<?= $filme['premios'] ?>', '_blank')">
                        Ver prêmios
                      </button>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                </div>
              </div>
            </div>
          </div>

        <?php endif; ?>
      <?php endforeach; ?>
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