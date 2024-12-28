# wn-backend-plugin

добавляем приватный репозиторий к проекту
```bash
composer config repositories.zaviruha-backend git https://github.com/zaviruha/wn-backend-plugin.git
```
устанавливаем
```bash
composer require zaviruha/wn-backend-plugin
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