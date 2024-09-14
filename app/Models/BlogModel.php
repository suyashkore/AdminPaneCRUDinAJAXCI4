<?php namespace App\Models;

use CodeIgniter\Model;

class BlogModel extends Model
{
    protected $table = 'blogs';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'content'];

    // Add validation rules if needed
    protected $validationRules = [
        'title' => 'required|min_length[3]|max_length[255]',
        'content' => 'required'
    ];
}
