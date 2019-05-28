/*criando o banco*/
create database produtos_devmobile;

/*criando tabelas*/
create table categoria( id int PRIMARY KEY null auto_increment,  nome varchar(100));
create table produto(id int PRIMARY key null auto_increment, nome varchar(100) , descricao varchar(200), categoria int,
preco float, FOREIGN KEY (categoria) REFERENCES Categoria(id));

/*inserindo em categoria*/
INSERT INTO `categoria` (`id`, `nome`) VALUES (NULL, 'Mobile');
INSERT INTO `categoria` (`id`, `nome`) VALUES (NULL, 'PC');
INSERT INTO `categoria` (`id`, `nome`) VALUES (NULL, 'Perifericos');			

/*inserindo em produto*/
INSERT INTO `produto` (`id`, `nome`, `descricao`, `preco`, `categoria`) 
VALUES (NULL, 'Samsung S8', 'Um smartphone da Samsung', 2000, 1);
INSERT INTO `produto` (`id`, `nome`, `descricao`, `preco`,`categoria`) 
VALUES (NULL, 'Samsung S9', 'Um smartphone da Samsung', 3000, 1);
INSERT INTO `produto` (`id`, `nome`, `descricao`, `preco`,`categoria`) 
VALUES (NULL, 'Samsung S10', 'Um smartphone da Samsung', 4000,  1);

INSERT INTO `produto` (`id`, `nome`, `descricao`, `preco`,`categoria`) 
VALUES (NULL, 'Inspiron 15', 'Um PC da DELL', 4000, 2);