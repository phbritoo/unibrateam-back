 <?php

use src\Controllers\{
    ClienteController,
    FuncionarioController,
    UsuarioController
};
use Slim\App;

return function (App $app) {

    $app->get('/clientes', ClienteController::class . ':listarClientes');
    $app->post('/clientes', ClienteController::class . ':inserirCliente');
    $app->patch('/clientes', ClienteController::class . ':atualizarCliente');
    $app->delete('/clientes', ClienteController::class . ':deletarCliente');

    $app->get('/funcionarios', FuncionarioController::class . ':listarFuncionarios');
    $app->post('/funcionarios', FuncionarioController::class . ':inserirFuncionario');
    $app->patch('/funcionarios', FuncionarioController::class . ':atualizarFuncionario');
    $app->delete('/funcionarios', FuncionarioController::class . ':deletarFuncionario');

    $app->get('/usuarios', UsuarioController::class . ':listarUmUsuario');
    $app->delete('/usuarios', UsuarioController::class . ':deletarUsuario');
};

?> 
