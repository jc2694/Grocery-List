# Grocery-List
created as take home assignment

Used Apache 2.4
PHP
MySQl
JavaScript
CSS 
HTML


To use:

set up an apache server
set up mysql databases with the following tables:

Users( idUser INT NOT NULL UNSIGNED NOT NULL, name VARCHAR() NOT NULL, email VARCHAR() NOT NULL, PRIMARY KEY(idUser) )
GList(idgrocery INT NOT NULL UNSIGNED, listname VARCHAR(255) NOT NULL, items BLOB NOT NULL, PRIMARY KEY(idgrocery) )
USER_GROCERY( idUser INT NOT NULL UNSIGNED, idgrocery INT NOT NULL UNSIGNED, FOREIGN KEY (idUser) REFERENCES users (idUser), FOREIGN KEY (idgrocery) REFERENCES GList (idgrocery) )



