CREATE DATABASE LOGO;
USE LOGO;

CREATE TABLE Usuario (
idUsuario varchar(50) not null,
Nombre varchar(30) not null,
Apellido varchar(40) not null, 
email varchar(80) not null,
contrasena varchar(30) not null,
Dni  int(8) not null,
nro_phone int(9) not null,
Direccion varchar(40) not null,
constraint  pk_Usuario primary key (idUsuario)
);
CREATE TABLE Tienda (
idTienda varchar(30) not null,
NombreTienda varchar(30) not null,
Ruc int(11) not null,
Ubicacion varchar(40) not null,
constraint  pk_Tienda primary key (idTienda) 
);
CREATE TABLE Pedido (
idPedido varchar(30),
idUsuario varchar(50) not null,
idTienda varchar(30) not null,
monto_Abonar float(4,4) not null,
Dni  int(8) not null,
nro_phone int(9) not null ,
Direccion varchar(40) not null,
constraint  pk_idPedido primary key (idPedido),
CONSTRAINT fk_Usuario_Pedido FOREIGN KEY (idUsuario) REFERENCES Usuario (idUsuario)
);

CREATE TABLE EmpresaReparto (
idEmp_Reparto varchar(30) not null,
Tarifa  float(3,2) not null,
nom_Empresa varchar(40) not null ,
nro_phone_Empresa int(9) not null,
Direccion_Empresa varchar(40) not null,
idrepartidor int,
constraint  idEmp_Reparto primary key (idEmp_Reparto), 
constraint fk_EmpR_R foreign key(idrepartidor) references repartidor(idrepartidor)
);
CREATE TABLE Productos(
idProducto int AUTO_INCREMENT not null,
NombreProducto varchar(30) not null,
peso float(3,3)not null,
Precio float(3,2)not null,
Tipo_Producto varchar(40) not null ,
Descripcion varchar(40) not null,
Categoria varchar(40) not null,
idTienda varchar(30) not null,
constraint  pk_productos primary key (idProducto),
CONSTRAINT fk_Tienda_Productos FOREIGN KEY (idTienda) REFERENCES Tienda (idTienda)
);


CREATE TABLE DetallesPedidos (
  idDetalles int AUTO_INCREMENT not null ,
  fechaPedido datetime,
  CantidadProductos int not null,
  CostoTotal float(4,2) not null,
  pesototal float(4,3) not null,
  idPedido varchar(30) not null,
  descuento float (4,2),
  Nombre_Usuario varchar(30) not null,
  idproducto int,
  idEmp_Reparto varchar(30),
  constraint  pk_DetallesPedidos primary key (idDetalles),
  CONSTRAINT fk_DP_Pedido FOREIGN KEY (idPedido) REFERENCES Pedido(idPedido),
  constraint fk_DP_Productos foreign key (idproducto) references productos(idproducto),
  constraint fk_DP_EmpR foreign key (Idemp_reparto) references empresareparto(Idemp_reparto)
  );
  create table Repartidor(
  idrepartidor int auto_increment not null,
  nombre varchar(50),
  apellido varchar(50),
  tipoMovilidad varchar(50),
  primary key (idrepartidor)
  );
insert into Tienda  values('T001','DistribuidoraMIyGM', 20604192995,'JR. HERMILIO VALDIZAN NRO. 427');
insert into Tienda  values('T002','DonJose', 2264584598,'JR.  DOS DE MAYO NRO. 4554');
insert into Tienda  values('T003','Elpikasalvaje', 357159654,'JR.  VALDIZAN NRO. 5627');
insert into Tienda  values('T004','4n1m4C0r', 213546879,'JR.Leonci prado NRO.5427');
insert into Tienda  values('T005','SAPT', 125486879,'JR. prado NRO.5427');
 
select * from Tienda
