# BitMartForest Clone

This project is a Laravel-based clone of the BitMartForest website with a crypto/finance inspired UI theme using Bootstrap and custom styles.

## Features

- User Authentication (Register, Login, Logout)
- Crypto-themed Dashboard (sample crypto prices)
- Wallet (deposit/withdraw)
- Transaction History
- Referral/Affiliate page
- Contact/Support page
- Responsive UI (Bootstrap 5)

## Installation

1. Clone the repository:
    ```
    git clone https://github.com/mrjobmm-hue/bitmartforest-clone.git
    cd bitmartforest-clone
    ```
2. Install dependencies:
    ```
    composer install
    npm install && npm run dev
    ```
3. Copy `.env.example` to `.env`, and update your environment settings.
4. Generate application key:
    ```
    php artisan key:generate
    ```
5. Run migrations:
    ```
    php artisan migrate
    ```
6. Serve the application:
    ```
    php artisan serve
    ```

## Screenshots

(Add screenshots here when UI is ready)

## License

MIT