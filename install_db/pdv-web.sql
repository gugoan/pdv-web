-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 12-Fev-2017 às 20:18
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pos-posnic`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `category_details`
--

CREATE TABLE IF NOT EXISTS `category_details` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_name` varchar(120) NOT NULL,
  `category_description` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Extraindo dados da tabela `category_details`
--

INSERT INTO `category_details` (`id`, `category_name`, `category_description`) VALUES
(20, 'Escritorio', '--'),
(21, 'Acessorios', '--'),
(22, 'Livro', '--'),
(23, 'Pencil', '--'),
(24, 'Caixa', '--'),
(25, 'Bolo', '--'),
(26, 'Chaveiro', 'metal'),
(27, 'Pen drive', 'Sandisk Pendrive'),
(28, 'Celular', 'Nokia 6300'),
(29, 'Bastao', 'teste'),
(30, 'Notebook', 'Info'),
(31, 'Tablet', 'Samsung Tab'),
(32, 'Ventilador', 'Ventilador e Venntoinhas'),
(33, 'Bolsa', 'Bolsa'),
(34, 'Milho doce', 'Alimentar'),
(35, 'Frutas', 'Alimentar'),
(36, 'Rolos em massa', 'Alimentar');

-- --------------------------------------------------------

--
-- Estrutura da tabela `customer_details`
--

CREATE TABLE IF NOT EXISTS `customer_details` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(200) NOT NULL,
  `customer_address` varchar(500) NOT NULL,
  `customer_contact1` varchar(100) NOT NULL,
  `customer_contact2` varchar(100) DEFAULT NULL,
  `balance` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Extraindo dados da tabela `customer_details`
--

INSERT INTO `customer_details` (`id`, `customer_name`, `customer_address`, `customer_contact1`, `customer_contact2`, `balance`) VALUES
(8, 'Pedrinho', 'Endereco qualquer', '7787876786', '989898988', 0),
(9, 'Ana Lu', 'Endereco qualquer', '7787876786', '989898988', 0),
(10, 'Caren', 'Endereco qualquer', '7787876786', '989898988', 0),
(11, 'soraia', 'Endereco qualquer', '7787876786', '989898988', 0),
(12, 'Oswaldo', 'Endereco qualquer', '7787876786', '989898988', 0),
(13, 'Jose', 'Endereco qualquer', '7787876786', '989898988', 80),
(14, 'Frodo', 'Endereco qualquer', '7787876786', '989898988', 6240),
(15, 'Samuel', 'Endereco qualquer', '7787876786', '989898988', 0),
(16, 'Jesue', 'Endereco qualquer', '7787876786', '989898988', 1810),
(17, 'Amarildo', 'Endereco qualquer', '7787876786', '989898988', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `stock_avail`
--

CREATE TABLE IF NOT EXISTS `stock_avail` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(120) NOT NULL,
  `quantity` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Extraindo dados da tabela `stock_avail`
--

INSERT INTO `stock_avail` (`id`, `name`, `quantity`) VALUES
(22, 'Pinaa para violoncelo', 290),
(23, 'Ponta de teto', 900),
(24, 'Violoncelo F', 0),
(25, 'ceParker Urban Fashion ', 0),
(26, 'Satzuma Diamante Pen', 0),
(27, 'Lamy Mod 17 Safari Matt ...', 0),
(28, 'CD RW', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `stock_details`
--

CREATE TABLE IF NOT EXISTS `stock_details` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `stock_id` varchar(120) NOT NULL,
  `stock_name` varchar(120) NOT NULL,
  `stock_quatity` int(11) NOT NULL,
  `supplier_id` varchar(250) NOT NULL,
  `company_price` decimal(10,2) NOT NULL,
  `selling_price` decimal(10,2) NOT NULL,
  `category` varchar(120) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `expire_date` datetime NOT NULL,
  `uom` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Extraindo dados da tabela `stock_details`
--

INSERT INTO `stock_details` (`id`, `stock_id`, `stock_name`, `stock_quatity`, `supplier_id`, `company_price`, `selling_price`, `category`, `date`, `expire_date`, `uom`) VALUES
(34, 'ST1', 'PinÃ§a para violoncelo', 0, 'EPALTDA', '9.00', '10.00', 'pen', '2013-08-15 03:01:01', '2020-12-30 00:00:00', ''),
(35, 'ST35', 'techo tip', 0, 'sadham', '8.00', '10.00', 'pen', '2013-08-15 03:01:50', '2020-12-30 00:00:00', ''),
(36, 'ST36', 'cello', 0, 'sadham', '7.00', '10.00', 'pen', '2013-08-15 03:02:08', '2020-12-30 00:00:00', ''),
(37, 'ST37', 'U Fashion', 0, 'sadham', '1000.00', '1100.00', 'pen', '2013-08-15 03:03:30', '2020-12-30 00:00:00', ''),
(38, 'ST38', 'CD RW', 0, 'EPALTDA', '500.00', '550.00', 'pen', '2013-08-15 03:03:52', '2020-12-30 00:00:00', ''),
(39, 'ST39', 'PeÃ§a Um', 0, 'MartMinas', '1980.00', '2000.00', 'pen', '2013-08-15 03:04:17', '2020-12-30 00:00:00', ''),
(40, 'ST40', 'CD RW', 0, 'EPALTDA', '4.00', '4.00', 'Frutas', '2017-02-12 19:00:45', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `stock_entries`
--

CREATE TABLE IF NOT EXISTS `stock_entries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `stock_id` varchar(120) NOT NULL,
  `stockidnumber` int(11) NOT NULL,
  `stock_name` varchar(260) NOT NULL,
  `stock_supplier_name` varchar(200) NOT NULL,
  `category` varchar(120) NOT NULL,
  `quantity` int(11) NOT NULL,
  `company_price` decimal(10,2) NOT NULL,
  `selling_price` decimal(10,2) NOT NULL,
  `opening_stock` int(11) NOT NULL,
  `closing_stock` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `username` varchar(120) NOT NULL,
  `type` varchar(50) NOT NULL,
  `salesid` varchar(120) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `payment` decimal(10,2) NOT NULL,
  `balance` decimal(10,2) NOT NULL,
  `mode` varchar(150) NOT NULL,
  `description` varchar(500) NOT NULL,
  `due` datetime NOT NULL,
  `subtotal` int(11) NOT NULL,
  `count1` int(11) NOT NULL,
  `billnumber` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=273 ;

--
-- Extraindo dados da tabela `stock_entries`
--

INSERT INTO `stock_entries` (`id`, `stock_id`, `stockidnumber`, `stock_name`, `stock_supplier_name`, `category`, `quantity`, `company_price`, `selling_price`, `opening_stock`, `closing_stock`, `date`, `username`, `type`, `salesid`, `total`, `payment`, `balance`, `mode`, `description`, `due`, `subtotal`, `count1`, `billnumber`) VALUES
(261, 'PR261', 261, 'Cello griper', 'arjun', '', 1000, '9.00', '10.00', 0, 1000, '2013-08-15 00:00:00', 'admin', 'entry', '', '9000.00', '9000.00', '0.00', 'cheque', 'uouo', '2020-12-30 00:00:00', 9000, 1, 'BILL-126'),
(262, 'PR262', 262, 'Cello', 'ram', '', 1000, '8.00', '10.00', 0, 1000, '2013-08-15 00:00:00', 'admin', 'entry', '', '8000.00', '8000.00', '0.00', 'cheque', '768768', '2020-12-30 00:00:00', 8000, 1, 'BILL-126'),
(263, 'PR263', 263, 'techo tip', 'Monish', '', 1000, '8.00', '10.00', 0, 1000, '2013-08-15 00:00:00', 'admin', 'entry', '', '8000.00', '8000.00', '0.00', 'cheque', '768768', '2020-12-30 00:00:00', 8000, 1, 'BILL-126'),
(264, 'PR264', 264, 'ceParker Urban Fashion', 'vignesh', '', 1000, '8.00', '10.00', 0, 1000, '2013-08-15 00:00:00', 'admin', 'entry', '', '8000.00', '8000.00', '0.00', 'cheque', '768768', '2020-12-30 00:00:00', 8000, 1, 'BILL-126'),
(265, 'PR265', 265, 'techo tip', 'Monish', '', 1000, '8.00', '10.00', 0, 1000, '2013-08-15 00:00:00', 'admin', 'entry', '', '8000.00', '8000.00', '0.00', 'cheque', '768768', '2020-12-30 00:00:00', 8000, 1, 'BILL-126'),
(266, 'PR266', 266, 'Cello', 'ram', '', 1000, '8.00', '10.00', 0, 1000, '2013-08-15 00:00:00', 'admin', 'entry', '', '8000.00', '8000.00', '0.00', 'cheque', '768768', '2020-12-30 00:00:00', 8000, 1, 'BILL-126'),
(267, 'PR267', 267, 'techo tip', 'Monish', '', 1000, '8.00', '10.00', 0, 1000, '2013-08-15 00:00:00', 'admin', 'entry', '', '8000.00', '8000.00', '0.00', 'cheque', '768768', '2020-12-30 00:00:00', 8000, 1, 'BILL-126'),
(268, 'PR268', 268, 'Cello griper', 'satheesh', '', 1000, '8.00', '10.00', 0, 1000, '2013-08-15 00:00:00', 'admin', 'entry', '', '8000.00', '8000.00', '0.00', 'cheque', '768768', '2020-12-30 00:00:00', 8000, 1, 'BILL-126'),
(269, 'PR269', 269, 'techo tip', 'Monish', '', 1000, '8.00', '10.00', 0, 1000, '2013-08-15 00:00:00', 'admin', 'entry', '', '8000.00', '8000.00', '0.00', 'cheque', '768768', '2020-12-30 00:00:00', 8000, 1, 'BILL-126'),
(270, 'PR270', 270, 'ceParker Urban Fashion', 'sadham', '', 1000, '8.00', '10.00', 0, 1000, '2013-08-15 00:00:00', 'admin', 'entry', '', '8000.00', '8000.00', '0.00', 'cheque', '768768', '2020-12-30 00:00:00', 8000, 1, 'BILL-127'),
(271, 'PR271', 271, 'Cello', 'ram', '', 1000, '8.00', '10.00', 0, 1000, '2013-08-15 00:00:00', 'admin', 'entry', '', '8000.00', '8000.00', '0.00', 'cheque', '768768', '2020-12-30 00:00:00', 8000, 1, 'BILL-127'),
(272, 'PR272', 272, 'techo', 'Monish', '', 1000, '8.00', '10.00', 0, 1000, '2013-08-15 00:00:00', 'admin', 'entry', '', '8000.00', '8000.00', '0.00', 'cheque', '768768', '2020-12-30 00:00:00', 8000, 1, 'BILL-127');

-- --------------------------------------------------------

--
-- Estrutura da tabela `stock_sales`
--

CREATE TABLE IF NOT EXISTS `stock_sales` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `transactionid` varchar(250) NOT NULL,
  `transidnumber` int(11) NOT NULL,
  `stock_name` varchar(200) NOT NULL,
  `category` varchar(120) NOT NULL,
  `supplier_name` varchar(200) NOT NULL,
  `selling_price` decimal(10,2) NOT NULL,
  `quantity` decimal(10,2) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `date` date NOT NULL,
  `username` varchar(120) NOT NULL,
  `customer_id` varchar(120) NOT NULL,
  `subtotal` decimal(10,2) NOT NULL,
  `payment` decimal(10,2) NOT NULL,
  `balance` decimal(10,2) NOT NULL,
  `discount` decimal(10,0) NOT NULL,
  `tax` decimal(10,0) NOT NULL,
  `tax_dis` varchar(100) NOT NULL,
  `dis_amount` decimal(10,0) NOT NULL,
  `grand_total` decimal(10,0) NOT NULL,
  `due` date NOT NULL,
  `mode` varchar(250) NOT NULL,
  `description` varchar(500) NOT NULL,
  `count1` int(11) NOT NULL,
  `billnumber` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Extraindo dados da tabela `stock_sales`
--

INSERT INTO `stock_sales` (`id`, `transactionid`, `transidnumber`, `stock_name`, `category`, `supplier_name`, `selling_price`, `quantity`, `amount`, `date`, `username`, `customer_id`, `subtotal`, `payment`, `balance`, `discount`, `tax`, `tax_dis`, `dis_amount`, `grand_total`, `due`, `mode`, `description`, `count1`, `billnumber`) VALUES
(20, 'SL263', 263, 'Cello griper', '', '', '10.00', '10.00', '100.00', '2013-08-15', 'admin', 'jacob', '90.00', '10.00', '80.00', '10', '87879', 'bnmnbmn', '10', '100', '1970-01-01', 'cheque', 'uuuoiuo', 1, 'BILL-126'),
(21, 'SL264', 264, 'Cello griper', '', '', '10.00', '100.00', '1000.00', '2013-08-15', 'admin', 'sam', '990.00', '100.00', '890.00', '0', '10', '8787', '10', '1000', '1970-01-01', 'cheque', 'iyiuy', 1, 'BILL-127'),
(22, 'SL265', 265, 'Cello griper', '', '', '10.00', '100.00', '1000.00', '2013-08-15', 'admin', 'sam', '990.00', '100.00', '890.00', '0', '10', '8787', '10', '1000', '1970-01-01', 'cheque', 'iyiuy', 1, 'BILL-127'),
(23, 'SL266', 266, 'Cello griper', '', '', '10.00', '100.00', '1000.00', '2013-08-15', 'admin', 'sam', '990.00', '100.00', '890.00', '0', '10', '8787', '10', '1000', '1970-01-01', 'cheque', 'iyiuy', 1, 'BILL-127'),
(24, 'SL267', 267, 'Cello griper', '', '', '10.00', '100.00', '1000.00', '2013-08-15', 'admin', 'sam', '990.00', '100.00', '890.00', '0', '10', '8787', '10', '1000', '1970-01-01', 'cheque', 'iyiuy', 1, 'BILL-127'),
(25, 'SL268', 268, 'Cello griper', '', '', '10.00', '100.00', '1000.00', '2013-08-15', 'admin', 'sam', '990.00', '100.00', '890.00', '0', '10', '8787', '10', '1000', '1970-01-01', 'cheque', 'iyiuy', 1, 'BILL-127'),
(26, 'SL269', 269, 'Cello griper', '', '', '10.00', '100.00', '1000.00', '2013-08-15', 'admin', 'sam', '990.00', '100.00', '890.00', '0', '10', '8787', '10', '1000', '1970-01-01', 'cheque', 'iyiuy', 1, 'BILL-127'),
(27, 'SL270', 270, 'Cello griper', '', '', '10.00', '100.00', '1000.00', '2013-08-15', 'admin', 'jerin', '1900.00', '190.00', '1810.00', '0', '78', 'hjhjkh', '100', '2000', '1970-01-01', 'cheque', 'khksg', 1, 'BILL-127'),
(28, 'SL270', 270, 'techo tip', '', '', '10.00', '100.00', '1000.00', '2013-08-15', 'admin', 'jerin', '1900.00', '190.00', '1810.00', '0', '78', 'hjhjkh', '100', '2000', '1970-01-01', 'cheque', 'khksg', 2, 'BILL-127'),
(29, 'SL271', 271, 'Cello griper', '', '', '10.00', '100.00', '1000.00', '2013-08-15', 'admin', 'sam', '990.00', '100.00', '890.00', '0', '10', '8787', '10', '1000', '1970-01-01', 'cheque', 'iyiuy', 1, 'BILL-127'),
(30, 'SL272', 272, 'Cello griper', '', '', '10.00', '100.00', '1000.00', '2013-08-15', 'admin', 'sam', '990.00', '100.00', '890.00', '0', '10', '8787', '10', '1000', '1970-01-01', 'cheque', 'iyiuy', 1, 'BILL-127');

-- --------------------------------------------------------

--
-- Estrutura da tabela `stock_user`
--

CREATE TABLE IF NOT EXISTS `stock_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  `answer` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `stock_user`
--

INSERT INTO `stock_user` (`id`, `username`, `password`, `user_type`, `answer`) VALUES
(2, 'admin', 'admin123456', 'admin', 'senhordosaneis');

-- --------------------------------------------------------

--
-- Estrutura da tabela `store_details`
--

CREATE TABLE IF NOT EXISTS `store_details` (
  `name` varchar(100) NOT NULL,
  `log` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `place` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `web` varchar(100) NOT NULL,
  `pin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `store_details`
--

INSERT INTO `store_details` (`name`, `log`, `type`, `address`, `place`, `city`, `phone`, `email`, `web`, `pin`) VALUES
('Teste', 'posnic.png', 'png', 'rua teste', 'lugar teste', 'gov valadares', '3332758969', 'pos-posnic@teste.com', 'pos-posnic.com', '123456');

-- --------------------------------------------------------

--
-- Estrutura da tabela `supplier_details`
--

CREATE TABLE IF NOT EXISTS `supplier_details` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `supplier_name` varchar(200) NOT NULL,
  `supplier_address` varchar(500) NOT NULL,
  `supplier_contact1` varchar(100) NOT NULL,
  `supplier_contact2` varchar(100) NOT NULL,
  `balance` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Extraindo dados da tabela `supplier_details`
--

INSERT INTO `supplier_details` (`id`, `supplier_name`, `supplier_address`, `supplier_contact1`, `supplier_contact2`, `balance`) VALUES
(37, 'Rahul', '#123,2nd sector ,hsr layout,nbangalore', '7787876786', '89798', 0),
(38, 'Monish', '#124,2nd sector,hsr layout,bangalore', '7787876786', '9539126325', 0),
(39, 'kiran', '#126,2nd sector,hsr layout,bangalore', '7787876786', '9539126325', 0),
(40, 'MartMinas', 'Endereco qualquer', '7787876786', '9539126325', 0),
(41, 'libin', '#126,2nd sector,hsr layout,bangalore', '7787876786', '9539126325', 0),
(42, 'Samiro', 'Endereco qualquer', '7787876786', '9539126325', 0),
(43, 'AlexSouza', 'Endereco qualquer', '7787876786', '9539126325', 0),
(44, 'arun', '#126,2nd sector,hsr layout bangalore', '7787876786', '9539126325', 0),
(45, 'MerceariaSantos', 'Endereco qualquer', '7787876786', '9539126325', 0),
(46, 'EPALTDA', 'Endereco qualquer', '7787876786', '9539126325', 0),
(47, 'MarinhoSA', 'Endereco qualquer', '7787876786', '9539126325', 0),
(48, 'Santher', '#126,2nd sector,hsr layout bangalore', '7787876786', '9539126325', 0),
(49, 'FornecedorExemplo', 'rua teste', '3398998789987', '3332765588', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `transactions`
--

CREATE TABLE IF NOT EXISTS `transactions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(50) NOT NULL,
  `customer` varchar(250) NOT NULL,
  `supplier` varchar(250) NOT NULL,
  `subtotal` decimal(10,2) NOT NULL,
  `payment` decimal(10,2) NOT NULL,
  `balance` decimal(10,2) NOT NULL,
  `due` datetime NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `rid` varchar(120) NOT NULL,
  `receiptid` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `uom_details`
--

CREATE TABLE IF NOT EXISTS `uom_details` (
  `id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `name` varchar(120) NOT NULL,
  `spec` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `uom_details`
--

INSERT INTO `uom_details` (`id`, `name`, `spec`) VALUES
(0000000006, 'UOM1', 'UOM1 Specification'),
(0000000007, 'UOM2', 'UOM2 Specification'),
(0000000008, 'UOM3', 'UOM3 Specification'),
(0000000009, 'UOM4', 'UOM4 Specification');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
