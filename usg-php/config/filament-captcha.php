<?php

use Filament\Support\Enums\Size;

return [

    // optional, default is 5
    'length' => 4,

    // optional, default is 'abcdefghijklmnpqrstuvwxyz123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'
    'charset' => 'abcdefghijklmnpqrstuvwxyz',

    'width' => 200,

    'height' => 60,

    'background_color' => [255, 255, 255],

    'refresh_button' => [
        'icon' => 'heroicon-o-arrow-path',
        'size' => Size::Medium,
    ],

];
