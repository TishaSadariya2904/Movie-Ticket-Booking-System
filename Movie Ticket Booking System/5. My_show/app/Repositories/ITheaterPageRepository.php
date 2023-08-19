<?php


namespace App\Repositories;


interface ITheaterPageRepository
{
    public function getAllTheatre();

    public function getTheatre($id);

    public function getTheatreByString($query);

    public function createOrUpdateTheater($id = null, $collection = []);

    public function deleteTheater($id);

    public function storeCity($id = null, $collection = []);
}
