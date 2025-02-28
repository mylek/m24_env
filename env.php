<?php
return [
    'backend' => [
        'frontName' => 'admin'
    ],
    'remote_storage' => [
        'driver' => 'file'
    ],
    'queue' => [
        'consumers_wait_for_messages' => 0,
        'amqp' => [
            'host' => 'rabbitmq',
            'port' => '5672',
            'user' => 'guest',
            'password' => 'guest',
            'virtualhost' => '/'
        ]
    ],
    'crypt' => [
        'key' => '060dca534e7d8f92e903b42afa51a528'
    ],
    'db' => [
        'table_prefix' => '',
        'connection' => [
            'default' => [
                'host' => '127.0.0.1',
                'dbname' => 'magento',
                'username' => 'magento',
                'password' => 'magento',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
                'active' => '1',
                'driver_options' => [
                    1014 => false
                ]
            ]
        ]
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'default',
    'session' => [
        'save' => 'files'
    ],
    'cache' => [
        'frontend' => [
            'default' => [
                'id_prefix' => '69d_'
            ],
            'page_cache' => [
                'id_prefix' => '69d_'
            ]
        ],
        'allow_parallel_generation' => false
    ],
    'lock' => [
        'provider' => 'db'
    ],
    'directories' => [
        'document_root_is_pub' => true
    ],
    'cache_types' => [
        'config' => 1,
        'layout' => 1,
        'block_html' => 1,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'compiled_config' => 1,
        'eav' => 1,
        'customer_notification' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'full_page' => 1,
        'config_webservice' => 1,
        'translate' => 1,
        'checkout' => 1,
        'hyva_inline_css' => 1
    ],
    'downloadable_domains' => [
        'helikon.local'
    ],
    'install' => [
        'date' => 'Tue, 16 May 2017 09:13:48 +0000'
    ],
    'system' => [
        'default' => [
            'payment' => [
                'payflowpro' => [
                    'partner' => null,
                    'user' => null,
                    'pwd' => null,
                    'sandbox_flag' => '0',
                    'proxy_host' => null,
                    'proxy_port' => null,
                    'debug' => '0'
                ],
                'payflow_link' => [
                    'pwd' => null,
                    'sandbox_flag' => '0',
                    'use_proxy' => '0',
                    'proxy_host' => null,
                    'proxy_port' => null,
                    'debug' => '0',
                    'url_method' => 'GET'
                ],
                'payflow_express' => [
                    'debug' => '0'
                ],
                'paypal_express_bml' => [
                    'publisher_id' => null
                ],
                'paypal_express' => [
                    'debug' => '1',
                    'merchant_id' => 'PYN29SSAXTEYS'
                ],
                'hosted_pro' => [
                    'debug' => null
                ],
                'paypal_billing_agreement' => [
                    'debug' => '0'
                ],
                'braintree' => [
                    'merchant_id' => null,
                    'public_key' => null,
                    'private_key' => null,
                    'merchant_account_id' => null
                ],
                'braintree_paypal' => [
                    'merchant_name_override' => null
                ],
                'checkmo' => [
                    'mailing_address' => null
                ],
                'payflow_advanced' => [
                    'user' => null,
                    'pwd' => null,
                    'sandbox_flag' => '0',
                    'proxy_host' => null,
                    'proxy_port' => null,
                    'debug' => '0',
                    'url_method' => 'GET'
                ]
            ],
            'payment_all_paypal' => [
                'paypal_payflowpro' => [
                    'settings_paypal_payflow' => [
                        'heading_cc' => null,
                        'settings_paypal_payflow_advanced' => [
                            'paypal_payflow_settlement_report' => [
                                'heading_sftp' => null
                            ]
                        ]
                    ]
                ],
                'payflow_link' => [
                    'settings_payflow_link' => [
                        'settings_payflow_link_advanced' => [
                            'payflow_link_settlement_report' => [
                                'heading_sftp' => null
                            ]
                        ]
                    ]
                ],
                'payments_pro_hosted_solution' => [
                    'pphs_settings' => [
                        'pphs_settings_advanced' => [
                            'pphs_settlement_report' => [
                                'heading_sftp' => null
                            ]
                        ]
                    ]
                ],
                'express_checkout' => [
                    'settings_ec' => [
                        'settings_ec_advanced' => [
                            'express_checkout_settlement_report' => [
                                'heading_sftp' => null
                            ]
                        ]
                    ]
                ]
            ],
            'paypal' => [
                'fetch_reports' => [
                    'ftp_login' => null,
                    'ftp_password' => null,
                    'ftp_sandbox' => '0',
                    'ftp_ip' => null,
                    'ftp_path' => null
                ],
                'general' => [
                    'business_account' => 'sb-yb17l13297634@business.example.com',
                    'merchant_country' => null
                ],
                'wpp' => [
                    'api_username' => '0:3:o0Wc5JqNxHnpf612zD/SEOITT3eYGoyWTin2CG0gVH7gzyGQzUTOHbNoTT/mwggHPMUzyI7dghkk4lNR5GZjnndugsa1Nw==',
                    'api_password' => '0:3:8GO8dKtrMJ/Ur8J1zjMbEtFoeZylT0HDHiGuPaoy7einl+DvcnGoxfc8txA=',
                    'api_signature' => '0:3:CEjlM1GEq5pPSkch2Pt74Pm1oZ2sAwGzGwbIq6CBb7IPC4wgqGuR0+hpryYQRnEhqSAJS92Dh84dZ+Fb5AUa3KhwVHGpP7H+tlk0V8Tqx3omuNZa',
                    'api_cert' => null,
                    'sandbox_flag' => '1',
                    'proxy_host' => null,
                    'proxy_port' => null
                ]
            ],
            'catalog' => [
                'productalert_cron' => [
                    'error_email' => null
                ],
                'product_video' => [
                    'youtube_api_key' => 'AIzaSyAOQJOaojW0wN6yLej_XkduQc5440mLs30'
                ],
                'search' => [
                    'elasticsearch5_server_hostname' => 'localhost',
                    'elasticsearch7_server_hostname' => 'elastic',
                    'elasticsearch5_server_port' => '9200',
                    'elasticsearch7_server_port' => '9200',
                    'elasticsearch5_index_prefix' => 'magento2',
                    'elasticsearch7_index_prefix' => 'magento2',
                    'elasticsearch5_enable_auth' => '0',
                    'elasticsearch7_enable_auth' => '0',
                    'elasticsearch5_username' => null,
                    'elasticsearch7_username' => '',
                    'elasticsearch5_password' => null,
                    'elasticsearch7_password' => '',
                    'elasticsearch5_server_timeout' => '15',
                    'elasticsearch7_server_timeout' => '15',
                    'elasticsearch6_server_hostname' => 'elasticsearch',
                    'elasticsearch6_server_port' => '9200',
                    'elasticsearch6_index_prefix' => 'magento2',
                    'elasticsearch6_enable_auth' => 'false',
                    'elasticsearch6_username' => '',
                    'elasticsearch6_password' => '',
                    'elasticsearch6_server_timeout' => '15'
                ]
            ],
            'google' => [
                'gtag' => [
                    'analytics4' => [
                        'measurement_id' => null
                    ],
                    'adwords' => [
                        'conversion_id' => null
                    ]
                ],
                'analytics' => [
                    'account' => null
                ]
            ],
            'admin' => [
                'url' => [
                    'custom' => null,
                    'custom_path' => null
                ]
            ],
            'web' => [
                'unsecure' => [
                    'base_url' => 'https://helikon-tex.test/',
                    'base_link_url' => '{{unsecure_base_url}}',
                    'base_static_url' => null,
                    'base_media_url' => null
                ],
                'secure' => [
                    'base_url' => 'https://helikon-tex.test/',
                    'base_link_url' => '{{secure_base_url}}',
                    'base_static_url' => null,
                    'base_media_url' => null
                ],
                'default' => [
                    'front' => 'cms'
                ],
                'cookie' => [
                    'cookie_path' => null,
                    'cookie_domain' => null
                ]
            ],
            'cataloginventory' => [
                'source_selection_distance_based_google' => [
                    'api_key' => null
                ]
            ],
            'currency' => [
                'import' => [
                    'error_email' => null
                ]
            ],
            'sitemap' => [
                'generate' => [
                    'error_email' => null
                ]
            ],
            'trans_email' => [
                'ident_general' => [
                    'name' => 'Helikon-Tex',
                    'email' => 'it@entirem.com'
                ],
                'ident_sales' => [
                    'name' => 'Helikon-Tex Sales',
                    'email' => 'it@entirem.com'
                ],
                'ident_support' => [
                    'name' => 'Helikon-Tex CustomerSupport',
                    'email' => 'it@entirem.com'
                ],
                'ident_custom1' => [
                    'name' => 'Custom 1',
                    'email' => 'custom1@example.com'
                ],
                'ident_custom2' => [
                    'name' => 'Custom 2',
                    'email' => 'custom2@example.com'
                ]
            ],
            'contact' => [
                'email' => [
                    'recipient_email' => 'hello@example.com'
                ]
            ],
            'sales_email' => [
                'order' => [
                    'copy_to' => null
                ],
                'order_comment' => [
                    'copy_to' => null
                ],
                'invoice' => [
                    'copy_to' => null
                ],
                'invoice_comment' => [
                    'copy_to' => null
                ],
                'shipment' => [
                    'copy_to' => null
                ],
                'shipment_comment' => [
                    'copy_to' => null
                ],
                'creditmemo' => [
                    'copy_to' => null
                ],
                'creditmemo_comment' => [
                    'copy_to' => null
                ]
            ],
            'checkout' => [
                'payment_failed' => [
                    'copy_to' => null
                ]
            ],
            'carriers' => [
                'ups' => [
                    'is_account_live' => '0',
                    'access_license_number' => null,
                    'gateway_xml_url' => 'https://onlinetools.ups.com/ups.app/xml/Rate',
                    'password' => null,
                    'username' => null,
                    'gateway_url' => 'https://www.ups.com/using/services/rave/qcostcgi.cgi',
                    'shipper_number' => null,
                    'tracking_xml_url' => 'https://onlinetools.ups.com/ups.app/xml/Track',
                    'debug' => '0'
                ],
                'usps' => [
                    'gateway_url' => 'https://production.shippingapis.com/ShippingAPI.dll',
                    'gateway_secure_url' => 'https://secure.shippingapis.com/ShippingAPI.dll',
                    'userid' => null,
                    'password' => null
                ],
                'fedex' => [
                    'account' => null,
                    'meter_number' => null,
                    'key' => null,
                    'password' => null,
                    'sandbox_mode' => '0',
                    'production_webservices_url' => 'https://ws.fedex.com:443/web-services/',
                    'sandbox_webservices_url' => 'https://wsbeta.fedex.com:443/web-services/',
                    'smartpost_hubid' => null
                ],
                'dhl' => [
                    'id' => null,
                    'password' => null,
                    'account' => null,
                    'debug' => '0',
                    'gateway_url' => 'https://xmlpi-ea.dhl.com/XMLShippingServlet'
                ]
            ],
            'recaptcha_backend' => [
                'type_recaptcha' => [
                    'public_key' => '0:3:bcdsCuWCU0aBfu6C6kbV3+tSx7qc4SUrbFykIU5cLsNNwpBAQw6Mmfzs4VuIsn2FqsJ0eDp4M9TiR+3YQBLXyZLBHbU=',
                    'private_key' => '0:3:L3zxMVBYvW6jiOsm/q6YC2goqGRqaBNONolQ6sNIEGFTgBNFhHkeUSgb8tqb8mfEfRyScW27VjYYBVrWVzwSt2u2vlw='
                ],
                'type_invisible' => [
                    'public_key' => '0:3:bcdsCuWCU0aBfu6C6kbV3+tSx7qc4SUrbFykIU5cLsNNwpBAQw6Mmfzs4VuIsn2FqsJ0eDp4M9TiR+3YQBLXyZLBHbU=',
                    'private_key' => '0:3:L3zxMVBYvW6jiOsm/q6YC2goqGRqaBNONolQ6sNIEGFTgBNFhHkeUSgb8tqb8mfEfRyScW27VjYYBVrWVzwSt2u2vlw='
                ],
                'type_recaptcha_v3' => [
                    'public_key' => '0:3:bcdsCuWCU0aBfu6C6kbV3+tSx7qc4SUrbFykIU5cLsNNwpBAQw6Mmfzs4VuIsn2FqsJ0eDp4M9TiR+3YQBLXyZLBHbU=',
                    'private_key' => '0:3:L3zxMVBYvW6jiOsm/q6YC2goqGRqaBNONolQ6sNIEGFTgBNFhHkeUSgb8tqb8mfEfRyScW27VjYYBVrWVzwSt2u2vlw='
                ]
            ],
            'recaptcha_frontend' => [
                'type_recaptcha' => [
                    'public_key' => '0:3:bcdsCuWCU0aBfu6C6kbV3+tSx7qc4SUrbFykIU5cLsNNwpBAQw6Mmfzs4VuIsn2FqsJ0eDp4M9TiR+3YQBLXyZLBHbU=',
                    'private_key' => '0:3:L3zxMVBYvW6jiOsm/q6YC2goqGRqaBNONolQ6sNIEGFTgBNFhHkeUSgb8tqb8mfEfRyScW27VjYYBVrWVzwSt2u2vlw='
                ],
                'type_invisible' => [
                    'public_key' => '0:3:bcdsCuWCU0aBfu6C6kbV3+tSx7qc4SUrbFykIU5cLsNNwpBAQw6Mmfzs4VuIsn2FqsJ0eDp4M9TiR+3YQBLXyZLBHbU=',
                    'private_key' => '0:3:L3zxMVBYvW6jiOsm/q6YC2goqGRqaBNONolQ6sNIEGFTgBNFhHkeUSgb8tqb8mfEfRyScW27VjYYBVrWVzwSt2u2vlw='
                ],
                'type_recaptcha_v3' => [
                    'public_key' => null,
                    'private_key' => null
                ]
            ],
            'system' => [
                'smtp' => [
                    'host' => 'localhost',
                    'port' => '25'
                ],
                'full_page_cache' => [
                    'varnish' => [
                        'access_list' => 'localhost',
                        'backend_host' => 'localhost',
                        'backend_port' => '8080'
                    ]
                ],
                'release_notification' => [
                    'content_url' => 'magento.com/release_notifications',
                    'use_https' => '1'
                ]
            ],
            'adobe_ims' => [
                'integration' => [
                    'api_key' => null,
                    'private_key' => null
                ]
            ],
            'dev' => [
                'restrict' => [
                    'allow_ips' => null
                ],
                'js' => [
                    'session_storage_key' => 'collected_errors'
                ]
            ],
            'newrelicreporting' => [
                'general' => [
                    'api_url' => 'https://api.newrelic.com/v2/applications/%s/deployments.json',
                    'insights_api_url' => 'https://insights-collector.newrelic.com/v1/accounts/%s/events',
                    'account_id' => null,
                    'app_id' => null,
                    'api' => null,
                    'insights_insert_key' => null
                ]
            ],
            'analytics' => [
                'general' => [
                    'token' => null
                ],
                'url' => [
                    'signup' => 'https://advancedreporting.rjmetrics.com/signup',
                    'update' => 'https://advancedreporting.rjmetrics.com/update',
                    'bi_essentials' => 'https://dashboard.rjmetrics.com/v2/magento/signup',
                    'otp' => 'https://advancedreporting.rjmetrics.com/otp',
                    'report' => 'https://advancedreporting.rjmetrics.com/report',
                    'notify_data_changed' => 'https://advancedreporting.rjmetrics.com/report'
                ]
            ],
            'crontab' => [
                'default' => [
                    'jobs' => [
                        'analytics_collect_data' => [
                            'schedule' => [
                                'cron_expr' => '00 02 * * *'
                            ]
                        ]
                    ]
                ]
            ]
        ],
        'websites' => [
            'pl' => [
                'web' => [
                    'secure' => [
                        'base_url' => 'https://helikon-tex.test/pl/',
                        'base_link_url' => 'https://helikon-tex.test/pl/',
                        'base_static_url' => 'https://helikon-tex.test/static/',
                        'base_media_url' => 'https://helikon-tex.test/media/'
                    ],
                    'unsecure' => [
                        'base_static_url' => 'https://helikon-tex.test/static/',
                        'base_url' => 'https://helikon-tex.test/pl/',
                        'base_media_url' => 'https://helikon-tex.test/media/'
                    ]
                ]
            ],
            'en' => [
                'web' => [
                    'secure' => [
                        'base_url' => 'https://helikon-tex.test/en/',
                        'base_link_url' => 'https://helikon-tex.test/en/',
                        'base_static_url' => 'https://helikon-tex.test/static/',
                        'base_media_url' => 'https://helikon-tex.test/media/'
                    ],
                    'unsecure' => [
                        'base_static_url' => 'https://helikon-tex.test/static/',
                        'base_media_url' => 'https://helikon-tex.test/media/',
                        'base_url' => 'https://helikon-tex.test/en/',
                        'base_link_url' => 'https://helikon-tex.test/en/'
                    ]
                ]
            ]
        ]
    ]
];
