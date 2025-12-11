# Content Management System (CMS)

A modern CMS built with Laravel, Tailwind CSS, and Alpine.js for managing website content and settings.

## Features

- **Authentication System**: Secure login/logout functionality
- **Portfolio Management**: Full CRUD operations for portfolios
- **Settings Management**: Manage website settings including:
  - Contact information (email, phone, mobile, address)
  - Social media links
  - General site settings
- **Modern UI**: Built with Tailwind CSS and Alpine.js for a responsive, interactive interface
- **Dashboard**: Overview of content statistics

## Accessing the CMS

1. Navigate to `/admin/login`
2. Login with your credentials
3. After login, you'll be redirected to the dashboard at `/admin/dashboard`

## Routes

### Authentication
- `GET /admin/login` - Login page
- `POST /admin/login` - Process login
- `POST /admin/logout` - Logout

### Dashboard
- `GET /admin/dashboard` - CMS Dashboard (requires authentication)

### Portfolios
- `GET /admin/portfolios` - List all portfolios
- `GET /admin/portfolios/create` - Create new portfolio form
- `POST /admin/portfolios` - Store new portfolio
- `GET /admin/portfolios/{id}/edit` - Edit portfolio form
- `PUT /admin/portfolios/{id}` - Update portfolio
- `DELETE /admin/portfolios/{id}` - Delete portfolio

### Settings
- `GET /admin/settings` - View and edit settings
- `PUT /admin/settings` - Update settings

## Default Settings

The CMS comes with pre-configured settings groups:

- **Contact**: email, phone, mobile, address
- **Social Media**: Facebook, Twitter, LinkedIn, Instagram
- **General**: site name, tagline, description

You can add new settings directly from the settings page using the "Quick Add Setting" form.

## Creating a User

To create an admin user, use Laravel's tinker:

```bash
php artisan tinker
```

Then run:
```php
$user = new App\Models\User();
$user->name = 'Admin';
$user->email = 'admin@example.com';
$user->password = Hash::make('your-password');
$user->save();
```

## Technologies Used

- **Laravel**: PHP framework
- **Tailwind CSS**: Utility-first CSS framework
- **Alpine.js**: Lightweight JavaScript framework for interactivity
- **SQLite**: Database

## File Structure

```
app/
├── Http/
│   ├── Controllers/
│   │   ├── Auth/
│   │   │   └── LoginController.php
│   │   ├── Admin/
│   │   │   ├── DashboardController.php
│   │   │   └── SettingsController.php
│   │   └── PortfolioController.php
│   └── Requests/
│       ├── StorePortfolioRequest.php
│       └── UpdatePortfolioRequest.php
├── Models/
│   ├── Portfolio.php
│   ├── Setting.php
│   └── User.php
resources/
└── views/
    └── admin/
        ├── auth/
        │   └── login.blade.php
        ├── layouts/
        │   └── app.blade.php
        ├── portfolios/
        │   ├── index.blade.php
        │   ├── create.blade.php
        │   └── edit.blade.php
        ├── settings/
        │   └── index.blade.php
        └── dashboard.blade.php
database/
└── migrations/
    └── 2025_12_11_120729_create_settings_table.php
```

## Notes

- All admin routes require authentication
- Settings are stored in the `settings` table with key-value pairs
- Portfolios use slugs (slung) automatically generated from titles
- The CMS uses Alpine.js for interactive features like modals and dynamic forms

