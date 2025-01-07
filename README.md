# wn-backend-plugin

## назначение
плагин подменяет путь к  layouts модуля ядра backend, что позволяет изменить внешний вид админки без вмешательства в "ядро"

## установка
добавляем приватный репозиторий к проекту
```bash
composer config repositories.zaviruha-backend git https://github.com/zaviruha/wn-backend-plugin.git
```
устанавливаем
```bash
composer require zaviruha/wn-backend-plugin
```

(опционально) можно добавить слияние `composer.json` из плагина в основной проект, для этого в массив ключа `extra.merge-plugin.include`  `composer.json` надо добавить `"plugins/zaviruha/backend/composer.json"`, пример:
```
    "extra": {
        "merge-plugin": {
            "include": [
                ~~~
                "plugins/zaviruha/backend/composer.json"
                ~~~
            ],
            ~~~
        }
    },
```


## пути к файлам в порядке приоритета
ядро
```
modules/backend/layouts
```
плагин
```
plugins/zaviruha/backend/layouts
```
тема
```
themes/backend/layouts
```

## конфиг
плагин автоматически подключает новые пути для `layouts` если в файле конфига `config/cms.php` в переменной  `backendSkin` стоит скин по умолчанию - `\Backend\Skins\Standard::class`