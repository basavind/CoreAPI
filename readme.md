# Структуры
## Material

Структура материала, является контейнером для слайсов. Поля:

* _id_ - идентификатор материала, числовой, обязательно
* _name_ - имя материала,текстовое поле, обязательно
* _type_ - тип материала, текстовое поле (пока это может быть субтитры, Текст, Презентация), обязательно
* _link_ - ссылка на оригинал, текстовое поле, необязательно
* _additional_ - дополнительные параметры материала, сериализованный JSON объект (например для видео ссылка на видео и на сабы), необязательно

## Slice

Структура слайса материала. Поля:

* _id_ - идентификатор слайса, числовой, обязательно
* _material_id_ - идентификатор материала, к которому принадлежит слайс, числовой, обязательно
* _content_ - JSON объект с параметрами (отличными для каждого типа материала)

#REST Scheme
## Material

__GET /material__ - список “залитых” в платформу материалов

__POST /material__ - создание нового материала, параметры

* _name_ - обязательно
* _type_ - обязательно
* _link_ - необязательно
* _additional_ - необязательно

__GET /material/{material}__ - возвращает объект Material

__PATCH /material/{material}__ - апдейт объекта Material

* _name_ - обязательно
* _type_ - обязательно
* _link_ - необязательно
* _additional_ - необязательно

__DELETE /material/{material}__ - удаление объекта Material (может и не понадобится)

## Slices

__GET /material/{material}/slice__ - получение всех слайсов исходного материала

__POST /material/{material}/slice__ - создание нового слайса, параметры

* _id_ - необязательно
* _material_id_ - обязательно
* _content_ - необязательно

__GET /material/{material}/slice/{slice}__ - возвращает слайс материала

__PATCH /material/{material}/slice/{slice}__ - апдейт слайса материала

* _id_ - необязательно
* _material_id_ - обязательно
* _content_ - необязательно

__DELETE /material/{material}/slice/{slice}__ - удаление куска материала 

# Установка

## Зависимости

* Composer
* PostgreSQL

## Процесс установки

1. git clone https://github.com/kursomir/CoreAPI.git
2. cd CoreAPI
2. composer install
3. cp .env.example .env
4. Настройка окружения в .env:
  * Настройка подключения PostgreSQL
  * Установка уникального ключа (APP_KEY)
5. php artisan migrate

# Деплой

1. git pull
2. composer install
3. php artisan migrate
4. Перезагрузить php для сброса кэша

# License

Kursomir CoreAPI is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
