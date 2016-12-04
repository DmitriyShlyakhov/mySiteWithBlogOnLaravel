<?php

return [
    'title' => 'Blog',
    'single' => 'record',
    'model' => 'App\Blog',
    'columns' => [
        'id',
        'active',
        'title'
    ],
    'edit_fields' => [
        'active' => [
            'type' => 'bool',
        ],
        'title' => [
            'type' => 'text',
        ],
        'slug' => [
            'type' => 'text',
        ],
        'body' => [
            'type' => 'wysiwyg',
        ],
        'image' => [
            'type' => 'image',
            'location' => public_path() . '/uploads/blog/original/',
            'sizes' => [
                [500, 500, 'auto', public_path() . '/uploads/blog/medium/', 100],
                [1000, 1000, 'auto', public_path() . '/uploads/blog/big/', 100],
            ],
        ],
    ],
    'form_width' => 800,
];