<?php

namespace App\Http\Controllers;

use App\Guest;
use App\Http\Requests\GuestRueqest;

/**
 * Class GuestController
 * @package App\Http\Controllers
 */
class GuestController extends Controller
{
    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function index()
    {
        return Guest::all();
    }

    /**
     * @param GuestRueqest $rueqest
     * @return Guest
     */
    public function store(GuestRueqest $rueqest)
    {
        $guest = new Guest;

        $guest->name = $rueqest->name;
        $guest->phone = $rueqest->phone;
        $guest->email = $rueqest->email;
        $guest->sites = $rueqest->sites;
        $guest->message = $rueqest->message;
        $guest->save();

        return $guest;
    }

    /**
     * @param $id
     * @return \Illuminate\Support\Collection|static
     */
    public function show($id)
    {
        return Guest::findOrNew($id);
    }

    /**
     * @param GuestRueqest $request
     * @param $id
     * @return \Illuminate\Support\Collection|static
     */
    public function update(GuestRueqest $request, $id)
    {
        $guest = Guest::findOrNew($id);
        $guest->name = $request->name;
        $guest->phone = $request->phone;
        $guest->email = $request->email;
        $guest->sites = $request->sites;
        $guest->message = $request->message;
        $guest->save();

        return $guest;
    }


    /**
     * @param $id
     * @return \Illuminate\Support\Collection|static
     */
    public function destroy($id)
    {
        $guest = Guest::findOrNew($id);
        $guest->delete();
        return $guest;
    }
}
