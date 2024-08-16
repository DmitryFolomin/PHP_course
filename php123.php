<?php

$data = [
    'question' => ['почему', 'как', 'зачем', 'столько'],
    'animals' => [
        'birds' => [
            [
                'name' => 'грачи',
            ],
            [
                'name' => 'воробьи',
            ],
        ],
        'others' => [
            [
                ['name' => 'кошки'],
                ['name' => 'рыбы'],
                ['name' => 'собаки'],
            ],
        ],
    ],
    'parts' => [
        'hands' => 'рук',
        'feathers' => 'перьев',
        'eyes' => 'глаз',
    ],
];


echo "$data['question']['почему']" . "$data['birds']['name' => 'грачи']" . не . "$data['others']['name' => 'кошки']" . и . "$data['question']['зачем']" . "им" . "$data['question']['столько']" . "$data['parts']['feathers']" . PHP_EOL;