-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 02 2023 г., 20:28
-- Версия сервера: 5.7.33
-- Версия PHP: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `solostroy`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Лакокрасочная продукция', 0, NULL, NULL),
(2, 'Деревозащита', 1, NULL, NULL),
(3, 'Лаки', 1, NULL, NULL),
(4, 'Краски', 1, NULL, NULL),
(5, 'Антисептики', 1, NULL, NULL),
(6, 'Грунты', 1, NULL, NULL),
(7, 'Листовые материалы', 0, NULL, NULL),
(8, 'ОСП', 7, NULL, NULL),
(9, 'ДВП', 7, NULL, NULL),
(10, 'ГКЛ', 7, NULL, NULL),
(11, 'Фанера', 7, NULL, NULL),
(12, 'Поликарбонат', 7, NULL, NULL),
(13, 'Сухие строительные смеси', 0, NULL, NULL),
(14, 'Клеи', 13, NULL, NULL),
(15, 'Шпатлевка', 13, NULL, NULL),
(16, 'Штукатурка', 13, NULL, NULL),
(17, 'Ровнитель пола', 13, NULL, NULL),
(18, 'Утеплители', 0, NULL, NULL),
(19, 'Минераловатная плита', 18, NULL, NULL),
(20, 'Пенополистирол', 18, NULL, NULL),
(21, 'Подложка', 18, NULL, NULL),
(34, 'Пенопласт', 18, NULL, NULL),
(35, 'Пена', 18, NULL, NULL),
(37, 'Химия', 0, NULL, NULL),
(38, 'Растворители', 37, NULL, NULL),
(39, 'Специальные средства', 37, NULL, NULL),
(40, 'Крепеж', 0, NULL, NULL),
(41, 'Мебельный щит', 0, NULL, NULL),
(42, 'Вагонка', 0, NULL, NULL),
(43, 'Имитация бруса', 0, NULL, NULL),
(44, 'Доска пола', 0, NULL, NULL),
(45, 'Погонаж', 0, NULL, NULL),
(46, 'Инструменты', 0, NULL, NULL),
(47, 'Другое', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_02_24_042208_create_products_table', 1),
(6, '2023_02_24_072816_create_categories_table', 2),
(7, '2023_02_25_170625_create_units_table', 3),
(8, '2023_02_25_194438_create_slides_table', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `art` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sale` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `image`, `category_id`, `unit_id`, `art`, `sale`, `created_at`, `updated_at`) VALUES
(13, 'Пена монтажная зимняя профессиональная Реалист PRO Red 80л 890мл -18° (12)', 568, 'Однокомпонентная саморасширяющаяся готовая к применению полиуретановая монтажная пена с адаптером для использования с пистолетом в холодных условиях.\r\n\r\nУникальная рецептура пены «REALIST» и высокое качество ее компонентов обеспечивают стабильно большой (до 80л*) выход пены из баллона, превосходную адгезию пены, отличную заполняющую способность и монтажные свойства, быстрое застывание в широком диапазоне температур.\r\n\r\nОбласть применения:\r\nМонтаж и герметизация окон, дверей, подоконников и откосов\r\nЗаполнение швов, пустот, щелей и отверстий\r\nМонтаж и изоляция проводки, технических и инженерных коммуникаций\r\nТепло- и звукоизоляция помещений, климатических камер, систем кондиционирования\r\nСоединение и герметизация строительных конструкций\r\n\r\nСвойства:\r\nТемпература окружающей среды при использовании от -18°C до +35°C\r\nРабочая температура баллона пены от +20°C до +30°C\r\nОбладает отличной адгезией к большинству строительных и отделочных материалов, в том числе ПВХ\r\nЗатвердевшая пена является полутвёрдым эластичным полиуретаном с однородной мелкоячеистой структурой, высокой влаго- и термостойкостью (от −60°C до +90°C)\r\nВыход пены из баллона — до 80 литров*\r\nПервичное расширение пены — около 50%*\r\nКоэффициент теплопроводности — 0,032 Вт/(м·K)', 'public/product_image/0qnnqXU46oKDrmd6zIU0JC8mmktL61fKYYWrozYm.jpg', 35, 1, '43434', 0, '2023-03-02 09:20:20', '2023-03-02 09:32:03'),
(14, 'Горшок пластик Laurel 1,3л D145 с/под Зеленый 221610818/01', 111, 'Горшок линейки Laurel объёмом 1,3л и диаметром 14,5см снабжён поддоном и системой прикорневого полива. Стильная и минималистичная рельефная фактура, напоминающая огранку драгоценного камня, и спокойный базовый цвет помогут гармонично вписать горшок в домашний интерьер. Горшок объёмом 1,3л оптимален для небольших растений и состоит из корпуса и интегрированного поддона, не выступающего за дно горшка. Корпус горшка имеет несколько дренажных отверстий, обеспечивающих качественную вентиляцию корней растений. Каждый поддон снабжён специальной выемкой для слива лишней жидкости, который рекомендуется при уходе за любыми цветами. Горшок производится из долговечного на 100% перерабатываемого полипропилена.', 'public/product_image/NG5bRUSrR7wnZoZdF18agJi52YjguTIdHikE4Pux.jpg', 47, 1, '2333', 0, '2023-03-02 09:22:25', '2023-03-02 09:22:25'),
(15, 'Ключ комбинированный матовый хром, 14 мм, CrV, Matrix', 94, 'Ключ комбинированный Matrix 15110 из стали CrV, 14 мм, с покрытием «матовый хром», пригодится при проведении ремонтных работ дома или в гараже. С его помощью можно осуществлять быстрый монтаж и демонтаж крепежных элементов. Кольцевой зев обеспечивает удобство работы благодаря углу наклона 15 градусов относительно плоскости инструмента.\r\n\r\nПреимущества\r\nКлюч из хромованадиевой стали обладает необходимыми прочностными характеристиками и высокой сопротивляемостью деформации.\r\nРабочая часть ключа прошла закалку до твердости 45 HRC в соответствии с требованиями ГОСТа.\r\nМатовое хромовое покрытие защищает ключ от образования коррозии.\r\nНакидные части с 12-гранным профилем позволяют охватить крепеж по всей поверхности, за счет чего снижается риск деформации его граней.\r\nКлюч удобно хранить и он не потеряется во время транспортировки, т.к. упакован в пластиковый держатель.', 'public/product_image/hBA7dhHTDCNCOrKdZm1aeJ0WdYTip9cnxFLqgfqI.jpg', 46, 1, '4443434', 0, '2023-03-02 09:25:11', '2023-03-02 09:32:16'),
(16, 'Плитка ПВХ напольная замковая SPC Noventis Iceberg Дуб Кальдероне 3008 1200х180х4,0 (10)', 382, 'Бренд    NOVENTIS\r\nКоллекция    ICEBERG\r\nСтрана производства    РОССИЯ\r\nКласс помещения    23/31\r\nТип помещения    спальня, кабинет, гостиная, кухня, коридор, небольшой офис\r\nТолщина    4.00 мм\r\nТолщина транспарента    0.3 мм\r\nВес    7.78 кг/м2\r\nДополнительный защитный лак    да\r\nРазмер планки/плитки    1,2 x 0,18 см\r\nРельеф / Структура поверхности покрытия    стандартное\r\nФаска    4V\r\nТип соединения    замковое\r\nКоличество в упаковке    2.16 2\r\nКласс пожарной опасности (РФ)    КМ2\r\nПожарно-технические характеристики: воспламеняемость (В)    В2\r\nПожарно-технические характеристики: дымообразование (Д)    Д2\r\nПожарно-технические характеристики: токсичность (Т)    Т2\r\nПожарно-технические характеристики: распространение пламени (РП)    РП1\r\nУстойчивость к воздействию мебели на роликовых ножках    средняя\r\nШумопоглощение    20 дБ\r\nАбсолютная остаточная деформация    <0,1 мм\r\nАнтистатические свойства    <2 kV\r\nСрок службы, лет    20\r\n\r\nТип плитки    SPC', 'public/product_image/jQHhyJ8plw0iubP4twZGbQ1iisshw7s9oYWReTr5.jpg', 44, 1, '454554', 1, '2023-03-02 09:31:48', '2023-03-02 09:31:48'),
(17, 'Бита PH2х50мм Е1/4\" кованые Крафтул (10)', 304, 'Биты Kraftool 26122-2-50-10 изготовлены из стали S2, которая отличается особой прочностью, а значит биты подходят для профессионального использования на строительных площадках. \r\n\r\nНаконечник имеет специальную конструкцию - точная геометрия, насечки и закаленные грани, чтобы биты могли выдерживать тяжелые условия работы. Магнитный наконечник позволяет оснастке надежно удерживать крепеж. \r\n\r\nХвостовик 1/4\" Е надежно крепится как в патроне шуруповерта, так и в ручной отвертке, обеспечивая безопасную работу пользователя. \r\n\r\nТехнические характеристики  профессиональных бит для шуруповерта KRAFTOOL 26122-2-50-10        \r\nТип бит       односторонние        \r\nНаконечник        PH2          \r\nДлина, мм       50        \r\nКоличество бит, шт       10        \r\nХвостовик бит       1/4 (тип Е)        \r\nУдарные (торсионные) биты       нет        \r\nОграничитель глубины          нет        \r\nМатериал бит       S2         Torx (TT)       нет        \r\nФорма наконечника бит       PH        \r\nМагнитный наконечник биты       есть        \r\nЦветная маркировка шлица         нет', 'public/product_image/fYT0v4UynzMbu114fqAtxZyexCo9dB5ALHOjh0P8.jpg', 46, 4, '333', 1, '2023-03-02 09:37:17', '2023-03-02 09:37:17'),
(19, 'Пилка для лобзика Matrix по дереву 75х4,0 мм HCS, T101D, 3 шт', 173, 'Полотна по дереву Matrix 78202, T101D, 75 х 4,0 мм, HCS, — комплект оснасток для электролобзика из 3 шт. Предназначены для прямого реза фанеры, древесины, ДСП, ДВП и пластика толщиной от 5 до 50 мм. Имеют стандартный Т-образный хвостовик, совместимый с держателями большинства современных моделей электролобзиков. Полотна используются при проведении профессиональных столярных работ, а также будут полезны в быту.\r\n\r\nПреимущества:\r\n- Пилки из высокоуглеродистой стали У8 характеризуются прочностью и износостойкостью.\r\n- Режущие кромки, закаленные в вакуумной печи до твердости 48-52 HRC, устойчивы к истиранию и обладают высоким ресурсом.\r\n- Зубья с шагом 4 мм обеспечивают быстрый и чистый распил.\r\n- Полотна, изготовленные на узкоспециальном оборудовании с применением новейших технологий, отличаются высоким качеством.\r\n- Упаковки из 3 шт. хватит надолго.\r\n\r\nХарактеристики:\r\n\r\nГруппа товаров - ручной инструмент.\r\nДлина - 100 мм.\r\nШирина - 7,6 мм.\r\nБренд - MATRIX.\r\nКоличество предметов - 3.\r\nМатериал обработки - дерево.\r\nНазначение - электролобзик.\r\nНомер - T101D.\r\nРабочая длина - 75 мм.\r\nСтрана производства - Китай.\r\nШаг - 4 мм.', 'public/product_image/8l1FGp8w4WDz2wv74dGARLyO0bykbseBeTehG7kk.jpg', 46, 1, '3332322', 0, '2023-03-02 09:57:30', '2023-03-02 09:58:44'),
(20, 'Перчатки х/б двойным латексным покрытием ЛЮКС (10)', 37, 'Перчатки трикотажные с двойным латексным обливом ладони. Обладают высокой прочностью, предназначены для защиты от повреждений острыми углами, порезов арматурой, стеклом, не промокают при работе с влажными материалами (идеальны для укладка плитки). Изготовлены из хлопчатобумажной пряжи плотностью 100 текс. Латексный облив помогает обеспечить плотный захват и предотвращает соскальзывание детали. Резинки на манжетах обеспечивают плотное прилегание перчатки к руке. Перчатки белого цвета имеют 13 класс вязки.', 'public/product_image/68a8Utg7Zq997PzyU4G5Em5UyymW6LdA6J5E3Gcm.jpg', 47, 4, '12211', 0, '2023-03-02 09:58:27', '2023-03-02 09:58:27'),
(21, 'Щетка для дрели 60 мм витая латунированная плоская со шпилькой Matrix', 108, 'Плоская щетка для дрели Matrix 74446 диаметром 60 мм, со шпилькой, с щетиной из латунированной витой проволоки, предназначена для бережной очистки металлических, деревянных, пластиковых поверхностей от загрязнений, старых лакокрасочных материалов и ржавчины. Витая проволока диаметром 0,3 мм проникает в труднодоступные места: пазы, углы, изгибы, узкие участки. Насадку применяют для придания поверхности нужной шероховатости или подчеркивания структуры материала. Хвостовик диаметром 6 мм устанавливается в патрон электродрели, способной работать на рекомендуемой скорости 4500 об/мин. Во время работы следует использовать защитные очки, респиратор, наушники, спецодежду и обувь.\r\n\r\nПреимущества\r\nЩетина изготовлена из высококачественной стальной проволоки, что обеспечивает долговечность оснастки.\r\nКорпус имеет цинковое покрытие, а щетина — латунированное, поэтому щетка устойчива к коррозии.\r\nНасадка изготовлена на крупном заводе под строгим технологическим контролем, что гарантирует ее высокое качество.\r\nЩетка пригодится на строительной площадке, на производственном предприятии, а также будет полезна в быту.', 'public/product_image/yDqvcPs4D6ubCt5mNbU0BgpVyHnBtPnsCny8wsRF.jpg', 46, 1, '55544', 0, '2023-03-02 10:00:58', '2023-03-02 10:00:58'),
(22, 'Чайник заварочный керамика 580мл Забавные коты 824-497', 526, 'Чайник заварочный Millimi «Забавные коты» объемом 580 мл имеет современный дизайн, традиционную форму, оригинальный декор и стильное цветовое решение. Черный и белый цвет будут уместно смотреться в интерьере любой кухни. Позитивные котики будут поднимать настроение каждый день, создавая уютную атмосферу во время семейного чаепития. Чайник выполнен из высококачественной прочной керамики, не подвержен сколам и царапинам и сохраняет первоначальный вид на протяжении всего срока эксплуатации.', 'public/product_image/b7evXP3o0gUMEMIjF3c6xm4enUH3lCFheQxjA3oq.jpg', 47, 1, '11111', 1, '2023-03-02 10:07:16', '2023-03-02 10:07:16');

-- --------------------------------------------------------

--
-- Структура таблицы `slides`
--

CREATE TABLE `slides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `slides`
--

INSERT INTO `slides` (`id`, `image`, `created_at`, `updated_at`) VALUES
(8, 'public/slide_image/tJ7UZl6OltGs2CubafE5EzHXhahvVwjGWaWodAyA.png', '2023-02-28 19:51:47', '2023-02-28 19:51:47'),
(9, 'public/slide_image/RmEd6IQJpGeV3mJWA3wW790tOAlKzAHy5RfBBYlc.png', '2023-02-28 19:53:46', '2023-02-28 19:53:46'),
(14, 'public/slide_image/ObgmrJvRtUX5eVSDmly3SnIknddb1NKl0CKL5Ufk.jpg', '2023-03-02 09:38:26', '2023-03-02 09:38:26');

-- --------------------------------------------------------

--
-- Структура таблицы `units`
--

CREATE TABLE `units` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `units`
--

INSERT INTO `units` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, '₽/шт', NULL, NULL),
(2, '₽/рул', NULL, NULL),
(3, '₽/ком', NULL, NULL),
(4, '₽/упа', NULL, NULL),
(5, 'руб/м²', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `login` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'Admin', NULL, '$2y$10$rW.h66eJywNTja1.yAveH.6dGdZvtXBYOS02kYyp79nYg765Bz58S', NULL, '2023-02-28 03:36:54', '2023-02-28 03:36:54');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблицы `slides`
--
ALTER TABLE `slides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `units`
--
ALTER TABLE `units`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
