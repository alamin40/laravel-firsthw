<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public static function getAllProduct(){
        return [
            0 => [
                'id'        => 1,
                'name'        =>  'White T-Shirt',
                'price'       =>  '2850',
                'description' =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab animi esse quas? Beatae, qui, quibusdam.',
                'image'       =>  asset('/img/s1.png'),
            ],
            1 => [
                'id'          => 2,
                'name'        =>  'Blue T-Shirt',
                'price'       =>  '2950',
                'description' =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab animi esse quas? Beatae, qui, quibusdam.',
                'image'       =>  asset('/img/s2.png'),
            ],
            2 => [
                'id'          => 3,
                'name'        =>  'Black T-Shirt',
                'price'       =>  '2750',
                'description' =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab animi esse quas? Beatae, qui, quibusdam.',
                'image'       =>  asset('/img/s3.png'),
            ],
            3 => [
                'id'          => 4,
                'name'        =>  'Black T-Shirt',
                'price'       =>  '4000',
                'description' =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab animi esse quas? Beatae, qui, quibusdam.',
                'image'       =>  asset('/img/s4.png'),
            ],
            4 => [
                'id'          => 5,
                'name'        =>  'Blue Shirt',
                'price'       =>  '1500',
                'description' =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab animi esse quas? Beatae, qui, quibusdam.',
                'image'       =>  asset('/img/s5.png'),
            ],
            5 => [
                'id'          => 6,
                'name'        =>  'White Shirt',
                'price'       =>  '1850',
                'description' =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab animi esse quas? Beatae, qui, quibusdam.',
                'image'       =>  asset('/img/s6.png'),
            ],
            6 => [
                'id'          => 7,
                'name'        =>  'Black Shirt',
                'price'       =>  '2500',
                'description' =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab animi esse quas? Beatae, qui, quibusdam.',
                'image'       =>  asset('/img/s7.png'),
            ],
            7 => [
                'id'          => 8,
                'name'        =>  'Blue T-Shirt',
                'price'       =>  '2850',
                'description' =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab animi esse quas? Beatae, qui, quibusdam.',
                'image'       =>  asset('/img/s8.png'),
            ],
            8 => [
                'id'          => 9,
                'name'        =>  'Red Shirt',
                'price'       =>  '3000',
                'description' =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab animi esse quas? Beatae, qui, quibusdam.',
                'image'       =>  asset('/img/s9.png'),
            ],
            9 => [
                'id'          => 10,
                'name'        =>  'Blue Shirt',
                'price'       =>  '2000',
                'description' =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab animi esse quas? Beatae, qui, quibusdam.',
                'image'       =>  asset('/img/s10.png'),
            ],

        ];
    }
}
