CREATE TABLE CUSTOMER (
  CUSTOMER_ID INT NOT NULL AUTO_INCREMENT,
  CUSTOMER_NAME VARCHAR(50) NOT NULL,
  CUSTOMER_EMAIL VARCHAR(250) NOT NULL,
  CUSTOMER_DATE VARCHAR(50) NOT NULL,
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
VALUES ('Usuário 1', 'usuario1@email.com', '2022-01-01', '123456789', '1234567890', 'M', 'senha1', 'path1'),
       ('Usuário 2', 'usuario2@email.com', '2022-01-02', '987654321', '0987654321', 'F', 'senha2', 'path2'),
       ('Usuário 3', 'usuario3@email.com', '2022-01-03', '111111111', '2222222222', 'M', 'senha3', 'path3'),
       ('Usuário 4', 'usuario4@email.com', '2022-01-04', '555555555', '4444444444', 'F', 'senha4', 'path4'),
       ('Usuário 5', 'usuario5@email.com', '2022-01-05', '999999999', '6666666666', 'M', 'senha5', 'path5'),
       ('Usuário 6', 'usuario6@email.com', '2022-01-06', '333333333', '7777777777', 'F', 'senha6', 'path6');

-- Inserção dos itens
INSERT INTO PRODUCT_ITEM (CUSTOMER_ID, PRODUCT_NAME, PRICE, DESCRIPTION, IMAGE_PATH)
VALUES (1, 'Item 1 do Usuário 1', 10.99, 'Descrição do item 1 do Usuário 1', 'item1_path'),
       (2, 'Item 1 do Usuário 2', 20.99, 'Descrição do item 1 do Usuário 2', 'item2_path'),
       (3, 'Item 1 do Usuário 3', 30.99, 'Descrição do item 1 do Usuário 3', 'item3_path'),
       (4, 'Item 1 do Usuário 4', 40.99, 'Descrição do item 1 do Usuário 4', 'item4_path'),
       (5, 'Item 1 do Usuário 5', 50.99, 'Descrição do item 1 do Usuário 5', 'item5_path'),
       (6, 'Item 1 do Usuário 6', 60.99, 'Descrição do item 1 do Usuário 6', 'item6_path');
