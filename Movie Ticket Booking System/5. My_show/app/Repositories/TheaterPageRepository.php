<?php


namespace App\Repositories;

use App\Models\City;
use App\Models\Theater;

class TheaterPageRepository implements ITheaterPageRepository
{

    public function getAllTheatre()
    {
        return Theater::all();
    }

    public function getTheatre($id)
    {
        return Theater::find($id);
    }

    public function getTheatreByString($query)
    {
        $query = $query['searchbar'];
        return Theater::where("theatre_name", "LIKE", "%{$query}%")->get();
    }

    public function createOrUpdateTheater($id = null, $collection = [])
    {
        if(is_null($id)) {
            $theater = new Theater();
            $theater->city_id = $collection['city_id'];
            $theater->theatre_name = $collection['theatre_name'];
            $theater->seats_no = $collection['total_seats'];
            return $theater->save();
        }
        $theater = Theater::find($id);
        $theater->city_id = $collection['city_id'];
        $theater->theatre_name = $collection['theatre_name'];
        $theater->seats_no = $collection['total_seats'];
        return $theater->save();
    }

    public function storeCity($id = null, $collection = [])
    {
        City::create([
            'city_name' => $collection['city_name'],
        ]);
    }

//    public function model()
//    {
//        return Theater::class;
//    }

    public function deleteTheater($id)
    {
        return Theater::find($id)->delete();
    }
}
