# fil_rouge

Parti back-end du projet fil_rouge

Projet de deuxième année de bachelor web au sein de l'école d'hétude superieur HETIC

CONSIGNE

Rendre une Datalyse qui permettrais de rendre la vile de Paris plus "Smart city" a l'occasion des JO 2024

SUJET

Donner accès aux personnes en situation d'handicape aux différentes épreuves de l'événement

ROLES

Designer: Cassandra, Lucas, Mohamed

Dévelopeur back-end: Samir

Développeur front-end: Lucien

Modèle Conceptuel des Données :

![alt text](https://raw.githubusercontent.com/ChalalSamir/fil_rouge/master/MCD.png)


Texte explicatif :

La majorité des données de notre base proviennent des bases de données fournient par la RATP, à part pour les entités "lieux_epreuves" et "travaux_en_cours". Les données fournient par la RATP étaient au départ difficile à manipuler en raison de nombreux facteurs : 

- Il y avait de nombreux champs qui ne nous étaient pas utiles pour ce que nous voulions faire

- Les entités contenaient de nombreux doublons, j'ai dû faire une requête pour les supprimer si les lignes contenaient le même nom de station , la même latitude et longitude, ce qui donnaient un requête comme ça :

        DELETE t1 
        FROM access_bus AS t1, access_bus AS t2
        WHERE t1.id > t2.id
        AND t1.`nom` = t2.`nom`
        AND t1.`latitude` = t2.`latitude`
        AND t1.`longitude` = t2.`longitude`
    
- À la base, il n'y avait pas de champs "latitude" et "longitude", les deux valeurs étaient stockés dans un même champs qui se nommait "coordonees". Cette disposition posait problème car le développeur front-end avait besoin de récuperer les deux valeurs séparées pour pouvoir afficher les différentes stations sur la map. Avec l'aide de notre intervenant, j'ai d'abord créés les champs "latitude" et "longitude" , j'ai ensuite affecter à chacun de ces champs un partie du champs "coordonnees" qui correspondait à la latitude et à la longitude. N'ayant plus besoin du champs "coordonnees", je l'ai supprimé. La requête est la suivante : 

        ALTER TABLE access_bus ADD latitude DOUBLE PRECISION NOT NULL, ADD longitude DOUBLE PRECISION NOT NULL;
        UPDATE access_bus SET latitude = SUBSTR(coordonnees, 1, (LOCATE(",", coordonnees) -1));
        UPDATE access_bus SET longitude = SUBSTR(coordonnees, (LOCATE(",", coordonnees) +1));
        ALTER TABLE access_bus DROP coordonnees;
        
        
Les
 
