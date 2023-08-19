<?php


namespace App\Repositories;


interface IActorPageRepository
{
    public function getAllActor();

    public function getActor($id);

    public function createOrUpdate($id = null, $collection = []);

    public function deleteActor($id);
}
