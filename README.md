# yii2-multiselect

## Install

Via Composer

```bash
$ composer require "SysProd/yii2-multiselect:dev-master"
```

or add

```
"SysProd/yii2-multiselect": "dev-master"
```

to the require section of your `composer.json` file.


## Usage

On your view file.

```php

<?php
use SysProd\MultiSelect\MultiSelect;

/* @var array $items */
/* @var array $children */
?>

<?= $form->field($model, 'children')->widget(MultiSelect::className(), [
    'items' => $items,
    'selectedItems' => $children,
    'ajax' => false,
    ]) ?>

```

For more options, visit: https://github.com/SysProd/yii2-multiselect
