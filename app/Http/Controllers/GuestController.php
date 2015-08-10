<?php

namespace App\Http\Controllers;

use App\Domain\Contracts\GuestContract;
use App\Guest;
use App\Http\Requests\GuestRueqest;


/**
 * Class GuestController
 * @package App\Http\Controllers
 */
class GuestController extends Controller
{

    protected $guest;

    public function __construct(
        GuestContract $guest
    )
    {
        $this->guest = $guest;
    }


    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */

    public function index()
    {
        return $this->guest->index();
    }


    public function store(GuestRueqest $request)
    {
        return $this->guest->store($request->all());
    }

    /**ram $id
     * @return \Illuminate\Support\Collection|static
     */

    public function show($id)
    {
        return $this->guest->show($id);
    }

    /**
     * @param GuestRueqest $request
     * @param $id
     * @return \Illuminate\Support\Collection|static
     */
    public function update(GuestRueqest $request,$id)
    {
        return $this->guest->update($request->all(),$id);
    }


    /**
     * @param $id
     * @return \Illuminate\Support\Collection|static
     */
    public function destroy($id)
    {
        return $this->guest->destroy($id);
    }
}
