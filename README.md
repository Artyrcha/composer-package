# Сленг поколения

## Требования

- PHP 7.4

## Установка

```bash
$ composer require artyr-yamaliev/composer-package
```

## Использование

```php
<?php
$generation = new Generation();
echo $generation->getNameByYear(1996);
```