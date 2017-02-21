<?php

return [
    'addkeys'                       => 'Добавить ключи',
    'addkeys-placeholder'           => 'Добавляйте по одному ключу на строке без префикса группы',
    'addsuffixes'                   => 'Набор суффиксов',
    'addsuffixes-placeholder'       => 'Добавляйте каждый ключ с суффиксом строки, указанном здесь',
    'auto-fill'                     => 'Автозаполнение',
    'auto-fill-disabled'            => 'Заполнение...',
    'auto-prop-case-disabled'       => 'Применение...',
    'auto-translate'                => 'Авто перевод',
    'auto-translate-disabled'       => 'Перевод...',
    'cached'                        => 'Кэшированные',
    'changed'                       => 'Измененные',
    'check-all'                     => 'Все',
    'check-none'                    => 'Искл.',
    'choose-group'                  => 'Выберите группу переводов',
    'choose-group-text'             => 'Выберите группу переводов для редакции. Если нет групп в списке, обратитесь к вашему веб-админу.',
    'cleardstkeys'                  => 'Стереть ключи',
    'clearkeys'                     => 'Стереть ключи',
    'clearsrckeys'                  => 'Стереть ключи',
    'clearsuffixes'                 => 'Стереть суфф.',
    'close'                         => 'Закрыть',
    'confirm-delete'                => <<<'TEXT'
Вы уверены, что хотите удалить переводы

:group

из базы данных? Любые изменения, которые не были опубликованы в файлы переводов будут потеряны.
TEXT
    ,
    'confirm-delete-all'            => <<<'TEXT'
Вы уверены, что хотите удалить все переводы из базы данных?

Любые изменения, которые не были опубликованы в файлы переводов будут потеряны.
TEXT
    ,
    'confirm-find'                  => 'Вы уверены, что хотите просканировать папки приложения? Все найденные ключи перевода будут добавлены в базу данных.',
    'copykeys'                      => 'Скопируйте',
    'db-connection'                 => 'База данных',
    'delete'                        => 'Удалить',
    'delete-all'                    => 'Удалить все',
    'deleted'                       => 'Удаленные',
    'deletekeys'                    => 'Удалить ключи',
    'deleting'                      => 'Удаляю...',
    'display-locales'               => 'Рабочий набор',
    'done-publishing'               => 'Выполнена публикация переводов для группы <strong>:group</strong>.',
    'done-publishing-all'           => 'Публикация переводов для <strong>всех</strong> групп завершена.',
    'dst-preview'                   => 'На',
    'dstkey'                        => 'На',
    'dstkeys'                       => 'На ключи',
    'dstkeys-placeholder'           => 'Добавляйте по одному ключу на строке с префиксом или без префикса группы',
    'enter-translation'             => 'Редактируйте перевод',
    'export-warning-text'           => 'Предупреждение, переводы не видны, пока они опубликованны вашем админом.',
    'find-in-files'                 => 'Сканировать приложение',
    'group'                         => 'Группа',
    'import-add'                    => 'Добавлять только новые переводы',
    'import-all-done'               => 'Выполнен импорт, обработанно <strong>:count</strong> переводов. Перезагрузите страницу, чтобы обновить группы.',
    'import-done-head'              => 'Выполнен импорт, обработанно',
    'import-done-tail'              => 'переводов. Перезагрузите страницу, чтобы обновить группы.',
    'import-fresh'                  => 'Удалить все, потом импортировать',
    'import-group'                  => 'Импорт',
    'import-group-done'             => 'Сделан импорт группы <strong>:group</strong>, обработанно <strong>:count</strong> переводов. Перезагрузите страницу, чтобы обновить переводы.',
    'import-groups'                 => 'Импорт все',
    'import-replace'                => 'Заменить существующие переводы',
    'in-place-edit'                 => 'Редактирование на месте',
    'interface-locale'              => 'Интерфейс',
    'key'                           => 'Ключ',
    'keyop-count-mustmatch'         => 'Количество ключей для источника и получателя должны совпадать',
    'keyop-header'                  => 'Результаты операций над ключами',
    'keyop-header-copy'             => 'Копирования ключей группы <strong>:group</strong>:',
    'keyop-header-delete'           => 'Удаления ключей в группе <strong>:group</strong>:',
    'keyop-header-move'             => 'Перемещение ключей в группе <strong>:group</strong>:',
    'keyop-header-preview'          => 'Пересмотр операции по ключам для группы <strong>:group</strong>:',
    'keyop-need-group'              => 'Операции над ключами требуют группу',
    'keyop-need-keys'               => 'Не указали ключи для операции',
    'keyop-no-match'                => 'Нет соответствующих ключей.',
    'keyop-wildcard-mustmatch'      => 'Подстановочный символ * должен быть первым или последним символом, и если он присутствует, должен быть использован на оба источника и в том же положении.',
    'keyop-wildcard-once'           => 'Подстановочный символ * может появиться в ключе только один раз.',
    'keyops-not-authorized'         => 'Ключевые операции не авторизованы на этом сервере. Обратитесь к веб-админу чтобы изменить этот параметр.',
    'keys'                          => 'Ключи',
    'loading'                       => 'Импорт...',
    'locale'                        => 'Язык',
    'mismatches'                    => 'Не совпадающие переводы',
    'missing'                       => 'Отсутствующие',
    'missmatched-quotes'            => 'несоответствующие или отсутствующие кавычки в строковом атрибуте :string',
    'movekeys'                      => 'Переместить ключи',
    'powered-by-yandex'             => '<a href="http://translate.yandex.com/">Powered by Yandex.Translate</a>',
    'preview'                       => 'Превью',
    'primary-locale'                => 'Первичная',
    'publish'                       => 'Опубликовать группу',
    'publish-all'                   => 'Опубликовать все',
    'publishing'                    => 'Публикую...',
    'reload-page'                   => 'Перезагрузить Страницу',
    'reset-usage-info'              => 'Сброс информации об использовании',
    'search'                        => 'Поиск',
    'search-done'                   => 'Сделал поиск переводов. Источник ссылки обновлены, добавленно <strong>:count</strong> элементов перевода.',
    'search-done-head'              => 'Сделан поиск переводов, найдено',
    'search-done-tail'              => 'переводов.',
    'search-header'                 => 'Найдено результатов: :count',
    'search-translations'           => 'Поиск переводов',
    'searching'                     => 'Поиск...',
    'set-usage-info'                => 'Hабор информации',
    'show'                          => 'Показать',
    'show-all'                      => 'Bсе',
    'show-changed'                  => 'Изменненые',
    'show-deleted'                  => 'Удаленные',
    'show-empty'                    => 'Отсутствующие',
    'show-matching'                 => 'Показать подходящие',
    'show-matching-text'            => 'Regex для ключей',
    'show-need-attention'           => 'Нуждающих внимания',
    'show-new'                      => 'Новые',
    'show-nonempty'                 => 'Скрыть отсутствующие',
    'show-source-refs'              => 'Показать Ссылки На Источник',
    'show-unpublished'              => 'Неопубликованные',
    'show-usage-info'               => 'Показать пользование',
    'show-used'                     => 'Использованые',
    'source-refs-header'            => 'Источник Ссылки для',
    'src-preview'                   => 'От',
    'srckey'                        => 'От',
    'srckeys'                       => 'От ключей',
    'srckeys-placeholder'           => 'Добавляйте по одному ключу на строке с префиксом или без префикса группы',
    'stats'                         => 'Панель мониторинга',
    'suffixed-keyops'               => 'Ключевых операций с суффиксами',
    'suffixes'                      => 'Суффиксы',
    'title-cancel-changes'          => 'Отменить изменения',
    'title-capitalize'              => 'Использовать текст',
    'title-capitalize-first-word'   => 'Капитализировать первое слово',
    'title-clean-html-markdown'     => 'Чистый HTML уценки',
    'title-convert-key'             => 'Преобразование перевод ключ к тексту',
    'title-generate-plurals'        => 'Создания множественных форм',
    'title-load-last'               => 'Загрузить последние публикации/импортной стоимости',
    'title-lowercase'               => 'Текст в Нижнем регистре',
    'title-reset-editor'            => 'Сбросить содержимое редактора',
    'title-save-changes'            => 'Сохранить изменения',
    'title-simulated-copy'          => 'Копирование текста в буфер обмена имитируется (обновить страницу очистить содержимое)',
    'title-simulated-paste'         => 'Вставить текст из буфера обмена имитация',
    'title-translate'               => 'Перевести',
    'total'                         => 'В общем',
    'translating-locale'            => 'Перевод',
    'translation'                   => 'Перевод',
    'translation-manager'           => 'Контроль переводов',
    'translation-ops'               => 'Помощники перевода',
    'translations'                  => 'Переводы',
    'user-admin'                    => 'Админ. Пользователей',
    'user-email'                    => 'Электронная почты пользователя',
    'user-id'                       => 'Ид. пользователя',
    'user-locales'                  => 'Локали изменяемые пользователем',
    'user-name'                     => 'Имя пользователя',
    'wildcard-keyops'               => 'Подстановочные операции с ключами',
    'zip-all'                       => 'Zip все',
    'zip-group'                     => 'Zip группу',
];
