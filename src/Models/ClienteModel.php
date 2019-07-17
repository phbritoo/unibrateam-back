<?php

namespace src\Models;

final class ClienteModel
{

    /**
     * @var int
     */
    private $cli_id;
    /**
     * @var string
     */
    private $cli_nome;
    /**
     * @var string
     */
    private $cli_cpf;
    /**
     * @var string
     */
    private $cli_email;
    /**
     * @var string
     */
    private $cli_dataNasc;
    /**
     * @var string
     */
    private $cli_tel;
    /**
     * @var string
     */
    private $cli_status;


    /**
     * Get the value of cli_id
     *
     * @return  int
     */ 
    public function getCli_id()
    {
        return $this->cli_id;
    }

    /**
     * Set the value of cli_id
     *
     * @param  int  $cli_id
     *
     * @return  self
     */ 
    public function setCli_id(int $cli_id): ClienteModel
    {
        $this->cli_id = $cli_id;

        return $this;
    }

    /**
     * Get the value of cli_nome
     *
     * @return  string
     */ 
    public function getCli_nome()
    {
        return $this->cli_nome;
    }

    /**
     * Set the value of cli_nome
     *
     * @param  string  $cli_nome
     *
     * @return  self
     */ 
    public function setCli_nome(string $cli_nome): ClienteModel
    {
        $this->cli_nome = $cli_nome;

        return $this;
    }

    /**
     * Get the value of cli_cpf
     *
     * @return  string
     */ 
    public function getCli_cpf()
    {
        return $this->cli_cpf;
    }

    /**
     * Set the value of cli_cpf
     *
     * @param  string  $cli_cpf
     *
     * @return  self
     */ 
    public function setCli_cpf(string $cli_cpf): ClienteModel
    {
        $this->cli_cpf = $cli_cpf;

        return $this;
    }

    /**
     * Get the value of cli_email
     *
     * @return  string
     */ 
    public function getCli_email()
    {
        return $this->cli_email;
    }

    /**
     * Set the value of cli_email
     *
     * @param  string  $cli_email
     *
     * @return  self
     */ 
    public function setCli_email(string $cli_email): ClienteModel
    {
        $this->cli_email = $cli_email;

        return $this;
    }

    /**
     * Get the value of cli_dataNasc
     *
     * @return  string
     */ 
    public function getCli_dataNasc()
    {
        return $this->cli_dataNasc;
    }

    /**
     * Set the value of cli_dataNasc
     *
     * @param  string  $cli_dataNasc
     *
     * @return  self
     */ 
    public function setCli_dataNasc(string $cli_dataNasc): ClienteModel
    {
        $this->cli_dataNasc = $cli_dataNasc;

        return $this;
    }

    /**
     * Get the value of cli_tel
     *
     * @return  string
     */ 
    public function getCli_tel()
    {
        return $this->cli_tel;
    }

    /**
     * Set the value of cli_tel
     *
     * @param  string  $cli_tel
     *
     * @return  self
     */ 
    public function setCli_tel(string $cli_tel)
    {
        $this->cli_tel = $cli_tel;

        return $this;
    }

    /**
     * Get the value of cli_status
     *
     * @return  string
     */ 
    public function getCli_status()
    {
        return $this->cli_status;
    }

    /**
     * Set the value of cli_status
     *
     * @param  string  $cli_status
     *
     * @return  self
     */ 
    public function setCli_status(string $cli_status)
    {
        $this->cli_status = $cli_status;

        return $this;
    }
}
