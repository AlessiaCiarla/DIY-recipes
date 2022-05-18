-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 18, 2022 alle 17:59
-- Versione del server: 10.4.24-MariaDB
-- Versione PHP: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `diy-recipes_db`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `utenti`
--

CREATE TABLE `utenti` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `utenti`
--

INSERT INTO `utenti` (`id`, `email`, `username`, `password`) VALUES
(6, 'alessia@gmail.com', 'Alessia', '$2y$10$JkhInhEIv6QGKrCSWi0xi.rSNc6vmoxHqSdS7IQpPTRqbIkxU2/oi'),
(8, 'federica@gmail.com', 'Federica', '$2y$10$C0sMUG6le.1PJaotTU./7eojqOunIGLgEHG/3vCuoLZsNJ3qDb9mi'),
(10, 'pamela@gmail.com', 'Pamela', '$2y$10$JvKDXMoBE.WMjbxBiv9We.UhGAR4oo85xFruNJB7WclU8b0oj1Zfq'),
(11, 'angelo@gmail.com', 'Angelo', '$2y$10$KPQKFn/9NB9TpRh7CjPocuMxDKbbGJwAoejlh1QGok26.Se649e2C'),
(13, 'sami@gmail.com', 'Sami', '$2y$10$AECBG9v1sD.3Ex1YjVzE1e4Ad9iZWJf6CbH.Gnf/9BHkC/8NFhBDy');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `utenti`
--
ALTER TABLE `utenti`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `utenti`
--
ALTER TABLE `utenti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;





