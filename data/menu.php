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
        'title'     => 'dine',
        'starters'  => [
            'title'   => 'menu.dine.starters.title',
            'courses' => [
                'menu.dine.starters.soup-and-bread',
                'menu.dine.starters.shrimp-with-caviar',
                'menu.dine.starters.salad-and-apple-vinegar',
            ]
        ],
        'options'   => [
            [
                'title'   => 'menu.dine.classic.title',
                'price'   => '560',
                'choices' => [
                    'menu.dine.classic.tulip-chicken',
                    'menu.dine.classic.mustard-pork',
                    'menu.dine.classic.vegetable-club'
                ]
            ],
            [
                'title'   => 'menu.dine.feast.title',
                'price'   => '660',
                'choices' => [
                    'menu.dine.feast.beef-bourguignon',
                    'menu.dine.feast.duck-with-taro',
                    'menu.dine.feast.spicy-salmon'
                ]
            ],
            [
                'title'   => 'menu.dine.premium.title',
                'price'   => '860',
                'choices' => [
                    'menu.dine.premium.sicily-seafood',
                    'menu.dine.premium.sirloin-steak',
                    'menu.dine.premium.lamb-with-mint'
                ]
            ]
        ],
        'beverages' => [
            'title'   => 'menu.dine.beverages.title',
            'options' => [
                'long-black',
                'milk-tea',
                'honey-lemon',
                'latte',
                'kiwi-berry-tea'
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
        'title'    => 'Brunch & Teatime',
        'sections' => [
            [
                'title'   => 'menu.brunch.subs.title',
                'price'   => 230,
                'options' => [
                    'menu.brunch.subs.new-orleans-chicken',
                    'menu.brunch.subs.tuna-with-vegetables',
                    'menu.brunch.subs.pesto-mushroom',
                    'menu.brunch.subs.smoked-duck',
                ]
            ],
            [
                'title'   => 'menu.brunch.cakes.title',
                'price'   => 160,
                'options' => [
                    'menu.brunch.cakes.matcha',
                    'menu.brunch.cakes.chocolate',
                    'menu.brunch.cakes.cheese',
                ]
            ],
            [
                'title'   => 'menu.brunch.waffles.title',
                'price'   => 270,
                'options' => [
                    'menu.brunch.waffles.fruit-berries',
                    'menu.brunch.waffles.chocolate',
                    'menu.brunch.waffles.matcha',
                ]
            ],
        ],

        'images' => [
            '/images/menu/brunch/brunch_1.jpg',
            '/images/menu/brunch/brunch_2.jpg'
        ]
    ],

    'beverages' => [
        'title'    => 'menu.beverages.title',
        'sections' => [
            'coffee' => [
                'title'   => 'menu.beverages.coffee.title',
                'price'   => 230,
                'options' => [
                    'menu.beverages.coffee.espresso',
                    'menu.beverages.coffee.american',
                    'menu.beverages.coffee.latte',
                    'menu.beverages.coffee.rose-latte',
                    'menu.beverages.coffee.burnt-cream-latte',
                    'menu.beverages.coffee.caramel-machiato',
                ]
            ],
            'tea' => [
                'title'   => 'menu.beverages.tea.title',
                'price'   => 160,
                'options' => [
                    'menu.beverages.tea.four-seasons-tea',
                    'menu.beverages.tea.earl-black-tea',
                    'menu.beverages.tea.iron-buddhism-tea',
                    'menu.beverages.tea.kiwi-strawberry-tea',
                ]
            ],
            'juice' => [
                'title'   => 'menu.beverages.fruit-juice.title',
                'price'   => 160,
                'options' => [
                    'menu.beverages.fruit-juice.honey-lemon',
                    'menu.beverages.fruit-juice.orange',
                    'menu.beverages.fruit-juice.berry-yogurt',
                    'menu.beverages.fruit-juice.kiwi-pineapple',
                ]
            ],
            'aulait' => [
                'title'   => 'menu.beverages.au-lait.title',
                'price'   => 160,
                'options' => [
                    'menu.beverages.au-lait.caramel-au-lait',
                    'menu.beverages.au-lait.chocolate-au-lait',
                    'menu.beverages.au-lait.matcha-au-lait',
                    'menu.beverages.au-lait.assam-black-tea-au-lait',
                ]
            ]
        ],
        'images'   => [
            '/images/menu/beverages/beverages_1.jpg',
            '/images/menu/beverages/beverages_2.jpg',
            '/images/menu/beverages/beverages_3.jpg',
            '/images/menu/beverages/beverages_4.jpg',
        ]
    ],

    'alcohol' => [
        'title' => 'menu.alcohol.title',

        'sections' => [
            [
                'title'   => 'menu.alcohol.beer.title',
                'price'   => 160,
                'options' => [
                    'menu.alcohol.beer.golden-taiwan-beer'
                ]
            ],
            [
                'title'   => 'menu.alcohol.wine.title',
                'price'   => 800,
                'options' => [
                    'menu.alcohol.wine.bonne-chance-moscato',
                    'menu.alcohol.wine.dominga-chardonnay',
                    'menu.alcohol.wine.dominga-cabernet-sauvignon'
                ]
            ],
            [
                'title'   => 'menu.alcohol.spirits.title',
                'price'   => 1200,
                'options' => [
                    'menu.alcohol.spirits.glenfiddich-whiskey'
                ]
            ]
        ],
        'images'   => [
            '/images/menu/alcohol/alcohol_1.jpg',
            '/images/menu/alcohol/alcohol_2.jpg',
        ]
    ]
];