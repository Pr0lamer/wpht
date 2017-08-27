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
define('DB_NAME', 'ht');

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
define('AUTH_KEY',         '^m_{<PGyrRwcmRXUW+reK6W[eu{$uc.plMmMX&DwS*:{5SXWZ(Q03{h68I%eH7`H');
define('SECURE_AUTH_KEY',  '2jQT:X;];e:[|}RjDnnGq ys]s{$* u;sDb;;jl15P>v/TUg?8dycP<OQ#(|h9F}');
define('LOGGED_IN_KEY',    '-H3]OSe{%F}|fNM?hrme~bh bD!#w5X#%#]U:)-#LDY6qR*-wH(;f{~,I~iqCx,?');
define('NONCE_KEY',        '^@H{9!LI?KYHh>V!5GiV}8?J&Nr;dnnCd->Lq={>&X6ChEM!mRi3/?]e i-eL0m1');
define('AUTH_SALT',        ']e]e}hOF}rj5|]<2[M7M B~/TZ%NY7OsT%? 2RKnaY(yR}y)Ttx]X@5Jy$qEy2l&');
define('SECURE_AUTH_SALT', '-NI/k**s>|fTD}z!lLXfr[XI CYCjzzZB50[~0cpdL~g(b%Cd $tolHNS_->/pA$');
define('LOGGED_IN_SALT',   '$rw8}l4tK@lI-,IGCgu+mpL7^v~0;U6TLasFUoz`!|3kaLmV|(}8ITX#<UIjD(a$');
define('NONCE_SALT',       '-L3sh#vz9myCTmuUlu2@!uMZD%Sd[7U)fbpKKrY91*P!1D;m*KG+W1YqyO}R3%>2');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'ht_';

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
