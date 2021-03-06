-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Апр 28 2015 г., 12:23
-- Версия сервера: 5.6.21
-- Версия PHP: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `cosmodb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(1) NOT NULL,
  `name` varchar(15) NOT NULL,
  `password` varchar(32) NOT NULL,
  `last_log` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`, `last_log`) VALUES
(1, 'cosmo', 'a10f859e6c5207b025a8ca18e061e374', '2015-04-24 15:28:02');

-- --------------------------------------------------------

--
-- Структура таблицы `articletb`
--

CREATE TABLE IF NOT EXISTS `articletb` (
`id` int(11) unsigned NOT NULL,
  `title` varchar(255) NOT NULL,
  `intro_text` varchar(255) NOT NULL,
  `full_text` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `articletb`
--

INSERT INTO `articletb` (`id`, `title`, `intro_text`, `full_text`, `date`) VALUES
(19, 'Какие косметологические процедуры можно проводить летом?', 'В летние месяцы женская кожа подвергается целому ряду воздействий, которые оказывают на нее не лучше', 'В летние месяцы женская кожа подвергается целому ряду воздействий, которые оказывают на нее не лучшее влияние. Из-за повышенной потливости поры расширяются, и их забивает пыль. Солнце пересушивает кожу и волосы. Из-за частого умывания и купания кожа теряет защитные свойства. Конечно, в этот период нам требуется дополнительный уход.\r\nКосметологи считают, что летний уход за кожей должен существенно отличаться от весеннего и зимнего. Так, существует целый ряд процедур, которые в теплое время года проводить не рекомендуется, а некоторые, наоборот, именно летом принесут наибольшую пользу.\r\n \r\nЛетние процедуры для лица\r\n \r\nВ летнее время, коже лица обязательно требуется глубокое, но мягкое очищение. Частички пыли, которые оседают на влажной от пота коже, создают просто идеальные условия для развития болезнетворных микробов. Именно поэтому кожу лица нужно несколько раз в день очищать: утром и вечером нужно пользоваться тоником и молочком для умывания, утром также полезно протирать кожу кубиками замороженных отваров трав. В течение дня кожу можно очищать ватными дисками, смоченными в теплой воде или в отваре трав, матирующими салфетками (для кожи, склонной к жирности). Раз или два в неделю можно делать мягкую чистку лица в салонных условиях или дома.\r\n В летнее время не стоит делать пилинг (срединный и поверхностный).\r\nЛетом коже лица обязательно требуется дополнительное увлажнение. Для легкого ежедневного увлажнения отлично подойдет термальная вода, которой можно пользоваться несколько раз в день. Хороший эффект дают увлажняющие и питательные маски из свежих ягод, овощей и фруктов: из винограда, клубники, смородины, огурца и так далее.\r\nМожно также пару раз в неделю делать увлажняющие альгинатные маски, по рекомендации врача-дерматокосметолога можно провести биоревитализацию гиалуроновой кислотой, мезотерапию, микротоковую терапию.\r\nВ летний период обязательно ежедневно пользоваться увлажняющим кремом с SPF-фильтрами! Крем должен быть легким и хорошо впитываться.', '2015-03-19 02:56:59'),
(22, 'Рыба станет новым источником здоровья кожи', 'В поисках новых источников ингредиентов ученые обратились к отходам рыбного производства.', 'В поисках новых источников ингредиентов ученые обратились к отходам рыбного производства.\r\n\r\nНовая техника обработки биологического материала позволяет получать из отходов рыбного промысла ценные протеины, анти-оксиданты и жиры, применение которых в сегменте средств ухода за кожей открывает перед рынком огромные перспективы. \r\n\r\nРазвитием проекта APROPOS займутся в ЕС: его целью является демонстрация огромных возможностей использования биоматериалов из продуктов, считающихся отходами, и ранее использовавшихся максимум в качестве корма для домашних животных. \r\n\r\nОсновной объем работ осуществляется в Политехническом Каталонском Университете в Испании. \r\n\r\nОсновное направление – избавление материалов с помощью экстрактов и основы из наночастиц от неприятного «рыбного» запаха, а также сочетание полученных веществ с рапсовым маслом, что крайне важно для дальнейшего использования вещества в косметических целях. \r\n\r\nТакже, команда исследователей сумела добиться инкорпорации белков рыбы и их стабилизирования в составе сложных косметических формул. \r\n\r\nУченые изучают возможности полученных активных компонентов в направлении подавления воспалительных процессов в составе противомикробных средств, а также антиоксидантные возможности будущих продуктов. \r\n\r\nПервой компанией, которая собирается включить в свое портфолио продукты на основе новых технологий станет испанская TrueCosmetics, уже ведущая разработку крема для кожи на основе достижений проекта APROPOS. \r\n\r\nС сырьем в случае начала полноценного промышленного производства, проблем не будет: рыбные фермы Норвегии смогут удовлетворить любой объем. Лишь 50% живого веса выращиваемой рыбы идет на продажу в магазины: остальные 50% списывается в процессе производства в отходы. \r\nДля потенциального косметического производства на основе этого источника ингредиентов используются спинные и грудные плавники рыбы, хвост, жабры, головы и даже внутренности.', '2015-03-26 06:25:05'),
(25, 'Тема', 'Вступительный', 'Главная', '2015-04-13 11:02:24'),
(26, 'Tema', 'Intro', 'Main part', '2015-04-25 03:20:56'),
(27, 'Tema', 'Intro', 'Main part', '2015-04-25 03:21:39');

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
`id` int(7) NOT NULL,
  `msg_name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `msg_email` varchar(80) CHARACTER SET utf8 NOT NULL,
  `msg_subject` varchar(50) CHARACTER SET utf8 NOT NULL,
  `msg_message` mediumtext CHARACTER SET utf8 NOT NULL,
  `msg_date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `messages`
--

INSERT INTO `messages` (`id`, `msg_name`, `msg_email`, `msg_subject`, `msg_message`, `msg_date`) VALUES
(51, 'Маратова Нургулvfvь Бахыткызыvvcv', 'nurgul_ba@outlook.com', 'Предложение', 'Здравствуйте! Я продаю помещение по улице Рыскулова, дом 10. 1 этаж! Окна в сторону улицы. Вы можете достроить квартиру до вашего косметологического салона. По всем вопросам звоните мне по номеру 87785547554', '2015-02-01'),
(52, '75', 'zhunissali@mail.ru', 'flvkldfkv', '     df bdf,mv ', '2015-04-08');

-- --------------------------------------------------------

--
-- Структура таблицы `specialists`
--

CREATE TABLE IF NOT EXISTS `specialists` (
`id` int(10) unsigned NOT NULL,
  `specialist_name` varchar(500) NOT NULL,
  `specialist_direction` enum('врач-дерматокосметолог','косметолог','нэйл-стилист') NOT NULL,
  `specialist_description` text NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `specialists`
--

INSERT INTO `specialists` (`id`, `specialist_name`, `specialist_direction`, `specialist_description`) VALUES
(37, 'Цой Виктория Михайловна', 'врач-дерматокосметолог', 'Закончила Ташкентский Медицинский педиатрический институт 1996 году. Первичная специализация по косметологии в 2006 году в Караганде КГМУ Повышение квалификации: — мезотерапия, биоревитализация 2007 год. Караганда. КГМУ; — перманентный макияж г. Алматы; — методика работы с интерд. имплантантами на основе гиалиновой кислоты. г. Москва 2009 год; — технология работы с препаратом Ботокс. г. Москва 2012 год; — мезотерапия «Mezolineproductc» г. Москва 2012 год; — Моделирование Мезонитями. г. Астана 2014; — контурная пластика; — инъекции Диспорт (Франция) 2005; — инъекции нейронокс (Южная Корея) 2013; — нити из полимолочной кислоты (Resorblift. Франция), июнь 2014. Москва; — аппаратная косметология: алмазная микродермабразия (CNC, Германия); лазерное омоложение; лечение акне, пигментации, лазерное удаление сосудов, гемангиом. (аппарат Германия. Mediostar Next); — лазерная шлифовка (фракционный фототермолиз); — плазмолифтинг в косметологии г. Москва 2012; — удаление папиллом (Ascleption аппарат, Германия пилинги Медидерма (Испания производство) Алматы 2012;'),
(38, 'Құрбан Мармеладка', 'косметолог', 'Характеристика');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `articletb`
--
ALTER TABLE `articletb`
 ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `messages`
--
ALTER TABLE `messages`
 ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `specialists`
--
ALTER TABLE `specialists`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(1) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `articletb`
--
ALTER TABLE `articletb`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT для таблицы `messages`
--
ALTER TABLE `messages`
MODIFY `id` int(7) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT для таблицы `specialists`
--
ALTER TABLE `specialists`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
