## Lara SaaS - Multi-tenant SaaS Boilerplate
The boilerplate uses Laravel 8.

## Packages
- [Laravel](https://laravel.com)
- [Laravel Breeze](https://github.com/laravel/breeze)
- [Laravel Cashier](https://github.com/laravel/cashier)
- [Laravel Livewire](https://laravel-livewire.com)
- [Laravel Actions](https://laravelactions.com/)
- [Laravel Lockout](https://github.com/rappasoft/lockout)
- [Tenancy](https://tenancyforlaravel.com)

## Features
- <b>Cashier Billing</b> - Cashier already integrated. Tenants select their billing plan on registration and can later change it in their dashboard.
- <b>Browser Sessions</b> - Safely log out other browser sessions that are authenticated as the current user.

## Setting
These are the steps to get the app up and running. Once you're using the app, feel free to change any individual parts.
- `composer install`
- Rename `.env.example` to `.env` and run `php artisan key:generate`
- Create a MySQL database. If you want to use a non-root user, make sure that the user has permissions to create other users and access all databases.
- Run migrations: `php artisan migrate`
- Stripe test keys: [https://dashboard.stripe.com/dashboard](https://dashboard.stripe.com/dashboard) and add them to `.env` (`STRIPE_KEY` and `STRIPE_SECRET`)
- Create products in Stripe: [https://dashboard.stripe.com/products](https://dashboard.stripe.com/products) and copy the price ids to the `config/boilerplate.php` file — see how it looks now, you'll know what to paste where.

## App Flow
When you visit the central domain, you can either register or login as a tenant.

### Registration
The user enters his details:
- domain
- full name
- email
- password

### Login
A user enters his domain. Based on the domain, we find the correct tenant and redirect the user to the tenant's application's login screen.

## Project Structure

### Controllers
- `App\Http\Controllers\Central`
- `App\Http\Controllers\Tenant`

### Routes
Central route names are prefixed with `central.` and tenant routes with `tenant.`.

### Views
- `central`
    - `central.tenants`
        - `central.tenants.login`
        - `central.tenants.register`
    - `central.welcome`
- `components`
    - `compnents.central.*`
    - `compnents.tenant.*`
- `layouts`
    - `layouts.central`
        - `layouts.central.app`
        - `layouts.central.guest`
    - `layouts.tenant`
        - `layouts.tenant.app`
        - `layouts.tenant.guest`
- `livewire`
    - `livewire.central.*`
    - `livewire.tenant.*`
-  `tenant`
    - `tenant.auth.*`
    - `tenant.settings`
       - `tenant.settings.billing`
       - `tenant.settings.profile`
    - `tenant.user`
       - `tenant.user.dashboard`
    -  `tenant.dashboard`

### Models
- `App\Models\Central`
- `App\Models\Tenant`
