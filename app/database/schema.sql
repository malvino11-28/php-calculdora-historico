-- CREATE DATABASE hist IF DONT EXIST --

CREATE TABLE calc(
    n1 DECIMAL,
    n2 DECIMAL,
    operation VARCHAR(3),
    result DECIMAL,
    data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)

