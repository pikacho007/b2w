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
define( 'DB_NAME', 'bootstrap2wordpress' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'bootman' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'SX9DW5jxvqYhy2at' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ',v=Z1g37bTcH2rIt+[&I}j`9v_iO>A7yB{^Bw d!yZxcTL1CKkmT=8VMt;~29njy');
	define('SECURE_AUTH_KEY',  ' ;MYD.ErFBo2Vbvr85^2_@tf,+9N.Yu-1BWQ<2,uKKb=H?kg28P1rrx>A|%reA= ');
	define('LOGGED_IN_KEY',    'M5bbbdMSg`VvG+b`=0+q1el,oepP7itLkIE62GHN+q`{-_#5b,&qIMGm:ZpXTf22');
	define('NONCE_KEY',        '->cg6W#P(|Tq|5)i4hPrL{83~G%,69+R>T<&Pv?iKk,ObUk#l=MKb+Om0)}+4-jD');
	define('AUTH_SALT',        'K&=x4t(3cJYHyjNo6j_n>?q9WWrg|g}YFW+r4Rp=JToG+;dfn`2y7=VV|Lg^+#np');
	define('SECURE_AUTH_SALT', 'FE`E#$R@KR;E U}RHop?PIs449+!^pFaQB]sD+Y%z|n~-gn$}>=?|00lvOfg}d-$');
	define('LOGGED_IN_SALT',   'I2^%2G`b5@!UE-R_#$%p}<^Ift3-u:X:ut.+y!Z:z_`*7EN-R51s$<1BRr;niDBl');
	define('NONCE_SALT',       '|GSJOhRW*KP7-S8rjLuOd$[49 }w<alcxwl}s^5ch)k,vR+t]crZT%eX2Q *1f97');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'dbbs_';

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
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
