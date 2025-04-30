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
$label = RolesEnum::ADMIN->label();
$casts = RolesEnum::casts();

// Invalid data throws error
$role = RolesEnum::from('admin');

var_dump($role); // enum(RolesEnum::ADMIN)
echo $role->name; // "ADMIN";
echo $role->value; // "admin"

// Invalid data return null
$role = RolesEnum::tryFrom('not-existing');

var_dump($role); // null
```

## Casts

```php
protected $casts = [
    'user_role' => \App\Enums\RolesEnum::class
];
```
