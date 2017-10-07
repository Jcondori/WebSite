Create database websites;

use websites;

create table slider
(
	id int auto_increment,
    encabezado text,
    subencabezado text,
    image text,
    primary key(id)
);

Insert into slider values(null,'Encabesado1 - Condori','SubEncabesado1 - Condori','slider1.jpg');
Insert into slider values(null,'Encabesado2 - Condori','SubEncabesado2 - Condori','slider2.jpg');
Insert into slider values(null,'Encabesado3 - Condori','SubEncabesado3 - Condori','slider3.jpg');

Select * from