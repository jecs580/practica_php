-- Creacion de la tabla alumno
create table alumno
(
    ci varchar(15) primary key,
    nombre varchar(30),
    paterno varchar(30),
    coddepto varchar(2),
    codmunicipio varchar(6),
    nota1 float,
    nota2 float,
    nota3 float
)

-- Insercion de 3 alumnos
insert into alumno values ('23','jor','cal','02','020101',50,49.5,10);
insert into alumno values ('43','juan','perez','01','010101',70,80,90);
insert into alumno values ('53','martha','mamani','02','020105',90,90,90);


-- Mostrar los alumnos con mensaje de aprobado o reprobado por cada nota
select ci,nombre,paterno,
case coddepto when '02' then 'La Paz'
              when '01' then 'Chuquisaca'
              else 'otro' end as depto,
case when nota1>50 then 'Aprobado' else 'repob' end as nota1,
case when nota2>50 then 'Aprobado' else 'repob' end as nota2,
case when nota2>50 then 'Aprobado' else 'repob' end as nota3
from alumno


-- TODO Mostrando la cantidad de alumno por departamento de manera horizontal
-- select coddepto count(*) nro
from alumno
group by coddepto
Salida
02 1
01 2

-- Mostrando la cantidad de alumno por departamento
select 
case coddepto when '02' then 'La Paz'
              when '01' then 'Chuquisaca'
              else 'otro' end as depto,
count(*) as Cantidad
from alumno
group by case coddepto when '02' then 'La Paz'
              when '01' then 'Chuquisaca'
              else 'otro' end
Salida
Chuquisaca  1
La Paz      2

-- Solucion Lic
select sum(case when coddepto='01' then 1 else 0 end) as CHUQUI,
            sum(case when coddepto='02' then 1 else 0 end)  as LP
from alumno

Salida
LP CHUQU
1   2

-- TODO Hacer lo mismo de arriba con los 330 municipios, buscar en la pagina de facebook el link para obtener los municipios- fecha de entrega 05/03/2020


-- Buscar por esquema las columnas
select *
from information_schema.columns where table_name='alumno'
