# Architecture-MVC en PHP

Ce projet à pour but de concevoir un projet complet et complexe avec une architecture MVC (Model View Controller). Le modèle MVC dépend d'un Routeur qui appelle une fonction d'un Controller. Qui lui même distribue une Vue. L'utilisation des Modèles sert à communiquer avec la base de donnée, requêtes sélectives et préparées et autres interactions avec la base de donnée. Elle s'utilise et s'appelle dans le Controller.

Le dossier `Process` contient des outils permettant le bon fonctionnement de l'architecture. On y retrouve Autoload qui permet d'inclure des fichiers pour éviter les `require` ou `require_once` à répétition.

### Autoload

```php
$Auto = new Autoload(['Controllers/WikiController', 'Models/Message']);
// Il vient d'inclure ./app/Controllers/WikiController.php/ et ./app/Models/Message.php
```

Un outil nommé Dyna est en développement, il permet d'inclure automatiquement tous les `Controllers` et `Models` d'un projet sans ne rien faire.

### Config

C'est un fichier de configuration qui pour le moment ne contient que la connexion à la base de donnée. Il est nécessaire de le modifier pour utiliser le service MySQL correctement avec vos informations

### Dispatch

Ce service permet seulement lors du raccordement entre une route et un controller. Lors de l'appel d'une route, Dispatch intervient pour appeler le Controller, et la fonction nécessaire pour exécuter le programme

### Route

Ce fichier sert à indiquer les routes. Avec une succession de condition dans la fonction `__construct`, pour indiquer si `l'url[0]` désigné par la racine de l'url équivaut à une chaine de caractère.

```php
$this->init('Index', 'index');
// $this = Dispatch()
// init() = Dispatch->init(Controller, fonction)
```

La class Route étend de Dispatch pour utiliser la variable $this qui accède à la fonction init de la classe de Dispatch.
