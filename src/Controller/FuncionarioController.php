<?php
namespace src\Controllers;

use Slim\Http\Request;
use Slim\Http\Response;
use src\DAO\FuncionariosDAO;
use src\Models\FuncionarioModel;

final class FuncionarioController
{
    public function listarFuncionarios(Request $request, Response $response, array $args): Response
    {
        $funcionariosDAO = new FuncionariosDAO();
        $funcionarios = $funcionariosDAO->TodosFuncionarios();

        return $response->withHeader('Content-Type', 'application/json')
            ->withHeader('Access-Control-Allow-Origin', '*')
            ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
            ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS')
            ->withJson($funcionarios);
    }

    public function inserirFuncionario(Request $request, Response $response, array $args): Response
    {
        $data = $request->getParsedBody();

        $funcionariosDAO = new FuncionariosDAO();
        $funcionario = new FuncionarioModel();
        $funcionario
            ->setFunc_nome($data['func_nome'])
            ->setFunc_cpf($data['func_cpf'])
            ->setFun_tel($data['func_tel'])
            ->setFunc_bruto($data['func_bruto'])
            ->setFunc_liquido($data['func_liquido'])
            ->setFunc_desconto($data['func_desconto']);
        $funcionariosDAO->InserirFuncionario($funcionario);

        // $newResponse = $response->withJson([
        //     'message' => 'Funcionario inserido com sucesso!'
        // ]);

        return $response->withHeader('Content-Type', 'application/json')
            ->withHeader('Access-Control-Allow-Origin', '*')
            ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
            ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS');
    }

    public function atualizarFuncionario(Request $request, Response $response, array $args): Response
    {

        $queryParams = $request->getQueryParams();
        $data = $request->getParsedBody();

        $funcionariosDAO = new FuncionariosDAO();
        $id = (int)$queryParams['func_id'];
        $funcionario = new FuncionarioModel();
        $funcionario
            ->setFunc_nome($data['func_nome'])
            ->setFunc_cpf($data['func_cpf'])
            ->setFun_tel($data['func_tel'])
            ->setFunc_bruto($data['func_bruto'])
            ->setFunc_liquido($data['func_liquido'])
            ->setFunc_desconto($data['func_desconto']);

        $funcionariosDAO->AtualizarFuncionario($id, $funcionario);

        return $response->withHeader('Content-Type', 'application/json')
            ->withHeader('Access-Control-Allow-Origin', '*')
            ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
            ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS');
    }
    public function deletarFuncionario(Request $request, Response $response, array $args): Response
    {
        $queryParams = $request->getQueryParams();

        $funcionariosDAO = new FuncionariosDAO();
        $id = (int)$queryParams['func_id'];
        $funcionariosDAO->DeletarFuncionario($id);
        // $newResponse = $response->withJson([
        //     'message' => 'Funcionario deletado com sucesso!'
        // ]);
        return $response->withHeader('Content-Type', 'application/json')
            ->withHeader('Access-Control-Allow-Origin', '*')
            ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
            ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS');
    }
}
