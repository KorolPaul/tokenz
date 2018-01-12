<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'unyson');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'l<YH$|PI6y-:Skw:bisR?Cpj5m4(GbJGW`2G*FwdI^E*f}pDCQ*QWZE2zN4@ NJ]');
define('SECURE_AUTH_KEY',  'TbtPsZL#w.wdk!G&UIh~ZpFh880? ~L&nDIN.9{fTA>gYn5pT]:LnZUKL*MlX2rC');
define('LOGGED_IN_KEY',    '^7P`bTbh9O~W2^=2_q.:0ddA/t%DIV+h};YIq#EHC{BxbVnkmD}Fn/85,}?32>d=');
define('NONCE_KEY',        '{jj&pmD[k&WBb)!Y&C#Ag)oUYNJk[:8n*q6g@ .tw]LYvy{Pf6W>_xwF~pjOTM9#');
define('AUTH_SALT',        'Yx0P[/h2Ln}n8eco>#8A{)XEZ)FCzgw#(6]~5{Pw@w|+257kZN%hB8I16^>RSitL');
define('SECURE_AUTH_SALT', 'MUGg_b44uYXGMRoN0~Z]!`7w<&B?4%yPg|S*W?@m?P=>>JrBg#HVnOclob/N5kJN');
define('LOGGED_IN_SALT',   '5/=[A9^!orJpPP7RS;MgH[q%2%||V<w+C[hpk6[0_&<+YW332{g`A<2@anZlI:I{');
define('NONCE_SALT',       '=3qxcUO!Vgm5Bmof:sme`<B +)CD5cZLbUc4u8G?M$2D>EYFmc32*2Lbfk+&7SG<');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
