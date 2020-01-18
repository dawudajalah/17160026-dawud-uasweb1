<?php
class Modlatuas extends CI_Model {
    public function save_data($firstname,$lastname,$gender,$birth,$category,$membership){
    $data=>array(
        'firstname'=>'$firstname',
        'lastname'=>'$lastname',
        'gender'=>'$gender',
        'birth'=>'$birth',
        'category'=>'$category',
        'membership'=>'$membership',
        $this->db->insert('person',$data);
        }
        
      }
   ?>