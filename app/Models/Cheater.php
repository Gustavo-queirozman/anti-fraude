<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['name', 'cpf', 'zipcode'])]
#[Table('cheaters')]
class Cheater extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'cpf',
        'zipcode',
    ];

    public function setCpfAttribute($value)
    {
        $this->attributes['cpf'] = preg_replace('/[^0-9]/', '', $value);
    }

    public function getCpfMaskedAttribute()
    {
        $cpf = preg_replace('/[^0-9]/', '', $this->attributes['cpf'] ?? '');

        if (strlen($cpf) !== 11) {
            return $cpf;
        }

        return sprintf('%s.%s.%s-%s',
            substr($cpf, 0, 3),
            substr($cpf, 3, 3),
            substr($cpf, 6, 3),
            substr($cpf, 9, 2)
        );
    }

    public function setZipcodeAttribute($value)
    {
        $this->attributes['zipcode'] = preg_replace('/[^0-9]/', '', $value);
    }

    public function getZipcodeMaskedAttribute()
    {
        $zipcode = preg_replace('/[^0-9]/', '', $this->attributes['zipcode'] ?? '');

        if (strlen($zipcode) !== 8) {
            return $zipcode;
        }

        return sprintf('%s-%s', substr($zipcode, 0, 5), substr($zipcode, 5, 3));
    }
}
