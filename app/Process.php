<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Process extends Model
{
    protected $fillable = [
        'id',
        'pasta',
        'processo',
        'autor',
        'reu',
        'vara',
        'acao',
        'andamento',
        'folder',
    ];

    protected $casts = [
        'acao'=>'int'
    ];

    public $action = [
        "Trabalhista",
        "Civil"
    ];

    public function action(){
        return $this->action[$this->acao];
    }

}
