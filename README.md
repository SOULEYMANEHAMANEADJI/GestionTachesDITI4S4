# Gestion des Tâches - Laravel

Une application web de gestion des tâches pour un département, où les tâches sont attribuées aux employés en fonction de leurs compétences et du niveau de complexité.

## Fonctionnalités

- Authentification des utilisateurs.
- CRUD pour les employés, tâches, et compétences.
- Navigation adaptée aux utilisateurs authentifiés.

## Installation

1. **Cloner le dépôt :**
   ```bash
   git clone https://github.com/SOULEYMANEHAMANEADJI/GestionTachesDITI4S4.git
   cd gestion-taches-laravel
   ```

2. **Installer les dépendances :**
   ```bash
   composer install
   npm install
   npm run dev
   ```

3. **Configurer l'environnement :**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Exécuter les migrations :**
   ```bash
   php artisan migrate
   ```

5. **Lancer le serveur :**
   ```bash
   php artisan serve
   ```

## Utilisation

- **Authentification :** Accès requis pour les opérations CRUD.
- **CRUD :** Gérer les employés, tâches, et compétences via les routes `/employes`, `/taches`, et `/competences`.

## Contribution

Les contributions sont les bienvenues via les issues du dépôt.
--
# MineHAS
