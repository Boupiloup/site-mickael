<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Page d'acceuil Tatouage Mika</title>

  <!-- Feuille de style CSS -->
  <link rel="stylesheet" href="style/style.css?v=3">
  <link rel="stylesheet" href="style/header.css?v=2">
  <link rel="stylesheet" href="style/main.css?v=2">
  <link rel="stylesheet" href="style/caroussel.css?v=4">
  <link rel="stylesheet" href="style/footer.css?v=5">


  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&display=swap">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
    rel="stylesheet">
</head>

<body>

  <?php include 'include/header.php'; ?>
  <!-- Inclusion du header -->

  <main>
    <h1 class="titre-principal">Tatouage Mika</h1>
    <p class="texte-principal">Bienvenue chez Tatouage Mika, un espace entièrement dédié à l'art du tatouage.
      <br>
      Ici, chaque création est unique et pensée pour vous, selon votre histoire, vos envies et votre style.
      <br>
      Mika vous propose des tatouages sur mesure, réalisés dans un cadre professionnel, respectant des protocoles
      d'hygiène rigoureux.
      <br>
      Passionné par les traits nets, les ombrages maîtrisés et les compositions symboliques, Mika s'inscrit dans un
      style post-néo old school mêlant esthétique, finesse et caractère.
      <br>
      Que vous souhaitiez un projet discret, une pièce artistique ou un symbole fort, vous êtes au bon endroit.
    </p>

    <section class="carousel-wrapper">

      <!-- Flèche gauche -->
      <button class="carousel-btn left">←</button>

      <div class="carousel-track-container">
        <div class="carousel-track">
          <div class="carousel-item"><img src="logo/carroussel/photo/1.jpeg" alt="Tatouage 1"></div>
          <div class="carousel-item"><img src="logo/carroussel/photo/2.jpeg" alt="Tatouage 2"></div>
          <div class="carousel-item"><img src="logo/carroussel/photo/3.jpeg" alt="Tatouage 3"></div>
          <div class="carousel-item"><img src="logo/carroussel/photo/5.jpeg" alt="Tatouage 4"></div>
          <div class="carousel-item"><img src="logo/carroussel/photo/13.jpeg" alt="Tatouage 5"></div>
          <div class="carousel-item"><img src="logo/carroussel/photo/12.jpeg" alt="Tatouage 6"></div>
          <div class="carousel-item"><img src="logo/carroussel/photo/7.jpeg" alt="Tatouage 7"></div>
          <div class="carousel-item"><img src="logo/carroussel/photo/8.jpeg" alt="Tatouage 8"></div>
          <div class="carousel-item"><img src="logo/carroussel/photo/6.jpeg" alt="Tatouage 9"></div>
        </div>
      </div>

      <!-- Flèche droite -->
      <button class="carousel-btn right">→</button>
    </section>




  </main>
  <?php include 'include/footer.php'; ?>
  <!-- Inclusion du footer -->

  <script src="js/menu.js"></script>
  <script src="js/carrousel.js"></script>
  <!-- Inclusion des scripts pour le menu burger et le carrousel -->
</body>

</html>