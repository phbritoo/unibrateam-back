<?php
namespace src\DAO;
use src\Models\ClienteModel;

class UsuariosDAO extends Conexao{
   
    public function __construct()
    {
        parent::__construct();
    }
    // public function TodosUsuarios(): array{

    //     $connection = $this->pdo;
    //     $stmt = $connection->query('SELECT * FROM usuarios;');
    //     $usuarios = $stmt->fetchAll(\PDO::FETCH_ASSOC);

    //     return $usuarios;

    // }
    public function UmUsuario(int $id): array
    {
        $statement = $this->pdo
            ->prepare('SELECT * FROM usuarios WHERE id = :id;');
        $statement->bindValue(':id', $id, \PDO::PARAM_INT);
        $statement->execute();
        $usuarios = $statement->fetchAll(\PDO::FETCH_ASSOC);

        return $usuarios;
    }
    public function DeletarUsuario(int $id): void
    {
        $statement = $this->pdo
            ->prepare('DELETE FROM usuarios WHERE id = :id');

        $statement->execute([
            'id'=> $id
        ]);
    }

}
