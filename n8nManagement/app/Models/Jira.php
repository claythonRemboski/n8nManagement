<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jira extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'id',
        'key',
        'sumary',
        'startDate',
        'resolutionDate',
        'assignee',
        'link',
    ];
}
