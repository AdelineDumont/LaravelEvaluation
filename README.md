Pour récupérer mon projet git, dans le powershell écrire :

1. Git clone + nom de dossier
2. Pour récupérer le dossier vendor, faire composer install (à l'intérieur du dossier )
3. écrire la commande cp .env.example .env pour créer un nouveau .env
4. écrire la commande php artisan key:generate pour récupéré la clé
5. php artisan serve pour ouvrir le serveur local
