create table wallets (
    id int(11) AUTO_INCREMENT primary key,
    user_id int(11) not null,
    wallet_name varchar(255) not null,
    balance varchar(255) not null,
    api_key varchar(255) not null,
    created_at TIMESTAMP default CURRENT_TIMESTAMP,
    foreign key (user_id) references users(id)
)