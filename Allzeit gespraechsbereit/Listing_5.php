<?phprequire 'vendor/autoload.php';require 'MyApp/SchereSteinPapier.php';use Ratchet\Server\IoServer;use Ratchet\WebSocket\WsServer;use MyApp\SchereSteinPapier;$server = IoServer::factory(new WsServer(new SchereSteinPapier()), 8000);$server->run();?>