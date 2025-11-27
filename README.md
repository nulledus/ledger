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

# Wait installation, check:
docker-compose logs app

# Install dependencies
docker-compose exec app composer install

# Or update
docker-compose exec app composer update

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

## Publishing a New Version

### 1. Prepare the Release

Before publishing a new version:

```bash
# Run tests to ensure everything works
docker-compose exec app composer test

# Format code
docker-compose exec app composer format

# Commit all changes
git add .
git commit -m "Prepare release v1.0.0"
git push origin main
```

### 2. Create a Git Tag

Use semantic versioning (e.g., `v1.0.0`, `v1.2.3`):

```bash
# Create an annotated tag
git tag -a v1.0.0 -m "Release version 1.0.0"

# Push the tag to GitHub
git push origin v1.0.0
```

### 3. Create a GitHub Release (Optional but Recommended)

1. Go to your repository on GitHub
2. Click on "Releases" → "Create a new release"
3. Select the tag you just created
4. Add release notes describing changes
5. Publish the release

### 4. Publishing to Packagist (Optional)

To make your package publicly available via Composer:

1. Go to [Packagist.org](https://packagist.org/) and sign in
2. Click "Submit" and enter your GitHub repository URL
3. Packagist will automatically sync new versions from your GitHub tags
4. Set up the GitHub Service Hook for automatic updates

## Updating the Package in Your App

### For Tagged Versions

Once you've published a tagged version, update your Laravel app:

```bash
# Update to the latest version
composer update nulledus/ledger

# Or update to a specific version
composer require nulledus/ledger:^1.0

# Or update to an exact version
composer require nulledus/ledger:1.0.0
```

### For Development Branch (dev-main)

If you're still using `dev-main`:

```bash
# Update to latest from main branch
composer update nulledus/ledger

# Force update (clears cache)
composer update nulledus/ledger --no-cache
```

### Checking Current Version

```bash
# Show current installed version
composer show nulledus/ledger
```

### Version Constraints in composer.json

You can specify version constraints in your app's `composer.json`:

```json
{
    "require": {
        "nulledus/ledger": "^1.0"
    }
}
```

Common version constraints:
- `^1.0` - Compatible with version 1.0 and above (but below 2.0)
- `~1.2` - Compatible with version 1.2 and above (but below 1.3)
- `1.0.*` - Any version in the 1.0.x series
- `>=1.0` - Version 1.0 or higher
- `dev-main` - Latest commit from main branch (not recommended for production)

## License

MIT License. See [LICENSE.md](LICENSE.md).
