# Altarys Capital – Solutions Structurées Crypto

Ce projet est le site vitrine de **Altarys Capital**, une plateforme technologique dédiée à la conception de produits d'investissement structurés sur crypto-actifs.

## Contenu du site

Le site comprend plusieurs pages HTML responsives développées sans framework JS (Vanilla HTML/CSS/JS) :

- **index.html** : page d'accueil avec présentation de l'infrastructure Altarys et des appels à l'action.
- **solutions.html** : détails des stratégies d'investissement proposées, avec ouverture de sections explicatives par bouton (Autocall, Hybride de taux, Sur-mesure).
- **equipe.html** : page "À propos" avec genèse du projet et présentation des fondateurs.
- **actualites.html** : veille économique et sectorielle en lien avec les crypto-actifs.
- **contact.html** : formulaire de contact fonctionnel en front-end (à connecter côté serveur).

## Technologies utilisées

- **HTML5 / CSS3** (100% responsive, mobile-first avec media queries)
- **Google Fonts** : police Poppins
- **JavaScript Vanilla** :
  - Gestion du menu burger mobile
  - Dépliement de sections stratégiques
  - Scroll animé vers le haut de la page

## Fonctionnalités clés

- Navigation adaptative ordinateur / mobile
- Animations douces pour les interactions utilisateur
- Illustrations et scénarios intégrés dans les sections "exemples de stratégie"
- Système modulaire pour ajouter de nouvelles stratégies facilement

## Instructions

1. Cloner le repo ou copier les fichiers HTML dans votre hébergeur.
2. Assurez-vous que les images (`logo.png`, `Guillaume.jpg`, `Antoine.jpg`, `scenarioX.jpeg`) sont présentes dans le dossier racine.
3. Si vous souhaitez activer un back-end pour les messages du formulaire de contact, reliez `contact.html` à un service type Formspree ou un script PHP.

## À venir

- Ajout de la documentation produit PDF générée automatiquement
- Connexion avec une API de pricing pour les simulations
- Mode sombre clair côté client (switch CSS)

---

© 2025 Altarys Capital – Tous droits réservés.
