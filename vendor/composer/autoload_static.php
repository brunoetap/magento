<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4fba4273d310347bb0553bbd9f050da5
{
    public static $files = array (
        'af332e7535890f3d6919d704abe29830' => __DIR__ . '/../..' . '/registration.php',
    );

    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Sixbank\\Gateway\\' => 25,
        ),
        'G' => 
        array (
            'Gateway\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sixbank\\Gateway\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
        'Gateway\\' => 
        array (
            0 => __DIR__ . '/..' . '/brunopaz/php-sdk-gateway/src',
        ),
    );

    public static $classMap = array (
        'Gateway\\API\\Acquirers' => __DIR__ . '/..' . '/brunopaz/php-sdk-gateway/src/gateway/API/Acquirers.php',
        'Gateway\\API\\Authorize' => __DIR__ . '/..' . '/brunopaz/php-sdk-gateway/src/gateway/API/Authorize.php',
        'Gateway\\API\\Boleto' => __DIR__ . '/..' . '/brunopaz/php-sdk-gateway/src/gateway/API/Boleto.php',
        'Gateway\\API\\Brand' => __DIR__ . '/..' . '/brunopaz/php-sdk-gateway/src/gateway/API/Brand.php',
        'Gateway\\API\\Cancel' => __DIR__ . '/..' . '/brunopaz/php-sdk-gateway/src/gateway/API/Cancel.php',
        'Gateway\\API\\Capture' => __DIR__ . '/..' . '/brunopaz/php-sdk-gateway/src/gateway/API/Capture.php',
        'Gateway\\API\\Card' => __DIR__ . '/..' . '/brunopaz/php-sdk-gateway/src/gateway/API/Card.php',
        'Gateway\\API\\Credential' => __DIR__ . '/..' . '/brunopaz/php-sdk-gateway/src/gateway/API/Credential.php',
        'Gateway\\API\\Currency' => __DIR__ . '/..' . '/brunopaz/php-sdk-gateway/src/gateway/API/Currency.php',
        'Gateway\\API\\Customer' => __DIR__ . '/..' . '/brunopaz/php-sdk-gateway/src/gateway/API/Customer.php',
        'Gateway\\API\\Environment' => __DIR__ . '/..' . '/brunopaz/php-sdk-gateway/src/gateway/API/Environment.php',
        'Gateway\\API\\Fraud' => __DIR__ . '/..' . '/brunopaz/php-sdk-gateway/src/gateway/API/Fraud.php',
        'Gateway\\API\\Gateway' => __DIR__ . '/..' . '/brunopaz/php-sdk-gateway/src/gateway/API/Gateway.php',
        'Gateway\\API\\Items' => __DIR__ . '/..' . '/brunopaz/php-sdk-gateway/src/gateway/API/Items.php',
        'Gateway\\API\\Methods' => __DIR__ . '/..' . '/brunopaz/php-sdk-gateway/src/gateway/API/Methods.php',
        'Gateway\\API\\OnlineTransfer' => __DIR__ . '/..' . '/brunopaz/php-sdk-gateway/src/gateway/API/OnlineTransfer.php',
        'Gateway\\API\\Order' => __DIR__ . '/..' . '/brunopaz/php-sdk-gateway/src/gateway/API/Order.php',
        'Gateway\\API\\Payment' => __DIR__ . '/..' . '/brunopaz/php-sdk-gateway/src/gateway/API/Payment.php',
        'Gateway\\API\\Paypal' => __DIR__ . '/..' . '/brunopaz/php-sdk-gateway/src/gateway/API/Paypal.php',
        'Gateway\\API\\Rebill' => __DIR__ . '/..' . '/brunopaz/php-sdk-gateway/src/gateway/API/Rebill.php',
        'Gateway\\API\\Report' => __DIR__ . '/..' . '/brunopaz/php-sdk-gateway/src/gateway/API/Report.php',
        'Gateway\\API\\Request' => __DIR__ . '/..' . '/brunopaz/php-sdk-gateway/src/gateway/API/Request.php',
        'Gateway\\API\\Sale' => __DIR__ . '/..' . '/brunopaz/php-sdk-gateway/src/gateway/API/Sale.php',
        'Gateway\\API\\Tokenization' => __DIR__ . '/..' . '/brunopaz/php-sdk-gateway/src/gateway/API/Tokenization.php',
        'Gateway\\API\\Transaction' => __DIR__ . '/..' . '/brunopaz/php-sdk-gateway/src/gateway/API/Transaction.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4fba4273d310347bb0553bbd9f050da5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4fba4273d310347bb0553bbd9f050da5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4fba4273d310347bb0553bbd9f050da5::$classMap;

        }, null, ClassLoader::class);
    }
}
