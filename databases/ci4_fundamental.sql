/*
 Navicat Premium Data Transfer

 Source Server         : CI4_FUND_MYSQL
 Source Server Type    : MySQL
 Source Server Version : 80018
 Source Host           : localhost:3308
 Source Schema         : ci4_fundamental

 Target Server Type    : MySQL
 Target Server Version : 80018
 File Encoding         : 65001

 Date: 19/01/2021 09:03:41
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for data_penduduk
-- ----------------------------
DROP TABLE IF EXISTS `data_penduduk`;
CREATE TABLE `data_penduduk`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `tempat_lahir` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `tanggal_lahir` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `gender` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `id`(`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 105 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of data_penduduk
-- ----------------------------
INSERT INTO `data_penduduk` VALUES (2, 'Nola Keith', 'Pencahue', '21/11/1989', '1', 'dolor@duiCraspellentesque.ca', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (3, 'Genevieve Vargas', 'Port Coquitlam', '11/05/1990', '0', 'eget.varius.ultrices@Suspendisse.com', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (4, 'Erin Salazar', 'Legnica', '12/12/1993', '0', 'lectus.quis.massa@vitae.ca', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (5, 'Jaquelyn Shaffer', 'Bogaarden', '29/01/1993', '1', 'Vestibulum@montesnascetur.com', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (6, 'Cleo Ryan', 'Merchtem', '05/09/1987', '0', 'conubia@tellus.ca', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (8, 'Mona Salazar', 'Cali', '07/06/1984', '0', 'a@arcu.edu', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (9, 'Jane Kline', 'Mesoraca', '04/01/1982', '1', 'dictum@commodo.edu', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (10, 'Lara Mccarthy', 'Embourg', '26/07/1991', '1', 'cursus@pulvinararcu.ca', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (11, 'Keelie Whitehead', 'Penticton', '13/02/1984', '0', 'ac@ultricesposuerecubilia.net', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (12, 'Irene Vazquez', 'Marneffe', '04/09/1988', '1', 'massa.Vestibulum@feugiatLoremipsum.net', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (13, 'Chiquita Mcconnell', 'Perwez', '20/10/1980', '1', 'nisi@duilectus.org', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (14, 'Quinn Conrad', 'Schwalbach', '01/11/1992', '0', 'habitant.morbi.tristique@egestasligulaNullam.co.uk', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (15, 'Marah Powell', 'Mold', '07/06/1984', '1', 'nunc.sit.amet@Nunc.org', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (16, 'Kathleen Webster', 'Lucknow', '03/09/1985', '1', 'lorem.ut@leo.co.uk', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (17, 'Maya Harding', 'York', '20/01/1984', '1', 'Pellentesque.habitant@diam.edu', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (18, 'Blair Vazquez', 'Davenport', '10/12/1991', '0', 'vulputate.mauris.sagittis@variusNamporttitor.org', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (19, 'Leigh Munoz', 'Yeotmal', '29/06/1982', '0', 'pharetra@noncursus.net', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (20, 'Nora Silva', 'Weymouth', '11/10/1986', '0', 'leo.Morbi.neque@nunc.edu', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (21, 'Lesley Bernard', 'Oostkerke', '13/11/1986', '0', 'mollis.lectus@semper.ca', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (22, 'Alisa Gaines', 'Zuienkerke', '02/09/1990', '0', 'dictum.augue.malesuada@urna.edu', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (23, 'Colleen Mccarthy', 'Saint-Rhémy-en-Bosses', '24/11/1992', '0', 'magna.Sed.eu@tempor.co.uk', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (24, 'Gillian Jefferson', 'Amelia', '01/06/1984', '0', 'enim.Etiam.gravida@blanditNamnulla.co.uk', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (25, 'Amela Whitfield', 'Neath', '05/04/1982', '1', 'sed.dolor@elitEtiamlaoreet.org', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (26, 'Cameran Compton', 'Kubinka', '06/02/1991', '0', 'Quisque.libero.lacus@augue.ca', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (27, 'Kellie Walter', 'Gwadar', '05/07/1989', '1', 'nulla@rutrum.org', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (28, 'Jaden Parks', 'Vitrival', '21/01/1985', '0', 'elit.elit.fermentum@Cras.ca', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (29, 'Imani Bentley', 'Gujrat', '12/10/1980', '1', 'Quisque.nonummy@tinciduntpedeac.org', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (30, 'Elaine Stuart', 'Candela', '30/06/1985', '1', 'Cum@convallis.org', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (31, 'Rana Burch', 'Bannu', '10/07/1984', '1', 'Donec.elementum@Proin.org', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (32, 'Cailin Young', 'Longueville', '08/02/1987', '0', 'sit.amet@Cumsociisnatoque.co.uk', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (33, 'Rosalyn Bauer', 'Montgomery', '23/10/1985', '1', 'et.euismod@ornarelectusante.ca', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (34, 'Briar Weeks', 'Santa Vittoria in Matenano', '05/11/1981', '0', 'ipsum@DonecegestasDuis.co.uk', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (35, 'Jana Kinney', 'Zolder', '29/12/1979', '0', 'accumsan@imperdietnec.edu', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (36, 'Ivy Hurst', 'Eschwege', '03/08/1979', '0', 'dictum.ultricies.ligula@arcuet.edu', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (37, 'Kirestin Stone', 'Ferlach', '05/04/1992', '1', 'augue@ipsumnon.com', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (38, 'Kylynn Wall', 'Cupar', '03/12/1993', '1', 'ornare.Fusce@ante.net', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (39, 'Aurelia Wilkinson', 'Cali', '04/12/1992', '1', 'Mauris.vel@Nuncacsem.org', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (40, 'Carissa Booth', 'Nieuwenrode', '05/03/1993', '0', 'accumsan.convallis.ante@faucibuslectus.edu', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (41, 'Rosalyn Avery', 'Khimki', '26/12/1992', '1', 'est.ac.facilisis@necmollisvitae.ca', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (42, 'Leigh George', 'Olmué', '21/01/1991', '1', 'ac.urna.Ut@eumetus.net', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (43, 'Nita Gaines', 'Broxburn', '10/08/1980', '0', 'nec@aaliquetvel.edu', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (44, 'Odessa Cain', 'Kemerovo', '14/02/1991', '0', 'habitant.morbi@laoreetlectus.com', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (45, 'Maya Gibson', 'Bojano', '19/05/1978', '1', 'vitae.sodales@velvulputate.ca', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (46, 'Amy Sanders', 'Burlington', '03/07/1983', '1', 'sodales.purus.in@lorem.edu', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (47, 'Lara Potts', 'Penicuik', '09/11/1981', '0', 'nisl.Nulla@ridiculusmusProin.org', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (48, 'Ila Raymond', 'College', '06/05/1979', '0', 'sollicitudin@aliquet.org', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (49, 'Quemby Lara', 'Llangollen', '10/11/1980', '1', 'turpis@Nuncmaurissapien.co.uk', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (50, 'Iris Trevino', 'Cicagna', '17/02/1991', '1', 'massa.Vestibulum@Nullamutnisi.net', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (51, 'Mikayla Cantrell', 'Aurora', '20/03/1984', '0', 'ullamcorper.velit.in@Morbi.org', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (52, 'Shana Schwartz', 'Draguignan', '12/07/1985', '0', 'molestie@metus.net', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (53, 'Morgan Knowles', 'Sauvenire', '29/10/1987', '1', 'gravida.non@Aliquam.ca', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (54, 'Vivien Rivas', 'Tenali', '17/02/1981', '1', 'sem@dignissimpharetra.co.uk', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (55, 'Jael Brooks', 'Chestermere', '03/09/1990', '1', 'erat@tortorIntegeraliquam.co.uk', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (56, 'Jeanette Bean', 'Daknam', '18/10/1982', '1', 'erat.volutpat.Nulla@Quisque.co.uk', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (57, 'Audra Calhoun', 'Murcia', '06/02/1980', '1', 'consectetuer.mauris.id@non.org', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (58, 'Diana Wiley', 'Bojano', '18/02/1992', '0', 'tincidunt.adipiscing.Mauris@dictumultricies.org', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (59, 'Bryar Barton', 'Aguazul', '05/07/1986', '1', 'eu@dignissim.com', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (60, 'Xaviera Brock', 'Requínoa', '27/12/1979', '0', 'tortor@enimconsequat.com', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (61, 'Odessa Witt', 'Dongducheon', '30/04/1986', '1', 'nibh.Phasellus.nulla@Duisrisus.org', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (62, 'Maggy Mcclain', 'Philadelphia', '08/04/1990', '0', 'dictum.sapien.Aenean@nec.edu', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (63, 'Meghan Russell', 'Denny', '24/06/1991', '0', 'purus.Nullam.scelerisque@mauriserateget.co.uk', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (64, 'Madison Harper', 'Richmond', '26/07/1992', '1', 'vitae@ipsum.edu', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (65, 'Aurora Mooney', 'Zonhoven', '20/01/1990', '1', 'Vestibulum.ante.ipsum@sitamet.org', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (66, 'Ignacia Dickerson', 'Gjoa Haven', '24/02/1984', '1', 'lobortis@dapibusgravidaAliquam.net', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (67, 'Chelsea Ramos', 'Valverde', '26/06/1984', '1', 'eu.placerat.eget@commodoipsumSuspendisse.net', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (68, 'Hermione Stephens', 'Lloydminster', '14/12/1979', '1', 'mi.lorem.vehicula@elitpedemalesuada.ca', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (69, 'Remedios Bright', 'Trollhättan', '02/03/1989', '0', 'risus@ligulatortordictum.org', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (70, 'Paloma Cooke', 'Shawville', '14/04/1992', '0', 'malesuada@ipsumcursusvestibulum.org', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (71, 'Paloma Arnold', 'Chiny', '20/07/1992', '0', 'egestas.hendrerit@Aliquamnisl.edu', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (72, 'Roary Hansen', 'Codognè', '31/05/1991', '0', 'pede.Suspendisse.dui@Nullam.ca', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (73, 'Helen Cain', 'St. Andrä', '16/08/1985', '1', 'Suspendisse.eleifend.Cras@Curabitur.org', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (74, 'Sydnee Lynch', 'Montenegro', '18/03/1981', '0', 'Sed.diam.lorem@erategetipsum.net', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (75, 'Ariel Saunders', 'Noisy-le-Grand', '05/06/1991', '0', 'sed@augue.com', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (76, 'Kiayada Rasmussen', 'Picture Butte', '13/06/1993', '1', 'pede@ac.edu', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (77, 'Kevyn Spence', 'Ravenstein', '10/10/1986', '1', 'ut.eros@iaculis.org', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (78, 'Jennifer Golden', 'Leke', '24/01/1991', '0', 'magna.tellus.faucibus@dolor.ca', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (79, 'Chiquita Cabrera', 'Nagpur', '06/04/1988', '0', 'ligula@luctusipsum.net', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (80, 'Lucy Patterson', 'Capannori', '27/09/1993', '1', 'sem.elit.pharetra@imperdietnonvestibulum.edu', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (81, 'Hedy Chaney', 'Maglie', '18/04/1984', '0', 'Proin.sed.turpis@elit.org', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (82, 'Keelie Faulkner', 'Yangju', '18/05/1979', '0', 'primis@necmollisvitae.co.uk', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (83, 'Maris Herrera', 'Sant\'Angelo in Pontano', '07/01/1993', '0', 'Aliquam@elementumpurus.org', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (84, 'Basia Vazquez', 'Windsor', '26/09/1985', '1', 'volutpat.nunc@et.net', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (85, 'Shelley Rosa', 'Taldom', '28/05/1991', '0', 'et.magna@congue.co.uk', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (86, 'Christen Prince', 'Bellante', '18/06/1992', '0', 'arcu.iaculis@Curabitur.edu', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (87, 'Lacota Berger', 'Crawley', '01/06/1984', '0', 'neque.sed.dictum@ullamcorperDuiscursus.org', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (88, 'Erica Rosario', 'Saint-Honor�', '27/08/1986', '1', 'lorem.eget@Quisquenonummy.com', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (89, 'Dakota Jensen', 'Worms', '11/05/1986', '0', 'hymenaeos.Mauris.ut@nec.net', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (90, 'Belle Travis', 'Cuddapah', '07/04/1993', '1', 'Aliquam@feugiat.co.uk', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (91, 'Lesley Saunders', 'Falkensee', '02/05/1978', '0', 'dui.in@quama.net', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (92, 'Gwendolyn Brooks', 'Missoula', '16/03/1992', '1', 'ante.iaculis@duilectusrutrum.org', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (93, 'Jeanette Barr', 'Aklavik', '21/02/1987', '0', 'Cras.dolor@eratvelpede.ca', NULL, NULL);
INSERT INTO `data_penduduk` VALUES (101, 'Muluk Dharmayana, S.T.', 'Bandung', '18/08/1986', '0', 'muluk.dharmayana@gmail.com', '2021-01-16 18:06:30', '2021-01-16 18:06:30');
INSERT INTO `data_penduduk` VALUES (102, 'Rumaisha Indy Dharmayana', 'Bandung', '16/10/2010', '1', 'rumaisha@indy.com', '2021-01-17 19:16:31', '2021-01-17 19:16:31');
INSERT INTO `data_penduduk` VALUES (103, 'Surya Agung Pratama', 'Arab', '18/11/2009', '0', 'suryaagusngpratama@gmail.com', '2021-01-17 20:58:14', '2021-01-17 20:58:14');
INSERT INTO `data_penduduk` VALUES (104, 'Muammar Ayyash', 'Bandung', '05/09/2016', '0', 'muammar.ayyash@gmail.com', '2021-01-17 21:22:01', '2021-01-17 21:22:01');

SET FOREIGN_KEY_CHECKS = 1;
