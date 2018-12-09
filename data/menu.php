<?php

return [
    'sections' => [
        ['name' => 'menu.sections.appetizers', 'url' => 'appetizers'],
        ['name' => 'menu.sections.mains', 'url' => 'mains'],
        ['name' => 'menu.sections.desserts', 'url' => 'desserts'],
        ['name' => 'menu.sections.drinks', 'url' => 'drinks'],
    ],
    
    'mains' => [
        'title' => 'menu.mains.title'
    ],
    
    'appetizers' => [
        'title' => 'menu.appetizers.title'
    ],
    
    'desserts' => [
        'title' => 'menu.desserts.title'
    ],
    
    'drinks' => [
        'title' => 'menu.drinks.title'
    ],

    'dine' => [
        'title' => 'dine',
        'starters' => [
            'title' => 'starters',
            'courses' => [
                'soup and bread',
                'shrimp with caviar',
                'salad and apple vinegar'
            ]
        ],
        'options' => [
            [
                'title' => 'Classic',
                'price' => '560',
                'choices' => [
                    'tulip chicken',
                    'mustard pork',
                    'vegetable club'
                ]
            ],
            [
                'title' => 'Feast',
                'price' => '660',
                'choices' => [
                    'Beef Bourguignon',
                    'Duck with Taro',
                    'Spicy Salmon'
                ]
            ],
            [
                'title' => 'Premium',
                'price' => '860',
                'choices' => [
                    'Sicily Seafood',
                    'Sirlion Steak',
                    'Lamb with Mint'
                ]
            ]
        ],
        'beverages' => [
            'title' => 'Beverage Choice',
            'options' => [
                'Long black',
                'Milk tea',
                'Honey Lemon',
                'Latte',
                'Kiwi & Berry tea'
            ]
        ],

        'images' => [
            '/images/menu/dine/dine_image_1.jpg',
            '/images/menu/dine/dine_image_2.jpg',
            '/images/menu/dine/dine_image_3.jpg',
            '/images/menu/dine/dine_image_4.jpg',
            '/images/menu/dine/dine_image_5.jpg',
            '/images/menu/dine/dine_image_6.jpg',
            '/images/menu/dine/dine_image_7.jpg',
            '/images/menu/dine/dine_image_8.jpg',
            '/images/menu/dine/dine_image_9.jpg',
            '/images/menu/dine/dine_image_10.jpg',
            '/images/menu/dine/dine_image_11.jpg',
            '/images/menu/dine/dine_image_12.jpg',
            '/images/menu/dine/dine_image_13.jpg',
            '/images/menu/dine/dine_image_14.jpg',
            '/images/menu/dine/dine_image_15.jpg',
            '/images/menu/dine/dine_image_16.jpg',
            '/images/menu/dine/dine_image_17.jpg',
        ]
    ],

    'brunch' => [
        'title' => 'Brunch & Teatime',
        'sections' => [
            [
                'title' => 'Parmesan Sub',
                'price' => 230,
                'options' => [
                    'New Orleans Chicken',
                    'Tuna with Vegetables',
                    'Pesto Mushroom',
                    'Hawaii Ham',
                    'Smoked Duck'
                ]
            ],
            [
                'title' => 'Cake',
                'price' => 160,
                'options' => [
                    'Matcha',
                    'Chocolate',
                    'Cheese',
                ]
            ],
            [
                'title' => 'Cake',
                'price' => 270,
                'options' => [
                    'Fruit Berries',
                    'Chocolate',
                    'Matcha',
                ]
            ],
        ],

        'images' => [
            '/images/menu/brunch/brunch_1.jpg',
            '/images/menu/brunch/brunch_2.jpg'
        ]
    ],

    'beverages' => [
        'title' => 'Beverages',
        'sections' => [
            [
                'title' => 'Coffee',
                'price' => 230,
                'options' => [
                    'Espresso',
                    'American',
                    'Latte',
                    'Rose Latte',
                    'Burnt Cream Latte',
                    'Caramel Machiato'
                ]
            ],
            [
                'title' => 'Tea',
                'price' => 160,
                'options' => [
                    'Four Seasons Tea',
                    'Earl Black Tea',
                    'Iron Buddhism Tea',
                    'Kiwi & Strawberry Tea',
                ]
            ],
            [
                'title' => 'Fruit Juice',
                'price' => 160,
                'options' => [
                    'Honey Lemon',
                    'Orange',
                    'Berry Yogurt',
                    'Kiwi & Pineapple',
                ]
            ],
            [
                'title' => 'Au Lait',
                'price' => 160,
                'options' => [
                    'Caramel Au Lait',
                    'Chocolate Au Lait',
                    'Matcha Au Lait',
                    'Assam Black Tea Au Lait',
                ]
            ]
        ],
        'images' => [
            '/images/menu/beverages/beverages_1.jpg',
            '/images/menu/beverages/beverages_2.jpg',
            '/images/menu/beverages/beverages_3.jpg',
            '/images/menu/beverages/beverages_4.jpg',
        ]
    ],

    'alcohol' => [
        'title' => 'alcohol',

        'sections' => [
            [
                'title' => 'Beer',
                'price' => 160,
                'options' => [
                    'Golden Taiwan Beer'
                ]
            ],
            [
                'title' => 'Wine',
                'price' => 800,
                'options' => [
                    'Bonne Chance Moscato',
                    'Dominga Chardonnay',
                    'Dominga Cabernet Sauvignon'
                ]
            ],
            [
                'title' => 'Spirits',
                'price' => 1200,
                'options' => [
                    'Glenfiddich Whiskey 12 Years'
                ]
            ]
        ],
        'images' => [
            '/images/menu/alcohol/alcohol_1.jpg',
            '/images/menu/alcohol/alcohol_2.jpg',
        ]
    ]
];