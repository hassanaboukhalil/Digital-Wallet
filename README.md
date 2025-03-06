# Coolet

## 1. Use Case Diagrams

### Admin Use Case Diagram

![Admin Use Case Diagram](wallet-project-admin-use-case-diagram.drawio.png)

### User Use Case Diagram

![User Use Case Diagram](wallet-project-user-use-case-diagram.drawio.png)

## 2. Figma Design

- **Design Link:** [Figma Digital Wallet Design](https://www.figma.com/design/52JSKRSHJCpN2r3Etw7IP3/Digtal-Wallet?node-id=0-1&p=f&t=9b3VBRWUJp2hcjlg-0)

## 3. ER Diagram

![Use Case Diagram](er_diagram_wallet_project.png)

## 4. Document APIs

### Deposit API

- **URL:** `http://15.188.77.241/wallet-server/user/v1/deposit.php`
- **Method:** POST
- **Description:** Creates a deposit for a user's wallet.
- **Parameters:**
  - `user_id` (integer): The ID of the user making the deposit.
  - `wallet_id` (integer): The ID of the wallet to which the deposit is made.
  - `amount` (decimal): The deposit amount.

### Login API

- **URL:** `http://15.188.77.241/wallet-server/user/v1/login.php`
- **Method:** POST
- **Description:** Authenticates a user using email and password, returning user details upon success.
- **Parameters:**
  - `email` (string): The user's email address.
  - `pass` (string): The user's password.

### Signup API

- **URL:** `http://15.188.77.241/wallet-server/user/v1/signup.php`
- **Method:** POST
- **Description:** Registers a new user account.
- **Parameters:**
  - `first_name` (string): The user's first name.
  - `last_name` (string): The user's last name.
  - `email` (string): The user's email address.
  - `pass` (string): The user's password.

## 5. Hosting Details

- **API Address:** 15.188.77.241
