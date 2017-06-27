# LaraNN
Use neural networks in your Laravel application!

(This package's just a wrapper for Infostream's neural network library, created for easier integration with the Laravel framework)

###Installation
LaraNN's on packagist, so installation's a breeze with composer:
```
composer require namodev/larann
```

To configure, simply edit the app configuration and append the class to the `'providers'` section:
```php
NamoDev\LaraNN\LaraNNServiceProvider::class
```
