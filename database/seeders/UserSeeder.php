<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            "firstname" => "Arjun",
            "lastname" => "Pandit",
            "email" => "arjun@gmail.com",
            "password" => "12345678",
            "dob" => "21 June 1993",
            "gender" => "male",
            "income" => "100000000",
            "job" => "business",
            "family" => "joint family",
            "manglik" => "yes",
            "partner_income" => "₹7500 - ₹50000",
            "partner_job" => "government",
            "partner_family" => "nuclear",
            "partner_manglik" => "no",
            "role" => "user"
        ]);

        User::create([
            "firstname" => "Allen",
            "lastname" => "Jacob",
            "email" => "allen@gmail.com",
            "password" => "12345678",
            "dob" => "22 April 1943",
            "gender" => "male",
            "income" => "500",
            "job" => "government job",
            "family" => "joint family",
            "manglik" => "yes",
            "partner_income" => "₹750 - ₹15000",
            "partner_job" => "government",
            "partner_family" => "joint",
            "partner_manglik" => "yes",
            "role" => "user"
        ]);

        User::create([
            "firstname" => "admin",
            "lastname" => "admin",
            "email" => "admin@gmail.com",
            "password" => "12345678",
            "dob" => "NA",
            "gender" => "NA",
            "income" => "NA",
            "job" => "NA",
            "family" => "NA",
            "manglik" => "NA",
            "partner_income" => "NA",
            "partner_job" => "NA",
            "partner_family" => "NA",
            "partner_manglik" => "NA",
            "role" => "admin"
        ]);

        User::create([
            "firstname" => "Jasmin",
            "lastname" => "khan",
            "email" => "jasmin@gmail.com",
            "password" => "12345678",
            "dob" => "22 April 1990",
            "gender" => "female",
            "income" => "500000",
            "job" => "private job",
            "family" => "joint family",
            "manglik" => "yes",
            "partner_income" => "₹7500 - ₹30000",
            "partner_job" => "government",
            "partner_family" => "joint",
            "partner_manglik" => "yes",
            "role" => "user"
        ]);

        User::create([
            "firstname" => "Pooja",
            "lastname" => "Yadav",
            "email" => "pooja@gmail.com",
            "password" => "12345678",
            "dob" => "22 April 1994",
            "gender" => "female",
            "income" => "100000",
            "job" => "private job",
            "family" => "nuclear family",
            "manglik" => "yes",
            "partner_income" => "₹7500 - ₹50000",
            "partner_job" => "government",
            "partner_family" => "joint",
            "partner_manglik" => "no",
            "role" => "user"
        ]);

        User::create([
            "firstname" => "Sana",
            "lastname" => "singh",
            "email" => "sana@gmail.com",
            "password" => "12345678",
            "dob" => "22 April 1993",
            "gender" => "male",
            "income" => "100",
            "job" => "private job",
            "family" => "joint family",
            "manglik" => "no",
            "partner_income" => "₹7500 - ₹3000",
            "partner_job" => "government",
            "partner_family" => "joint",
            "partner_manglik" => "yes",
            "role" => "user"
        ]);
    }
}
