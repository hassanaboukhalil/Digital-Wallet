create table deposits (
    id int(11) AUTO_INCREMENT primary key,
    user_id int(11) not null,
    wallet_id int(11) not null,
    amount int(11) not null,
    created_at TIMESTAMP default CURRENT_TIMESTAMP,
    foreign key (wallet_id) references wallets(id),
    foreign key (user_id) references users(id)
)