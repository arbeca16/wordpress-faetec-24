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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'A`i8*2p`5xMI[IkmnU~GrZH}[<~hnC&oPR9#P4!B3dvEOCRU-0#{I48/sAIIyWJ~' );
define( 'SECURE_AUTH_KEY',  'AXEL3CByneZI}pO@OThR[B;/%rQ=q9(Y#9.R1&uA!dr[]XJ!Um`s>&6n-qvnj#$,' );
define( 'LOGGED_IN_KEY',    'M-Ol&0/ }m}Nsa.ck*An|LHK3yJ)xAKNB/<Yi0i{g*zv%Lk}FgjbPu7geOpyDr9=' );
define( 'NONCE_KEY',        'wO;k^q0kbW^{{)FG0X]j@V4?::EZ}!X6&Pf*v[GaR6Z_r~l-%xS^,M_rk HeI?Z~' );
define( 'AUTH_SALT',        'I)-G|U&rg,i8b52z*2)B;&gFuC4[cVF?UU[B#ax3;,T@%.y(766uI{~:KkCPVwoO' );
define( 'SECURE_AUTH_SALT', 'jvzZd70.[&9HT][qnJD#,V,@1=a},T,7+R%z^YQq@- k;l DCv9.knUr{i1pSO:c' );
define( 'LOGGED_IN_SALT',   'FhVl^MXAUBwCsEG^EcLwArE7>#GOt6t%A{f)c@4f9)CXY+@!)BwkFm?;VeZl?XTQ' );
define( 'NONCE_SALT',       'mw-{:ND-QH$0wrj0tc_6c[bph_?h,32=K`O-U]^_5v$)k37P7E)Ipb<<%Zl=R;92' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
