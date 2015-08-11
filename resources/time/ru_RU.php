<?php
/**
 *
 * PHP version 5.5
 *
 * @author  Sergey V.Kuzin <sergey@kuzin.name>
 * @license MIT
 */

return array(
    'lang' => 'ru_ru',
    'common' => [
        '00-00' => [
            'minutes' => [0, 0],
            'phrase' => [
                '%current% часов',
                '%current% часов %current_times_of_day%',
            ]
        ],
        '01-04' => [
            'minutes' => [1, 4],
            'phrase' => [
                'начало %first_next%',
                '%current% часов',
                '%current% часов %current_times_of_day%',
            ]
        ],
        '05-07' => [
            'minutes' => [5, 7],
            'phrase' => [
                'пять минут %first_next%',
            ]
        ],
        '08-12' => [
            'minutes' => [8, 12],
            'phrase' => [
                'десять минут %first_next%',
            ]
        ],
        '13-17' => [
            'minutes' => [13, 17],
            'phrase' => [
                'пятнадцать минут %first_next%',
                'четверть %first_next%'
            ]
        ],
        '18-23' => [
            'minutes' => [18, 23],
            'phrase' => [
                'двадцать минут %first_next%',
            ]
        ],
        '24-26' => [
            'minutes' => [24, 26],
            'phrase' => [
                'двадцать пять минут %first_next%',
            ]
        ],
        '27-35' => [
            'minutes' => [27, 35],
            'phrase' => [
                'половина %first_next%',
                'пол %first_next% %next_times_of_day%',
            ]
        ],
        '36-42' => [
            'minutes' => [36, 42],
            'phrase' => [
                'без двадцати %quarter_next%',
            ]
        ],
        '43-47' => [
            'minutes' => [43, 47],
            'phrase' => [
                'без пятнадцати %quarter_next%',
                'без четверти %quarter_next%'
            ]
        ],
        '48-52' => [
            'minutes' => [48, 52],
            'phrase' => [
                'без десяти %quarter_next%',
            ]
        ],
        '53-57' => [
            'minutes' => [53, 57],
            'phrase' => [
                'без пяти %quarter_next%',
            ]
        ],
        '58-59' => [
            'minutes' => [58, 59],
            'phrase' => [
                'без малого %quarter_next%',
                '%quarter_next%',
                '%quarter_next% %next_times_of_day%',
                '%quarter_next% часов %next_times_of_day%'
            ]
        ]
    ],
    'phrases' =>
        [
            0 => [
                'common' => [
                    'current' => 'двенадцать',
                    'current_times_of_day' => 'ночи',
                    'next_times_of_day' => 'ночи',
                    'first_next' => 'первого',
                    'quarter_next' => 'час',
                ],
                '00-00' => [
                    'minutes' => [0, 0],
                    'phrase' => [
                        'Полночь',
                    ]
                ],
                '01-04' => [
                    'minutes' => [1, 4],
                    'phrase' => [
                        'Полночь',
                    ]
                ]
            ],
            1 => [
                'common' => [
                    'current' => 'час',
                    'current_times_of_day' => 'ночи',
                    'next_times_of_day' => 'ночи',
                    'first_next' => 'второго',
                    'quarter_next' => 'два',
                ]
            ],
            3 => [
                'common' => [
                    'current' => 'три',
                    'current_times_of_day' => 'ночи',
                    'next_times_of_day' => 'ночи',
                    'first_next' => 'четвёртого',
                    'quarter_next' => 'четыре',
                ]
            ],
            4 => [
                'common' => [
                    'current' => 'четыре',
                    'current_times_of_day' => 'утра',
                    'next_times_of_day' => 'утра',
                    'first_next' => 'пятого',
                    'quarter_next' => 'пять',
                ]
            ],
            5 => [
                'common' => [
                    'current' => 'пять',
                    'current_times_of_day' => 'утра',
                    'next_times_of_day' => 'утра',
                    'first_next' => 'шестого',
                    'quarter_next' => 'шесть',
                ]
            ],
            6 => [
                'common' => [
                    'current' => 'шесть',
                    'current_times_of_day' => 'утра',
                    'next_times_of_day' => 'утра',
                    'first_next' => 'седьмого',
                    'quarter_next' => 'семь',
                ]
            ],
            7 => [
                'common' => [
                    'current' => 'семь',
                    'current_times_of_day' => 'утра',
                    'next_times_of_day' => 'утра',
                    'first_next' => 'восьмого',
                    'quarter_next' => 'восемь',
                ]
            ],
            8 => [
                'common' => [
                    'current' => 'восемь',
                    'current_times_of_day' => 'утра',
                    'next_times_of_day' => 'утра',
                    'first_next' => 'девятого',
                    'quarter_next' => 'девять',
                ]
            ],
            9 => [
                'common' => [
                    'current' => 'девять',
                    'current_times_of_day' => 'утра',
                    'next_times_of_day' => 'утра',
                    'first_next' => 'десятого',
                    'quarter_next' => 'десять',
                ]
            ],
            10 => [
                'common' => [
                    'current' => 'десять',
                    'current_times_of_day' => 'утра',
                    'next_times_of_day' => 'утра',
                    'first_next' => 'одиннадцатого',
                    'quarter_next' => 'одиннадцать',
                ]
            ],
            11 => [
                'common' => [
                    'current' => 'одиннадцать',
                    'current_times_of_day' => 'утра',
                    'next_times_of_day' => 'дня',
                    'first_next' => 'двенадцатого',
                    'quarter_next' => 'двенадцать',
                ],
                '58-59' => [
                    'minutes' => [58, 59],
                    'phrase' => [
                        'Полдень'
                    ]
                ],
            ],
            12 => [
                'common' => [
                    'current' => 'двенадцать',
                    'current_times_of_day' => 'дня',
                    'next_times_of_day' => 'дня',
                    'first_next' => 'первого',
                    'quarter_next' => 'час',
                ],
                '00-00' => [
                    'minutes' => [0, 0],
                    'phrase' => [
                        'Полдень'
                    ]
                ],
                '01-04' => [
                    'minutes' => [0, 0],
                    'phrase' => [
                        'Полдень'
                    ]
                ]
            ],
            13 => [
                'common' => [
                    'current' => 'час',
                    'current_times_of_day' => 'дня',
                    'next_times_of_day' => 'дня',
                    'first_next' => 'второго',
                    'quarter_next' => 'два',
                ]
            ],
            14 => [
                'common' => [
                    'current' => 'два',
                    'current_times_of_day' => 'дня',
                    'next_times_of_day' => 'дня',
                    'first_next' => 'третьего',
                    'quarter_next' => 'три',
                ]
            ],
            15 => [
                'common' => [
                    'current' => 'три',
                    'current_times_of_day' => 'дня',
                    'next_times_of_day' => 'дня',
                    'first_next' => 'четвёртого',
                    'quarter_next' => 'четыре',
                ]
            ],
            16 => [
                'common' => [
                    'current' => 'четыре',
                    'current_times_of_day' => 'дня',
                    'next_times_of_day' => 'вечера',
                    'first_next' => 'пятого',
                    'quarter_next' => 'пять',
                ]
            ],
            17 => [
                'common' => [
                    'current' => 'пять',
                    'current_times_of_day' => 'вечера',
                    'next_times_of_day' => 'вечера',
                    'first_next' => 'шестого',
                    'quarter_next' => 'шесть',
                ]
            ],
            18 => [
                'common' => [
                    'current' => 'шесть',
                    'current_times_of_day' => 'вечера',
                    'next_times_of_day' => 'вечера',
                    'first_next' => 'седьмого',
                    'quarter_next' => 'семь',
                ]
            ],
            19 => [
                'common' => [
                    'current' => 'семь',
                    'current_times_of_day' => 'вечера',
                    'next_times_of_day' => 'вечера',
                    'first_next' => 'восьмого',
                    'quarter_next' => 'восемь',
                ]
            ],
            20 => [
                'common' => [
                    'current' => 'восемь',
                    'current_times_of_day' => 'вечера',
                    'next_times_of_day' => 'вечера',
                    'first_next' => 'девятого',
                    'quarter_next' => 'девять',
                ]
            ],
            21 => [
                'common' => [
                    'current' => 'девять',
                    'current_times_of_day' => 'вечера',
                    'next_times_of_day' => 'вечера',
                    'first_next' => 'десятого',
                    'quarter_next' => 'десять',
                ],
            ],
            22 => [
                'common' => [
                    'current' => 'десять',
                    'current_times_of_day' => 'вечера',
                    'next_times_of_day' => 'вечера',
                    'first_next' => 'одиннадцатого',
                    'quarter_next' => 'одиннадцать',
                ],
            ],
            23 => [
                'common' => [
                    'current' => 'одинадцать',
                    'current_times_of_day' => 'вечера',
                    'next_times_of_day' => 'ночи',
                    'first_next' => 'двенадцатого',
                    'quarter_next' => 'двенадцать',
                ],
                [
                    'minutes' => [58, 59],
                    'phrase' => [
                        'полночь'
                    ]
                ]
            ]
        ]
);
