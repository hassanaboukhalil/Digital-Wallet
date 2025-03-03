create table deposits (
    id int(11) AUTO_INCREMENT primary key,
    user_id int(11) not null,
    amount varchar(11) not null,
    created_at timestamp not null,
    foreign key (user_id) references users(id)
)