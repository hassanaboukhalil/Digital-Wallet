create table system_logs (
    id int(11) AUTO_INCREMENT primary key,
    admin_id int(11),
    user_id int(11),
    action_description varchar(255) not null,
    created_at timestamp not null,
    foreign key (admin_id) references admins(id),
    foreign key (user_id) references users(id)
)