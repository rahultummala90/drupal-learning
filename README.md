# Drupal 10 Learning Environment

A local Drupal 10 development environment running on Docker with Nginx, PHP-FPM, and MySQL.

## Stack

| Service | Technology |
|---------|-----------|
| Web server | Nginx (alpine) |
| PHP | PHP 8.2 FPM |
| CMS | Drupal 10 |
| Database | MySQL 8.0 |

## Prerequisites

- [Docker Desktop](https://www.docker.com/products/docker-desktop/)
- [Git](https://git-scm.com/)

## Getting Started

### 1. Clone the repo

```bash
git clone https://github.com/rahultummala90/drupal-learning.git
cd drupal-learning
```

### 2. Add settings.php

The `settings.php` file is excluded from git (contains credentials). Create it:

```bash
cp drupal/web/sites/default/default.settings.php drupal/web/sites/default/settings.php
```

Then add the database config at the bottom of `settings.php`:

```php
$databases['default']['default'] = [
  'driver'   => 'mysql',
  'database' => 'drupal',
  'username' => 'drupal',
  'password' => 'drupal_pass',
  'host'     => 'db',
  'port'     => '3306',
  'prefix'   => '',
];
```

### 3. Start the containers

```bash
docker compose up -d
```

### 4. Open Drupal

Visit **http://localhost:8081**

## Project Structure

```
drupal-learning/
├── docker-compose.yml       # Docker services definition
├── nginx/
│   └── default.conf         # Nginx config (PHP-FPM proxy)
└── drupal/
    ├── composer.json
    ├── vendor/              # PHP dependencies (not committed)
    └── web/
        ├── core/            # Drupal core
        ├── modules/
        │   └── contrib/     # Installed contrib modules
        ├── themes/
        │   └── contrib/     # Installed contrib themes
        └── sites/
            └── default/
                └── settings.php  # DB config (not committed)
```

## Installed Modules

- **Admin Toolbar** — improved admin navigation
- **CTools** — developer APIs
- **Devel** — development utilities
- **External Links** — extlink
- **FullCalendar View** — calendar display
- **Linkit** — enhanced link widget
- **Pathauto** — automatic URL aliases
- **Scheduler** — schedule content publishing
- **Simple Gmap** — Google Maps field
- **Token** — token system for other modules

## Installed Themes

- **Bootstrap Barrio** — Bootstrap 5 base theme
- **Solo** — contrib theme

## Useful Commands

```bash
# Start
docker compose up -d

# Stop
docker compose down

# View logs
docker compose logs -f

# Backup database
docker exec drupal-learning-db-1 mysqldump -udrupal -pdrupal_pass drupal > backup.sql

# Restore database
docker exec -i drupal-learning-db-1 mysql -udrupal -pdrupal_pass drupal < backup.sql

# Run Drush commands
docker exec drupal-learning-drupal-1 vendor/bin/drush <command>
```
