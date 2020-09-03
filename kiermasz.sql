-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 01 Wrz 2020, 18:34
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
(33, 'Nazwa 4', 12, 'Poprawna', 'c3', '9147976ead2179a861ef043da296ce19');

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
('5696c387000fda85ffd88c909daaa8d9', 'Imię 1', 'Nazwisko 1', 'c3', 'Kontakt 1'),
('68db94f914520f4056ce51617ee79997', 'Imię 2', 'Nazwisko 2', 'c4', 'Kontakt 2'),
('9147976ead2179a861ef043da296ce19', 'Imię 4', 'Nazwisko 4', 'c4', 'Kontakt 4'),
('fdccc823083fabced02b0f68b5616244', 'Imię 3', 'Nazwisko 3', 'c3', 'Kontakt 3');

--
-- Indeksy dla zrzutów tabel
--

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
-- AUTO_INCREMENT dla tabeli `product_info`
--
ALTER TABLE `product_info`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
