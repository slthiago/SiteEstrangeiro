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
define('DB_NAME', 'estrangeirodb');

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
define('AUTH_KEY',         'OH%u&KaWNSIh3ecSiullg,Z<.U!]Aa#+834c#CN(d.J>k]h  zHi|N;u3]xA+g-Q');
define('SECURE_AUTH_KEY',  '{WAET2_tyPut[2WawJyErs?SE^YI* O?Lu5W3yVv5G:I)D{RVj6}B8f^zfG7.{KW');
define('LOGGED_IN_KEY',    'o%BhiLI}oBKuIuyq^c51w&m%g!m J^?WdwF?Z~>j)mPKYnU$NF45A6(8u8CZ}KIw');
define('NONCE_KEY',        '[oe]>Cq4pM`1hBdWgxj9:/BXB?4nK(X=w=T9vTu.3S A)T#?I}E6%y]v1v(mpj4r');
define('AUTH_SALT',        'keD>hHOJz@{.d_:Dm2)m;~LIZF+5~{Mb,+&C?h@.[^B4|VFF4k@X1]bWtO.y|;[r');
define('SECURE_AUTH_SALT', '{}WCGg_:}~50-9ez1wrFp+th)vW}4k8/X~.Oe#[s>6sQf+b*_p(O33]Qv!Yr[6Lp');
define('LOGGED_IN_SALT',   'dz~7.~!!1XBPrL;%vSAD`Jpz]K]`5v-x=1D|iv|Xr#e+IyyX?a{=/:sJg~v(i6ut');
define('NONCE_SALT',       'azcM1!9ka>t{Uo%gZ<C 8i`hD:6P?UuBuZv`QJir_/hTt}Hl0wr])rvX{oJ(%u7H');

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
