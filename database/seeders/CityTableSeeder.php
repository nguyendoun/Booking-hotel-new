<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\City;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            // id 1-8: giữ nguyên cho tương thích ngược với các seeder cũ
            ['city' => 'Hà Nội',       'img' => 'HN.jpg'],
            ['city' => 'Quảng Bình',   'img' => 'QB.png'],
            ['city' => 'Quảng Trị',    'img' => 'QT.jpg'],
            ['city' => 'Đà Nẵng',      'img' => 'ĐN.jpg'],
            ['city' => 'Huế',          'img' => 'Hue.jpg'],
            ['city' => 'Quảng Nam',    'img' => 'QNam.jpg'],
            ['city' => 'Bình Định',    'img' => 'BDinh.jpg'],
            ['city' => 'Hồ Chí Minh',  'img' => 'TPHCM.jpg'],

            // các tỉnh/thành bổ sung — có ảnh sẵn trong public/images/cities
            ['city' => 'An Giang',     'img' => 'AnGiang.jpg'],
            ['city' => 'Cao Bằng',     'img' => 'CaoBang.jpg'],
            ['city' => 'Đắk Nông',     'img' => 'Daknong.jpg'],
            ['city' => 'Gia Lai',      'img' => 'Gialai.jpg'],
            ['city' => 'Hà Giang',     'img' => 'HaGiang.jpg'],
            ['city' => 'Kiên Giang',   'img' => 'KienGiang.jpg'],
            ['city' => 'Lào Cai',      'img' => 'LaoCai.jpg'],
            ['city' => 'Lạng Sơn',     'img' => 'LSon.jpg'],
            ['city' => 'Khánh Hòa',    'img' => 'NhaTrang.jpg'],
            ['city' => 'Ninh Thuận',   'img' => 'NThuan.jpeg'],
            ['city' => 'Quảng Ngãi',   'img' => 'QNgai.png'],
            ['city' => 'Quảng Ninh',   'img' => 'QNinh.jpg'],
            ['city' => 'Thái Bình',    'img' => 'ThaiBinh.jpg'],

            // các tỉnh/thành phổ biến khác — dùng ảnh đại diện gần nhất
            ['city' => 'Hải Phòng',    'img' => 'QNinh.jpg'],
            ['city' => 'Cần Thơ',      'img' => 'KienGiang.jpg'],
            ['city' => 'Lâm Đồng',     'img' => 'Daknong.jpg'],
            ['city' => 'Bà Rịa - Vũng Tàu', 'img' => 'NhaTrang.jpg'],
            ['city' => 'Bình Thuận',   'img' => 'NThuan.jpeg'],
            ['city' => 'Phú Yên',      'img' => 'NhaTrang.jpg'],
            ['city' => 'Đắk Lắk',      'img' => 'Daknong.jpg'],
            ['city' => 'Kon Tum',      'img' => 'Gialai.jpg'],
            ['city' => 'Sơn La',       'img' => 'LaoCai.jpg'],
            ['city' => 'Điện Biên',    'img' => 'LaoCai.jpg'],
            ['city' => 'Yên Bái',      'img' => 'LaoCai.jpg'],
            ['city' => 'Tuyên Quang',  'img' => 'HaGiang.jpg'],
            ['city' => 'Ninh Bình',    'img' => 'QB.png'],
            ['city' => 'Thanh Hóa',    'img' => 'QB.png'],
            ['city' => 'Nghệ An',      'img' => 'QB.png'],
            ['city' => 'Hà Tĩnh',      'img' => 'QB.png'],
            ['city' => 'Bến Tre',      'img' => 'KienGiang.jpg'],
            ['city' => 'Cà Mau',       'img' => 'KienGiang.jpg'],
            ['city' => 'Đồng Tháp',    'img' => 'AnGiang.jpg'],
            ['city' => 'Tây Ninh',     'img' => 'TPHCM.jpg'],
        ];
        City::insert($data);
    }
}
