-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  jeu. 31 oct. 2019 à 15:45
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
  `idvideo` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date_comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `idvideo`, `pseudo`, `message`, `date_comment`) VALUES
(242, 1, 'a', 'saluuut', '2019-10-31 10:58:48'),
(243, 1, 'a', 'salut ', '2019-10-31 10:58:54'),
(244, 1, 'a', 'salut ', '2019-10-31 11:19:14'),
(245, 1, 'a', 'hhhhh', '2019-10-31 11:21:41'),
(246, 1, 'a', 'hhhhh', '2019-10-31 11:22:09'),
(247, 1, 'a', 'hhhhh', '2019-10-31 11:27:27'),
(248, 4, 'a', 'bonjour', '2019-10-31 11:28:07'),
(249, 28, 'a', 'yeeees', '2019-10-31 11:28:22'),
(250, 17, 'a', 'tonpere', '2019-10-31 14:40:42'),
(251, 2, 'a', 'zzz', '2019-10-31 14:49:22'),
(252, 1, 'a', 'ssss', '2019-10-31 14:49:40');

-- --------------------------------------------------------

--
-- Structure de la table `media2`
--

CREATE TABLE `media2` (
  `id` int(11) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `synopsis` text DEFAULT NULL,
  `date` varchar(17) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `genre` varchar(250) DEFAULT NULL,
  `linkvideo` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `media2`
--

INSERT INTO `media2` (`id`, `title`, `synopsis`, `date`, `message`, `genre`, `linkvideo`) VALUES
(1, 'Joker', 'In Derry, Maine, seven kids who are struggling to integrate have regrouped in the Club des Fatees. Rejected by their comrades, they are the favorite targets of the big boys of the school. They also have in common to have experienced their greatest terror against a terrible metamorphous predator they call it.\n', '2 octobre 2019', NULL, '‎Thriller psychologique', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/zAGVQLHvwOY\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(2, 'Ca', 'In Derry, Maine, seven kids who are struggling to integrate have regrouped in the Club des Fatees. Rejected by their comrades, they are the favorite targets of the big boys of the school. They also have in common to have experienced their greatest terror against a terrible metamorphous predator they call it.\n', '5 septembre 2017', NULL, 'horreur', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Tw3yT-qAbvc\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(3, 'fast and furious', 'When night falls, Dominic Toretto reigns on the streets of Los Angeles at the head of a team of faithful who share his taste for risk, his passion for speed and his cult sports cars launched at over 250 km / h in urban rodeos of rare violence. His days are devoted to tinkering and revamping high-end models, to make them ever more efficient and more visible, and to organize illicit games.\n', '7 aout 2019', NULL, 'action', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/2TAOizOnNPo\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(4, 'President', 'Secrets of State, sincere convictions, exalted crowds, royal lifestyle, inquisitive journalists, suspicious disappearances: behind the scenes of power or the daily life of a president. Between the love of a father for his daughter and the contradictions of a head of state, what remains essential when one has the supreme power?\n', '18 mars 2015', NULL, 'action', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/6-kdBlzCG7w\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(5, 'Angry Bird', 'On an island entirely populated with happy birds, Red, a bird with anger, the hurry Chuck, and the unpredictable Bomb have always been sidelined. However, when mysterious green pigs arrive on the island, it will be the mission of this group of outcasts to discover what the pigs are up to.\n', '11 mai 2016', NULL, 'Comédie', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/1U2DKKqxHgE\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(6, 'Terminator', 'A Terminator, a robot with a human aspect, is sent from a future where his race delivers to men a merciless war. Her mission is to find and eliminate Sarah Connor before she gives birth to John, called to become the leader of the resistance. The latter sends one of its members, Reese, to the kits of the cyborg.\n', '26 octobre 1984', NULL, 'Science-fiction', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/oxy8udgWRmo\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(7, 'Once Upon a Time... in Hollywood', 'In 1969, television star Rick Dalton and stuntman Cliff Booth, their long-time liner, continue their careers in an industry they no longer recognize.\n', '14 août 2019', NULL, 'Comédie dramatique', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/ELeMaP8EPAA\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(8, 'Dora', 'After years of exploring the jungle with her parents, Dora is getting ready for the toughest event of her life - entry to high school! Her exploratory soul resurfaces when she has to fly to the rescue of her parents in danger. Accompanied by her faithful monkey Babouche, her cousin Diego and new colorful friends, Dora embarks on a crazy adventure that will lead her to unlock the mystery of the Lost City of Gold.\n', '14 août 2019', NULL, 'Famille, Aventure', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/gUTtJjV852c\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(9, 'Black Mirror', 'Each episode of this anthology shows the dependence of men vis-à-vis everything that has a screen ...\n', '28 decembre 2018', NULL, 'Drame, Science fiction, Thriller', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/nSDviEdvw4U\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(10, 'The Boys', 'In a fictitious world where superheroes have been corrupted by celebrity and glory and have gradually revealed the dark side of their personality, a team of vigilantes who call themselves \"The Boys\" decides to move to the action and shoot down those superheroes once enjoyed by all.\n', '26 juillet 2019', NULL, 'Super-héros Comédie noire\nComédie dramatique', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/06rueu_fh30\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(11, 'Game of Throne', 'On the Westeros mainland, King Robert Baratheon has ruled the Kingdom of the Seven Crowns for more than seventeen years, following his rebellion against \"mad king\" Aerys II Targaryen. Jon Arryn, husband of Lady Catelyn Stark\'s sister, Lady Arryn, his guide and senior advisor, has just died, and the king then leaves for the north of the kingdom to ask his old friend Eddard \"Ned\" Stark to replace their late mentor at the post of King\'s Hand. Ned, overlord lord of the north since Winterfell and Stark\'s house, is unwilling to leave his lands. But he reluctantly agrees to leave for the capital Port-Réal with his two daughters, Sansa and Arya. Just before leaving for the south, Bran, one of Eddard\'s young sons, is pushed from one of Winterfell\'s towers after witnessing the incestuous bond between Queen Cersei Baratheon and her twin brother, Jaime Lannister. . Their brother, Tyrion Lannister, nicknamed \"the gnome\", is then charged with the crime by Lady Catelyn Stark.\n\n\nLes neufs Grandes Maisons de la série.\nAu nord-ouest de Westeros, le jeune bâtard de Ned Stark, Jon Snow, se prépare à intégrer la fameuse Garde de nuit. Depuis plus de 8 000 ans, cette confrérie protège et défend le royaume de Westeros de ce qui vit de l\'autre côté du Mur, un gigantesque édifice fait de glace, de pierre et de magie, formant la frontière septentrionale entre les contrées glacées du nord et les Sept Couronnes. Si les Sauvageons ne sont en réalité pas la vraie menace directe, le retour d\'une race d\'anciennes créatures mythiques et légendaires appelée les Marcheurs blancs est en revanche beaucoup plus inquiétant.\n\nSur le continent d\'Essos, au sud-est au-delà du Détroit, l\'héritier « légitime » en exil des Sept Couronnes, Viserys Targaryen, se prépare à reconquérir le royaume. Prêt à tout, il marie sa jeune sœur, la princesse Daenerys Targaryen, à Khal Drogo, seigneur de guerre des Dothrakis, afin d\'obtenir le soutien de la puissante horde de cavaliers nomades qu\'il dirige. Mais le lunatique Viserys va hériter du même sort que celui de ses parents, laissant à Daenerys le projet de recouvrer sa place sur le Trône de fer, aidée en cela par ses trois dragons.', '17 avril 2011', NULL, 'Fantasy médiévale\nDrame', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/rlR4PJn8b8I\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(12, 'Mis fits', 'Nathan Young, Simon Bellamy, Kelly Bailey, Curtis Donovan and Alisha Daniels are five young adults who have been convicted, for various reasons, of community service work. As they make their first day, not without provoking Tony Morecombe, their supervisor, a violent storm breaks out. They are struck by lightning. Very quickly, they will realize that they now hold superpowers. But, they will also realize that they are not the only ones to have changed. Tony, gone crazy, will try to kill them. In danger of death, they will have no choice but to strike him first and kill him.\n\nÀ la suite de ce meurtre qu\'ils se refusent de révéler, une longue suite de mésaventures s\'enchaîne. Les cinq jeunes vont devoir tenter de cacher leur crime, déplaçant le corps au gré des fouilles de la police, utilisant la carte de crédit du disparu pour tromper ses proches et faire croire qu\'il est simplement parti. Mais aussi, ils vont devoir apprendre à se faire confiance mutuellement.', '12 novembre 2009', NULL, 'Teen drama, super-héros, fantastique, science-fiction, comédie noire', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/VsBYXLYNZlE\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(13, 'Rick et Morty', 'He spends most of his time coaching his grandson Morty on extravagant adventures ... ... He spends most of his time coaching his grandson Morty on extraordinary and dangerous adventures through space and in parallel universes.\n', '10 nmvembre', NULL, 'science-fiction\naventure\nhumour noir', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Rw6BrzB1drs\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(14, 'Happy', 'An ex-cop who has become a hit man and an alcoholic, Nick Sax thinks he will lose his head when an animated unicorn is the only one to see him push to save a girl kidnapped by Santa Claus.\n', '6 décembre 2017', NULL, 'Documentaire, Famille', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/t7OYkSgmM-w\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(15, 'The walking dead', 'The story follows the character of Rick Grimes (interpreted by Andrew Lincoln), deputy sheriff of Kings County, Georgia, who awakens from a coma of several weeks to discover that the population has been ravaged by a post-war epidemic. unknown apocalyptic who turns humans into undead, called \"rovers\". After finding his family, he quickly became the leader of a group of survivors from Atlanta. They will have to survive in a post-apocalyptic world in the face of prowlers and other groups of survivors, some of them even more dangerous than the ranger themselves. Together, they will have to deal with this new world that has become unrecognizable, through their journey in the deep South of the United States.\n', '5 décembre 2010', NULL, 'Horreur\nDrame', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Ie_6qO0B8AU\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(16, 'Heroes', 'it is the story of ordinary people who suddenly discover themselves endowed with super-powers (flight, telekinesis, cellular regeneration, etc ...). ... the fault of the writers\' strike and increasingly bizarre stories.\n', '25 septembre 2006', NULL, 'Drame, Fantastique, Science fiction', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/9AX6aXFdTkc\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(17, 'Clones', 'Two FBI agents are investigating the mysterious murder of a student, who seems to be linked to the man who helped develop an invention that has become prevalent throughout society: people can now buy robotic versions of themselves even, faultless doubles who, commanded remotely, perform their tasks their place and allow them to live by proxy without leaving the comfort and security of their home.\n', '20 mars 2009', NULL, 'Science fiction', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Untfxmpct6I\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(18, 'Paul', 'For 60 years, Paul, an extraterrestrial, lives on earth and collaborates with the US government. He hides out of sight in an ultra secret military base. Paul is at the origin of everything that could be imagined about the extraterrestrials, from \'merchandising\' to scenarios of \'Encounters of the third type, E.T.\' or \'X-Files\'.\n', '2 mars 2011', NULL, 'Comédie, Science fiction, Aventure', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/kMsqHqKaFlQ\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(19, 'Im Legend', '\nobert Neville was a brilliant scientist, but even he could not contain the terrible virus - created by the hand of man - that devastated the human race. For some unknown reason, Neville is immune and remains to this day the last living human being in what remains of New York and possibly the world. For the past three years, he has been sending distress messages to anyone who wants to hear him.', '19 décembre 2007', NULL, 'Science-fiction\nScience-fiction post-apocalyptique', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/dtKMEAXyPkg\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(20, 'Ralph 2.0', 'Ralph leaves the world of arcade games to venture into the limitless world of the Internet looking for a spare part to repair the terminal of Sugar Rush, the video game in which Vanellope lives. Quickly overwhelmed by the world around them, they will have to ask the Netizens\' help to find their way, especially to Yesss, the main algorithm, the heart and the soul. BuzzzTube BuzzzTube website.\n', '5 novembre 2018', NULL, 'Animation', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/KHQhp2cGZtE\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(21, 'Les dents de la mer', 'A few days before the beginning of the summer season, the inhabitants of the small seaside resort of Amity are in turmoil at the discovery, on the coast, of the atrociously mutilated body of a young vacationer. For Martin Brody, the chief of police, there is no doubt that the girl was a victim of a shark. He then decided to ban access to beaches but ran up against the hostility of the mayor, only interested in the influx of tourists.\n', '15 janvier 1976', NULL, 'Thriller, Action', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/PZDO1hrV16I\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(22, 'Zombieland 2', 'The Tallahassee, Columbus, Wichita and Little Rock zombie killers face newly evolved undead.\n', '13 novembre 2019', NULL, 'Comédie, Epouvante-horreur, Action', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/DjelrTXP21I\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(23, 'Rambo', 'Returning from Vietnam, stunned as much by the mistreatment that his torturers once inflicted as by the indifference of his fellow citizens, Private Rambo, a former elite commando, drags his formidable carcass from town to town. A dingy sheriff forbids him access to his village. Rambo insists. He only wants to eat. The sheriff puts him under lock and let his assistant brutalize this entertaining tramp.\n', '1 octobre 1982', NULL, 'Action, Aventure', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/4vWg5yJuWfs\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(24, 'Steve Jobs', 'Behind the scenes, moments before the launch of three iconic products punctuating the career of Steve Jobs, from the Macintosh in 1984 to iMac in 1998, the film takes us into the workings of the digital revolution to draw an intimate portrait of the world. man of genius who held a central place.\n', '16 octobre 2015', NULL, 'Biopic, Drame', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/aEr6K1bwIVs\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(25, 'Capitain Fantastic', 'In the remote forests of the northwestern United States, living isolated from society, a dedicated father has devoted his entire life to making his six young children extraordinary adults. However, when destiny strikes his family, they must abandon that paradise he had created for them. The discovery of the outside world will force him to question his methods of education and question everything he has taught them.\n', '8 juillet 2016', NULL, 'Aventure', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/D1kH4OMIOMc\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(26, 'Sweet dream of america', 'Harold Goldfarb, aka Harry, his best friend Tyron and his girlfriend Marianne (Marion in the original version) are three heroin consumers. They spend their days drugging themselves and invent an artificial paradise, where they feel invulnerable and happy. Harry knows Marianne\'s harmony and the pleasure of the senses.\n\n\n\n\n\n\n\n', '05 mai 2005', NULL, 'drame', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/GjWDqtdye_o\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(27, 'Force et nature', 'A police officer is responsible for protecting residents of a building trapped after a hurricane. Among them, a stubborn retired detective refuses to be evacuated. In parallel with the weather disaster, a group of criminals are trying to make a mysterious flight within the building.\n', '18 novembre 2017', NULL, 'Action', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/gl45jx7zMmc\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(28, 'Mc Queen', 'Mcqueen is a personal look at the extraordinary life, career and talent of the enfant terrible of fashion, Alexander McQueen. An icon of modest ancestry that shone like a shooting star ... Combining exclusive testimonies of his family and loved ones, unseen archives, moving images and music, Mcqueen is a vibrant tribute as well as a captivating portrait of a visionary as tormented as he is inspired.\n', '13 mars 2019', NULL, 'Documentaire', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/4OjX3ZbsfbU\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(29, 'Nobody die here', 'Ashkân, a young conscript, is a distant man where he lives alone to complete his military service. Fearing loneliness and a young woman, Rojin, who apparently lives alone in the same area and is also seeking human contact.\n', '15 aout 2016', NULL, 'Documentaire', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/5bcxg-hJFVg\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(30, 'Deepweb', 'In the files, he finds disturbing hidden files that he hastens to show his friends on Skype. Unintentionally, all find themselves in the depths of the Dark Web and quickly discover that someone is watching and that this stranger is ready to do anything to recover his laptop and protect his secrets.\n', '23 novembre 2015', NULL, 'Documentaire', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/BvC9oDlT8mM\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(31, 'War Crimes Dealers', 'Two friends in their twenties living in Miami Beach during the Iraq war, benefit from a device unknown to the federal government, allowing small businesses to respond to calls for tenders. American army.\n', '22 decembre 2018', NULL, 'Comédie, Drame, Guerre, Comédie dramatique', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/AZ5ZK9ipQ-Y\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(32, 'Avicii', 'In an intimate portrait, the story of Avicii is told through these True Stories; this highly anticipated documentary follows the superstar DJ since his debut, rising through the charts, his global hits and his fight against the disease\n', '15 septembre 2015', NULL, 'Documentaire', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/1ZFK3VKzQIs\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>');

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
(1, 'hamza', 'hamza', '2019-10-29'),
(36, 'a', '$2y$10$l5Bs.CM2LLEpXcG5yNzzRerhPDZnRfe/LL3jC6mgnQjIPpMC.Mke2', '2019-10-31');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD UNIQUE KEY `id` (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=253;

--
-- AUTO_INCREMENT pour la table `members`
--
ALTER TABLE `members`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
