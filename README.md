# Projet fil rouge : Parti back-end du projet

Projet de deuxième année de bachelor web au sein de l'école d'étude supérieur HETIC

# Consigne

Rendre une Datalyse qui permettrait de rendre la ville de Paris plus "Smart city" à l'occasion des JO 2024

# Sujet

Donner accès aux personnes en situation d'handicape aux différentes épreuves de l'événement

# Rôles

Designer: Cassandra, Lucas, Mohamed

Dévelopeur back-end: Samir

Développeur front-end: Lucien

# Modèle Conceptuel des Données :

![alt text](https://raw.githubusercontent.com/ChalalSamir/fil_rouge/master/MCD.png)


# Texte explicatif :

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
        
        
# Modèle Conceptuel des Données V2 :

![alt text](https://raw.githubusercontent.com/ChalalSamir/fil_rouge/master/MCDV2.png)


Mon MCD original ne comportait pas de relation entre les entités, j'ai remarqué que cela posait problème par rapport à la normalisation des données, par faute de temps je n'ai pas eu le temps de réorganiser la structure de ma BDD. J'ai donc proposé un MCD amélioré pour une V2 du projet, je pourrais donc expliquer la relation ManyToMany que comporte le MCD amélioré : 

# Relation ManyToMany entre les stations et les types de transport : 

Nous avons ici deux entités qui se nomment "station" et "type_transport" , dans la première toutes les stations (RER, Metro, Bus) sont repértorié et dans la seconde nous avons les types de transport (càd Bus,Métro,RER). La relation est la suivante : une station peut avoir plusieurs types de transport (exemple la station "Nation" a comme type de transport Métro,RER et Bus) et un type de transport a logiquement plusieurs stations. 

# Comment cela est enregistré en base de données ?

 
# Symfony & API :

J'ai choisis d'utiliser le framework API Platform pour ce projet. En effet, API Plateform m'a permis d'avoir un gain de temps considérable pour les fonctionnalités que je souhaitais utiliser. J'ai choisis cet outils pour plusieurs raisons :

- La création automatique d'un CRUD pour toutes les entités que l'on va créer après avoir installé ce framework. Si les entités on été créer avant l'installation de l'API, il suffira juste de rajouter "@ApiResource" dans le fichier "src/Entity/Entity-name.php" et cela va directement ajouter un crud pour l'entité. 

- La documentation Swagger automatique : Api Plateform génère automatiquement la documentation liée à notre Api, ce qui est vraiment pratique.

- La gestion des filtres qui est vraiement simple à prendre en main. Il suffit comme pour l'argument "@ApiResourse", d'ajouter "@ApiFilter()" dans l'entité souhaitée, puis ensuite d'ajouter les champs que l'on souhaite filtré.
