-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 04 2023 г., 18:14
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `db_internet_magazina_chasov`
--
CREATE DATABASE IF NOT EXISTS `db_internet_magazina_chasov` DEFAULT CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci;
USE `db_internet_magazina_chasov`;

-- --------------------------------------------------------

--
-- Структура таблицы `cena_dostavki`
--

CREATE TABLE `cena_dostavki` (
  `tip_dostavki` varchar(25) NOT NULL,
  `cena_dostavki` decimal(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Структура таблицы `chasi`
--

CREATE TABLE `chasi` (
  `articul_chasov` int NOT NULL,
  `brend` varchar(25) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `nazvanie_chasov` varchar(80) NOT NULL,
  `gender` enum('мужские','женские','unisex','детские') NOT NULL,
  `garantia` varchar(40) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `cena` decimal(8,2) NOT NULL,
  `vodoneproniczaemost` varchar(50) DEFAULT NULL,
  `diametr_korpusa` varchar(40) DEFAULT NULL,
  `tolshina` varchar(40) DEFAULT NULL,
  `funkcii` set('hronograf','hronometr','data','indikator batareii','calendar','den nedeli','faza luny') DEFAULT NULL,
  `code_strany_proizvodstva` int DEFAULT NULL,
  `code_mehanizma` int DEFAULT NULL,
  `code_materiala_brasleta` int DEFAULT NULL,
  `code_materiala_korpusa` int DEFAULT NULL,
  `code_stekla` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `chasi`
--

INSERT INTO `chasi` (`articul_chasov`, `brend`, `nazvanie_chasov`, `gender`, `garantia`, `cena`, `vodoneproniczaemost`, `diametr_korpusa`, `tolshina`, `funkcii`, `code_strany_proizvodstva`, `code_mehanizma`, `code_materiala_brasleta`, `code_materiala_korpusa`, `code_stekla`) VALUES
(12, 'Apple', 'Watch 7', 'unisex', '1 год', '1500.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'Festina', 'Play', 'мужские', '2 года', '1200.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'Steinhart', 'Wave', 'мужские', '3 года', '2600.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'Braun', 'Dark', 'мужские', '1 год', '900.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'Timex', 'Sky', 'женские', '1 год', '1600.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'Rider', 'Golden Sun', 'мужские', '2 года', '2200.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'Current', 'Two', 'мужские', '3 года', '3200.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'Daniel Wellington', 'Rich', 'мужские', '3 года', '5150.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'Dior', 'Horizon', 'мужские', '3 года', '4850.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'Fossil', 'Challenge', 'мужские', '2 года', '3400.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'Casio', 'G-SHOCK', 'женские', '2 года', '2100.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'Polar', 'Smart watch', 'unisex', '2 года', '1400.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `dostavka_zakaza_kurierom`
--

CREATE TABLE `dostavka_zakaza_kurierom` (
  `code_kuriera` int NOT NULL,
  `familia_imia_otchestvo` varchar(100) NOT NULL,
  `data_priema_na_rabotu` date NOT NULL,
  `rabochaia_smena` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Структура таблицы `korzina_zakaza`
--

CREATE TABLE `korzina_zakaza` (
  `code_zakaza` int NOT NULL,
  `articul_chasov` int NOT NULL,
  `kolichestvo_ekzempliarov_v_zakaze` int NOT NULL,
  `cena` decimal(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Структура таблицы `material_brasleta`
--

CREATE TABLE `material_brasleta` (
  `code_materiala_brasleta` int NOT NULL,
  `naimenovanie_materiala_brasleta` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Структура таблицы `material_korpusa`
--

CREATE TABLE `material_korpusa` (
  `code_materiala_korpusa` int NOT NULL,
  `naimenovanie_materiala_korpusa` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Структура таблицы `mehanizm`
--

CREATE TABLE `mehanizm` (
  `code_mehanizma` int NOT NULL,
  `naimenovanie_mehanizma` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Структура таблицы `nomer_telefona_pokupatelia`
--

CREATE TABLE `nomer_telefona_pokupatelia` (
  `nomer_telefona` int NOT NULL,
  `code_pokupatelia` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Структура таблицы `pokupatel`
--

CREATE TABLE `pokupatel` (
  `code_pokupatelia` int NOT NULL,
  `naimenovanie_organizacii` varchar(100) NOT NULL,
  `familia_imia_otchestvo` varchar(100) NOT NULL,
  `adres_electronnoy_pochty` varchar(60) NOT NULL,
  `pochtoviy_adres` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Структура таблицы `polzovateli`
--

CREATE TABLE `polzovateli` (
  `code_polzovatelia` int NOT NULL,
  `gruppa_polzovatelia` enum('administrator','manager','user') NOT NULL,
  `login` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Структура таблицы `steklo`
--

CREATE TABLE `steklo` (
  `code_stekla` int NOT NULL,
  `naimenovanie_stekla` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Структура таблицы `strana_proizvodstva`
--

CREATE TABLE `strana_proizvodstva` (
  `code_strany_proizvodstva` int NOT NULL,
  `nazvanie_strany` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Структура таблицы `zakaz`
--

CREATE TABLE `zakaz` (
  `code_zakaza` int NOT NULL,
  `forma_oplaty` varchar(35) NOT NULL,
  `data_i_vremia_zakaza` datetime NOT NULL,
  `data_dostavki` date NOT NULL,
  `data_ispolnenia` date DEFAULT NULL,
  `adres_dostavki` varchar(80) NOT NULL,
  `primechanie` varchar(100) DEFAULT NULL,
  `code_pokupatelia` int NOT NULL,
  `code_kuriera` int DEFAULT NULL,
  `tip_dostavki` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cena_dostavki`
--
ALTER TABLE `cena_dostavki`
  ADD PRIMARY KEY (`tip_dostavki`);

--
-- Индексы таблицы `chasi`
--
ALTER TABLE `chasi`
  ADD PRIMARY KEY (`articul_chasov`),
  ADD KEY `fk_chasi_strana_proizvodstva_idx` (`code_strany_proizvodstva`),
  ADD KEY `fk_chasi_mehanizm1_idx` (`code_mehanizma`),
  ADD KEY `fk_chasi_material_brasleta1_idx` (`code_materiala_brasleta`),
  ADD KEY `fk_chasi_material_korpusa1_idx` (`code_materiala_korpusa`),
  ADD KEY `fk_chasi_steklo1_idx` (`code_stekla`);

--
-- Индексы таблицы `dostavka_zakaza_kurierom`
--
ALTER TABLE `dostavka_zakaza_kurierom`
  ADD PRIMARY KEY (`code_kuriera`);

--
-- Индексы таблицы `korzina_zakaza`
--
ALTER TABLE `korzina_zakaza`
  ADD PRIMARY KEY (`code_zakaza`,`articul_chasov`),
  ADD KEY `articul_chasov_idx` (`articul_chasov`);

--
-- Индексы таблицы `material_brasleta`
--
ALTER TABLE `material_brasleta`
  ADD PRIMARY KEY (`code_materiala_brasleta`);

--
-- Индексы таблицы `material_korpusa`
--
ALTER TABLE `material_korpusa`
  ADD PRIMARY KEY (`code_materiala_korpusa`);

--
-- Индексы таблицы `mehanizm`
--
ALTER TABLE `mehanizm`
  ADD PRIMARY KEY (`code_mehanizma`);

--
-- Индексы таблицы `nomer_telefona_pokupatelia`
--
ALTER TABLE `nomer_telefona_pokupatelia`
  ADD PRIMARY KEY (`nomer_telefona`),
  ADD KEY `fk_nomer_telefona_pokupatelia_pokupatel1_idx` (`code_pokupatelia`);

--
-- Индексы таблицы `pokupatel`
--
ALTER TABLE `pokupatel`
  ADD PRIMARY KEY (`code_pokupatelia`);

--
-- Индексы таблицы `polzovateli`
--
ALTER TABLE `polzovateli`
  ADD PRIMARY KEY (`code_polzovatelia`);

--
-- Индексы таблицы `steklo`
--
ALTER TABLE `steklo`
  ADD PRIMARY KEY (`code_stekla`);

--
-- Индексы таблицы `strana_proizvodstva`
--
ALTER TABLE `strana_proizvodstva`
  ADD PRIMARY KEY (`code_strany_proizvodstva`);

--
-- Индексы таблицы `zakaz`
--
ALTER TABLE `zakaz`
  ADD PRIMARY KEY (`code_zakaza`),
  ADD KEY `fk_zakaz_pokupatel1_idx` (`code_pokupatelia`),
  ADD KEY `fk_zakaz_dostavka_zakaza_kurierom1_idx` (`code_kuriera`),
  ADD KEY `fk_zakaz_cena_dostavki1_idx` (`tip_dostavki`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `chasi`
--
ALTER TABLE `chasi`
  MODIFY `articul_chasov` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT для таблицы `dostavka_zakaza_kurierom`
--
ALTER TABLE `dostavka_zakaza_kurierom`
  MODIFY `code_kuriera` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `korzina_zakaza`
--
ALTER TABLE `korzina_zakaza`
  MODIFY `code_zakaza` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `material_brasleta`
--
ALTER TABLE `material_brasleta`
  MODIFY `code_materiala_brasleta` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `material_korpusa`
--
ALTER TABLE `material_korpusa`
  MODIFY `code_materiala_korpusa` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `mehanizm`
--
ALTER TABLE `mehanizm`
  MODIFY `code_mehanizma` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `pokupatel`
--
ALTER TABLE `pokupatel`
  MODIFY `code_pokupatelia` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `polzovateli`
--
ALTER TABLE `polzovateli`
  MODIFY `code_polzovatelia` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `steklo`
--
ALTER TABLE `steklo`
  MODIFY `code_stekla` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `strana_proizvodstva`
--
ALTER TABLE `strana_proizvodstva`
  MODIFY `code_strany_proizvodstva` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `zakaz`
--
ALTER TABLE `zakaz`
  MODIFY `code_zakaza` int NOT NULL AUTO_INCREMENT;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `chasi`
--
ALTER TABLE `chasi`
  ADD CONSTRAINT `fk_chasi_material_brasleta1` FOREIGN KEY (`code_materiala_brasleta`) REFERENCES `material_brasleta` (`code_materiala_brasleta`),
  ADD CONSTRAINT `fk_chasi_material_korpusa1` FOREIGN KEY (`code_materiala_korpusa`) REFERENCES `material_korpusa` (`code_materiala_korpusa`),
  ADD CONSTRAINT `fk_chasi_mehanizm1` FOREIGN KEY (`code_mehanizma`) REFERENCES `mehanizm` (`code_mehanizma`),
  ADD CONSTRAINT `fk_chasi_steklo1` FOREIGN KEY (`code_stekla`) REFERENCES `steklo` (`code_stekla`),
  ADD CONSTRAINT `fk_chasi_strana_proizvodstva` FOREIGN KEY (`code_strany_proizvodstva`) REFERENCES `strana_proizvodstva` (`code_strany_proizvodstva`);

--
-- Ограничения внешнего ключа таблицы `korzina_zakaza`
--
ALTER TABLE `korzina_zakaza`
  ADD CONSTRAINT `articul_chasov` FOREIGN KEY (`articul_chasov`) REFERENCES `chasi` (`articul_chasov`),
  ADD CONSTRAINT `code_zakaza` FOREIGN KEY (`code_zakaza`) REFERENCES `zakaz` (`code_zakaza`);

--
-- Ограничения внешнего ключа таблицы `nomer_telefona_pokupatelia`
--
ALTER TABLE `nomer_telefona_pokupatelia`
  ADD CONSTRAINT `fk_nomer_telefona_pokupatelia_pokupatel1` FOREIGN KEY (`code_pokupatelia`) REFERENCES `pokupatel` (`code_pokupatelia`);

--
-- Ограничения внешнего ключа таблицы `zakaz`
--
ALTER TABLE `zakaz`
  ADD CONSTRAINT `fk_zakaz_cena_dostavki1` FOREIGN KEY (`tip_dostavki`) REFERENCES `cena_dostavki` (`tip_dostavki`),
  ADD CONSTRAINT `fk_zakaz_dostavka_zakaza_kurierom1` FOREIGN KEY (`code_kuriera`) REFERENCES `dostavka_zakaza_kurierom` (`code_kuriera`),
  ADD CONSTRAINT `fk_zakaz_pokupatel1` FOREIGN KEY (`code_pokupatelia`) REFERENCES `pokupatel` (`code_pokupatelia`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
