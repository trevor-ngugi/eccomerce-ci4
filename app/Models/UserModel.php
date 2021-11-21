<?php
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{
    public function getOneUser(){
        $user_details="trevor";
        return $user_details;
    }
}