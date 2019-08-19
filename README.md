# Squelette d'un projet Symfony 4 pour la SCACentre



## Installation du projet

Clone du repository :

``git clone ``



Installation des dépendances :

``cd nom``

``composer install``

``npm install``

``yarn install``



Ajout de la base de donnée : 

``touch var/sample.bd``

``php bin/console make:migration``

``php bin/console doctrine:migrations:migrate``

``php bin/console doctrine:fixtures:load``



Créer les assets :

``yarn encore dev``



## Connexion

Le profile utilisateur déjà existant sera : 

- login : ``admin@scacentre.fr``
- mdp : ``admin``



## Organisation du projet

### Security

Module permettant de se connecter à l'aide d'une adresse mail et d'un mot de passe hashé.

Le *userProvider* est réglé dans ``config/security.yaml`` comme étant l'entité *User*.

Le controller se trouve dans ``src/Controller/Security``.



### Layout

Les assets ont été générés à l'aide du webpack-encore. Ils contiennent les classes css et les fichiers javascript nécessaire au déploiement de pages statiques.



Dans l'optique de créer une nouvelle vue twig, un template à utiliser : 

```twig
{% extends 'layout.html.twig' %}

{% block title %}
{{ parent() }} - NomPage
{% endblock %}


{% block titre %}
Titre Page
{% endblock %}

{% block body %}
    {{ parent() }} {# À mettre ssi on veut le block titre #}
    {#
    HTML de la page
    #}
    
{% endblock %}

```









