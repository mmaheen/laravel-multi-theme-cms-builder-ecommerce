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
            ],
            'menus' => [
                'type' => 'checkbox',
                'name' => 'menus',
                'label' => 'Please select your menu',
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
                'label' => 'Please enter your hero text',
                'value' => 'Performance Meets Innovation',
                'placeholder' => 'Enter your product name'
            ],
            'description' => [
                'type' => 'textarea',
                'name' => 'description',
                'label' => 'Please enter your hero description',
                'value' => 'Engineered for performance, designed for creators.',
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
        'features' => [
            'title' => [
                'type' => 'text',
                'name' => 'title',
                'label' => 'Please enter your feature title',
                'value' => 'Powerful Features',
                'placeholder' => 'Enter your feature title'
            ],
            'description' => [
                'type' => 'textarea',
                'name' => 'description',
                'label' => 'Please enter your feature description',
                'value' => 'Discover the cutting-edge technology that powers every detail.',
                'placeholder' => 'Enter your feature description'
            ],
            'attributes' => [
                'label' => 'Please Add new feature',
                'title' => [
                    'type' => 'text',
                    'name' => 'title',
                    'label' => 'Please write your attribute title',
                    'value' => 'camera',
                    'placeholder' => 'Better 1 word'
                ],
                'description' => [
                    'type' => 'textarea',
                    'name' => 'description',
                    'label' => 'Please enter your feature description',
                    'value' => 'Better Camera',
                    'placeholder' => 'Better 1 line'
                ],
                'icon' => [
                    'type' => 'select',
                    'name' => 'logo',
                    'label' => 'Select a icon',
                    'options' => [
                        'fa fa-camera',
                        'fa fa-battery-full',
                        'fa fa-laptop'
                    ]
                ]
            ]
        ],
        'overview' => [
            'title' => [
                'type' => 'text',
                'name' => 'title',
                'label' => 'Please enter your overview title',
                'value' => 'In-Depth Overview',
                'placeholder' => 'Enter your overview title'
            ],
            'description' => [
                'type' => 'textarea',
                'name' => 'description',
                'label' => 'Please enter your overview description',
                'value' => 'Explore the intricate details and innovative design that define our product.',
                'placeholder' => 'Enter your overview description'
            ],
            'image' => [
                'type' => 'file',
                'name' => 'image',
                'label' => 'Please upload your overview image',
                // 'value' => '{{ asset("assets/images/placeholder.png") }}',
            ],
        ],
        'specs' => [
            'title' => [
                'type' => 'text',
                'name' => 'title',
                'label' => 'Please enter your overview title',
                'value' => 'Product Specs & Details',
                'placeholder' => 'Enter your overview title'
            ],
            'description' => [
                'type' => 'textarea',
                'name' => 'description',
                'label' => 'Please enter your overview description',
                'value' => 'A closer look at the numbers behind innovation. Explore the technical details that define performance and reliability.',
                'placeholder' => 'Enter your overview description'
            ],
            'image' => [
                'type' => 'file',
                'name' => 'image',
                'label' => 'Please upload your specifications image',
                // 'value' => '{{ asset("assets/images/placeholder.png") }}',
            ],
        ]
    ],
];