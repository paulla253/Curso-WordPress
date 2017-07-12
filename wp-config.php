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

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'cursoWord');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '<&Q>+9onZ@G%49j*d07c[1t!-zcD`>`V7q@K6<l+pzDB!yTss](8ZQt>s2=%&vZ1');
define('SECURE_AUTH_KEY',  '[|72Zpz6GU!V0Km=N_H1gt*dc{pD~W9y?|zHS-rP1S:oWk%kLrOqo#<!R,-ccHWL');
define('LOGGED_IN_KEY',    'J84kAb(Ot+m.52qQz76?-X?JU;[+qa15~Q}/z<ptY@|F N]@>MONPCd&`uSz~r|>');
define('NONCE_KEY',        '9Z1:,7|F-%]OA.I4$g4OP`,27Q0gL94Ohh.aW0u6&0(OoZCrI/ji7<X@YbeBUbd%');
define('AUTH_SALT',        'Nz6J*)Wz.B/GVXH75hlzWnNs1b$lbgT_Rf4xT?e 9m9{bxa#1Km.I1>:1TR_P8{l');
define('SECURE_AUTH_SALT', '%]z0_V&tKq3Xzuf0RinLwdFIEuQ.#x*CBk}Qo}+$&T>o@VLfn go,E$mbumzWy<U');
define('LOGGED_IN_SALT',   'Wi!~x*Sgq19.k;)o(MhKj.3t9*.h_q-WCIp$7G6xjDLYV%gsqD{)Q K8]Fnxs#@/');
define('NONCE_SALT',       'Z</10p+uv<L*%?l}bzN1_Xpeg51&6/Z:.ae|l8Rk2U!PGzxFIi(0p)26H?0buHm|');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
