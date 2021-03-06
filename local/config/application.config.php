<?php
/**
 * ----------------------------------------------------
 * | Автор: Андрей Рыжов (Dune) <info@rznw.ru>         |
 * | Сайт: www.rznw.ru                                 |
 * | Телефон: +7 (4912) 51-10-23                       |
 * | Дата: 15.12.14
 * ----------------------------------------------------
 *
 */
return array(
    'modules' => [
        //порядок подключения модулей важен
        // их конфиги мержатся в один и некоторые поля могут быть перезатерты следующим подгружающимся
    ],
    /*
     * Инструкции для запуска крона
     * Подбирать время, чтобы не было одновременного запуска задачь
     */
    'cron' => [
        'tasks' => [
            'код события крона' => [
                'event' => 'имя события для запуска',
                'minute' => 5,
                'hour' => 2
            ],
        ],
        // Использовать в локальногй конфигурации для разрешения прямого запуска событий
        // todo на продакшене здесь закоментировать
        'direct' => true
    ]
);