<?php
namespace FacadeDb;
/**
 * Classe de DB para o Postgres.
 * @author David Rusycki
 * @since 12/02/2022
 */
class Postgres extends Manager {

    public function getConfigForPdo()
    {
        return 'pgsql:host=localhost;dbname=esto';
    }
    
    public function getUser()
    {
        return 'Root';
    }
    
    public function getPassword()
    {
        return '';
    }

}