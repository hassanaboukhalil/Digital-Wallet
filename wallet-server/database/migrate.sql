drop database digital_wallet_db;

create database digital_wallet_db;

use digital_wallet_db;


SOURCE database/migrations/users.sql;
SOURCE database/migrations/admins.sql;
SOURCE database/migrations/wallets.sql;
SOURCE database/migrations/deposits.sql;
SOURCE database/migrations/withdraws.sql;
SOURCE database/migrations/transfers.sql;
SOURCE database/migrations/scheduled_payments.sql;
SOURCE database/migrations/recurring_payments.sql;
SOURCE database/migrations/kyc_verifications.sql;
SOURCE database/migrations/system_logs.sql;