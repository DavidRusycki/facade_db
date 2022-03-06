<?php
namespace Components\FacadeDb;
/**
 * Classe de DB para o Postgres.
 * @author David Rusycki
 * @since 12/02/2022
 */
class Postgres extends Manager {

    /**
     * Nome da DataBase
     */
    const NOME_BD = 'template';

    public function getConfigForPdo()
    {
        return "pgsql:host=localhost;dbname={$this->getBdName()}";
    }
    
    public function getUser()
    {
        return 'postgres';
    }
    
    public function getPassword()
    {
        return 'postgres';
    }

    public function getType() 
    { 
        return Manager::POSTGRES;
    }

    /**
     * Retorna uma instância.
     * @return self;
     */
    public static function getInstance() : self
    {
        if (empty(self::$instance)) {
            self::$instance = new Self();
        }
        return self::$instance;
    } 

    public function getBdName()
    {
        return self::NOME_BD;
    }

}