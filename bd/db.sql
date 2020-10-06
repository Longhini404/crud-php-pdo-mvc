-- use upgradegamer;

create database upgradegamer;

use upgradegamer;

CREATE TABLE usuario (
  `id_usuario` int(16) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `tipo_usuario` ENUM('admin', 'comum'),
  `usuario` varchar(64) DEFAULT NULL,
  `email` varchar(64) DEFAULT NULL,
  `senha` varchar(64) DEFAULT NULL,
  `contato` varchar(64) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

-- Hardware --
CREATE TABLE hardware (
  `id_hardware` int(16) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `titulo` varchar(256) DEFAULT NULL,
  `preco` varchar(16) DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `categoria` ENUM('Processador', 'Placa Mãe', 'Placa de Vídeo', 'Memória Ram', 'Armazenamento', 'Fonte de Alimentação', 'Resfriamento'),
  `created_at` datetime DEFAULT NULL,
  `id_usuario` int(16) NOT NULL,
  CONSTRAINT fk_usuario_hardware FOREIGN KEY (id_usuario) REFERENCES usuario (id_usuario)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

select * from usuario;

SELECT * FROM hardware;

INSERT INTO `usuario` (`id_usuario`, `tipo_usuario`, `usuario`, `email`, `senha`, `contato`, `created_at`) VALUES ('414', 'comum', 'Longhini', 'guilhermelonghini@gmail.com', '123', '(44) 98847-3908', '2020-09-07 22:45:30');

INSERT INTO `hardware` (`id_hardware`, `titulo`, `preco`, `descricao`, `categoria`, `id_usuario`) VALUES ('1', 'Gamer', '404,00', 'Lorem', 'Processador', '404');
