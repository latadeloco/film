drop table if exists fichas cascade;

create table fichas (
    id          bigserial       constraint pk_fichas primary key,
    titulo      varchar(255)    not null,
    duracion    numeric(3),
    anyo        numeric(4)
);

insert into fichas (titulo, duracion, anyo)
    values ('La guerra de las galaxias', 145, 1997),
           ('El imperio contraataca', 130, 1980),
           ('El retorno del Jedi', 154, 1983);
