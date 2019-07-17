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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wpdbsitemoderno' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         'ug mdlI==uQhDEPHr3.AB`_,eoLmWP2-D~Wi(>DXX?eY63hD_9TNAfTq_gLk|SCR' );
define( 'SECURE_AUTH_KEY',  'f<3aAgO3mBP?X8%!% lKs-]c. KR%%UnqXDGA|wwIGSW@{P|U+_WAm-KJW5Bqqo)' );
define( 'LOGGED_IN_KEY',    'bl$9v)KNzjJ%HQ|=n<b&[v)(yCRcDO^44fYRDXB)26pgX}IOD#+b%EKq;4Hbd`-I' );
define( 'NONCE_KEY',        'SD0btkn:dp4/7g=5jbzYuT`Axhyc+lR03rU/<4+yX<A  )}9yMtE0=LY|SJwt~l8' );
define( 'AUTH_SALT',        '!)nM&mHJxS ,xfbR1J>R^3]7=]Z*B(ch7A@n_9ieK#2y$WKM/H!08e5=X{9l!J!D' );
define( 'SECURE_AUTH_SALT', 'h1@yRh;0P4=xeMt&W)8x <4Yj67,{<7&D0<Bb&g5qo5<cAoyU0+U.=>-pJ4v3TmK' );
define( 'LOGGED_IN_SALT',   'XqwGA|6OHn<-Rc>=[[<k2qF!R&ps bF<bEs)3tx.Zn#r-z4V9sq,B0~:;HpNJRa[' );
define( 'NONCE_SALT',       '9cG= I@)h{g#*PhaS2Y &o=WiYhdsGt~=:7zCorGw[)~6 6^`4v{bz<R?HF~^tBC' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wpsmo_';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
