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
        $city= City::pluck('id');
        $category= Category::pluck('id');

        $data = [
            [
                'name'=>'Khách sạn sao biển (Seastar)',
                'address'=>'63 Trường Pháp, Đồng Hới, Quảng Bình',
                'city_id'=> '2',
                'category_id'=> '1',
                'website'=>'https://www.booking.com/hotel/vn',
                'description'=>'null',
                'star'=>'5',
                'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28615.828349765135!2d106.591828314093!3d17.513489232188135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3147575ccf930325%3A0x4735d574ea264576!2zUXVhbmcgUGjDuiwgxJDhu5NuZyBI4bubaSwgUXXhuqNuZyBCw6xuaCwgVmnhu4d0IE5hbQ!5e1!3m2!1svi!2s!4v1635348076689!5m2!1svi!2s',
                'image' => 'seastar.jpg',
            ], 
            [
                'name'=>'Khách sạn Ban Mai',
                'address'=>'200 Trường Pháp, Đồng Hới, Quảng Bình',
                'city_id'=> '2',
                'category_id'=> '2',
                'website'=>'https://www.booking.com/hotel/vn',
                'description'=>'null',
                'star'=>'3',
                'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19921.882496967275!2d106.59227132923742!3d17.508717617493588!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf98414e4e61dd18a!2zS2jDoWNoIFPhuqFuIEJhbiBNYWk!5e1!3m2!1svi!2s!4v1635348188655!5m2!1svi!2s',
                'image' => '2.jpg',
            ],
            [
                'name'=>'Khách sạn Việt Lào',
                'address'=>'267 Trường Pháp, Đồng Hới, Quảng Bình',
                'city_id'=> '2',
                'category_id'=> '2',
                'website'=>'https://www.booking.com/hotel/vn',
                'description'=>'null',
                'star'=>'3',
                'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19921.882496967275!2d106.59227132923742!3d17.508717617493588!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa95157826e4def61!2zS2jDoWNoIHPhuqFuIFZp4buHdCBMw6Bv!5e1!3m2!1svi!2s!4v1635348273946!5m2!1svi!2s',
                'image' => '3.jpg',
            ],
            [
                'name'=>' Khách sạn Mường Thanh Luxury Nhật Lệ',
                'address'=>'121 Trương Pháp, Bắc Lý, Đồng Hới, Quảng Bình, Việt Nam',
                'city_id'=> '2',
                'category_id'=> '2',
                'website'=>'https://www.booking.com/hotel/vn',
                'description'=>'null',
                'star'=>'4',
                'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11618.32017474158!2d106.61954953171669!3d17.487663161570673!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31475745dd773f79%3A0xc9bd4f383fbe7fb2!2zS2jDoWNoIHPhuqFuIE3GsOG7nW5nIFRoYW5oIEx1eHVyeSBOaOG6rXQgTOG7hw!5e1!3m2!1svi!2s!4v1635348441217!5m2!1svi!2s',
                'image' => '1.jpg',
            ],
            [
                'name'=>'Riverside Hotel Quảng Bình',
                'address'=>'15 Trương Pháp, Đồng Mỹ, Đồng Hới, Quảng Bình, Việt Nam',
                'city_id'=> '2',
                'category_id'=> '2',
                'website'=>'https://www.booking.com/hotel/vn',
                'description'=>'null',
                'star'=>'4',
                'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9694.187359932539!2d106.61904939588142!3d17.480937839186772!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31475745c24c491f%3A0x7d457e1bfedb4f46!2sRiverside%20Hotel%20Qu%E1%BA%A3ng%20B%C3%ACnh!5e1!3m2!1svi!2s!4v1635348559056!5m2!1svi!2s',
                'image' => '4.jpg',
            ],            
           
        ];
        Hotel::insert($data);

    }
}
