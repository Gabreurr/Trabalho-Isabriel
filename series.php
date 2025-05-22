<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Lista de Séries</title>
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
      <h1>SÉRIES</h1>
      <div class="dropdown">
        <button class="dropbtn">FILTRAR</button>
        <div class="dropdown-content">
          <a href="series.php">Exibir Todos</a> <!-- Corrigido para series.php -->
          <div class="submenu">
            <span>Por Gênero ▸</span>
            <div class="submenu-content">
              <a href="series.php?genero=comedia">Comédia</a>
              <a href="series.php?genero=drama">Drama</a>
              <a href="series.php?genero=fantasia">Fantasia</a>
            </div>
          </div>
        </div> <!-- Faltava fechar essa div -->
      </div> <!-- Fechando dropdown -->
    </section>

    <section class="cards-section">
      <?php
      // Pegando o gênero e forçando ser minúsculo para comparação
      $generoSelecionado = isset($_GET['genero']) ? strtolower($_GET['genero']) : 'todos';

      $dadosseries = [
        [
          "imagem" => "comédia/brooklyn99.webp",
          "genero" => "comedia",
          "titulo" => "Brooklyn Nine-Nine",
          "diretor" => "Dan Goor e Michael Schur",
          "atores" => "Andy Samberg, Terry Crews, Andre Braugher",
          "classificacao" => "14+",
          "temporadas" => 8,
          "episodios" => 153,
          "data_lancamento" => "17/09/2013",
          "sinopse" => "Um talentoso mas imaturo detetive de Nova York trabalha ao lado de uma equipe excêntrica no fictício 99º distrito policial do Brooklyn, enfrentando crimes com muito humor."
        ],

        [
          "imagem" => "comédia/doishomensemeio.webp",
          "genero" => "comedia",
          "titulo" => "Two and a Half Men",
          "diretor" => "Chuck Lorre e Lee Aronsohn",
          "atores" => "Charlie Sheen, Jon Cryer, Angus T. Jones",
          "classificacao" => "14+",
          "temporadas" => 12,
          "episodios" => 262,
          "data_lancamento" => "22/09/2003",
          "sinopse" => "Charlie Harper, um solteirão mulherengo, vê sua vida virar de cabeça para baixo quando seu irmão divorciado e seu sobrinho se mudam para sua casa na praia."
        ],

        [
          "imagem" => "comédia/friends.webp",
          "genero" => "comedia",
          "titulo" => "Friends",
          "diretor" => "David Crane e Marta Kauffman",
          "atores" => "Jennifer Aniston, Courteney Cox, Matthew Perry",
          "classificacao" => "12+",
          "temporadas" => 10,
          "episodios" => 236,
          "data_lancamento" => "22/09/1994",
          "sinopse" => "Seis amigos vivem juntos em Nova York, compartilhando experiências de amizade, amor e trabalho enquanto enfrentam os desafios da vida adulta com muito humor e emoção."
        ],

        [
          "imagem" => "comédia/howimetyourmother.webp",
          "genero" => "comedia",
          "titulo" => "How I Met Your Mother",
          "diretor" => "Carter Bays e Craig Thomas",
          "atores" => "Josh Radnor, Jason Segel, Cobie Smulders",
          "classificacao" => "14+",
          "temporadas" => 9,
          "episodios" => 208,
          "data_lancamento" => "19/09/2005",
          "sinopse" => "Ted conta aos filhos como conheceu a mãe deles, relembrando as aventuras e relacionamentos vividos com seus amigos ao longo dos anos em Nova York."
        ],

        [
          "imagem" => "comédia/jovemsheldon.webp",
          "genero" => "comedia",
          "titulo" => "Young Sheldon",
          "diretor" => "Chuck Lorre e Steven Molaro",
          "atores" => "Iain Armitage, Zoe Perry, Lance Barber",
          "classificacao" => "12+",
          "temporadas" => 7,
          "episodios" => 141,
          "data_lancamento" => "25/09/2017",
          "sinopse" => "Prequela de 'The Big Bang Theory', mostra a infância de Sheldon Cooper no Texas, onde sua genialidade precoce contrasta com a vida simples e religiosa de sua família."
        ],

        [
          "imagem" => "comédia/modernfamily.webp",
          "genero" => "comedia",
          "titulo" => "Modern Family",
          "diretor" => "Christopher Lloyd e Steven Levitan",
          "atores" => "Ed O´Neill, Sofía Vergara, Julie Bowen",
          "classificacao" => "12+",
          "temporadas" => 11,
          "episodios" => 250,
          "data_lancamento" => "23/09/2009",
          "sinopse" => "Três famílias modernas, conectadas entre si, enfrentam os desafios do cotidiano com muito humor, mostrando diferentes formas de estrutura familiar."
        ],

        [
          "imagem" => "comédia/shameless.webp",
          "genero" => "comedia",
          "titulo" => "Shameless",
          "diretor" => "John Wells",
          "atores" => "William H. Macy, Emmy Rossum, Jeremy Allen White",
          "classificacao" => "18+",
          "temporadas" => 11,
          "episodios" => 134,
          "data_lancamento" => "09/01/2011",
          "sinopse" => "A série retrata a caótica vida da família Gallagher, liderada por um pai alcoólatra e irresponsável, enquanto os filhos tentam sobreviver e cuidar uns dos outros em meio ao caos."
        ],

        [
          "imagem" => "comédia/thegoodplace.webp",
          "genero" => "comedia",
          "titulo" => "The Good Place",
          "diretor" => "Michael Schur",
          "atores" => "Kristen Bell, Ted Danson, William Jackson Harper",
          "classificacao" => "12+",
          "temporadas" => 4,
          "episodios" => 53,
          "data_lancamento" => "19/09/2016",
          "sinopse" => "Eleanor morre e vai parar no 'Lugar Bom', mas logo descobre que está lá por engano. Para se tornar digna, embarca numa jornada ética cheia de reviravoltas filosóficas e humor."
        ],

        [
          "imagem" => "comédia/theoffice.webp",
          "genero" => "comedia",
          "titulo" => "The Office",
          "diretor" => "Greg Daniels",
          "atores" => "Steve Carell, Rainn Wilson, John Krasinski",
          "classificacao" => "12+",
          "temporadas" => 9,
          "episodios" => 201,
          "data_lancamento" => "24/03/2005",
          "sinopse" => "Um falso documentário sobre o cotidiano dos funcionários de um escritório de vendas de papel na Pensilvânia, liderado por um chefe excêntrico. Humor constrangedor e relações marcantes."
        ],

        [
          "imagem" => "comédia/todomundoodeioochris.webp",
          "genero" => "comedia",
          "titulo" => "Todo Mundo Odeia o Chris",
          "diretor" => "Ali LeRoi e Chris Rock",
          "atores" => "Tyler James Williams, Terry Crews, Tichina Arnold",
          "classificacao" => "12+",
          "temporadas" => 4,
          "episodios" => 88,
          "data_lancamento" => "22/09/2005",
          "sinopse" => "Inspirada na infância do comediante Chris Rock, a série retrata com humor os desafios de um adolescente negro nos anos 80, em um bairro majoritariamente branco."
        ],
        [
          "imagem" => "comédia/apenasumshow.webp",
          "genero" => "comedia",
          "titulo" => "Apenas um Show",
          "diretor" => "J.G. Quintel",
          "atores" => "J.G. Quintel, William Salyers, Sam Marin",
          "classificacao" => "10+",
          "temporadas" => 8,
          "episodios" => 261,
          "data_lancamento" => "06/09/2010",
          "sinopse" => "Mordecai e Rigby, um gaio-azul e um guaxinim, trabalham em um parque e vivem situações absurdas e cômicas enquanto tentam evitar responsabilidades. Uma animação cheia de humor surreal."
        ],

        [
          "imagem" => "comédia/bigbangtheory.webp",
          "genero" => "comedia",
          "titulo" => "The Big Bang Theory",
          "diretor" => "Chuck Lorre e Bill Prady",
          "atores" => "Johnny Galecki, Jim Parsons, Kaley Cuoco",
          "classificacao" => "12+",
          "temporadas" => 12,
          "episodios" => 279,
          "data_lancamento" => "24/09/2007",
          "sinopse" => "A série acompanha um grupo de cientistas nerds com dificuldades sociais, especialmente Sheldon e Leonard, cujas vidas mudam quando conhecem a vizinha Penny."
        ],

        [
          "imagem" => "comédia/ossimpsons.webp",
          "genero" => "comedia",
          "titulo" => "Os Simpsons",
          "diretor" => "Matt Groening",
          "atores" => "Dan Castellaneta, Julie Kavner, Nancy Cartwright",
          "classificacao" => "12+",
          "temporadas" => 35,
          "episodios" => 768,
          "data_lancamento" => "17/12/1989",
          "sinopse" => "A vida da disfuncional família Simpson na cidade de Springfield, abordando questões sociais, políticas e culturais com sátira, humor e personagens memoráveis."
        ],

        [
          "imagem" => "comédia/rickemorty.webp",
          "genero" => "comedia",
          "titulo" => "Rick and Morty",
          "diretor" => "Dan Harmon e Justin Roiland",
          "atores" => "Justin Roiland, Chris Parnell, Spencer Grammer",
          "classificacao" => "16+",
          "temporadas" => 7,
          "episodios" => 71,
          "data_lancamento" => "02/12/2013",
          "sinopse" => "Rick, um cientista alcoólatra, e seu neto Morty viajam por universos paralelos em aventuras insanas e existenciais, cheias de humor ácido e ficção científica."
        ],
        [
          "imagem" => "comédia/southpark.webp",
          "genero" => "comedia",
          "titulo" => "South Park",
          "diretor" => "Trey Parker e Matt Stone",
          "atores" => "Trey Parker, Matt Stone, Isaac Hayes",
          "classificacao" => "18+",
          "temporadas" => 26,
          "episodios" => 327,
          "data_lancamento" => "13/08/1997",
          "sinopse" => "Uma animação satírica que segue quatro garotos em uma pequena cidade do Colorado, abordando temas polêmicos e atuais com humor ácido e irreverente."
        ],

        [
          "imagem" => "drama/13reasonswhy.webp",
          "genero" => "drama",
          "titulo" => "13 Reasons Why",
          "diretor" => "Brian Yorkey",
          "atores" => "Dylan Minnette, Katherine Langford, Alisha Boe",
          "classificacao" => "16+",
          "temporadas" => 4,
          "episodios" => 49,
          "data_lancamento" => "31/03/2017",
          "sinopse" => "Após o suicídio de Hannah Baker, seu colega Clay recebe fitas que revelam os motivos e as pessoas envolvidas em sua decisão. Uma série intensa sobre bullying e depressão."
        ],

        [
          "imagem" => "drama/breakingbad.webp",
          "genero" => "drama",
          "titulo" => "Breaking Bad",
          "diretor" => "Vince Gilligan",
          "atores" => "Bryan Cranston, Aaron Paul, Anna Gunn",
          "classificacao" => "18+",
          "temporadas" => 5,
          "episodios" => 62,
          "data_lancamento" => "20/01/2008",
          "sinopse" => "Um professor de química descobre que tem câncer e começa a fabricar metanfetamina com um ex-aluno para garantir o futuro da família, mergulhando no mundo do crime."
        ],

        [
          "imagem" => "drama/lacasadepapel.webp",
          "genero" => "drama",
          "titulo" => "La Casa de Papel",
          "diretor" => "Álex Pina",
          "atores" => "Álvaro Morte, Úrsula Corberó, Pedro Alonso",
          "classificacao" => "16+",
          "temporadas" => 5,
          "episodios" => 41,
          "data_lancamento" => "02/05/2017",
          "sinopse" => "Um grupo de assaltantes realiza o maior roubo da história da Espanha, invadindo a Casa da Moeda, sob o comando do misterioso 'Professor'. A série mistura ação e tensão emocional."
        ],

        [
          "imagem" => "drama/peakyblinders.webp",
          "genero" => "drama",
          "titulo" => "Peaky Blinders",
          "diretor" => "Steven Knight",
          "atores" => "Cillian Murphy, Paul Anderson, Helen McCrory",
          "classificacao" => "16+",
          "temporadas" => 6,
          "episodios" => 36,
          "data_lancamento" => "12/09/2013",
          "sinopse" => "Após a Primeira Guerra Mundial, a família Shelby constrói um império criminoso na Inglaterra. Thomas Shelby, o líder, enfrenta rivais, policiais e seus próprios demônios."
        ],

        [
          "imagem" => "drama/prettylittleliars.webp",
          "genero" => "drama",
          "titulo" => "Pretty Little Liars",
          "diretor" => "I. Marlene King",
          "atores" => "Troian Bellisario, Ashley Benson, Lucy Hale",
          "classificacao" => "14+",
          "temporadas" => 7,
          "episodios" => 160,
          "data_lancamento" => "08/06/2010",
          "sinopse" => "Cinco amigas são perseguidas por uma figura misteriosa chamada 'A', que ameaça expor segredos sombrios após o desaparecimento de Alison, a líder do grupo."
        ],

        [
          "imagem" => "drama/prisonbreak.webp",
          "genero" => "drama",
          "titulo" => "Prison Break",
          "diretor" => "Paul Scheuring",
          "atores" => "Wentworth Miller, Dominic Purcell, Sarah Wayne Callies",
          "classificacao" => "16+",
          "temporadas" => 5,
          "episodios" => 90,
          "data_lancamento" => "29/08/2005",
          "sinopse" => "Michael Scofield elabora um plano para tirar seu irmão da prisão, onde foi condenado injustamente à morte. Uma trama cheia de reviravoltas e fugas mirabolantes."
        ],

        [
          "imagem" => "drama/suits.webp",
          "genero" => "drama",
          "titulo" => "Suits",
          "diretor" => "Aaron Korsh",
          "atores" => "Gabriel Macht, Patrick J. Adams, Meghan Markle",
          "classificacao" => "14+",
          "temporadas" => 9,
          "episodios" => 134,
          "data_lancamento" => "23/06/2011",
          "sinopse" => "Harvey Specter, um renomado advogado, contrata o brilhante Mike Ross, que não possui diploma, para trabalhar em um prestigiado escritório, escondendo seu segredo."
        ],

        [
          "imagem" => "drama/thelastofus.webp",
          "genero" => "drama",
          "titulo" => "The Last of Us",
          "diretor" => "Craig Mazin e Neil Druckmann",
          "atores" => "Pedro Pascal, Bella Ramsey, Anna Torv",
          "classificacao" => "16+",
          "temporadas" => 1,
          "episodios" => 9,
          "data_lancamento" => "15/01/2023",
          "sinopse" => "Em um mundo pós-apocalíptico dominado por infectados, Joel é encarregado de escoltar Ellie, uma jovem imune, através dos EUA. Uma jornada de sobrevivência e afeto."
        ],

        [
          "imagem" => "drama/visavis.webp",
          "genero" => "drama",
          "titulo" => "Vis a Vis",
          "diretor" => "Álex Pina",
          "atores" => "Maggie Civantos, Najwa Nimri, Berta Vázquez",
          "classificacao" => "16+",
          "temporadas" => 4,
          "episodios" => 40,
          "data_lancamento" => "20/04/2015",
          "sinopse" => "Macarena é presa por fraude fiscal e precisa se adaptar à dura realidade de uma penitenciária feminina. A série mostra os desafios, alianças e rivalidades dentro da prisão."
        ],

        [
          "imagem" => "drama/you.webp",
          "genero" => "drama",
          "titulo" => "You",
          "diretor" => "Greg Berlanti e Sera Gamble",
          "atores" => "Penn Badgley, Victoria Pedretti, Elizabeth Lail",
          "classificacao" => "16+",
          "temporadas" => 4,
          "episodios" => 40,
          "data_lancamento" => "09/09/2018",
          "sinopse" => "Joe Goldberg é um gerente de livraria obcecado por mulheres com quem se envolve, usando métodos extremos — e muitas vezes mortais — para conquistar e manter suas paixões."
        ],

        [
          "imagem" => "drama/dexter.webp",
          "genero" => "drama",
          "titulo" => "Dexter",
          "diretor" => "James Manos Jr.",
          "atores" => "Michael C. Hall, Jennifer Carpenter, David Zayas",
          "classificacao" => "18+",
          "temporadas" => 8,
          "episodios" => 96,
          "data_lancamento" => "01/10/2006",
          "sinopse" => "Dexter Morgan é um analista forense do Departamento de Polícia de Miami que leva uma vida dupla como serial killer de criminosos que escapam da justiça."
        ],

        [
          "imagem" => "drama/greysanatomy.webp",
          "genero" => "drama",
          "titulo" => "Grey's Anatomy",
          "diretor" => "Shonda Rhimes",
          "atores" => "Ellen Pompeo, Chandra Wilson, James Pickens Jr.",
          "classificacao" => "14+",
          "temporadas" => 20,
          "episodios" => 430,
          "data_lancamento" => "27/03/2005",
          "sinopse" => "Um grupo de médicos vive os desafios da medicina e da vida pessoal no hospital Grey Sloan Memorial, misturando drama, romance e emergências médicas."
        ],

        [
          "imagem" => "drama/listanegra.webp",
          "genero" => "drama",
          "titulo" => "Lista Negra",
          "diretor" => "Jon Bokenkamp",
          "atores" => "James Spader, Megan Boone, Diego Klattenhoff",
          "classificacao" => "16+",
          "temporadas" => 10,
          "episodios" => 218,
          "data_lancamento" => "23/09/2013",
          "sinopse" => "O criminoso internacional Red Reddington se entrega ao FBI e oferece ajudar a capturar outros criminosos perigosos, sob a condição de trabalhar com a agente Elizabeth Keen."
        ],

        [
          "imagem" => "drama/lost.webp",
          "genero" => "drama",
          "titulo" => "Lost",
          "diretor" => "J.J. Abrams, Damon Lindelof, Jeffrey Lieber",
          "atores" => "Matthew Fox, Evangeline Lilly, Josh Holloway",
          "classificacao" => "14+",
          "temporadas" => 6,
          "episodios" => 121,
          "data_lancamento" => "22/09/2004",
          "sinopse" => "Sobreviventes de um acidente de avião lutam para sobreviver em uma ilha misteriosa, onde eventos sobrenaturais e segredos obscuros os colocam à prova constantemente."
        ],
        [
          "imagem" => "drama/round6.webp",
          "genero" => "drama",
          "titulo" => "Round 6",
          "diretor" => "Hwang Dong-hyuk",
          "atores" => "Lee Jung-jae, Park Hae-soo, HoYeon Jung",
          "classificacao" => "16+",
          "temporadas" => 1,
          "episodios" => 9,
          "data_lancamento" => "17/09/2021",
          "sinopse" => "Desesperados por dinheiro, centenas de pessoas participam de jogos infantis mortais em busca de um prêmio milionário. Uma crítica social intensa e violenta."
        ],

        [
          "imagem" => "fantasia/blackmirror.webp",
          "genero" => "fantasia",
          "titulo" => "Black Mirror",
          "diretor" => "Charlie Brooker",
          "atores" => "Bryce Dallas Howard, Jon Hamm, Daniel Kaluuya",
          "classificacao" => "16+",
          "temporadas" => 5,
          "episodios" => 22,
          "data_lancamento" => "04/12/2011",
          "sinopse" => "Uma antologia que explora os efeitos obscuros da tecnologia na sociedade moderna, apresentando histórias independentes que abordam dilemas éticos, sociais e psicológicos."
        ],

        [
          "imagem" => "fantasia/dark.webp",
          "genero" => "fantasia",
          "titulo" => "Dark",
          "diretor" => "Baran bo Odar e Jantje Friese",
          "atores" => "Louis Hofmann, Lisa Vicari, Maja Schöne",
          "classificacao" => "16+",
          "temporadas" => 3,
          "episodios" => 26,
          "data_lancamento" => "01/12/2017",
          "sinopse" => "Em uma pequena cidade alemã, o desaparecimento de crianças revela um mistério envolvendo viagens no tempo e relações familiares entrelaçadas em várias gerações."
        ],

        [
          "imagem" => "fantasia/diariosdeumvampiro.webp",
          "genero" => "fantasia",
          "titulo" => "Diários de um Vampiro",
          "diretor" => "Kevin Williamson e Julie Plec",
          "atores" => "Nina Dobrev, Paul Wesley, Ian Somerhalder",
          "classificacao" => "14+",
          "temporadas" => 8,
          "episodios" => 171,
          "data_lancamento" => "10/09/2009",
          "sinopse" => "Elena se vê envolvida em um triângulo amoroso com dois irmãos vampiros, enquanto fenômenos sobrenaturais e conflitos ancestrais ameaçam a paz da cidade de Mystic Falls."
        ],

        [
          "imagem" => "fantasia/lucifer.webp",
          "genero" => "fantasia",
          "titulo" => "Lucifer",
          "diretor" => "Tom Kapinos",
          "atores" => "Tom Ellis, Lauren German, Kevin Alejandro",
          "classificacao" => "16+",
          "temporadas" => 6,
          "episodios" => 93,
          "data_lancamento" => "25/01/2016",
          "sinopse" => "Cansado do inferno, Lúcifer Morningstar decide tirar férias em Los Angeles, onde passa a ajudar a polícia a resolver crimes e enfrenta dilemas sobre sua verdadeira natureza."
        ],

        [
          "imagem" => "fantasia/shadowhunters.webp",
          "genero" => "fantasia",
          "titulo" => "Shadowhunters",
          "diretor" => "Ed Decter",
          "atores" => "Katherine McNamara, Dominic Sherwood, Alberto Rosende",
          "classificacao" => "14+",
          "temporadas" => 3,
          "episodios" => 55,
          "data_lancamento" => "12/01/2016",
          "sinopse" => "Clary Fray descobre que pertence a uma linhagem de caçadores de sombras, guerreiros responsáveis por proteger o mundo de demônios e outras criaturas sobrenaturais."
        ],

        [
          "imagem" => "fantasia/supernatural.webp",
          "genero" => "fantasia",
          "titulo" => "Supernatural",
          "diretor" => "Eric Kripke",
          "atores" => "Jared Padalecki, Jensen Ackles, Misha Collins",
          "classificacao" => "16+",
          "temporadas" => 15,
          "episodios" => 327,
          "data_lancamento" => "13/09/2005",
          "sinopse" => "Os irmãos Winchester viajam pelos EUA enfrentando monstros, fantasmas e demônios enquanto tentam desvendar os segredos da morte de sua mãe e da origem de suas caçadas."
        ],

        [
          "imagem" => "fantasia/teenwolf.webp",
          "genero" => "fantasia",
          "titulo" => "Teen Wolf",
          "diretor" => "Jeff Davis",
          "atores" => "Tyler Posey, Dylan O'Brien, Holland Roden",
          "classificacao" => "14+",
          "temporadas" => 6,
          "episodios" => 100,
          "data_lancamento" => "05/06/2011",
          "sinopse" => "Após ser mordido por um lobisomem, Scott McCall precisa lidar com seus novos poderes e os perigos do mundo sobrenatural enquanto tenta manter sua vida normal."
        ],

        [
          "imagem" => "fantasia/theboys.webp",
          "genero" => "fantasia",
          "titulo" => "The Boys",
          "diretor" => "Eric Kripke",
          "atores" => "Karl Urban, Jack Quaid, Antony Starr",
          "classificacao" => "18+",
          "temporadas" => 3,
          "episodios" => 24,
          "data_lancamento" => "26/07/2019",
          "sinopse" => "Em um mundo onde super-heróis são celebridades corruptas, um grupo de justiceiros decide expor a verdade e combater os abusos desses 'heróis' com métodos brutais."
        ],

        [
          "imagem" => "fantasia/thewalkingdead.webp",
          "genero" => "fantasia",
          "titulo" => "The Walking Dead",
          "diretor" => "Frank Darabont",
          "atores" => "Andrew Lincoln, Norman Reedus, Melissa McBride",
          "classificacao" => "18+",
          "temporadas" => 11,
          "episodios" => 177,
          "data_lancamento" => "31/10/2010",
          "sinopse" => "Após um apocalipse zumbi, um grupo de sobreviventes luta por sua vida enfrentando não só os mortos-vivos, mas também os perigos representados por outros humanos."
        ],

        [
          "imagem" => "fantasia/thewitcher.webp",
          "genero" => "fantasia",
          "titulo" => "The Witcher",
          "diretor" => "Lauren Schmidt Hissrich",
          "atores" => "Henry Cavill, Anya Chalotra, Freya Allan",
          "classificacao" => "16+",
          "temporadas" => 3,
          "episodios" => 24,
          "data_lancamento" => "20/12/2019",
          "sinopse" => "Geralt de Rívia é um caçador de monstros mutante que enfrenta criaturas perigosas e intrigas políticas em um continente dividido, onde o destino o conecta à princesa Ciri."
        ],

        [
          "imagem" => "fantasia/eraumavez.webp",
          "genero" => "fantasia",
          "titulo" => "Era Uma Vez",
          "diretor" => "Edward Kitsis e Adam Horowitz",
          "atores" => "Ginnifer Goodwin, Jennifer Morrison, Lana Parrilla",
          "classificacao" => "12+",
          "temporadas" => 7,
          "episodios" => 155,
          "data_lancamento" => "23/10/2011",
          "sinopse" => "Personagens de contos de fadas vivem em uma cidade do mundo real chamada Storybrooke, onde não se lembram de suas verdadeiras identidades devido a uma maldição."
        ],

        [
          "imagem" => "fantasia/houseofthedragon.webp",
          "genero" => "fantasia",
          "titulo" => "House of the Dragon",
          "diretor" => "Ryan Condal e Miguel Sapochnik",
          "atores" => "Matt Smith, Emma D'Arcy, Paddy Considine",
          "classificacao" => "18+",
          "temporadas" => 1,
          "episodios" => 10,
          "data_lancamento" => "21/08/2022",
          "sinopse" => "Prequela de 'Game of Thrones', a série mostra a guerra civil dentro da Casa Targaryen que levou à queda da dinastia e moldou o destino de Westeros."
        ],

        [
          "imagem" => "fantasia/lovedeathrobots.webp",
          "genero" => "fantasia",
          "titulo" => "Love, Death & Robots",
          "diretor" => "Tim Miller",
          "atores" => "Diversos",
          "classificacao" => "18+",
          "temporadas" => 3,
          "episodios" => 35,
          "data_lancamento" => "15/03/2019",
          "sinopse" => "Uma coleção de curtas de animação que misturam ficção científica, fantasia, terror e comédia, cada episódio com uma história e estilo artístico únicos."
        ],

        [
          "imagem" => "fantasia/theumbrellaacademy.webp",
          "genero" => "fantasia",
          "titulo" => "The Umbrella Academy",
          "diretor" => "Steve Blackman",
          "atores" => "Elliot Page, Tom Hopper, David Castañeda",
          "classificacao" => "16+",
          "temporadas" => 3,
          "episodios" => 30,
          "data_lancamento" => "15/02/2019",
          "sinopse" => "Irmãos adotivos com poderes especiais se reúnem após a morte do pai adotivo e tentam impedir o apocalipse enquanto enfrentam traumas e conflitos familiares."
        ],

        [
          "imagem" => "fantasia/strangerthings.webp",
          "genero" => "fantasia",
          "titulo" => "Stranger Things",
          "diretor" => "The Duffer Brothers",
          "atores" => "Millie Bobby Brown, Finn Wolfhard, Winona Ryder",
          "classificacao" => "14+",
          "temporadas" => 4,
          "episodios" => 34,
          "data_lancamento" => "15/07/2016",
          "sinopse" => "Um grupo de crianças investiga o desaparecimento de um amigo e descobre uma dimensão paralela cheia de criaturas assustadoras, experimentos secretos e poderes psíquicos."
        ],

        [
          "imagem" => "novela/avenidabrasil.png",
          "genero" => "novela",
          "titulo" => "Avenida Brasil",
          "diretor" => "Ricardo Waddington",
          "atores" => "Débora Falabella, Murilo Benício, Adriana Esteves",
          "classificacao" => "12+",
          "temporadas" => 1,
          "episodios" => 179,
          "data_lancamento" => "26/03/2012",
          "sinopse" => "Nina busca vingança contra sua madrasta Carminha, que destruiu sua infância. Uma trama cheia de reviravoltas, rivalidades e confrontos dramáticos no subúrbio carioca."
        ],

        [
          "imagem" => "novela/cheiasdecharme.png",
          "genero" => "novela",
          "titulo" => "Cheias de Charme",
          "diretor" => "Ricardo Waddington",
          "atores" => "Leandra Leal, Taís Araújo, Isabelle Drummond",
          "classificacao" => "10+",
          "temporadas" => 1,
          "episodios" => 143,
          "data_lancamento" => "16/04/2012",
          "sinopse" => "Três empregadas domésticas se tornam fenômeno musical como as 'Empreguetes' após viralizar um vídeo na internet, enfrentando os desafios da fama e do preconceito."
        ],

        [
          "imagem" => "novela/chiquititas.png",
          "genero" => "novela",
          "titulo" => "Chiquititas",
          "diretor" => "Reynaldo Boury",
          "atores" => "Manuela do Monte, Giovanna Grigio, Guilherme Boury",
          "classificacao" => "L",
          "temporadas" => 1,
          "episodios" => 545,
          "data_lancamento" => "15/07/2013",
          "sinopse" => "Crianças órfãs vivem em um orfanato, onde criam laços de amizade e enfrentam dilemas pessoais e sociais com esperança, música e imaginação."
        ],
        [
          "imagem" => "novela/cumplicesdeumresgate.png",
          "genero" => "novela",
          "titulo" => "Cúmplices de um Resgate",
          "diretor" => "Reynaldo Boury",
          "atores" => "Larissa Manoela, João Guilherme, Juliana Baroni",
          "classificacao" => "L",
          "temporadas" => 1,
          "episodios" => 357,
          "data_lancamento" => "03/08/2015",
          "sinopse" => "Duas irmãs gêmeas separadas ao nascer trocam de lugar para salvar a banda de uma delas e acabam enfrentando grandes desafios e aventuras."
        ],

        [
          "imagem" => "novela/etamundobom.png",
          "genero" => "novela",
          "titulo" => "Êta Mundo Bom!",
          "diretor" => "Jorge Fernando",
          "atores" => "Sérgio Guizé, Débora Nascimento, Flávia Alessandra",
          "classificacao" => "10+",
          "temporadas" => 1,
          "episodios" => 190,
          "data_lancamento" => "18/01/2016",
          "sinopse" => "Candinho, um caipira bondoso, parte em busca de sua mãe biológica em meio a intrigas familiares e acontecimentos cômicos e emocionantes no Brasil da década de 1940."
        ],

        [
          "imagem" => "novela/iloveparaisopolis.png",
          "genero" => "novela",
          "titulo" => "I Love Paraisópolis",
          "diretor" => "Carlos Araújo",
          "atores" => "Bruna Marquezine, Tatá Werneck, Caio Castro",
          "classificacao" => "10+",
          "temporadas" => 1,
          "episodios" => 155,
          "data_lancamento" => "11/05/2015",
          "sinopse" => "Moradoras da comunidade de Paraisópolis enfrentam o preconceito e desafios da vida enquanto vivem romances, rivalidades e sonhos de superação."
        ],

        [
          "imagem" => "novela/lacosdefamilia.png",
          "genero" => "novela",
          "titulo" => "Laços de Família",
          "diretor" => "Ricardo Waddington",
          "atores" => "Vera Fischer, Reynaldo Gianecchini, Carolina Dieckmann",
          "classificacao" => "12+",
          "temporadas" => 1,
          "episodios" => 209,
          "data_lancamento" => "05/06/2000",
          "sinopse" => "Helena se vê dividida entre o amor e os sacrifícios pela filha Camila, em uma história sobre relações familiares, doenças e decisões difíceis."
        ],

        [
          "imagem" => "novela/malhacao.png",
          "genero" => "novela",
          "titulo" => "Malhação",
          "diretor" => "Diversos",
          "atores" => "Vários elencos ao longo dos anos",
          "classificacao" => "12+",
          "temporadas" => 27,
          "episodios" => 6350,
          "data_lancamento" => "24/04/1995",
          "sinopse" => "Série teen brasileira que acompanha a vida de jovens em fase escolar, retratando temas como amizade, amores, conflitos familiares e descobertas da juventude."
        ],

        [
          "imagem" => "novela/ocravoearosa.png",
          "genero" => "novela",
          "titulo" => "O Cravo e a Rosa",
          "diretor" => "Walter Avancini",
          "atores" => "Adriana Esteves, Eduardo Moscovis, Drica Moraes",
          "classificacao" => "10+",
          "temporadas" => 1,
          "episodios" => 221,
          "data_lancamento" => "26/06/2000",
          "sinopse" => "Inspirada em 'A Megera Domada', a novela retrata a batalha entre a feminista rebelde Catarina e o caipira Petruchio em uma trama romântica e cômica."
        ],

        [
          "imagem" => "novela/rebelde.png",
          "genero" => "novela",
          "titulo" => "Rebelde",
          "diretor" => "Pedro Damián",
          "atores" => "Anahí, Dulce María, Alfonso Herrera",
          "classificacao" => "12+",
          "temporadas" => 3,
          "episodios" => 440,
          "data_lancamento" => "04/10/2004",
          "sinopse" => "Seis adolescentes de um colégio de elite formam uma banda e enfrentam conflitos familiares, amores proibidos e disputas sociais no ambiente escolar."
        ],

        [
          "imagem" => "novela/reidogado.png",
          "genero" => "novela",
          "titulo" => "O Rei do Gado",
          "diretor" => "Luiz Fernando Carvalho",
          "atores" => "Antonio Fagundes, Patrícia Pillar, Raul Cortez",
          "classificacao" => "12+",
          "temporadas" => 1,
          "episodios" => 209,
          "data_lancamento" => "17/06/1996",
          "sinopse" => "A saga de duas famílias rivais em meio à luta por terras, conflitos entre latifundiários e trabalhadores, e uma intensa história de amor entre Enrico e Luana."
        ],

        [
          "imagem" => "novela/romeuejulieta.png",
          "genero" => "novela",
          "titulo" => "Romeu e Julieta",
          "diretor" => "Carlos Magalhães",
          "atores" => "Vittória Seixas, Miguel Ângelo, Bianca Rinaldi",
          "classificacao" => "L",
          "temporadas" => 1,
          "episodios" => 100,
          "data_lancamento" => "21/05/2018",
          "sinopse" => "Versão moderna da clássica tragédia de Shakespeare, retrata o amor proibido entre dois jovens de famílias rivais em meio a conflitos e diferenças sociais."
        ],

        [
          "imagem" => "novela/sinhamoca.png",
          "genero" => "novela",
          "titulo" => "Sinhá Moça",
          "diretor" => "Jayme Monjardim",
          "atores" => "Débora Falabella, Danton Mello, Osmar Prado",
          "classificacao" => "10+",
          "temporadas" => 1,
          "episodios" => 115,
          "data_lancamento" => "13/03/2006",
          "sinopse" => "Durante a escravidão no Brasil, a filha de um fazendeiro escravocrata luta contra os ideais do pai, apaixonando-se por um abolicionista e enfrentando grandes desafios."
        ],

        [
          "imagem" => "novela/souluna.png",
          "genero" => "novela",
          "titulo" => "Sou Luna",
          "diretor" => "Jorge Edelstein",
          "atores" => "Karol Sevilla, Ruggero Pasquarelli, Valentina Zenere",
          "classificacao" => "L",
          "temporadas" => 3,
          "episodios" => 220,
          "data_lancamento" => "14/03/2016",
          "sinopse" => "Luna é uma adolescente talentosa que adora patinar. Após se mudar para Buenos Aires, descobre segredos sobre seu passado e enfrenta as dificuldades da adolescência."
        ],

        [
          "imagem" => "novela/violetta.png",
          "genero" => "novela",
          "titulo" => "Violetta",
          "diretor" => "Jorge Nisco e Martín Saban",
          "atores" => "Martina Stoessel, Jorge Blanco, Diego Domínguez",
          "classificacao" => "L",
          "temporadas" => 3,
          "episodios" => 240,
          "data_lancamento" => "14/05/2012",
          "sinopse" => "Violetta é uma jovem com grande talento musical que retorna à Argentina após viver na Europa, descobrindo segredos de família e iniciando sua jornada artística."
        ]
      ];


      foreach ($dadosseries as $index => $serie): ?>
        <?php if ($generoSelecionado === 'todos' || strpos(strtolower($serie['genero']), $generoSelecionado) === 0): ?>

          <!-- Card com gatilho do modal -->
          <div class="card"
            style="background-image: url('../img/series/<?= $serie['imagem'] ?>');"
            data-bs-toggle="modal"
            data-bs-target="#modal-serie-<?= $index ?>">
          </div>

          <!-- Modal -->
          <div class="modal fade" id="modal-serie-<?= $index ?>" tabindex="-1" aria-labelledby="modalLabel<?= $index ?>" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="modalLabel<?= $index ?>"><?= $serie['titulo'] ?></h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                </div>
                <div class="modal-body">
                  <div class="row g-4 align-items-center">
                    <!-- Imagem -->
                    <div class="col-md-5">
                      <img src="../img/series/<?= $serie['imagem'] ?>" alt="<?= $serie['titulo'] ?>" class="img-fluid rounded shadow">
                    </div>
                    <!-- Informações -->
                    <div class="col-md-7">
                      <p><strong>Diretor:</strong> <?= $serie['diretor'] ?></p>
                      <p><strong>Atores:</strong> <?= $serie['atores'] ?></p>
                      <p><strong>Classificação:</strong> <?= $serie['classificacao'] ?></p>
                      <p><strong>Lançamento:</strong> <?= $serie['data_lancamento'] ?></p>
                      <p><strong>Temporadas:</strong> <?= $serie['temporadas'] ?> </p>
                      <p><strong>Episódios:</strong> <?= $serie['episodios'] ?></p>
                      <p><strong>Sinopse:</strong> <?= $serie['sinopse'] ?></p>
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