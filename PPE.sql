-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : Dim 27 déc. 2020 à 14:29
-- Version du serveur :  5.7.24
-- Version de PHP : 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ppe`
--

-- --------------------------------------------------------

--
-- Structure de la table `author`
--

CREATE TABLE `author` (
  `author_id` int(11) NOT NULL,
  `author_lastname` varchar(255) NOT NULL,
  `author_firstname` varchar(255) NOT NULL,
  `author_birth` date NOT NULL,
  `author_death` date DEFAULT NULL,
  `author_bio` text NOT NULL,
  `author_pic` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `author`
--

INSERT INTO `author` (`author_id`, `author_lastname`, `author_firstname`, `author_birth`, `author_death`, `author_bio`, `author_pic`) VALUES
(1, 'van Cauwelaert', 'Didier', '1960-07-29', NULL, 'Didier Van Cauwelaert is a French author of Belgian descent who was born in Nice. In 1994 his novel Un Aller simple won the Prix Goncourt.\r\n\r\nIn 1997 he was awarded the Grand prix du théâtre de l’Académie française. ', 'https://i.imgur.com/ze3dzmd.png'),
(2, 'Dumas', 'Alexandre', '1802-07-24', '1870-12-05', 'Alexandre Dumas; born Dumas Davy de la Pailleterie also known as Alexandre Dumas père (where père is French for \'father\', thus \'the elder/senior\'), was a French writer. \r\nHis works have been translated into many languages, and he is one of the most widely read French authors. Many of his historical novels of high adventure were originally published as serials, including The Count of Monte Cristo, The Three Musketeers, Twenty Years After, and The Vicomte of Bragelonne: Ten Years Later. His novels have been adapted since the early twentieth century into nearly 200 films. ', 'https://i.imgur.com/NpqGYqk.png'),
(3, 'Zusak ', 'Markus', '1975-06-23', NULL, 'Markus Zusak is the author of five books, including the international bestseller, The Book Thief , which spent more than a decade on the New York Times bestseller list, and is translated into more than forty languages – establishing Zusak as one of the most successful authors to come out of Australia.\r\n\r\nTo date, Zusak has held the number one position at Amazon.com, Amazon.co.uk, the New York Times bestseller list, as well as in countries across South America, Europe and Asia.', 'https://i.imgur.com/nGb6YSi.png');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `com_id` int(11) NOT NULL,
  `com_user` int(11) NOT NULL,
  `com_rating` tinyint(1) NOT NULL,
  `com_review` text NOT NULL,
  `com_ebook` int(11) NOT NULL,
  `com_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ebook`
--

CREATE TABLE `ebook` (
  `book_id` int(11) NOT NULL,
  `book_title` varchar(255) NOT NULL,
  `book_author` int(11) NOT NULL,
  `book_date` date DEFAULT NULL,
  `book_desc` text NOT NULL,
  `book_price` int(11) NOT NULL,
  `book_cover` varchar(255) DEFAULT NULL,
  `book_genre` int(11) DEFAULT NULL,
  `book_comment` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ebook`
--

INSERT INTO `ebook` (`book_id`, `book_title`, `book_author`, `book_date`, `book_desc`, `book_price`, `book_cover`, `book_genre`, `book_comment`) VALUES
(2, 'The Count of Monte Cristo', 2, NULL, 'Before he can marry his fiancée Mercédès, Edmond Dantès, first mate of the Pharaon, is falsely accused of treason, arrested, and imprisoned without trial in the Château d\'If, a grim island fortress off Marseille. A fellow prisoner, Abbé Faria, correctly deduces that his jealous rival Fernand Mondego, envious crewmate Danglars, and double-dealing magistrate De Villefort turned him in. Faria inspires his escape and guides him to a fortune in treasure. As the powerful and mysterious Count of Monte Cristo, he arrives from the Orient to enter the fashionable Parisian world of the 1830s and avenge himself on the men who conspired to destroy him. ', 2, 'https://i.imgur.com/YSyliKX.jpg', 1, NULL),
(3, 'The Three Musketeers', 2, NULL, 'Set between 1625 and 1628, it recounts the adventures of a young man named d\'Artagnan (a character based on Charles de Batz-Castelmore d\'Artagnan) after he leaves home to travel to Paris, hoping to join the Musketeers of the Guard. Although d\'Artagnan is not able to join this elite corps immediately, he is befriended by three of the most formidable musketeers of the age – Athos, Porthos and Aramis, \"the three inseparables\" – and becomes involved in affairs of state and at court. ', 2, 'https://i.imgur.com/tGD5sB3.png', 2, NULL),
(4, 'One-Way', 1, NULL, 'One-Way (French: Un aller simple) is a 1994 novel which received the Prix Goncourt. It was adapted into the 2001 film Un aller simple, directed by Laurent Heynemann. ', 2, 'https://i.imgur.com/QgTkoKK.png', 3, NULL),
(5, 'The Book Thief', 3, NULL, 'It is 1939. Nazi Germany. The country is holding its breath. Death has never been busier, and will be busier still.\r\n\r\nBy her brother\'s graveside, Liesel\'s life is changed when she picks up a single object, partially hidden in the snow. It is The Gravedigger\'s Handbook, left behind there by accident, and it is her first act of book thievery. So begins a love affair with books and words, as Liesel, with the help of her accordian-playing foster father, learns to read. Soon she is stealing books from Nazi book-burnings, the mayor\'s wife\'s library, wherever there are books to be found.\r\n\r\nBut these are dangerous times. When Liesel\'s foster family hides a Jew in their basement, Liesel\'s world is both opened up, and closed down.', 1, 'https://i.imgur.com/Ysq8al6.jpg', 1, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

CREATE TABLE `genre` (
  `genre_id` int(11) NOT NULL,
  `genre_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `genre`
--

INSERT INTO `genre` (`genre_id`, `genre_name`) VALUES
(1, 'Historical Fiction'),
(2, 'Adventure'),
(3, 'Fiction');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_username` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_icon` varchar(255) DEFAULT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_wishlist` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `wishlist`
--

CREATE TABLE `wishlist` (
  `wishlist_id` int(11) NOT NULL,
  `ebook_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`author_id`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`com_id`),
  ADD KEY `com_user` (`com_user`),
  ADD KEY `com_ebook` (`com_ebook`);

--
-- Index pour la table `ebook`
--
ALTER TABLE `ebook`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `book_author` (`book_author`),
  ADD KEY `book_comment` (`book_comment`),
  ADD KEY `book_genre` (`book_genre`);

--
-- Index pour la table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`genre_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_wishlist` (`user_wishlist`);

--
-- Index pour la table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`wishlist_id`),
  ADD KEY `ebook_id` (`ebook_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `author`
--
ALTER TABLE `author`
  MODIFY `author_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `com_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ebook`
--
ALTER TABLE `ebook`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `genre`
--
ALTER TABLE `genre`
  MODIFY `genre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `wishlist_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`com_user`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`com_ebook`) REFERENCES `ebook` (`book_id`);

--
-- Contraintes pour la table `ebook`
--
ALTER TABLE `ebook`
  ADD CONSTRAINT `ebook_ibfk_1` FOREIGN KEY (`book_author`) REFERENCES `author` (`author_id`),
  ADD CONSTRAINT `ebook_ibfk_2` FOREIGN KEY (`book_comment`) REFERENCES `comments` (`com_id`),
  ADD CONSTRAINT `ebook_ibfk_3` FOREIGN KEY (`book_genre`) REFERENCES `genre` (`genre_id`);

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`user_wishlist`) REFERENCES `wishlist` (`wishlist_id`);

--
-- Contraintes pour la table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`ebook_id`) REFERENCES `ebook` (`book_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
