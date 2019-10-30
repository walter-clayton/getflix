-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  mer. 30 oct. 2019 à 14:55
-- Version du serveur :  10.4.6-MariaDB
-- Version de PHP :  7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `getflix`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date_comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `pseudo`, `message`, `date_comment`) VALUES
(223, 'Hamza', 'Sakuuut', '23-10-2019 Ã  \'16:09\''),
(224, 'Naruto', 'Wooow j\'ai adorÃ© ce film :D', '23-10-2019 Ã  \'16:09\''),
(225, 'SasukÃ©', 'J\'ai grave pleurÃ© ma vie Ã  la fin :\'(', '23-10-2019 Ã  \'16:09\''),
(226, 'SasukÃ©', 'J\'ai grave pleurÃ© ma vie Ã  la fin :\'(', '23-10-2019 Ã  \'16:10\''),
(227, '', '', '23-10-2019 Ã  \'16:10\''),
(228, '', '', '23-10-2019 Ã  \'16:10\''),
(229, 'Mouad', 'Saluuuut', '23-10-2019 Ã  \'16:30\''),
(230, 'Mouad', 'Saluuuut', '23-10-2019 Ã  \'16:32\''),
(231, 'mouad', 'salut', '24-10-2019 Ã  \'10:41\''),
(232, 'mouad', 'salut', '24-10-2019 Ã  \'10:49\''),
(233, 'zaxca', 'sdf', '24-10-2019 Ã  \'9:40\''),
(234, '', '', '24-10-2019 Ã  \'10:10\''),
(235, 'haha', 'lol', '24-10-2019 Ã  \'10:10\''),
(236, '', '', '24-10-2019 Ã  \'10:10\''),
(237, 'htmlspecialchars(tamere)', '222', '2019-10-30 10:02:21'),
(238, 'tamere', 'tonpere', '2019-10-30 10:02:31');

-- --------------------------------------------------------

--
-- Structure de la table `media`
--

CREATE TABLE `media` (
  `ID` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `synopsis` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `media2`
--

CREATE TABLE `media2` (
  `ID` int(2) DEFAULT NULL,
  `title` varchar(32) DEFAULT NULL,
  `synopsis` varchar(2646) DEFAULT NULL,
  `message` varchar(10) DEFAULT NULL,
  `genre` varchar(68) DEFAULT NULL,
  `link video` varchar(202) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `media2`
--

INSERT INTO `media2` (`ID`, `title`, `synopsis`, `message`, `genre`, `link video`) VALUES
(1, 'Joker', 'Dans les années 1980, à Gotham City, Arthur Fleck, un comédien de stand-up raté est agressé alors qu\'il ère dans les rues de la ville déguisé en clown. Méprisé de tous et bafoué, il bascule peu à peu dans la folie pour devenir le Joker, un dangereux tueur psychotique.', NULL, '‎Thriller psychologique', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/zAGVQLHvwOY\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(2, 'ça', 'À Derry, dans le Maine, sept gamins ayant du mal à s\'intégrer se sont regroupés au sein du Club des Ratés. Rejetés par leurs camarades, ils sont les cibles favorites des gros durs de l\'école. Ils ont aussi en commun d\'avoir éprouvé leur plus grande terreur face à un terrible prédateur métamorphe qu\'ils appellent Ça.', NULL, 'horreur', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Tw3yT-qAbvc\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(3, 'fast and furious', 'La nuit tombée, Dominic Toretto règne sur les rues de Los Angeles à la tête d\'une équipe de fidèles qui partagent son goût du risque, sa passion de la vitesse et son culte des voitures de sport lancées à plus de 250 km/h dans des rodéos urbains d\'une rare violence. Ses journées sont consacrées à bricoler et à relooker des modèles haut de gamme, à les rendre toujours plus performants et plus voyants, et à organiser des joutes illicites.', NULL, 'action', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/2TAOizOnNPo\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(4, 'Président', 'Secrets d\'État, convictions sincères, foules exaltées, train de vie royal, journalistes inquisiteurs, disparitions suspectes : les coulisses du pouvoir ou la vie quotidienne d\'un président. Entre l\'amour d\'un père pour sa fille et les contradictions d\'un chef d\'État, que reste-t-il d\'essentiel quand on a le pouvoir suprême ?', NULL, 'action', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/6-kdBlzCG7w\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(5, 'Angry Bird', 'Sur une île entièrement peuplée d\'oiseaux heureux, Red, un oiseau avec un problème de colère, le très pressé Chuck, et l\'imprévisible Bomb ont toujours été mis à l\'écart. Cependant, lorsque arrivent des cochons verts mystérieux sur l\'île, ce sera la mission de ce groupe de parias de découvrir ce que trament les cochons.', NULL, 'Comédie', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/1U2DKKqxHgE\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(6, 'Terminator', 'Un Terminator, robot d\'aspect humain, est envoyé d\'un futur où sa race livre aux hommes une guerre sans merci. Sa mission est de trouver et d\'éliminer Sarah Connor avant qu\'elle ne donne naissance à John, appelé à devenir le chef de la résistance. Cette dernière envoie un de ses membres, Reese, aux trousses du cyborg.', NULL, 'Science-fiction', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/oxy8udgWRmo\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(7, 'Once Upon a Time... in Hollywood', 'En 1969, la star de télévision Rick Dalton et le cascadeur Cliff Booth, sa doublure de longue date, poursuivent leurs carrières au sein d\'une industrie qu\'ils ne reconnaissent plus.', NULL, 'Comédie dramatique', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/ELeMaP8EPAA\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(8, 'Dora', 'Après des années à explorer la jungle avec ses parents, Dora se prépare à vivre l\'épreuve la plus difficile de sa vie : l\'entrée au lycée ! Son âme d\'exploratrice resurgit quand elle doit voler à la rescousse de ses parents en danger. Accompagnée de son fidèle singe Babouche, de son cousin Diego et de nouveaux amis hauts en couleur, Dora embarque dans une folle aventure qui l\'amènera à percer le mystère de la Cité d\'or perdue.', NULL, 'Famille, Aventure', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/gUTtJjV852c\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(9, 'Black Mirror', 'Chaque épisode de cette anthologie montre la dépendance des hommes vis-à-vis de tout ce qui a un écran...', NULL, 'Drame, Science fiction, Thriller', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/nSDviEdvw4U\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(10, 'The Boys', 'Dans un monde fictif où les super-héros se sont laissés corrompre par la célébrité et la gloire et ont peu à peu révélé la part sombre de leur personnalité, une équipe de justiciers qui se fait appeler \"The Boys\" décide de passer à l\'action et d\'abattre ces super-héros autrefois appréciés de tous.', NULL, 'Super-héros Comédie noire\nComédie dramatique', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/06rueu_fh30\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(11, 'Game of Throne', 'Sur le continent de Westeros, le roi Robert Baratheon gouverne le Royaume des Sept Couronnes depuis plus de dix-sept ans, à la suite de la rébellion qu\'il a menée contre le « roi fou » Aerys II Targaryen. Jon Arryn, époux de la sœur de Lady Catelyn Stark, Lady Arryn, son guide et principal conseiller, vient de décéder, et le roi part alors dans le nord du royaume demander à son vieil ami Eddard « Ned » Stark de remplacer leur regretté mentor au poste de Main du roi. Ned, seigneur suzerain du nord depuis Winterfell et de la maison Stark, est peu désireux de quitter ses terres. Mais il accepte à contre-cœur de partir pour la capitale Port-Réal avec ses deux filles, Sansa et Arya. Juste avant leur départ pour le sud, Bran, l\'un des jeunes fils d\'Eddard, est poussé de l\'une des tours de Winterfell après avoir été témoin de la liaison incestueuse entre la reine Cersei Baratheon et son frère jumeau, Jaime Lannister. Leur frère, Tyrion Lannister, surnommé « le gnome », est alors accusé du crime par Lady Catelyn Stark.\n\n\nLes neufs Grandes Maisons de la série.\nAu nord-ouest de Westeros, le jeune bâtard de Ned Stark, Jon Snow, se prépare à intégrer la fameuse Garde de nuit. Depuis plus de 8 000 ans, cette confrérie protège et défend le royaume de Westeros de ce qui vit de l\'autre côté du Mur, un gigantesque édifice fait de glace, de pierre et de magie, formant la frontière septentrionale entre les contrées glacées du nord et les Sept Couronnes. Si les Sauvageons ne sont en réalité pas la vraie menace directe, le retour d\'une race d\'anciennes créatures mythiques et légendaires appelée les Marcheurs blancs est en revanche beaucoup plus inquiétant.\n\nSur le continent d\'Essos, au sud-est au-delà du Détroit, l\'héritier « légitime » en exil des Sept Couronnes, Viserys Targaryen, se prépare à reconquérir le royaume. Prêt à tout, il marie sa jeune sœur, la princesse Daenerys Targaryen, à Khal Drogo, seigneur de guerre des Dothrakis, afin d\'obtenir le soutien de la puissante horde de cavaliers nomades qu\'il dirige. Mais le lunatique Viserys va hériter du même sort que celui de ses parents, laissant à Daenerys le projet de recouvrer sa place sur le Trône de fer, aidée en cela par ses trois dragons.', NULL, 'Fantasy médiévale\nDrame', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/rlR4PJn8b8I\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(12, 'Mis fits', 'Nathan Young, Simon Bellamy, Kelly Bailey, Curtis Donovan et Alisha Daniels sont cinq jeunes adultes ayant été condamnés, pour des raisons diverses, à des travaux d\'intérêt général (TIG). Alors qu\'ils effectuent leur premier jour, non sans provoquer Tony Morecombe, leur superviseur, un violent orage éclate. Ils sont alors frappés par la foudre. Très vite, ils vont se rendre compte qu\'ils détiennent désormais des super-pouvoirs. Mais, ils vont également se rendre compte qu\'ils ne sont pas les seuls à avoir changé. Tony, devenu complètement fou, va tenter de les assassiner. En danger de mort, ils n\'auront d\'autre choix que de le frapper les premiers et de le tuer.\n\nÀ la suite de ce meurtre qu\'ils se refusent de révéler, une longue suite de mésaventures s\'enchaîne. Les cinq jeunes vont devoir tenter de cacher leur crime, déplaçant le corps au gré des fouilles de la police, utilisant la carte de crédit du disparu pour tromper ses proches et faire croire qu\'il est simplement parti. Mais aussi, ils vont devoir apprendre à se faire confiance mutuellement.', NULL, 'Teen drama, super-héros, fantastique, science-fiction, comédie noire', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/VsBYXLYNZlE\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(13, 'Rick et Morty', 'l passe le plus clair de son temps à entraîner son petit-fils Morty dans des aventures extraor... ... Il passe le plus clair de son temps à entraîner son petit-fils Morty dans des aventures extraordinaires et dangereuses, à travers l\'espace et dans des univers parallèles.', NULL, 'science-fiction\naventure\nhumour noir', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Rw6BrzB1drs\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(14, 'Happy', 'Ex-flic devenu tueur à gages et alcoolique, Nick Sax croit perdre la tête quand une licorne animée qu\'il est le seul à voir le pousse à sauver une fillette enlevée par le père Noël.', NULL, 'Documentaire, Famille', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/t7OYkSgmM-w\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(15, 'The walking dead', 'L\'histoire suit le personnage de Rick Grimes (interprété par Andrew Lincoln), adjoint du shérif du comté de Kings (en Géorgie) qui se réveille d\'un coma de plusieurs semaines pour découvrir que la population a été ravagée par une épidémie post-apocalyptique inconnue qui transforme les êtres humains en morts-vivants, appelés « rôdeurs ». Après avoir retrouvé sa famille, il devient très vite le leader d\'un groupe de rescapés d\'Atlanta. Ils seront amenés à devoir survivre dans un monde post-apocalyptique face à des rôdeurs et d\'autres groupes de survivants, pour certains plus dangereux encore que les rôdeurs eux-mêmes. Ensemble, ils vont devoir tant bien que mal faire face à ce nouveau monde devenu méconnaissable, à travers leur périple dans le Sud profond des États-Unis.', NULL, 'Horreur\nDrame', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Ie_6qO0B8AU\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(16, 'Heroes', 'c\'est l\'histoire de personnes ordinaires qui se découvrent soudainement dotées de super-pouvoirs (vol, télékinésie, régénération cellulaire, etc...). ... La faute à la grève des scénaristes et des histoires de plus en plus bizarres.', NULL, 'Drame, Fantastique, Science fiction', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/9AX6aXFdTkc\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(17, 'Clones', 'Deux agents du FBI enqutent sur le meurtre mystérieux d\'un étudiant, qui semble lié l\'homme qui a contribué mettre au point une invention qui s\'est imposée dans toute la société : les gens peuvent désormais acheter des versions robotisées d\'eux-mmes, des doubles sans défaut qui, commandés distance, effectuent leurs tâches leur place et leur permettent de vivre par procuration sans quitter le confort et la sécurité de leur domicile.', NULL, 'Science fiction', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Untfxmpct6I\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(18, 'Paul', 'Depuis 60 ans, Paul, un extraterrestre, vit sur terre et collabore avec le gouvernement américain. Il se cache à l\'abri des regards dans une base militaire ultra secrète. Paul est à l\'origine de tout ce qu\'on a pu imaginer sur les extraterrestres, du `merchandising\' aux scénarios de `Rencontres du troisième type , E.T.\' ou encore `X-Files\'.', NULL, 'Comédie, Science fiction, Aventure', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/kMsqHqKaFlQ\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(19, 'Im Legend', 'Robert Neville était un brillant scientifique, mais même lui n\'a pu endiguer le terrible virus - créé de la main de l\'homme - qui a dévasté la race humaine. Pour une raison inconnue, Neville est immunisé et reste à ce jour le dernier être humain vivant dans ce qui reste de New York et peut-être du monde. Depuis trois ans, il envoie des messages de détresse à qui voudra bien l\'entendre.', NULL, 'Science-fiction\nScience-fiction post-apocalyptique', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/dtKMEAXyPkg\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(20, 'Ralph 2.0', 'Ralph quitte l\'univers des jeux d\'arcade pour s\'aventurer dans le monde sans limite d\'Internet à la recherche d\'une pièce de rechange pour réparer la borne de Sugar Rush, le jeu vidéo dans lequel vit Vanellope. Rapidement dépassés par le monde qui les entoure, ils vont devoir demander de l\'aide aux habitants d\'Internet, les Netizens, afin de trouver leur chemin, et notamment à Yesss, l\'algorithme principal, le c?ur et l\'âme du site créateur de tendances BuzzzTube.', NULL, 'Animation', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/KHQhp2cGZtE\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(21, 'Les dents de la mer', 'À quelques jours du début de la saison estivale, les habitants de la petite station balnéaire d\'Amity sont en émoi face à la découverte, sur le littoral, du corps atrocement mutilé d\'une jeune vacancière. Pour Martin Brody, le chef de la police, il ne fait aucun doute que la jeune fille a été victime d\'un requin. Il décide alors d\'interdire l\'accès des plages mais se heurte à l\'hostilité du maire, uniquement intéressé par l\'afflux des touristes.', NULL, 'Thriller, Action', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/PZDO1hrV16I\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(22, 'Zombieland 2', 'Les tueurs de zombies Tallahassee, Columbus, Wichita et Little Rock affrontent des morts-vivants nouvellement évolués.', NULL, 'Comédie, Epouvante-horreur, Action', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/DjelrTXP21I\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(23, 'Rambo', 'Revenu du Viêtnam, abruti autant par les mauvais traitements que lui ont jadis infligés ses tortionnaires que par l\'indifférence de ses concitoyens, le soldat Rambo, un ancien des commandos d\'élite, traîne sa redoutable carcasse de ville en ville. Un shérif teigneux lui interdit l\'accès de sa bourgade. Rambo insiste. Il veut seulement manger. Le shérif le met sous les verrous et laisse son adjoint brutaliser ce divertissant clochard.', NULL, 'Action, Aventure', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/4vWg5yJuWfs\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(24, 'Steve Jobs', 'Dans les coulisses, quelques instants avant le lancement de trois produits emblématiques ayant ponctué la carrière de Steve Jobs, du Macintosh en 1984 à l\'iMac en 1998, le film nous entraîne dans les rouages de la révolution numérique pour dresser un portrait intime de l\'homme de génie qui y a tenu une place centrale.', NULL, 'Biopic, Drame', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/aEr6K1bwIVs\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(25, 'Capitain Fantastic', 'Dans les forêts reculées du nord-ouest des États-Unis, vivant isolé de la société, un père dévoué a consacré sa vie toute entière à faire de ses six jeunes enfants d\'extraordinaires adultes. Cependant, quand le destin frappe sa famille, ils doivent abandonner ce paradis qu\'il avait créé pour eux. La découverte du monde extérieur va l\'obliger à questionner ses méthodes d\'éducation et remettre en cause tout ce qu\'il leur a appris.', NULL, 'Aventure', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/D1kH4OMIOMc\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(26, 'Sweet dream of america', 'Harold Goldfarb, alias Harry, son meilleur ami Tyron et sa petite amie Marianne (Marion dans la version originale) sont trois consommateurs d\'héroïne. Ils passent leurs journées à se droguer et s\'inventent un paradis artificiel, où ils se sentent invulnérables et heureux. Harry connaît avec Marianne l\'harmonie et le plaisir des sens.\n\nLa mère de Harry, Sara Goldfarb, une femme âgée dépendante de télévision, passe sa vie à récupérer chez le prêteur sur gage le téléviseur qu\'Harry y dépose régulièrement afin de se fournir ses doses. Malgré tout, elle aime profondément son fils unique et celui-ci aime également sa mère.\n\nHarry et Tyron se lancent dans le trafic de drogue afin de pouvoir acheter un magasin pour Marianne qui veut être styliste de mode. Leur revente de drogue est une réussite et les trois amis consomment de plus en plus.\n\nSara pense être bientôt invitée à son émission favorite. Afin de rentrer dans son ancienne robe rouge quand le grand jour sera venu, elle décide de commencer un « régime ». Elle consulte un médecin qui lui prescrit des pilules amaigrissantes qui sont en fait des amphétamines qui lui apporteront dans un premier temps euphorie, désinhibition et bien-être.\n\nSara devient dépendante des amphétamines. Harry s\'en aperçoit et tente brièvement de raisonner sa mère. Une guerre des gangs asséchant brutalement le marché local de la drogue, il doit rapidement faire face à son propre manque et à celui de Marianne.\n\nOn assiste alors à la descente aux enfers de ces quatre personnages : Harry incite Marianne, en manque comme lui, à renouer avec un ancien amant pour se procurer de l\'argent. Ne parvenant pas malgré tout à obtenir de quoi satisfaire leur addiction, et réagissant par une sorte de défi aux récriminations de Marianne, il lui laisse l\'adresse d\'un dealer uniquement intéressé par les relations sexuelles avant de partir, avec Tyron, chercher de l\'héroïne en Floride. Harry et Tyron seront arrêtés par la police et Marianne se retrouvera livrée à elle-même.\n\nSara, victime d\'hallucinations et de crises de paranoïa, finit aux urgences psychiatriques où elle reçoit des électrochocs. Marianne tombe ensuite dans la prostitution afin de se procurer ses doses. Harry, en prison, est amputé d’un bras à cause d\'une infection due à ses injections répétées d’héroïne. Tyron aura la chance de ne finir qu\'aux travaux forcés en prison, avec ses souvenirs d\'enfant quand il vivait avec sa mère.\n\nLe film se conclut dans un rêve que fait Sara où elle est dans son émission préférée lorsque le présentateur lui dit qu\'elle a remporté le super cadeau. Harry la rejoint à ce moment et la prend dans ses bras.', NULL, 'drame', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/GjWDqtdye_o\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(27, 'Force et nature', 'Un policier est chargé de protéger les résidents d\'un immeuble pris au piège après le passage d\'un ouragan. Parmi eux, un détective à la retraite obstiné refuse d\'être évacuer. En parallèle de la catastrophe météorologique, un groupe de criminels tentent de réaliser un vol mystérieux au sein du bâtiment.', NULL, 'Action', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/gl45jx7zMmc\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(28, 'Mc Queen', 'McQUEEN est un regard personnel sur la vie, la carrière et le talent hors du commun de l’enfant terrible de la mode, Alexander McQueen. Une icône d’ascendance modeste qui a brillé comme une étoile filante... Mêlant témoignages exclusifs de sa famille et de ses proches, archives inédites, images et musiques bouleversantes, McQUEEN est un vibrant hommage en même temps qu’un portrait captivant de ce visionnaire aussi tourmenté qu’inspiré.', NULL, 'Documentaire', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/4OjX3ZbsfbU\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(29, 'Nobody die here', 'Ashkân, a young conscript, is sent to a far distant frontier where he lives alone to complete his military service. Fearing solitude he wanders to and fro and meets a young woman, Rojin, who apparently lives alone in the same area and is also seeking human contact.', NULL, 'Documentaire', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/5bcxg-hJFVg\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(30, 'Deepweb', 'Dans les dossiers, il déniche d\'inquiétants fichiers cachés qu\'il s\'empresse de montrer à ses amis sur Skype. Sans le vouloir, tous se retrouvent dans les tréfonds du Dark Web et découvrent rapidement que quelqu\'un les observe et que cet inconnu est prêt à tout pour récupérer son portable et protéger ses secrets.', NULL, 'Documentaire', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/BvC9oDlT8mM\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(31, 'War Crimes Dealers', 'Deux copains âgés d\'une vingtaine d\'années vivant à Miami Beach à l\'époque de la guerre en Irak, profitent d\'un dispositif méconnu du gouvernement fédéral, permettant à de petites entreprises de répondre à des appels d\'offres de l\'armée américaine.', NULL, 'Comédie, Drame, Guerre, Comédie dramatique', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/AZ5ZK9ipQ-Y\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(32, 'Avicii', 'Dans un portrait intime, l\'histoire d\'Avicii est racontée à travers ces True Stories ; ce documentaire très attendu suit la superstar DJ depuis ses débuts, en passant par son ascension dans les charts, ses hits mondiaux et son combat contre la maladie', NULL, 'Documentaire', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/1ZFK3VKzQIs\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- Structure de la table `members`
--

CREATE TABLE `members` (
  `ID` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_subscribed` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `members`
--

INSERT INTO `members` (`ID`, `pseudo`, `password`, `date_subscribed`) VALUES
(1, 'hamza', 'hamza', '2019-10-29');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD UNIQUE KEY `id` (`id`);

--
-- Index pour la table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=239;

--
-- AUTO_INCREMENT pour la table `media`
--
ALTER TABLE `media`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `members`
--
ALTER TABLE `members`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
