/* 
Acesse: "C:\ProgramData\MySQL\MySQL Server 8.0\my.ini" com o bloco de notas como admin.
Procure por secure-file-priv="......" e apague o que tiver dentro, assim: secure-file-priv="".
Obs. está dentro de [mysqld] caso não tenha adicione.

[mysqld]
secure-file-priv=""
*/

LOAD DATA INFILE
'caminho/arquivo.csv'
INTO TABLE minha_Tabela
FIELDS TERMINATED by ';'
ENCLOSED BY '"'
LINES TERMINATED BY '\n'
IGNORE 1 ROWS; /* Ignora a linha 1, necessário!!! mantenha a linha de nomes das colunas. */