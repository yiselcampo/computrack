<?php
namespace App\Models;
use CodeIgniter\Model;
class ClienteModel extends Model
{
    protected $table = 'clientes';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombres', 'apellidos','cedula', 'telefono', 'email',];

}