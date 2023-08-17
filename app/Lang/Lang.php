<?php

namespace App\Lang;

enum Lang: string {

    case RU = 'ru';

    case TJ = 'tj';

    public function label(): string
    {
        return match ($this) {

            self::TJ => 'Тоҷикӣ',

            self::RU => 'Русский',

        };
    }
}
