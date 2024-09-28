<?php
namespace App\Models;

use CodeIgniter\Model;
class admin extends Model {

        // public function validate_user($userid, $username, $password) {
        // $this->db->where('eid', $userid);
        // $this->db->where('user', $username);
        // $this->db->where('pass', $password);
        // $query = $this->db->get('admin');

        // if ($query->num_rows() == 1) {
        //     return $query->row();
        // }
        // return false;

    //}
    protected $table  ='admin';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'eid',
        'user',
        'pass',
        

    ];
}