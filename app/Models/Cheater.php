<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

#[Fillable(['name', 'cpf', 'zipcode'])]
#[Table('cheaters')]
class Cheater extends Model
{

}
