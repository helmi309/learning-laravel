<?php
/**
 * Created by PhpStorm.
 * User: - LENOVO -
 * Date: 10/08/2015
 * Time: 9:16
 */

namespace App\Domain\Contracts;


interface GuestContract
{

    public function index();

    public function store(array $data);

    public function update(array $data,$id);

    public function destroy($id);

}