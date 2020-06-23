create schema BPhackathon;

create table BPhackathon.user(
user_id int auto_increment,
user_voornaam varchar(50),
user_naam varchar(50),
user_email varchar(50),
user_age int(3),
user_password varchar(255),

constraint PK_user primary key(user_id,user_voornaam,user_naam)
);

create table BPhackathon.category(
category_id int primary key auto_increment,
naam varchar(20)
);


create table BPhackathon.service(
service_id int auto_increment,
service_naam varchar(20),
service_category int,
service_description text(200),
owner int,

constraint PK_service Primary key(service_id),
constraint FK_service_user Foreign key (owner) references user(user_id),
constraint FK_service_category Foreign Key (service_category) references category(category_id)
);

create table BPhackathon.company(
company_id int auto_increment,
company_name varchar(50),
category int,
owner int,
company_desc text(100),

constraint PK_constraint primary key (company_id),
constraint FK_cmp_cat Foreign key (category) references category(category_id),
constraint FK_cmp_own Foreign key(owner) references user(user_id)
);

create table BPhackathon.job(
job_id int auto_increment,
job_name varchar(50),
job_desc text(100),
job_type varchar(20),
category int,
owner int,

constraint PK_constraint primary key (job_id),
constraint FK_job_cat Foreign key (category) references category(category_id),
constraint FK_job_own Foreign key(owner) references user(user_id)
);

create table BPhackathon.service(
service_id int auto_increment,
service_naam varchar(50),
service_description text(100),
service_type varchar(20),
category int,
owner int,

constraint PK_constraint primary key (job_id),
constraint FK_job_cat Foreign key (category) references category(category_id),
constraint FK_job_own Foreign key(owner) references user(user_id)
);

create table BPhackathon.service_rating(
rating_id int auto_increment primary key,
star int(2),
rating_description text(100),
service int,

constraint fk_SE_RT foreign key (service) references service(service_id)
);

create table BPhackathon.company_rating(
rating_id int auto_increment primary key,
star int(2),
company_description text(100),
company int,

constraint fk_CO_RT foreign key (company) references company(company_id)
);
