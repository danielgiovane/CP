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
define( 'DB_NAME', 'cpbanco' );

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
define( 'AUTH_KEY',         '66TC{vEwI7OXJqPtk4#:iLybZ4!!n_?-u.4,V0bV OjzE7Y [O;awz=fMlBBti}8' );
define( 'SECURE_AUTH_KEY',  'ta`]~2g&_IIDro8jc~Tx6TyH o%s[u>F{LSI]EVH1D*0#I0s+7+&y[+!L&/~|%o]' );
define( 'LOGGED_IN_KEY',    'U4iKyoo:S*`Z?=;)G&R1$/TRBmGAZj!<ezBv#X)w*7vc2,~*=+V^BK!3;i+P3d U' );
define( 'NONCE_KEY',        ' NX^v82@h1{+y_3=`o~`lb#O]*1p$ETql@hkPFbAJoeuAM6eWcuakbV@Ha/[<2QS' );
define( 'AUTH_SALT',        'Hb#-m=@CBD7-3brL8O@?XGvL}zLtsozC]`mA;Yf2{ qtVw3kJG-({-yibp5onBu3' );
define( 'SECURE_AUTH_SALT', ',v@zPBK=zeLWW#L672}zw>]Keo:m>{Z#`-eLH5}_Nixh@ORy1Si><:/X&X]1[%T~' );
define( 'LOGGED_IN_SALT',   'dEp8o97E@=#=f. NQ#7DH3S~=[H]r8<Te)80{&VD>!|,r3#qC55-+6Rm6/^ax^^*' );
define( 'NONCE_SALT',       'lIDK#P;cYe~2q,tx0<:C/:hF>kYApI?SV91oJv.?D-6?7k$ceLUE+YTn@kk-D(c0' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wpcrs_';

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
