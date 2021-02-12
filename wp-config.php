<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'mytheme' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'fc]Kj!pOdLWb<K5uL%gO+$+ZlEovJE=T7fApTvqZKOyHw`VYs1D+ qqeSkT#Y2x[' );
define( 'SECURE_AUTH_KEY',  'z>]G>|rK{iFI)~~sTnm(3LnQWN#K_XRWRLOD%)xDOYy$oglTN}?ZnQnxMF:|W>PC' );
define( 'LOGGED_IN_KEY',    'eRHYsk(]J+{,Og7Tic30.M9?sI$I6B.9@207D<i2lyS*%fK;sc-w$ u@z^Xv/<$9' );
define( 'NONCE_KEY',        'u&4ImM{_@x$^oS)7x_?.A_Sc(O`WsUFQK+wcAsRePn!B.EfWe:BLt+hNc8@s%UZl' );
define( 'AUTH_SALT',        '^j_n8g =1P+6#hKTuvbw<*&ibcqn<SzG-t7hS`m$ogb{~;<QWIdT<UT$a93yQ?mQ' );
define( 'SECURE_AUTH_SALT', '>YZ5a4<~Zyk$Rz>[Be<0T!yLx<Y(SZ%QXiW(V(|%}[]%hJW.KU7U,=g+xRb%b<*<' );
define( 'LOGGED_IN_SALT',   'UE{)]J<GR.1]wMKfQR^Mt/(O:ET77?R!odi%}hVKl|{geW#`H1bYpGv(+A.+&^d}' );
define( 'NONCE_SALT',       'B,MEbPs=dxf:8T WhtTW{0{CUv.|hZ4OH%S&{n$s@?*{ka|PsOAM]s%v8Fru,S}|' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'mt_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
