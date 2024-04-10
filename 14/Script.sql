-- Criando o banco de dados "contatos"
CREATE DATABASE IF NOT EXISTS contatos;

-- Usando o banco de dados "contatos"
USE contatos;

-- Criando a tabela "contatos_info"
CREATE TABLE IF NOT EXISTS contato_info (
id INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(100) NOT NULL,
telefone VARCHAR(20),
email VARCHAR(100) NOT NULL
);

-- Criando um usuário para acessar o banco de dados
CREATE USER 'usuario_contato'@'localhost' IDENTIFIED BY 'senha123';

-- Concedendo permissões para o usuário no banco "contatos"
FLUSH PRIVILEGES;

-- Inserindo dados no banco
INSERT INTO  contato_info (nome, telefone, email) VALUES
('joao', '123456', 'email@joao');