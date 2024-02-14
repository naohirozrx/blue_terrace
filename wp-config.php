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
 * * データベース設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** データベース設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
if (strstr(@$_SERVER["SERVER_NAME"], 'localhost') || strstr(@$_SERVER["SERVER_NAME"], 'myapp.dev') ) {
define( 'DB_NAME', 'blue_terrace' );

/** データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** データベースのパスワード */
define( 'DB_PASSWORD', 'cielciel' );

/** データベースのホスト名 */
define( 'DB_HOST', '192.168.0.250' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );
define('WP_HOME', 'http://'.$_SERVER['HTTP_HOST']);
define('WP_SITEURL', 'http://'.$_SERVER['HTTP_HOST']);
} else {
	define( 'DB_NAME', 'xb858966_wp5' );

/** Database username */
define( 'DB_USER', 'xb858966_wp5' );

/** Database password */
define( 'DB_PASSWORD', '0r7k1chjce' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define('WP_HOME', 'https://'.$_SERVER['HTTP_HOST']);
define('WP_SITEURL', 'https://'.$_SERVER['HTTP_HOST']);
}
/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'YR.7~da9:-t?Mg}<4&XeA9)qW|/!1KC@CC_q<Wa>7OsS2Z3cR<CDDU|Hcp`2k<(Y');
define('SECURE_AUTH_KEY',  'ImA(7V#_QNf8cX/_+k|aN$NC|Ell@pfi?,gp8n>MD,+),QKr|`/UIHyxk(y981=r');
define('LOGGED_IN_KEY',    ']3JX!zS`p?2rJOGb(gM-7OTMmL[Pdv/3-M1?:-WC!3G;;i1`|ywi|Sm^wyR|.#{]');
define('NONCE_KEY',        'az~qbaEisu+EadJ9g9[+>O+0$?d`+.l`yNbZ5*Jc<hI<>r>PIc[6twb27#d8i2g2');
define('AUTH_SALT',        'R$=xCd;c^(xF BO|7_H/++;!42_*sE3q:|))z:f!vs6Xj:pEmxN}aynoyYCjWcXh');
define('SECURE_AUTH_SALT', '>|$CN]d4c[^,S{|r)B&PP6<dF-^?^sW,.NxJJYk9}dTq3|#2pB$g-W[wQ<>jq&}J');
define('LOGGED_IN_SALT',   'sm-`GH{u~AIfK3=Hkf.46}-NXQ,ad{!~p*Bk+c>v]r#Qf%@:-% V7`d6qyAvAYV/');
define('NONCE_SALT',       'w-b)),iIm9mMVLlr6VJEI3;kJFkzWw+Np++(sFW-3rD2$c2ZK|FgT?{YDIO+)8]B');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_antore_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* カスタム値は、この行と「編集が必要なのはここまでです」の行の間に追加してください。 */



/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
