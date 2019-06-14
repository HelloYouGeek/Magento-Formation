Formation Magento

Magento limité sur Windows et Mac

Version Communautaire ou Enterprise ?

A partir 2.0, fuir Object Manager
Rester version PHP7.2 pour compatibilité Magento2.3 car présence MCrypt => Faire attention aux prérequis

Magento par defaut en "default", à passer en "developer", et à passer en prod "production" => nécessité de recompiler 

Security Center vérification du projet magento

Gestion des roles => Déclaration de ressources => fichier acl.xml

Magento prefix des bases possible
core_config_data

stores config

Sauver régulièrement la base

Recherche magento de base est un peu limité => utiliser des modules ( 200 / 300 dollars )
Review user basique => utiliser des modules 
Reporting n'est pas très bon et n'aide pas à la comptabilité et statistique

Risque de ne pas conserver la version communautaire

Multi vue = multi langue
Multi boutique
1 seule instance magento mais multi stat (passer le commentaire runcode) et une seule connexion à l'ERP

sont ok
	multistock
	taxes => gestion des monnaies
	produit / type de produit
	livraison

Importance d'activer les crons pour par ex voir apparaitre un produit dans une categorie

dossier web/generated risque sur les droits dossier generated permission denied => il faut supprimer le dossier

web/pub/media 
web/pub/static regroupe le js/css

web/pub/media/import => import d'images

resize automatique

web/pub/errors erreur et report

web/setup gère l'install de magento

web/var/cache peut etre supprimer
web/var/log

on met le code dans web/app/code
	-> copier le registration.php
	-> copier etc/module.xml
	-> php bin/magento module:enable NOM_NOMMODULE




ROUTING
dans tous les modules 
	routes.xml
	id standard ou admin (front ou back)

compilation
	di.xml
	constructeur

une action un fichier


compilation : 
php bin/magento setup:di:compile

Insertion de vidéo => vimeo ou youtube, sinon via code attribue text 

Suggestion => règle automatic related product = extension payante


Dans swagger, génération de l'api key par  integrationAdminTokenServiceV1 Interface providing token generation for Admins, saisir ses paramèttres

Dans l'admin
	Table>Section>Group>Field
exemple du module contact


Ressources web js css images dans module/view/web ou projet/lib

web/app/design/frontend/nommodule