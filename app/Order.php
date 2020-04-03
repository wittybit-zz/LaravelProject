<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $filltable = ['userID','productID','quantity','payment','category'];
}
