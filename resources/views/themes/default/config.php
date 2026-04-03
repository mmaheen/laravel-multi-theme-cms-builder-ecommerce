<?php
return [
    'name' => 'default',
    'components' => [
        'navbar' => [
            'title' => [
                'type' => 'text',
                'name' => 'title',
                'label' => 'Navbar Title',
                'value' => 'Aurora Tech Store',
                'placeholder' => 'Enter your store name'
            ],
            'menus' => [
                'type' => 'checkbox',
                'name' => 'menus',
                'label' => 'Navigation Menu',
                'options' => [
                    'home' => 'Home',
                    'hero' => 'Hero',
                    'features' => 'Features',
                    'overview' => 'Overview',
                    'specs' => 'Specifications',
                    'contact' => 'Contact',
                ],
                'value' => ['home', 'hero', 'features'] // default checked
            ]
        ],

        'hero' => [
            'title' => [
                'type' => 'text',
                'name' => 'title',
                'label' => 'Hero Headline',
                'value' => 'Innovation That Inspires',
                'placeholder' => 'Enter your product headline'
            ],
            'description' => [
                'type' => 'textarea',
                'name' => 'description',
                'label' => 'Hero Tagline',
                'value' => 'Crafted for creators, optimized for performance.',
                'placeholder' => 'Write a short product tagline'
            ],
            'price' => [
                'type' => 'number',
                'name' => 'price',
                'label' => 'Product Price (USD)',
                'value' => 100,
                'placeholder' => 'Enter price in USD'
            ],
            'currency' => [
                'type' => 'select',
                'name' => 'currency',
                'label' => 'Currency',
                'options' => ['BDT', 'USD', 'EUR', 'GBP'],
                'value' => 'BDT',
                'placeholder' => 'Select currency'
            ],
            'image' => [
                'type' => 'file',
                'name' => 'image',
                'label' => 'Hero Product Image',
                'placeholder' => 'Upload product showcase image'
            ]
        ],

        'features' => [
            'title' => [
                'type' => 'text',
                'name' => 'title',
                'label' => 'Features Section Title',
                'value' => 'Next‑Gen Features',
                'placeholder' => 'Enter section title'
            ],
            'description' => [
                'type' => 'textarea',
                'name' => 'description',
                'label' => 'Features Section Intro',
                'value' => 'Experience cutting‑edge technology designed to elevate your workflow.',
                'placeholder' => 'Write a short section intro'
            ],
            'attributes' => [
                // 'label' => 'Add New Feature',
                'title' => [
                    'type' => 'text',
                    'name' => 'title',
                    'label' => 'Feature Name',
                    'value' => 'Ultra HD Camera',
                    'placeholder' => 'Enter feature name'
                ],
                'description' => [
                    'type' => 'textarea',
                    'name' => 'description',
                    'label' => 'Feature One‑Line Description',
                    'value' => 'Capture every detail with 8K clarity.',
                    'placeholder' => 'Describe feature in one line'
                ],
                'icon' => [
                    'type' => 'select',
                    'name' => 'logo',
                    'label' => 'Feature Icon',
                    'options' => [
                        'fa fa-camera',
                        'fa fa-battery-full',
                        'fa fa-laptop'
                    ],
                    'placeholder' => 'Choose a feature icon'
                ]
            ]
        ],

        'overview' => [
            'title' => [
                'type' => 'text',
                'name' => 'title',
                'label' => 'Overview Section Title',
                'value' => 'Comprehensive Product Overview',
                'placeholder' => 'Enter overview section title'
            ],
            'description' => [
                'type' => 'textarea',
                'name' => 'description',
                'label' => 'Overview Section Intro',
                'value' => 'Dive into the design philosophy and advanced engineering behind our product.',
                'placeholder' => 'Write a detailed overview'
            ],
            'image' => [
                'type' => 'file',
                'name' => 'image',
                'label' => 'Overview Image',
                'placeholder' => 'Upload overview illustration'
            ],
        ],

        'specs' => [
            'title' => [
                'type' => 'text',
                'name' => 'title',
                'label' => 'Specifications Section Title',
                'value' => 'Technical Specifications',
                'placeholder' => 'Enter specs section title'
            ],
            'description' => [
                'type' => 'textarea',
                'name' => 'description',
                'label' => 'Specifications Section Intro',
                'value' => 'Explore the numbers that define performance, reliability, and innovation.',
                'placeholder' => 'Write a specs introduction'
            ],
            'image' => [
                'type' => 'file',
                'name' => 'image',
                'label' => 'Specifications Image',
                'placeholder' => 'Upload specs diagram or chart'
            ],
        ]
    ],
];