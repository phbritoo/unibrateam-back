<?php

namespace src\Models;

final class UsuarioModel {
    /**
     * @var int
     */
    private $id;
    /**
     * @var string
     */
    private $login;
    /**
     * @var string
     */
    private $senha;

    /**
     * Get the value of id
     *
     * @return  int
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param  int  $id
     *
     * @return  self
     */ 
    public function setId(int $id): UsuarioModel
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of login
     *
     * @return  string
     */ 
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set the value of login
     *
     * @param  string  $login
     *
     * @return  self
     */ 
    public function setLogin(string $login): UsuarioModel
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get the value of senha
     *
     * @return  string
     */ 
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * Set the value of senha
     *
     * @param  string  $senha
     *
     * @return  self
     */ 
    public function setSenha(string $senha): UsuarioModel
    {
        $this->senha = $senha;

        return $this;
    }
}