<?php
   // do all database calls here
   class Users extends CI_Model {

      function __construct() {
         parent::__construct();
      }

      public function addUser($userData){
          // var_dump($userData);
          $insert = $this->db->insert('users', $userData);
        }

      public function email_check($email){

        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('email',$email);
        $query=$this->db->get();

        if($query->num_rows()>0){
           return false;
        } else {
           return true;
        }
      }

      public function login_user($username, $password){
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('username',$username);
        $this->db->where('password',$password);

        if($query=$this->db->get()){
          return $query->row_array();
        }else{
          return false;
        }
      }
    }
