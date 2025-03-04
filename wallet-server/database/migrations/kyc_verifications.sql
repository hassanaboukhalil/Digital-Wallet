create table kyc_verifications (
    id int(11) AUTO_INCREMENT primary key,
    admin_id int(11) not null,
    user_id int(11) not null,
    document_type varchar(255) not null,
    document_file varchar(255) not null,
    is_verified boolean default false,
    created_at timestamp not null,
    foreign key (admin_id) references admins(id),
    foreign key (user_id) references users(id)
)