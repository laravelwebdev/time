<?php

declare(strict_types=1);

namespace Laravelwebdev\Time;

use Laravel\Nova\Fields\Text;

class Time extends Text
{
    public function jsonSerialize(): array
    {
        return array_merge([
            'extraAttributes' => [
                'type' => 'time',
                'style' => 'width: auto!important',
            ],
        ], parent::jsonSerialize());
    }
}
