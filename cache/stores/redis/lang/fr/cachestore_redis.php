<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Redis Cache Store - English language strings
 *
 * @package   cachestore_redis
 * @copyright 2013 Adam Durana
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['ca_file'] = 'Chemin du fichier CA';
$string['ca_file_help'] = 'Emplacement du certificat Dossier de l\'autorité sur le système de fichiers local';
$string['clustermode'] = 'Mode groupe';
$string['clustermode_help'] = 'Activer le mode cluster va exécuter la fonction Redis Cluster, permettant à votre serveur de servir plusieurs serveurs pour traiter simultanément des requêtes concurrentes.';
$string['clustermodeunavailable'] = 'Redis Cluster est actuellement indisponible. Assurez-vous que l\'extension PHP Redis supporte la fonctionnalité Redis Cluster.';
$string['compressor_none'] = 'Pas de compression.';
$string['compressor_php_gzip'] = 'Utilisez la compression gzip.';
$string['compressor_php_zstd'] = 'Utilisez la compression standard Z.';
$string['connectiontimeout'] = 'Délai de connexion';
$string['connectiontimeout_help'] = 'Cela définit le délai de connexion au serveur Redis.';
$string['encrypt_connection'] = 'Utilisez le chiffrement TLS.';
$string['encrypt_connection_help'] = 'Utilisez TLS pour vous connecter à Redis. Ne pas utiliser \'tls://\' in the hostname for Redis, use this option instead.';
$string['password'] = 'Mot de passe';
$string['password_help'] = 'Cela définit le mot de passe du serveur Redis.';
$string['pluginname'] = 'Redis';
$string['prefix'] = 'Préfixe de la clé';
$string['prefix_help'] = 'This prefix is used for all key names on the Redis server.
* If you only have one Moodle instance using this server, you can leave this value default.
* Due to key length restrictions, a maximum of 5 characters is permitted.';
$string['prefixinvalid'] = 'Préfixe non valide. Vous ne pouvez utiliser a-z A-Z 0-9-_.';
$string['privacy:metadata:redis'] = 'Le plugin Redis cachestore stocke brièvement les données dans le cadre de sa fonctionnalité de cache. Ces données sont stockées sur un serveur Redis où les données sont régulièrement supprimées.';
$string['privacy:metadata:redis:data'] = 'Les différentes données stockées dans le cache';
$string['serializer_igbinary'] = 'Sérialisateur Igbinaire';
$string['serializer_php'] = 'Sérialisateur PHP par défaut';
$string['server'] = 'Serveur(s)';
$string['server_help'] = 'Redis server to use for testing.

Some example values:

* testredis.abc.com - To connect to a Redis server by hostname (Port 6379 by default).
* testredis.abc.com:1234 - To connect to a Redis server by hostname with a specific port.
* 1.2.3.4 - To connect to a Redis server by IP address (Port 6379 by default).
* 1.2.3.4:1234 - To connect to a Redis server by IP address with a specific port.
* unix:///var/redis.sock - To connect to a Redis server using a Unix socket.
* /var/redis.sock - To connect to a Redis server using a Unix socket (alternative format).

If cluster mode is enabled, specify servers separated by a new line, for example:<br>
  172.23.0.11<br>
  172.23.0.12<br>
  172.23.0.13<br>

For further information, see <a href="https://redis.io/docs/reference/clients/#accepting-client-connections">Accepting Client Connections</a> and <a href="https://redis.io/resources/clients/#php">Redis PHP clients</a>.';
$string['task_ttl'] = 'Libérez la mémoire utilisée par les entrées expirées dans les caches Redis';
$string['test_clustermode'] = 'Mode groupe';
$string['test_clustermode_desc'] = 'Activer le test dans Redis Mode cluster.';
$string['test_password'] = 'Tester le mot de passe du serveur';
$string['test_password_desc'] = 'Redis tester le mot de passe du serveur.';
$string['test_serializer'] = 'Sérialiseur';
$string['test_serializer_desc'] = 'Serializer à utiliser pour les tests.';
$string['test_server'] = 'Serveur d\'essai';
$string['test_server_desc'] = 'Redis server to use for testing.

Some example values:

* testredis.abc.com - To connect to a Redis server by hostname (Port 6379 by default).
* testredis.abc.com:1234 - To connect to a Redis server by hostname with a specific port.
* 1.2.3.4 - To connect to a Redis server by IP address (Port 6379 by default).
* 1.2.3.4:1234 - To connect to a Redis server by IP address with a specific port.
* unix:///var/redis.sock - To connect to a Redis server using a Unix socket.
* /var/redis.sock - To connect to a Redis server using a Unix socket (alternative format).

If cluster mode is enabled, specify servers separated by a new line, for example:<br>
  172.23.0.11<br>
  172.23.0.12<br>
  172.23.0.13<br>

For further information, see <a href="https://redis.io/docs/reference/clients/#accepting-client-connections">Accepting Client Connections</a> and <a href="https://redis.io/resources/clients/#php">Redis PHP clients</a>.';
$string['test_ttl'] = 'Essais TTL';
$string['test_ttl_desc'] = 'Exécutez le test de performance en utilisant un cache qui nécessite TTL (ensembles inférieurs).';
$string['usecompressor'] = 'Utiliser le compresseur';
$string['usecompressor_help'] = 'Spécifie le compresseur à utiliser après sérialisation. Il est fait au niveau de l\'API Moodle Cache, pas au niveau php-redis.';
$string['useserializer'] = 'Utiliser un sérialisateur';
$string['useserializer_help'] = 'Specifies the serializer to use for serializing.
The valid serializers are Redis::SERIALIZER_PHP or Redis::SERIALIZER_IGBINARY.
The latter is supported only when phpredis is configured with --enable-redis-igbinary option and the igbinary extension is loaded.';
