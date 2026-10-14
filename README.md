Installation et configuration

Suivez les instructions ci-dessous pour installer et exécuter le projet sur votre machine locale.

Étape 2 : Accéder au répertoire du projet

Accédez au répertoire du projet :

cd laravel-chat-app

Étape 3 : Installer les dépendances

Installez les dépendances PHP et JavaScript nécessaires :

composer install
npm install

Étape 4 : Créer un fichier d'environnement

Copiez le fichier .env.example vers un nouveau fichier nommé .env :

cp .env.example .env


Configurez le fichier .env avec les paramètres de votre base de données et les autres options nécessaires.

Étape 5 : Générer une clé d'application

Générez une nouvelle clé d'application :

php artisan key:generate

Étape 6 : Exécuter les migrations et remplir la base de données

Exécutez les migrations pour créer la structure de la base de données :

php artisan migrate


Remplissez la base de données avec les données par défaut, si elles sont disponibles :

php artisan db:seed

Étape 7 : Démarrer le serveur WebSocket

Pour activer la messagerie en temps réel, vous devez démarrer le serveur Reverb :

php artisan reverb:start

Étape 8 : Démarrer l'application

Démarrez l'application Laravel :

php artisan serve


L'application sera accessible à l'adresse suivante : http://127.0.0.1:8000.