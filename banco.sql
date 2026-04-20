CREATE DATABASE conectaja;
USE conectaja;

CREATE TABLE ambientes (
id INT AUTO_INCREMENT PRIMARY KEY,
codigo VARCHAR(50) UNIQUE,
nome VARCHAR(100),
equipamento VARCHAR(255),
descricao TEXT
);

INSERT INTO ambientes VALUES
(1,'residencial','Residencial','Roteador Wireless (SOHO)','Uso doméstico'),
(2,'pequeno_escritorio','Pequeno Escritório','Switch 24 portas','Rede estável'),
(3,'data_center','Data Center','Roteador + L3','Alta performance');
