<?php

use App\Models\Category;
use App\Models\City;
use App\Models\Hotel;
use App\Models\HotelRate;

function showRate($id)
    {
        $sumhotelRate = HotelRate::where('hotel_id', $id)->sum("rate");
        $numbers_review = countRate($id);
        if($sumhotelRate == 0){
            $hotelRate = 0;
        }
        else{
            $hotelRate = round($sumhotelRate / $numbers_review, 1);
        }
        return $hotelRate;
    }

    function countRate($id)
    {
        $numbers_review = HotelRate::where('hotel_id', $id)->count();
        return $numbers_review;
    }

    function showtypehotel($id)
    {
        $typehotel = Category::where('id', $id)->pluck('category');
        return $typehotel[0];
    }
    
    function showRatecity($cityid)
    {   
        $sumrate = City::where('id', $cityid)->withSum('hotel_rates', 'rate')->pluck('hotel_rates_sum_rate');
        $sumrate = $sumrate[0];
        $countrate = countRatecity($cityid);
        if($sumrate == 0){
            $avgrate = 0;
        }
        else{
            $avgrate = round($sumrate/$countrate, 1);
        }
        return $avgrate;
    }
    function countRatecity($cityid)
    {
        $countrate = City::where('id', $cityid)->withCount('hotel_rates')->pluck('hotel_rates_count');
        return $countrate[0];
    }

function getNameCity($cityid)
    {
        $nameCity = City::where('id', $cityid)->first()->city;
        return $nameCity;
    }
    


    
?>

