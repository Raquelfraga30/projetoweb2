<?php

define("TITLE"      , "Access control");
define("DESCRIPTION", "Sistema genérico para cadastro de usuários e controle de acessos");
define("KEYWORDS"   , "login, senha, cadastro, php, sql, sistema, web");
define("AUTHOR"     , "Eduardo, Raquel, Lorenzo, Ingrid");
define("PATH"       , "/xampp/htdocs/aula40");
define("LOCAL"      , "/aula40");

define("ASSETS"     , LOCAL."/assets");
define("MODEL"      , PATH."/src/model");
define("VIEW"       , LOCAL."/src/view");
define("CONTROLLER" , LOCAL."/src/controller");

//Banco de dados
define("MYSQL_SERVER"   , "localhost");
define("MYSQL_PORT"     , "3307");
define("MYSQL_DATABASE" , "access_control");
define("MYSQL_CHARSET"  , "utf8");
define("MYSQL_USER"     , "local");
define("MYSQL_PASS"     , "");