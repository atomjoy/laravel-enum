# laravel-enum
Laravel enum examples.

## Roles

```php
<?php

namespace App\Enums\Spatie;

enum RolesEnum: string
{
    case ADMIN = 'admin';
    case WRITER = 'writer';
    case SUPERADMIN = 'super_admin';

    public function label(): string
    {
        return match ($this) {
            static::ADMIN => 'Admins',
            static::WRITER => 'Writers',
            static::SUPERADMIN => 'Super Admins',
            default => throw new \Exception('Unknown enum value requested for the label.'),
        };
    }
}
```

## Use

```php
<?php

$role = RolesEnum::ADMIN->value;
$casts = RolesEnum::casts();
```

## Casts

```php
protected $casts = [
    'user_role' => \App\Enums\RolesEnum::class
];
```
