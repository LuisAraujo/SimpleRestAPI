/*criando o banco*/
create database produtos_devmobile;

/*criando tabelas*/
create table categoria( id int PRIMARY KEY null auto_increment,  nome varchar(100));
create table produto(id int PRIMARY key null auto_increment, nome varchar(100) , descricao varchar(200), categoria int,
FOREIGN KEY (categoria) REFERENCES Categoria(id));

/*inserindo em categoria*/
INSERT INTO `categoria` (`id`, `nome`) VALUES (NULL, 'Mobile');
INSERT INTO `categoria` (`id`, `nome`) VALUES (NULL, 'PC');
INSERT INTO `categoria` (`id`, `nome`) VALUES (NULL, 'Perifericos');			

/*inserindo em produto*/
INSERT INTO `produto` (`id`, `nome`, `descricao`, `categoria`) 
VALUES (NULL, 'Sangung S8', 'Um smartphone da Sansung', 1);
INSERT INTO `produto` (`id`, `nome`, `descricao`, `categoria`) 
VALUES (NULL, 'Sangung S9', 'Um smartphone da Sansung', 1);
INSERT INTO `produto` (`id`, `nome`, `descricao`, `categoria`) 
VALUES (NULL, 'Sangung S10', 'Um smartphone da Sangundo', 1);

INSERT INTO `produto` (`id`, `nome`, `descricao`, `categoria`) 
VALUES (NULL, 'Inspiron 15', 'Um PC da DELL', 2);