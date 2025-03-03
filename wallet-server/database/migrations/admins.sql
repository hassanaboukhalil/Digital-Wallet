create table admins (
    id int(11) AUTO_INCREMENT primary key,
    first_name varchar(255) not null,
    last_name varchar(255) not null,
    email varchar(255) unique not null,
    pass varchar(255) not null,
    created_at TIMESTAMP not null
)