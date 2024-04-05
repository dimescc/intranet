<?php

/* Domain-Name des Solr-Servers */
define('SOLR_SERVER_HOSTNAME', 'solr.dimes.cc');

/* Ob im sicheren Modus ausgeführt werden soll oder nicht */
define('SOLR_SECURE', true);

/* HTTP Port zur Verbindung */
define('SOLR_SERVER_PORT', ((SOLR_SECURE) ? 8443 : 8983));

/* Benutzername für HTTP-Basisauthentifizierung */
define('SOLR_SERVER_USERNAME', 'admin');

/* Passwort für HTTP-Basisauthentifizierung */
define('SOLR_SERVER_PASSWORD', 'changeit');

/* Zeitüberschreitung bei HTTP-Verbindungen */
/* Dies ist die maximal zulässige Zeit in Sekunden für den http-Datenübertragungsvorgang. Standardwert ist 30 Sekunden */
define('SOLR_SERVER_TIMEOUT', 10);

/* Dateiname eines PEM-formatierten privaten Schlüssels + privates Zertifikat (in dieser Reihenfolge verkettet) */
define('SOLR_SSL_CERT', 'certs/combo.pem');

/* Dateiname nur für ein PEM-formatiertes privates Zertifikat */
define('SOLR_SSL_CERT_ONLY', 'certs/solr.crt');

/* Dateiname für einen PEM-formatierten privaten Schlüssel */
define('SOLR_SSL_KEY', 'certs/solr.key');

/* Passwort für PEM-formatierte private Schlüsseldatei */
define('SOLR_SSL_KEYPASSWORD', 'StrongAndSecurePassword');

/* Name der Datei mit einem oder mehreren CA-Zertifikaten, mit denen der Peer verifiziert werden soll */
define('SOLR_SSL_CAINFO', 'certs/cacert.crt');

/* Name des Verzeichnisses, das mehrere CA-Zertifikate enthält, mit denen die Gegenstelle überprüft werden soll */
define('SOLR_SSL_CAPATH', 'certs/');

?>
