CREATE TABLE CUSTOMER (
  CUSTOMER_ID INT NOT NULL AUTO_INCREMENT,
  CUSTOMER_NAME VARCHAR(50) NOT NULL,
  CUSTOMER_EMAIL VARCHAR(250) NOT NULL,
  CUSTOMER_DATE DATE NOT NULL,
  CUSTOMER_PHONE_NUMBER VARCHAR(50) NOT NULL,
  CUSTOMER_DOCUMENT VARCHAR(50) NOT NULL,
  CUSTOMER_GENDER VARCHAR(50) NOT NULL,
  PASSWORD_HASH VARCHAR (250) NOT NULL,
  IMAGE_PATH VARCHAR(250),
  PRIMARY KEY (CUSTOMER_ID)
);

CREATE TABLE PRODUCT_ITEM ( 
  PRODUCT_ITEM_ID INT NOT NULL AUTO_INCREMENT,
  CUSTOMER_ID INT NOT NULL,
  PRODUCT_NAME VARCHAR(50) NOT NULL,
  PRICE DECIMAL(10,2) NOT NULL,
  DESCRIPTION VARCHAR(250) NOT NULL,
  IMAGE_PATH VARCHAR(50), 
  PRIMARY KEY (PRODUCT_ITEM_ID),
  FOREIGN KEY (CUSTOMER_ID) REFERENCES CUSTOMER(CUSTOMER_ID)
);

-- Inserção dos usuários
INSERT INTO CUSTOMER (CUSTOMER_NAME, CUSTOMER_EMAIL, CUSTOMER_DATE, CUSTOMER_PHONE_NUMBER, CUSTOMER_DOCUMENT, CUSTOMER_GENDER, PASSWORD_HASH, IMAGE_PATH)
VALUES ('Sidoka da Silva', 'usuario1@email.com', '2022-01-01', '123456789', '1234567890', 'M', 'senha1', 'path1'),
       ('Tasha Okereke', 'usuario2@email.com', '2022-01-02', '987654321', '0987654321', 'F', 'senha2', 'path2'),
       ('Fabrício Soares', 'usuario3@email.com', '2022-01-03', '111111111', '2222222222', 'M', 'senha3', 'path3'),
       ('Tracie Okereke', 'usuario4@email.com', '2022-01-04', '555555555', '4444444444', 'F', 'senha4', 'path4'),
       ('Rick Junior', 'usuario5@email.com', '2022-01-05', '999999999', '6666666666', 'M', 'senha5', 'path5'),
       ('Djonga Oliveira', 'usuario6@email.com', '2022-01-06', '333333333', '7777777777', 'M', 'senha6', 'path6');

-- Inserção dos itens
INSERT INTO PRODUCT_ITEM (CUSTOMER_ID, PRODUCT_NAME, PRICE, DESCRIPTION, IMAGE_PATH)
VALUES (1, 'Relógio Class Basic', 499.99, 'O modelo class basic contamos com uma pulseira de silicone mais fina que os demais, e seu diferencial é sua leveza e casualidade, cabendo em ocasiões diversas do dia a dia como uma academia, trabalho, passeio etc.', 'item1_path'),
       (2, 'Relógio Ultra Performance', 699.99,'O modelo ultra Performance é para você que quer fazer suas atividades do dia a dia com muito estilo, pra quem tem um dia mais agitado, gosta de atividades físicas mais ousadas, como escalada, mergulho, trilhas, sua construção é mais robusta e atende mais atividades', 'item2_path'),
       (3, 'Relógio Ultra Performance 2.0', 899.99, 'O modelo Ultra Performance 2.0 é uma releitura do sucesso Ultra Perfomance, dessa vez com um sensor de batimentos aprimorado e um GPS mais preciso para os atletas que buscam mais precisão exata em suas rotas de pedalada, corrida etc.', 'item3_path'),
       (4, 'Relógio Slim Contrast', 599.99, 'O modelo Slim Contrast é ideal pra você que gosta de mudar sempre, além de todas as funcionalidades padrões de nossos relógios, este modelo vem com 2 pares de pulseira extra, da cor de sua escolha (consulte disponibilidade de cores antes da compra)', 'item4_path'),
       (5, 'Item 1 do Usuário 5', 50.99, 'Descrição do item 1 do Usuário 5', 'item5_path'),
       (6, 'Item 1 do Usuário 6', 60.99, 'Descrição do item 1 do Usuário 6', 'item6_path');
