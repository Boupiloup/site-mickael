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

  const message = 
`Bonjour Mika je me présente je m'appelle ${prenom} ${nom}.
Et je souhaite prendre rendez-vous pour un tatouage.

Je souhaiterais me faire tatouer sur la zone ${zone} d'une taille de ${taille} cm.

Voici une description de ce que je souhaite :
${description}.

Je suis majeur ? : ${majeur}
Est-ce mon premier tatouage ? : ${firstTatoo}

Merci de ta réponse, 
Cordialement ${prenom} ${nom}.`;

  const lienWhatsApp = `https://wa.me/33631101731?text=${encodeURIComponent(message)}`;

  // ✅ Copier dans le presse-papier, puis ouvrir WhatsApp
  navigator.clipboard.writeText(message)
    .then(() => {
      alert("✅ Ton message a été copié. Tu peux le coller dans WhatsApp si besoin. si jamais le message ne c'est pas copié tous seul.");
      window.open(lienWhatsApp, '_blank');
    })
    .catch((err) => {
      console.error("❌ Erreur de copie dans le presse-papier :", err);
      window.open(lienWhatsApp, '_blank'); // On ouvre quand même
    });
});
