### Helpers command for Codeception
```bash
# Домен приложения которое будем тестировать 
echo "192.168.1.61    lib-yii2-crm.local" >> /etc/hosts

# Необходимо его прописать в скрипте в PhpBrowser.url
tests/Acceptance.suite.yml

# Создаем алиас для удобного использования Codeception
alias cept="./vendor/bin/codecept"

# Подготовка Codeception к начальной настройке
cept bootstrap

# Пересборка среды Codeception после изменения конфигов
cept build

# Запуск тестов
cept run

# Генерация скрипта для приемочного теста
cept generate:cest Acceptance SmokeTest
```
