# P-Link

## About P-Link
P-Link is an innovative URL shortening service designed to enhance efficiency in digital communication. Whether you need to share important updates, internal resources, or project links, our tool provides a seamless way to create short, shareable URLs.

### Key Features
- 🔗 **Custom Short Links** – Create branded and meaningful URLs.
- 📊 **Real-time Analytics** – Track clicks and engagement metrics.
- 🔒 **Secure & Private** – Protect your links with optional access keys.
- 🚀 **Fast & Reliable** – Instantly generate shareable links.
- ⚙️ **Optimized Performance** – Built with Laravel for seamless speed and efficiency.

## Technology Stack

### Backend
- PHP 8.2.12
- Laravel 12.2.0
- MySQL
- Heroku
- PhpMyAdmin

### Frontend
- Tailwind CSS
- Vite
- Alpine.js
- Animate.css
- DaisyUI

### Dependencies
- Blade UI Kit
- Livewire
- Spatie Laravel Permission
- Spatie Laravel Settings
- Filament Widgets
- Laravel Fortify
- Laravel Tinker
- Power Components Livewire PowerGrid
- Realodix Timezone
- Endroid QR Code

### Development Tools
- Laravel Debugbar
- Paratest
- FakerPHP
- Larastan
- Laravel Dusk
- Mockery
- PHPStan Deprecation Rules
- PHPUnit
- Realodix Relax
- Spatie Laravel Ignition

## Installation

### Prerequisites
Ensure you have the following installed on your machine:
- PHP 8.2+
- Composer
- Node.js & npm
- MySQL Database

### Steps to Install
1. **Clone the repository**
   ```sh
   git clone https://github.com/mamskie/p-link.git
   cd p-link
   ```
2. **Install dependencies**
   ```sh
   composer install
   npm install && npm run build
   ```
3. **Set up environment variables**
   ```sh
   cp .env.example .env
   php artisan key:generate
   ```
4. **Configure database** (update `.env` file with database credentials)
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database_name
   DB_USERNAME=your_database_user
   DB_PASSWORD=your_database_password
   ```
5. **Run database migrations**
   ```sh
   php artisan migrate --seed
   ```
6. **Start the application**
   ```sh
   php artisan serve
   ```

## Usage
Once the application is running, you can access it at `http://127.0.0.1:8000` and start shortening URLs.

## Contribution
Contributions are welcome! Feel free to submit a pull request or open an issue for discussion.

## License
This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
