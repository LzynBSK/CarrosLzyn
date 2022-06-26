# CarrosLzyn
entre no PhpMyAdmin, crie uma base de dados chamada "carros_lzyn", e use os seguintes comandos
1º

CREATE TABLE IF NOT EXISTS `carro` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `marca` varchar(100) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `anoLancamento` varchar(4) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `preco` varchar(100) NOT NULL,
  `vendido` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2; 


2º

INSERT INTO `carro` (`id`, `nome`, `marca`, `estado`, `anoLancamento`, `vendido`, `cidade`, `preco`) VALUES
(1, 'F-Type', 'Jaguar', 'Novo', '2021','Disponível', 'Palmas', 'R$ 504.999');
