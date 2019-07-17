<?php

namespace src\Models;

final class FuncionarioModel{
    
    /**
     * @var int
     */
    private $func_id;
    /**
     * @var string
     */
    private $func_nome;
    /**
     * @var string
     */
    private $func_cpf;
    /**
     * @var string
     */
    private $fun_tel;
    /**
     * @var string
     */
    private $func_bruto;
    /**
     * @var string
     */
    private $func_liquido;
    /**
     * @var string
     */
    private $func_desconto;


    /**
     * Get the value of func_id
     *
     * @return  int
     */ 
    public function getFunc_id()
    {
        return $this->func_id;
    }

    /**
     * Set the value of func_id
     *
     * @param  int  $func_id
     *
     * @return  self
     */ 
    public function setFunc_id(int $func_id): FuncionarioModel
    {
        $this->func_id = $func_id;

        return $this;
    }

    /**
     * Get the value of func_nome
     *
     * @return  string
     */ 
    public function getFunc_nome()
    {
        return $this->func_nome;
    }

    /**
     * Set the value of func_nome
     *
     * @param  string  $func_nome
     *
     * @return  self
     */ 
    public function setFunc_nome(string $func_nome): FuncionarioModel
    {
        $this->func_nome = $func_nome;

        return $this;
    }

    /**
     * Get the value of func_cpf
     *
     * @return  string
     */ 
    public function getFunc_cpf()
    {
        return $this->func_cpf;
    }

    /**
     * Set the value of func_cpf
     *
     * @param  string  $func_cpf
     *
     * @return  self
     */ 
    public function setFunc_cpf(string $func_cpf): FuncionarioModel
    {
        $this->func_cpf = $func_cpf;

        return $this;
    }

    /**
     * Get the value of fun_tel
     *
     * @return  string
     */ 
    public function getFun_tel()
    {
        return $this->fun_tel;
    }

    /**
     * Set the value of fun_tel
     *
     * @param  string  $fun_tel
     *
     * @return  self
     */ 
    public function setFun_tel(string $fun_tel): FuncionarioModel
    {
        $this->fun_tel = $fun_tel;

        return $this;
    }

    /**
     * Get the value of func_bruto
     *
     * @return  string
     */ 
    public function getFunc_bruto()
    {
        return $this->func_bruto;
    }

    /**
     * Set the value of func_bruto
     *
     * @param  string  $func_bruto
     *
     * @return  self
     */ 
    public function setFunc_bruto(string $func_bruto): FuncionarioModel
    {
        $this->func_bruto = $func_bruto;

        return $this;
    }

    /**
     * Get the value of func_liquido
     *
     * @return  string
     */ 
    public function getFunc_liquido()
    {
        return $this->func_liquido;
    }

    /**
     * Set the value of func_liquido
     *
     * @param  string  $func_liquido
     *
     * @return  self
     */ 
    public function setFunc_liquido(string $func_liquido): FuncionarioModel
    {
        $this->func_liquido = $func_liquido;

        return $this;
    }

    /**
     * Get the value of func_desconto
     *
     * @return  string
     */ 
    public function getFunc_desconto()
    {
        return $this->func_desconto;
    }

    /**
     * Set the value of func_desconto
     *
     * @param  string  $func_desconto
     *
     * @return  self
     */ 
    public function setFunc_desconto(string $func_desconto): FuncionarioModel
    {
        $this->func_desconto = $func_desconto;

        return $this;
    }
}
