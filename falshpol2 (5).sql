-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 01, 2023 at 07:05 AM
-- Server version: 8.0.30
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `falshpol2`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_header`
--

CREATE TABLE `about_header` (
  `id` int NOT NULL,
  `text_en` text COLLATE utf8mb4_general_ci NOT NULL,
  `text_ru` text COLLATE utf8mb4_general_ci NOT NULL,
  `text_uz` text COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about_header`
--

INSERT INTO `about_header` (`id`, `text_en`, `text_ru`, `text_uz`, `image`, `created_at`) VALUES
(1, 'We are a professional team of engineers, logisticians and builders working on quality\r\nimplementation of your project in the shortest possible time.\r\n</br>\r\nOur company has been working in the field of supply and installation of raised floors since 2020. We carry out\r\nsupply of raised floor from leading European and Asian manufacturers, and, if necessary,    \r\ninstallation with a guarantee of quality in the shortest possible time. For 2 years of work in the raised floor market, we have accumulated tremendous experience in this area of the construction business.\r\n</br>\r\nRaised floor is an excellent solution for commercial and industrial premises. This is the strongest and most durable option for offices, hotels, educational institutions, shopping centers, restaurants, and even rooms with increased requirements for cleanliness.\r\nWe supply raised floors made of chipboard, GVLV, calcium sulfate and metal raised floors for server rooms and data centers. The height of the raised floor racks varies from 90 mm to 1000 mm, which allows you to reliably hide all technical communications under the floor. Also, in our catalog there is a wide selection of finishing coatings for raised floors.', 'Мы профессиональная команда инженеров, логистов и строителей работающая над качественной\r\nреализацией Вашего проекта в кратчайшие сроки.\r\nНаша компания работает в области поставки и монтажа фальшпола с 2020 года. Мы осуществляем\r\nпоставку фальшпола ведущих Европейских и Азиатских производителей, а при необходимости и\r\nмонтаж с гарантией качества в кратчайшие сроки. За 2 года работы на рынке фальшполов, мы накопили колоссальный опыт в этой сфере строительного бизнеса.\r\nФальшпол – отличное решение для коммерческих и производственных помещений. Это самый прочный и долговечный вариант для отделки офисов, гостиниц, учебных учреждений, торговых центров, ресторанов, и даже помещений с повышенными требованиями к чистоте.\r\nМы поставляем фальшпол из ДСП, ГВЛВ, сульфата кальция и металлические фальшполы для серверных и ЦОДов. Высота стоек фальшпола варьируется от 90 мм до 1000 мм, что позволяет надёжно скрыть все технические коммуникации под полом. Также, в нашем каталоге представлен широкий выбор финишных покрытий для фальшпола', 'Biz sizning loyihangizni eng qisqa vaqt ichida sifatli amalga oshirish ustida ishlayotgan muhandislar, logistiklar va quruvchilar bo’lgan professional jamoamiz.\r\n</br>\r\nBizning kompaniyamiz 2020 yildan beri falshpollarni yetkazib berish va o\'rnatish sohasida ishlamoqda. Biz Yevropa va Osiyoning yetakchi ishlab chiqaruvchilaridan falshpollarni yetkazib beramiz va kerak bo‘lganda ularni eng qisqa vaqt ichida sifat kafolati bilan o‘rnatamiz. Biz 2 yildan buyon falshpollarni o’rnatib kelamiz va ushbu biznes sohasida katta tajriba to\'pladik.\r\nFalshpol savdo va sanoat binolari uchun ajoyib yechimdir. Bu ofislar, mehmonxonalar, o\'quv muassasalari, savdo markazlari, restoranlar va hatto tozalik talablari yuqori bo\'lgan xonalar uchun eng kuchli va bardoshli yechimdir. \r\n</br></br>\r\nBiz server xonalari va ma\'lumotlar markazlari uchun DSP, GVLV, kaltsiy sulfat va metall falshpollarni yetkazib beramiz. Falshpol tokchalarining balandligi 90 mm dan 1000 mm gacha o\'zgarib turadi, bu esa pol ostidagi barcha texnik aloqalarni ishonchli yashirish imkonini beradi. Shuningdek, bizning katalogimizda falshpollar uchun pardozlash qoplamalarining keng tanlovi mavjud. ', 'uploads/home/2023-07-04/64a400ac166bd.jpg', '2023-04-19 15:22:17');

-- --------------------------------------------------------

--
-- Table structure for table `about_info`
--

CREATE TABLE `about_info` (
  `id` int NOT NULL,
  `number` int NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `title_ru` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `title_uz` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about_info`
--

INSERT INTO `about_info` (`id`, `number`, `title_en`, `title_ru`, `title_uz`) VALUES
(1, 50, 'Years on the market', 'Лет на рынке', 'Yillik tajriba'),
(2, 100, 'Satisfied clients', 'Довольных клиентов', 'Ortiq mijozlar'),
(3, 400, 'Completed projects', 'Выполненных проектов', 'Tugallangan loyihalar'),
(4, 50, 'Certified employees', 'Сертифицированных сотрудников', 'Sertifikatga ega xodimlar');

-- --------------------------------------------------------

--
-- Table structure for table `api`
--

CREATE TABLE `api` (
  `id` int NOT NULL,
  `telegram_token` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `telegram_chat_id` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `bitrix_24_api` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `api`
--

INSERT INTO `api` (`id`, `telegram_token`, `telegram_chat_id`, `bitrix_24_api`) VALUES
(1, 'test', 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `date` datetime NOT NULL,
  `ip_address` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `status` int DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`id`, `name`, `phone_number`, `date`, `ip_address`, `status`) VALUES
(4, 'Xaviera Payne', '+998 (48) 789 79 87', '2023-05-08 17:00:24', '127.0.0.1', 1),
(5, 'Xaviera Payne', '+998 (15) 645 64 64', '2023-05-09 09:58:06', '127.0.0.1', 0),
(6, 'Dana Hammond', '+998 (11) 511 08 64', '2023-07-04 03:06:09', '127.0.0.1', 0),
(7, 'August Battle', '+998 (11) 973 67 72', '2023-07-04 05:17:19', '127.0.0.1', 0),
(8, 'Caldwell Lyons', '+998 (15) 798 37 46', '2023-07-06 00:51:18', '127.0.0.1', 0),
(9, 'Caldwell Lyons', '+998 (15) 798 37 46', '2023-07-06 00:59:18', '127.0.0.1', 0),
(10, 'Caldwell Lyons', '+998 (15) 798 37 46', '2023-07-06 00:59:54', '127.0.0.1', 0),
(11, 'Caldwell Lyons', '+998 (15) 798 37 46', '2023-07-06 01:00:11', '127.0.0.1', 0),
(12, 'Caldwell Lyons', '+998 (15) 798 37 46', '2023-07-06 01:02:50', '127.0.0.1', 0),
(13, 'Caldwell Lyons', '+998 (15) 798 37 46', '2023-07-06 01:03:23', '127.0.0.1', 0),
(14, 'Caldwell Lyons', '+998 (15) 798 37 46', '2023-07-06 01:04:21', '127.0.0.1', 0),
(15, 'Penelope Frost', '+998 (15) 051 12 57', '2023-07-06 01:05:01', '127.0.0.1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `building_solutions`
--

CREATE TABLE `building_solutions` (
  `id` int NOT NULL,
  `header_image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `title_en` text COLLATE utf8mb4_general_ci NOT NULL,
  `title_ru` text COLLATE utf8mb4_general_ci NOT NULL,
  `title_uz` text COLLATE utf8mb4_general_ci NOT NULL,
  `text1_en` text COLLATE utf8mb4_general_ci NOT NULL,
  `text1_ru` text COLLATE utf8mb4_general_ci NOT NULL,
  `text1_uz` text COLLATE utf8mb4_general_ci NOT NULL,
  `text2_en` text COLLATE utf8mb4_general_ci NOT NULL,
  `text2_ru` text COLLATE utf8mb4_general_ci NOT NULL,
  `text2_uz` text COLLATE utf8mb4_general_ci NOT NULL,
  `text3_en` text COLLATE utf8mb4_general_ci NOT NULL,
  `text3_ru` text COLLATE utf8mb4_general_ci NOT NULL,
  `text3_uz` text COLLATE utf8mb4_general_ci NOT NULL,
  `image_1` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `image_2` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `building_solutions`
--

INSERT INTO `building_solutions` (`id`, `header_image`, `title_en`, `title_ru`, `title_uz`, `text1_en`, `text1_ru`, `text1_uz`, `text2_en`, `text2_ru`, `text2_uz`, `text3_en`, `text3_ru`, `text3_uz`, `image_1`, `image_2`, `created_at`) VALUES
(1, 'uploads/home/2023-04-25/6446e01d7cfc0.jpg', 'Raised floor for educational institutions', 'Фальшпол для образовательных учреждений ', 'Ta\'lim muassasasi binolari uchun falshpollar', 'The raised floor is used in the interior decoration of educational institutions, where a large number of people are located at the same time. In modern classrooms, computers are used almost everywhere, and there are also laboratories where experiments are carried out with test tubes. That is why the raised floor is indispensable in schools, as it allows you to make classrooms safe and reliable in operation, hide wires and cables.', 'Фальшпол применяется во внутренней отделке учебных заведений, где одновременно находится большое количество людей. В современных учебных классах почти везде используются компьютеры, а также есть лаборатории, где проводятся опыты с пробирками. Именно поэтому фальшпол незаменим в школах, так как позволяет сделать учебные классы безопасными и надежными в эксплуатации, спрятать провода и кабели.', 'Falshpol bir vaqtning o\'zida ko\'p sonli odamlar joylashgan ta\'lim muassasalarining ichki bezaklarida qo\'llaniladi. Zamonaviy sinflarda kompyuterlar deyarli hamma joyda qo\'llaniladi, shuningdek, sinov naychalari bilan tajribalar o\'tkaziladigan laboratoriyalar mavjud. Shuning uchun falshpol maktablarda ajralmas hisoblanadi, chunki bu sizga sinflarni xavfsiz va ishonchli ishlatish, simlar va kabellarni yashirish imkonini beradi.', 'Raised floor slabs are made from various materials. Our company is ready to offer you two types of coatings: from chipboard panels and calcium sulfate. In the production of chipboard boards, we use high-strength material. Chipboard raised flooring is significantly cheaper and more economical than calcium sulfate panels. Raised floor from chipboard panels is used, as a rule, in rooms with a small load. Linoleum, vinyl flooring or carpet tiles, etc. can be used as a top covering.', 'Плиты фальшпола изготавливают из различных материалов. Наша компания готова вам предложить два типа покрытий: из ДСП панелей и сульфата кальция. При производстве плит из ДСП мы используем высокопрочный материал. Фальшпол из ДСП существенно дешевле и экономичнее по сравнению с панелями из сульфата кальция. Фальшпол из панелей ДСП применяется, как правило в помещениях с небольшой нагрузкой. В качестве верхнего покрытия можно использовать линолеум, виниловое покрытие или ковровую плитку и т.д.', 'Falshpol plitalari turli materiallardan tayyorlangan. Bizning kompaniyamiz sizga ikki turdagi qoplamalarni taklif qilishga tayyor: DSP panellari va kaltsiy sulfatdan. DSP plitalarini ishlab chiqarishda biz yuqori quvvatli materialdan foydalanamiz. DSP ko\'tarilgan taxta kaltsiy sulfat panellariga qaraganda ancha arzon va tejamkor. DSP panellaridan ko\'tarilgan pol, qoida tariqasida, kichik yuk bo\'lgan xonalarda qo\'llaniladi. Yuqori qoplama sifatida linoleum, vinil taxta yoki gilam plitalari va boshqalar ishlatilishi mumkin.', 'However, given the stringency in fire safety issues, calcium sulfate raised floors are increasingly being used. It is also used on escape routes, as it has fire-resistant, non-combustible and water-resistant characteristics. Calcium sulfate boards are made and reinforced with aluminum foil or steel sheets.', 'Однако, учитывая строгость в вопросах противопожарной безопасности, все чаще применяется фальшпол из сульфата кальция. Его используют в том числе и на путях эвакуации, так как он обладает огнеупорными, негорючими и водостойкими характеристиками. Плиты из сульфата кальция изготавливаются и усиливаются алюминиевой фольгой или стальными листами.', 'Biroq, yong\'in xavfsizligi masalalarida qat\'iylik hisobga olinsa, kaltsiy sulfat falshpollar tobora ko\'proq foydalanilmoqda. Bundan tashqari, u qochish yo\'llarida ham qo\'llaniladi, chunki u yong\'inga chidamli, yonmaydigan va suvga chidamli xususiyatlarga ega. Kaltsiy sulfat plitalari alyuminiy polga yoki po\'lat plitalar bilan ishlab chiqariladi va mustahkamlanadi. ', 'uploads/home/2023-04-25/6446e01d7d28f.webp', 'uploads/home/2023-04-25/6446e01d7d55b.jpg', '2023-04-24 23:01:33'),
(2, 'uploads/home/2023-05-09/645a04fb9425b.jpg', 'Raised floor for office and residential premises', 'Фальшпол для офисных и жилых помещений ', 'Ofis va turar-joy binolari uchun falshpollar', 'An office space certainly means a cluster of a lot of equipment located in a small space. To fully lay all communications, hide them, raised floors for the office become the best option. The presence of space under the floor (height adjustment is provided) makes it possible to hide wires, fully lay life support systems, also in conjunction with heating, ventilation and air conditioning networks.', 'Офисное помещение непременно означает скопление множества техники, расположившейся в малом пространстве. Чтобы проложить полноценно все коммуникации, скрыть их, оптимальным вариантом становятся фальшполы для офиса. Наличие пространства под полом (обеспечивается регулировка высоты) дает возможность спрятать провода, полноценно проложить системы жизнеобеспечения, также совместно с сетями обогрева, вентиляции и кондиционирования.', 'Ofis maydoni, albatta, kichik maydonda joylashgan ko\'plab jihozlarning klasterini anglatadi. Barcha kommunikatsiyalarni to\'liq yotqizish, ularni yashirish uchun ofis uchun falshpollar eng yaxshi variantga aylanadi. Pol ostida bo\'sh joy mavjudligi (balandlikni sozlash ta\'minlanadi) simlarni yashirish, hayotni qo\'llab-quvvatlash tizimlarini, shuningdek, isitish, shamollatish va konditsioner tarmoqlari bilan birgalikda to\'liq yotqizish imkonini beradi.', 'In office premises, when choosing, preference is given to raised floors made of chipboard. They are characterized by reliability, increased density and fire resistance. To exclude mechanical damage, moisture in the underground space, the panels are supplemented with a plastic edging. The top coat is available in all varieties, which means that you can easily find the style required for the office.', 'В офисных помещениях при выборе преимущество отдается фальшполам из ДСП. Они отличается надежностью, повышенной плотностью и пожаростойкостью. Для исключения механических повреждений, нахождения в подпольном пространстве влаги, панели дополняются пластиковым кантом. Финишное покрытие предоставляется во всем многообразии, значит без труда можно найти требуемый для офиса стиль.', 'Ofis binolarida, tanlashda DSP taxtasidan yasalgan falshpollarga ustunlik beriladi. Ular ishonchliligi, ortib borayotgan zichligi va yong\'inga chidamliligi bilan ajralib turadi. Mexanik shikastlanishni, yer osti bo\'shlig\'idagi namlikni istisno qilish uchun panellar plastik qirralar bilan to\'ldiriladi. Yuqorida barcha navlarda mavjud, ya\'ni siz ofis uchun kerakli uslubni osongina topishingiz mumkin.', 'The raised floor for the office is often made of natural stone, porcelain stoneware, marble coating are also in demand. They suggest a variant of the calcium sulfate panel, because the chipboard sometimes sags due to increased loads.\r\nRegardless of the office raised floor, its presence creates maximum comfort in the operation of technical communications, gives the office spectacularity, aesthetics, elegance and convenience for work.', 'Фальшпол для офиса часто выполняется из натурального камня, востребованы также керамогранит, мраморное покрытие. Они предполагают вариант сульфатно-кальциевой панели, ведь ДСП порой прогибается вследствие увеличенных нагрузок.\r\nВне зависимости офисного фальшпола, его наличие создает максимум комфорта при эксплуатации технических коммуникаций, дарит офису эффектность, эстетичность, элегантность и удобство для работы.\r\n', 'Ofis uchun falshpol ko\'pincha tabiiy toshdan yasalgan, chinni tosh buyumlar, marmar qoplamalar ham talabga ega. Ular kaltsiy sulfat panelining bir variantini taklif qilishadi, chunki DSP ba\'zan yuklarning ko\'payishi tufayli cho\'kadi.\r\nKo\'tarilgan ofis qavatidan qat\'i nazar, uning mavjudligi texnik kommunikatsiyalarning ishlashida maksimal qulaylik yaratadi, ofisga ko\'rinish, estetika, nafislik va ish uchun qulaylik beradi.', 'uploads/home/2023-05-09/645a04fb9444f.jpg', 'uploads/home/2023-05-09/645a04fb94663.jpg', '2023-04-25 13:21:21'),
(3, 'uploads/home/2023-05-09/645a05f5cc075.jpg', 'Raised floor in industrial\r\nobjects', 'Фальшпол в промышленных\r\nобъектах ', 'Sanoat ob\'ektlari uchun falshpollar', 'The raised floor for industrial facilities is distinguished by a reinforced frame - a durable and even floor with increased stability that can withstand heavy loads. This became possible thanks to new design solutions.\r\nEasy installation and installation of the raised floor, do not require special tools, can be made in various variations, including complex room geometry, as well as ramps, stairs', 'Фальшпол для промышленных объектов отличается усиленным каркасом - прочный и ровный пол с повышенной устойчивостью, выдерживающий большие нагрузки. Это стало возможным благодаря новым конструктивным решениям.\r\nПростая установка и монтаж фальшпола, не требуют специального инструмента, может быть выполнен в различных вариациях, включая сложную геометрию помещения, а также пандусы, лестницы ', 'Sanoat ob\'ektlari uchun falshpol mustahkamlangan ramka bilan ajralib turadi - og\'ir yuklarga bardosh bera oladigan mustahkamligi yuqori bo\'lgan bardoshli va tekis poldir. Bu yangi dizayn yechimlaridan.\r\nFalshpolni oson o\'rnatiladi, maxsus asboblarni talab qilmaydi, turli xil variantlarda, shu jumladan xonaning murakkab geometriyasida, shuningdek, zinapoyalarda amalga oshirilishi mumkin. ', 'The free space created under the panels is used to the maximum, making it the best solution for industrial premises:\r\n- no costs for leveling the subfloor;\r\n- lack of welding works;\r\n- maintains the big weight of the equipment;\r\n- the possibility of choosing the height of the space under the panels up to 2000 mm (precise height adjustment);\r\n- high degree of electrical safety of grounding of the structure;\r\n- seismic resistance: up to 9 points on the MSK-64 scale;\r\n- the possibility of quick complete or partial dismantling of the industrial raised floor:', 'Созданное под панелями свободное пространство используется по максимуму, что делает его лучшим решением для промышленных помещений:\r\n- отсутствие затрат на выравнивание чернового пола;\r\n- отсутствие сварочных работ;\r\n- выдерживает большой вес оборудования;\r\n- возможность выбора высоты пространства под панелями вплоть до 2000 мм (точная регулировка по высоте);\r\n- высокая степень электробезопасности заземления конструкции;\r\n- сейсмостойкость: до 9 баллов по шкале MSK-64;\r\n- возможность быстрого полного или частичного демонтажа промышленного фальшпола: ', 'Panellar ostida yaratilgan bo\'sh joy maksimal darajada ishlatiladi, bu uni sanoat binolari uchun eng yaxshi echimga aylantiradi:\r\n- Polni tekislash uchun hech qanday xarajatlar yo\'q;\r\n- Payvandlash ishlarining yo\'qligi;\r\n- Uskunaning katta vaznini saqlaydi;\r\n- Panellar ostidagi bo\'shliqning balandligini 2000 mm gacha tanlash imkoniyati (balandlikni aniq sozlash);\r\n- Konstruktsiyani topraklamaning yuqori darajadagi elektr xavfsizligi;\r\n- Seysmik qarshilik: MSK-64 shkalasi bo\'yicha 9 ballgacha;\r\n- Sanoat ko\'tarilgan polni tezda to\'liq yoki qisman demontaj qilish imkoniyati: ', '1) the ability to replace the rack anywhere on the floor without dismantling and dismantling the entire structure;\r\n2) convenient and quick access to any section of engineering networks, electrical wiring, pipelines;\r\nPorcelain stoneware or anti-static PVC coating can be installed as a top coating. PVC coating has moisture-proof properties, pleasant appearance, withstands temperature extremes.', '1) возможность заменить стойку в любом месте пола без разбора и демонтажа всей конструкции;\r\n</br>\r\n2) удобный и быстрый доступ к любому участку инженерных сетей, электропроводки, трубопровода;\r\nВ качестве верхнего покрытия может быть установлен керамогранит или антистатическое ПВХ-покрытие. ПВХ покрытие обладает влагонепроницаемыми свойствами, приятным внешним видом, выдерживает перепады температур.', '1) Butun tuzilmani demontaj qilmasdan taglikni polning istalgan joyiga almashtirish imkoniyati;\r\n</br>\r\n2) Muhandislik tarmoqlarining istalgan uchastkasiga, elektr simlariga, quvurlarga qulay va tezkor kirish;\r\nYuqori qoplama sifatida chinni tosh buyumlar yoki antistatik PVX qoplamasi o\'rnatilishi mumkin. PVX qoplamasi namlikka chidamli xususiyatlarga ega, yoqimli ko\'rinishga ega, haroratning haddan tashqari ta\'siriga bardosh beradi.', 'uploads/home/2023-05-09/645a05f5cc247.jpg', 'uploads/home/2023-05-09/645a05f5cc46e.jpg', '2023-05-09 13:36:05'),
(4, 'uploads/home/2023-05-09/645a07214dbcc.jpg', 'Raised floor in the sphere\r\nhealth care', 'Фальшпол в сфере\r\nздравоохранения ', 'Sog\'liqni saqlash binosi uchun falshpollar', 'When developing a project where a raised floor for clean rooms is used, all characteristics must be taken into account: the load on the floor, the ventilation performance, the electrostatic properties of the surface, and others. The raised floors we install meet the most stringent technical requirements for such structures. We install coatings to the highest standards of precision and accuracy.\r\n</br>\r\nYears of experience guarantees the perfect execution of orders of any complexity. We offer personal projects and design solutions.', 'При разработке проекта где используется фальшпол для чистых помещений должны учитываться все характеристики: нагрузка на пол, производительность вентиляции, электростатические свойства поверхности и другие. Устанавливаемые нами фальшполы удовлетворяют самым строгим техническим требованиям для таких конструкций. Мы монтируем покрытия, придерживаясь высоких стандартов точности и аккуратности.\r\n\r\nМноголетний опыт работы гарантирует идеальное выполнение заказа любой сложности. Предлагаем персональные проекты и дизайнерские решения. ', 'Toza xonalar uchun falshpol ishlatiladigan loyihani ishlab chiqishda barcha xususiyatlarni hisobga olish kerak: yerga yuk, shamollatish ko\'rsatkichlari, sirtning elektrostatik xususiyatlari va boshqalar. Biz o\'rnatadigan falshpollar bunday tuzilmalar uchun eng qattiq texnik talablarga javob beradi. Biz qoplamalarni eng yuqori aniqlik standartlariga o\'rnatamiz.\r\n</br>\r\nKo\'p yillik tajriba har qanday murakkablikdagi buyurtmalarning mukammal bajarilishini kafolatlaydi. Biz shaxsiy loyihalar va dizayn yechimlarini taklif qilamiz. ', '<h2>We offer a wide range of raised floors for clean rooms:</h2>\r\n- Aluminum raised floor;\r\n- Metal constructions;\r\n- Raised floor made of gypsum;\r\n- Raised floor made of chipboard.\r\n\r\nAll presented samples in our company have a finish coating. Most often it is antistatic PVC, chrome or conductive PVC. The range also includes a raised floor made of ventilated panels (perforation up to 80%) and a raised floor without perforation (solid raised floor panels).', '<h2>Мы предлагает большой ассортимент фальшполов для чистых комнат:</h2>\r\n- Алюминиевый фальшпол;\r\n- Конструкции из металла;\r\n- Фальшпол из гипса;\r\n- Фальшпол из ДСП.\r\n\r\nВсе представленные образцы в нашей компании имеют финишное покрытие. Чаще всего это антистатический ПВХ, хром или ПВХ токопроводящий. Также ассортимент включает в себя фальшпол из вентилируемых панелей (перфорация до 80%) и фальшпол без перфорации (сплошные панели фальшпола).', '<h2>Biz toza xonalar uchun falshpollarning keng assortimentini taklif etamiz:</h2>\r\n- Alyuminiy \r\n- DSP\r\n- Vent panel\r\n- Shishali\r\n- Sulfat\r\n- Bir qismli\r\n\r\nKompaniyamizda taqdim etilgan barcha namunalar tugatish qoplamasiga ega. Ko\'pincha bu antistatik PVX, xrom yoki Supero\'tkazuvchilar PVX. Assortiment shuningdek, shamollatiladigan panellardan (80% gacha teshilgan) falshpolni va teshilishsiz ko\'tarilgan polni (qattiq ko\'tarilgan taxta panellari) o\'z ichiga oladi. ', '</br>', ' </br>', '</br>', 'uploads/home/2023-05-09/645a07214deb7.png', 'uploads/home/2023-05-09/645a07214e113.png', '2023-05-09 13:41:05'),
(5, 'uploads/home/2023-05-09/645a0835ebae1.jpg', 'Raised floor in the sphere\r\ntrade and industry', 'Фальшпол в сфере\r\nторговли и индустрии ', 'Savdo va sanoatda binolari uchun falshpollar', 'Raised floor for shopping malls, hotels, cinema halls, restaurants and cafes - an excellent turnkey solution for the floor in these establishments.\r\nFor example, for summer cafes it is convenient to quickly assemble a reliable and beautiful floor, while bringing hidden electrical wiring under it, you do not need to buy or order a new one every year, it is convenient to store until next summer.', 'Фальшпол для ТРЦ, гостиниц, кинозалов, ресторанов и кафе - отличное готовое решение для пола в данных заведениях.\r\nНапример, для летних кафе удобно быстро собрать надёжный и красивый пол, при этом подвести под ним скрытую электропроводку, не надо каждый год покупать или заказывать новый, удобно хранить до следующего лета. ', 'Savdo markazlari, mehmonxonalar, kinozallar, restoranlar va kafelar uchun falshpollar - bu korxonalar uchun ajoyib yechim.\r\n</br>\r\nMisol uchun, yozgi kafelar uchun ishonchli va chiroyli polni tezda yig\'ish juda oson, uning ostiga yashirin elektr simlarini olib kelishda siz har yili yangisini sotib olishingiz yoki buyurtma qilishingiz shart emas, keying fasl ham ishlatishingiz mumkin ', 'To do this, there is a large assortment of raised floors with a finish that is easy to match with a noble tree, beautiful colors for every taste, or made entirely of glass.\r\nSuch floors can withstand a lot of weight, are durable, maintainable, easy to install, create a pleasant look of the room, which will certainly be appreciated by the owners.', 'Для этого существует большой ассортимент фальшпола с финишным покрытием, которое легко подобрать под благородное дерево, красивой расцветки на любой вкус или сделать полностью стеклянным.\r\nТакие полы выдерживают большой вес, долговечны, обслуживаемые, лёгкие в монтаже, создают приятный вид помещения, что безусловно оценят владельцы. ', 'Buning uchun olijanob daraxtga mos keladigan, har qanday lazzat uchun chiroyli ranglar yoki butunlay shishadan yasalgan qoplamali baland qavatlarning katta assortimenti mavjud. \r\n</br>\r\nBunday pollar juda ko\'p og\'irliklarga bardosh bera oladi, bardoshli, bardoshli, o\'rnatish oson, xonaning yoqimli ko\'rinishini yaratadi, bu albatta egalari tomonidan qadrlanadi.', '</br>', '</br>', '</br>', 'uploads/home/2023-05-09/645a0835ebcbb.png', 'uploads/home/2023-05-09/645a0835ebed5.png', '2023-05-09 13:45:41'),
(6, 'uploads/home/2023-05-09/645a08ea4d65c.jpg', 'Raised floor for\r\nserver', 'Фальшпол для\r\nсерверных', 'Server xonalari uchun falshpollar', 'This type of raised floor is only supplied with a top coat. It is usually antistatic. Often, the raised floor system is required by specification to be electrically conductive. To do this, a conductive PVC coating is glued onto the panel; all accessories involved in the current diversion circuit: protective edge, gasket, terminal, must be conductive. The current is diverted by means of grounding racks. The room must be grounded at least one rack for every 20 m²', 'Данный тип фальшпола поставляется только с финишным покрытием. Обычно оно антистатическое. Часто по техническим условиям система фальшпола должна быть токопроводящей. Для этого на панель наклеивается токопроводящее ПВХ покрытие; все аксессуары участвующие в цепи отведения тока: защитный кант, прокладка, клемма, должны быть токопроводящими. Ток отводится при помощи заземления стоек. В помещении должно быть заземлено не менее одной стойки на каждые 20 м²', 'Ushbu turdagi falshpol faqat yuqori qoplama bilan ta\'minlanadi. Odatda antistatikdir. Ko\'pincha, falshpol tizimi elektr o\'tkazuvchanligi uchun spetsifikatsiyaga muvofiq talab qilinadi. Buning uchun panelga Supero\'tkazuvchilar PVX qoplamasi yopishtirilgan; joriy burilish pallasida ishtirok etadigan barcha aksessuarlar: himoya qirrasi, qistirma, terminal, o\'tkazuvchan bo\'lishi kerak. Oqim yerga tutashtirgichlar yordamida boshqariladi. Xona har 20 m² uchun kamida bitta raftani yerga ulash kerak bo’ladi.', 'Raised floors for data centers and server rooms are most often produced with an antistatic PVC coating. Industrial raised floors - panels with a thickness of 36mm, 38mm, or 40mm, standard dimensions are 600x600, but there are other panel sizes. Calcium sulphate panels are perfect for technical rooms. They are completely non-flammable and can be flame retardant for up to 60 minutes. Sulphate boards withstand heavy loads.\r\n</br>\r\nIn the technical raised floor system, stringers and C-profiles can be found. The former are intended for the horizontal stability of the system and partly to increase the bearing capacity. C-profiles, as a rule, are used to increase the bearing capacity of the system, it is convenient to mount heavy equipment on them. The use of stringers or C-profiles is necessary when the height of the clean raised floor system is from 500mm.', 'Фальшпол для ЦОДов и серверной чаще всего производится с антистатическим ПВХ покрытием. Промышленные фальшполы - панели толщиной 36мм, 38мм, или 40мм, стандартные размеры 600х600, но существуют и другие типоразмеры панелей. Для технических помещений прекрасно подходят сульфатно-кальциевые панели. Они совершенно негорючие и могут быть огнестойкими до 60 минут. Сульфатные плиты выдерживают большие нагрузки.\r\n</br>\r\nВ системе технического фальшпола можно встретить стрингеры и С-профили. Первые предназначены для горизонтальной стабильности системы и отчасти для увеличения несущей способности. С-профили, как правило, применяются для увеличения несущей способности системы, на них удобно монтировать тяжелое оборудование. Применение стрингеров или С-профилей необходимо при высоте системы чистого фальшпола от 500мм.', 'Ma\'lumotlar markazlari va server xonalari uchun falshpollar ko\'pincha antistatik PVX qoplama bilan ishlab chiqariladi. Falshpollar - qalinligi 36 mm, 38 mm yoki 40 mm bo\'lgan panellar, standart o\'lchamlari 600x600, ammo boshqa panel o\'lchamlari mavjud. Kaltsiy sulfat panellari texnik xonalar uchun juda mos keladi. Ular butunlay yonmaydi va 60 daqiqagacha olovga chidamli bo\'lishi mumkin. Sulfat plitalari og\'ir yuklarga bardosh beradi.\r\n</br>\r\nTexnik ko\'tarilgan qavat tizimida stringerlar va C-profillarni topish mumkin. Birinchisi tizimning gorizontal barqarorligi va qisman yuk ko\'tarish qobiliyatini oshirish uchun mo\'ljallangan. C-profillari, qoida tariqasida, tizimning yuk ko\'tarish qobiliyatini oshirish uchun ishlatiladi, ularga og\'ir uskunalarni o\'rnatish qulay. Toza ko\'tarilgan pol tizimining balandligi 500 mm dan bo\'lsa, stringerlar yoki C-profillardan foydalanish kerak.', 'Raised floor posts intended for technical rooms are higher than those for office floors. They can be up to 2000mm. Perforated metal ventilation panels are found in data centers, server rooms and some other technical rooms. They are required to cool the equipment. Regardless of the office raised floor, its presence creates maximum comfort in the operation of technical communications, gives the office spectacularity, aesthetics, elegance and convenience for work.', 'Стойки фальшпола предназначенного для технических помещений выше чем для офисного пола. Они могут быть до 2000мм. В ЦОДах, серверных комнатах и некоторых других технических помещениях встречаются перфорированные металлические вентиляционные панели. Они требуются для охлаждения оборудования. Вне зависимости офисного фальшпола, его наличие создает максимум комфорта при эксплуатации технических коммуникаций, дарит офису эффектность, эстетичность, элегантность и удобство для работы.', 'Texnik xonalar uchun mo\'ljallangan falshpol ustunlari ofis qavatlariga qaraganda balandroq. Ular 2000 mm gacha bo\'lishi mumkin. Teshikli metall shamollatish panellari ma\'lumotlar markazlarida, server xonalarida va boshqa ba\'zi texnik xonalarda joylashgan. Ular uskunani sovutish uchun talab qilinadi. Ko\'tarilgan ofis qavatidan qat\'i nazar, uning mavjudligi texnik kommunikatsiyalarning ishlashida maksimal qulaylik yaratadi, ofisga ko\'rinish, estetika, nafislik va ish uchun qulaylik beradi.', 'uploads/home/2023-05-09/645a08ea4da1f.jpg', 'uploads/home/2023-05-09/645a08ea4de90.jpg', '2023-05-09 13:48:42');

-- --------------------------------------------------------

--
-- Table structure for table `falshpol_type_show`
--

CREATE TABLE `falshpol_type_show` (
  `id` int NOT NULL,
  `header_image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `head_title_en` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `head_title_ru` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `head_title_uz` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `head_text_en` text COLLATE utf8mb4_general_ci NOT NULL,
  `head_text_ru` text COLLATE utf8mb4_general_ci NOT NULL,
  `head_text_uz` text COLLATE utf8mb4_general_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `title_ru` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `title_uz` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `text_en` text COLLATE utf8mb4_general_ci NOT NULL,
  `text_ru` text COLLATE utf8mb4_general_ci NOT NULL,
  `text_uz` text COLLATE utf8mb4_general_ci NOT NULL,
  `full_text_en` text COLLATE utf8mb4_general_ci NOT NULL,
  `full_text_ru` text COLLATE utf8mb4_general_ci NOT NULL,
  `full_text_uz` text COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `falshpol_type_show`
--

INSERT INTO `falshpol_type_show` (`id`, `header_image`, `head_title_en`, `head_title_ru`, `head_title_uz`, `head_text_en`, `head_text_ru`, `head_text_uz`, `title_en`, `title_ru`, `title_uz`, `text_en`, `text_ru`, `text_uz`, `full_text_en`, `full_text_ru`, `full_text_uz`, `image`, `created_at`) VALUES
(1, 'uploads/home/2023-05-09/6459eb955b494.jpg', 'Оптимальное сочетание цена качество', 'Оптимальное сочетание цена качество', 'Narx va sifatning optimal kombinatsiyasi', 'Ideal for offices and small server rooms.', 'Идеально подходит для офисных помещений и небольших серверных. ', 'Ofislar va kichik server xonalari uchun ideal.', 'DSP', 'ДСП', 'DSP', 'Chipboard raised floors have many useful qualities that make this material one of the most popular on the market.\r\n</br>\r\n</br>\r\nSuch a coating is often used for finishing small and large offices, public and industrial premises.', 'У фальшпола из ДСП есть много полезных качеств, которые делают этот материал одним из самых популярных на рынке.\r\n</br>\r\n</br>\r\nТакое покрытие часто используется для отделки малых и больших офисов, общественных и производственных помещений.', 'DSP falshpollar juda ko\'p foydali fazilatlarga ega bo\'lib, bu material bozorda eng mashhurlaridan biriga aylangan.\r\n</br>\r\n</br>\r\nBunday qoplama ko\'pincha kichik va katta ofislarni, jamoat va sanoat binolarini uchun ishlatiladi. ', '<p><strong><span style=\"font-size:18px\">Chipboard raised floor slabs have earned their popularity due to their special characteristics:</span></strong></p>\r\n\r\n<p>◉ Raised wood floor is made of high density chipboard for high load-bearing capacity.</p>\r\n\r\n<p>◉ Additionally, the plate can be reinforced with a metal sheet on the underside. For this, steel with a thickness of 0.5 mm is used. Due to this, the bearing capacity can reach 1500 kg/m2.</p>\r\n\r\n<p>◉ Light weight. Facilitates delivery and installation. This is especially true if the installation is supposed to be on high floors.</p>\r\n\r\n<p>Sometimes cost is the deciding factor. With the price of a raised floor made of chipboard, everything is in order - it is the lowest relative to plates made of other materials.</p>\r\n\r\n<h2><br />\r\n<strong>Important Features</strong></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>◉ Wooden raised floor can be used in rooms with high requirements for fire hazard. For example, a plate closed on the underside with a metal sheet, finished with a PVC edge and covered with special foil on top, corresponds to the fire hazard class KM2.</p>\r\n\r\n<h2><br />\r\n<strong>A variety of finishing materials are suitable for plates:</strong></h2>\r\n\r\n<p>1.Standard linoleum or LVT tiles.</p>\r\n\r\n<p>2.Natural wood parquet or laminate.</p>\r\n\r\n<p>3.Carpet tiles or rolled carpet.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>With its merits, the raised floor made of chipboard has the advantages characteristic of this type of coating as a whole. It provides easy access to the underground space, can be installed in a wide range of heights, is simple and inexpensive to install, and is produced in a large number of designs. In our catalog you will find a wide variety of models.</p>\r\n', '<h2><strong>Плиты фальшпола из ДСП заслужили свою популярность благодаря особенным характеристикам:</strong></h2>\r\n\r\n<p>◉ Деревянный фальшпол изготавливается из древесно-стружечной плиты высокой плотности, обеспечивающей высокую несущую способность.</p>\r\n\r\n<p>◉ Дополнительно плита может быть усилена металлическим листом с нижней стороны. Для этого используется сталь толщиной 0,5 мм. Благодаря этому несущая способность может достигать 1500 кг/м2.</p>\r\n\r\n<p>◉ Небольшой вес. Облегчает доставку и монтаж. Это особенно актуально, если установка предполагается на высоких этажах.</p>\r\n\r\n<p><br />\r\nИногда решающим фактором при выборе является стоимость. С ценой у фальшпола из ДСП всё в порядке &mdash; она является самой низкой относительно плит из других материалов.<br />\r\n&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><strong>Важные характеристики&nbsp;</strong></h2>\r\n\r\n<p>◉ Деревянный фальшпол можно применять в помещениях с высокими требованиями к пожароопасности. Например, плита, закрытая с нижней стороны металлическим листом, по краям обработанная кромкой из ПВХ и покрытая сверху специальной фольгой, соответствует классу пожарной опасности КМ2.<br />\r\n&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><strong>Для плит подходит множество финишных отделочных материалов:&nbsp;</strong></h2>\r\n\r\n<p>1. Стандартный линолеум или LVT-плитка.</p>\r\n\r\n<p>&nbsp;2. Паркет из натуральной древесины или ламинат.</p>\r\n\r\n<p>&nbsp;3. Ковровая плитка или рулонный ковролин.</p>\r\n\r\n<p><br />\r\nПри своих достоинствах фальшпол из ДСП обладает достоинствами, характерными для этого типа покрытия в целом. Обеспечивается лёгкий доступ в подпольное пространство, может устанавливаться в широком диапазоне высот, прост и недорог в монтаже, изготавливается в большом количестве дизайнов. В нашем каталоге вы найдёте самые разнообразные модели.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '<div class=\"col-list\" style=\"box-sizing: border-box; width: 1140px; color: rgb(0, 0, 0); font-family: &quot;Be Vietnam Pro&quot;, sans-serif; font-size: 16px;\">\r\n<p><span style=\"font-size:20px\"><strong>DSD falshpol o&#39;ziga xos xususiyatlari tufayli mashhurlikka erishgan:</strong></span></p>\r\n\r\n<p><span style=\"font-size:18px\">◉ Ko&#39;tarilgan yog&#39;och pol yuqori yuk ko&#39;tarish qobiliyati uchun yuqori zichlikdagi suntadan qilingan.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">◉ Bundan tashqari, plastinka tagida metall qatlam bilan mustahkamlanishi mumkin. Buning uchun qalinligi 0,5 mm bo&#39;lgan po&#39;latdan foydalaniladi. Shu sababli, yuk ko&#39;tarish quvvati 1500 kg / m2 ga yetishi mumkin.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">◉ Engil vazn. Yetkazib berish va o&#39;rnatishni osonlashtiradi. Bu, ayniqsa, o&#39;rnatish yuqori qavatlarga to&#39;g&#39;ri keladi.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">Ba&#39;zida xarajat hal qiluvchi omil hisoblanadi. DSPdan yasalgan falshpolning narxi bilan hamma narsa tartibda - bu boshqa materiallardan tayyorlangan plitalarga nisbatan arzonroq tushadi.</span></p>\r\n\r\n<p style=\"margin-left:40px\">&nbsp;</p>\r\n</div>\r\n\r\n<div class=\"col-list\" style=\"box-sizing: border-box; width: 1140px; color: rgb(0, 0, 0); font-family: &quot;Be Vietnam Pro&quot;, sans-serif; font-size: 16px;\">\r\n<p><span style=\"font-size:20px\"><strong>Muhim xususiyatlar</strong></span></p>\r\n\r\n<p><span style=\"font-size:18px\">◉ Yog&#39;och kfalshpol yong&#39;in xavfi yuqori bo&#39;lgan xonalarda ishlatilishi mumkin. Misol uchun, pastki tomondan metall qatlam bilan yopilgan, PVX qirrasi bilan qoplangan va tepada maxsus folga bilan qoplangan plastinka KM2 yong&#39;in xavfi sinfiga mos keladi.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n</div>\r\n\r\n<div class=\"col-list\" style=\"box-sizing: border-box; width: 1140px; color: rgb(0, 0, 0); font-family: &quot;Be Vietnam Pro&quot;, sans-serif; font-size: 16px;\">\r\n<p><span style=\"font-size:20px\"><strong>Plitalar uchun turli xil pardozlash materiallariga mos keladi:</strong></span></p>\r\n\r\n<p><span style=\"font-size:18px\">1. Standart linoleum yoki LVT plitalari.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">2. Tabiiy yog&#39;och parket yoki laminat.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">3. Gilam plitalari yoki rulonli gilam.</span></p>\r\n\r\n<p style=\"margin-left:40px\">&nbsp;</p>\r\n\r\n<p><span style=\"font-size:18px\">O&#39;zining afzalliklari bilan, dsp dan yasalgan falshpol, umuman olganda, ushbu turdagi qoplamaga xos bo&#39;lgan afzalliklarga ega. U yer ostiga oson kirishni ta&#39;minlaydi, keng balandlikda o&#39;rnatilishi mumkin, o&#39;rnatish oddiy va arzon, ko&#39;p sonli dizaynlarda ishlab chiqariladi. Bizning katalogimizda turli xildagi modellarni topishingiz mumkin.</span></p>\r\n</div>\r\n', 'uploads/home/2023-05-09/6459eb955b257.png', '2023-04-20 09:34:52'),
(3, 'uploads/home/2023-05-09/6459f82b6d3be.jpg', 'Non-flammable durable raised floor', 'Негорючий долговечный фальшпол', 'Yonuvchan bo\'lmagan bardoshli falshpol', 'The most modern and reliable type of detachable raised floor. Made from cellulose reinforced gypsum.', 'Наиболее современный и надежный тип разъемного фальшпола. Производится из гипса армированного целлюлозой.', 'Eng zamonaviy va ishonchli turdagi olinadigan falshpol. Tsellyuloza bilan mustahkamlangan gipsdan tayyorlangan.', 'Sulfate', 'Сульфат', 'Kalsiy sulfat', 'Calcium sulfate raised flooring is one of the most popular types of flooring. This type of raised floor is highly demanded due to its characteristics.', 'Фальшпол из сульфата кальция — это одна из самых популярных разновидностей покрытия. Этот тип фальшпола высоко востребован благодаря своим характеристикам', 'Kaltsiy sulfat ko\'tarilgan taxta eng mashhur taxta turlaridan biridir. Ushbu turdagi ko\'tarilgan zamin o\'zining xususiyatlari tufayli yuqori talabga ega.', '<p>Benefits of Calcium Sulfate Raised Floor<br />\r\nThey have high strength, so they can be installed in rooms with high traffic of people.</p>\r\n\r\n<p>In the case of a non-separable design, inspection hatches can be installed at any point. The tongue-and-groove joint reinforces the joints of the plates, so heavy equipment can be installed on them. Tactile seams are not felt.</p>\r\n\r\n<p>Installation does not require serious preparation of a rough screed.</p>\r\n\r\n<p>The sound insulation system of the panel (Calcium Sulphate) absorbs noise up to 64 dB.</p>\r\n\r\n<p>It is possible to install any communications under the raised floors (electrical, plumbing, weak point, fire extinguishing system, etc.).</p>\r\n\r\n<p>Calcium sulphate raised floors consist of gypsum and cellulose. This is a safe material for health, so it is allowed to be laid in children&#39;s educational institutions.</p>\r\n\r\n<p>Raised floor with PVC or porcelain stoneware coating is easy to maintain. It can be washed with any detergent.</p>\r\n\r\n<p>Collapsible floors can be dismantled locally, there is no need to change the entire structure.</p>\r\n\r\n<p><br />\r\nWhere applicable</p>\r\n\r\n<p><br />\r\nRaised floor slabs made of calcium sulfate are characterized by high density and high bearing capacity, so they are used:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>In large open-plan offices where massive equipment is expected to be installed.</p>\r\n\r\n<p>&nbsp; In server rooms and data centers.</p>\r\n\r\n<p>&nbsp; In high traffic areas. For example, in shopping, business centers and office buildings.</p>\r\n\r\n<p>&nbsp; In industrial premises.</p>\r\n\r\n<p>It is possible to use calcium sulfate plates in such conditions due to their high strength. For example, panels from Jansen comply with deflection class A (up to 2.5 mm), and the fracture load reaches up to 1200 kg per point.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>The main features of the material</p>\r\n\r\n<p>Calcium sulfate is made from a mixture of gypsum and cellulose fibers. Panels from different manufacturers may vary in density, which depends on the properties of these materials. Gypsum and cellulose are environmentally friendly materials that do not pose a health hazard and are durable</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Distinctive features:</p>\r\n\r\n<p>The thickness of the panels can vary from 28mm to 40mm.</p>\r\n\r\n<p>The standard size is 600 x 600 mm.</p>\r\n\r\n<p>The panel can be reinforced on the underside with a metal sheet 0.5 mm thick.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><br />\r\nA variety of finishes can be used with calcium sulfate raised floor slabs: carpet tiles or carpet, LVT tiles or laminate, parquet or linoleum. Porcelain stoneware installation is also allowed, it is installed at the factory and is delivered assembled.</p>\r\n\r\n<p><br />\r\nCharacteristics<br />\r\nIt is the technical parameters that are the main argument in favor of raised floors made of calcium sulfate. Here are the main advantages:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Fire hazard class. Thanks to this, the plates can be used where other materials are not suitable, but access to the underground space is required.</p>\r\n\r\n<p>&nbsp; The bearing capacity can be from 1500 to 3500 kg/m2. It depends on the thickness and whether a metal sheet is used on the underside.</p>\r\n\r\n<p>Antistatic effect. Plates do not allow the occurrence of electrical discharges on the surface. The edges are treated with PVC tape with an antistatic effect. Thanks to this, the coating can be used in switchboard or server rooms.</p>\r\n\r\n<p><br />\r\nAmong other useful properties, sound insulation can be noted. Raised floor panels made of calcium sulphate do not transmit sound well on their own, and in combination with a carpet or carpet tile finish, you can achieve the most comfortable acoustic environment in the room.</p>\r\n', '<div class=\"row\">\r\n<div class=\"col-md-6 image-wrapper\"><img alt=\"\" class=\"animate__animated animate__delay-1s animate__fadeInUp lazyload w-100\" src=\"/web/upload/files/icon-008-435x301.jpg\" /></div>\r\n\r\n<div class=\"col-md-6\">\r\n<div class=\"text-wrapper\">\r\n<p><span style=\"font-size:2rem\"><strong>Преимущества фальшпола из Сульфата Кальция</strong></span></p>\r\n\r\n<ol>\r\n	<li>Имеют высокую прочность, благодаря чему могут устанавливаться в комнатах с высоким трафиком людей.<br />\r\n	&nbsp;</li>\r\n	<li>В случае неразборной конструкции, ревизионные люки могут быть установлены в любой точке. Пазогребневое соединение усиливает стыки плит, поэтому на них допускается устанавливать тяжелое оборудование. Тактильно швы не ощущаются.<br />\r\n	&nbsp;</li>\r\n	<li>Установка не требует серьезной подготовки черновой стяжки.<br />\r\n	&nbsp;</li>\r\n	<li>Система звукоизоляции панели (Сульфат-Кальция) поглощает шумы до 64 дБ.<br />\r\n	&nbsp;</li>\r\n	<li>Под фальшполами возможно устанавливать любые коммуникации (электрика, сантехника, слабо-точка, систему пожаротушения и др.).<br />\r\n	&nbsp;</li>\r\n	<li>Сульфат-Кальциевые фальшполы состоят из гипса и целлюлозы. Это - безопасный материал для здоровья, поэтому его допускается укладывать в детских образовательных учреждениях.<br />\r\n	&nbsp;</li>\r\n	<li>Фальшпол с покрытием из ПВХ или керамогранита прост в обслуживании. Его можно мыть любыми моющими средствами.<br />\r\n	&nbsp;</li>\r\n	<li>Разборные полы возможно демонтировать локально, нет необходимости менять всю конструкцию целиком.<br />\r\n	<br />\r\n	&nbsp;</li>\r\n</ol>\r\n</div>\r\n</div>\r\n\r\n<p><strong><span style=\"font-size:20px\">Где применяется&nbsp;</span></strong></p>\r\n\r\n<p>Плиты фальшпола из сульфата кальция отличаются высокой плотностью и большой несущей способностью, поэтому их используют:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li>В крупных офисах с открытой планировкой, в которых предполагается установка массивного оборудования.<br />\r\n	&nbsp;</li>\r\n	<li>&nbsp;В серверных помещениях и ЦОДах.&nbsp;&nbsp;<br />\r\n	&nbsp;</li>\r\n	<li>&nbsp;В помещениях с высокой проходимостью. Например, в торговых, деловых центрах и административных зданиях.<br />\r\n	&nbsp;</li>\r\n	<li>&nbsp;В производственных помещениях.<br />\r\n	&nbsp;</li>\r\n</ol>\r\n\r\n<p style=\"margin-left:40px\">Использовать плиты сульфата кальция в таких условиях возможно благодаря высокой прочности. Например, панели от компании Jansen соответствуют классу прогиба А (до 2,5 мм), а нагрузка на излом достигает до 1200 кг на точку.</p>\r\n\r\n<p>&nbsp;</p>\r\n<span style=\"font-size:20px\"><strong>Главные особенности материала</strong></span>\r\n\r\n<p style=\"margin-left:40px\">Сульфат кальция изготавливается из смешанного гипса и волокон целлюлозы. Панели разных производителей могут различаться плотностью, которая зависит от свойств этих материалов. Гипс и целлюлоза &mdash; это экологически безопасные материалы, которые не представляют опасности для здоровья, и отличаются долговечностью</p>\r\n\r\n<p style=\"margin-left:40px\">&nbsp;</p>\r\n\r\n<p><span style=\"font-size:20px\"><strong>Отличительные черты:&nbsp;</strong></span><br />\r\n&nbsp;</p>\r\n\r\n<ol style=\"margin-left:40px\">\r\n	<li>Толщина панелей может варьироваться от 28 мм до 40 мм.</li>\r\n	<li>Стандартный размер &mdash; 600 х 600 мм.</li>\r\n	<li>Панель может быть усилена по нижней стороне металлическим листом толщиной 0,5 мм.</li>\r\n</ol>\r\n\r\n<p style=\"margin-left:20px\">Вместе с плитами фальшпола из сульфата кальция можно использовать разнообразные финишные покрытия: ковровая плитка или ковролин, LVT-плитка&nbsp; или ламинат, паркет или линолеум. Допускается и монтаж керамогранита, он устанавливается на заводе и поставляется в сборе.<br />\r\n&nbsp;</p>\r\n\r\n<h1><span style=\"font-size:20px\"><strong>Характеристики</strong></span></h1>\r\n\r\n<p>Именно технические параметры являются главным аргументом в пользу фальшполов из сульфата кальция. Вот основные достоинства:</p>\r\n\r\n<ol>\r\n	<li>Класс пожарной опасности. Благодаря этому плиты можно использовать там, где не подходят другие материалы, но требуется доступ в подпольное пространство.<br />\r\n	&nbsp;</li>\r\n	<li>&nbsp;Несущая способность может составлять от 1500 до 3500 кг/м2. Она зависит от толщины и от того, используется ли металлический лист с нижней стороны.<br />\r\n	&nbsp;</li>\r\n	<li>Антистатический эффект. Плиты не допускают возникновения электрических разрядов на поверхности. Кромки обрабатываются ПВХ лентой с антистатическим эффектом. Благодаря этому покрытие можно использовать в электрощитовых или серверных.<br />\r\n	<br />\r\n	&nbsp;</li>\r\n</ol>\r\n\r\n<p style=\"margin-left:40px\">Среди прочих полезных свойств можно отметить звукоизоляцию. Панели фальшпола из сульфата кальция сами по себе плохо пропускают звук, а в сочетании с финишным покрытием из ковролина или ковровой плитки можно достичь наиболее комфортной акустической обстановки в помещении.</p>\r\n</div>\r\n', '<div><span style=\"font-size:20px\"><strong>Kaltsiy sulfatning afzalliklari</strong></span></div>\r\n\r\n<div>\r\n<div>\r\n<p style=\"margin-left:40px\"><span style=\"font-size:18px\">1. Ular yuqori quvvatga ega, shuning uchun ular odamlarning tirbandligi yuqori bo&#39;lgan xonalarga o&#39;rnatilishi mumkin.<br />\r\n<br />\r\n2. Ajratib bo&#39;lmaydigan dizayn bo&#39;lsa, tekshirish lyuklari istalgan nuqtada o&#39;rnatilishi mumkin. Til va yivli birikma plitalarning bo&#39;g&#39;inlarini mustahkamlaydi, shuning uchun ularga og&#39;ir uskunalar o&#39;rnatilishi mumkin. Taktil harakatlarlar sezilmaydi.<br />\r\n<br />\r\n3. O&#39;rnatish jiddiy tayyorlanishni talab qilmaydi.<br />\r\n<br />\r\n4. Panelning ovoz o&#39;tkazmaydigan tizimi (kaltsiy sulfat) 64 db gacha bo&#39;lgan shovqinni o&#39;tkazmaydi.<br />\r\n<br />\r\n5. Ko&#39;tarilgan qavatlar ostida har qanday kommunikatsiyalarni o&#39;rnatish mumkin (elektr, sanitariya-tesisat, zaif nuqta, yong&#39;in o&#39;chirish tizimi va boshqalar).<br />\r\n<br />\r\n6. Kaltsiy sulfat falshpollar gips va tsellyulozadan iborat. Bu sog&#39;liq uchun xavfsiz materialdir, shuning uchun uni bolalar ta&#39;lim muassasalarida yotqizishga ruxsat beriladi.<br />\r\n<br />\r\n7. PVX yoki chinni plitkali falshpolni saqlash oson. Uni har qanday yuvish vositasi bilan yuvish mumkin.<br />\r\n<br />\r\n8. Falshpollarni qiyinchiliksiz demontaj qilinishi mumkin, butun tuzilmani o&#39;zgartirishga hojat yo&#39;q.&nbsp;</span></p>\r\n\r\n<div class=\"col-list\" style=\"box-sizing: border-box; width: 1140px; color: rgb(0, 0, 0); font-family: &quot;Be Vietnam Pro&quot;, sans-serif; font-size: 16px;\">\r\n<p><span style=\"font-size:20px\"><strong>Qayerda qo&#39;llaniladi</strong></span></p>\r\n\r\n<p style=\"margin-left:40px; text-align:left\"><span style=\"font-size:20px\"><strong>Kaltsiy sulfatdan tayyorlangan falshpol plitalari yuqori zichlik va yuqori yuk ko&#39;tarish qobiliyati bilan ajralib turadi, shuning uchun ular:</strong></span></p>\r\n\r\n<p style=\"margin-left:40px; text-align:left\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:40px; text-align:left\"><span style=\"font-size:18px\">1. Massiv uskunalar o&#39;rnatilishi kutilayotgan katta ochiq ofislarda.</span></p>\r\n\r\n<p style=\"margin-left:40px; text-align:left\"><span style=\"font-size:18px\">2. Server xonalarida va ma&#39;lumotlar markazlarida.</span></p>\r\n\r\n<p style=\"margin-left:40px; text-align:left\"><span style=\"font-size:18px\">3. Yo&#39;l harakati yuqori bo&#39;lgan xonalarda. Masalan, savdo, biznes markazlari va ofis binolarida.</span></p>\r\n\r\n<p style=\"margin-left:40px; text-align:left\"><span style=\"font-size:18px\">4. Sanoat binolarida.</span></p>\r\n\r\n<p style=\"margin-left:40px; text-align:left\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:40px; text-align:left\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:40px; text-align:left\"><span style=\"font-size:18px\">Bunday sharoitda kaltsiy sulfat plitalarining yuqori quvvati tufayli foydalanish mumkin. Masalan, Jansen panellari A burilish sinfiga (2,5 mm gacha) mos keladi va sinish yuki har bir nuqtada 1200 kg gacha yetadi.</span></p>\r\n\r\n<p style=\"margin-left:40px; text-align:left\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:40px; text-align:left\"><span style=\"font-size:20px\"><strong>Materialning asosiy xususiyatlari</strong></span></p>\r\n</div>\r\n\r\n<div class=\"col-list\" style=\"box-sizing: border-box; width: 1140px; color: rgb(0, 0, 0); font-family: &quot;Be Vietnam Pro&quot;, sans-serif; font-size: 16px;\">\r\n<p style=\"margin-left:40px; text-align:left\"><span style=\"font-size:18px\">◉ Kaltsiy sulfat gips va tsellyuloza tolalari aralashmasidan tayyorlanadi. Turli ishlab chiqaruvchilarning panellari zichlikda farq qilishi mumkin, bu esa ushbu materiallarning xususiyatlariga bog&#39;liq. Gips va tsellyuloza sog&#39;liq uchun xavf tug&#39;dirmaydigan va bardoshli ekologik toza materiallardir</span></p>\r\n\r\n<p style=\"margin-left:40px; text-align:left\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:40px; text-align:left\">&nbsp;</p>\r\n</div>\r\n\r\n<div class=\"col-list\" style=\"box-sizing: border-box; width: 1140px; color: rgb(0, 0, 0); font-family: &quot;Be Vietnam Pro&quot;, sans-serif; font-size: 16px;\">\r\n<p style=\"margin-left:40px; text-align:left\"><span style=\"font-size:20px\"><strong>O&#39;ziga xos xususiyatlar:</strong></span></p>\r\n\r\n<p style=\"margin-left:40px; text-align:left\"><span style=\"font-size:18px\">1. Panellarning qalinligi 28 mm dan 40 mm gacha o&#39;zgarishi mumkin.</span></p>\r\n\r\n<p style=\"margin-left:40px; text-align:left\"><span style=\"font-size:18px\">2. Standart o&#39;lcham - 600 x 600 mm.</span></p>\r\n\r\n<p style=\"margin-left:40px; text-align:left\"><span style=\"font-size:18px\">3. Panelni pastki tomondan 0,5 mm metall qatlam bilan mustahkamlash mumkin.</span></p>\r\n\r\n<p style=\"margin-left:40px; text-align:left\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:40px; text-align:left\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:40px; text-align:left\"><span style=\"font-size:18px\">Kaltsiy sulfat falshpol plitalari bilan turli xil qoplamalardan foydalanish mumkin: gilam plitkalari yoki gilam, LVT plitkalari yoki laminat, parket yoki linoleum. Chinni tosh buyumlarni o&#39;rnatishga ham ruxsat beriladi, u zavodda o&#39;rnatiladi va yig&#39;ilgan holda yetkazib beriladi.</span></p>\r\n\r\n<p style=\"margin-left:40px; text-align:left\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:40px; text-align:left\">&nbsp;</p>\r\n</div>\r\n\r\n<div class=\"col-list\" style=\"box-sizing: border-box; width: 1140px; color: rgb(0, 0, 0); font-family: &quot;Be Vietnam Pro&quot;, sans-serif; font-size: 16px;\">\r\n<p style=\"margin-left:40px; text-align:left\"><span style=\"font-size:20px\"><strong>Xususiyatlari</strong></span></p>\r\n\r\n<p style=\"margin-left:40px; text-align:left\"><span style=\"font-size:20px\"><strong>Bu kaltsiy sulfatdan yasalgan falshpollar foydasiga asosiy dalil bo&#39;lgan texnik parametrlar. Bu erda asosiy afzalliklari:</strong></span></p>\r\n\r\n<p style=\"margin-left:40px; text-align:left\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:40px; text-align:left\"><span style=\"font-size:18px\">1. Yong&#39;in xavfi sinfi. Buning yordamida plitalar boshqa materiallar mos bo&#39;lmagan joylarda ishlatilishi mumkin, ammo yer osti maydoniga kirish kerak bo&rsquo;ladi.</span></p>\r\n\r\n<p style=\"margin-left:40px; text-align:left\"><span style=\"font-size:18px\">2. Yuk ko&#39;tarish quvvati 1500 dan 3500 kg / m2 gacha bo&#39;lishi mumkin. Bu qalinligi va pastki qismida metall qatlam ishlatilganligiga bog&#39;liq.</span></p>\r\n\r\n<p style=\"margin-left:40px; text-align:left\"><span style=\"font-size:18px\">3. Antistatik ta&#39;sir. Plitalar sirtda elektr zaryadlarining paydo bo&#39;lishiga yo&#39;l qo&#39;ymaydi. Qirralar antistatik ta&#39;sirga ega PVX lenta bilan ishlanadi. Buning yordamida qoplama kommutator yoki server xonalarida ishlatilishi mumkin.</span></p>\r\n\r\n<p style=\"margin-left:40px; text-align:left\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:40px; text-align:left\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:40px; text-align:left\"><span style=\"font-size:18px\">Boshqa afzalliklarga ovoz o&#39;tkazmasligiga e&#39;tibor bering. Kaltsiy sulfatdan tayyorlangan falshpol panellari ovozni o&#39;z-o&#39;zidan yaxshi o&#39;tkazmaydi va gilam plitkalari bilan birgalikda siz xonadagi eng qulay akustik muhitni his etishishingiz mumkin.</span></p>\r\n</div>\r\n</div>\r\n</div>\r\n', 'uploads/home/2023-05-09/6459f82b6d18e.png', '2023-05-09 12:37:15'),
(4, 'uploads/home/2023-05-09/6459fd6403b57.jpg', 'For the organization of ventilation and air conditioning', 'Для организации вентиляции и кондиционирования', 'Shamollatish va havoni tozalashni tashkil qilish uchun', 'A perforated metal plate is used to supply air to specified areas of the room.', 'Металлическая плита с перфорацией используется для подачи воздуха в заданные участки помещения', 'Xonaning belgilangan joylariga havo yetkazib berish uchun teshilgan metall plastinka.', 'Panel vent', 'Вент панели', 'Vent panel', 'The raised floor, unlike other ways of placing communication, can be equipped with ventilation and air conditioning, which is its advantage.\r\n</br>\r\nTypically, this type of ventilation is used in server and hardware rooms where it is necessary to cool equipment with high power. The cooling itself occurs with the help of cold air flows, which are supplied from under the false ceiling.', 'Фальшпол, в отличие от других способов помещения коммуникации, можно обустраивать вентиляцией и кондиционерами, что является его преимуществом.\r\n\r\nОбычно такой вид вентиляции используют в серверных и аппаратных помещениях, где необходимо охлаждать оборудование с высокой мощностью. Само охлаждение происходит с помощью холодных потоков воздуха, которые подаются из-под фальшола.', 'Falshpol, aloqani joylashtirishning boshqa usullaridan farqli o\'laroq, shamollatish va konditsioner bilan jihozlanishi mumkin.\r\n</br>\r\nOdatda, bu turdagi havoni sovutish server va apparat xonalarida qo\'llaniladi, bu erda yuqori quvvatli uskunalarni sovutish kerak. Falshpol ostidan ta\'minlangan sovuq havo oqimlari yordamida sodir bo\'ladi. ', '<p><span style=\"font-size:20px\"><strong>According to how cold air gets under the floor, delivery is divided into two types:</strong></span></p>\r\n\r\n<p><span style=\"font-size:18px\">1. Through air ducts built under the floor.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">2. With the help of air flow into the space under the raised floor, after which it exits through special devices and openings.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">Each delivery method is suitable for a specific situation. The second type, of course, will cost more, but in this case, the loss of cool air will be minimal.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:18px\">This method of ventilation is ideal for server rooms, but it is also successfully implemented in offices. The use of a raised floor for air exchange, as a source of cold or warm flow, has several advantages.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:18px\">For example, this is a great way to evenly warm up the room in the cold autumn-winter period. Such a floor heating structure is in no way inferior in its efficiency to the &quot;warm floor&quot;. The supply of fresh cool air during the hot season will cool the room perfectly, especially if there is equipment prone to overheating. The raised floor system has filamentary gaps between the panels, which allows it to be used as an air duct, therefore ventilation can be omitted. In addition, the versatility of the raised floor will free up additional space under the false ceiling, which will make it higher and increase the space in the room. The device of this type of ventilation is carried out using perforated detachable panels, which will allow you to change the position at a convenient time, thus changing the place of air supply.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">First of all, you need to deal with the type of raised floor. Simply put, a raised floor is a structure that is built on a rigid (rough) base in order to obtain space for various technical needs. LLC &quot;FALSHPOL&quot; supplies high-quality raised floors on the modern construction market, which will allow you to organize a ventilation system in the room.</span></p>\r\n', '<p><span style=\"font-size:20px\"><strong>По тому как холодный воздух попадает под пол, доставка делится на два вида:</strong></span></p>\r\n\r\n<p><span style=\"font-size:18px\">1. По воздуховодам, встроенных под пол.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">2. С помощью потока воздуха в пространство под фальшполом, после которого он выходит через специальные устройства и отверстия.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">Каждый способ доставки подходит под конкретную ситуацию. Второй вид, конечно, обойдется подороже, но в таком случае потери прохладного воздуха будут минимальные.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">Такой способ вентиляции идеально подходит серверным комнатам, но его также успешно реализуют и в офисах. Использование фальшпола для воздухообмена, как источник холодного или теплого потока, имеет ряд преимуществ.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">Например, это отличный способ равномерно прогреть помещение в холодный осенне-зимний период. Такая структура отопления пола ничем не уступает своей эффективностью &quot;теплому полу&quot;. Подача свежего прохладного воздуха в жаркое время года отлично охладит комнату, особенно если там находится оборудование склонное к перегреву. Система фальшпола имеет нитевидные зазоры между панелями, что позволяет использовать ее как воздухопроводящий короб, следовательно, вентиляцию можно не устанавливать. Помимо этого, многофункциональность фальшпола позволит освободить дополнительное место под фальшпотолком, что позволит сделать его выше и увеличит пространство в помещении. Устройство такого вида вентиляции, осуществляется с помощью перфорированных разъемных панелей, что позволит поменять положение в удобное время, таким образом, изменив место подачи воздуха.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:18px\">В первую очередь необходимо разобраться с типом фальшпола. Проще говоря, фальшпол - это конструкция, которая надстраивается на жестком (черновом) основании с целью получения пространства для различных технических нужд. OOO &quot;FALSHPOL&quot; поставляет на современном строительном рынке качественные фальшполы, которые позволят организовать систему вентиляции в помещении.&nbsp;</span></p>\r\n\r\n<p>&nbsp;</p>\r\n', '<p><span style=\"font-size:20px\"><strong>Falshpol ostidan sovuq havoni yuborish ikki turga bo&#39;linadi:&nbsp;</strong></span></p>\r\n\r\n<p><span style=\"font-size:18px\">1. Pol ostida qurilgan havo kanallari orqali.&nbsp;</span></p>\r\n\r\n<p><span style=\"font-size:18px\">2. Havo oqimi yordami bilan falshpol ostidagi bo&#39;shliqqa kiradi, shundan so&#39;ng u maxsus qurilmalar va teshiklar orqali chiqadi.&nbsp;</span></p>\r\n\r\n<p><span style=\"font-size:18px\">Har bir yetkazib berish usuli muayyan vaziyatga mos keladi. Ikki turdagi qimmatroq bo&#39;ladi, lekin bu holda, salqin havoning yo&#39;qolishi minimal bo&#39;ladi.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">Ushbu shamollatish usuli server xonalari uchun ideal, ammo u ofislarda ham muvaffaqiyatli amalga oshirilmoqda. Sovuq yoki issiq oqim manbai sifatida havo almashinuvi uchun baland qavatdan foydalanish bir qator afzalliklarga ega.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">Masalan, bu sovuq kuz-qish davrida xonani teng ravishda isitishning ajoyib usuli. Bunday pol isitish inshooti hech qanday samaradorlik jihatidan &quot;issiq pol&quot; dan kam emas. Issiq mavsumda toza salqin havo yetkazib berish xonani mukammal darajada sovutadi, ayniqsa haddan tashqari issiqlikka moyil bo&#39;lgan uskunalar mavjud bo&#39;lsa. Falshpol tizimi panellar orasidagi filamentli bo&#39;shliqlarga ega, bu esa uni havo kanali sifatida ishlatishga imkon beradi, shuning uchun ventilyatsiyani o&#39;tkazib yuborish mumkin. Bundan tashqari, Falshpolning ko&#39;p qirraliligi soxta shift ostida qo&#39;shimcha joyni bo&#39;shatadi, bu esa uni balandroq qiladi va xonadagi bo&#39;sh joyni oshiradi. Ushbu turdagi shamollatish moslamasi olinadigan panellar yordamida amalga oshiriladi, bu sizga qulay vaqtda pozitsiyani o&#39;zgartirishga imkon beradi, shu bilan havo ta&#39;minoti joyini o&#39;zgartiradi.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">Avvalo, siz falshpolning o&rsquo;zingizga mos turlarini tanlashingiz kerak. Oddiy qilib aytganda, falshpol - bu turli xil texnik ehtiyojlar uchun qattiq (qo&#39;pol) asosda qurilgan tuzilma. &quot;FALSHPOL&quot; MChJ zamonaviy qurilish bozorida yuqori sifatli falshpollarni yetkazib beradi, bu sizga xonada shamollatish tizimini tashkil qilish imkonini beradi.</span></p>\r\n', 'uploads/home/2023-05-09/6459fd6403756.png', '2023-05-09 12:59:32'),
(5, 'uploads/home/2023-05-09/6459ff961f65e.jpg', 'Perforated and solid', 'Перфорированный и сплошной', 'Perforatsiyalangan va qattiq', 'Для чистых комнат с высокими нагрузками ', 'Для чистых комнат с высокими нагрузками ', 'Yuqori yuklangan va toza xonalar uchun', 'Alyuminiy', 'Алюминий', 'Alyuminiy', '✔ Clear geometry\r\n</br>\r\n✔ Adjustable airflow through the perforations with dampers\r\n</br>\r\n✔ Corrosion resistance and high load-bearing performance perforated raised floor panels are extremely convenient and beneficial as a main tool.', '✔ Четкая геометрия\r\n</br>\r\n✔ Регулируемый поток воздуха через перфорацию с помощью заслонок\r\n</br>\r\n✔ Коррозионная стойкость и высокие несущие характеристики перфорированные панели фальшпола чрезвычайно удобны и выгодны в качестве основного инструмента.', '✔ Aniq geometriya\r\n</br>\r\n✔ Damperlar bilan teshiklar orqali sozlanishi havo oqimi\r\n</br>\r\n✔ Korroziyaga chidamliligi va yuqori yuk ko\'tarish qobiliyatiga ega teshilgan ko\'tarilgan pol panellari asosiy vosita sifatida juda qulay va foydalidir.', '<h1><strong>Scope of use</strong></h1>\r\n\r\n<p><span style=\"font-size:18px\">In fact, the aluminum raised floor has found a wide scope of its direct use, among the main areas it is worth highlighting the following:</span></p>\r\n\r\n<p><br />\r\n<span style=\"font-size:18px\">◉ Premises where server equipment is located;</span></p>\r\n\r\n<p><span style=\"font-size:18px\">◉ Medical institutions;</span></p>\r\n\r\n<p><span style=\"font-size:18px\">◉ Premises that specialize in the manufacture of optical products;</span></p>\r\n\r\n<p><span style=\"font-size:18px\">◉ Rooms that are designed to contain high-precision equipment and devices;</span></p>\r\n\r\n<p><span style=\"font-size:18px\">◉ Clean rooms;</span></p>\r\n\r\n<p><span style=\"font-size:18px\">◉ Food industry premises.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">The main use is in cleanrooms with a high cleanliness class of ISO 7 and above.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h1><strong><span style=\"font-size:22px\">Advantages of an aluminum raised floor:</span></strong></h1>\r\n\r\n<p><span style=\"font-size:18px\">An aluminum raised floor has a lot of advantages, and when choosing a system, it is necessary to focus on such points as:</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:18px\">◉ Excellent level of stability;</span></p>\r\n\r\n<p><span style=\"font-size:18px\">◉ The use of reinforced structural elements, which increases the stiffness parameter of aluminum raised floors, as a result of which they can withstand heavy loads;</span></p>\r\n\r\n<p><span style=\"font-size:18px\">◉ Excellent electrostatic properties.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">◉ Raised floor installation is relatively easy</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h1><strong>Specifications</strong></h1>\r\n\r\n<p><span style=\"font-size:18px\">Aluminum, which is used in the manufacture of raised floors LLC &quot;FALSHPOL&quot; has an orthotropic design and belongs to the category of high-quality cast metal;</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:18px\">◉ Excellent bearing capacity, which reaches up to 10 kN;</span></p>\r\n\r\n<p><span style=\"font-size:18px\">◉ Weight no more than 42 kg/m&sup2;;</span></p>\r\n\r\n<p><span style=\"font-size:18px\">◉ The area covered by one slab is 600x600 mm.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:18px\">Raised floor made of aluminum panels is a guarantee of reliability, durability and modernity. This is one of the most technologically advanced types of raised floor today.</span></p>\r\n', '<p><span style=\"font-size:22px\"><strong>Область использования</strong></span></p>\r\n\r\n<p><span style=\"font-size:18px\">На самом деле алюминиевый фальшпол нашел широкую сферу своего непосредственного использования, среди основных направлений стоит выделить следующие:</span></p>\r\n\r\n<p><span style=\"font-size:18px\">◉ Помещения, в которых находится серверное оборудование;</span></p>\r\n\r\n<p><span style=\"font-size:18px\">◉ Медицинские учреждения;</span></p>\r\n\r\n<p><span style=\"font-size:18px\">◉ Помещения, которые специализируются на изготовления оптической продукции;</span></p>\r\n\r\n<p><span style=\"font-size:18px\">◉ Комнаты, которые рассчитаны на нахождение в них высокоточного оборудования и приспособлений;</span></p>\r\n\r\n<p><span style=\"font-size:18px\">◉ Чистые комнаты;</span></p>\r\n\r\n<p><span style=\"font-size:18px\">◉ Помещения пищевой промышленности.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">Основное же использование приходится на чистые помещения с высоким классом чистоты от ISO 7 и выше.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:22px\"><strong>Преимущества алюминиевого фальшпола:&nbsp;</strong></span></p>\r\n\r\n<p>&nbsp;<span style=\"font-size:18px\">Алюминиевый фальшпол обладает массой преимуществ, и при выборе системы акцентировать внимание необходимо на такие моменты как:</span></p>\r\n\r\n<p><span style=\"font-size:18px\">◉ Отменный уровень устойчивости;</span></p>\r\n\r\n<p><span style=\"font-size:18px\">◉ Использовании усиленных конструкционных элементов, что повышает параметр жесткости алюминиевых фальшполов, вследствие чего, они могут выдерживать большие нагрузки;</span></p>\r\n\r\n<p><span style=\"font-size:18px\">◉ Великолепные электростатические свойства.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">◉ Монтаж фальшпола относительно прост</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:22px\"><strong>Технические характеристики</strong></span><br />\r\n&nbsp;</p>\r\n\r\n<p><span style=\"font-size:18px\">Алюминий, который используется при изготовлении фальшполов OOO &quot;FALSHPOL&quot;&nbsp; имеет ортотропную конструкцию и относится к категории высококачественного литого металла;</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:18px\">◉ Отменная несущая способность, которая достигает до 10 кН;</span></p>\r\n\r\n<p><span style=\"font-size:18px\">◉ Масса не более 42 кг/ м&sup2; ;</span></p>\r\n\r\n<p><span style=\"font-size:18px\">◉ Площадь, покрываемая одной плитой 600х600 мм.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:18px\">Фальшпол из алюминиевых панелей является гарантом надёжности, долговечности и современности. Это один из самых технологичных видов фальшпола на сегодняшний день.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n', '<div>\r\n<h5><span style=\"font-size:22px\"><strong>Foydalanish usuli</strong></span></h5>\r\n</div>\r\n\r\n<div>\r\n<div>\r\n<p><span style=\"font-size:18px\">Aslida, alyuminiy falshpol o&#39;zidan to&#39;g&#39;ridan-to&#39;g&#39;ri foydalanishning keng doirasini topdi, asosiy yo&#39;nalishlar orasida quyidagilarni ta&#39;kidlash kerak:</span></p>\r\n\r\n<p><span style=\"font-size:18px\">◉ Server uskunalari joylashgan binolar;</span></p>\r\n\r\n<p><span style=\"font-size:18px\">◉ Tibbiyot muassasalari;</span></p>\r\n\r\n<p><span style=\"font-size:18px\">◉ Optik mahsulotlar ishlab chiqarishga ixtisoslashgan binolar;</span></p>\r\n\r\n<p><span style=\"font-size:18px\">◉ Yuqori aniqlikdagi uskunalar va qurilmalarni o&#39;z ichiga olishi uchun mo&#39;ljallangan xonalar;</span></p>\r\n\r\n<p><span style=\"font-size:18px\">◉ Toza xonalar;</span></p>\r\n\r\n<p><span style=\"font-size:18px\">◉ Oziq-ovqat sanoati binolari.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">Asosiy foydalanish tozalik darajasi ISO 7 va undan yuqori bo&#39;lgan toza xonalarda qo&#39;llaniladi.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-size:22px\"><strong>Alyuminiy falshpollarning afzalliklari:</strong></span></span></p>\r\n</div>\r\n\r\n<div>\r\n<p><span style=\"font-size:18px\">Alyuminiy falshpol juda ko&#39;p afzalliklarga ega va tizimni tanlashda siz quyidagi jihatlarga e&#39;tibor qaratishingiz kerak:</span></p>\r\n\r\n<p><span style=\"font-size:18px\">◉ A&#39;lo darajadagi barqarorlik;</span></p>\r\n\r\n<p><span style=\"font-size:18px\">◉ Alyuminiy falshpollarning qattiqlik parametrini oshiradigan mustahkamlangan strukturaviy elementlardan foydalanish, buning natijasida ular og&#39;ir yuklarga bardosh bera oladi;</span></p>\r\n\r\n<p><span style=\"font-size:18px\">◉ Zo&#39;r elektrostatik xususiyatlar.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">◉ Falshpolni o&#39;rnatish nisbatan oson</span></p>\r\n\r\n<p>&nbsp;</p>\r\n</div>\r\n\r\n<div>\r\n<p><strong><span style=\"font-size:22px\">Texnik xususiyatlari</span></strong></p>\r\n\r\n<p><span style=\"font-size:18px\">Alyuminiy falshpollarni ishlab chiqarishda ishlatiladigan &quot;FALSHPOL&quot; MChJ ortotropik dizaynga ega va yuqori sifatli quyma metall toifasiga kiradi;</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:18px\">◉ 10 kN gacha bo&#39;lgan mukammal yuk ko&#39;tarish qobiliyati;</span></p>\r\n\r\n<p><span style=\"font-size:18px\">◉ Og&#39;irligi 42 kg/m&sup2; dan oshmaydi;</span></p>\r\n\r\n<p><span style=\"font-size:18px\">◉ Bitta plita bilan qoplangan maydon 600x600 mm.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">Alyuminiy panellardan yasalgan falshpol - ishonchlilik, chidamlilik va zamonaviylik kafolati. Bu bugungi kunda falshpolning texnologik jihatdan eng ilg&#39;or turlaridan biridir.</span></p>\r\n</div>\r\n</div>\r\n', 'uploads/home/2023-05-09/6459ff961f4ae.png', '2023-05-09 13:08:54');
INSERT INTO `falshpol_type_show` (`id`, `header_image`, `head_title_en`, `head_title_ru`, `head_title_uz`, `head_text_en`, `head_text_ru`, `head_text_uz`, `title_en`, `title_ru`, `title_uz`, `text_en`, `text_ru`, `text_uz`, `full_text_en`, `full_text_ru`, `full_text_uz`, `image`, `created_at`) VALUES
(6, 'uploads/home/2023-05-09/645a01f461938.jpg', 'Triplex 38mm', 'Триплекс 38мм', 'Tripleks 38 mm', 'For design solutions', 'Для дизайнерских решений', 'Dizayn yechimlari uchun', 'Glass', 'Стекло', 'Shishali', 'Glass floors are created to translate the various ideas of designers into reality. So, glass can be combined with other systems, obtaining unusual solid surfaces. In general, the raised glass floor is three-layered. This is a layer that can withstand the main load (shoes, furniture, animal paws, etc.), as well as two load-bearing layers. Even if the top layer is damaged (scratches, cracks, breaking), this will not affect the carrier system in any way.', 'Полы из стекла создаются для воплощения разнообразных идей дизайнеров в реальность. Так, стекло можно комбинировать с другими системами, получая необычные цельные поверхности. В целом, фальшпол из стекла трёхслойный. Это слой, выдерживающий основную нагрузку (обувь, мебель, лапы животных и т.д.), а также два несущих слоя. Даже в том случае, если верхний слой повредится (царапины, трещины, разбивание), это никак не отразится на несущей системе.', 'Shisha falshpollar dizaynerlarning turli g\'oyalarini haqiqatga aylantirish uchun yaratilgan. Shunday qilib, shisha boshqa tizimlar bilan birlashtirilib, g\'ayrioddiy qattiq sirtlarni olish mumkin. Umuman olganda, shishali falshpol uch qatlamli. Bu asosiy yukga (poyabzal, mebel, hayvonlarning panjalari va boshqalar) bardosh bera oladigan qatlam, shuningdek, ikkita yuk ko\'taruvchi qatlamdir. Yuqori qatlam shikastlangan bo\'lsa ham (chizish, yoriqlar, sinish), bu tashuvchi tizimga hech qanday ta\'sir qilmaydi. ', '<p><span style=\"font-size:18px\"><span style=\"font-size:22px\"><strong>Raised floor specifications are as follows:</strong></span><br />\r\n<br />\r\n◉ Three layers (solid panel with two carrier layers) that do not require reinforcement with the same stringers;<br />\r\n◉ You can easily apply a logo (family coat of arms, company sign, etc.);<br />\r\n◉ Ample opportunities in terms of selecting panels of different colors (with lighting effects under the system itself).</span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-size:22px\"><strong>Raised floor made of glass plates - features and purpose</strong></span><br />\r\nRaised floors made using glass plates are recommended to be illuminated so that the play of light rays can be seen and the surrounding space is complemented. The use of a special sheet of foil allows you to get diffused light (if required by the design move).</span></p>\r\n\r\n<p><span style=\"font-size:18px\">In general, raised floor manufacturers recommend the use of such systems in reception areas and museums, entertainment venues and business centers, as well as in the premises (transparent) of factories and plants.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:22px\"><strong>Recommendations for the use of tempered glass raised floor</strong></span></p>\r\n\r\n<p><span style=\"font-size:18px\">If maximum impact resistance is required, tempered glass floor panels are recommended. During installation, you can use the standard overlays for each rack. If you need to highlight the floor, you can order the service of printing on the surface of one of the pressed boards.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">In any case, if you buy a raised glass floor, you will have to face certain restrictions. It is recommended to create a structure with a height of no more than half a meter (taking into account the thickness of the slab itself). It is also important to maintain high impact surfaces (heels, animals, etc.) in good condition (chemical cleaning and polishing).</span></p>\r\n', '<p><span style=\"font-size:22px\"><strong>Технические характеристики фальшпола следующие:</strong></span></p>\r\n\r\n<p><span style=\"font-size:18px\">◉ Три слоя (твёрдая панель с двумя несущими слоями), не требующие усиления при помощи тех же стрингеров;</span></p>\r\n\r\n<p><span style=\"font-size:18px\">◉ Без проблем можно осуществить нанесение логотипа (фамильный герб, знак компании и т. д.);</span></p>\r\n\r\n<p><span style=\"font-size:18px\">◉ Широкие возможности в плане подбора панелей разных цветов (со световыми эффектами под самой системой).</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h1><span style=\"font-size:18px\"><span style=\"font-size:22px\"><strong>Фальшпол из стеклянных плит &ndash; особенности и назначение&nbsp;</strong></span></span><br />\r\n&nbsp;</h1>\r\n\r\n<p><span style=\"font-size:18px\">Фальшполы выполненный и использованием стеклянных плит рекомендуется подсвечивать, дабы просматривалась игра лучей света и дополнялось окружающее пространство. Применение специального листа фольги позволяет получить рассеянный свет (если того требует дизайнерский ход).</span></p>\r\n\r\n<p><span style=\"font-size:18px\">В основном, производители фальшпола рекомендуют применять такие системы в приёмных и музеях, развлекательных заведениях и бизнес-центрах, а также в помещениях (светопроницаемые) фабрик и заводов.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-size:22px\"><strong>Рекомендации по применению фальшпола из закаленного стекла&nbsp;</strong></span></span><br />\r\n&nbsp;</p>\r\n\r\n<p><span style=\"font-size:18px\">Если требуется достичь максимальной ударопрочности, то рекомендуется использовать панели пола из закаленного стекла. В процессе монтажа можно воспользоваться стандартными накладками для каждой стойки. Если необходимо выделить пол, то можно заказать услугу нанесения принта на поверхность одной из спрессованных плит.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:18px\">В любом случае, если купить фальшпол из стекла, придётся столкнуться с определёнными ограничениями. Рекомендуется создавать конструкцию с высотой не более полметра (учитывая толщину самой плиты). Также важно поддерживать поверхности с наибольшим воздействием (каблуки, животные и т.д.) в надлежащем состоянии (чистка химией и натирка).</span></p>\r\n\r\n<p>&nbsp;</p>\r\n', '<div>\r\n<p><span style=\"font-size:22px\"><strong>Falshpolning texnik xususiyatlari quyidagilardan iborat:</strong></span></p>\r\n\r\n<p><span style=\"font-size:18px\">◉ Bir xil stringerlar bilan mustahkamlashni talab qilmaydigan uchta qatlam (ikki tashuvchi qatlamli qattiq panel);</span></p>\r\n\r\n<p><span style=\"font-size:18px\">◉ Siz logotipni osongina qo&#39;llashingiz mumkin (gerb, kompaniya belgisi va boshqalar);</span></p>\r\n\r\n<p><span style=\"font-size:18px\">◉ Turli xil rangdagi panellarni tanlash bo&#39;yicha keng imkoniyatlar (tizimning o&#39;zi ostida yorug&#39;lik effektlari bilan).</span></p>\r\n\r\n<p>&nbsp;</p>\r\n</div>\r\n\r\n<div>\r\n<p><strong><span style=\"font-size:22px\">Shisha plitalardan yasalgan falshpol - xususiyatlar va maqsadlari</span></strong></p>\r\n\r\n<p><span style=\"font-size:18px\">Shisha plitalardan yasalgan falshpollarni yorug&#39;lik nurlarining o&#39;ynashini ko&#39;rish va atrofni to&#39;ldirish va yoritish uchun tavsiya etiladi. Maxsus pol varag&#39;idan foydalanish nurni olish imkonini beradi (agar dizayn harakati talab qilsa).</span></p>\r\n\r\n<p><span style=\"font-size:18px\">Umuman olganda, falshpol ishlab chiqaruvchilari bunday tizimlarni qabul qilish joylari va muzeylar, ko&#39;ngilochar joylar va biznes markazlarida, shuningdek, zavod va zavodlarning binolarida (shaffof) foydalanishni tavsiya qiladi.&nbsp;</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n</div>\r\n\r\n<div>\r\n<p><span style=\"font-size:18px\">Temperli shisha falshpoldan foydalanish bo&#39;yicha tavsiyalar</span></p>\r\n\r\n<p><span style=\"font-size:18px\">Maksimal zarba qarshiligi zarur bo&#39;lsa, temperli shisha taglik panellari tavsiya etiladi. O&#39;rnatish vaqtida siz har bir standart qoplamalardan foydalanishingiz mumkin. Agar siz polni ko&rsquo;tarishingiz kerak bo&#39;lsa, siz bosilgan taxtalardan birining yuzasini ochish xizmatiga buyurtma berishingiz mumkin.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:18px\">Har qanday holatda, agar siz shisha pol sotib olsangiz, muayyan cheklovlarga duch kelishingiz kerak bo&#39;ladi. Balandligi yarim metrdan oshmaydigan (plitaning o&#39;zi qalinligini hisobga olgan holda) strukturani yaratish tavsiya etiladi. Bundan tashqari, yuqori ta&#39;sirli sirtlarni (to&#39;piqlar, hayvonlar va boshqalar) yaxshi holatda (kimyoviy tozalash va parlatish) saqlash muhimdir.</span></p>\r\n</div>\r\n', 'uploads/home/2023-05-09/645a01f46170b.png', '2023-05-09 13:19:00'),
(7, 'uploads/home/2023-05-09/645a03792c01d.jpg', 'Calcium sulfate', 'Сульфат кальция', 'Kaltsiy sulfat', 'Dry screed on supports. Effective Solution', 'Сухая стяжка на опорах. Эффективное решение ', 'Quruq xonalar uchun samarali yechim', 'One-piece', 'Неразъемный', 'Bir qismli', 'Raised floor one-piece creates a monolithic base, suitable for almost any coating. The top coat can be laid directly on the panels. The raised floor can cover tiles, carpet, laminate, parquet, PVC. Due to its high dimensional stability, the one-piece raised floor is optimal for finishing stone and porcelain stoneware floors.', 'Фальшпол неразъемный создает монолитное основание, подходящее практически для любого покрытия. Финишное покрытие можно укладывать непосредственно на панели. Фальшпол может покрывать плитку, ковролин, ламинат, паркет, ПВХ. Благодаря высокой стабильности размеров неразъемный фальшпол оптимален для отделки полов из камня и керамогранита.', 'Falshpolning bir bo\'lagi deyarli har qanday qoplamaga mos keladigan monolitik bazani yaratadi. Yuqori qatlam to\'g\'ridan-to\'g\'ri panellarga qo\'yilishi mumkin. Falshpol plitka, gilam, laminat, parket, PVX qoplamasi mumkin. Yuqori o\'lchamli barqarorlik tufayli, bir qismli falshpol tosh va chinni toshli pollar uchun qulay yechimdir.', '<p><span style=\"font-size:22px\"><strong>Coating features</strong></span></p>\r\n\r\n<p><span style=\"font-size:18px\">◉ Tongue-and-groove joints allow you to fasten the plates together by gluing their edges. Thus, a monolithic surface is achieved.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">◉ Thanks to this feature, any solid coatings, such as rolled carpet, can be laid on the raised floor.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">◉ Access to the underground space in this case is provided in two ways:</span><br />\r\n&nbsp;</p>\r\n\r\n<p><span style=\"font-size:18px\">1. You can use ordinary panels together with one-piece slabs, laying them in places where access to communications is expected.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">2. With the help of special hatches. These can be either simple hatches with covers through which you can access the underground space, or blocks of electrical or network outlets.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><br />\r\n<span style=\"font-size:18px\"><span style=\"font-size:22px\"><strong>Benefits of a one-piece system</strong></span></span></p>\r\n\r\n<p><span style=\"font-size:18px\">The tongue-and-groove design has many useful properties:</span></p>\r\n\r\n<p><span style=\"font-size:18px\">1. Quick installation. The time required for a complete installation cycle of the system is lower compared to the standard type of panels.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">2. Smooth height adjustment. Thanks to the stepless leveling of the racks, the most accurate installation is possible.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">3. The topcoat can be applied almost immediately after the panels have been installed. No additional procedures are required.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">4. Fire hazard class NG, which is important for rooms with high requirements, and the need for access to underground space.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">5. Good sound insulation.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">If you do not plan to use hatches, or other plates instead of tongue-and-groove, you can cut outlet holes directly in the tongue-and-groove panels of a one-piece raised floor.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:22px\"><strong>Characteristics</strong></span></p>\r\n\r\n<p><span style=\"font-size:18px\">1. The allowable load can be from 2 to 6 kN.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">2. The height of the structure can vary from 38-2000mm.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">3. Plates are made in thickness from 24 to 44 mm.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">4. The standard distance between the posts is 600x600 mm.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:18px\">Not only rolled materials are suitable as finishing materials, but also others: various elastic or textile coatings, laminate, LVT tiles, etc. All these materials can be mounted on a one-piece raised floor made of calcium sulfate.</span></p>\r\n', '<p><strong><span style=\"font-size:22px\">Особенности покрытия</span></strong></p>\r\n\r\n<p><span style=\"font-size:18px\">◉ Пазогребневые соединения позволяют крепить плиты между собой, склеивая их кромки. Таким образом достигается монолитная поверхность.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">◉ Благодаря этой особенности, на фальшпол можно укладывать любые сплошные покрытия, например, рулонный ковролин.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">◉ Доступ в подпольное пространство в таком случае обеспечивается двумя способами:</span></p>\r\n\r\n<p><span style=\"font-size:18px\">1. Можно использовать вместе с неразъёмными плитами обычные панели, укладывая их в местах, где предполагается доступ к коммуникациям.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">2. При помощи специальных люков. Это могут быть как простые люки с крышками, через которые можно получить доступ в подпольное пространство, так и блоки электрических или сетевых розеток.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h1><span style=\"font-size:22px\"><strong>Преимущества неразъёмной системы</strong>&nbsp;</span></h1>\r\n\r\n<p><span style=\"font-size:18px\">Пазогребневая конструкция обладает множеством полезных свойств:</span></p>\r\n\r\n<p><span style=\"font-size:18px\">1. Быстрый монтаж. Время, необходимое на полный цикл установки системы, ниже по сравнению со стандартным типом панелей.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">2. Плавная регулировка высоты. Благодаря бесступенчатому выставлению уровня стоек возможна максимально точная установка.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">3. Финишное покрытие можно укладывать практически сразу после монтажа панелей. Никакие дополнительные процедуры не требуются.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">4. Класс пожароопасности НГ, что немаловажно для помещений с высокими требованиями, и необходимостью доступа к подпольному пространству.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">5. Хорошая звукоизоляция.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:18px\">Если вы не планируете использовать лючки, или другие плиты вместо пазогребневых, можно вырезать выходные отверстия прямо в пазогребневых панелях неразъёмного фальшпола.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:22px\"><strong>Характеристики</strong></span></p>\r\n\r\n<p><span style=\"font-size:18px\">1. Допустимая нагрузка может составлять от 2 до 6 кН.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">2. Высота конструкции может варьироваться в диапазоне 38-2000 мм.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">3. Плиты изготавливаются толщиной от 24 до 44 мм.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">4. Стандартное расстояние между стойками 600х600 мм.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:18px\">В качестве финишных отделочных материалов подходят не только рулонные, но и прочие: различные эластичные или текстильные покрытия, ламинат, LVT-плитка и т. д. Все эти материалы можно монтировать на неразъёмный фальшпол из сульфата кальция.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n', '<div>\r\n<p><span style=\"font-size:22px\"><strong>Qoplama xususiyatlari</strong></span></p>\r\n\r\n<p><span style=\"font-size:18px\">◉ Truba bo&#39;g&#39;inlari plitalarning qirralarini yopishtirish orqali ularni bir-biriga mahkamlash imkonini beradi. Shunday qilib, monolitik yuzaga erishiladi.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">◉ Ushbu xususiyat tufayli har qanday qattiq qoplamalar, masalan, rulonli gilam, ko&#39;tarilgan polga yotqizilishi mumkin.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">◉ Bu holda er osti maydoniga kirish ikki yo&#39;l bilan ta&#39;minlanadi:</span></p>\r\n\r\n<p><span style=\"font-size:18px\">1. Oddiy panellarni bir qismli plitalar bilan birgalikda ishlatishingiz mumkin, ularni kommunikatsiyalarga kirish joylarga yotqizishingiz mumkin.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">2. Maxsus lyuklar yordamida. Bu er osti bo&#39;shlig&#39;iga kirishingiz mumkin bo&#39;lgan qopqoqli oddiy lyuklar yoki elektr yoki tarmoq rozetkalari bloklari bo&#39;lishi mumkin.</span></p>\r\n</div>\r\n\r\n<div>\r\n<p><span style=\"font-size:18px\">Bir qismli tizimning afzalliklari</span></p>\r\n\r\n<p><span style=\"font-size:22px\"><strong>Truba dizayni juda ko&#39;p foydali xususiyatlarga ega:</strong></span></p>\r\n\r\n<p><span style=\"font-size:18px\">1. Tez o&#39;rnatish. Tizimning to&#39;liq o&#39;rnatish davri uchun zarur bo&#39;lgan vaqt standart turdagi panellar bilan solishtirganda kamroq.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">2. Bir tekis balandlikni sozlash. Raflarni bosqichsiz tekislash tufayli aniq o&#39;rnatish mumkin.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">3. Yuqori qoplama panellar o&#39;rnatilgandan so&#39;ng darhol qo&#39;llanilishi mumkin. Hech qanday qo&#39;shimcha protseduralar talab qilinmaydi.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">4. Yuqori talablarga ega bo&#39;lgan xonalar uchun muhim bo&#39;lgan NG yong&#39;in xavfi sinfi va er osti maydoniga kirish zarurati.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">5. Ovoz o&#39;tkazmaydigan.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:18px\">Agar siz truba o&#39;rniga lyuklardan yoki boshqa plitalardan foydalanishni rejalashtirmasangiz, siz to&#39;g&#39;ridan-to&#39;g&#39;ri bir bo&#39;lakli ko&#39;tarilgan polning truba panellarida chiqish teshiklarini kesishingiz mumkin.</span></p>\r\n</div>\r\n\r\n<div>\r\n<p><span style=\"font-size:22px\"><strong>Xususiyatlari</strong></span></p>\r\n\r\n<p><span style=\"font-size:18px\">1. Ruxsat etilgan yuk 2 dan 6 kN gacha bo&#39;lishi mumkin.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">2. Strukturaning balandligi 38-2000 mm gacha o&#39;zgarishi mumkin.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">3. Plitalar 24 dan 44 mm gacha qalinlikda tayyorlanadi.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">4. Ustunlar orasidagi standart masofa 600x600 mm.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:18px\">Tugatish materiallari sifatida nafaqat rulonli materiallar, balki boshqalar ham mos keladi: turli xil elastik yoki to&#39;qimachilik qoplamalari, laminat, LVT plitkalari va boshqalar Bu materiallarning barchasi kaltsiy sulfatdan tayyorlangan bir qismli falshpolga o&#39;rnatilishi mumkin.</span></p>\r\n</div>\r\n', 'uploads/home/2023-05-09/645a03792bd72.png', '2023-05-09 13:25:29');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` bigint NOT NULL,
  `user_id` int NOT NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `images` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `status` smallint DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `home_about_us`
--

CREATE TABLE `home_about_us` (
  `id` int NOT NULL,
  `text_en` text COLLATE utf8mb4_general_ci NOT NULL,
  `text_ru` text COLLATE utf8mb4_general_ci NOT NULL,
  `text_uz` text COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home_about_us`
--

INSERT INTO `home_about_us` (`id`, `text_en`, `text_ru`, `text_uz`, `image`, `created_at`) VALUES
(1, 'We are a professional team of engineers, logisticians and builders working on the high-quality implementation of your project in the shortest possible time.\r\n</br>\r\nOur company has been operating in the field of production, supply and installation of raised floors since 2020. We supply raised floors from leading European and / Asian manufacturers, and, if necessary, install them with a guarantee of quality in the shortest possible time.', 'Мы профессиональная команда инженеров, логистов и строителей работающая над качественной реализацией Вашего проекта в кратчайшие сроки .\r\nНаша компания работает в области производства, поставки и монтажа фальшпола с 2020 года. \r\nМы осуществляем поставку фальшпола ведущих Европейских и / Азиатских производителей , а при необходимости и монтаж с гарантией качества в кратчайшие сроки.', 'Biz sizning loyihangizni eng qisqa vaqt ichida sifatli amalga oshirish ustida ishlayotgan muhandislar, logistiklar va quruvchilar bo’lgan professional jamoamiz.\r\nBizning kompaniyamiz 2020 yildan beri falshpollarni yetkazib berish va o\'rnatish sohasida ishlamoqda. Biz Yevropa va Osiyoning yetakchi ishlab chiqaruvchilaridan falshpollarni yetkazib beramiz va kerak bo‘lganda ularni eng qisqa vaqt ichida sifat kafolati bilan o‘rnatamiz. Biz 2 yildan buyon falshpollarni o’rnatib kelamiz va ushbu biznes sohasida katta tajriba to\'pladik.\r\nFalshpol savdo va sanoat binolari uchun ajoyib yechimdir. Bu ofislar, mehmonxonalar, o\'quv muassasalari, savdo markazlari, restoranlar va hatto tozalik talablari yuqori bo\'lgan xonalar uchun eng kuchli va bardoshli yechimdir. ', 'uploads/home/2023-04-19/643ef535d96fb.jpg', '2023-04-18 22:45:44');

-- --------------------------------------------------------

--
-- Table structure for table `home_benefits`
--

CREATE TABLE `home_benefits` (
  `id` int NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `title_uz` varchar(255) NOT NULL,
  `text_en` text NOT NULL,
  `text_ru` text NOT NULL,
  `text_uz` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `home_benefits`
--

INSERT INTO `home_benefits` (`id`, `title_en`, `title_ru`, `title_uz`, `text_en`, `text_ru`, `text_uz`, `image`, `created_at`) VALUES
(4, 'Why raised floor?', 'Почему фальшпол?', 'Nima uchun Falshpol?', '<p><strong>Work completion time (conditionally 500 sq.m.)</strong></p>\r\n\r\n<p>✔ Screed - 5-7 days<br />\r\n✔ Raised floor system - 1 day (team of 4 people)</p>\r\n\r\n<p><strong>Time to laying the finish coat:</strong></p>\r\n\r\n<p>✔ Screed: minimum 4-6 weeks.<br />\r\n✔ Raised floor system: 1 day.</p>\r\n\r\n<p><strong>Additional benefits:</strong></p>\r\n\r\n<p>✔ No &quot;wet&quot; processes<br />\r\n✔ Flexibility of operation and laying of utilities.<br />\r\n✔ Wide range of finishes<br />\r\n✔ Different level of floor lifting;<br />\r\n✔ High accuracy of surface leveling.</p>\r\n', '<p><strong>Время выполнения работ (условно 500 кв.м.)</strong></p>\r\n\r\n<p>✔ Стяжка &ndash; 5-7 дней<br />\r\n✔ Система фальшполов &ndash; 1 день (бригада из 4х -человек)<br />\r\n<br />\r\n<strong>Время до укладывания финишного покрытия:</strong><br />\r\n✔ Стяжка: минимум 4-6 недель.<br />\r\n✔ Система фальшполов: 1 день.<br />\r\n<br />\r\n<strong>Дополнительные преимущества:</strong><br />\r\n✔ Отсутствие &laquo;мокрых&raquo; процессов<br />\r\n✔ Гибкость эксплуатации и прокладки инженерных коммуникаций.<br />\r\n✔ Широкий выбор финишных покрытий<br />\r\n✔ Различный уровень подъема пола;<br />\r\n✔ Высокая точность выравнивания поверхности.</p>\r\n', '<p><strong>Ishni tugatish vaqti (shartli ravishda 500 kv.m.)</strong></p>\r\n\r\n<p>✔ Shlangi - 5-7 kun<br />\r\n✔ Yuqori qavat tizimi - 1 kun (4 kishilik jamoa)</p>\r\n\r\n<p><strong>Yakuniy palto qo&#39;yish vaqti:</strong></p>\r\n\r\n<p>✔ Parda: kamida 4-6 hafta.<br />\r\n✔ Yuqori qavat tizimi: 1 kun.</p>\r\n\r\n<p><strong>Qo&#39;shimcha imtiyozlar:</strong></p>\r\n\r\n<p>✔ &quot;Ho&#39;l&quot; jarayonlar yo&#39;q<br />\r\n✔ Foydalanish va kommunal xizmatlarni yotqizishning moslashuvchanligi.<br />\r\n✔ Keng assortimentli tugatish<br />\r\n✔ Polni ko&#39;tarishning har xil darajasi;<br />\r\n✔ Sirtni tekislashning yuqori aniqligi.</p>\r\n', 'uploads/home/2023-08-01/64c8426c4d70e.jpg', '2023-04-19 11:57:36');

-- --------------------------------------------------------

--
-- Table structure for table `home_certificates`
--

CREATE TABLE `home_certificates` (
  `id` int NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `title_ru` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `title_uz` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home_certificates`
--

INSERT INTO `home_certificates` (`id`, `title_en`, `title_ru`, `title_uz`, `image`, `created_at`) VALUES
(1, 'certificate eng name', 'certificate rus name', 'certificate uz name', 'uploads/home/2023-04-19/643fc11705578.jpg', '2023-04-19 13:23:19'),
(2, 'certificate eng name', 'certificate rus name', 'certificate uz name', 'uploads/home/2023-04-19/643fc123a3abc.jpg', '2023-04-19 13:23:31'),
(3, 'certificate eng name', 'certificate rus name', 'certificate uz name', 'uploads/home/2023-04-19/643fc12c01c25.png', '2023-04-19 13:23:40'),
(4, 'certificate eng name', 'certificate rus name', 'certificate uz name', 'uploads/home/2023-04-19/643fc2aea502f.jpg', '2023-04-19 13:30:06');

-- --------------------------------------------------------

--
-- Table structure for table `home_clients`
--

CREATE TABLE `home_clients` (
  `id` int NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `title_ru` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `title_uz` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home_clients`
--

INSERT INTO `home_clients` (`id`, `title_en`, `title_ru`, `title_uz`, `image`, `created_at`) VALUES
(1, 'Ministry of Economy and Finance', 'Министерство экономики и финансов', 'Iqtosidiyot va moliya vazirligi', 'uploads/home/2023-04-19/643fb6d345f4a.jpg', '2023-04-19 12:39:31'),
(2, 'Tashkent City', 'Tashkent City', 'Tashkent City', 'uploads/home/2023-04-19/643fb6faa746c.jpg', '2023-04-19 12:40:10'),
(3, 'Mercury Tashkent', 'Mercury Tashkent', 'Mercury Tashkent', 'uploads/home/2023-04-19/643fb7239f56c.jpg', '2023-04-19 12:40:51');

-- --------------------------------------------------------

--
-- Table structure for table `home_completed_projects`
--

CREATE TABLE `home_completed_projects` (
  `id` int NOT NULL,
  `title_en` text COLLATE utf8mb4_general_ci NOT NULL,
  `title_ru` text COLLATE utf8mb4_general_ci NOT NULL,
  `title_uz` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home_completed_projects`
--

INSERT INTO `home_completed_projects` (`id`, `title_en`, `title_ru`, `title_uz`) VALUES
(1, 'Supply and installation of raised floor systems (30 sq.m.) in the server room of the Customs Department of the Tashkent region (Nurafshan) in 2019;', 'Поставка и установка систем фальшпола (30 кв.м.) в   серверном помещении Таможенного управление Ташкентской области (г. Нурафшан) в 2019 году;', '2019-yilda Toshkent viloyati (Nurafshon) bojxona boshqarmasining server xonasiga baland pol tizimini (30 kv.m.) yetkazib berish va o‘rnatish;'),
(2, 'Supply and installation of raised floor systems (300 sq.m.) in the premises of the data processing center of the Ministry of Finance of the Republic of Uzbekistan (Tashkent) 2022;', 'Поставка и установка систем фальшпола (300 кв.м.) в помещении центра обработки данных Министерства финансов РУз (г. Ташкент) 2022 год;', 'O‘zbekiston Respublikasi Moliya vazirligining ma’lumotlarni qayta ishlash markazi (Toshkent sh.) binolarida ko‘tarilgan pol tizimini (300 kv.m.) yetkazib berish va o‘rnatish 2022;'),
(3, 'Supply and installation of raised floor systems (60 sq.m.) in the premises of the operator\'s water treatment facility of the Ministry of Water Resources (Kibray city, Tashkent region) 2021;', 'Поставка и установка систем фальшпола (60 кв.м.) в помещении операторского водоочистного сооружения Министерства водного хозяйства (г. Кибрай  Ташкентской области) 2021 год;\r\n', 'Suv xo‘jaligi vazirligi (Toshkent viloyati, Qibray shahri) operator suv tozalash inshooti binolarida ko‘tarilgan pol tizimini (60 kv.m.) yetkazib berish va o‘rnatish 2021-yil;'),
(4, 'Supply and installation of raised floor systems (30 sq.m.) in the data center of a private bank located on the territory of Tashkent City (Tashkent) 2022;', 'Поставка и установка систем фальшпола (30 кв.м.) в помещении центра обработки данных частного банка расположенной на территории Ташкент Сити (г. Ташкент) 2022 год;', 'Tashkent City (Toshkent) xududida joylashgan xususiy bankning ma’lumotlar markazida baland pol tizimlarini yetkazib berish va o‘rnatish (30 kv.m.) 2022;'),
(5, 'Supply and installation of raised floor systems (15 sq.m.) in the server room of the Mercury business center (Tashkent) 2022;', 'Поставка и установка систем фальшпола (15 кв.м.) в серверном помещении бизнес центра «Меркурий» (г. Ташкент) 2022 год;', '“Mercury” biznes markazi (Toshkent sh.) server xonasida ko‘tarilgan pol tizimlarini yetkazib berish va o‘rnatish (15 kv.m.) 2022;'),
(6, 'Supply and installation of raised floor systems (60 sq.m.) in the premises of the Navai Azot operator plant (Navai) 2021;', 'Поставка и установка систем фальшпола (60 кв.м.) в  помещении операторского завода «Наваи азот» (г. Наваи) 2021 год;', '“Navoiy Azot” operator zavodi (Navoiy sh.) 2021-yilda koʻtarilgan pol tizimlarini yetkazib berish va oʻrnatish (60 kv.m.);'),
(7, 'Supply, pouring of self-leveling floor, painting and installation of raised floor systems (15 sq.m.) in the server room at the building of JSC \"O\'ZBEKEKSPERTIZA\" (Tashkent) 2022;', 'Поставка, заливка наливной пол, покраска и  установка систем фальшпола (15 кв.м.) в серверном помещении на здании АО «O’ZBEKEKSPERTIZA»  (г. Ташкент) 2022 год;', '“O\'ZBEKEKSPERTIZA” AJ binosidagi server xonasida (15 kv.m.) o\'z-o\'zidan tekislanadigan polni yetkazib berish, quyish, bo\'yash va ko\'tarilgan pol tizimlarini o\'rnatish (Toshkent sh.) 2022;'),
(8, 'Supply of raised floor systems (35 sq.m.) in the premises of the wire node on the building of Vodiy Business Savdo Invest LLC (Kokand) 2020; &nbsp;', 'Поставка систем фальшпола (35 кв.м.) в помещении узла проводов на здании ООО «Водий Бизнес Савдо Инвест» (г. Коканд) 2020 год; &nbsp;', '“Vodiy Business Savdo Invest” MChJ (Qo‘qon) 2020-yilgi binosidagi sim uzellari binolarida ko‘tarilgan pol tizimlarini (35 kv.m.) yetkazib berish; &nbsp;');

-- --------------------------------------------------------

--
-- Table structure for table `home_header`
--

CREATE TABLE `home_header` (
  `id` int NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `title_ru` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `title_uz` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `text_en` text COLLATE utf8mb4_general_ci NOT NULL,
  `text_ru` text COLLATE utf8mb4_general_ci NOT NULL,
  `text_uz` text COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home_header`
--

INSERT INTO `home_header` (`id`, `title_en`, `title_ru`, `title_uz`, `text_en`, `text_ru`, `text_uz`, `image`, `created_at`) VALUES
(7, 'Raised floor from leading turnkey manufacturing plants.', 'Фальшпол от ведущих заводов-производителей под ключ.', 'Eng yetakchi ishlab chiqaruvchilardan Falshpollarni yetkazib  beramiz va o’rnatamiz.', 'We offer raised flooring and installation services for any task. We will help you choose materials depending on the type of room in which you want to make a raised floor.\r\n</br>\r\n<strong>\r\nFrom calculation to installation.\r\n</strong>', 'Мы предлагаем фальшпол и услуги по его монтажу под любую задачу. Мы поможем Вам выбрать материалы в зависимости от типа помещения, в котором нужно сделать фальшпол.\r\n</br>\r\n<strong>От расчета до монтажа.</strong>', 'Biz har qanday vazifa uchun Falshpol o\'rnatish xizmatlarini taklif qilamiz. Biz sizga falshpolni yasamoqchi bo\'lgan xonaning turiga qarab materiallarni tanlashda yordam beramiz.\r\n</br>\r\n<strong>Narxlarni hisoblatish va buyurtma berish uchun ro‘yxatdan o‘ting. </strong>', 'uploads/home/2023-07-04/64a3f739c8a94.png', '2023-04-17 21:29:20');

-- --------------------------------------------------------

--
-- Table structure for table `home_partners`
--

CREATE TABLE `home_partners` (
  `id` int NOT NULL,
  `title_en` text COLLATE utf8mb4_general_ci NOT NULL,
  `title_ru` text COLLATE utf8mb4_general_ci NOT NULL,
  `title_uz` text COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home_partners`
--

INSERT INTO `home_partners` (`id`, `title_en`, `title_ru`, `title_uz`, `image`, `created_at`) VALUES
(1, 'jansen', 'jansen', 'jansen', 'uploads/home/2023-04-19/643fc89dd156c.jpg', '2023-04-19 13:55:25'),
(2, 'K&R design', 'K&R design', 'K&R design', 'uploads/home/2023-04-19/643fc8be17d36.jpg', '2023-04-19 13:55:58'),
(3, 'Changzhou majet', 'Changzhou majet', 'Changzhou majet', 'uploads/home/2023-04-19/643fc8dc462a6.jpg', '2023-04-19 13:56:28');

-- --------------------------------------------------------

--
-- Table structure for table `home_why_us`
--

CREATE TABLE `home_why_us` (
  `id` int NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `title_ru` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `title_uz` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `text_en` text COLLATE utf8mb4_general_ci NOT NULL,
  `text_ru` text COLLATE utf8mb4_general_ci NOT NULL,
  `text_uz` text COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home_why_us`
--

INSERT INTO `home_why_us` (`id`, `title_en`, `title_ru`, `title_uz`, `text_en`, `text_ru`, `text_uz`, `image`, `created_at`) VALUES
(1, 'Quality', 'Качество', 'Sifat', 'We work with leading manufacturers of raised floors and carry out orders\r\nthroughout Uzbekistan', 'Мы работаем с ведущими производителями фальшполов и осуществляем заказы\r\nпо всему Узбекистану', 'Biz falshpol ishlab chiqaruvchilari bilan hamkorlik qilamiz va butun O\'zbekiston bo\'ylab buyurtmalarni bajaramiz', 'uploads/home/2023-04-19/643ef91b83a8b.png', '2023-04-18 23:10:03'),
(2, 'Support', 'Поддержка', 'Qo\'llab-quvvatlash', 'We provide full support and support the project from the\r\ndesign stage to the commissioning of the facility.', 'Мы осуществляем полную поддержку и ведем сопровождение проекта от стадии\r\nпроектирования до сдачи объекта', 'Biz loyihani bosqichidan ob\'ektni ishga tushirishgacha to\'liq qo\'llab-quvvatlaymiz.', 'uploads/home/2023-04-19/643efce086dc3.png', '2023-04-18 23:26:08'),
(3, 'Experience', 'Опыт', 'Tajriba', 'We know all the subtleties of installation work on the raised floor. We will organize a raised floor in your turnkey premises as soon as possible', 'Мы знаем все тонкости монтажных работ по фальшполу. Организуем фальшпол в ваше помещение под-ключ в кратчайшие сроки', 'Falshpol montaj ishlarining barcha nozikliklarini bilamiz. Biz imkon qadar qisqa vaqt ichida topshiramiz.', 'uploads/home/2023-04-19/643efd4c3884f.png', '2023-04-18 23:27:56');

-- --------------------------------------------------------

--
-- Table structure for table `lang`
--

CREATE TABLE `lang` (
  `id` int NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `local` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `default` smallint NOT NULL DEFAULT '0',
  `date_update` int NOT NULL,
  `date_create` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lang`
--

INSERT INTO `lang` (`id`, `url`, `local`, `name`, `default`, `date_update`, `date_create`) VALUES
(1, 'uz', 'uz-UZ', 'Uzbek', 0, 1558448249, 1558448249),
(2, 'ru', 'ru-RU', 'Русский', 1, 1558448249, 1558448249),
(3, 'en', 'en-EN', 'English', 2, 1558448249, 1558448249);

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) COLLATE utf8mb4_general_ci NOT NULL,
  `apply_time` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1682546361),
('m230427_074051_create_project_gallery_table', 1682581498);

-- --------------------------------------------------------

--
-- Table structure for table `montage_header`
--

CREATE TABLE `montage_header` (
  `id` int NOT NULL,
  `text_en` text COLLATE utf8mb4_general_ci NOT NULL,
  `text_ru` text COLLATE utf8mb4_general_ci NOT NULL,
  `text_uz` text COLLATE utf8mb4_general_ci NOT NULL,
  `youtube_link` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `montage_header`
--

INSERT INTO `montage_header` (`id`, `text_en`, `text_ru`, `text_uz`, `youtube_link`) VALUES
(1, 'A raised floor is a flooring system placed on special pedestals between the ceiling and the floor covering. Laying the raised floor is carried out at the desired height from the floor level. The minimum height of the raised floor is 18 mm. In the resulting intermediate space, water supply, heating, network and electric cables are placed.\r\n</br>\r\n</br>\r\nThe range of application of the material is extremely wide: installation of a raised floor is possible in offices, common areas, server rooms, concert halls, cinemas. The laying principle is the same for any type of room, the main thing is to follow the raised floor scheme. Next, consider the sequence of actions.', 'Фальшпол — это система напольных покрытий, располагаемая на специальных пьедесталах между перекрытием и напольным покрытием. Укладка фальшпола осуществляется на желаемой высоте от уровня пола. Минимальная высота фальшпола – 18 мм. В образовавшемся промежуточном пространстве размещается водопровод, отопление, сетевые и электрические кабели.\r\n</br>\r\n</br>\r\nСпектр применения материала крайне широк: монтаж фальшпола возможен в офисах, местах общего пользования, серверных, концертных залах, кинотеатрах. Принцип укладки одинаков для любого типа помещения, главное – соблюдать схему фальшпола. Далее рассмотрим последовательность действий.', 'Falshpol - bu ship va pol qoplamasi o\'rtasida maxsus poydevorlarga o\'rnatilgan taxta tizimi. Falshpolni yotqizish pol sathidan kerakli balandlikda amalga oshiriladi. Falshpolning minimal balandligi 18 mm. Olingan oraliq bo\'shliqda suv ta\'minoti, isitish, tarmoq va elektr kabellari joylashtiriladi.\r\n</br>\r\n</br>\r\nMaterialni qo\'llash doirasi juda keng: ofislarda, umumiy foydalanish joylarida, server xonalarida, kontsert zallarida, kinoteatrlarda baland qavatni o\'rnatish mumkin. Har qanday turdagi xona uchun yotqizish printsipi bir xil, asosiysi falshpol sxemasiga rioya qilishdir. Keyinchalik, harakatlar ketma-ketligini ko\'rib chiqiladi. ', '<iframe width=\"659\" height=\"370\" src=\"https://www.youtube.com/embed/ase1QCdlddY\" title=\"Монтажная система Hilti MR. Интегрированные фальшполы\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `montage_info`
--

CREATE TABLE `montage_info` (
  `id` int NOT NULL,
  `title_en` text COLLATE utf8mb4_general_ci NOT NULL,
  `title_ru` text COLLATE utf8mb4_general_ci NOT NULL,
  `title_uz` text COLLATE utf8mb4_general_ci NOT NULL,
  `text_en` text COLLATE utf8mb4_general_ci NOT NULL,
  `text_ru` text COLLATE utf8mb4_general_ci NOT NULL,
  `text_uz` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `montage_info`
--

INSERT INTO `montage_info` (`id`, `title_en`, `title_ru`, `title_uz`, `text_en`, `text_ru`, `text_uz`) VALUES
(2, 'STORAGE AND INSTALLATION CONDITIONS', 'УСЛОВИЯ ХРАНЕНИЯ И УСТАНОВКИ', 'SAQLASH VA O\'RNATISH SHARTLARI', 'Raised floor panels require careful and careful storage and cannot be stored in warehouses with large temperature fluctuations that water or moisture can penetrate. It is necessary to check each raised floor slab immediately before installation for external mechanical and corrosion damage. Otherwise, complaints and claims will not be accepted, since the structure has already been installed. But this applies only to the case when you order the raised floor parts separately and not from the company that installs and installs these parts. Therefore, we recommend that you order raised floor components and installation from our company, as a result you will receive a high-quality floor with warranty service.', 'Панели фальшпола требуют грамотного и аккуратного хранения и не могут лежать на складах с большими перепадами температур, в которые может проникнуть вода или влага. Необходимо проверять каждую плиту фальшпола непосредственно перед монтажом на наличие внешних механических и коррозийных повреждений. В противном случае жалобы и претензии не будут приняты, так как конструкция уже установлена. Но это касается лишь того случая, когда Вы заказываете детали фальшпола отдельно и не в компании, производящей установку и монтаж этих деталей. Поэтому мы рекомендуем Вам заказывать компоненты фальшполов и установку в нашей фирме, в результате Вы получите качественный пол с гарантийным обслуживанием.', 'Falshpol panellari ehtiyotkorlik bilan saqlashni talab qiladi va suv yoki namlikning kirib borishi mumkin bo\'lgan katta harorat o\'zgarishlari bo\'lgan omborlarda saqlanishi mumkin emas. O\'rnatishdan oldin har bir ko\'tarilgan taxta plitasini tashqi mexanik va korroziyaga qarshi shikastlanish uchun darhol tekshirish kerak.\r\nAmmo bu faqat falshpol qismlariga alohida buyurtma berganingizda va ushbu qismlarga katta e’tibor qaratishingiz kerak\r\nShuning uchun, bizning kompaniyamizdan falshpol komponentlarini va o\'rnatishni buyurtma qilishingizni tavsiya qilamiz, natijada siz kafolatli xizmat ko\'rsatadigan yuqori sifatli polga ega bo\'lasiz.\r\n'),
(3, 'Subfloor preparation', 'Подготовка чернового пола', 'Zaminni tayyorlash', 'A drawing (layout) of the raised floor is created, according to which installation work will be carried out.\r\nInstallation of the material should be carried out in a dry room with a humidity of 40-75% at a temperature of 5-35°C. In the order of work at the facility, lay the raised floor in such a way as not to shift it again.\r\nThe base for mounting the pedestals must be cleaned with an industrial vacuum cleaner. In some cases, use a primer or dust-removing paint. Check if the paint is compatible with the metalwork.', 'Создается чертеж (раскладка) фальшпола, по которому будут проводиться монтажные работы.\r\nМонтаж материала производить в сухом помещении с влажностью 40-75% при температуре 5-35°С. В порядке работ на объекте укладку фальшпола производить так, чтобы не перекладывать его повторно.\r\nОснование для монтажа пьедесталов необходимо очистить промышленным пылесосом. В некоторых случаях использовать грунтовку или обеспыливающую краску. Следите за тем, совместима ли краска с металлоконструкциями.', 'Falshpolning chizmasi (tartibi) yaratiladi, unga ko\'ra montaj ishlari olib boriladi.\r\nMaterialni o\'rnatish 5-35 ° S haroratda 40-75% namlik bo\'lgan quruq xonada amalga oshirilishi kerak. Ob\'ektdagi ish tartibiga ko\'ra, falshpolni yana siljitmaydigan qilib qo\'ying.\r\nPoydevorlarni o\'rnatish uchun taglik sanoat changyutgich bilan tozalanishi kerak. Ba\'zi hollarda, astar yoki changni olib tashlaydigan bo\'yoqlardan foydalaning. Bo\'yoqning metallga mos kelishini tekshiring.'),
(4, 'Other preliminary work', 'Прочие предварительные работы', 'Boshqa dastlabki ishlar', 'If communications will be laid under the raised floor system, it is necessary to mark the location of the cable channels and pipes. Wiring of communications should be carried out so that they do not interfere with the installation of pedestals. Their location is also marked on the subfloor with a rectangular grid.', 'Если под системой фальшпола будут проложены коммуникации, необходимо разметить местонахождение кабель-каналов и труб. Проводку коммуникаций следует выполнять так, чтобы они не мешали установке пьедесталов. Их местоположение также отмечается на черновом полу прямоугольной сеткой.', 'Agar kommunikatsiyalar falshpol tizimi ostida yotqizilgan bo\'lsa, kabel kanallari va quvurlarning joylashishini belgilash kerak. Aloqa simlarini o\'rnatish poydevorlarni o\'rnatishga xalaqit bermasligi uchun amalga oshirilishi kerak. Ularning joylashuvi to\'rtburchaklar panjara bilan pastki qavatda ham belgilangan.\r\n'),
(5, 'After installation', 'После монтажа ', 'O\'rnatishdan keyin', 'In order for the raised floor to serve for a long time, it is important to correctly observe the installation technology of the raised floor and operating conditions. Here are a few main points:\r\n</br> \r\n</br>\r\n◉ Once a year, qualified personnel should inspect the structure.\r\n</br>\r\n◉ In places with high traffic, turn the slabs at least four times a year.\r\n</br>\r\n◉ If the panel is damaged or deformed, replace it immediately. This also applies to other components of the system.\r\n</br>\r\n◉ If, after installation, it was necessary to make additional cutouts in the panels, special protective elements must be installed around the perimeter so as not to damage the raised floor system.\r\n</br>\r\n</br> \r\n</br>\r\nYou can get other tips on caring for the material from our managers. The cost of installing a raised floor per m2 depends on the components used, the height of the posts, the presence of stringers and the curvature of the subfloor.', 'Чтобы фальшпол прослужил долго, важно правильно соблюдать монтажную технологию фальшпола и условия эксплуатации. Вот несколько основных пунктов:\r\n</br> \r\n</br>\r\n◉ Раз в год квалифицированные специалисты должны осматривать конструкцию.\r\n</br>\r\n◉ В местах с большой проходимостью переворачивать плиты от четырёх раз в год.\r\n</br>\r\n◉ Если панель повредилась или деформировалась – сразу её заменить. Это относится и к другим компонентам системы.\r\n</br>\r\n◉ Если после монтажа понадобилось сделать дополнительные вырезы в панелях, по периметру необходимо установить специальные защитные элементы, чтобы не повредить систему фальшпола.\r\n</br>\r\n</br> \r\n</br>\r\nДругие советы по уходу за материалом вы сможете получить у наших менеджеров. Стоимость монтажа фальшпола за м2 зависит от используемых компонентов, высоты стоек, наличия стрингеров и кривизны чернового пола.\r\n', 'Falshpolning uzoq vaqt xizmat qilishi uchun o\'rnatish texnologiyasini va ish sharoitlarini to\'g\'ri kuzatish muhimdir. Mana bir nechta asosiy fikrlar:\r\n</br> \r\n</br>\r\n◉ Yiliga bir marta malakali xodimlar strukturani tekshirishlari kerak.\r\n</br>\r\n◉ Yo\'l harakati yuqori bo\'lgan joylarda, plitalarni yiliga kamida to\'rt marta aylantiring.\r\n</br>\r\n◉ Agar panel shikastlangan yoki deformatsiyalangan bo\'lsa, uni darhol almashtiring. Bu tizimning boshqa komponentlariga ham tegishli.\r\n</br>\r\n◉ O\'rnatishdan so\'ng, panellarda qo\'shimcha kesishlar qilish kerak bo\'lsa, ko\'tarilgan zamin tizimiga zarar bermaslik uchun perimetr atrofida maxsus himoya elementlari o\'rnatilishi kerak.\r\n</br>\r\n</br>\r\nMateriallarga g\'amxo\'rlik qilish bo\'yicha boshqa maslahatlarni menejerlarimizdan olishingiz mumkin. Har m2 uchun baland qavatni o\'rnatish qiymati ishlatiladigan komponentlarga, ustunlarning balandligiga, stringerlarning mavjudligiga va pastki qavatning egriligiga bog\'liq.');

-- --------------------------------------------------------

--
-- Table structure for table `projects_header`
--

CREATE TABLE `projects_header` (
  `id` int NOT NULL,
  `text_en` text COLLATE utf8mb4_general_ci NOT NULL,
  `text_ru` text COLLATE utf8mb4_general_ci NOT NULL,
  `text_uz` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects_header`
--

INSERT INTO `projects_header` (`id`, `text_en`, `text_ru`, `text_uz`) VALUES
(1, 'A raised floor is a flooring system placed on special pedestals between the ceiling and the floor covering. Laying the raised floor is carried out at the desired height from the floor level. The minimum height of the raised floor is 18 mm. In the resulting intermediate space, water supply, heating, network and electric cables are placed.', 'Фальшпол — это система напольных покрытий, располагаемая на специальных пьедесталах между перекрытием и напольным покрытием. Укладка фальшпола осуществляется на желаемой высоте от уровня пола. Минимальная высота фальшпола – 18 мм. В образовавшемся промежуточном пространстве размещается водопровод, отопление, сетевые и электрические кабели.', 'Falshpol - bu ship va pol qoplamasi o\'rtasida maxsus poydevorlarga o\'rnatilgan taxta tizimi. Falshpolni yotqizish pol sathidan kerakli balandlikda amalga oshiriladi. Falshpolning minimal balandligi 18 mm. Olingan oraliq bo\'shliqda suv ta\'minoti, isitish, tarmoq va elektr kabellari joylashtiriladi.'),
(2, 'The range of application of the material is extremely wide: installation of a raised floor is possible in offices, common areas, server rooms, concert halls, cinemas. The laying principle is the same for any type of room, the main thing is to follow the raised floor scheme. Next, consider the sequence of actions.', 'Спектр применения материала крайне широк: монтаж фальшпола возможен в офисах, местах общего пользования, серверных, концертных залах, кинотеатрах. Принцип укладки одинаков для любого типа помещения, главное – соблюдать схему фальшпола. Далее рассмотрим последовательность действий.', 'Materialni qo\'llash doirasi juda keng: ofislarda, umumiy foydalanish joylarida, server xonalarida, kontsert zallarida, kinoteatrlarda baland qavatni o\'rnatish mumkin. Har qanday turdagi xona uchun yotqizish printsipi bir xil, asosiysi falshpol sxemasiga rioya qilishdir. Keyinchalik, harakatlar ketma-ketligini ko\'rib chiqish kerak bo’ladi. ');

-- --------------------------------------------------------

--
-- Table structure for table `project_gallery`
--

CREATE TABLE `project_gallery` (
  `id` int NOT NULL,
  `project_show_id` int NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project_gallery`
--

INSERT INTO `project_gallery` (`id`, `project_show_id`, `image`) VALUES
(104, 1, 'uploads/gallery/2023-05-09/6459da361614c.jpg'),
(105, 1, 'uploads/gallery/2023-05-09/6459da361894b.jpg'),
(106, 1, 'uploads/gallery/2023-05-09/6459da3618f38.jpg'),
(107, 1, 'uploads/gallery/2023-05-09/6459da36195a5.jpg'),
(108, 1, 'uploads/gallery/2023-05-09/6459da3619c84.jpg'),
(109, 1, 'uploads/gallery/2023-05-09/6459da361a38a.jpg'),
(110, 1, 'uploads/gallery/2023-05-09/6459da361aa82.jpg'),
(111, 1, 'uploads/gallery/2023-05-09/6459da361b167.jpg'),
(112, 1, 'uploads/gallery/2023-05-09/6459da361b816.jpg'),
(113, 1, 'uploads/gallery/2023-05-09/6459da361bea3.jpg'),
(115, 2, 'uploads/gallery/2023-05-09/6459e71585b52.jpg'),
(116, 2, 'uploads/gallery/2023-05-09/6459e7158891c.jpg'),
(117, 2, 'uploads/gallery/2023-05-09/6459e715892a5.jpg'),
(118, 2, 'uploads/gallery/2023-05-09/6459e71589a82.jpg'),
(119, 2, 'uploads/gallery/2023-05-09/6459e7158a35a.jpg'),
(120, 2, 'uploads/gallery/2023-05-09/6459e7158ab75.jpg'),
(121, 2, 'uploads/gallery/2023-05-09/6459e7158b48e.jpg'),
(122, 2, 'uploads/gallery/2023-05-09/6459e7158bbbc.jpg'),
(123, 2, 'uploads/gallery/2023-05-09/6459e7158c48c.jpg'),
(124, 2, 'uploads/gallery/2023-05-09/6459e7158ce90.jpg'),
(125, 3, 'uploads/gallery/2023-05-09/6459e7a3cb7a1.jpg'),
(126, 3, 'uploads/gallery/2023-05-09/6459e7a3cda04.jpg'),
(127, 3, 'uploads/gallery/2023-05-09/6459e7a3ce196.jpg'),
(128, 3, 'uploads/gallery/2023-05-09/6459e7a3ce9f2.jpg'),
(129, 3, 'uploads/gallery/2023-05-09/6459e7a3cf136.jpg'),
(130, 3, 'uploads/gallery/2023-05-09/6459e7a3cf77d.jpg'),
(131, 3, 'uploads/gallery/2023-05-09/6459e7a3cfd30.jpg'),
(132, 4, 'uploads/gallery/2023-05-09/6459e8180f6aa.jpg'),
(133, 4, 'uploads/gallery/2023-05-09/6459e81811909.jpg'),
(134, 4, 'uploads/gallery/2023-05-09/6459e81811fc7.jpg'),
(135, 4, 'uploads/gallery/2023-05-09/6459e818128d7.jpg'),
(136, 4, 'uploads/gallery/2023-05-09/6459e81812fb9.jpg'),
(137, 4, 'uploads/gallery/2023-05-09/6459e818136d8.jpg'),
(138, 4, 'uploads/gallery/2023-05-09/6459e81813ce7.jpg'),
(139, 4, 'uploads/gallery/2023-05-09/6459e81814373.jpg'),
(140, 4, 'uploads/gallery/2023-05-09/6459e81814a88.jpg'),
(141, 4, 'uploads/gallery/2023-05-09/6459e81815477.jpg'),
(142, 4, 'uploads/gallery/2023-05-09/6459e81815ac4.jpg'),
(143, 4, 'uploads/gallery/2023-05-09/6459e81816344.jpg'),
(144, 4, 'uploads/gallery/2023-05-09/6459e818168e0.jpg'),
(145, 4, 'uploads/gallery/2023-05-09/6459e81816f26.jpg'),
(146, 4, 'uploads/gallery/2023-05-09/6459e818174c2.jpg'),
(147, 5, 'uploads/gallery/2023-05-09/6459e86ca5730.jpg'),
(148, 5, 'uploads/gallery/2023-05-09/6459e86ca7f8e.jpg'),
(149, 5, 'uploads/gallery/2023-05-09/6459e86ca8848.jpg'),
(150, 5, 'uploads/gallery/2023-05-09/6459e86ca90f5.jpg'),
(151, 5, 'uploads/gallery/2023-05-09/6459e86ca978d.jpg'),
(152, 5, 'uploads/gallery/2023-05-09/6459e86ca9ddb.jpg'),
(153, 6, 'uploads/gallery/2023-05-09/6459e8d7ab94c.jpg'),
(154, 6, 'uploads/gallery/2023-05-09/6459e8d7ae314.jpg'),
(155, 6, 'uploads/gallery/2023-05-09/6459e8d7aea9c.jpg'),
(156, 6, 'uploads/gallery/2023-05-09/6459e8d7af597.jpg'),
(157, 6, 'uploads/gallery/2023-05-09/6459e8d7afbe9.jpg'),
(158, 6, 'uploads/gallery/2023-05-09/6459e8d7b0330.jpg'),
(159, 6, 'uploads/gallery/2023-05-09/6459e8d7b096e.jpg'),
(160, 6, 'uploads/gallery/2023-05-09/6459e8d7b1059.jpg'),
(161, 6, 'uploads/gallery/2023-05-09/6459e8d7b16d8.jpg'),
(162, 6, 'uploads/gallery/2023-05-09/6459e8d7b1d0b.jpg'),
(163, 6, 'uploads/gallery/2023-05-09/6459e8d7b228a.jpg'),
(164, 6, 'uploads/gallery/2023-05-09/6459e8d7b28a3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `project_show`
--

CREATE TABLE `project_show` (
  `id` int NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `title_ru` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `title_uz` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `text_en` text COLLATE utf8mb4_general_ci NOT NULL,
  `text_ru` text COLLATE utf8mb4_general_ci NOT NULL,
  `text_uz` text COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project_show`
--

INSERT INTO `project_show` (`id`, `title_en`, `title_ru`, `title_uz`, `text_en`, `text_ru`, `text_uz`, `image`, `created_at`) VALUES
(1, 'Mercury Business Center', 'Mercury Бизнес центр', 'Mercury biznes markazi', 'Over 10,000 sq. m. of raised floors were installed at the facility. m. using Italian ceramics and PVC tiles for finishing. The project used a raised floor based on calcium sulfate. The work was carried out around the clock so that the customer could move to a new office on time.\r\nThe customer was satisfied with the results of the work performed.', 'На объекте был сделан монтаж фальшполов более 10 тыс. кв. м. с использованием итальянской керамики и ПВХ-плитки для финишного покрытия. В проекте применён фальшпол на основе из сульфата кальция. Работы велись круглосуточно для того, чтобы заказчик смог вовремя переехать в новый офис.\r\nРезультатами произведенных работ заказчик остался доволен.', 'Ob\'ektda 10 ming kvadrat metrdan ortiq ko\'tarilgan pollar o\'rnatildi. m., tugatish uchun italyan keramikasi va PVX plitkalar yordamida. Loyihada kaltsiy sulfatga asoslangan baland qavat ishlatilgan. Mijoz yangi ofisga o\'z vaqtida ko\'chib o\'tishi uchun ish kechayu kunduz amalga oshirildi.\r\n</br>\r\nBuyurtmachi bajarilgan ish natijalaridan mamnun bo\'ldi.', 'uploads/home/2023-04-19/644026b01e5c6.jpg', '2023-04-19 20:36:48'),
(2, 'Ministry of Water Resources of the Republic of Uzbekistan', 'Министерство водного хозяйства Республики Узбекистан', 'O‘zbekiston Respublikasi Suv xo‘jaligi vazirligi', 'Over 10,000 sq. m. of raised floors were installed at the facility. m. using Italian ceramics and PVC tiles for finishing. The project used a raised floor based on calcium sulfate. The work was carried out around the clock so that the customer could move to a new office on time.\r\nThe customer was satisfied with the results of the work performed.', 'На объекте был сделан монтаж фальшполов более 10 тыс. кв. м. с использованием итальянской керамики и ПВХ-плитки для финишного покрытия. В проекте применён фальшпол на основе из сульфата кальция. Работы велись круглосуточно для того, чтобы заказчик смог вовремя переехать в новый офис.\r\nРезультатами произведенных работ заказчик остался доволен.', 'Ob\'ektda 10 ming kvadrat metrdan ortiq ko\'tarilgan pollar o\'rnatildi. m., tugatish uchun italyan keramikasi va PVX plitkalar yordamida. Loyihada kaltsiy sulfatga asoslangan baland qavat ishlatilgan. Mijoz yangi ofisga o\'z vaqtida ko\'chib o\'tishi uchun ish kechayu kunduz amalga oshirildi.\r\n</br>\r\nBuyurtmachi bajarilgan ish natijalaridan mamnun bo\'ldi.', 'uploads/home/2023-04-19/64402b1f63d72.jpg', '2023-04-19 20:55:43'),
(3, 'Server room on the building of JSC \"O\'ZBEKEKSPERTIZA\"', 'Серверном помещении на здании АО «O\'ZBEKEKSPERTIZA»', '\"O\'ZBEKEKSPERTIZA\" AK binosidagi server xonasi', 'Over 10,000 sq. m. of raised floors were installed at the facility. m. using Italian ceramics and PVC tiles for finishing. The project used a raised floor based on calcium sulfate. The work was carried out around the clock so that the customer could move to a new office on time.\r\nThe customer was satisfied with the results of the work performed.', 'На объекте был сделан монтаж фальшполов более 10 тыс. кв. м. с использованием итальянской керамики и ПВХ-плитки для финишного покрытия. В проекте применён фальшпол на основе из сульфата кальция. Работы велись круглосуточно для того, чтобы заказчик смог вовремя переехать в новый офис.\r\nРезультатами произведенных работ заказчик остался доволен.', 'Ob\'ektda 10 ming kvadrat metrdan ortiq ko\'tarilgan pollar o\'rnatildi. m., tugatish uchun italyan keramikasi va PVX plitkalar yordamida. Loyihada kaltsiy sulfatga asoslangan baland qavat ishlatilgan. Mijoz yangi ofisga o\'z vaqtida ko\'chib o\'tishi uchun ish kechayu kunduz amalga oshirildi.\r\n</br>\r\nBuyurtmachi bajarilgan ish natijalaridan mamnun bo\'ldi.', 'uploads/home/2023-04-19/64402ba64034a.jpg', '2023-04-19 20:57:58'),
(4, 'Customs Department of Tashkent region (Nurafshan) in 2019', 'Таможенного управление Ташкентской области (г. Нурафшан) в 2019 году', 'Toshkent viloyati bojxona boshqarmasi (Nurafshon) 2019-yil', 'Over 10,000 sq. m. of raised floors were installed at the facility. m. using Italian ceramics and PVC tiles for finishing. The project used a raised floor based on calcium sulfate. The work was carried out around the clock so that the customer could move to a new office on time.\r\nThe customer was satisfied with the results of the work performed', 'На объекте был сделан монтаж фальшполов более 10 тыс. кв. м. с использованием итальянской керамики и ПВХ-плитки для финишного покрытия. В проекте применён фальшпол на основе из сульфата кальция. Работы велись круглосуточно для того, чтобы заказчик смог вовремя переехать в новый офис.\r\nРезультатами произведенных работ заказчик остался доволен', 'Ob\'ektda 10 ming kvadrat metrdan ortiq ko\'tarilgan pollar o\'rnatildi. m., tugatish uchun italyan keramikasi va PVX plitkalar yordamida. Loyihada kaltsiy sulfatga asoslangan baland qavat ishlatilgan. Mijoz yangi ofisga o\'z vaqtida ko\'chib o\'tishi uchun ish kechayu kunduz amalga oshirildi.\r\n</br>\r\nBuyurtmachi bajarilgan ish natijalaridan mamnun bo\'ldi.', 'uploads/home/2023-04-19/64402c00bbf3f.jpg', '2023-04-19 20:59:28'),
(5, 'Data processing center of the Ministry of Finance of the Republic of Uzbekistan', 'Центра обработки данных Министерства финансов РУз', 'O\'zbekiston Respublikasi Moliya vazirligining ma\'lumotlarni qayta ishlash markazi', 'Over 10,000 sq. m. of raised floors were installed at the facility. m. using Italian ceramics and PVC tiles for finishing. The project used a raised floor based on calcium sulfate. The work was carried out around the clock so that the customer could move to a new office on time.\r\nThe customer was satisfied with the results of the work performed.', 'На объекте был сделан монтаж фальшполов более 10 тыс. кв. м. с использованием итальянской керамики и ПВХ-плитки для финишного покрытия. В проекте применён фальшпол на основе из сульфата кальция. Работы велись круглосуточно для того, чтобы заказчик смог вовремя переехать в новый офис.\r\nРезультатами произведенных работ заказчик остался доволен.', 'Ob\'ektda 10 ming kvadrat metrdan ortiq ko\'tarilgan pollar o\'rnatildi. m., tugatish uchun italyan keramikasi va PVX plitkalar yordamida. Loyihada kaltsiy sulfatga asoslangan baland qavat ishlatilgan. Mijoz yangi ofisga o\'z vaqtida ko\'chib o\'tishi uchun ish kechayu kunduz amalga oshirildi.\r\n</br>\r\nBuyurtmachi bajarilgan ish natijalaridan mamnun bo\'ldi.', 'uploads/home/2023-04-19/64402c5cd475d.jpg', '2023-04-19 21:01:00'),
(6, 'Tashkent City hududida joylashgan xususiy bankning ma\'lumotlarni qayta ishlash markazi', 'Центра обработки данных частного банка расположенной на территории Ташкент Сити', 'Tashkent City hududida joylashgan xususiy bankning ma\'lumotlarni qayta ishlash markazi', 'Over 10,000 sq. m. of raised floors were installed at the facility. m. using Italian ceramics and PVC tiles for finishing. The project used a raised floor based on calcium sulfate. The work was carried out around the clock so that the customer could move to a new office on time.\r\nThe customer was satisfied with the results of the work performed.', 'На объекте был сделан монтаж фальшполов более 10 тыс. кв. м. с использованием итальянской керамики и ПВХ-плитки для финишного покрытия. В проекте применён фальшпол на основе из сульфата кальция. Работы велись круглосуточно для того, чтобы заказчик смог вовремя переехать в новый офис.\r\nРезультатами произведенных работ заказчик остался доволен.', 'Ob\'ektda 10 ming kvadrat metrdan ortiq ko\'tarilgan pollar o\'rnatildi. m., tugatish uchun italyan keramikasi va PVX plitkalar yordamida. Loyihada kaltsiy sulfatga asoslangan baland qavat ishlatilgan. Mijoz yangi ofisga o\'z vaqtida ko\'chib o\'tishi uchun ish kechayu kunduz amalga oshirildi.\r\nBuyurtmachi bajarilgan ish natijalaridan mamnun bo\'ldi.Ob\'ektda 10 ming kvadrat metrdan ortiq ko\'tarilgan pollar o\'rnatildi. m., tugatish uchun italyan keramikasi va PVX plitkalar yordamida. Loyihada kaltsiy sulfatga asoslangan baland qavat ishlatilgan. Mijoz yangi ofisga o\'z vaqtida ko\'chib o\'tishi uchun ish kechayu kunduz amalga oshirildi.\r\n</br>\r\nBuyurtmachi bajarilgan ish natijalaridan mamnun bo\'ldi.', 'uploads/home/2023-04-19/64402cb17098a.jpg', '2023-04-19 21:02:25');

-- --------------------------------------------------------

--
-- Table structure for table `social_link`
--

CREATE TABLE `social_link` (
  `id` int NOT NULL,
  `telegram` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `social_link`
--

INSERT INTO `social_link` (`id`, `telegram`, `facebook`, `instagram`, `phone_number`, `email`, `address`) VALUES
(2, 'https://telegram.org/', 'https://facebook.com/', 'https://instagram.com/', '+998 71 202 02 20', 'info@falshpol.uz', 'г. Ташкент, Шайхантахурский р-н, улица Кукча Дарвоза, дом 10');

-- --------------------------------------------------------

--
-- Table structure for table `type_falshpol_text`
--

CREATE TABLE `type_falshpol_text` (
  `id` int NOT NULL,
  `image1` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `image2` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `text1_en` text COLLATE utf8mb4_general_ci NOT NULL,
  `text1_ru` text COLLATE utf8mb4_general_ci NOT NULL,
  `text1_uz` text COLLATE utf8mb4_general_ci NOT NULL,
  `text2_en` text COLLATE utf8mb4_general_ci NOT NULL,
  `text2_ru` text COLLATE utf8mb4_general_ci NOT NULL,
  `text2_uz` text COLLATE utf8mb4_general_ci NOT NULL,
  `text3_en` text COLLATE utf8mb4_general_ci NOT NULL,
  `text3_ru` text COLLATE utf8mb4_general_ci NOT NULL,
  `text3_uz` text COLLATE utf8mb4_general_ci NOT NULL,
  `text4_en` text COLLATE utf8mb4_general_ci NOT NULL,
  `text4_ru` text COLLATE utf8mb4_general_ci NOT NULL,
  `text4_uz` text COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `type_falshpol_text`
--

INSERT INTO `type_falshpol_text` (`id`, `image1`, `image2`, `text1_en`, `text1_ru`, `text1_uz`, `text2_en`, `text2_ru`, `text2_uz`, `text3_en`, `text3_ru`, `text3_uz`, `text4_en`, `text4_ru`, `text4_uz`, `created_at`) VALUES
(1, 'uploads/home/2023-04-25/50197-12802937-1000x1000.jpg', 'uploads/home/2023-04-25/haworth-floor75360-1000x756.jpg', '<strong>\r\n                             1. According to the material from which the panel is made, as well as according to its shape.\r\n                             <br>Raised floor can be produced:</strong><br>\r\n                         <br>• Chipboard;\r\n                         <br>• Calcium sulfate;\r\n                         <br>• Metal sheet;\r\n                         <br>• Glass;\r\n                         <br>• Aluminium.<br>\r\n                         <br>', '<strong>\r\n                            1. По материалу из которого изготовлена панель, а также по ее форме.\r\n                            <br>Фальшпол может быть произведен:</strong><br>\r\n                        <br>• ДСП;\r\n                        <br>• Сульфата кальция;\r\n                        <br>• Металлический лист;\r\n                        <br>• Стекло;\r\n                        <br>• Алюминий.<br>\r\n                        <br>', '                            1. Panel ishlab chiqarilgan materialga, shuningdek, uning shakliga ko\'ra.\r\n                             <br><strong>Ko\'tarilgan pol:</strong><br>\r\n                         <br>• DSP;\r\n                         <br>• Kaltsiy sulfat;\r\n                         <br>• Metall qatlam;\r\n                         <br>• Shisha;\r\n                         <br>• Alyuminiy.<br>\r\n                         <br>\r\n                     ', '<strong>\r\n                             2. Determine the type of raised floor that is right for your project by determining\r\n                             <br>\r\n                             which panels are suitable for offices, and which are better suited for technical rooms.\r\n                         </strong>\r\n                         <br>\r\n                         <br>Raised floors for data centers and raised floors for server rooms require a special approach in\r\n                         <br>installation and selection of plates. Raised floor for clean rooms conforms to the class\r\n                         <br>premises. The raised floor for hotels is most often one-piece, for public\r\n                         <br>buildings - has a high resistance to abrasion and endurance from dynamic loading.', '<strong>\r\n                            2. Определить тип фальшпола, который подходит для вашего проекта, можно определив,\r\n                            <br>\r\n                            какие панели подходят для офисов, а а какие лучше подойдут для технических помещений.\r\n                        </strong>\r\n                        <br>\r\n                        <br>Фальшпол для ЦОДов и фальшпол для серверных требует особенного подхода в\r\n                        <br>монтаже и выборе плит. Фальшпол для чистых помещений соответствует классу\r\n                        <br>помещения. Фальшпол для гостиниц чаще всего неразъемный, для общественных\r\n                        <br>зданий - имеет высокую стойкость к истиранию и выдержку от динамической нагрузки.', '<strong>\r\n                            2. Qaysi panellar ofislar uchun va qaysi biri texnik xonalarga mos kelishini aniqlab, loyihangizga mos keladigan falshpol turini aniqlaymiz.      </strong>\r\n</br>\r\nMa\'lumotlar markazlari uchun baland qavatlar va server xonalari uchun baland qavatlar plitalarni o\'rnatish va tanlashda alohida yondashuvni talab qiladi. Toza xonalar uchun baland qavat xonaning sinfiga mos keladi. Mehmonxonalar uchun falshpol ko\'pincha bir qismli bo\'lib, jamoat binolari uchun yuklarga chidamlilikka yuqori qarshilikka ega.', '<strong>\r\n                             3. The type of coating also plays an important role in the purpose of raised floors.</strong><br><strong>\r\n                             <br>\r\n                         </strong>\r\n                         It is important to consider that the material for manufacturing depends on the selected coating.\r\n                         <br>plates and in what conditions it will be applied: at a construction site or a factory. So\r\n                         <br>how, what will be the raised floor and its cost depends on the chosen finishing\r\n                         <br>coatings.<br>', '<strong>\r\n                            3. Тип покрытия также играет важную роль в назначения фальшполов.</strong><br><strong>\r\n                            <br>\r\n                        </strong>\r\n                        Важно учитывать, что от выбранного покрытия зависит, материал для изготовления\r\n                        <br>плиты и в каких условиях оно будет наноситься: на стройплощадке или заводе. Таким\r\n                        <br>образом, то каким будет фальшпол и его стоимость зависит от выбранного финишного\r\n                        <br>покрытия.<br>', '<strong>\r\n                            3. Falshpollar maqsadiga ko\'ra, qoplama turi ham muhim rol o\'ynaydi.</strong><br><strong>\r\n                             <br>\r\n                         </strong>\r\n                       Plitani ishlab chiqarish uchun material tanlangan qoplamaga va qanday sharoitlarda qo\'llanilishiga bog\'liqligini hisobga olish kerak: qurilish maydonchasida yoki zavodda. Shunday qilib, falshpol nima bo\'ladi va uning narxi tanlangan tugatish qoplamasiga bog\'liq.', '<br><strong>4. Quality assurance depends on the raised floor manufacturer\r\n                             product.</strong><br><strong>\r\n                             <br></strong>In our recommendations, only high-quality solutions from world\r\n                         manufacturers.\r\n                         <br> Raised floor and its price can be a separate topic for discussion when choosing\r\n                         <br>of the manufacturer of this material.&nbsp;', '<br><strong>4. От производителя фальшпола зависит гарантия качества\r\n                            продукта.</strong><br><strong>\r\n                            <br></strong>В наших рекомендациях только качественные решения от мировых\r\n                        производителей.\r\n                        <br>Фальшпол и цена на него могут быть отдельной темой для обсуждения при выборе\r\n                        <br>производителя этого материала.&nbsp;', '<br><strong>4. Mahsulot sifatini kafolatlash falshpolni ishlab chiqaruvchiga bog\'liq.</strong><br><strong>\r\n                             <br></strong>Bizning tavsiyalarimizda dunyodan faqat yuqori sifatli yechimlar keltirilgan\r\n                         ishlab chiqaruvchilar.\r\n                         <br> Bizning tavsiyalarimiz faqat jahon ishlab chiqaruvchilarining yuqori sifatli yechimlarini o\'z ichiga oladi. .&nbsp;', '2023-04-25 15:54:04');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `auth_key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password_hash` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `password_text` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `auth_key_expire` time NOT NULL,
  `lasted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_block` bigint NOT NULL,
  `access_token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `auth_key`, `password_hash`, `password_text`, `auth_key_expire`, `lasted_at`, `created_at`, `updated_at`, `email`, `first_name`, `last_name`, `is_block`, `access_token`, `role_id`) VALUES
(1, 'admin', '$2y$13$38z8fN8b5dkkv0EDDugMzeaSBeYT5Z.jshVE3dkDGlAUzjOqZuIyS', 'gnBSU3-pAHk4tzjcqjk8MseK2e6otRQG', '$2y$13$r0wW3brc8lbqZqHAXimABupbfmoOu6VRsOCuntPzgla25sbTIuw0G', 'admin858', '00:00:00', '2023-07-26 04:26:38', '2023-02-28 17:01:10', '2023-07-26 09:26:39', '', 'admin users', '', 0, 'tQI4RuG8005xiW-puWByymHTlbR0geU-', 1),
(2, 'content', '$2y$13$4GE2vAQA9JAm/jlaSbJfMuueu3tnIMUI0.1X1BgHvH88tS6juasHq', 'DSnBSU3-pAHk4tzjcqjk8MseK2e6otRQG', '$2y$13$Wd4dKNa6vM6SNAqSVUOnh.62P271vJQAc.8HBpxmZV5o4N5x2r0TW', 'admin858', '00:00:00', '2023-05-06 16:49:37', '2023-05-01 01:43:14', '2023-05-06 21:49:37', '', 'content manager', 'content manager', 0, 'NK86tQYR5QtG4OyF4xseeJts1xB_LG3B', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_attempts`
--

CREATE TABLE `user_attempts` (
  `id` bigint UNSIGNED NOT NULL,
  `ip` bigint UNSIGNED DEFAULT NULL,
  `ip_text` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attempts` int DEFAULT NULL,
  `datetime_attempts` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_attempts`
--

INSERT INTO `user_attempts` (`id`, `ip`, `ip_text`, `attempts`, `datetime_attempts`, `created_at`, `updated_at`) VALUES
(1, 2130706433, '127.0.0.1', 0, '2023-04-30 20:08:05', '2023-04-30 19:39:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_logs`
--

CREATE TABLE `user_logs` (
  `id` bigint NOT NULL,
  `user_id` int DEFAULT NULL,
  `ip_text` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_logs`
--

INSERT INTO `user_logs` (`id`, `user_id`, `ip_text`, `user_agent`, `created_at`, `updated_at`) VALUES
(3, 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', '2023-04-30 20:17:53', '2023-04-30 20:17:53'),
(4, 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', '2023-04-30 20:18:38', '2023-04-30 20:18:38'),
(6, 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', '2023-04-30 20:44:53', '2023-04-30 20:44:53'),
(10, 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', '2023-04-30 21:10:26', '2023-04-30 21:10:26'),
(13, 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', '2023-05-03 12:22:13', '2023-05-03 12:22:13'),
(15, 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', '2023-05-03 14:25:05', '2023-05-03 14:25:05'),
(19, 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', '2023-05-04 13:53:33', '2023-05-04 13:53:33'),
(21, 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', '2023-05-04 15:49:35', '2023-05-04 15:49:35'),
(23, 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', '2023-05-04 16:08:43', '2023-05-04 16:08:43'),
(26, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', '2023-05-06 14:50:21', '2023-05-06 14:50:21'),
(27, 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', '2023-05-06 16:49:37', '2023-05-06 16:49:37'),
(28, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', '2023-05-06 17:47:56', '2023-05-06 17:47:56'),
(29, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', '2023-05-07 15:06:46', '2023-05-07 15:06:46'),
(30, 5, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', '2023-05-07 15:30:06', '2023-05-07 15:30:06'),
(31, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', '2023-05-07 15:30:20', '2023-05-07 15:30:20'),
(32, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', '2023-05-07 20:25:25', '2023-05-07 20:25:25'),
(33, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', '2023-05-07 20:25:33', '2023-05-07 20:25:33'),
(34, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', '2023-05-07 20:26:05', '2023-05-07 20:26:05'),
(35, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', '2023-05-07 20:27:18', '2023-05-07 20:27:18'),
(36, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', '2023-05-07 20:27:37', '2023-05-07 20:27:37'),
(37, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', '2023-05-08 11:16:19', '2023-05-08 11:16:19'),
(38, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', '2023-05-08 15:49:56', '2023-05-08 15:49:56'),
(39, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', '2023-05-09 04:53:54', '2023-05-09 04:53:54'),
(40, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', '2023-06-23 12:36:54', '2023-06-23 12:36:54'),
(41, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', '2023-07-01 21:05:04', '2023-07-01 21:05:04'),
(42, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', '2023-07-22 18:17:57', '2023-07-22 18:17:57'),
(43, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', '2023-07-26 04:26:39', '2023-07-26 04:26:39');

-- --------------------------------------------------------

--
-- Table structure for table `user_permissions`
--

CREATE TABLE `user_permissions` (
  `id` bigint NOT NULL,
  `role_id` int DEFAULT NULL,
  `route` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `access` tinyint(1) DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_permissions`
--

INSERT INTO `user_permissions` (`id`, `role_id`, `route`, `access`, `created_at`, `updated_at`) VALUES
(1, 1, '*', 1, '2023-04-30 14:43:03', '2023-04-30 15:04:23'),
(2, 2, 'site/s', 1, '2023-04-30 15:49:32', '2023-04-30 18:43:12'),
(3, 2, 'site/index', 1, '2023-04-30 15:49:32', '2023-04-30 15:49:32'),
(4, 2, 'site/contact', 1, '2023-04-30 15:49:32', '2023-04-30 15:49:32'),
(5, 2, 'site/about', 1, '2023-04-30 15:49:32', '2023-04-30 15:49:32'),
(6, 2, 'site/montage', 1, '2023-04-30 15:49:32', '2023-04-30 15:49:32'),
(7, 2, 'site/projects', 1, '2023-04-30 15:49:32', '2023-04-30 15:49:32'),
(8, 2, 'site/thanks', 1, '2023-04-30 15:49:32', '2023-04-30 15:49:32'),
(9, 2, 'site/typefalshpol', 1, '2023-04-30 15:49:32', '2023-04-30 15:49:32'),
(10, 2, 'site/falshpol-type-show', 1, '2023-04-30 15:49:32', '2023-04-30 15:49:32'),
(11, 2, 'site/page6', 1, '2023-04-30 15:49:32', '2023-04-30 15:49:32'),
(12, 2, 'site/page7', 1, '2023-04-30 15:49:32', '2023-04-30 15:49:32'),
(13, 2, 'site/page8', 1, '2023-04-30 15:49:32', '2023-04-30 15:49:32'),
(14, 2, 'site/page10', 1, '2023-04-30 15:49:32', '2023-04-30 15:49:32'),
(15, 2, 'site/page12', 1, '2023-04-30 15:49:32', '2023-04-30 15:49:32'),
(16, 2, 'site/premises-show', 1, '2023-04-30 15:49:32', '2023-04-30 15:49:32'),
(17, 2, 'site/page14', 1, '2023-04-30 15:49:32', '2023-04-30 15:49:32'),
(18, 2, 'site/page15', 1, '2023-04-30 15:49:32', '2023-04-30 15:49:32'),
(19, 2, 'site/page16', 1, '2023-04-30 15:49:32', '2023-04-30 15:49:32'),
(20, 2, 'site/page17', 1, '2023-04-30 15:49:32', '2023-04-30 15:49:32'),
(21, 2, 'site/page18', 1, '2023-04-30 15:49:32', '2023-04-30 15:49:32'),
(22, 2, 'site/page19', 1, '2023-04-30 15:49:32', '2023-04-30 15:49:32'),
(23, 2, 'site/project-show', 1, '2023-04-30 15:49:32', '2023-04-30 15:49:32'),
(24, 2, 'site/page21', 1, '2023-04-30 15:49:32', '2023-04-30 15:49:32'),
(25, 2, 'site/page22', 1, '2023-04-30 15:49:32', '2023-04-30 15:49:32'),
(26, 2, 'site/page23', 1, '2023-04-30 15:49:32', '2023-04-30 15:49:32'),
(27, 2, 'site/page24', 1, '2023-04-30 15:49:32', '2023-04-30 15:49:32'),
(28, 2, 'auth/login', 0, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(29, 2, 'auth/logout', 0, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(30, 2, 'admin/index', 0, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(31, 2, 'admin/error', 0, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(32, 2, 'admin/change-password', 0, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(33, 2, 'applications/index', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(34, 2, 'applications/view', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(35, 2, 'applications/message-read', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(36, 2, 'applications/delete', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(37, 2, 'roles/permission', 0, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(38, 2, 'roles/index', 0, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(39, 2, 'roles/add', 0, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(40, 2, 'roles/update', 0, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(41, 2, 'users/index', 0, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(42, 2, 'users/add', 0, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(43, 2, 'users/update', 0, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(44, 2, 'users/status', 0, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(45, 2, 'about-header/index', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(46, 2, 'about-header/view', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(47, 2, 'about-header/create', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(48, 2, 'about-header/update', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(49, 2, 'about-header/delete', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(50, 2, 'about-info/index', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(51, 2, 'about-info/view', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(52, 2, 'about-info/create', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(53, 2, 'about-info/update', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(54, 2, 'about-info/delete', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(55, 2, 'building-solutions/index', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(56, 2, 'building-solutions/view', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(57, 2, 'building-solutions/create', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(58, 2, 'building-solutions/update', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(59, 2, 'building-solutions/delete', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(60, 2, 'falshpol-type-show/index', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(61, 2, 'falshpol-type-show/view', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(62, 2, 'falshpol-type-show/create', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(63, 2, 'falshpol-type-show/update', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(64, 2, 'falshpol-type-show/delete', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(65, 2, 'home-about-us/index', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(66, 2, 'home-about-us/view', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(67, 2, 'home-about-us/create', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(68, 2, 'home-about-us/update', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(69, 2, 'home-about-us/delete', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(70, 2, 'home-benefits/index', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(71, 2, 'home-benefits/view', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(72, 2, 'home-benefits/create', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(73, 2, 'home-benefits/update', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(74, 2, 'home-benefits/delete', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(75, 2, 'home-certificates/index', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(76, 2, 'home-certificates/view', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(77, 2, 'home-certificates/create', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(78, 2, 'home-certificates/update', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(79, 2, 'home-certificates/delete', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(80, 2, 'home-clients/index', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(81, 2, 'home-clients/view', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(82, 2, 'home-clients/create', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(83, 2, 'home-clients/update', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(84, 2, 'home-clients/delete', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(85, 2, 'home-completed-projects/index', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(86, 2, 'home-completed-projects/view', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(87, 2, 'home-completed-projects/create', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(88, 2, 'home-completed-projects/update', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(89, 2, 'home-completed-projects/delete', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(90, 2, 'home-header/index', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(91, 2, 'home-header/view', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(92, 2, 'home-header/create', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(93, 2, 'home-header/update', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(94, 2, 'home-header/delete', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(95, 2, 'home-partners/index', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(96, 2, 'home-partners/view', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(97, 2, 'home-partners/create', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(98, 2, 'home-partners/update', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(99, 2, 'home-partners/delete', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(100, 2, 'home-why-us/index', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(101, 2, 'home-why-us/view', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(102, 2, 'home-why-us/create', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(103, 2, 'home-why-us/update', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(104, 2, 'home-why-us/delete', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(105, 2, 'montage-header/index', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(106, 2, 'montage-header/view', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(107, 2, 'montage-header/create', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(108, 2, 'montage-header/update', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(109, 2, 'montage-header/delete', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(110, 2, 'montage-info/index', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(111, 2, 'montage-info/view', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(112, 2, 'montage-info/create', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(113, 2, 'montage-info/update', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(114, 2, 'montage-info/delete', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(115, 2, 'project-show/index', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(116, 2, 'project-show/view', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(117, 2, 'project-show/create', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(118, 2, 'project-show/update', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(119, 2, 'project-show/delete', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(120, 2, 'projects-header/index', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(121, 2, 'projects-header/view', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(122, 2, 'projects-header/create', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(123, 2, 'projects-header/update', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(124, 2, 'projects-header/delete', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(125, 2, 'social-link/index', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(126, 2, 'social-link/view', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(127, 2, 'social-link/create', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(128, 2, 'social-link/update', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(129, 2, 'social-link/delete', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(130, 2, 'type-falshpol-text/index', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(131, 2, 'type-falshpol-text/view', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(132, 2, 'type-falshpol-text/create', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(133, 2, 'type-falshpol-text/update', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(134, 2, 'type-falshpol-text/delete', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(135, 2, 'project-gallery/index', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(136, 2, 'project-gallery/view', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(137, 2, 'project-gallery/create', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(138, 2, 'project-gallery/update', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(139, 2, 'project-gallery/delete', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(140, 2, 'project-gallery/upload', 1, '2023-04-30 18:51:13', '2023-04-30 18:51:13'),
(141, 2, 'api/index', 0, '2023-05-07 20:10:21', '2023-05-07 20:10:21'),
(142, 2, 'api/view', 0, '2023-05-07 20:10:21', '2023-05-07 20:10:21'),
(143, 2, 'api/update', 0, '2023-05-07 20:10:21', '2023-05-07 20:10:21'),
(144, 2, 'gallery/index', 0, '2023-05-07 20:10:21', '2023-05-07 20:10:21'),
(145, 2, 'gallery/add', 0, '2023-05-07 20:10:21', '2023-05-07 20:10:21'),
(146, 2, 'gallery/update', 0, '2023-05-07 20:10:21', '2023-05-07 20:10:21'),
(147, 2, 'applications/retrieve-data', 0, '2023-05-07 20:10:21', '2023-05-07 20:10:21');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` bigint NOT NULL,
  `name` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `info` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`id`, `name`, `info`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'главный администратор', '2023-04-30 14:40:01', '2023-04-30 14:40:01'),
(2, 'kontent', 'менеджер контента', '2023-04-30 14:40:01', '2023-04-30 14:40:01');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `id` int NOT NULL,
  `created_at` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`id`, `created_at`) VALUES
(1, 1683401154),
(2, 1683473776),
(3, 1683489316),
(4, 1683489330),
(5, 1683490402),
(6, 1683490413),
(7, 1683544428),
(8, 1683717030),
(9, 1683729214),
(10, 1684008420),
(11, 1687427004),
(12, 1687521941),
(13, 1687523628),
(14, 1688244910),
(15, 1688245084),
(16, 1688415337),
(17, 1688426579),
(18, 1688579588),
(19, 1688585987),
(20, 1688667524),
(21, 1688839326),
(22, 1689003149),
(23, 1690047727),
(24, 1690195400);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_header`
--
ALTER TABLE `about_header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_info`
--
ALTER TABLE `about_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `api`
--
ALTER TABLE `api`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `building_solutions`
--
ALTER TABLE `building_solutions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `falshpol_type_show`
--
ALTER TABLE `falshpol_type_show`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_about_us`
--
ALTER TABLE `home_about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_benefits`
--
ALTER TABLE `home_benefits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_certificates`
--
ALTER TABLE `home_certificates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_clients`
--
ALTER TABLE `home_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_completed_projects`
--
ALTER TABLE `home_completed_projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_header`
--
ALTER TABLE `home_header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_partners`
--
ALTER TABLE `home_partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_why_us`
--
ALTER TABLE `home_why_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lang`
--
ALTER TABLE `lang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `montage_header`
--
ALTER TABLE `montage_header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `montage_info`
--
ALTER TABLE `montage_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects_header`
--
ALTER TABLE `projects_header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_gallery`
--
ALTER TABLE `project_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_show`
--
ALTER TABLE `project_show`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_link`
--
ALTER TABLE `social_link`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type_falshpol_text`
--
ALTER TABLE `type_falshpol_text`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_attempts`
--
ALTER TABLE `user_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_logs`
--
ALTER TABLE `user_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_permissions`
--
ALTER TABLE `user_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_header`
--
ALTER TABLE `about_header`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `about_info`
--
ALTER TABLE `about_info`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `api`
--
ALTER TABLE `api`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `building_solutions`
--
ALTER TABLE `building_solutions`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `falshpol_type_show`
--
ALTER TABLE `falshpol_type_show`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_about_us`
--
ALTER TABLE `home_about_us`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_benefits`
--
ALTER TABLE `home_benefits`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `home_certificates`
--
ALTER TABLE `home_certificates`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `home_clients`
--
ALTER TABLE `home_clients`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `home_completed_projects`
--
ALTER TABLE `home_completed_projects`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `home_header`
--
ALTER TABLE `home_header`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `home_partners`
--
ALTER TABLE `home_partners`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `home_why_us`
--
ALTER TABLE `home_why_us`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `montage_header`
--
ALTER TABLE `montage_header`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `montage_info`
--
ALTER TABLE `montage_info`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `projects_header`
--
ALTER TABLE `projects_header`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `project_gallery`
--
ALTER TABLE `project_gallery`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT for table `project_show`
--
ALTER TABLE `project_show`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `social_link`
--
ALTER TABLE `social_link`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `type_falshpol_text`
--
ALTER TABLE `type_falshpol_text`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_attempts`
--
ALTER TABLE `user_attempts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_logs`
--
ALTER TABLE `user_logs`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `user_permissions`
--
ALTER TABLE `user_permissions`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
