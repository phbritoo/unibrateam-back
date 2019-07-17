-- CREATE DATABASE gestao_financeira;
-- USE gestao_financeira;

-- CREATE TABLE clientes(
--   cli_id INT AUTO_INCREMENT PRIMARY KEY,
--   cli_nome VARCHAR(200) NOT NULL,
--   cli_cpf VARCHAR(11) NOT NULL,
--   cli_email VARCHAR(100),
--   cli_dataNasc VARCHAR(10),
--   cli_tel VARCHAR(15),
--   cli_status VARCHAR(50)
-- );

-- CREATE TABLE funcionarios(
-- 	func_id INT AUTO_INCREMENT PRIMARY KEY,
-- 	func_nome VARCHAR(200) NOT NULL,
-- 	func_cpf VARCHAR(11) NOT NULL,
-- 	func_tel VARCHAR(15),
-- 	func_bruto VARCHAR(10),
-- 	func_liquido VARCHAR(10),
-- 	func_desconto VARCHAR(10) 
-- );


-- CREATE TABLE usuarios(
--   id INT AUTO_INCREMENT PRIMARY KEY,
--   login VARCHAR(20) NOT NULL,
--   senha VARCHAR(20) NOT NULL
-- );

-- SELECT * FROM clientes;

-- SELECT * FROM funcionarios;

-- SELECT * FROM usuarios; 

-- SELECT cli_id, cli_nome, cli_cpf, cli_email, cli_dataNasc, cli_tel, cli_status FROM clientes WHERE cli_id = 1 ;

-- INSERT INTO clientes (cli_nome, cli_cpf, cli_email, cli_dataNasc, cli_tel, cli_status)
--   VALUES ('teste paulo', '0000000001', 'paulo@paulo.com', '06/08/1996', '(81)997626600', 'devendo');

-- INSERT INTO clientes (cli_nome, cli_cpf, cli_email, cli_dataNasc, cli_tel, cli_status)
--   VALUES ('teste paulo 2', '00000002', 'paulo@paulo.com', '06/08/1996', '(81)997626600', 'devendo');

-- INSERT INTO funcionarios (func_nome, func_cpf, func_tel, func_bruto, func_liquido, func_desconto) 
-- 	VALUES ('funcionario 1', '002' , '81997626600', '2.000,02', '1.500', '200.12' );

-- INSERT INTO usuarios (login, senha) VALUES ('teste', 'teste');




