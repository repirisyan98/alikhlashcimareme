<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | Here you can change the default title of your admin panel.
    |
    | For detailed instructions you can look the title section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'title' => 'E-Masjid',
    'title_prefix' => '',
    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Favicon
    |--------------------------------------------------------------------------
    |
    | Here you can activate the favicon.
    |
    | For detailed instructions you can look the favicon section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_ico_only' => true,
    'use_full_favicon' => false,

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | Here you can change the logo of your admin panel.
    |
    | For detailed instructions you can look the logo section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'logo' => '<b>E-masjid</b>',
    'logo_img' => 'storage/logo/mosque.png',
    'logo_img_class' => 'brand-image img-circle elevation-1',
    'logo_img_xl' => null,
    'logo_img_xl_class' => 'brand-image-xs',
    'logo_img_alt' => 'E-Masjid',

    /*
    |--------------------------------------------------------------------------
    | User Menu
    |--------------------------------------------------------------------------
    |
    | Here you can activate and change the user menu.
    |
    | For detailed instructions you can look the user menu section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'usermenu_enabled' => true,
    'usermenu_header' => true,
    'usermenu_header_class' => 'bg-teal',
    'usermenu_image' => true,
    'usermenu_desc' => false,
    'usermenu_profile_url' => true,

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Here we change the layout of your admin panel.
    |
    | For detailed instructions you can look the layout section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'layout_topnav' => null,
    'layout_boxed' => null,
    'layout_fixed_sidebar' => null,
    'layout_fixed_navbar' => null,
    'layout_fixed_footer' => null,
    'layout_dark_mode' => null,

    /*
    |--------------------------------------------------------------------------
    | Authentication Views Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the authentication views.
    |
    | For detailed instructions you can look the auth classes section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_auth_card' => 'card-outline shadow card-teal',
    'classes_auth_header' => 'bg-white',
    'classes_auth_body' => 'bg-white text-muted',
    'classes_auth_footer' => 'bg-white',
    'classes_auth_icon' => '',
    'classes_auth_btn' => 'btn-flat bg-teal',

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the admin panel.
    |
    | For detailed instructions you can look the admin panel classes here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_body' => '',
    'classes_brand' => '',
    'classes_brand_text' => 'text-black-50',
    'classes_content_wrapper' => '',
    'classes_content_header' => '',
    'classes_content' => '',
    'classes_sidebar' => 'sidebar-light-primary sidebar-no-expand elevation-4',
    'classes_sidebar_nav' => 'nav-flat',
    'classes_topnav' => 'navbar-white navbar-light',
    'classes_topnav_nav' => 'navbar-expand',
    'classes_topnav_container' => 'container',

    /*
    |--------------------------------------------------------------------------
    | Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar of the admin panel.
    |
    | For detailed instructions you can look the sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'sidebar_mini' => 'lg',
    'sidebar_collapse' => false,
    'sidebar_collapse_auto_size' => false,
    'sidebar_collapse_remember' => false,
    'sidebar_collapse_remember_no_transition' => true,
    'sidebar_scrollbar_theme' => 'os-theme-light',
    'sidebar_scrollbar_auto_hide' => 'l',
    'sidebar_nav_accordion' => true,
    'sidebar_nav_animation_speed' => 300,

    /*
    |--------------------------------------------------------------------------
    | Control Sidebar (Right Sidebar)
    |--------------------------------------------------------------------------
    |
    | Here we can modify the right sidebar aka control sidebar of the admin panel.
    |
    | For detailed instructions you can look the right sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'right_sidebar' => false,
    'right_sidebar_icon' => 'fas fa-cogs',
    'right_sidebar_theme' => 'dark',
    'right_sidebar_slide' => true,
    'right_sidebar_push' => true,
    'right_sidebar_scrollbar_theme' => 'os-theme-light',
    'right_sidebar_scrollbar_auto_hide' => 'l',

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Here we can modify the url settings of the admin panel.
    |
    | For detailed instructions you can look the urls section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_route_url' => false,
    'dashboard_url' => 'home',
    'logout_url' => 'logout',
    'login_url' => 'login',
    'register_url' => 'register',
    'password_reset_url' => 'password/reset',
    'password_email_url' => 'password/email',
    'profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Laravel Mix
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Laravel Mix option for the admin panel.
    |
    | For detailed instructions you can look the laravel mix section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'enabled_laravel_mix' => false,
    'laravel_mix_css_path' => 'css/app.css',
    'laravel_mix_js_path' => 'js/app.js',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar/top navigation of the admin panel.
    |
    | For detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'menu' => [
        [
            'type'         => 'fullscreen-widget',
            'topnav_right' => true, // Or "topnav => true" to place on the left.
        ],
        [
            'type'         => 'darkmode-widget',
            'topnav_right' => true, // Or "topnav => true" to place on the left.
        ],
        ['header' => 'MENU'],
        [
            'text' => 'Dashboard',
            'icon' => 'fas fa-fw fa-tachometer-alt',
            'url' => '/home',
        ],
        [
            'text' => 'Profil Masjid',
            'url'  => 'admin/settings/masjid',
            'icon' => 'fas fa-fw fa-mosque',
            'can'  => 'isAdmin',
        ],
        [
            'text'    => 'Kelola Akun',
            'icon'    => 'fas fa-fw fa-users',
            'can'  => 'isAdmin',
            'submenu' => [
                [
                    'text'    => 'Users',
                    'icon'    => 'fas fa-fw fa-user',
                    'can'  => 'isAdmin',
                    'url'   => '/users',
                ],
                [
                    'text'    => 'Pengurus',
                    'icon'    => 'fas fa-fw fa-sitemap',
                    'can'  => 'isAdmin',
                    'url'   => '/users/pengurus',
                ],
                [
                    'text'    => 'Ustadz',
                    'icon'    => 'fas fa-fw fa-user-shield',
                    'can'  => 'isAdmin',
                    'url'   => '/users/ustadz',
                ],
            ],
        ],
        [
            'text' => 'Berita',
            'icon' => 'fas fa-fw fa-newspaper',
            'url' => 'pengurus/berita',
            'can' => ['isPengurus', 'isAdmin'],
        ],
        [
            'text' => 'Kajian Online',
            'icon' => 'fas fa-fw fa-newspaper',
            'url' => 'pengurus/kajian',
            'can' => ['isPengurus', 'isAdmin'],
        ],
        [
            'text' => 'Galeri',
            'icon' => 'fas fa-fw fa-image',
            'url' => 'pengurus/galeri',
            'can' => ['isPengurus', 'isAdmin'],
        ],
        [
            'text' => 'Event',
            'icon' => 'fas fa-fw fa-calendar',
            'url' => 'pengurus/event',
            'can' => ['isPengurus', 'isAdmin'],
        ],
        [
            'text' => 'Mustahik',
            'icon' => 'fas fa-fw fa-user',
            'url' => 'pengurus/mustahik',
            'can' => ['isPengurus', 'isAdmin'],
        ],
        [
            'text' => 'Keuangan',
            'icon' => 'fas fa-fw fa-money-bill-wave-alt',
            'can' => ['isPengurus', 'isAdmin', 'isBendahara', 'isKetua'],
            'submenu' => [
                [
                    'text' => 'Laporan Keuangan',
                    'url' => 'keuangan/laporan',
                    'icon' => 'fas fa-fw fa-scroll',
                    'can' => ['isBendahara', 'isAdmin', 'isKetua']
                ],
                [
                    'text' => 'Pengajuan Anggaran',
                    'url' => 'keuangan/pengajuan',
                    'icon' => 'fas fa-fw fa-hand-holding-usd',
                    'can' => ['isPengurus', 'isAdmin']
                ],
                [
                    'text' => 'Konfirmasi Anggaran',
                    'url' => 'keuangan/pengajuan/konfirmasi',
                    'icon' => 'fas fa-fw fa-hand-holding-usd',
                    'can' => ['isKetua', 'isAdmin']
                ],
            ],
        ],
        [
            'text' => 'Kelola Kegiatan',
            'icon' => 'fas fa-fw fa-calendar-week',
            'can' => ['isPengurus', 'isAdmin'],
            'submenu' => [
                [
                    'text' => 'Jadwal Sholat Jumat',
                    'url'  => 'pengurus/kegiatan/jumat',
                    'icon' => 'fas fa-fw fa-mosque',
                ],
                [
                    'text' => 'Jadwal Kajian Khusus',
                    'url'  => 'pengurus/kegiatan/kajian',
                    'icon' => 'fas fa-fw fa-quran',
                ],
            ],
        ],
        [
            'text' => 'Qurban',
            'icon' => 'fas fa-fw fa-paw',
            'submenu' => [
                [
                    'text' => 'Hewan',
                    'icon' => 'fas fa-fw fa-hippo',
                    'can' => ['isBendahara', 'isAdmin'],
                    'url' => '/pengurus/hewan_qurban',
                ],
                [
                    'text' => 'Konfirmasi Pembayaran',
                    'icon' => 'fas fa-fw fa-money-bill',
                    'can' => ['isBendahara', 'isAdmin'],
                    'url' => 'pengurus/qurban/pembayaran',
                ],
                [
                    'text' => 'Produksi',
                    'icon' => 'fas fa-fw fa-box-open',
                    'can' => ['isProduksi', 'isAdmin'],
                    'submenu' => [
                        [
                            'text' => 'Penyembelihan',
                            'icon' => 'fas fa-fw fa-drumstick-bite',
                            'can' => ['isProduksi', 'isAdmin'],
                            'url' => '/pengurus/produksi/penyembelihan',
                        ],
                        [
                            'text' => 'Pembungkusan',
                            'icon' => 'fas fa-fw fa-box',
                            'can' => ['isProduksi', 'isAdmin'],
                            'url' => '/pengurus/produksi/pembungkusan',
                        ]
                    ]

                ],
                [
                    'text' => 'Distribusi',
                    'icon' => 'fas fa-fw fa-shipping-fast',
                    'can' => ['isDistribusi', 'isAdmin'],
                    'submenu' => [
                        [
                            'text' => 'Warga',
                            'icon' => 'fas fa-fw fa-users',
                            'can' => ['isDistribusi', 'isAdmin'],
                            'url' => '/qurban/distribusi'
                        ],
                        [
                            'text' => 'Shohibul',
                            'icon' => 'fas fa-fw fa-user',
                            'can' => ['isDistribusi', 'isAdmin'],
                            'url' => '/qurban/permintaan'
                        ],
                    ]
                ],
                [
                    'text' => 'Pendaftaran',
                    'icon' => 'fas fa-fw fa-clipboard-list',
                    'can' => ['isUser', 'isAdmin'],
                    'url' => '/qurban/pendaftaran',
                ],
                [
                    'text' => 'Monitoring',
                    'icon' => 'fas fa-fw fa-desktop',
                    'url' => 'qurban/monitoring',
                ],
                [
                    'text' => 'Laporan',
                    'icon' => 'fas fa-fw fa-file',
                    'can' => ['isAdmin'],
                    'submenu' => [
                        [
                            'text' => 'Distribusi',
                            'icon' => 'fas fa-fw fa-dot-circle',
                            'url' => '/qurban/laporan/distribusi'
                        ],
                        [
                            'text' => 'Mudhohi',
                            'icon' => 'fas fa-fw fa-dot-circle',
                            'url' => '/qurban/laporan/mudhohi'
                        ],
                    ],
                ],
            ]

        ],
        [
            'text' => 'Kontak Pesan',
            'icon' => 'fas fa-fw fa-envelope',
            'url' => 'pengurus/kontak',
            'can' => ['isPengurus', 'isAdmin'],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    | For detailed instructions you can look the menu filters section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\DataFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Here we can modify the plugins used inside the admin panel.
    |
    | For detailed instructions you can look the plugins section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Plugins-Configuration
    |
    */

    'plugins' => [
        'Datatables' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css',
                ],
            ],
        ],
        'Select2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css',
                ],
            ],
        ],
        'Chartjs' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                ],
            ],
        ],
        'Sweetalert2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.jsdelivr.net/npm/sweetalert2@8',
                ],
            ],
        ],
        'Pace' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdn.jsdelivr.net/npm/pace-js@latest/pace-theme-default.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.jsdelivr.net/npm/pace-js@latest/pace.min.js',
                ],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | IFrame
    |--------------------------------------------------------------------------
    |
    | Here we change the IFrame mode configuration. Note these changes will
    | only apply to the view that extends and enable the IFrame mode.
    |
    | For detailed instructions you can look the iframe mode section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/IFrame-Mode-Configuration
    |
    */

    'iframe' => [
        'default_tab' => [
            'url' => null,
            'title' => null,
        ],
        'buttons' => [
            'close' => true,
            'close_all' => true,
            'close_all_other' => true,
            'scroll_left' => true,
            'scroll_right' => true,
            'fullscreen' => true,
        ],
        'options' => [
            'loading_screen' => 1000,
            'auto_show_new_tab' => true,
            'use_navbar_items' => true,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Livewire
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Livewire support.
    |
    | For detailed instructions you can look the livewire here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'livewire' => true,
];
