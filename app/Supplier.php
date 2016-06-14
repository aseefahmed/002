<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = [
                            'supplier_name',
                            'address_line_1',
                            'address_line_2',
                            'town', 'city',
                            'post_code',
                            'country_code',
                            'contact_person',
                            'contact_number',
                            'email',
                            'supplier_type_id'
                           ];
}

