<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'wordpress');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'wp');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'igap');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8mb4');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'vaEeo6{BY/1sYr1&E`&]:Xg3},UWCQOf|AbkyTSB8.6=VQmN=<]eo.81j#~?3l<|');
define('SECURE_AUTH_KEY',  '2.~.Fkh?l-)zyRP/.6Li,Wz{Xm~N~Gtq{TM)hr*O;R}LneaD#LV>9V&jr+v3$yIl');
define('LOGGED_IN_KEY',    ')FY<b/HFz$UfEBL6lCkYD8eK=7J B8~n>/#?wkMDAz6U?vgW|</~1ZD!AUJl}G/A');
define('NONCE_KEY',        'c;9j>tH`kV|JVD*z?Mq>(~P#Z.|.DKI19zvPV<_2A%HbP-z.!bJ^sPeOOOi!f<s#');
define('AUTH_SALT',        '#?M)-L48v,9PtK_NE)[CLcMz3c@)Nm2ZVfB8XQ/YWpi/Zq0!B>/6Bs`s7[U0H{$%');
define('SECURE_AUTH_SALT', 'sina>6{t](>R>GuvX|5NBjem2Qe^4dP0#{,}T.d0[pFh@64&kKQ!J*VXyNO*r{i1');
define('LOGGED_IN_SALT',   'Y)!{v,Jck*#oG)mGuY]q%P}]~ws/<V;X!21hdi<{VUCTb,[iR@:R -{ zm2/nuYE');
define('NONCE_SALT',       'iA$s^RYMoEIkY?uq/*(9sp&E[<U.OH2^?6j2HIa@4:>mo6hm8|~=J[K?}u@JNwu8');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
