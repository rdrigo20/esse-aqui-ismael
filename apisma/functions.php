<?php

$template_diretorio = get_template_directory();

require_once($template_diretorio . "/custom-post-type/cards.php");
require_once($template_diretorio . "/custom-post-type/news.php");
require_once($template_diretorio . "/custom-post-type/events.php");
require_once($template_diretorio . "/custom-post-type/carrousel.php");

require_once($template_diretorio . "/endpoints/cards_create.php");
require_once($template_diretorio . "/endpoints/cards_get.php");

require_once($template_diretorio . "/endpoints/events_create.php");

require_once($template_diretorio . "/endpoints/carrousel_create.php");

require_once($template_diretorio . "/endpoints/usuario_post.php");
require_once($template_diretorio . "/endpoints/usuario_get.php");

?>