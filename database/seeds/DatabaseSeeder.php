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
        // $this->call(UsersTableSeeder::class);
        DB::table('activity')->insert([
            'Name' => 'ค่ายอาสา',
            'Hide' => '0'
        ]);

        DB::table('history')->insert([
            'Year'  => '2559',
            'ActID' => '1'
        ]);

        DB::table('history')->insert([
            'Year'  => '2558',
            'ActID' => '1'
        ]);

        DB::table('detail')->insert([
            'Poster'      => 'http://nppi3enz.in.th/wp-content/uploads/2014/05/jwc_poster_A3_final.jpg',
            'Location'    => 'โรงเรียนอนุบาลหมีน้อย',
            'Description' => 'Lorem Ipsum คือ เนื้อหาจำลองแบบเรียบๆ ที่ใช้กันในธุรกิจงานพิมพ์หรืองานเรียงพิมพ์ มันได้กลายมาเป็นเนื้อหาจำลองมาตรฐานของธุรกิจดังกล่าวมาตั้งแต่ศตวรรษที่ 16 เมื่อเครื่องพิมพ์โนเนมเครื่องหนึ่งนำรางตัวพิมพ์มาสลับสับตำแหน่งตัวอักษรเพื่อทำหนังสือตัวอย่าง Lorem Ipsum อยู่ยงคงกระพันมาไม่ใช่แค่เพียงห้าศตวรรษ แต่อยู่มาจนถึงยุคที่พลิกโฉมเข้าสู่งานเรียงพิมพ์ด้วยวิธีทางอิเล็กทรอนิกส์ และยังคงสภาพเดิมไว้อย่างไม่มีการเปลี่ยนแปลง มันได้รับความนิยมมากขึ้นในยุค ค.ศ. 1960',
            'GE'          => '3',
            'HID'         => '1'
        ]);

        DB::table('detail')->insert([
            'Poster'      => 'http://moveworldtogether.com/datas/files/poster4.jpg',
            'Location'    => 'โรงเรียนอนุบาลหมีใหญ่',
            'Description' => 'ด้านล่างของหน้านี้คือท่อนมาตรฐานของ Lorem Ipsum ที่ใช้กันมาตั้งแต่คริสตศตวรรษที่ 16ที่ได้รับการสร้างขึ้นใหม่สำหรับผู้ที่สนใจ ประกอบไปด้วย ตอนที่ 1.10.32 และ 1.10.33 จากเรื่อง "de Finibus Bonorum et Malorum" โดยซิเซโร ก็ได้รับการผลิตขึ้นใหม่ด้วยเช่นกันในรูปแบบที่ตรงกับต้นฉบับ ตามมาด้วยเวอร์ชั่นภาษาอังกฤษจากการแปลของ เอช แร็คแคม เมื่อปี ค.ศ. 1914',
            'GE'          => '2',
            'HID'         => '2'
        ]);

        DB::table('member')->insert([
            'Code'      => '000000000',
            'FirstName' => 'System',
            'LastName'  => 'Admin',
            'Admin'     => '1'
        ]);

        DB::table('member')->insert([
            'Code'      => '560510111',
            'FirstName' => 'นายเด็กดี',
            'LastName'  => 'มีสุข',
            'Admin'     => '0'
        ]);

        DB::table('member')->insert([
            'Code'      => '560510222',
            'FirstName' => 'นายเด็กดี',
            'LastName'  => 'มีสุข',
            'Admin'     => '0'
        ]);

        DB::table('staff')->insert([
            'Position' => 'ประธาน',
            'DID'      => '1',
            'MID'      => '560510111'
        ]);

        DB::table('staff')->insert([
            'Position' => 'รองประธาน',
            'DID'      => '1',
            'MID'      => '560510222'
        ]);

        DB::table('staff')->insert([
            'Position' => 'ประธาน',
            'DID'      => '2',
            'MID'      => '000000000'
        ]);

        DB::table('group')->insert([
            'Name'        => 'สถานที่',
            'Description' => 'จัดเตรียมโต๊ะ เก้าอี้ ให้เรียบร้อย',
            'DID'         => '1'
        ]);

        DB::table('group')->insert([
            'Name'        => 'การเงิน',
            'Description' => 'เก็บเงินได้ 500 จ่ายค่าสถานที่ 400',
            'DID'         => '1'
        ]);

        DB::table('picture')->insert([
            'Url'         => 'http://arsar.yotathai.net/uploads/1/3/7/7/13773379/7715215_orig.jpg',
            'Description' => '',
            'HID'         => '1'
        ]);

        DB::table('picture')->insert([
            'Url'         => 'http://www.prcmu.cmu.ac.th/images/news/140424105630.jpg',
            'Description' => '',
            'HID'         => '1'
        ]);

        DB::table('picture')->insert([
            'Url'         => 'http://www.dalaa-thailand.com/wordpress/wp-content/uploads/524978_249850341817764_83396207_n1.jpg',
            'Description' => '',
            'HID'         => '1'
        ]);

        DB::table('picture')->insert([
            'Url'         => 'http://mpics.manager.co.th/pics/Images/557000000872412.JPEG',
            'Description' => '',
            'HID'         => '1'
        ]);
    }
}
