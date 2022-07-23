<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ParentModel;

class ParentController extends Controller
{
    public function insert(Request $request)
    {
        $data = $request->input();
        $parent = new ParentModel();
        $parent->first_name = $data['first_name'];
        $parent->last_name = $data['last_name'];
        $parent->city_name = $data['city_name'];
        $parent->email = $data['email'];
        $parent->save();
        echo "<center>";
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/">Click Here</a> to go back.';
        echo "</center>";
    }
    public function delete(Request $request)
    {
        $id = $request->input('id');
        ParentModel::destroy($id);
        echo "<center>";
        echo "Record deleted successfully.<br/>";
        echo '<a href = "/">Click Here</a> to go back.';
        echo "</center>";
    }
    public function update(Request $request)
    {
        $id = $request->input('id');
        $parent = ParentModel::find($id);
        $parent->first_name = $request->input('first_name');
        $parent->last_name = $request->input('last_name');
        $parent->city_name = $request->input('city_name');
        $parent->email = $request->input('email');
        $parent->save();
        echo "<center>";
        echo "Record updated successfully.<br/>";
        echo '<a href = "/">Click Here</a> to go back.';
        echo "</center>";
    }
}
