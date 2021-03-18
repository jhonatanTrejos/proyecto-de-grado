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


