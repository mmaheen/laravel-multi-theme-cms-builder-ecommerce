<?php
return [
    'name' => 'default',
    'components' => [
        'navbar' => [
            'title' => [
                'type' => 'text',
                'name' => 'header_title',
                'label' => 'Please enter title',
                'value' => 'Store',
                'placeholder' => 'Enter your store name'
            ]

        ],

        'hero' => [
            'title' => [
                'type' => 'text',
                'name' => 'hero_title',
                'label' => 'Please enter your hero text',
                'value' => 'Test Hero',
                'placeholder' => 'Enter your product name'
            ],
            'subtitle' => [
                'type' => 'textarea',
                'name' => 'hero_subtitle',
                'label' => 'Please enter your hero subtitle',
                'value' => 'Welcome to our store',
                'placeholder' => 'Enter your hero subtitle'
            ]
        ],

    ],
];