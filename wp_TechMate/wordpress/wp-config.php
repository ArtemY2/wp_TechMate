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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'Se<`[KTF2/(8dpP2B$cWV%:gL(6<0!uYBLq~Ir_x2Hs[3+_96I-[MzW+<+hjS>iT' );
define( 'SECURE_AUTH_KEY',  't<CF}1y~Pw;EX}qF-W%UT_E^0$eaJt1:`eA~Fv5k?p`XETPQ+xyi1hX.%/F0>)s,' );
define( 'LOGGED_IN_KEY',    'k;^q)Bn>|Ca?7&7x=9`qNB&v(oSRgAxhZ2Ox{Omv0Q={ssge4nvY>83u5bp*p2C2' );
define( 'NONCE_KEY',        'I_cmu6>=U%ep%e|C-#EzGQ>*?X6yEV{F)xnC7>P3&c/^D2zK&7H9H00yHVzD$nS!' );
define( 'AUTH_SALT',        'P!0h8AUf`#8UEH4,ht2s?8iWpTWTs+Bb^?HmezAwg4VN*Uiof*ZOCjbVAP?`qF)_' );
define( 'SECURE_AUTH_SALT', '<u`gg%a[k}j_vO|FHjH9!fLGe_taJrY:y;NemZbq,}&H>G+4?`qco$61^P-~zSJ8' );
define( 'LOGGED_IN_SALT',   '=02M.U</b{.U.W[O2<W3g]r E=B}I;IEn+^!n wp4m$oL=@uqHH.P8ejr8V 4Oc2' );
define( 'NONCE_SALT',       'X=m8O5<jzPf(lkX&I;[Wi_W<=.2*>!Q#F2zIxG4$9KmhP76j?q]k]DhG]Ir,5X)o' );

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
