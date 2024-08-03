# Acvocat 
Сайт-визитка для адвоката
## Структура проекта
- FRONTEND
  - [HTML](src/main/resources/templates)
  - STATIC
    - [CSS](src/main/resources/static/css)
    - [IMG](src/main/resources/static/img)
    - [JS](src/main/resources/static/js)
- BACKEND
  - [Настройки проекта и его зависимости](pyproject.toml)
  - [Тесты](src/test)
  - [Директория базы данных](src/main/resources/database)
  - [Настройки проекта](src/main/python/ru/krovlDem/acvocat/acvocat/settings.py)

## Запуск проекта
```shell
poetry install
```
```shell
poetry update
```
```shell
poetry shell
```
```shell
poetry run python src/main/python/ru/krovlDem/acvocat/manage.py runserver
```