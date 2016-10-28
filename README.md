blog
====

Langages, Outils, frameworks utilisaient:
==
- LINUX	(UBUNTU)
- BOOTSTRAP 3
- NETBEANS 8
- PHP 5
- HTML5
- CSS3
- JQUERY 1.12
- MYSQL
- SYMFONY 3
- GITHUB : <https://github.com/maddysonweppe/blog>
- TRELLO : <https://trello.com/b/UTrsRmwy/blog>
- FRAMAPAD : <https://mypads.framapad.org/mypads/?/mypads/group/certiblog-ozd3x7sz/pad/view/carnet-de-bord-god6x7n5>

Etape à suivre pour installer le projet "BLOG" après l'avoir téléchargé:
==
1. Si c'est nécessaire, mettre les droits sur le dossier
2. Mettre à jour les dépendances 
3. Paramétrer le fichier parameters.yml 
4. Lancer la création de la base de données 
5. Mettre les droits au dossier nouvellement créés
6. Il faut créer / pousser les entities dans votre base de données via le terminal avec la commande:  
php bin/console doctrine:schema:create
7. Pour ajouter un compte d'ADMIN utilisez la route (URI) : /869256/addAdmin/
8. Authentification ADMIN:  
Email : admin@admin.com  
Mot de passe : admin  
9. Projet FONCTIONNEL, vous pouvez commencer à naviguer!  
ATTENTION, vos entities dans la base de données sont vierges, cela impacte forcément la vue.
