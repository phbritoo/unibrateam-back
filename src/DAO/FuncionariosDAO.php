<?php

namespace src\DAO;

use src\Models\FuncionarioModel;

class FuncionariosDAO extends Conexao{
   
    public function __construct()
    {
        parent::__construct();
    }
    public function TodosFuncionarios(): array{

        $connection = $this->pdo;
        $stmt = $connection->query('SELECT * FROM funcionarios;');
        $funcionarios = $stmt->fetchAll(\PDO::FETCH_ASSOC);

        return $funcionarios;

      }

    public function InserirFuncionario(FuncionarioModel $funcionario): void
    {
        $statement = $this->pdo
            ->prepare('INSERT INTO  funcionarios VALUES
                    (null,
                    :nome,
                    :cpf,
                    :telefone,
                    :salario_bruto,
                    :salario_liquido,
                    :salario_desconto);');

        $statement->execute([
            'nome' => $funcionario->getFunc_nome(),
            'cpf'=> $funcionario->getFunc_cpf(),
            'telefone'=>$funcionario->getFun_tel(),
            'salario_bruto'=>$funcionario->getFunc_bruto(),
            'salario_liquido'=>$funcionario->getFunc_liquido(),
            'salario_desconto'=>$funcionario->getFunc_desconto()
        ]);
    }

    public function AtualizarFuncionario(int $func_id, FuncionarioModel $funcionario): void
    {
        $statement = $this->pdo
        ->prepare('UPDATE funcionarios SET 
                    func_nome = :nome,
                    func_cpf = :cpf,
                    func_tel = :telefone,
                    func_bruto = :bruto,
                    func_liquido = :liquido,
                    func_desconto = :desconto
                     WHERE func_id = :func_id');

        $statement->execute([
            'func_id' => $func_id,
            'nome' => $funcionario->getFunc_nome(),
            'cpf' => $funcionario->getFunc_cpf(),
            'telefone' => $funcionario->getFun_tel(),
            'bruto' => $funcionario->getFunc_bruto(),
            'liquido' => $funcionario->getFunc_liquido(),
            'desconto' => $funcionario->getFunc_desconto(),
        ]);
    }

    public function DeletarFuncionario(int $func_id): void
    {
        $statement = $this->pdo
            ->prepare('DELETE FROM funcionarios WHERE func_id = :func_id');

        $statement->execute([
            'func_id'=> $func_id
        ]);
    }

}
