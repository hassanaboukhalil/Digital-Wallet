create table withdraws (
    id int(11) AUTO_INCREMENT primary key,
    user_id int(11) not null,
    amount varchar(255) not null,
    created_at TIMESTAMP default CURRENT_TIMESTAMP,
    foreign key (user_id) references users(id)
)