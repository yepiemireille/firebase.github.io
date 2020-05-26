
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div id="bloc_page">


<!-- ***************************************************************************   -->
 <!-- <header>
     
     <nav>
        <ul>
            <li><a href="#">Accueil</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">CV</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
     </nav>
 </header>
 -->


<!-- ***************************************************************************   -->

<img src="téléchargé.png" style="width: 100%; height: 252px;">








<!-- ***************************************************************************   -->

<section>

        <article>

            <center>
                <h1><strong>FIREBASE<img src="télécharg.png"  style="width: 30px; height: 30px; class="ico_categorie"></strong></h1>
            </center>
            <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Firebase est un ensemble de services de haut niveau pour le développement d'applications web ou mobile. Firebase offre en particulier des services très bien réalisés pour la gestion des utilisateurs, des notifications, du stockage de fichiers, des bases de données... 
           </p>   <br><br>

           <p>
                <h4 style="color: red;"><strong> Les origines</strong></h4>
                <hr>
                En 2011, avant que Firebase ne devienne Firebase, c'était une startup appelée Envolve. En tant qu'Envolve, il fournissait aux développeurs une API qui permettait d'intégrer une fonctionnalité de chat en ligne sur leur site Web.<br/> <br/>

                Ce qui est intéressant, c'est que les gens utilisaient Envolve pour transmettre des données d'application qui n'étaient pas que des messages de discussion. Les développeurs utilisaient Envolve pour synchroniser les données d'application, telles que l'état d'un jeu en temps réel avec leurs utilisateurs.<br/><br/>

                Cela a conduit les fondateurs d'Envolve, James Tamplin et Andrew Lee, à séparer le système de discussion et l'architecture en temps réel. En avril 2012, Firebase a été créée en tant qu'entreprise indépendante fournissant des fonctionnalités en temps réel en tant que Backend-as-a-Service.<br/><br/>

                Après son acquisition par Google en 2014, Firebase a rapidement évolué pour devenir le monstre multifonctionnel pour plate-forme mobile et web qu'elle est aujourd'hui.
            </p>  <br><br>

            <p>
                <h4 style="color: red;"><strong> Pourquoi utiliser Firebase pour mon projet ?</strong></h4>
                <hr>
                Lorsqu'on développe une application, qu'elle soit destinée au grand public ou réservée à un usage interne à l'entreprise, certaines fonctionnalités sont systématiquement requises, telles que la gestion des utilisateurs, de la connexion et des notifications. La gestion de ces fonctionnalités est fastidieuse, répétitive si votre SI se compose de plusieurs applications, et critiques en termes de sécurité, dans la mesure où l'on va stocker des mots de passe. <b>Firebase vous permet d'externaliser cette gestion</b>, en même temps qu'il vous offre la possibilité de proposer de manière unifiée des connexions Facebook, Twitter, Google...<br/> <br/>

                De plus, Firebase offre des SDK pour chaque environnement de développement classique.<br/><br/>

                <b>Cette API de haut niveau vous permet de gérer vos utilisateurs de manière transparente, à la fois entre une application mobile, un backoffice et votre propre backend.</b>
            </p>   <br><br>

            <p>
                <h4 style="color: red;"><strong> A quoi sert Firebase ?</strong></h4>
                <hr>
                <span style="color: blue">La gestion des utilisateurs</span><br>
                Firebase offre, en natif, une API pour gérer directement les utilisateurs de vos applications. Firebase encapsule la gestion des connexions à divers providers, tels que Facebook/ Twitter/ Google, et offre une API unifiée pour gérer ses utilisateurs.<br/> <br/>

                Il permet également une <b>gestion des utilisateurs par login et mot de passe</b>, ce qui vous libère de la contrainte des gestions de connexions de votre application (web ou mobile), et vous laisse vous concentrer sur votre code à valeur ajoutée. Cette externalisation de la sécurité de vos utilisateurs concernant la gestion de leurs droits d’accès à l’application est le gain le plus intéressant de Firebase : <br>dès l'entrée du client sur l'application, l'utilisateur est identifié et authentifié.</br><br/>

                <i>Bien sûr, les gestions de droits et de rôles restent à votre charge, Firebase ne disposant pas d'outil suffisamment fin en cette matière (juste un contrôle oui / non pour l’accès à votre application).</i><br/> <br/>

                Avec la console Firebase vous pouvez aussi directement <b>désactiver un utilisateur</b>.<br/> <br/>

                Pour résumer, le mécanisme se contente de vous offrir un utilisateur connecté avec un identifiant unique généré par ses soins lors de l’inscription, et qu’il vous faudra garder sur votre serveur pour l’identifier.
            <br/><br/>

                <span style="color: blue">Notifications</span><br>
                <b>Une fois que vos utilisateurs sont identifiés, quelle que soit votre plateforme, vous pouvez leur envoyer des notifications avec une API unifiée</b> : en clair, vous n'avez pas besoin de savoir s'ils possèdent un iPhone, un smartphone Android ou un PC / Mac. Lorsqu'on connait la difficulté de gérer les notifications sur les plateformes des développeurs, c’est un vrai plus.
            <br/><br/>

                <span style="color: blue">Crashlytics</span><br>
                Sur une application mobile, il est très difficile d'avoir des remontées d'informations concernant les bugs qui peuvent se produire lors de l'exécution des applications. Grace à Crashlytics, il vous suffit d'installer une librairie sur votre application mobile (iOS ou Android) pour que les anomalies remontent de manière unifiée dans votre console. Grâce à la libraire, il est très facile d'identifier l'environnement d'exécution. Vous avez la possibilité d'ajouter des variables utilisateurs / contextuelles lors du crash pour vous faciliter le débuggage.
            <br/><br/>

                <span style="color: blue">Autres modules</span><br>
                Il existe bien d'autres modules dans Firebase qu'il peut être pertinent ou pas d'utiliser en fonction de votre projet.
            </p>
        </article>




        <aside>
            <h1 style="color: yellow;"><strong>Dernières nouveautés de Firebase</strong></h1>
            
            <strong style="color: black;">Robo Scripts</strong>
            <p>
                Firebase Test Labs a ce service étonnant appelé Robo Test qui nous permet de tester notre application sans avoir à écrire de script de test. Avec Robo Test, Firebase permet de tester complètement votre application, voire de remplir des champs de formulaire spécifiques et des boutons poussoirs!<br/><br/>

                Maintenant Firebase a mis au point une autre fonctionnalité de test appelée Robo Scripts. Avec Robo Scripts, vous pouvez enregistrer une série d'actions pour que Firebase prenne votre application.<br/><br/>

                Lorsque vous exécutez un test Robo avec un script Robo attaché, Firebase commence par parcourir les actions enregistrées depuis le script Robo, puis explore l'application comme d'habitude. 
            </p><br/><br/>
            
                <strong style="color: black;">Firebase Predictions</strong>
            <p>
                Firebase intègre désormais l'apprentissage automatique, qui permet d'analyser les données de votre application et de créer des groupes d'utilisateurs dynamiques en fonction du comportement prévu de l'utilisateur.<br/><br/>

                Firebase Predictions peut fonctionner avec Remote Config pour augmenter les conversions en fournissant une expérience personnalisée basée sur le comportement de chaque utilisateur.<br/><br/>

                Ou, il peut travailler avec Notifications composer pour livrer le bon message au bon groupe d'utilisateurs.<br/><br/>

                Firebase Predictions peut également fonctionner de pair avec les tests A / B pour évaluer l'efficacité de vos stratégies basées sur les prévisions.

            </p>
        </aside>


</section>



<!-- **********************************************************************************   -->

<!-- <footer> 
    <div class="tweet">
        <h1>Mon dernier tweet</h1>
        <p>Hii haaan</p>
        <p>le 12 mai</p>
    </div>
    <div class="mes_photos">
        <h1>Mes photos</h1>
        <p>
            <img src="photo1.jpg">
            <img src="photo2.jpg">
            <img src="photo3.jpg">
            <img src="photo4.jpg">
        </p>
    </div>
    <div id="mes_amis">
        <h1>Mes amis</h1>
        <div id="listes_amis">
            <ul>
                <li><a href="#">Pupi le lapin</a></li>
                <li><a href="#">Mr Baobab</a></li>
                <li><a href="#">Kaiwaii</a></li>
                <li><a href="#">Perceval.eu</a></li>
            </ul>

            <ul>
                <li><a href="#">Belette</a></li>
                <li><a href="#">Le concombre</a></li>
                <li><a href="#">Ptit prince</a></li>
                <li><a href="#">Mr Fan</a></li>
            </ul>
        </div>
    </div>
</footer>

-->







    
    
   </div>

</body>
</html>