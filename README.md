# Project Name
> Abstract of the project or small introduction of what the project is about subscription
<hr>

# Table of Contents
* [Team Members](#team-members)

# <a name="team-members"></a>Team Members
* "Eziz Soyun" <eziz@gmail.com>


composer create-project laravel/laravel basic_subscription

composer require laravel/cashier
php artisan migrate

php artisan vendor:publish --tag="cashier-migrations"

composer require laravel/ui
php artisan ui bootstrap --auth

composer require stripe/stripe-php

npm install

npm cache clear --force

npm config set registry https://registry.npmjs.org

#subscription
composer require laravel/cashier


php artisan make:migration create_plans_table
php artisan make:model Plan
 php artisan make:controller PlanController