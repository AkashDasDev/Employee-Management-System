<?php
namespace App\Models;

use CodeIgniter\Model;

class Employee extends Model
{
    protected $table  ='newuser';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'eid',
        'en',
        'ad',
        'dg',
        'sr',
        'image',

    ];

}
?>