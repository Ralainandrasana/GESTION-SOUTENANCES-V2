create database BDD_PROJET;

use BDD_PROJET;

create table Etudiant(MATRICULE varchar(10) PRIMARY KEY not null,NOM varchar(100) not null,PRENOM varchar(100),NIVEAU varchar(2),PARCOURS varchar(2),ADR_MAIL varchar(100));

create table Professeur(IDPROF varchar(5) PRIMARY KEY,NOM varchar(100),PRENOM varchar(100),CIVILITE varchar(5),GRADE varchar(100));

create table Organisme(IDORG varchar(5) PRIMARY KEY,DESIGN varchar(50),LIEU varchar(100));

create table Soutenir(MATRICULE varchar(10),IDORG varchar(5),ANNEE_UNIV varchar(10) PRIMARY KEY,NOTE int,PRESIDENT varchar(5),EXAMINATEUR varchar(5),RAPPORTEUR_INT varchar(5),RAPPORTEUR_EXT varchar(5));

insert into Etudiant values("2408","RALAINANDRASANA","Mijoro Marson","L2","GB","marsonmijoro@gmail.com");

insert into Professeur values("P1","RATIARISON","Venot","Mr","Maitre de Conferance");

insert into Organisme values("O1","ARATO","Tanambao");

insert into Soutenir values("2408","O1","2022-2023",18,"P1","P1","P1","P1");

insert into Etudiant values("2403","RAKOTO","Bema","L2","GB","rakotobema@gmail.com");

insert into Professeur values("P2","RALAIVAO"," JeanChristian","Mr","Assistant d'enseignement superieur et de recherche");

insert into Organisme values("O2","KASIA","Andrainjato");

insert into Soutenir values("2403","O2","2021-2022",15,"P2","P1","P1","P2");