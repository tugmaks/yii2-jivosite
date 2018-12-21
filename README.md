Jivosite widget plugin for Yii2
======================
Jivosite widget plugin

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist tugmaks/yii2-jivosite "*"
```

or add

```
"tugmaks/yii2-jivosite": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= \tugmaks\Jivosite\Chat::widget(['widgetId'=>'XXXXXXX']); ?>
```

Or you can set widgetId in application params yii-application/common/config/params-local.php

```php
<?php
return [
    'jivosite.widgetId'=>'ZfIbRy0uHr'
]; ?>
```

And call widget like this

```php
<?= \tugmaks\Jivosite\Chat::widget(); ?>
```

Widget can be called in any view or layout