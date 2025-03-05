create table wallets (
    id int(11) AUTO_INCREMENT primary key,
    user_id int(11) not null,
    wallet_name varchar(255) not null default 'main',
    balance int(11) not null default 0,
    api_key varchar(255),
    created_at TIMESTAMP default CURRENT_TIMESTAMP,
    foreign key (user_id) references users(id)
)