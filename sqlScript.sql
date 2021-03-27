# para usar este script primero siga los siguientes pasos:
# cree la base de datos certificados; el proyecto ya esta configurado para esta BD
create database certificados;
#use la base de datos;
use database certificados;
# ahora asegurese de que tiene elproyecto abierto en el editor y el servidor de artisan corriendo
#ejecute las migraciones en la consola dentro del proyecto asi;
# php artisan migrate
#despue sde esto se debiero haber creado en su base de datos las tablas: users, roles role_has-permisions
#permissions, paswords_rests model_has-roles, model_has permissions; migrationss.failed-jobs
#ahora vamos a configurar la tabla users para agrefar algunos campos(columnas)
alter table users add last_name varchar(45) after name;
alter table users add telephone varchar(45) after last_name;
alter table users add cedula varchar(45) after telephone;
alter table users add adress varchar(45) after cedula;
# cada cambio a la base de datos porfa ponerlo aqui

#tuve problemas con la migracion de libros asi que hice la tabla por mysql script
CREATE TABLE IF NOT EXISTS `libros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_inicio` date default null,
  `'fecha_fin` date default NULL,
  `created_at` timestamp null, 
  `updated_at` timestamp null,
  
  `createdby_id` bigint unsigned default null,
  `modifiedby_id` bigint unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
   FOREIGN KEY (`createdby_id`) REFERENCES `users`(`id`) on delete set null,
   FOREIGN KEY (`modifiedby_id`) REFERENCES `users`(`id`) on delete set null
);
#
# la migracion de la tabla registros no fue correcta las claves foraneas de libro_id
#createdby_id y modifiedby_id no fueron creadas.. corrijo ese error aqui:
alter table registros drop libro_id;
ALTER TABLE `registros` add `libro_id` int(11);
ALTER TABLE `certificados`.`registros` 
ADD INDEX `hola_idx` (`libro_id` ASC);
ALTER TABLE `certificados`.`registros` 
ADD CONSTRAINT `hola`
  FOREIGN KEY (`libro_id`)
  REFERENCES `certificados`.`libros` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;
#
#se me ocurrio crear un detalle de libro...
 ALTER TABLE `libros` add `detalles` text default null;

#

