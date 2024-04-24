<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utilisateur_model extends CI_Model{
    public function connect($email , $mdp){
        $sql="SELECT * FROM utilisateur WHERE mdp = sha1(%s) AND email = %s";
        $sql=sprintf($sql, $this->db->escape($mdp), $this->db->escape($email));

        $query= $this->db->query($sql);
        return $query->row_array();
    }

    public function sign_in($nom,$email,$mdp){
        $sql="INSERT INTO utilisateur VALUES (null, %s , %s, sha1(%s))";
        $sql=sprintf($sql,$this->db->escape($nom), $this->db->escape($email), $this->db->escape($mdp));

        $query= $this->db->query($sql);
        
        $dernier_id=$this->db->insert_id();

        return $dernier_id;
    }

    public function get_by_id($id){
        $sql="SELECT * FROM utilisateur WHERE id = %s";
        
        $sql=sprintf($sql, $this->db->escape($id));

        $query= $this->db->query($sql);
        return $query->row_array();
    }
}
?>