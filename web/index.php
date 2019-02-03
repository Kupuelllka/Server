<?php

require('../vendor/autoload.php');

$app = new Silex\Application();
$app['debug'] = true;

// Register the monolog logging service
$app->register(new Silex\Provider\MonologServiceProvider(), array(
  'monolog.logfile' => 'php://stderr',
));

$app->get('/', function() use($app) {
  retun"Hello World";
});

$app->post('/bot', function() use($app) {
$data = json_decode(file_get_contents('php://input'));
  if( !$data )
  retun"nioh";
if( $data->secret !== getenv('VK_CONFIRMATION_CODE') && $data->type !=='confirmation')
retun"nioh";
switch( $data->type)
{
case 'confirmation':
      return getenv('VK_SECRET_TOKEN')
      break;
case 'message_new':
}
return "nioh";
});
$app->run();
