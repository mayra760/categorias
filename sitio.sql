show databases;
create schema pruebita1;
use pruebita1;

show tables;
create table tb_usuarios(
documento int not null,
nombre varchar(50) not null,
apellido varchar(50) not null,
correo varchar(50) not null,
contraseña varchar(50) not null,
fecha date not null,
primary key(documento)
);

create table tb_productos(
id_producto int not null,
nombre_producto varchar(150) not null,
precio float not null,
cantidad int not null,
detalles varchar(150) not null,
primary key(id_producto)
);

create table tb_categoria(
id_categoria int not null,
categoria varchar(50) not null,
primary key(id_categoria)
);


create table tb_carrito(
id_ca int not null,
nombre_producto varchar (40) not null,
cantidad_pro int not null,
precio_pro float not null,
fecha_agre timestamp default current_timestamp,
primary key (id_ca)
);

alter table tb_favoritos modify column id_favo int not null auto_increment;

create table tb_favoritos(
id_favo int not null,
nombre_produc varchar(50) not null,
cantidad_fav int not null,
fecga_agreg timestamp default current_timestamp,
primary key(id_favo)
);

delete from tb_productos
where id_producto= 6;

select * from tb_carrito;	
select * from tb_favoritos;
select * from tb_categoria;
SELECT * FROM tb_productos;
select * from tb_usuarios;


alter table tb_carrito
add column id_producto varchar(255) not null;    

INSERT INTO `pruebita1`.`tb_productos` (`id_producto`, `nombre_producto`, `precio`, `cantidad`, `detalles`, `ruta_img`)
VALUES ('5', 'zapatos', '80000', '1', 'Calzado para damas, caballeros y niñ@s', '6', 'img\\zapatoss.png');

INSERT INTO `pruebita1`.`damas_caballeros` (`id_dc`, `nombre`, `precio`, `cantidad`, `detalles`, `producto`)
VALUES ('1', 'blusa', '75000', '1', 'Vestido De Oficina Y Trabajo Con Elegante, Sin Mangas','img\\mujer7.png');

delete from tb_categoria where id_categoria=0;

/*agregar una columna*/
alter table damas_caballeros
add column ruta_img varchar(2000) not null; 

/*este es para eliminar una columna*/
alter table tb_categoria
drop column id_producto;

/*es para agregar la llave primaria de otra como llave foranea*/
/*alter table tb_categoria
add id_producto int,
add constraint fk_tb_categoria_producto
foreign key (id_producto)
references tb_productos(id_producto);
*/
