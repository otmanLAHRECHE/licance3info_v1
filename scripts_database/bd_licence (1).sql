-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 29, 2023 at 10:00 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_licence`
--

-- --------------------------------------------------------

--
-- Table structure for table `centre_d_hemodialyse`
--

DROP TABLE IF EXISTS `centre_d_hemodialyse`;
CREATE TABLE IF NOT EXISTS `centre_d_hemodialyse` (
  `id_ce_dh` int(10) NOT NULL AUTO_INCREMENT,
  `patient_id` int(10) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `prenome` varchar(25) NOT NULL,
  `date_et_lieu_de_naissance` varchar(25) NOT NULL,
  `situation_familiale` varchar(25) NOT NULL,
  `epouse` varchar(25) NOT NULL,
  `profession` varchar(25) NOT NULL,
  `niveau_d_instruction` varchar(25) NOT NULL,
  `adresse` varchar(25) NOT NULL,
  `tel` varchar(25) NOT NULL,
  PRIMARY KEY (`id_ce_dh`),
  KEY `fk_foreign_patient_id` (`patient_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `centre_d_hemodialyse`
--

INSERT INTO `centre_d_hemodialyse` (`id_ce_dh`, `patient_id`, `nom`, `prenome`, `date_et_lieu_de_naissance`, `situation_familiale`, `epouse`, `profession`, `niveau_d_instruction`, `adresse`, `tel`) VALUES
(1, 0, '1', '1', '1', '1', '1', '1', '1', 'V', '1'),
(2, 0, '87', '87', '2023-04-11', '87', '87', '87', '87', '87', '87');

-- --------------------------------------------------------

--
-- Table structure for table `demand_document`
--

DROP TABLE IF EXISTS `demand_document`;
CREATE TABLE IF NOT EXISTS `demand_document` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `patient_id` int(10) NOT NULL,
  `document` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `fk_foreign_patient_id` (`patient_id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `demand_document`
--

INSERT INTO `demand_document` (`id`, `patient_id`, `document`, `date`, `status`) VALUES
(2, 6, 'protocole', '0000-00-00', 0),
(3, 6, 'certaficat', '0000-00-00', 0),
(4, 0, 'protocole', '0000-00-00', 0),
(5, 0, 'certaficat', '0000-00-00', 0),
(27, 18, 'certaficat', '2023-04-29', 0),
(25, 18, 'protocole', '2023-04-29', 0);

-- --------------------------------------------------------

--
-- Table structure for table `examens_complementaires`
--

DROP TABLE IF EXISTS `examens_complementaires`;
CREATE TABLE IF NOT EXISTS `examens_complementaires` (
  `id_ex_co` int(10) NOT NULL AUTO_INCREMENT,
  `patient_id` int(10) NOT NULL,
  `Examens_cardio_vasculaire_TA` varchar(25) NOT NULL,
  `Examens_cardio_vasculaire_FC` varchar(25) NOT NULL,
  `Examens_cardio_vasculaire_ECG` varchar(25) NOT NULL,
  `Examens_cardio_vasculaire_Echo_coeur` varchar(25) NOT NULL,
  `Examens_cardio_vasculaire_ECV_Autres` varchar(25) NOT NULL,
  `Examen_pleauro_pulmonaire_TLT` varchar(25) NOT NULL,
  `Examen_pleauro_pulmonaire_Autres` varchar(25) NOT NULL,
  `Examen_uro_genital_Diurese` varchar(25) NOT NULL,
  `Examen_uro_genital_Proteinurie24h` varchar(25) NOT NULL,
  `Examen_uro_genital_Echographie_renale_ou_pelvienne` varchar(25) NOT NULL,
  `Examen_uro_genital_TDM_abdominal` varchar(25) NOT NULL,
  `Serologie_Hbs` varchar(25) NOT NULL,
  `Serologie_HCV` varchar(25) NOT NULL,
  `Srologie_HIV` varchar(25) NOT NULL,
  `Srologie_PBR` varchar(25) NOT NULL,
  `AUTRES` varchar(25) NOT NULL,
  PRIMARY KEY (`id_ex_co`),
  KEY `fk_foreign_patient_id` (`patient_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `examens_complementaires`
--

INSERT INTO `examens_complementaires` (`id_ex_co`, `patient_id`, `Examens_cardio_vasculaire_TA`, `Examens_cardio_vasculaire_FC`, `Examens_cardio_vasculaire_ECG`, `Examens_cardio_vasculaire_Echo_coeur`, `Examens_cardio_vasculaire_ECV_Autres`, `Examen_pleauro_pulmonaire_TLT`, `Examen_pleauro_pulmonaire_Autres`, `Examen_uro_genital_Diurese`, `Examen_uro_genital_Proteinurie24h`, `Examen_uro_genital_Echographie_renale_ou_pelvienne`, `Examen_uro_genital_TDM_abdominal`, `Serologie_Hbs`, `Serologie_HCV`, `Srologie_HIV`, `Srologie_PBR`, `AUTRES`) VALUES
(1, 0, '1', '1', 'V', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
(2, 0, '213', '213', '213', '213', '213', '213', '213', '213', '213', '213', '213', '213', '213', '213', '213', '213');

-- --------------------------------------------------------

--
-- Table structure for table `examen_biologique`
--

DROP TABLE IF EXISTS `examen_biologique`;
CREATE TABLE IF NOT EXISTS `examen_biologique` (
  `id_ex_bio` int(10) NOT NULL AUTO_INCREMENT,
  `patient_id` int(10) NOT NULL,
  `FNS_GB_x10` float NOT NULL,
  `FNS_GR_x101` float NOT NULL,
  `FNS_Hb` float NOT NULL,
  `FNS_Hte` float NOT NULL,
  `FNS_Reticulocyte` float NOT NULL,
  `FNS_PLT_x10` float NOT NULL,
  `FER_Ferritinemie` float NOT NULL,
  `FER_CST` float NOT NULL,
  `GLYCENIE` float NOT NULL,
  `FRENALE_Uree` float NOT NULL,
  `FRENALE_Creat` float NOT NULL,
  `FRENALE_Ac_urique` float NOT NULL,
  `BILAN_PH_CA_Ca` float NOT NULL,
  `BILAN_PH_CA_P` float NOT NULL,
  `FHEPATIQUE_SGPT_UIP` float NOT NULL,
  `FHEPATIQUE_SGOT_UIP` float NOT NULL,
  `FHEPATIQUE_PAL_UIP` float NOT NULL,
  `FHEPATIQUE_BbT` float NOT NULL,
  `FHEPATIQUE_BbD` float NOT NULL,
  `FHEPATIQUE_yGT` float NOT NULL,
  `BILAN_LIPIDIQUE_TG` float NOT NULL,
  `BILAN_LIPIDIQUE_CH_T` float NOT NULL,
  `BILAN_LIPIDIQUE_HDL` float NOT NULL,
  `BILAN_LIPIDIQUE_LDL` float NOT NULL,
  `IGON_SANGIUN_Na` float NOT NULL,
  `IGON_SANGIUN_K` float NOT NULL,
  `IGON_SANGIUN_Mg` float NOT NULL,
  `IGON_SANGIUN_Cl` float NOT NULL,
  `HEMOSTASE_TP` float NOT NULL,
  `HEMOSTASE_INR` float NOT NULL,
  `HEMOSTASE_TS` float NOT NULL,
  `HEMOSTASE_TCK` float NOT NULL,
  `ElLECTROPHORESE_De_LHb` float NOT NULL,
  `Laclairance_a_la_creatinine_CC` float NOT NULL,
  `PTH` float NOT NULL,
  PRIMARY KEY (`id_ex_bio`),
  KEY `fk_foreign_patient_id` (`patient_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `examen_biologique`
--

INSERT INTO `examen_biologique` (`id_ex_bio`, `patient_id`, `FNS_GB_x10`, `FNS_GR_x101`, `FNS_Hb`, `FNS_Hte`, `FNS_Reticulocyte`, `FNS_PLT_x10`, `FER_Ferritinemie`, `FER_CST`, `GLYCENIE`, `FRENALE_Uree`, `FRENALE_Creat`, `FRENALE_Ac_urique`, `BILAN_PH_CA_Ca`, `BILAN_PH_CA_P`, `FHEPATIQUE_SGPT_UIP`, `FHEPATIQUE_SGOT_UIP`, `FHEPATIQUE_PAL_UIP`, `FHEPATIQUE_BbT`, `FHEPATIQUE_BbD`, `FHEPATIQUE_yGT`, `BILAN_LIPIDIQUE_TG`, `BILAN_LIPIDIQUE_CH_T`, `BILAN_LIPIDIQUE_HDL`, `BILAN_LIPIDIQUE_LDL`, `IGON_SANGIUN_Na`, `IGON_SANGIUN_K`, `IGON_SANGIUN_Mg`, `IGON_SANGIUN_Cl`, `HEMOSTASE_TP`, `HEMOSTASE_INR`, `HEMOSTASE_TS`, `HEMOSTASE_TCK`, `ElLECTROPHORESE_De_LHb`, `Laclairance_a_la_creatinine_CC`, `PTH`) VALUES
(1, 0, 11, 11, 11, 11, 11, 11, 11, 11, 11, 11, 11, 11, 11, 11, 11, 11, 11, 11, 11, 11, 11, 11, 11, 11, 11, 11, 11, 11, 11, 11, 11, 11, 11, 11, 11),
(2, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `examen_initial`
--

DROP TABLE IF EXISTS `examen_initial`;
CREATE TABLE IF NOT EXISTS `examen_initial` (
  `id_ex_in` int(10) NOT NULL AUTO_INCREMENT,
  `patient_id` int(10) NOT NULL,
  `Glycemie_a_jeun` varchar(25) NOT NULL,
  `Bilan_hematologique_Groupe` varchar(25) NOT NULL,
  `Bilan_hematologique_FNS_GB` varchar(25) NOT NULL,
  `Bilan_hematologique_FNS_Hb` varchar(25) NOT NULL,
  `Bilan_hematologique_FNS_Hte` varchar(25) NOT NULL,
  `Bilan_hematologique_FNS_Plaquettes` varchar(25) NOT NULL,
  `Bilan_hematologique_Equilibre` varchar(25) NOT NULL,
  `Bilan_hematologique_TP` varchar(25) NOT NULL,
  `Bilan_hematologique_TH` varchar(25) NOT NULL,
  `Bilan_hematologique_TS` varchar(25) NOT NULL,
  `Bilan_renal_Uree` varchar(25) NOT NULL,
  `Bilan_renal_Creat` varchar(25) NOT NULL,
  `Bilan_renal_Ac_Urique` varchar(25) NOT NULL,
  `Bilan_hepatique_Transaminases_SGOT` varchar(25) NOT NULL,
  `Bilan_hepatique_Transaminases_SGPT` varchar(25) NOT NULL,
  `Bilan_hepatique_Bilirubine_Totale` varchar(25) NOT NULL,
  `Bilan_hepatique_Bilirubine_Directe` varchar(25) NOT NULL,
  `Bilan_hepatique_PA` varchar(25) NOT NULL,
  `Bilan_hepatique_SGT` varchar(25) NOT NULL,
  `Bilan_phospho_calcique_Calcemie` varchar(25) NOT NULL,
  `Bilan_phospho_calcique_Phosphoremie` varchar(25) NOT NULL,
  `Bilan_lipidique_Lipides_tot` varchar(25) NOT NULL,
  `Bilan_lipidique_TG` varchar(25) NOT NULL,
  `Bilan_lipidique_Cholesterol` varchar(25) NOT NULL,
  `Bilan_lipidique_LDLc` varchar(25) NOT NULL,
  `Bilan_lipidique_HDLc` varchar(25) NOT NULL,
  `Bilan_protidique_Protides_tot` varchar(25) NOT NULL,
  `Bilan_protidique_Albumine` varchar(25) NOT NULL,
  `Bilan_protidique_Fibrinogene` varchar(25) NOT NULL,
  `Monogramme_Kaliemie` varchar(25) NOT NULL,
  `Monogramme_Natremie` varchar(25) NOT NULL,
  `Monogramme_Magnesium` varchar(25) NOT NULL,
  `Bilan_inflammatoire_VS` varchar(25) NOT NULL,
  `Bilan_inflammatoire_CRP` varchar(25) NOT NULL,
  PRIMARY KEY (`id_ex_in`),
  KEY `fk_foreign_patient_id` (`patient_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `medcin`
--

DROP TABLE IF EXISTS `medcin`;
CREATE TABLE IF NOT EXISTS `medcin` (
  `id_medcin` int(10) NOT NULL AUTO_INCREMENT,
  `nom_M` varchar(25) NOT NULL,
  `prenom_M` varchar(25) NOT NULL,
  `spécialité` varchar(25) NOT NULL,
  `telephone` varchar(14) NOT NULL DEFAULT '00000000000000',
  `Email` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id_medcin`),
  UNIQUE KEY `Email` (`Email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `medcin`
--

INSERT INTO `medcin` (`id_medcin`, `nom_M`, `prenom_M`, `spécialité`, `telephone`, `Email`, `password`) VALUES
(1, 'nomDEmedcin', 'prenomDEmedcin', 'dializ', '00000000000000', 'emailDEmedcin@gmail.com', 'ppp');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `email` varchar(25) DEFAULT NULL,
  `sex` varchar(2) DEFAULT 'M',
  `date_naissance` date DEFAULT NULL,
  `lieu_naissance` varchar(50) DEFAULT NULL,
  `groupe_sanguin` varchar(8) NOT NULL,
  `address` varchar(100) NOT NULL,
  `telephone` varchar(14) NOT NULL DEFAULT '0000000000',
  `image_url` varchar(255) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `nom`, `prenom`, `email`, `sex`, `date_naissance`, `lieu_naissance`, `groupe_sanguin`, `address`, `telephone`, `image_url`, `password`, `status`, `created_at`, `updated_at`) VALUES
(4, 'dddddd', 'ddddddddd', 'ddddddd@gmail.com', 'M', '2023-04-13', 'ddddddd', 'O- ', 'ddddddddd', '9235', NULL, 'ddd', 0, NULL, NULL),
(3, 'aaaaaaaa', 'aaaaaaaa', 'aaa@gmail.com', 'M', '2023-04-10', 'aaaaaaaa', 'O- ', 'aaaaaaaaaa', '00000000', NULL, '123', 0, NULL, NULL),
(5, 'sddfsa', 'sddfsa', 'sddfsa@gmail.com', 'M', '2023-04-20', 'sddfsa', 'A+ ', 'sddfsa', '8976543', NULL, 'sds', 0, NULL, NULL),
(6, 'aaaaaaaaaa', 'aaaaaaaaaaaa', 'aaaaaaaa@gmail.com', 'M', '2023-04-19', 'aaaaaaaaaaa', 'A- ', 'aaaaaaaaaaaaa', '0987654', NULL, 'aaaa', 0, NULL, NULL),
(7, 'bbbbbb', 'bbbbbb', 'bbbbbb@gmail.com', 'M', '2023-04-19', 'bbbbbbbbb', 'A+ ', 'bbbbbbbb', '098765432', NULL, 'bbb', 0, NULL, NULL),
(8, 'cccccccccc', 'cccccc', 'ccccccc@gmail.com', 'M', '2023-04-18', 'ccccc', 'O- ', 'ccccccccc', '098765432', NULL, 'ccc', 0, NULL, NULL),
(9, 'fffffff', 'ffffffffff', 'fffffff@gmail.com', 'M', '2023-04-20', 'fffffff', 'B+ ', 'fffffff', '9876543', NULL, 'fff', 0, NULL, NULL),
(10, 'gggggg', 'gggggggggg', 'gggggggggg@gmail.com', 'M', '2023-04-20', 'ggggggggg', 'A+ ', 'gggggggggggg', '9876', NULL, 'ggg', 0, NULL, NULL),
(11, 'zzzzzzzz', 'zzzzzzzzz', 'zzzzzzzzzz@GMAIL.COM', 'M', '2023-04-28', 'zzzzzzz', 'AB+', 'zzzzzzzzzz', '78456', NULL, 'zzz', 0, NULL, NULL),
(12, 'xxxxx', 'xxxxxxx', 'xxxxxxx@GMAIL.COM', 'M', '2023-04-10', 'xxxxxx', 'AB-', 'xxxxxx', '7543', NULL, 'xxx', 0, NULL, NULL),
(13, 'hhhhhhh', 'hhhhhhh', 'hhhhhhh@gmail.com', 'M', '0000-00-00', 'hhhhhhh', 'hhh', 'hhhhhhh', '0000000000', NULL, 'hhh', 0, NULL, NULL),
(14, 'ttttttt', 'tttttt', 'tttttt@gmai.com', 'M', '2023-04-27', 'tttttt', 'B+ ', 'tttttt', '8765443', NULL, 'ttt', 0, NULL, NULL),
(15, 'ssssssss', 'ssssssss', 'ssssssss@gmail.com', 'M', '2023-04-03', 'ssssssss', 'A+ ', 'ssssssss', '765432', NULL, 'sss', 0, NULL, NULL),
(16, 'uuuuuuu', 'uuuuuuu', 'uuuuuuu@gmail.com', 'M', '2023-04-03', 'uuuuuuu', 'A+ ', 'uuuuuuu', '765432', NULL, 'uuu', 0, NULL, NULL),
(17, 'ooooooo', 'ooooooo', 'ooooooo@gmail.com', 'M', '2023-04-13', 'ooooooo', 'A- ', 'ooooooo', '9876543', NULL, 'ooo', 0, NULL, NULL),
(18, 'بوسحابة', 'حسناء', 'hassna@gmail.com', 'M', '2023-04-27', 'القرارة', 'O+', 'عنوان حسناء', '0615253748', 'uploads/644a8ea96db79.jpg', '123', 2, NULL, '2023-04-27 17:03:23'),
(19, 'نجار', 'صلاح الدين', 'salah@gmail.com', 'M', '2001-03-13', 'غرداية', 'O-', 'عنوان صلاح', '0557753760', 'uploads/644ce98117f05.jpeg', '123', 1, NULL, '2023-04-29 09:55:13'),
(20, 'llll', 'lllllllll', 'lllllllll@gmail.com', 'M', '2023-04-11', 'llllllllll', 'B- ', 'lllllllll', '09895654', NULL, 'lll', 0, NULL, NULL),
(22, 'admin', 'admin', 'admin@gmail.com', 'M', '2023-04-01', '', 'O+', 'Ghardaia', '0555243325', 'uploads/644a9abb954ca.jpg', '202cb962ac59075b964b07152d234b70', 1, '2023-04-27 17:53:00', '2023-04-27 17:54:35');

-- --------------------------------------------------------

--
-- Table structure for table `protocole`
--

DROP TABLE IF EXISTS `protocole`;
CREATE TABLE IF NOT EXISTS `protocole` (
  `id_prot` int(10) NOT NULL AUTO_INCREMENT,
  `patient_id` int(10) NOT NULL,
  `Date_de_la_premiere_dialyse` varchar(10) NOT NULL,
  `Date_souhaitee_dans_votre_service` varchar(10) NOT NULL,
  `Nombre_de_seances_par_semaine` varchar(10) NOT NULL,
  `Jours_de_dialyse` varchar(10) NOT NULL,
  `Duree_de_la_seance` varchar(10) NOT NULL,
  `Poids_de_base` varchar(10) NOT NULL,
  `Perte_de_poids_inter_dialytique_habituelle` varchar(10) NOT NULL,
  `Abord_vasculaire` varchar(10) NOT NULL,
  `Aiguille_utilisee_artere` varchar(10) NOT NULL,
  `Anticoagulant` varchar(10) NOT NULL,
  `Debit_de_pompe_a_sang` varchar(10) NOT NULL,
  `Dialyseur` varchar(10) NOT NULL,
  `Dialyse_au_Bicarbonate` varchar(10) NOT NULL,
  `groupe_sanguin` varchar(10) NOT NULL,
  `Serologie_virale_Ag_Hbs` varchar(10) NOT NULL,
  `Serologie_virale_AC_antiHCV` varchar(10) NOT NULL,
  `Serologie_virale_AC_antiHIV` varchar(10) NOT NULL,
  `Traitement_medicale_en_dialyse` varchar(10) NOT NULL,
  `Traitement_Martial` varchar(10) NOT NULL,
  `Traitement_habituel` varchar(10) NOT NULL,
  PRIMARY KEY (`id_prot`),
  KEY `fk_foreign_patient_id` (`patient_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `protocole_d_hemodialyse`
--

DROP TABLE IF EXISTS `protocole_d_hemodialyse`;
CREATE TABLE IF NOT EXISTS `protocole_d_hemodialyse` (
  `id_prot_dh` int(10) NOT NULL AUTO_INCREMENT,
  `patient_id` int(10) NOT NULL,
  `Diagnostic_Etiologique` varchar(25) NOT NULL,
  `Nephropathie_causale` varchar(25) NOT NULL,
  `Debut_de_dialyse` varchar(25) NOT NULL,
  `Mode_de_Traitement` varchar(25) NOT NULL,
  `Duree_de_la_seance` varchar(25) NOT NULL,
  `Abord_vasculaire` varchar(25) NOT NULL,
  `KT_jugulaire` varchar(25) NOT NULL DEFAULT 'false',
  `KT_Femoral` varchar(25) NOT NULL DEFAULT 'false',
  `Date_de_mise_en_place` varchar(25) NOT NULL,
  `Date_d_ablation` varchar(25) NOT NULL,
  `Infection_du_KT` varchar(25) NOT NULL,
  `Infection_du_KT_Le_Germe` varchar(25) NOT NULL,
  `Infection_du_KT_ATB` varchar(25) NOT NULL,
  `Fistule_Distale_Dte` varchar(25) NOT NULL DEFAULT 'false',
  `Fistule_Distale_Gche` varchar(25) NOT NULL DEFAULT 'false',
  `Fistule_Proximale_Dte` varchar(25) NOT NULL DEFAULT 'false',
  `Fistule_Proximale_Gcho` varchar(25) NOT NULL DEFAULT 'false',
  `Fistule_Date_de_confection` varchar(25) NOT NULL,
  `Fistule_Par_le_chirurgien` varchar(25) NOT NULL,
  `Fistule_Hopital` varchar(25) NOT NULL,
  `Debit_de_la_pompe` varchar(25) NOT NULL,
  `Heparinisation_du_circuit_extra_corporel` varchar(25) NOT NULL,
  `Poids_de_base` varchar(25) NOT NULL,
  `Prise_de_poids_inter_dialytique` varchar(25) NOT NULL,
  `TA_avant_dialyse` varchar(25) NOT NULL,
  `TA_apres_dialyse` varchar(25) NOT NULL,
  `Profil_serologique_Ag_Hbs` varchar(25) NOT NULL DEFAULT 'false',
  `Profil_serologique_Ag_HCV` varchar(25) NOT NULL DEFAULT 'false',
  `Profil_serologique_Ag_HIV` varchar(25) NOT NULL DEFAULT 'false',
  `Profil_serologique_TPHA` varchar(25) NOT NULL DEFAULT 'false',
  `Vaccination_anti_hepatite_B_1er_Dose` varchar(25) NOT NULL,
  `Vaccination_anti_hepatite_B_2eme_Dose` varchar(25) NOT NULL,
  `Vaccination_anti_hepatite_B_3eme_Dose` varchar(25) NOT NULL,
  `Vaccination_anti_hepatite_B_1er_Rappel` varchar(25) NOT NULL,
  `Vaccination_anti_hepatite_B_2eme_Rappel` varchar(25) NOT NULL,
  `Tares_associes` varchar(25) NOT NULL,
  `TRAITEMENT` varchar(25) NOT NULL,
  PRIMARY KEY (`id_prot_dh`),
  KEY `fk_foreign_patient_id` (`patient_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `protocole_d_hemodialyse`
--

INSERT INTO `protocole_d_hemodialyse` (`id_prot_dh`, `patient_id`, `Diagnostic_Etiologique`, `Nephropathie_causale`, `Debut_de_dialyse`, `Mode_de_Traitement`, `Duree_de_la_seance`, `Abord_vasculaire`, `KT_jugulaire`, `KT_Femoral`, `Date_de_mise_en_place`, `Date_d_ablation`, `Infection_du_KT`, `Infection_du_KT_Le_Germe`, `Infection_du_KT_ATB`, `Fistule_Distale_Dte`, `Fistule_Distale_Gche`, `Fistule_Proximale_Dte`, `Fistule_Proximale_Gcho`, `Fistule_Date_de_confection`, `Fistule_Par_le_chirurgien`, `Fistule_Hopital`, `Debit_de_la_pompe`, `Heparinisation_du_circuit_extra_corporel`, `Poids_de_base`, `Prise_de_poids_inter_dialytique`, `TA_avant_dialyse`, `TA_apres_dialyse`, `Profil_serologique_Ag_Hbs`, `Profil_serologique_Ag_HCV`, `Profil_serologique_Ag_HIV`, `Profil_serologique_TPHA`, `Vaccination_anti_hepatite_B_1er_Dose`, `Vaccination_anti_hepatite_B_2eme_Dose`, `Vaccination_anti_hepatite_B_3eme_Dose`, `Vaccination_anti_hepatite_B_1er_Rappel`, `Vaccination_anti_hepatite_B_2eme_Rappel`, `Tares_associes`, `TRAITEMENT`) VALUES
(1, 0, '1', '1', '1', '1', '1', '1', 'false', 'false', '1', '1', '1', '1', '1', 'false', 'false', 'false', 'false', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'false', 'false', 'false', 'false', '1', '1', '1', '1', '1', '1', '1'),
(2, 0, '1', '1', '1', '1', '1', '1', 'true', 'true', '2023-04-04', '2023-04-07', 'non', '1', '1', 'true', 'true', 'true', 'true', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'on', 'on', 'on', 'on', '1', '1', '1', '1', '1', '1', '1'),
(3, 0, '1', '1', '1', '1', '1', '1', 'true', 'true', '2023-04-04', '2023-04-07', 'non', '1', '1', 'true', 'true', 'true', 'true', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'on', 'on', 'on', 'on', '1', '1', '1', '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `rendez_v`
--

DROP TABLE IF EXISTS `rendez_v`;
CREATE TABLE IF NOT EXISTS `rendez_v` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `patient_id` int(10) NOT NULL,
  `date_ap` date NOT NULL,
  `period` varchar(10) DEFAULT NULL,
  `protocole` varchar(255) NOT NULL,
  `analytic` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `fk_foreign_patient_id` (`patient_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rendez_v`
--

INSERT INTO `rendez_v` (`id`, `patient_id`, `date_ap`, `period`, `protocole`, `analytic`, `status`) VALUES
(20, 19, '2023-04-09', 'sabah', 'protocole19.png', 'analytic19.png', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
