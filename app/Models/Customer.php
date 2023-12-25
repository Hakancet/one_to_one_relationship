<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';
    protected $guarded = []; // tüm alanları kullanmak için kullanıldı

    public function order()
    {
        return $this -> hasone(Order::class);  // birebir ilişkisel tabloları kurmak için yapılıyor
    }

}
