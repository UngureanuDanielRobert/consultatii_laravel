<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programare extends Model
{
    protected $fillable = [
        'start',
        'finish',
        'comentarii',
        'client_id',
        'employee_id',
    ];
 
    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }
 
    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }
