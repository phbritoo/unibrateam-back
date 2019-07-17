<?php
namespace src\Controllers;

use Slim\Http\Request;
use Slim\Http\Response;
use src\DAO\UsuariosDAO;
use src\Models\UsuarioModel;

final class UsuarioController
{

    // public function listarUsuarios(Request $request, Response $response, array $args):Response
    // {
    //     $usuariosDAO = new UsuariosDAO();
    //     $usuarios = $usuariosDAO->TodosUsuarios();

    //     return $response->withHeader('Content-Type', 'application/json')
    //         ->withHeader('Access-Control-Allow-Origin', '*')
    //         ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
    //         ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS')
    //         ->withJson($usuarios);
    // }

    public function listarUmUsuario(Request $request, Response $response, array $args): Response
    {
        $queryParams = $request->getQueryParams();

        $usuariosDAO = new UsuariosDAO();
        $id = (int)$queryParams['id'];
        $usuarios = $usuariosDAO->UmUsuario($id);

        // if($newResponse = $response->withJson($clientes)->withStatus(404)){
        //     $newResponse = $response->write('Cliente invalido!');
        // }

        return $response->withHeader('Content-Type', 'application/json')
            ->withHeader('Access-Control-Allow-Origin', '*')
            ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
            ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS')
            ->withJson($usuarios);
    }

    public function deletarUsuario(Request $request, Response $response, array $args): Response
    {
        $queryParams = $request->getQueryParams();

        $usuariosDAO = new UsuariosDAO();
        $id = (int)$queryParams['id'];
        $usuariosDAO->DeletarUsuario($id);
        // $newResponse = $response->withJson([
        //     'message' => 'Usuario deletado com sucesso!'
        // ]);

        return $response->withHeader('Content-Type', 'application/json')
            ->withHeader('Access-Control-Allow-Origin', '*')
            ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
            ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS');
    }
}
