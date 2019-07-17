<?php
namespace src\Controllers;

use Slim\Http\Request;
use Slim\Http\Response;
use src\DAO\ClientesDAO;
use src\Models\ClienteModel;

final class ClienteController
{

    public function listarClientes(Request $request, Response $response, array $args): Response
    {
        $clientesDAO = new ClientesDAO();
        $clientes = $clientesDAO->TodosClientes();

        return $response->withHeader('Content-Type', 'application/json')
                        ->withHeader('Access-Control-Allow-Origin', '*')
                        ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
                        ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS')
                        ->withJson($clientes);
    }

    public function inserirCliente(Request $request, Response $response, array $args): Response
    {
        $data = $request->getParsedBody();

        $clientesDAO = new ClientesDAO();
        $cliente = new ClienteModel();
        $cliente
            ->setCli_nome($data['cli_nome'])
            ->setCli_cpf($data['cli_cpf'])
            ->setCli_email($data['cli_email'])
            ->setCli_dataNasc($data['cli_dataNasc'])
            ->setCli_tel($data['cli_tel'])
            ->setCli_status($data['cli_status']);

        $clientesDAO->InserirCliente($cliente);

        return $response->withHeader('Content-Type', 'application/json')
                        ->withHeader('Access-Control-Allow-Origin', '*')
                        ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
                        ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS');
    }

    public function atualizarCliente(Request $request, Response $response, array $args): Response
    {
        $queryParams = $request->getQueryParams();
        $data = $request->getParsedBody();

        $clientesDAO = new ClientesDAO();
        $id = (int)$queryParams['cli_id'];
        $cliente = new ClienteModel();
        $cliente
            ->setCli_nome($data['cli_nome'])
            ->setCli_cpf($data['cli_cpf'])
            ->setCli_email($data['cli_email'])
            ->setCli_dataNasc($data['cli_dataNasc'])
            ->setCli_tel($data['cli_tel'])
            ->setCli_status($data['cli_status']);


        $clientesDAO->AtualizarCliente($id, $cliente);
        // $newResponse = $response->withJson([
        //     'message' => 'Cliente deletado com sucesso!'
        // ]);

        return $response->withHeader('Content-Type', 'application/json')
                        ->withHeader('Access-Control-Allow-Origin', '*')
                        ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
                        ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS');
    }

    public function deletarCliente(Request $request, Response $response, array $args): Response
    {
        $queryParams = $request->getQueryParams();

        $clientesDAO = new ClientesDAO();
        $id = (int)$queryParams['cli_id'];

        $clientesDAO->DeletarCliente($id);
        // $newResponse = $response->withJson([
        //     'message' => 'Cliente deletado com sucesso!'
        // ]);

        return $response->withHeader('Content-Type', 'application/json')
                        ->withHeader('Access-Control-Allow-Origin', '*')
                        ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
                        ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS');
    }
}
