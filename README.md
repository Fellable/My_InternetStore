# Мой пет-проект интернет-магазина.

Данная версия сайта - v.1 (на проде - v.9). Почему-то не очень люблю выкладывать свои проекты в открытый доступ. Данный интернет-магазин - адаптация и "оживление" html-шаблона "Karte" под php / vuejs.

Реализовано в версии v.1:
- То же, что в моём блоге: CRUD по всему, что нужно в админке - категории, посты, теги и тд. Авторизация Sanctum. Комментарии, лайки (счётчики на фронтенде к этому). Реквесты, сервисы (1, на проде - ~25).
- Добав



Что дополнительно реализовано на проде:
- Подключен VueJS3, реализован фронт через него
- Самописные слайдеры на VueJS3
- Переведён на Docker
- Подключен RabbitMQ, supervisor, запущен php-fpm через supervisor и тд.
- Отправка имейлов через Job's.
- Полностью переработан CRUD админки - есть статистика, правка фотографий, и тд.
- +middlewares, разнообразные api для фронтенда.  
- множество фильтров по цвету / цене
- корзина, возможность покупки вещей
