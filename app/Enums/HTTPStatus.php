<?php

namespace App\Enums;

enum HTTPStatus: int {
    case OK = 200;
    case ACCESS_DENIED = 403;
    case NOT_FOUND = 404;

    public function label(): string {
        return static::getLabel($this);
    }

    public static function getLabel(self $value): string {
        return match ($value) {
            HTTPStatus::OK => 'OK',
            HTTPStatus::ACCESS_DENIED => 'Access Denied',
            HTTPStatus::NOT_FOUND => 'Page Not Found',
        };
    }
}

// echo HTTPStatus::ACCESS_DENIED->label(); // "Access Denied"
// echo HTTPStatus::getLabel(HTTPStatus::ACCESS_DENIED); // "Access Denied"
