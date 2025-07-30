const formulaire = document.querySelector('.formulaire-tatouage');
formulaire.addEventListener('submit', function(event) {
  event.preventDefault();
  
  const prenom = document.getElementById('prenom').value;
  const nom = document.getElementById('nom').value;
  const zone = document.getElementById('zone').value;
  const taille = document.getElementById('taille').value;
  const description = document.getElementById('description').value;
  const majeur = document.querySelector('input[name=majeur]:checked').value;
  const firstTatoo = document.querySelector('input[name=tattoo]:checked').value;
  
  const message = `Bonjour Mika, 
je me présente je m'appelle ${prenom} ${nom}.
Et je souhaite prendre rendez-vous pour un tatouage.

Je souhaiterais me faire tatouer sur la zone ${zone} d'une taille de ${taille} cm.

Voici une description de ce que je souhaite :
${description}.

Je suis majeur ? : ${majeur}

Est-ce mon premier tatouage ? : ${firstTatoo}

Merci de ta réponse,
Cordialement ${prenom} ${nom}.`;

  const lienWhatsApp = `https://wa.me/33631101731?text=${encodeURIComponent(message)}`;
  
  // Fonction pour ouvrir WhatsApp de manière compatible mobile
  function ouvrirWhatsApp() {
    if (/Android|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
      // Sur mobile, utiliser location.href pour éviter les blocages
      window.location.href = lienWhatsApp;
    } else {
      // Sur desktop, ouvrir dans un nouvel onglet
      window.open(lienWhatsApp, '_blank');
    }
  }
  
  // Tentative de copie dans le presse-papier
  if (navigator.clipboard && window.isSecureContext) {
    navigator.clipboard.writeText(message)
      .then(() => {
        ouvrirWhatsApp();
      })
      .catch((err) => {
        console.error("❌ Erreur de copie :", err);
        ouvrirWhatsApp();
      });
  } else {
    // Fallback si clipboard API non disponible
    ouvrirWhatsApp();
  }
});