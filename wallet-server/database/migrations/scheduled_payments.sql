create table scheduled_payments (
    id int(11) AUTO_INCREMENT primary key,
    user_id int(11) not null,
    recipient_id int(11) not null,
    amount varchar(255) not null,
    scheduled_on timestamp not null,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP not null, -- i had an error here which is invalid defalult value for created_at while i does not put an initial value so i put DEFAULT CURRENT_TIMESTAMP 
    foreign key (user_id) references users(id)
)