-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2019 at 09:32 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baza`
--

-- --------------------------------------------------------

--
-- Table structure for table `igrač`
--

CREATE TABLE `igrač` (
  `id_igrac` int(11) NOT NULL,
  `ime` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prezime` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `godina` int(255) NOT NULL,
  `država` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pozicija` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_klub` int(11) NOT NULL,
  `slika` varchar(1023) COLLATE utf8_unicode_ci NOT NULL,
  `opis` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `igrač`
--

INSERT INTO `igrač` (`id_igrac`, `ime`, `prezime`, `godina`, `država`, `pozicija`, `id_klub`, `slika`, `opis`) VALUES
(1, 'Sergio', 'Ramos', 33, 'Španjolska', 'stoper', 1, 'sergio-ramos.jpg', 'Od malih nogu Sergio je počeo igrati za lokalni klub FC Camas na nagovor svog brata Renea koji mu je danas menadžer. Godine 2004. prvi put je zaigrao za seniorsku momčad Seville. Ljeto 2005. primijetili su ga veliki klubovi, a Real Madrid ga je kupio 2005. za 27 milijuna eura. Bila je to najveći novac dan za nekog tinejdžera u Španjolskoj. Za reprezentaciju je debitirao kao osamnaestogodišnjak.'),
(10, 'Luka', 'Modrić', 34, 'Hrvatska', 'Veznjak', 1, 'luka-modric.png', '<p>Luka Modrić&nbsp;(Zadar,&nbsp;9. rujna&nbsp;1985.),&nbsp;hrvatski&nbsp;je profesionalni&nbsp;nogometa&scaron;,hrvatski nogometni reprezentativac i kapetan hrvatske nogometne reprezentacije&nbsp;koji trenutačno igra za&nbsp;&scaron;panjolski&nbsp;nogometni klub&nbsp;Real Madrid. Većinom igra kao razigravač na poziciji&nbsp;navalnog veznog&nbsp;ili na poziciji lijevog krila. Za sezonu&nbsp;2017./18., Luka Modrić progla&scaron;en je&nbsp;najboljim igračem&nbsp;Svjetskog prvenstva&nbsp;u&nbsp;Rusiji, najboljim igračem&nbsp;Europe&nbsp;po izboru&nbsp;UEFA-e, najboljim igračem svijeta u izboru&nbsp;FIFA-e&nbsp;<em>The Best FIFA Men&#39;s Player</em>&nbsp;te&nbsp;najboljim igračem svijeta&nbsp;za 2018. godinu u izboru&nbsp;<em>Ballon d&#39;Or</em>&nbsp;France Footballa.&nbsp;Prvi je&nbsp;Hrvat&nbsp;koji je osvojio navedena priznanja.&nbsp;Luka Modrić je prvi i jedini nogometa&scaron; u povijesti koji je u istoj godini osvojio sve četiri spomenute nagrade.</p>\r\n'),
(11, 'Mohamed', 'Salah', 27, 'Egipat', 'Krilo', 2, 'mohamed-salah.jpg', '<p>Mohamed Salah Ghaly&nbsp;(Basyoun,&nbsp;15. lipnja&nbsp;1992.) je&nbsp;egipatski&nbsp;nogometa&scaron;, koji trenutačno igra za&nbsp;engleski&nbsp;nogometni klub&nbsp;Liverpool FC.Na&nbsp;Anfieldu Salah nosi broj 11 i postao&nbsp;je&nbsp;prvi Egipćanin u engleskom prvoliga&scaron;u.&nbsp;Tranfserom u Liverpool, Salah je također postao najskuplji nogometa&scaron; s afričkog kontinenta. Za egipatsku reprezentaciju je odigrao preko 50 utakmica.</p>\r\n'),
(16, 'David', 'de Gea', 29, 'Španjolska', 'Golman', 5, 'david-degea.jpg', '<p>David de Gea Quintana&nbsp;(Madrid,&nbsp;7. studenog&nbsp;1990.) je&nbsp;&scaron;panjolski&nbsp;nogometni vratar koji trenutno igra za&nbsp;Manchester United. Rođen u&nbsp;Madridu, De Gea je s 13 godina započeo karijeru u&nbsp;Atl&eacute;ticu&nbsp;te se u razdoblju od&nbsp;2001.&nbsp;do&nbsp;2009.&nbsp;izborio za mjesto u prvoj momčadi madridskog kluba. Nakon &scaron;to je postao prvi golman kluba, uskoro je tako privukao pažnju Uniteda, za kojeg je potpisao&nbsp;2011.&nbsp;godine.</p>\r\n'),
(19, 'Roberto', 'Firmino', 28, 'Brazil', 'Napadač', 2, 'roberto-firmino.jpg', '<p>Firmino je svoju profesinalnu karijeru započeo u Figueirensesu u kojoj je debitirao&nbsp;24. listopada&nbsp;2009.&nbsp;u&scaron;av&scaron;i u igru u 2. poluvremenu protiv&nbsp;Ponte Preta.U siječnju&nbsp;2010.&nbsp;je u potpunosti prebačen u seniorski sastav Figueirensesa. Svoj prvi profesionalni pogodak Firmino je zabio u gostujućoj pobjedi&nbsp;8. svibnja&nbsp;2010.&nbsp;protiv&nbsp;S&atilde;o Caetanoa.&nbsp;23. lipnja&nbsp;2015., Firmino, potpisuje ugovor s&nbsp;engleskim&nbsp;prvoliga&scaron;em&nbsp;Liverpoolom&nbsp;za 38 milijuna&nbsp;eura</p>\r\n'),
(20, 'Marcus', 'Rashford', 21, 'Engleska', 'Napadač', 5, 'marcus-rashford.jpg', '<p>Marcus Rashford (Manchester,31.listopada 1997.) je engleski profesionalni nogometa&scaron; koji igra za Manchester United. Engleski izbornik ga je pozvao u reprezentaciju 2016 god. te je nastupao sa Engleskom reprezentacijom na Svjetskom prvenstvu.</p>\r\n'),
(21, 'Eden ', 'Hazard', 28, 'Belgija', 'Krilo', 1, 'eden-hazard.jpg', 'Eden Michael Hazard (La Louvière, 7. siječnja 1991.) je belgijski nogometaš koji trenutačno igra za španjolski nogometni klub Real Madrid C.F. i belgijsku nogometnu reprezentaciju. Igrao kao navalni vezni igrač i krilo. Započeo je svoju profesionalnu karijeru u francuskom klubu Lilleu. Debitirao je u studenom 2007. godine i odigrao je preko 145 ligaških utakmica za Lille. U lipnju 2012. godine, Hazard je prešao iz Lillea u engleski Chelsea. Sa Plavima je osvojio Europsku ligu, Ligu kupa i Premier ligu');

-- --------------------------------------------------------

--
-- Table structure for table `klub`
--

CREATE TABLE `klub` (
  `id_klub` int(11) NOT NULL,
  `naziv` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mjesto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slika` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `opis` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `klub`
--

INSERT INTO `klub` (`id_klub`, `naziv`, `mjesto`, `slika`, `opis`) VALUES
(1, 'Real Madrid', 'Madrid', 'real-madrid.jpg', 'Real Madrid najveći i najpoznatiji u svijetu. Sjedište mu je smješteno u glavnom gradu Španjolske, Madridu. Službeno je osnovan 1902. pod imenom Madrid CF. Godine 1920. od španjolskog kralja Alfonsa XIII. Igra na stadionu Santiago Bernabéu.U svojoj je povijesti rekorder po broju osvojenih naslova prvaka Europe, uspjelo im je to čak 13 puta.Real Madrid je, neslužbeno, najtrofejniji klub na svijetu.'),
(2, 'Liverpool FC', 'Liverpool', 'liverpool.jpg', '<p>Liverpool Football Club&nbsp;je profesionalni nogometni klub iz grada&nbsp;Liverpoola, koji se nalazi na sjeverozapadu Engleske. Klub je stalni učesnik&nbsp;Premier League&nbsp;i jedan je od najuspje&scaron;nijih klubova u historiji engleskog nogometa. Osvojio je 18 naslova prvaka Engleske, 7 FA kupova, 8 Liga kupova, 3 UEFA kupa i 6 naslova UEFA Lige prvaka. Zadnji naslov UEFA Lige prvaka osvojio je ove 2019. godine.</p>\r\n'),
(5, 'Manchester United F.C.', 'Manchester', 'manchester-united.jpg', '<p>Manchester United&nbsp;je&nbsp;engleski&nbsp;nogometni klub koji svoje domaće utakmice igra na stadionu&nbsp;Old Trafford&nbsp;u&nbsp;Manchesteru. Jedan je od najuspje&scaron;nijih engleskih i europskih nogometnih klubova sa 20 naslova&nbsp;prvaka, 12 pobjeda u&nbsp;engleskom kupu&nbsp;i tri naslova&nbsp;europskih prvaka.&nbsp;Klub je u svojoj povijesti imao dva izuzetno uspje&scaron;na razdoblja, oba pod vodstvom&nbsp;&scaron;kotskih&nbsp;trenera:&nbsp;1950.-ih i&nbsp;1960.-ih pod upravom&nbsp;Matta Busbyja&nbsp;te&nbsp;1990.-ih i&nbsp;2000.-ih pod&nbsp;Alexom Fergusonom.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `slug_post` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `id_user`, `slug_post`, `content`, `created_at`) VALUES
(9, 1, 'Real-Madrid', '<p>Siguran sam za Hazarda i Jovića, a doveo je već mladog portugalca koji se preziva&nbsp;Militao i on će biti odličan stoper siguran sam. Nadam se samo da će i Mbappe doći hehe</p>\r\n', '2019-05-22 22:31:17'),
(26, 1, 'Liverpool', '<p>Ma razvalili momci svaka im čast, ne znam samo za&scaron;to ovi izmi&scaron;ljaju da nije bio penal kada je ruka koo zgrada bila hehehe :D YNWA!!!</p>\r\n', '2019-06-03 21:33:42'),
(34, 2, 'Liverpool', '<p>Zasluženo prvo mjesto &scaron;ta je je hahaha</p>\r\n', '2019-06-13 22:52:38'),
(35, 2, 'Real-Madrid', '<p>I jo&scaron; mendy stigao ma de bit čemo najjači ikad Halaa Madriiid!!!!</p>\r\n', '2019-06-13 22:53:17');

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `OmiljeniKlub` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_ovlast` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`id_user`, `username`, `password`, `mail`, `OmiljeniKlub`, `id_ovlast`) VALUES
(1, 'ermin', '1234', 'erminsrna18@gmail.com', 'Real Madrid', 1),
(2, 'srna', ' 1234', ' srna@gmail.com', ' Liverpool', 2);

-- --------------------------------------------------------

--
-- Table structure for table `ovlast`
--

CREATE TABLE `ovlast` (
  `id_ovlast` int(2) NOT NULL,
  `vlast` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ovlast`
--

INSERT INTO `ovlast` (`id_ovlast`, `vlast`) VALUES
(1, 'admin'),
(2, 'moderator'),
(3, 'korisnik');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `body`, `createdAt`) VALUES
(14, 'Real Madrid ', 'Real-Madrid', '<p>Ovo je post o Real Madridu,&nbsp;najboljem klubu na svijetu!!</p>\r\n\r\n<p>Ako mislite da ovo nije istina ne komentirajte gluposti!!</p>\r\n\r\n<p>Reci te mi koga će Perez kupiti sve u ovome transfer roku i da li se slažete sa njegovom odlukom??</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2019-05-22 22:29:57'),
(23, 'Liverpool', 'Liverpool', '<p>Liverpool osvojio Ligu prvaka i sada su na vrhu nakon 2005god. Ajde da čujemo sada vas i va&scaron;e mi&scaron;ljenje,zasluženo ili ne?&nbsp;</p>\r\n', '2019-06-06 20:30:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `igrač`
--
ALTER TABLE `igrač`
  ADD PRIMARY KEY (`id_igrac`),
  ADD KEY `id_klub` (`id_klub`);

--
-- Indexes for table `klub`
--
ALTER TABLE `klub`
  ADD PRIMARY KEY (`id_klub`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_post` (`slug_post`);

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_ovlast` (`id_ovlast`);

--
-- Indexes for table `ovlast`
--
ALTER TABLE `ovlast`
  ADD PRIMARY KEY (`id_ovlast`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slug` (`slug`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `igrač`
--
ALTER TABLE `igrač`
  MODIFY `id_igrac` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `klub`
--
ALTER TABLE `klub`
  MODIFY `id_klub` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ovlast`
--
ALTER TABLE `ovlast`
  MODIFY `id_ovlast` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `igrač`
--
ALTER TABLE `igrač`
  ADD CONSTRAINT `igrač_ibfk_1` FOREIGN KEY (`id_klub`) REFERENCES `klub` (`id_klub`);

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `korisnik` (`id_user`);

--
-- Constraints for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD CONSTRAINT `korisnik_ibfk_1` FOREIGN KEY (`id_ovlast`) REFERENCES `ovlast` (`id_ovlast`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
