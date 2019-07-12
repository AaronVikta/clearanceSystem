<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create the seed for the users table
        DB::table("users")->insert([

        [
              "name"=>"Security Admin",
              "email"=>"Security@admin.com",
              'reg_no'=>"Security_admin001",
              'typeof'=>"security",
              'password'=>bcrypt('Securitysecret')
          ],
          [
                "name"=>"S_Affairs Admin",
                "email"=>"S_Affairs@admin.com",
                'reg_no'=>"S_Affairs_admin001",
                'typeof'=>"s_affairs",
                'password'=>bcrypt('S_Affairssecret')
            ],
            [
                  "name"=>"Library Admin",
                  "email"=>"Library@admin.com",
                  'reg_no'=>"Library_admin001",
                  'typeof'=>"library",
                  'password'=>bcrypt('Librarysecret')
              ],
              [
                    "name"=>"Audit Admin",
                    "email"=>"Audit@admin.com",
                    'reg_no'=>"Audit_admin001",
                    'typeof'=>"audit",
                    'password'=>bcrypt('Auditsecret')
                ],
                [
                      "name"=>"Alumni Admin",
                      "email"=>"Alumni@admin.com",
                      'reg_no'=>"Alumni_admin001",
                      'typeof'=>"alumni",
                      'password'=>bcrypt('Alumnisecret')
                  ],
                  [
                        "name"=>"Faculty Admin",
                        "email"=>"Faculty@admin.com",
                        'reg_no'=>"Faculty_admin001",
                        'typeof'=>"faculty",
                        'password'=>bcrypt('Facultysecret')
                    ]
       ]);

    }
}
