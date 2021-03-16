<h2>Application pour gérer les attributions et accès aux postes informatiques. <strong>(school exercise)</strong></h2>

<h3>Cloner le dépot depuis github:</h3>

<code>
    git clone https://github.com/g0tie/ComputerControlApp.git
</code>

<h3>se rendre dans le dossier</h3>
<code>    cd ComputerControllApp </code>

<h3>installer les dépendances</h3>

<code>composer install && npm install && npm run dev</code>

<h3>configurer les accès à la base de données en copiant le fichier et en renommant ".env.example" en --> ".env"</h3>

Changer les lignes:

<code>DB_CONNECTION=mysql</code>
<br>
<code>DB_DATABASE=<nom_de_la_bdd></code>
    <br>
<code>DB_USERNAME=<nom_utilisateur></code>
    <br>
<code>DB_PASSWORD=<mot_de_passe_utilisateur></code>

<h3>migrer la base de donnée et créer l'administrateur et les 10 postes informatiques par défaut</h3>

<code>php artisan migrate --seed</code>

<h3>lancer le serveur</h3>

<code>php artisan serve</code>

<h3>se connecter au back office (par défaut)</h3>

<code>url: localhost:8000</code>
<code>login: admin@admin.fr</code>
<code>mdp: admin</code>
