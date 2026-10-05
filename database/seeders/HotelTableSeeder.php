<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Category;
use Illuminate\Database\Seeder;
use App\Models\Hotel;
use Symfony\Polyfill\Ctype\Ctype;

class HotelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $city = City::pluck('id');
        $category = Category::pluck('id');

        // Map mặc định (toạ độ Việt Nam) dùng cho các khách sạn bổ sung.
        $defaultMap = 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724467.0!2d105.84117!3d16.0583!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2sVi%E1%BB%87t%20Nam!5e0!3m2!1svi!2s!4v0000000000000!5m2!1svi!2s';

        $images = ['1.jpg', '2.jpg', '3.jpg', '4.jpg', 'bm1.jpg', 'bm2.jpg', 'bm3.jpg', 'bm4.jpg',
            'mtnl.jpg', 'mtnl3.jpeg', 'mtnl4.jpeg', 'mtnt2.jpeg',
            'seastar.jpg', 'seastar.png', 'seastar3.jpg', 'seastar4.png', 'seastar5.jpeg',
            'vl1.jpg', 'vl2.jpg', 'vl3.jpeg', 'vl4.jpeg'];

        // 5 khách sạn gốc — GIỮ NGUYÊN id 1-5 vì RoomTableSeeder tham chiếu đến chúng.
        $data = [
            [
                'name' => 'Khách sạn sao biển (Seastar)',
                'address' => '63 Trường Pháp, Đồng Hới, Quảng Bình',
                'city_id' => 2,
                'category_id' => 1,
                'website' => 'https://www.booking.com/hotel/vn',
                'description' => 'Khách sạn 5 sao ven biển Nhật Lệ, view đẹp.',
                'star' => 5,
                'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28615.828349765135!2d106.591828314093!3d17.513489232188135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3147575ccf930325%3A0x4735d574ea264576!2zUXVhbmcgUGjDuiwgxJDhu5NuZyBI4bubaSwgUXXhuqNuZyBCw6xuaCwgVmnhu4d0IE5hbQ!5e1!3m2!1svi!2s!4v1635348076689!5m2!1svi!2s',
                'image' => 'seastar.jpg',
            ],
            [
                'name' => 'Khách sạn Ban Mai',
                'address' => '200 Trường Pháp, Đồng Hới, Quảng Bình',
                'city_id' => 2,
                'category_id' => 2,
                'website' => 'https://www.booking.com/hotel/vn',
                'description' => 'Khách sạn 3 sao trung tâm Đồng Hới.',
                'star' => 3,
                'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19921.882496967275!2d106.59227132923742!3d17.508717617493588!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf98414e4e61dd18a!2zS2jDoWNoIFPhuqFuIEJhbiBNYWk!5e1!3m2!1svi!2s!4v1635348188655!5m2!1svi!2s',
                'image' => '2.jpg',
            ],
            [
                'name' => 'Khách sạn Việt Lào',
                'address' => '267 Trường Pháp, Đồng Hới, Quảng Bình',
                'city_id' => 2,
                'category_id' => 2,
                'website' => 'https://www.booking.com/hotel/vn',
                'description' => 'Khách sạn ven biển, view đẹp, giá hợp lý.',
                'star' => 3,
                'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19921.882496967275!2d106.59227132923742!3d17.508717617493588!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa95157826e4def61!2zS2jDoWNoIHPhuqFuIFZp4buHdCBMw6Bv!5e1!3m2!1svi!2s!4v1635348273946!5m2!1svi!2s',
                'image' => '3.jpg',
            ],
            [
                'name' => 'Khách sạn Mường Thanh Luxury Nhật Lệ',
                'address' => '121 Trương Pháp, Bắc Lý, Đồng Hới, Quảng Bình, Việt Nam',
                'city_id' => 2,
                'category_id' => 2,
                'website' => 'https://www.booking.com/hotel/vn',
                'description' => 'Khách sạn 4 sao, hồ bơi vô cực, view biển.',
                'star' => 4,
                'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11618.32017474158!2d106.61954953171669!3d17.487663161570673!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31475745dd773f79%3A0xc9bd4f383fbe7fb2!2zS2jDoWNoIHPhuqFuIE3GsOG7nW5nIFRoYW5oIEx1eHVyeSBOaOG6rXQgTOG7hw!5e1!3m2!1svi!2s!4v1635348441217!5m2!1svi!2s',
                'image' => '1.jpg',
            ],
            [
                'name' => 'Riverside Hotel Quảng Bình',
                'address' => '15 Trương Pháp, Đồng Mỹ, Đồng Hới, Quảng Bình, Việt Nam',
                'city_id' => 2,
                'category_id' => 2,
                'website' => 'https://www.booking.com/hotel/vn',
                'description' => 'Khách sạn ven sông Nhật Lệ, gần biển.',
                'star' => 4,
                'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9694.187359932539!2d106.61904939588142!3d17.480937839186772!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31475745c24c491f%3A0x7d457e1bfedb4f46!2sRiverside%20Hotel%20Qu%E1%BA%A3ng%20B%C3%ACnh!5e1!3m2!1svi!2s!4v1635348559056!5m2!1svi!2s',
                'image' => '4.jpg',
            ],
        ];

        // Khách sạn bổ sung — phân bố trên nhiều tỉnh/thành.
        $more = [
            // Hà Nội (city_id = 1)
            ['Khách sạn Sofitel Legend Metropole Hà Nội',  '15 Ngô Quyền, Hoàn Kiếm, Hà Nội',                1, 1, 5],
            ['Khách sạn Hilton Hanoi Opera',               '1 Lê Thánh Tông, Hoàn Kiếm, Hà Nội',             1, 2, 5],
            ['Khách sạn Lotte Hotel Hanoi',                '54 Liễu Giai, Ba Đình, Hà Nội',                  1, 2, 5],
            ['Khách sạn La Siesta Premium Hàng Bè',        '94 Mã Mây, Hoàn Kiếm, Hà Nội',                   1, 1, 4],
            ['Khách sạn Hanoi Pearl',                      '6 Bảo Khánh, Hoàn Kiếm, Hà Nội',                 1, 2, 4],
            ['Khách sạn Mường Thanh Hà Nội Centre',        '78 Thợ Nhuộm, Hoàn Kiếm, Hà Nội',                1, 2, 4],

            // Quảng Bình (city_id = 2)
            ['Khách sạn Sun Spa Resort',                   'Bảo Ninh, Đồng Hới, Quảng Bình',                 2, 1, 5],
            ['Khách sạn Gold Coast Hotel Resort & Spa',    'Bảo Ninh, Đồng Hới, Quảng Bình',                 2, 1, 4],

            // Quảng Trị (city_id = 3)
            ['Khách sạn Mường Thanh Quảng Trị',            '68 Lê Duẩn, Đông Hà, Quảng Trị',                 3, 2, 4],
            ['Khách sạn Sài Gòn Đông Hà',                  '01 Bùi Thị Xuân, Đông Hà, Quảng Trị',            3, 2, 3],

            // Đà Nẵng (city_id = 4)
            ['Khách sạn InterContinental Đà Nẵng Sun Peninsula', 'Bãi Bắc, Sơn Trà, Đà Nẵng',               4, 1, 5],
            ['Khách sạn Furama Resort Đà Nẵng',            '105 Võ Nguyên Giáp, Ngũ Hành Sơn, Đà Nẵng',      4, 1, 5],
            ['Khách sạn Vinpearl Luxury Đà Nẵng',          '23 Trường Sa, Ngũ Hành Sơn, Đà Nẵng',            4, 1, 5],
            ['Khách sạn Novotel Danang Premier Han River', '36 Bạch Đằng, Hải Châu, Đà Nẵng',                4, 2, 4],
            ['Khách sạn Mường Thanh Luxury Sông Hàn',      '115 Nguyễn Văn Linh, Đà Nẵng',                   4, 2, 4],

            // Huế (city_id = 5)
            ['Khách sạn Indochine Palace',                 '105A Hùng Vương, Phú Nhuận, Huế',                5, 1, 5],
            ['Khách sạn Vinpearl Hotel Huế',               '50A Hùng Vương, Phú Hội, Huế',                   5, 2, 5],
            ['Khách sạn Imperial Hue',                     '08 Hùng Vương, Huế',                             5, 1, 5],
            ['Khách sạn Mường Thanh Holiday Huế',          '38 Lê Lợi, Huế',                                 5, 2, 4],

            // Quảng Nam (city_id = 6)
            ['Khách sạn Hoiana Hotel & Suites',            'Bình Minh, Thăng Bình, Quảng Nam',               6, 1, 5],
            ['Khách sạn Four Seasons Resort The Nam Hai',  'Điện Dương, Điện Bàn, Quảng Nam',                6, 1, 5],
            ['Khách sạn Anantara Hội An Resort',           '1 Phạm Hồng Thái, Hội An, Quảng Nam',            6, 1, 4],

            // Bình Định (city_id = 7)
            ['Khách sạn FLC Luxury Hotel Quy Nhơn',        'KĐT du lịch sinh thái Nhơn Lý, Quy Nhơn',        7, 1, 5],
            ['Khách sạn AVANI Quy Nhơn Resort',            'Ghềnh Ráng, Quy Nhơn, Bình Định',                7, 1, 5],

            // Hồ Chí Minh (city_id = 8)
            ['Khách sạn The Reverie Saigon',               '22-36 Nguyễn Huệ, Quận 1, TP.HCM',               8, 1, 5],
            ['Khách sạn Park Hyatt Saigon',                '02 Công trường Lam Sơn, Quận 1, TP.HCM',         8, 1, 5],
            ['Khách sạn Caravelle Saigon',                 '19-23 Công trường Lam Sơn, Quận 1, TP.HCM',      8, 2, 5],
            ['Khách sạn Rex Hotel Saigon',                 '141 Nguyễn Huệ, Quận 1, TP.HCM',                 8, 2, 5],
            ['Khách sạn Liberty Central Saigon Citypoint', '59-61 Pasteur, Quận 1, TP.HCM',                  8, 2, 4],
            ['Khách sạn Pullman Saigon Centre',            '148 Trần Hưng Đạo, Quận 1, TP.HCM',              8, 2, 5],

            // An Giang (9)
            ['Khách sạn Victoria Châu Đốc',                '32 Lê Lợi, Châu Đốc, An Giang',                  9, 1, 4],

            // Cao Bằng (10)
            ['Khách sạn Mường Thanh Cao Bằng',             '1 Đoàn Thị Điểm, Cao Bằng',                      10, 2, 4],

            // Đắk Nông (11)
            ['Khách sạn Bazan Đắk Nông',                   '11 Lê Lai, Gia Nghĩa, Đắk Nông',                 11, 2, 3],

            // Gia Lai (12)
            ['Khách sạn Pleiku Hotel',                     '124 Lê Lợi, Pleiku, Gia Lai',                    12, 2, 4],

            // Hà Giang (13)
            ['Khách sạn Hà An Hà Giang',                   '10 Trần Hưng Đạo, Hà Giang',                     13, 2, 3],
            ['Khách sạn P\'apiu Resort',                   'Yên Định, Bắc Mê, Hà Giang',                     13, 1, 5],

            // Kiên Giang - Phú Quốc (14)
            ['Khách sạn JW Marriott Phú Quốc Emerald Bay', 'Bãi Khem, An Thới, Phú Quốc, Kiên Giang',        14, 1, 5],
            ['Khách sạn Vinpearl Resort & Spa Phú Quốc',   'Bãi Dài, Gành Dầu, Phú Quốc, Kiên Giang',        14, 1, 5],
            ['Khách sạn Premier Village Phú Quốc Resort',  'Mũi Ông Đội, An Thới, Phú Quốc, Kiên Giang',     14, 1, 5],
            ['Khách sạn Salinda Resort Phú Quốc',          'Cửa Lấp, Dương Đông, Phú Quốc, Kiên Giang',      14, 1, 4],

            // Lào Cai - Sa Pa (15)
            ['Khách sạn Hotel de la Coupole MGallery',     '1 Hoàng Liên, Sa Pa, Lào Cai',                   15, 1, 5],
            ['Khách sạn Silk Path Grand Sapa Resort',      'Đồi Nà Lin, Sa Pa, Lào Cai',                     15, 1, 5],
            ['Khách sạn Topas Ecolodge',                   'Thanh Kim, Sa Pa, Lào Cai',                      15, 1, 4],

            // Lạng Sơn (16)
            ['Khách sạn Mường Thanh Lạng Sơn',             'Hoàng Văn Thụ, Lạng Sơn',                        16, 2, 4],

            // Khánh Hòa - Nha Trang (17)
            ['Khách sạn Vinpearl Resort Nha Trang',        'Đảo Hòn Tre, Nha Trang, Khánh Hòa',              17, 1, 5],
            ['Khách sạn Sheraton Nha Trang Hotel & Spa',   '26-28 Trần Phú, Nha Trang, Khánh Hòa',           17, 1, 5],
            ['Khách sạn InterContinental Nha Trang',       '32-34 Trần Phú, Nha Trang, Khánh Hòa',           17, 1, 5],
            ['Khách sạn Mường Thanh Luxury Nha Trang',     '60 Trần Phú, Nha Trang, Khánh Hòa',              17, 2, 4],

            // Ninh Thuận (18)
            ['Khách sạn Amanoi Ninh Thuận',                'Vĩnh Hy, Vĩnh Hải, Ninh Hải, Ninh Thuận',        18, 1, 5],
            ['Khách sạn TTC Resort Ninh Thuận',            '1 Yên Ninh, Phan Rang, Ninh Thuận',              18, 1, 4],

            // Quảng Ngãi (19)
            ['Khách sạn Mường Thanh Quảng Ngãi',           '402 Hai Bà Trưng, Quảng Ngãi',                   19, 2, 4],

            // Quảng Ninh - Hạ Long (20)
            ['Khách sạn Vinpearl Resort Hạ Long',          'Đảo Rều, Bãi Cháy, Hạ Long, Quảng Ninh',         20, 1, 5],
            ['Khách sạn Wyndham Legend Hạ Long',           '12 Hạ Long, Bãi Cháy, Hạ Long, Quảng Ninh',      20, 1, 5],
            ['Khách sạn Novotel Hạ Long Bay',              'Hạ Long, Bãi Cháy, Hạ Long, Quảng Ninh',         20, 2, 4],

            // Thái Bình (21)
            ['Khách sạn Petro Thái Bình',                  '32 Quang Trung, Thái Bình',                      21, 2, 4],

            // Hải Phòng (22)
            ['Khách sạn Pearl River Hotel Hải Phòng',      '102 Lê Hồng Phong, Hải Phòng',                   22, 2, 5],
            ['Khách sạn Mercure Hải Phòng',                '12 Lạch Tray, Ngô Quyền, Hải Phòng',             22, 2, 4],

            // Cần Thơ (23)
            ['Khách sạn Mường Thanh Luxury Cần Thơ',       'Cồn Cái Khế, Ninh Kiều, Cần Thơ',                23, 2, 5],
            ['Khách sạn Vinpearl Hotel Cần Thơ',           '209 đường 30 tháng 4, Ninh Kiều, Cần Thơ',       23, 2, 5],

            // Lâm Đồng - Đà Lạt (24)
            ['Khách sạn Ana Mandara Villas Dalat',         'Lê Lai, Đà Lạt, Lâm Đồng',                       24, 1, 5],
            ['Khách sạn Dalat Palace Heritage',            '02 Trần Phú, Đà Lạt, Lâm Đồng',                  24, 1, 5],
            ['Khách sạn Swiss-Belresort Tuyền Lâm',        'Hồ Tuyền Lâm, Đà Lạt, Lâm Đồng',                 24, 1, 4],
            ['Khách sạn Terracotta Hotel & Resort Dalat',  'Hồ Tuyền Lâm, Đà Lạt, Lâm Đồng',                 24, 1, 4],

            // Vũng Tàu (25)
            ['Khách sạn The Imperial Hotel Vũng Tàu',      '159 Thùy Vân, Vũng Tàu',                         25, 1, 5],
            ['Khách sạn Pullman Vũng Tàu',                 '15 Thi Sách, Vũng Tàu',                          25, 2, 5],
            ['Khách sạn Malibu Hotel Vũng Tàu',            'Thùy Vân, Vũng Tàu',                             25, 2, 4],

            // Bình Thuận - Mũi Né (26)
            ['Khách sạn The Anam Mũi Né',                  'Hàm Tiến, Phan Thiết, Bình Thuận',               26, 1, 5],
            ['Khách sạn Centara Mirage Resort Mũi Né',     '12 Nguyễn Thông, Phan Thiết, Bình Thuận',        26, 1, 4],

            // Phú Yên (27)
            ['Khách sạn Sala Tuy Hòa Beach Hotel',         '339 Hùng Vương, Tuy Hòa, Phú Yên',               27, 2, 4],

            // Đắk Lắk (28)
            ['Khách sạn Mường Thanh Luxury Buôn Ma Thuột', '81 Nguyễn Tất Thành, Buôn Ma Thuột, Đắk Lắk',    28, 2, 5],

            // Kon Tum (29)
            ['Khách sạn Indochine Kon Tum',                '30 Bạch Đằng, Kon Tum',                          29, 2, 4],

            // Sơn La (30) / Điện Biên (31) / Yên Bái (32) / Tuyên Quang (33)
            ['Khách sạn Mường Thanh Mộc Châu',             'Tiểu khu Bó Bun, Mộc Châu, Sơn La',              30, 1, 4],
            ['Khách sạn Mường Thanh Điện Biên Phủ',        '514 Võ Nguyên Giáp, Điện Biên Phủ',              31, 2, 4],
            ['Khách sạn Mường Lò Yên Bái',                 'Đường Điện Biên, Nghĩa Lộ, Yên Bái',             32, 2, 3],
            ['Khách sạn Mây Tuyên Quang Resort',           'Na Hang, Tuyên Quang',                           33, 1, 4],

            // Ninh Bình (34) / Thanh Hóa (35) / Nghệ An (36) / Hà Tĩnh (37)
            ['Khách sạn Emeralda Resort Ninh Bình',        'Tập Ninh, Gia Vân, Gia Viễn, Ninh Bình',         34, 1, 5],
            ['Khách sạn Tam Cốc Garden Resort',            'Hải Nham, Ninh Hải, Hoa Lư, Ninh Bình',          34, 1, 4],
            ['Khách sạn FLC Sầm Sơn Beach & Golf Resort',  'Quảng Cư, Sầm Sơn, Thanh Hóa',                   35, 1, 5],
            ['Khách sạn Mường Thanh Diễn Lâm',             'Diễn Lâm, Diễn Châu, Nghệ An',                   36, 1, 4],
            ['Khách sạn Mường Thanh Cửa Lò',               'Bình Minh, Cửa Lò, Nghệ An',                     36, 1, 4],
            ['Khách sạn Mường Thanh Hà Tĩnh',              '74 Hà Huy Tập, Hà Tĩnh',                         37, 2, 4],

            // Bến Tre (38) / Cà Mau (39) / Đồng Tháp (40) / Tây Ninh (41)
            ['Khách sạn Hàm Luông Bến Tre',                '200C Hùng Vương, Bến Tre',                       38, 2, 4],
            ['Khách sạn Mường Thanh Luxury Cà Mau',        'Phan Ngọc Hiển, Cà Mau',                         39, 2, 5],
            ['Khách sạn Sa Đéc Hotel',                     '108/5A Hùng Vương, Sa Đéc, Đồng Tháp',           40, 2, 3],
            ['Khách sạn Sunrise Tây Ninh',                 'Núi Bà Đen, Tây Ninh',                           41, 1, 4],
        ];

        $imgCount = count($images);
        foreach ($more as $i => $row) {
            [$name, $address, $cityId, $catId, $star] = $row;
            $data[] = [
                'name' => $name,
                'address' => $address,
                'city_id' => $cityId,
                'category_id' => $catId,
                'website' => 'https://www.booking.com/hotel/vn',
                'description' => 'Khách sạn ' . $star . ' sao tại ' . explode(',', $address)[count(explode(',', $address)) - 1] . '.',
                'star' => $star,
                'map' => $defaultMap,
                'image' => $images[$i % $imgCount],
            ];
        }

        Hotel::insert($data);
    }
}
