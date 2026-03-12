# Rigobert Theme

Thème WordPress vierge avec Tailwind CSS.

## Installation

1. Placez ce dossier dans `/wp-content/themes/`
2. Activez le thème dans l'administration WordPress
3. Installez les dépendances npm :

```bash
cd /wp-content/themes/rigobert-theme
npm install
```

## Développement

Pour compiler le CSS en mode développement (avec watch) :

```bash
npm run build
```

Pour la production (CSS minifié) :

```bash
npm run build:prod
```

## Structure

- `src/input.css` - Fichier CSS source avec directives Tailwind
- `dist/output.css` - Fichier CSS compilé (généré automatiquement)
- `js/main.js` - Scripts JavaScript personnalisés
- `tailwind.config.js` - Configuration Tailwind CSS
- `functions.php` - Fonctions du thème WordPress
- `index.php` - Template principal
- `single.php` - Template pour les articles individuels
- `header.php` - En-tête du site
- `footer.php` - Pied de page du site

## Personnalisation

Modifiez les couleurs et autres styles dans `tailwind.config.js` et `src/input.css`.

## Features

- Design responsive avec Tailwind CSS
- Support des menus WordPress
- Support des images à la une
- Optimisé pour la performance
- Code moderne et maintenable
