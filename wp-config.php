<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings
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
define( 'DB_NAME', '27school' );

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
define( 'AUTH_KEY',         'NMs,pe*Ys~+9*/=,:!6j_ bXql<vcnCpW*becrP}I@<RR]5+*sz@r}$<A6`^9GM;' );
define( 'SECURE_AUTH_KEY',  ' wF/q*wb5+XeS`}{<iNUl{?/NiT,6Cz?JXFSt$>S&[8KM[|=U:6|v_OLl%X>urIv' );
define( 'LOGGED_IN_KEY',    '@|pC=JRFbA,gDJ{e?9S|!;sqy;&/7/S9;;ryXA]Iz|HDfy`Qgt1c!zD%PAi|WCjN' );
define( 'NONCE_KEY',        '1{Svw|y,+qXJa<~7N4EI83 p[/Lb>%=P4BUHg8~y-y1jJk5c3UKOwZA1OGxnQ}SX' );
define( 'AUTH_SALT',        'CoB>#e|sHJ/5Wd2+(/D2siSO OVw^=qJJ$W*y,+TW#Vg4_d)1m=Hf@TfiN}P6?kc' );
define( 'SECURE_AUTH_SALT', 'H(QQ<~d7Q*975e~7vG^ZM^G#yo*Xvqaat]JoGln6E^s9mDqv-gBKNZyh?mqxX|< ' );
define( 'LOGGED_IN_SALT',   'p=D?kw]cNEa ?prx![qv:WJ5X4}&dT5O)xPa`B;EB?uA%f8Uih*4D9IZDGwg@@B#' );
define( 'NONCE_SALT',       'Wi5?p`)zBUH.VJ)1R@S%rve2N#<z|uc{uk|Y=]-<]`27)|6VR)3C>=$3{41T-G-k' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_27school';

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
