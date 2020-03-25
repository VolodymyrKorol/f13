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
define( 'DB_NAME', 'f13' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'mvk^A#iag%Z-;OL1cqSO*-pqaz_4]x>vB0-t5!UC%ny|BhXo>_UN^A0@|RL=X4Ii' );
define( 'SECURE_AUTH_KEY',  'g88$p,iMEwn~X+%.!f>:S:,I~&fky!)iqanbog}ecJ5{*(Vf7r ZPNZ/7;-eFTO>' );
define( 'LOGGED_IN_KEY',    '<KfS( &%8blqm&WJpPXX79BQ6>,wS,/nV&I<g]VKO8kJE%T?68ZtOKK<^SjcHmpu' );
define( 'NONCE_KEY',        '.zqO&ncRnEmef`&1F*Wy4B5ySVKa&* 6m(oR,G#r4ANA2w- ;mX&U]cx)2e`_rSB' );
define( 'AUTH_SALT',        'fok1Fut 5S S~o7uux6}wS89#I`j~p)Pr Owo=$gAd_xDy x@8*{A3!9z-_U+Z~=' );
define( 'SECURE_AUTH_SALT', '#2xb1M?^,+izT2(F{X-XqqBY)Y6L<1fTnKM~pLyHoP/(!{x>+Q@.a!^4k5RV:Ldp' );
define( 'LOGGED_IN_SALT',   '`!J;(3Cgn#NTVdQTslxbeKrK_0KT$7@wzpfI`r-(aDZ]4#9Gy?yN[<]AIIeJK(b5' );
define( 'NONCE_SALT',       '4[Gt(|9:Kj=u-`u:{!v8F,n}X>5HrnZCodE6a[oL#kVO_8:,AY6n~O$.$Yq<MF5b' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
