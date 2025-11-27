# Nulledus Ledger

Laravel package for ledger management.

## Requirements

- PHP ^8.1
- Laravel ^10.0||^11.0||^12.0

## Installation

Since this package is not yet published on Packagist, you need to add the GitHub repository to your Laravel project's `composer.json`:

```json
{
    "repositories": [
        {
            "name": "ledger",
            "type": "vcs",
            "url": "https://github.com/nulledus/ledger"
        }
    ]
}
```

If the package is private run:

```bash
composer config --global --auth github-oauth.github.com YOUR_GITHUB_TOKEN
```

Then install the package:

```bash
composer require nulledus/ledger:dev-main
```

Publish config (optional):
```bash
php artisan vendor:publish --tag="nulledus-ledger-config"
```

Publish migrations (optional):
```bash
php artisan vendor:publish --tag="nulledus-ledger-migrations"
php artisan migrate
```

## Usage

```php
use Nulledus\NulledusLedger\Facades\NulledusLedger;

// Greet
NulledusLedger::greet('John');
// Returns: "Hello, John! Welcome to Nulledus Ledger."

// Add numbers
NulledusLedger::add(10, 5);
// Returns: 15
```

Or use dependency injection:
```php
use Nulledus\NulledusLedger\NulledusLedger;

public function index(NulledusLedger $ledger)
{
    return $ledger->greet('User');
}
```

## Development

### Docker Setup

```bash
# Start containers
docker-compose up -d --build

# Install dependencies
docker-compose exec app composer install

# Run tests
docker-compose exec app composer test

# Code formatting
docker-compose exec app composer format

# Shell access
docker-compose exec app bash

# Stop containers
docker-compose down
```

### Local Setup

```bash
composer install
composer test
composer format
```

## License

MIT License. See [LICENSE.md](LICENSE.md).
