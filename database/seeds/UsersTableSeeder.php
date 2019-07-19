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
              'password'=>bcrypt('Securitysecret'),
              'dept'=>'Security'
          ],
          [
                "name"=>"S_Affairs Admin",
                "email"=>"S_Affairs@admin.com",
                'reg_no'=>"S_Affairs_admin001",
                'typeof'=>"s_affairs",
                'password'=>bcrypt('S_Affairssecret'),
                'dept'=>'S_Affairs'
            ],
            [
                  "name"=>"Library Admin",
                  "email"=>"Library@admin.com",
                  'reg_no'=>"Library_admin001",
                  'typeof'=>"library",
                  'password'=>bcrypt('Librarysecret'),
                  'dept'=>'Library'
              ],
              [
                    "name"=>"Audit Admin",
                    "email"=>"Audit@admin.com",
                    'reg_no'=>"Audit_admin001",
                    'typeof'=>"audit",
                    'password'=>bcrypt('Auditsecret'),
                    'dept'=>"Audit"
                ],
                [
                      "name"=>"Alumni Admin",
                      "email"=>"Alumni@admin.com",
                      'reg_no'=>"Alumni_admin001",
                      'typeof'=>"alumni",
                      'password'=>bcrypt('Alumnisecret'),
                      'dept'=>"Alumni"
                  ],
                  [
                        "name"=>"Faculty Admin",
                        "email"=>"Faculty@admin.com",
                        'reg_no'=>"Faculty_admin001",
                        'typeof'=>"faculty",
                        'password'=>bcrypt('Facultysecret'),
                        'dept'=>"Faculty"
                    ],
                    [
                          "name"=>"John Doe",
                          "email"=>"john.doe.196863@unn.edu.ng",
                          'reg_no'=>"2014/196863",
                          'typeof'=>"student",
                          'password'=>bcrypt('JohnDoe'),
                          'dept'=>'Electronic'
                    ],
                    [
                          "name"=>"Alan Smith",
                          "email"=>"alan.smith.196864@unn.edu.ng",
                          'reg_no'=>"2014/196864",
                          'typeof'=>"student",
                          'password'=>bcrypt('AlanSmith'),
                          'dept'=>'Electronic'
                    ],
                    [
                          "name"=>"Cynthia Asogwa",
                          "email"=>"cynthia.asogwa.19686@unn.edu.ng",
                          'reg_no'=>"2014/196865",
                          'typeof'=>"student",
                          'password'=>bcrypt('CynthiaAsogwa'),
                          'dept'=>'Electronic'
                    ]
       ]);

    }
}
