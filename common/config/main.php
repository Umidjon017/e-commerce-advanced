<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
        '@uploads' => '@appRoot/uploads'
    ],
    'modules' => [
        'gridview' => [
            'class' => '\kartik\grid\Module'
            // enter optional module parameters below - only if you need to
            // use your own export download action or custom translation
            // message source
            // 'downloadAction' => 'gridview/export/download',
            // 'i18n' => []
        ]
    ],
    'bootstrap' => [
        'common\bootstrap\SetUp'
    ],
    'timeZone' => "Asia/Tashkent",
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
//        Production paytida
//        'assetManager' => [
//            'appendTimestamp' => true,
//        ],
        'i18n' => [
            'translations' => [
                '*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@appRoot/common/components/localization/messages',
                    'sourceLanguage' => 'en',
                    'fileMap' => [
                        'app' => 'app.php',
                        'app/error' => 'error.php',
                    ],
                    'on missingTranslation' => ['common\components\localization\TranslationEventHandler', 'handleMissingTranslation']
                ],
                'ui' => [
                    'class' => 'yii\i18n\DbMessageSource',
                    'sourceLanguage' => 'en',
//                    'on missingTranslation' => ['common\components\localization\TranslationEventHandler', 'handleMissingTranslation']
                ],
                'models' => [
                    'class' => 'yii\i18n\DbMessageSource',
                    'sourceLanguage' => 'en',
//                    'on missingTranslation' => ['common\components\localization\TranslationEventHandler', 'handleMissingTranslation']
                ],
            ]
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
            'cachePath' => '@common/runtime/cache',
        ],
    ],
];
