<?php


namespace App\Repositories;


interface IMoviePageRepository
{
    public function getAllMovie();

    public function getMovie($id);

    public function getMovieByString($query);

    public function createOrUpdateMovie($id = null, $collection = []);

    public function createOrUpdateCast($id = null, $collection = []);

    public function movieShows($id = null, $collection = []);

    public function deleteMovie($id);
}
