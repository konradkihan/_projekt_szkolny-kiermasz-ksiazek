-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 24 Wrz 2020, 21:34
-- Wersja serwera: 10.4.8-MariaDB
-- Wersja PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `kiermasz`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `books`
--

CREATE TABLE `books` (
  `book_id` int(2) NOT NULL,
  `book_name` tinytext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `books`
--

INSERT INTO `books` (`book_id`, `book_name`) VALUES
(1, 'Matematyka'),
(2, 'Język polski'),
(3, 'Język angielski zaaw.'),
(4, 'Język angielski pod.'),
(5, 'Język niemiecki'),
(6, 'Biologia'),
(7, 'Chemia'),
(8, 'Geografia'),
(9, 'Historia'),
(10, 'WoS'),
(11, 'HiS'),
(12, 'WoK'),
(13, 'EdB'),
(14, 'Religia');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `product_info`
--

CREATE TABLE `product_info` (
  `productid` int(11) NOT NULL,
  `name` tinytext DEFAULT NULL,
  `price` int(5) DEFAULT NULL,
  `state` tinytext DEFAULT NULL,
  `class` tinytext DEFAULT NULL,
  `sellerid` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `product_info`
--

INSERT INTO `product_info` (`productid`, `name`, `price`, `state`, `class`, `sellerid`) VALUES
(30, 'Produkt 1', 2, 'Poprawna', 'c1', '5696c387000fda85ffd88c909daaa8d9'),
(31, 'Produkt 2', 334, 'Znakomita', 'c1', '68db94f914520f4056ce51617ee79997'),
(32, 'Produkt 3', 13, 'Kiepska', 'c2', 'fdccc823083fabced02b0f68b5616244'),
(33, 'Nazwa 4', 12, 'Poprawna', 'c3', '9147976ead2179a861ef043da296ce19'),
(35, 'aaaa', 3, 'Poprawna', 'c2', '8f0b370012f560bb961a708d659b4d3e'),
(36, 'bbbbbbbbbbbbbb', 222, 'Poprawna', 'c2', 'b185bf0e6d7cd9f4aec51dcd7092d112'),
(37, 'bbbbbbbbbbbbbb', 222, 'Poprawna', 'c2', '9a903039cf8b473b1770e317c0bce411'),
(38, 'jjjjjjjjjjjjjjjjjjjjj', 6, 'Poprawna', 'c2', '2b9c6ec4dc3d6722ef53d80c951bd2bd'),
(39, 'jjjjjjjjjjjjjjjjjjjjj', 6, 'Poprawna', 'c2', '47da48dbf15a7c63fcbaff6d8669882a'),
(40, 'jjjjjjjjjjjjjjjjjjjjj', 6, 'Poprawna', 'c2', '6db601e47014490879936f076df69e54'),
(41, 'qq', 2, 'Poprawna', 'c3', 'af4247aeae5c530d0b691d85f11f0271'),
(42, 'qq', 2, 'Poprawna', 'c3', '8fb1c7133207415e7230bfb4d67f808e'),
(43, 'Język polski', 324, 'Dobry', 'c2', 'a78e030155d23d882398e689108983b6');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `seller_info`
--

CREATE TABLE `seller_info` (
  `sellerid` varchar(100) NOT NULL,
  `name` text NOT NULL,
  `surname` text NOT NULL,
  `class` tinytext DEFAULT NULL,
  `contact` tinytext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `seller_info`
--

INSERT INTO `seller_info` (`sellerid`, `name`, `surname`, `class`, `contact`) VALUES
('2b9c6ec4dc3d6722ef53d80c951bd2bd', 'jjjjjjjjjjjjjjjj', 'jjjjjjjjjjjjjjj', 'c3', 'jjjjjjjjjjjjjjjjjjjjjjjjj'),
('47da48dbf15a7c63fcbaff6d8669882a', 'jjjjjjjjjjjjjjjj', 'jjjjjjjjjjjjjjj', 'c3', 'jjjjjjjjjjjjjjjjjjjjjjjjj'),
('5696c387000fda85ffd88c909daaa8d9', 'Imię 1', 'Nazwisko 1', 'c3', 'Kontakt 1'),
('68db94f914520f4056ce51617ee79997', 'Imię 2', 'Nazwisko 2', 'c4', 'Kontakt 2'),
('6db601e47014490879936f076df69e54', 'jjjjjjjjjjjjjjjj', 'jjjjjjjjjjjjjjj', 'c3', 'jjjjjjjjjjjjjjjjjjjjjjjjj'),
('8f0b370012f560bb961a708d659b4d3e', 'aaaaaaaaaa', 'aaaaaaaaaaaaaaaa', '', 'aaaaaaa'),
('8fb1c7133207415e7230bfb4d67f808e', 'qq', 'qq', 'c2', 'qq'),
('9147976ead2179a861ef043da296ce19', 'Imię 4', 'Nazwisko 4', 'c4', 'Kontakt 4'),
('9a903039cf8b473b1770e317c0bce411', 'asddddddddd', 'asddddddddd', 'c3', 'sdaaaaa'),
('a78e030155d23d882398e689108983b6', 'Konrad', 'Kihan', 'c2', '667824014'),
('af4247aeae5c530d0b691d85f11f0271', 'qq', 'qq', 'c2', 'qq'),
('b185bf0e6d7cd9f4aec51dcd7092d112', 'asddddddddd', 'asddddddddd', 'c3', 'sdaaaaa'),
('c67e833ccfd132d7e19594e6ba35f6c4', 'Jarek', 'Jarkowski', 'c4', 'jarek123@gmail.com'),
('fdccc823083fabced02b0f68b5616244', 'Imię 3', 'Nazwisko 3', 'c3', 'Kontakt 3');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indeksy dla tabeli `product_info`
--
ALTER TABLE `product_info`
  ADD PRIMARY KEY (`productid`);

--
-- Indeksy dla tabeli `seller_info`
--
ALTER TABLE `seller_info`
  ADD PRIMARY KEY (`sellerid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT dla tabeli `product_info`
--
ALTER TABLE `product_info`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
