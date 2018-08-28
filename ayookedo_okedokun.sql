-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 07, 2018 at 12:45 PM
-- Server version: 10.2.16-MariaDB-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ayookedo_okedokun`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `category` varchar(20) NOT NULL,
  `title` varchar(150) NOT NULL,
  `body` text NOT NULL,
  `status` varchar(4) NOT NULL,
  `picture` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `date`, `category`, `title`, `body`, `status`, `picture`) VALUES
(1, '2018-07-26', 'Herbal Medicine', 'MORE HERBAL CURES FOR HIV VALIDATED', 'Can a combination of local herbs including bitter leaf, bitter kola, lemon, lemon grass, Moringa, Gardonema mushroom and Neem tree provide the elusive cure for Human Immuno-deficiency Virus (HIV) that causes Acquired Immune Deficiency Syndrome (AIDS)? CHUKWUMA MUANYA, Assistant Editor, examines indigenous plants that have shown antiviral properties and could be used to boost immunity against not just HIV but cancer and other immune-compromised conditions.\r\n\r\nNigerian researchers have found that water-based extract of bitter leaf (Vernonia amygdalina) could be used as adjuvant in the management of people living with Human Immuno-deficiency Virus (HIV)/Acquired Immune Deficiency Syndrome (AIDS).\r\n\r\nA recent study on the immunological effect of Vernonia amygdalina leaf extract and immunace® (nutritional supplement) on HIV-infected patients taking highly active antiretroviral therapy (HAART) found that it could serve as a nutritional supplement in an HIV-infected or immuno-compromised condition such as cancer or diabetes patients.\r\n\r\nThe study published in Asian Pacific Journal of Tropical Biomedicine concluded: “The aqueous extract of Vernonia amygdalina (bitter leaf) and immunace or both have the immunological effect on HIV-infected patients. Therefore, we suggest that the V. amygdalina extract or immunace or both could be used as adjuvant in the management of HIV/AIDS clients.”\r\n\r\nThe study was conducted by researchers from the Department of Pharmaceutics, University of Nigeria Nsukka, Enugu State; Department of Chemistry, Ahmadu Bello University Zaria; and Department of Pharmaceutics and Pharmaceutical Technology University of Uyo, Akwa Ibom State.\r\n\r\nThe result of the study showed that the mean absolute CD4 count (a marker of the immune system) was increased in the client who took the extract or supplement. And the clients who took both the extract and supplement had a greater increase in the CD4 count. The increased CD4 was significant as compared with the control group. The skin rashes were also improved in the entire groups.\r\n\r\nAlso, the World Health Organisation (WHO) and the Food and Agricultural Organisation (FAO) have endorsed some herbs and spices that have shown promise in treating the opportunistic infections associated with the viral infections without side effects.\r\n\r\nThey have verified the efficacy of garlic (Allium sativum), ginger (Zingiber officinarum), cloves (Syzigium aromaticum), thyme, cayenne, basil, Aloe vera, Neem tree (Dogonyaro/Azadiratcha indica), lemon (Citrus limon), lemon grass (Cymbopogon citratus) in the treatment of opportunistic infections associated with the HIV/AIDS.\r\n\r\nA Neem-based product has received United States (U.S.) patent, “US 20070275085 A1”, as compositions and methods for the cure of HIV/AIDS.\r\n\r\nAlso, Nigerian researchers led by a professor of pharmacognosy at the University of Nigeria Nsukka (UNN), Chief Executive Officer of Bioresources Development Group (BDG), and former Chairman of the Independent Election Commission (INEC), Prof. Maurice Iwu, have validated local foods such as bitter kola, coconut oil, bitter leaf, Moringa oleifera, Sour sop, the mushroom Garnoderma lucidum, among others as immune boosters and for the treatment of HIV.\r\n\r\nAlso, another group of researchers have in clinical trials demonstrated how poly herbal preparations made predominantly with bitter leaf provide cure for chronic form of hepatitis B and C co-infection, cancer, type 2 diabetes, tuberculosis and HIV. The researchers from Halamin Herbal centre, 10 George Innih Crescent, Apo District, Abuja and Department of Histopathology and Cytology, Jos University Teaching Hospital (JUTH) Jos found that poly herbal preparations with bitter leaf as the active ingredient strengthen the immune system through many cytokines and chemokines regulations.\r\n\r\nOther constituents of poly herbal preparations include: Sesamum indicatum (sesame), bitter leaf, Aloe barbadensis (popularly known as aloe vera), Saccharum officinarum (sugar cane), Allium sativum (garlic) and Amaranthus caudatus (green amaranth, inine in Ibo, tete abalaye in Yoruba).\r\n\r\nThe poly herbal preparations include: SAAAB and HAABS dietary supplement for hepatitis B and C, and HIV; SAABFAT 7 for cancer and HIV; TABSAABS for tuberculosis and HIV; and DAABS-2 for type two diabetes.\r\n\r\nThe researchers led by a leading researcher in plant extracts and natural medicine and pharmacist, Dr. Ben Amodu, have shown that there is a cure for the chronic form of hepatitis B and C. Amodu and his team of researchers have in recent clinical trials shown that the poly herbal preparations could be used to treat prostrate cancer and ‘bad’ cholesterol.\r\n\r\nResult of laboratory tests by Image Scan Diagnostic Centre Maitama District, Abuja, showed that a patient with abnormal Prostate-specific antigen, or PSA per milliliter (ng/mL) of blood of 6.9; was reduced to reduced to PSA of 0.41ng/ml of two months of regular use of the poly herbal preparation as well as reduced the total cholesterol level from 250 mg/dl to 156 mg/dl.\r\n\r\nA 2016 paper by João S. Teodoro et al, on “Mitochondria as a Target for Safety and Toxicity Evaluation of Nutraceuticals”, noted that the multiple pharmacological activities of kolaviron from Garcinia kola (bitter kola) could be due to its ability to prevent and/or repair mitochondria damage.\r\n\r\nAnother study published on journal Phytomedicine has validated the treatment of oral thrush in HIV/AIDS patients with lemon juice (Citrus limon) and lemon grass (Cymbopogon citratus) and gentian violet.\r\n\r\n\r\nThe researchers noted: “Though the patient population was small, the use of lemon juice and lemon grass for the treatment of oral candidiasis in an HIV population was validated by the randomised controlled trial.”\r\n\r\nIndeed, researchers have validated anti-HIV properties of Garnoderma lucidum. The study published in the journal Phytochemistry is titled “Anti-HIV-1 and Anti-HIV-1-Protease Substances from Ganoderma lucidum.” The Japanese researchers wrote: “Ganoderiol F and ganodermanontriol were found to be active as anti-HIV-1 agents with an inhibitory concentration of 7.8 mg ml1 for both, and ganoderic acid B, ganoderiol B, ganoderic acid C1, 3b-5a-dihydroxy-6b-methoxy- ergosta-7,22-diene, ganoderic acid a, ganoderic acid H and ganoderiol A were moderately active inhibitors against HIV-1 PR with a 50 per cent inhibitory concentration.” Also, scientists have in another study published in African Journal of Biotechnology found that extracts of Moringa oleifera showed inhibitory activity against early steps in the infectivity of HIV-1 lentiviral particles in a viral vector-based screening.\r\n\r\nThe researchers noted: “Moringa oleifera (Moringaceae) is one of the many medicinal plants employed by herbalist to treat or manage people living with HIV/AIDS (PLWHA) in African Traditional Medicine (ATM) and there are many claims to the fact that it improves quality of life and reverses the course of the HIV/AIDS disease progression.\r\n\r\n“In this study, M. oleifera leaf extracts showed potent and selective inhibition of early steps in HIV-1 infectivity and could serve as source of anti retroviral lead molecules.\r\n\r\nThe outcome of this investigation could partly explain the benefits and improvement in quality of life claimed by PLWHA in the use of this medicinal plant as supplement.”\r\n\r\n\r\nIwu told journalists in Lagos last week that his team at BDG has formulated these local food items into scientifically validated medicines, dietary supplements. BDG is comprised of Bioresources Development and Conservation Programme (BDCP), Bioresources Institute of Nigeria (BION), Intercedd Health Products (IHP), Intercedd Laboratories (IL), BioTrade Global Agency and Nature’s Emporium.\r\n\r\nIwu said these foods or rather plant extracts have been formulated foods that can be used as medicines or rather dietary supplements for persons living with HIV/AIDS include among others: Moringa Tea, Moringa Leaf Tea, Moringa Whole Seed, which have been shown by research to cure over 300 diseases; Vernonia Ocimum Tea from bitter leaf and scent leaf (Ocimum gratissimum) also used for the control of blood sugar and weight management; Garcinia-IHP from bitter kola (Garcinia kola) also used as antimicrobial and detoxifier; IHP Virgin Coconut Oil from coconut as stress buster and immune booster; Erovit-IHP, which combines the anti-ageing properties of the mushroom, Cordyceps, the high-potency antioxidant effects of Punica granatum fruits and the life enhancing Korean ginseng; Immunovit-IHP from Reishi mushroom, Punica granatum and Korean ginseng to boost immunity against diseases; and Ganoderma Coffee and Ganoderma Green Tea.\r\n\r\nHas Halamin Herbal Centre found a cure for HIV/AIDS in its bitter leaf-based poly herbal preparations? Amodu said: “As it is, it will not be proper to project the message that we have cure for HIV/AIDS. We don’t want to send any info to the outside world for anybody to think that we want to jump the gun. What we have can be subjected to further study, and we are uniting with NAFDAC to do that. So at this point, I don’t want to lay claim that I have cure for that. But, what the whole world recognized today is functional cure, and we can beat our chest that we have that cure. Functional cure as described by New York Times. What is functional cure? It is a state whereby an HIV/AIDS client has an increase immune system, decrease or no opportunistic infections and has loss no man-hour (can do his work without help from another). This is exactly that our herbal supplements do; our supplements are at par with the conventional Anti Retroviral Therapy (ART)…”\r\n\r\nCourtesy: https://guardian.ng/features/more-herbal-cures-for-hiv-validated/\r\n', 'show', 'bitter_leaf'),
(2, '2018-07-26', 'Orthodox Medicine', 'LUTH Performs 7 Successful Open Heart Surgeries -CMD', 'Determined to discourage health tourism and improve its services, the University of Lagos Teaching Hospital (LUTH) has just concluded another round of open-heart surgeries in the past week.  \r\n\r\nA team of Nigerian and Indian specialists successfully operated six Nigerian children and one adult. Chief Medical Director (CMD) of LUTH, Prof. Chris Bode, told journalists on Tuesday: “Three of the patients are already discharged and the rest should be back home in the next few days. This is the second time open-heart surgeries have been performed in LUTH since the first round of operations in 2014. It is however the decision of the present administration to institutionalize cardiac surgery and make it a routine in LUTH so it will no longer be a news item.”  \r\n\r\nOpen-heart surgery was first successful performed in Nigeria by the team of led by Prof Samuel Adebonojo at the University College Hospital (UCH), Ibadan in 1979. Sustainability has bedeviled the project and the entire team of cardiac specialists later immigrated to the Gulf States in search of greener pastures during the economic turmoil of the mid-eighties.  Reacting to the question, what is special about open-heart surgery? Bode said: “The heart is one of three most vital organ which works continuously all life and without which the body is dead. It does not rest and ordinarily cannot stop for repairs of any defects. It is also commonly affected by inborn errors such as holes in the heart, abnormal connections and a sundry of other birth defects that can cripple or kill if left uncorrected. \r\n\r\nAdults may also suffer surgically correctible heart conditions such as damage to valves and a host of other conditions. Operations to repair such defects require specialists trained to recognize, assess and prepare the patient for their particular procedures. Cutting-edge machines are required to diagnose, assess and later at surgery, take over the functions of the heart while it is being repaired. Other equipment must continuously monitor the patient while the specialists perform precise, pre-planned procedures.  Sometimes, surgical operations are performed on a beating heart. Other times, the heart is completely stopped from beating wile machines take over. \r\n\r\nThe heart is then restarted at the end of surgery.  “Post-operative care is elaborate and round the clock. Surgeons, physicians, nurses, intensivists, anaesthetists, laboratory scientists, microbiologists, pharmacists, technical support groups, the kitchen and many others must work as a team to ensure the patient recovers fully and goes home as soon as possible. In our clime, maintenance crew of engineers and support service men are also on standby. There is very little margin for errors. Thus when you hear that a batch of these operations has just been concluded, teams that may number more than 30 persons have not slept at home for over a week, tending courageously to these patients. It is a truly great and heady process to behold and it typifies the very reason why and how we, the medical teams should serve our people.”  On what lessons have been learnt since then to make LUTH think this present round of cardiac surgeries will find roots in this present economic climate and what is different? Bode said: “The past 35 years has bred a homegrown cadre of young Nigerians who have trained both locally and internationally, adopting the best practices of both climes to establish and build capacities in diverse areas of human endeavor. They are more self-reliant and they are quietly rebuilding our medical landscape. \r\n\r\nThus, teaching hospitals in Ife, Ilorin, Ibadan, Lagos, UNTH and a couple of others have been promoting this advanced form of surgical service and they are impactful.  “We are on the cusp of the next stage: indigenizing open heart surgery in Nigeria. Presently, our specialist centres struggle to equip their operation theatres and then invite specialists from abroad to work with Nigerian surgeons to ensure proper protocols are followed. Through this, human and material capacities are built. This has been going on for a while and the time is nigh for open-heart surgeries to be routinely performed until it stops being a news item in the county. It is cheaper, most convenient for our patients and it is a prideful way to rebuild the much lacking confidence in our services among the populace. \r\n\r\nFurthermore, Nigerians deserve the best and it is high time we moved away from these spates of unproductive strike actions, roll up our sleeves and serve the people…”  “It also makes economic sense to perform those surgeries in this country. My heart bleeds each time I see a well-intentioned newspaper clip soliciting N8 million for one child or other to travel abroad for conditions we can treat eminently in this country. I can boldly say that the total amount of money spent to treat our seven cases in LUTH cannot treat two patients sent abroad. So if we do the maths, home is still the best! Throwing away our scarce resources on foreign trips is not the way to go. When we treat patients abroad, no learning / training experience accrues to our people. You only need to ask from our present set of trainee surgeons to know how they feel assisting and scrubbing in on cases they would only have been allowed to watch abroad at expensive costs.”  \r\n\r\nOn the next steps, the paediatric surgeon said: “These new rounds of surgeries have started to convince patients that it can be done here, by our own people and more conveniently too. Thus, patients are already trickling in. Doctors are referring them back to us, rather than to Asian destinations. On our part, we hope to perform 100 new open-heart surgeries in the next one-year and totally indigenize these procedures. Through it, at least 10% of all proceeds shall be dedicated to providing this surgical opportunity for indigent patients once we break even. It is a challenge to all corporate bodies and wealthy individuals to support this venture and put a smile on the faces of many Nigerian children and adults who otherwise may face grave risks form treatable conditions.”  \r\n\r\nBode commended the Federal Government of Nigeria for believing in LUTH. He said the Minister of Health, Prof Isaac Adewole, has given unflinching support to the programme and has promised to back LUTH’s quest for sustenance of this laudable project. “Our Independent Power Project only awaits a bank guarantee from the appropriate quarters to come on stream. We thank the CBN and the Accountant General of the Federation for their efforts to secure this for us from the Presidency,” he said.  \r\n\r\nBode said Messrs General Electric (GE) played a foremost role in placing a ventilator in LUTH’s ICU free of charge towards this project. “This is the way industries should support noble endeavors.”  He said the National Health Insurance Scheme (NHIS) closely worked with LUTH and sponsored one of the patients to signify a buy-in into this project.  \r\n\r\nThe CMD said the LUTH Cardiac Project Team ably led by the Chairman, Prof Jayne Ajuluchukwu, and Coordinator, Dr. Gbenga Olusoji, has done a fantastic work in team building and project execution. “The Hospital Management is proud of each member of this gorgeous team whose slogan is ‘Whatever it takes, we will give it!’”  Bode said the ‘Team Benedict’ is named after the team leader, Dr. Raj Benedict, from India. “They are missionaries in its truest sense. They teach, they heal and spread the gospel of self-sufficiency in human capacity in open-heart surgery. We are grateful for their coming over to assist in training and caring for our home team.”  \r\n\r\nCourtesy: https://guardian.ng/features/health/indian-nigerian-surgeons-perform-seven-open-heart-surgeries-at-luth/\r\n', 'show', 'human_heart');

-- --------------------------------------------------------

--
-- Table structure for table `article_comments`
--

CREATE TABLE `article_comments` (
  `id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `date` varchar(25) NOT NULL,
  `time` varchar(12) NOT NULL,
  `firstname` varchar(15) NOT NULL,
  `surname` varchar(15) NOT NULL,
  `location_town` varchar(15) NOT NULL,
  `location_country` varchar(15) NOT NULL,
  `comment` text NOT NULL,
  `status` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article_comments`
--

INSERT INTO `article_comments` (`id`, `article_id`, `date`, `time`, `firstname`, `surname`, `location_town`, `location_country`, `comment`, `status`) VALUES
(1, 1, '26-Jul-2018', '07:14:33pm', 'Ayo', 'Toriola', 'Lagos', 'Nigeria', 'This is awesome. Please continue you good works. I really appreciate this website. God bless you.', 'show');

-- --------------------------------------------------------

--
-- Table structure for table `audios`
--

CREATE TABLE `audios` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `short_note` varchar(200) NOT NULL,
  `status` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `audios`
--

INSERT INTO `audios` (`id`, `date`, `short_note`, `status`) VALUES
(1, '2017-08-03', 'Bawo ni Ifa se je ni Ekiti (The connection between Ifa and Ekiti land).', 'show'),
(2, '2017-06-08', 'Odun Ifa Agba (World Ifa Day). The message of Ifa for the year. The new traditional calendar.', 'show'),
(3, '2017-08-10', 'The annual Isede Day. What is Isede Day? The significance of tradition.', 'show'),
(4, '2017-07-13', 'Epe continuation. How can we tap the potential of Epe to bring security into our society?', 'show'),
(5, '2017-06-15', 'Ipa Etutu ninu Ise Iwosan. The impact of sacrifices in the healing process in Yoruba culture', 'show'),
(6, '2017-08-17', 'Odun Isese. The significance of Isese Day. What iis the importance of Isese to humanity?', 'show'),
(7, '2017-07-20', 'Iyato larin imo science at imo iseda. Differences between scientific knowledge and traditional knowledge.', 'show'),
(8, '2017-06-22', 'Orisi ona ti ale gba toju alaisan. Alternative ways to exploit our culture to heal seemingly protacted and uncurable health challenges.', 'show'),
(9, '2017-08-24', 'Mother\'s pride -An NGO concerned with taking care of widows and single mothers.', 'show'),
(10, '2017-07-27', 'Agbara Iseda -The innate knowledge. The intuitive power of nature. ', 'show'),
(11, '2017-06-29', 'Ofa -The negative power of spiritual arrow. Is Ofa a message of death or sickness? Is it real or a deceitful means of exploiting people with protracted illness?', 'show'),
(12, '2017-08-31', 'Infertility -The causes and the remedies as concerns women menstrual circle.', 'show'),
(13, '2017-07-06', 'Epe. The origin, the purpose and the use of Epe.', 'show'),
(14, '2018-07-02', 'Ta ni Babalawo. Who is an Ifa Priest. Differences between Ifa Priest and Herbalist.', 'show'),
(15, '2018-04-02', 'Okun Ebi -Family Ties. Importance of family ties. Unfortunately, our religious views is grossly affecting family ties today.', 'show'),
(16, '2018-06-04', 'Isokan Orunmila Atayese. An Ifa group seeking to put things right. Using Yoruba heritage to help and enhance human destiny. ', 'show'),
(17, '2018-04-09', 'Ojo Ose Yoruba. Yoruba days of the week.', 'show'),
(18, '2018-07-09', 'Iyawo Keji. Polygamy -A panacea to the present problems of marriage confronting our ladies.', 'show'),
(19, '2018-06-11', 'Kilo faa ti oja obirin fi kuta -The causes of many marrigeable ladies are finding it difficult to get married today.', 'show'),
(20, '2018-05-14', 'Ipin -Destiny. What is Destiny? How and where do we get it? Can it be changed.', 'show'),
(21, '2018-04-16', 'Ojo Ose Yoruba. Bi a ti se n lo fun aseyori. Yoruba days of the week. Their spiritual significance and usage.', 'show'),
(22, '2018-06-18', 'Ifa Odun. 2018 World Ifa Divination Celebration at Ile-Ife.', 'show'),
(23, '2018-03-26', 'Etutu. Different ways of using sacrifice for healing, protection, prevention, improvement, etc.', 'show'),
(24, '2018-05-28', 'Ifowosowopo lati gbe Isegun ibile laruge. Collaboration between herbal practitioners.', 'show'),
(25, '2018-04-30', 'Isiro ojo. The timing of days in Yoruba chronology. How do Yorubas determine the time of the day in the age when there was no clock.', 'show'),
(26, '2018-05-10', 'Efforts one need to make towards getting rich in life.', 'show'),
(27, '2018-04-12', 'Ijo Orunmila Adulawo. Church of Traditional African Religion. What led to the establishment of the church. Presented by the Chief Priest of Ijo Orunmila Adulawo.', 'show'),
(28, '2018-06-14', 'Aje -The Goddess of Wealth. The source of wealth and how to get it naturally.', 'show'),
(29, '2018-05-17', 'Ise Ibile. Traditional occupation of Yoruba. Traditional medicine -How can we preserve and promote it through collaboration of traditional herbal practice.', 'show'),
(30, '2018-04-19', 'The spread of Yoruba Traditional Religion beyound the shore of Yoruba land.', 'show'),
(31, '2018-03-22', 'Ori. Head -The essence of Man. How can one improve his or her destiny through appropriation of ones destiny. Sacrificing to Ori (Head). Ori is an Orisa (Deity).', 'show'),
(32, '2018-04-26', 'Iyato ti o ti ba Ise Isegun Ibile. The changes and the ways traditional medicine was being practiced in the olden days and today.', 'show'),
(33, '2018-03-29', 'Eje Riru. High Blood Pressure -The traditional view and management.', 'show'),
(34, '2018-05-31', 'Yoruba Quize Competition for Primary Schools in Lagos State, Nigeria.', 'show');

-- --------------------------------------------------------

--
-- Table structure for table `audio_comments`
--

CREATE TABLE `audio_comments` (
  `id` int(11) NOT NULL,
  `audio_id` date NOT NULL,
  `date` date NOT NULL,
  `time` varchar(12) NOT NULL,
  `firstname` varchar(15) NOT NULL,
  `surname` varchar(15) NOT NULL,
  `location_town` varchar(15) NOT NULL,
  `location_country` varchar(15) NOT NULL,
  `comment` text NOT NULL,
  `status` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `audio_comments`
--

INSERT INTO `audio_comments` (`id`, `audio_id`, `date`, `time`, `firstname`, `surname`, `location_town`, `location_country`, `comment`, `status`) VALUES
(1, '2017-08-03', '2017-08-03', '03:50:17pm', 'Ayo', 'Toriola', 'Lagos', 'Nigeria', 'This is it.', 'show'),
(2, '2017-08-03', '2017-08-03', '03:00:42pm', 'Ayo', 'Toriola', 'Lagos', 'Nigeria', 'This is it.', 'show'),
(3, '2018-07-09', '2018-07-09', '07:16:46pm', 'Ayo', 'Toriola', 'Lagos', 'Nigeria', 'This is awesome. Please continue you good works. I really appreciate this website. God bless you.', 'show'),
(4, '2018-07-09', '2018-07-09', '02:06:19pm', 'Omolola ', 'Mohammed ', 'Lagos', 'Nigeria ', 'Ayo omo Iya Ayo, eku ise opolo,imo yin ko nii joba, eleduwa aa maa funyin se. ', 'show'),
(5, '2018-07-09', '2018-07-09', '08:20:05pm', 'Ilera', 'Eda', 'Abeokuta', 'Nigeria', ' E Ku ise opolo. Oluwa yoo maa baa yin see', 'show'),
(6, '2018-07-09', '2018-07-09', '08:05:40am', 'Julius', 'Oladokun', 'Oyo', 'Nigeria', 'Eleyi dara pupo, osi wuni l\'ori pupo. Eledua yoo mo teyin siwaju ati siwaju si. E o ni sise, e o sini siwi l\'agbara Olorun Edumare. Eku eto.', 'show');

-- --------------------------------------------------------

--
-- Table structure for table `backend_user`
--

CREATE TABLE `backend_user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(15) DEFAULT NULL,
  `lastname` varchar(20) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `authkey` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `backend_user`
--

INSERT INTO `backend_user` (`id`, `firstname`, `lastname`, `username`, `password`, `authkey`) VALUES
(1, 'Ayoade', 'Okedokun', 'ayoade', '1', '101');

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE `quotes` (
  `id` int(11) NOT NULL,
  `quote` varchar(280) NOT NULL,
  `author` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quotes`
--

INSERT INTO `quotes` (`id`, `quote`, `author`) VALUES
(1, 'Many live a dual life. They are one thing here another thing in another world. People in search of power had created lots of contraptions, but only those in search of truth will have the secret of life. It is that simple', 'Ayo Okedokun'),
(2, 'Many people in Lagos and other Yoruba metropolis today have been denied the luxury of African Culture. A number of children can not even pronounce their family names correctly. ', 'Ayoade Okedokun');

-- --------------------------------------------------------

--
-- Table structure for table `years`
--

CREATE TABLE `years` (
  `id` int(11) NOT NULL,
  `year` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article_comments`
--
ALTER TABLE `article_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `audios`
--
ALTER TABLE `audios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `audio_comments`
--
ALTER TABLE `audio_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `backend_user`
--
ALTER TABLE `backend_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quotes`
--
ALTER TABLE `quotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `years`
--
ALTER TABLE `years`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `article_comments`
--
ALTER TABLE `article_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `audios`
--
ALTER TABLE `audios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `audio_comments`
--
ALTER TABLE `audio_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `backend_user`
--
ALTER TABLE `backend_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `quotes`
--
ALTER TABLE `quotes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `years`
--
ALTER TABLE `years`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
