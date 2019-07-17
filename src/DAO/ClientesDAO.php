<?php
namespace src\DAO;

use src\Models\ClienteModel;

class ClientesDAO extends Conexao
{
    public function __construct()
    {
        parent::__construct();
    }

    public function TodosClientes(): array
    {

        $connection = $this->pdo;
        $stmt = $connection->query('SELECT * FROM clientes;');
        $clientes = $stmt->fetchAll(\PDO::FETCH_ASSOC);

        return $clientes;
    }

    public function InserirCliente(ClienteModel $cliente): void
    {
        $stmt = $this->pdo
            ->prepare('INSERT INTO  clientes
             VALUES (null,
                    :nome,
                    :cpf,
                    :email,
                    :dataNasc,
                    :telefone,
                    :cli_status);');

        $stmt->execute([
            'nome' => $cliente->getCli_nome(),
            'cpf' => $cliente->getCli_cpf(),
            'email' => $cliente->getCli_email(),
            'dataNasc' => $cliente->getCli_dataNasc(),
            'telefone' => $cliente->getCli_tel(),
            'cli_status' => $cliente->getCli_status()
        ]);
    }

    public function AtualizarCliente(int $cli_id, ClienteModel $cliente): void
    {
        $statement = $this->pdo
        ->prepare('UPDATE clientes SET 
                    cli_nome = :nome,
                    cli_cpf = :cpf,
                    cli_email = :email,
                    cli_dataNasc = :dataNasc,
                    cli_tel = :telefone,
                    cli_status = :cli_status
                     WHERE cli_id = :cli_id');

        $statement->execute([
            'cli_id' => $cli_id,
            'nome' => $cliente->getCli_nome(),
            'cpf' => $cliente->getCli_cpf(),
            'email' => $cliente->getCli_email(),
            'dataNasc' => $cliente->getCli_dataNasc(),
            'telefone' => $cliente->getCli_tel(),
            'cli_status' => $cliente->getCli_status(),
        ]);
    }

    public function DeletarCliente(int $cli_id): void
    {
        $statement = $this->pdo
            ->prepare('DELETE FROM clientes WHERE cli_id = :cli_id');

        $statement->execute([
            'cli_id' => $cli_id
        ]);
    }
}
