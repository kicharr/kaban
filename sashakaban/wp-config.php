<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'automain' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '7mvEp^=!x<Zi$&P>D<kFA<r.lkQZ8WsWi6LC=A`%,H`qIn|,t)*%+09}ZQerQB;h' );
define( 'SECURE_AUTH_KEY',  '.*;FyBTF<b;xej=2_w-7YP1Jig#VI.<Y9s/m`SQXn(Y1p&MA~8o&.J/0O~EY f/P' );
define( 'LOGGED_IN_KEY',    'USfuP0Te?2|2ek]i37WY4TRpdF3Oak$}byg !=;m=wR{:>1,m;;:AjjyL-,yOUld' );
define( 'NONCE_KEY',        'bcxlUcj8RCS~AY>$G-wu0NIYhw]/6hk~vOj%2~]$bkrdpeg=$G+R0ue.8zQ8m3.(' );
define( 'AUTH_SALT',        'PhC40+L9UV6&qM49Gp-tjsliiH1h9KFONln]y&QKghjpz+6R5q>.%c]r?QNt9rfH' );
define( 'SECURE_AUTH_SALT', 'G=YAXCw2.]#,=gHmXuT(@QF-ci~j70W!&o}*Xxssk!$a{#DeRH]na~y;_!AC1p^i' );
define( 'LOGGED_IN_SALT',   'x&U@&tds{IlML*i@Oy&47;6]o1|t#mHJ1{aur#Z_{.w)n(r!Cx^ y__,;XqS<Ci.' );
define( 'NONCE_SALT',       '1gi)u9m?QE+#uxW6<!fr@of}gjxc.L ,JYyvrh.*t>E<OSBE1,/t5%RnWk:enGj]' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
