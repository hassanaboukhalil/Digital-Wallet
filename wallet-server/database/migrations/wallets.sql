create table wallets (
    id int(11) AUTO_INCREMENT primary key,
    user_id int(11) not null,
    wallet_name varchar(255) not null,
    balance varchar(255) not null,
    api_key int(11) not null,
    created_at timestamp not null,
    foreign key (user_id) references users(id)
)