<?php
/**
 * Created by PhpStorm.
 * User: - LENOVO -
 * Date: 10/08/2015
 * Time: 9:16
 */

namespace App\Domain\Repositories;


use App\Domain\Contracts\GuestContract;
use App\Domain\Entities\Guest;

class GuestRepository implements GuestContract
{

    public function index()
    {

        return Guest::all();

    }

    public function store(array $data)
    {
        $guest = new Guest;

        $guest->name = $data['name'];
        $guest->phone = $data['phone'];
        $guest->email = $data['email'];
        $guest->sites = $data['sites'];
        $guest->message = $data['message'];
        $guest->save();

        return $guest;
    }

    public function update(array $data,$id)
    {

        $guest = Guest::findOrNew($id);
        $guest->name = $data['name'];
        $guest->phone = $data['phone'];
        $guest->email = $data['email'];
        $guest->sites = $data['sites'];
        $guest->message = $data['message'];
        $guest->save();

        return $guest;

    }

    public function show($id)
    {
        return Guest::findOrNew($id);
    }

    public function destroy($id)
    {
        $guest = Guest::findOrNew($id);
        $guest->delete();
        return $guest;
    }

}