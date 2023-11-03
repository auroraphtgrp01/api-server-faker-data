<?php

namespace App\Http\Controllers;

use App\Models\Fakers;
use Illuminate\Http\Request;
use Faker\Factory as Faker;
class FakerData extends Controller
{
    public function api(){
        $faker = Faker::create();
        $data = [];
        for ($i = 0; $i < 1000; $i++) {
            $data= [
                'name' => $faker->name,
                'email' => $faker->email,
                'address' => $faker->address,
                'phone' => $faker->phoneNumber,
                'birthdate' => $faker->date,
            ];
            Fakers::create($data);
        }
    }
    public function data() {
        $data = Fakers::paginate(15);
        return response()->json(['data'=> $data]);
    }
}
