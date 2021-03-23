<?php
define( 'WP_CACHE', false ); 
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
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
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
define( 'DB_NAME', 'bighappy_amt3m' );
/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'bighappy_mdku4' );
/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'j5dps05tl6' );
/** MySQL のホスト名 */
define( 'DB_HOST', 'mysql504b.xserver.jp' );
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
define( 'AUTH_KEY',         'R4Pic6UQ4)ty$~/f`:KhfW@Zyi9<v0+3pvLD%HU/ldhKii~V T_2`0s[H{#)1]Pu' );
define( 'SECURE_AUTH_KEY',  'w[[$onqPlo]{C0AQRoRZ}<]`6q!6}z#Sa*5|A[3yjE4QsjjQ7kFHTYOukYH6N4B2' );
define( 'LOGGED_IN_KEY',    '#Z{>&1HW^yt8]eN#GY*wn_[kRwf`D8~M_GEI>G+t >USiViP0%#Lcf,@fBXy*7Ln' );
define( 'NONCE_KEY',        'iS2(p^&IKrr5O;<!4]W08$UR!&B+NnRJ_YT7H7^b-p2|&c%Y{cW[{1LNp2^gW-mH' );
define( 'AUTH_SALT',        'H3tOe4HaS!PE!7Y-uu{eP1YVO=)q8kB.d[JD_G/trqEWkJ5dfS-NSD;e.a8noSj;' );
define( 'SECURE_AUTH_SALT', 'sn!oK6~<{b%YXrPn2ca(PBw55JB/=cFIH*][LM+W<c!`dyZxYtbedhH}cA.O5mKZ' );
define( 'LOGGED_IN_SALT',   'R3C|1w,),V+&*26<~^EWIu_2!qd30@VhGEQS3$wKCB|_V{dqRh$LyI$9//L%@h-h' );
define( 'NONCE_SALT',       'NcgANP9@t&^*q3_+JW<Ec;e{[JQO7`~4X0udeVGub:dLo?3F-B)?9#{NaqK;}4c#' );
define( 'WP_CACHE_KEY_SALT','OA,3 ~6z%#@|+wLq9w7!o@!{V4<0}BkZ=[xXoT~``<B?_H%+}E.cUrmS5=;fSlA#' );
/**#@-*/
/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';
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
/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';