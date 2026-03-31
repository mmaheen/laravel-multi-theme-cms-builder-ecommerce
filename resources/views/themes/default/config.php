<?php
return [
    'name' => 'default',
    'components' => [
        'navbar' => [
            'title' => [
                'type' => 'text',
                'name' => 'title',
                'label' => 'Please enter title',
                'value' => 'Config Navbar Title',
                'placeholder' => 'Enter your store name'
            ]

        ],

        'hero' => [
            'title' => [
                'type' => 'text',
                'name' => 'title',
                'label' => 'Please enter your hero text',
                'value' => 'Test Hero',
                'placeholder' => 'Enter your product name'
            ],
            'description' => [
                'type' => 'textarea',
                'name' => 'description',
                'label' => 'Please enter your hero description',
                'value' => 'Welcome to our store',
                'placeholder' => 'Enter your hero description'
            ],
            'price' => [
                'type' => 'number',
                'name' => 'price',
                'label' => 'Please enter your product price',
                'value' => 1006,
                'placeholder' => 'Enter your product price'
            ],
            'image' => [
                'type' => 'file',
                'name' => 'image',
                'label' => 'Please upload your product image',
                // 'value' => '{{ asset("assets/images/placeholder.png") }}',
            ]
        ],

    ],
];