<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style/style.css?v=6">
    <link rel="stylesheet" href="style/header.css?v=3">
    <link rel="stylesheet" href="style/main.css?v=3">
    <link rel="stylesheet" href="style/footer.css?v=6">
    <link rel="stylesheet" href="style/formulaire.css?v=4">

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&display=swap" />
    <link
        href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
        rel="stylesheet" />

    <title>Prendre rendez-vous</title>
</head>

<body>

    
  <?php include 'include/header.php'; ?>
    <main>
        <form action="#" method="GET" class="formulaire-tatouage container">

            <label for="prenom">Prénom :</label><br>
            <input type="text" id="prenom" required><br><br>

            <label for="nom">Nom (Facultatif):</label><br>
            <input type="text" id="nom"><br><br>

            <label for="zone">Emplacement tatouage :</label><br>
            <select id="zone" required>
                <option value="" disabled selected>Choisir une zone</option>
                <option value="?">Je ne sais pas</option>
                <option value="bras">Bras</option>
                <option value="jambes">Jambes</option>
                <option value="dos">Dos</option>
                <option value="poignet">Poignet</option>
                <option value="épaule">Épaule</option>
                <option value="cuisse">Cuisse</option>
                <option value="autre">Autre</option>
            </select><br><br>

            <label for="taille">Taille du tatouage :</label><br>
            <select id="taille" required>
                <option value="" disabled selected>Choisir une taille</option>
                <option value="ne-sais-pas">Je ne sais pas</option>
                <option value="moins de 5">Moins de 5cm</option>
                <option value="5">5 cm</option>
                <option value="10">10 cm</option>
                <option value="15">15 cm</option>
                <option value="20">20 cm</option>
                <option value="sur-mesure">Sur mesure (voir avec le tatoueur)</option>
                
            </select><br><br>

            <label for="description">Description du projet :</label><br>
            <textarea id="description"></textarea><br><br>

            <p>Êtes-vous majeur ?</p>
            <input type="radio" id="majeur-oui" value="oui" name="majeur" required>
            <label for="majeur-oui">Oui</label><br>
            <input type="radio" id="majeur-non" value="non" name="majeur" required>
            <label for="majeur-non">Non</label><br><br>

            <p>Est-ce votre premier tatouage ?</p>
            <input type="radio" id="tattoo-oui" value="oui" name="tattoo" required>
            <label for="tattoo-oui">Oui</label><br>
            <input type="radio" id="tattoo-non" value="non" name="tattoo" required>
            <label for="tattoo-non">Non</label><br><br>

            <button type="submit">Préparer le message WhatsApp</button>
        </form>

        <a class="text-ps">PS : Une fois que vous avez appuyé sur le bouton,<br>
  le message est automatiquement copié. <br>
  Si jamais vous rencontrez le moindre bug, n'hésitez pas à me le signaler via whatsapp ou mes réseaux sociaux. </a>
    </main>

  <?php include 'include/footer.php'; ?>


    <script src="js/formulaire.js"></script>
    <script src="js/menu.js"></script>
</body>

</html>