<?php

class Model {

    function __construct($db) {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }

    public function get_content( $thing ) {

        $statement = $this->db->prepare('SELECT * FROM `stuff` WHERE `thing` = :thing');
        $statement->execute( array(':thing'=> $thing) );

        return $statement->fetchAll(PDO::FETCH_ASSOC);

    }

}
