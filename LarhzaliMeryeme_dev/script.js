const buyButtons = document.querySelectorAll('.buy-btn');

buyButtons.forEach(button => {
    button.addEventListener('click', () => {
        const productName = button.previousElementSibling.textContent;
        const price = button.previousElementSibling.previousElementSibling.textContent;
        alert(`Vous avez ajouté "${productName.trim()}" à votre panier pour ${price.trim()}`);
    });
});

// Sélection des icônes
const socialIcons = document.querySelectorAll('.social-links a i');

// Ajout d'un gestionnaire d'événement au survol de la souris pour chaque icône
socialIcons.forEach(icon => {
    icon.addEventListener('mouseenter', () => {
        icon.style.transform = 'scale(1.4)'; // Agrandir l'icône
        icon.style.transition = 'transform 0.3s ease'; // Animation de transition
    });

    // Réinitialisation de l'icône lorsque la souris quitte l'icône
    icon.addEventListener('mouseleave', () => {
        icon.style.transform = 'scale(1)'; // Rétablir la taille initiale
    });
});
