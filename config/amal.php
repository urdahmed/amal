<?php

return [
    'gender' => [
        'male' => 1,
        'female' => 2
      ],
      'status' => [
        'banned' => 0,
        'active' => 1
      ],
    'limits' => [
        'home' => [
            'courses' => 8,
            'teachers' => 6,
            'library' => 8,
        ],
        'courses' => 8,
        'teachers' => 6,
        'library' => 8,
    ],
    'levels' => [
        0 => [
            'phase' => 'nursery',
            'levels' => [],
        ],
        1 => [
            'phase' => 'preparatory',
            'levels' => [],
        ],
        2 => [
            'phase' => 'primary',
            'levels' => [
                1 => '1st',
                2 => '2nd',
                3 => '3rd',
                4 => '4th',
                5 => '5th',
            ],
        ],
        3 => [
            'phase' => 'intermediate',
            'levels' => [
                1 => '1st',
                2 => '2nd',
                3 => '3rd',
                4 => '4th',
            ],
        ],
        4 => [
            'phase' => 'secondary',
            'levels' => [
                1 => '1st',
                2 => '2nd',
                3 => '3rd',
            ],
        ],
        5 => [
            'phase' => 'university',
            'levels' => [],
        ],
    ],
];
