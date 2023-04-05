<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mariadb';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'localhost';
$CFG->dbname    = 'moodle_prod';
$CFG->dbuser    = 'root';
$CFG->dbpass    = 'password';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => 3306,
  'dbsocket' => '',
  'dbcollation' => 'utf8mb4_general_ci',
);

$CFG->wwwroot   = 'your domain';
$CFG->dataroot  = 'C:\\inetpub\\wwwroot\\moodledata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');
$CFG->cachejs = false; // NOT FOR PRODUCTION SERVERS!

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
