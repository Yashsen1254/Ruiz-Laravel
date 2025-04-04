# Online Watch Shopping - Laravel Project

## Introduction
This project is an Online Watch Shopping platform developed using Laravel. It enables customers to explore various watch collections, add items to their cart, checkout, and manage their orders seamlessly. The admin panel allows store owners to manage products, orders, and users efficiently.

## Features
- User authentication (Register/Login)
- Browse watches by brand and category
- Add products to the cart
- Secure checkout process with payment integration
- Order tracking and history
- Admin dashboard for product and order management
- Responsive design for all devices

## Technologies Used
- **Backend:** Laravel (PHP Framework)
- **Frontend:** Blade Templating, Bootstrap/CSS
- **Database:** MySQL
- **Authentication:** Laravel Breeze / Laravel Sanctum (For API authentication if needed)
- **Payment Gateway:** Stripe / Razorpay (Optional for transactions)

## Installation Guide

### Prerequisites
- PHP (>=8.0)
- Composer
- MySQL
- Laravel (Latest Version)

### Steps to Setup the Project
1. **Clone the Repository**
   ```sh
   git clone https://github.com/your-repository/online-watch-store.git
   cd online-watch-store
   ```

2. **Install Dependencies**
   ```sh
   composer install
   npm install  # If using frontend assets like Vue/React
   ```

3. **Set Up Environment**
   - Copy the `.env.example` file and rename it to `.env`
   - Update database credentials in `.env`
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

4. **Generate Application Key**
   ```sh
   php artisan key:generate
   ```

5. **Run Migrations & Seed Database**
   ```sh
   php artisan migrate --seed
   ```

6. **Run the Application**
   ```sh
   php artisan serve
   ```
   The project will be accessible at `http://127.0.0.1:8000`

## Admin Panel
- URL: `/admin`
- Default Credentials:
  - Email: `admin@example.com`
  - Password: `password`

## API Endpoints (If Applicable)
- `GET /api/watches` - Fetch all watches
- `POST /api/cart` - Add items to the cart
- `POST /api/checkout` - Process order checkout

## Contribution
Contributions are welcome! Feel free to fork this repository and submit pull requests.

## License
This project is licensed under the MIT License.

