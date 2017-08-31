<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Roles seeders
        DB::table('roles')->insert([
            'role_name' => 'Administrator',
            'description' => 'To manage the entire system',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('roles')->insert([
            'role_name' => 'User',
            'description' => 'Just to view posted jobs',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('roles')->insert([
            'role_name' => 'Employer',
            'description' => 'Create jobs and hire Employee',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('roles')->insert([
            'role_name' => 'Employee',
            'description' => 'Apply for posted jobs and get hired',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        //user seeder
        DB::table('users')->insert([
            'name' => 'Collins',
            'email' => 'obicoli@gmail.com',
            'phone' => '+254702294148',
            'gender' => 'Male',
            'dob' => '1990-06-22 17:05:01',
            'password' => bcrypt('12collins'),
            'role_id' => 1,
            'email_confirmed' => true,
            'phone_confirmed' => true,
            'seen' => true,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        //business type
        DB::table('business_types')->insert([
            'name' => 'Oil and Gas',
            'seen' => true,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('business_types')->insert([
            'name' => 'Booking/Travel',
            'seen' => true,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('business_types')->insert([
            'name' => 'Hotel/Hospitality',
            'seen' => true,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        //business type
        DB::table('job_types')->insert([
            'name' => 'Full-time',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('job_types')->insert([
            'name' => 'Part-time',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('job_types')->insert([
            'name' => 'Freelance',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('job_types')->insert([
            'name' => 'Permanent',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);


        //skill_set
        DB::table('skill_sets')->insert(['skill_name' => 'Accounting, finance','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_sets')->insert(['skill_name' => 'Administrative, clerical','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_sets')->insert(['skill_name' => 'Agriculture, fishing, forestry','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_sets')->insert(['skill_name' => 'Banking, finance, insurance','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_sets')->insert(['skill_name' => 'Basic computer skills','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_sets')->insert(['skill_name' => 'Business strategic management','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_sets')->insert(['skill_name' => 'Computing software development(IT)','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_sets')->insert(['skill_name' => 'Construction, architecture, housing','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_sets')->insert(['skill_name' => 'Design, art','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_sets')->insert(['skill_name' => 'Driving licences','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_sets')->insert(['skill_name' => 'Electrical engineering','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_sets')->insert(['skill_name' => 'Energy, power','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_sets')->insert(['skill_name' => 'Engineering, innovation','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_sets')->insert(['skill_name' => 'Entertainment','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_sets')->insert(['skill_name' => 'Food processing, manufacturing','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_sets')->insert(['skill_name' => 'Human resources, career development','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_sets')->insert(['skill_name' => 'Installation, maintenance, repair','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_sets')->insert(['skill_name' => 'Legal, compliance','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_sets')->insert(['skill_name' => 'Management consulting, auditing, tax consultancy','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_sets')->insert(['skill_name' => 'Managerial, organizational skills','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_sets')->insert(['skill_name' => 'Manufacturing, operations, quality','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_sets')->insert(['skill_name' => 'Material manufacturing, processing','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_sets')->insert(['skill_name' => 'Mechanical engineering, metal processing','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_sets')->insert(['skill_name' => 'Media, communications, languages','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_sets')->insert(['skill_name' => 'Medical, health, psychology','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_sets')->insert(['skill_name' => 'People, life skills','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_sets')->insert(['skill_name' => 'Research, academy','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_sets')->insert(['skill_name' => 'Restaurant, hospitality, travel','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_sets')->insert(['skill_name' => 'Sales, marketing, PR, customer care','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_sets')->insert(['skill_name' => 'Security','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_sets')->insert(['skill_name' => 'Skilled, manual labor','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_sets')->insert(['skill_name' => 'Teaching, training','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_sets')->insert(['skill_name' => 'Telecommunications, networks','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_sets')->insert(['skill_name' => 'Textile, clothing, leather, footwear production','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_sets')->insert(['skill_name' => 'Transportation, logistics, driving','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_sets')->insert(['skill_name' => 'Wellbeing','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_sets')->insert(['skill_name' => 'Work discipline','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);

        //skill set details(1)
        DB::table('skill_set_details')->insert(['name' => 'Accounting','skill_set_id' => 1,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_set_details')->insert(['name' => 'Accounting IT-systems (use of)','skill_set_id' => 1,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_set_details')->insert(['name' => 'Accruals','skill_set_id' => 1,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_set_details')->insert(['name' => 'Analytics','skill_set_id' => 1,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_set_details')->insert(['name' => 'Annual accounts','skill_set_id' => 1,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_set_details')->insert(['name' => 'Audit(Internal)','skill_set_id' => 1,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_set_details')->insert(['name' => 'Auditing of accounts','skill_set_id' => 1,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_set_details')->insert(['name' => 'Bookkeeping','skill_set_id' => 1,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_set_details')->insert(['name' => 'Budgeting, financial planning','skill_set_id' => 1,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_set_details')->insert(['name' => 'CPA certification','skill_set_id' => 1,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_set_details')->insert(['name' => 'Cash management (company)','skill_set_id' => 1,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_set_details')->insert(['name' => 'Compliance','skill_set_id' => 1,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_set_details')->insert(['name' => 'Corporate finance','skill_set_id' => 1,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_set_details')->insert(['name' => 'Corporate tax','skill_set_id' => 1,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_set_details')->insert(['name' => 'Corporate treasury','skill_set_id' => 1,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_set_details')->insert(['name' => 'Cost center monitoring','skill_set_id' => 1,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_set_details')->insert(['name' => 'Cost tracking, analysis','skill_set_id' => 1,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_set_details')->insert(['name' => 'Credit auditing','skill_set_id' => 1,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_set_details')->insert(['name' => 'Credit handling','skill_set_id' => 1,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_set_details')->insert(['name' => 'Financial analysis','skill_set_id' => 1,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_set_details')->insert(['name' => 'Financial controlling','skill_set_id' => 1,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_set_details')->insert(['name' => 'Financial reporting','skill_set_id' => 1,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_set_details')->insert(['name' => 'GAAP','skill_set_id' => 1,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_set_details')->insert(['name' => 'General ledger','skill_set_id' => 1,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_set_details')->insert(['name' => 'Grant and fund management','skill_set_id' => 1,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_set_details')->insert(['name' => 'Internal control','skill_set_id' => 1,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_set_details')->insert(['name' => 'International financial reporting standards (IFRS)','skill_set_id' => 1,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_set_details')->insert(['name' => 'Invoicing','skill_set_id' => 1,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_set_details')->insert(['name' => 'Key performance indicators','skill_set_id' => 1,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_set_details')->insert(['name' => 'Payment collection','skill_set_id' => 1,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_set_details')->insert(['name' => 'Payroll','skill_set_id' => 1,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_set_details')->insert(['name' => 'Reporting','skill_set_id' => 1,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_set_details')->insert(['name' => 'Securities and exchange commission (SEC)','skill_set_id' => 1,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_set_details')->insert(['name' => 'Tax management','skill_set_id' => 1,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_set_details')->insert(['name' => 'Tax returns','skill_set_id' => 1,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_set_details')->insert(['name' => 'Year end reporting','skill_set_id' => 1,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);

        //skill set details(2)
        DB::table('skill_set_details')->insert(['name' => 'Answering telephones and call management','skill_set_id' => 2,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_set_details')->insert(['name' => 'Billing','skill_set_id' => 2,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_set_details')->insert(['name' => 'Calendar management','skill_set_id' => 2,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_set_details')->insert(['name' => 'Document and archive management','skill_set_id' => 2,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_set_details')->insert(['name' => 'Email correspondence','skill_set_id' => 2,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_set_details')->insert(['name' => 'Meeting preparation','skill_set_id' => 2,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_set_details')->insert(['name' => 'Office administration, management','skill_set_id' => 2,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_set_details')->insert(['name' => 'Office catering','skill_set_id' => 2,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_set_details')->insert(['name' => 'Office reception','skill_set_id' => 2,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_set_details')->insert(['name' => 'Office supplies management','skill_set_id' => 2,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_set_details')->insert(['name' => 'Order handling','skill_set_id' => 2,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_set_details')->insert(['name' => 'Presentation preparation and editing (Microsoft PowerPoint)','skill_set_id' => 2,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_set_details')->insert(['name' => 'Reporting','skill_set_id' => 2,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_set_details')->insert(['name' => 'Secretarial work','skill_set_id' => 2,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_set_details')->insert(['name' => 'Spreadsheet preparation and editing (Microsoft Excel)','skill_set_id' => 2,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_set_details')->insert(['name' => 'Travel planning and reservations (leisure, business)','skill_set_id' => 2,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_set_details')->insert(['name' => 'Typing and note taking','skill_set_id' => 2,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_set_details')->insert(['name' => 'Videoconferencing and office electronics','skill_set_id' => 2,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_set_details')->insert(['name' => 'Word processing and office software','skill_set_id' => 2,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);
        DB::table('skill_set_details')->insert(['name' => 'Written communication','skill_set_id' => 2,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),]);

    }
}
