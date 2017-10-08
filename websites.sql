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

create table miembros
(
	id int auto_increment,
    nombre text,
    cargo text,
    area text,
    image text,
    primary key(id)
);

Insert into slider values(null,'Encabesado1 - Condori','SubEncabesado1 - Condori','slider1.jpg');
Insert into slider values(null,'Encabesado2 - Condori','SubEncabesado2 - Condori','slider2.jpg');
Insert into slider values(null,'Encabesado3 - Condori','SubEncabesado3 - Condori','slider3.jpg');
-- Delete from slider;
-- Delete from miembros;
-- Select * from slider;
-- Select * from miembros;

insert into miembros values(null,'Pbro. Víctor Manuel G.','Presidente','Comisión de la Juventud Prelatura de Yauyos','member1.webp');
insert into miembros values(null,'Daniel Ramos Quiroz','Coordinador General','Comisión de la Juventud Prelatura de Yauyos','member2.webp');
insert into miembros values(null,'María Luisa Valdivieso','Secretaria','Comisión de la Juventud Prelatura de Yauyos','member3.webp');
insert into miembros values(null,'Polet Ramos G.','','Consejo Comisión de la Juventud','member4.webp');
insert into miembros values(null,'Norma Vivanco Y.','','Consejo Comisión de la Juventud','member5.webp');
insert into miembros values(null,'Eiji Calagua P.','','Consejo Comisión de la Juventud','member6.webp');
insert into miembros values(null,'Cinthya Soto','','Consejo Comisión de la Juventud','member7.webp');

