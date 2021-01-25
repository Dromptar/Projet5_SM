<?php namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'user_id';

    protected $returnType    = 'App\Entities\User';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['username', 'is_admin', 'pass', 'email', 'phone', 'registed_at', 'updated_at'];

    protected $useTimestamps = true;
    protected $createdField  = 'registed_at';
    protected $updatedField  = 'updated_at';
    //protected $deletedField  = 'deleted_at';

    // protected $validationRules    = [];
    // protected $validationMessages = [];
    // protected $skipValidation     = false;
}

