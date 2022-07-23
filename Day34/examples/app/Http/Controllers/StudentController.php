<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function insert(Request $request)
    {
        $name = $request->input('name');
        $roll_no = $request->input('roll_no');
        DB::table('students')->insert(
            ['name' => $name, 'roll_no' => $roll_no]
        );
        // return response()->json(['success' => 'Data Inserted Successfully.']);
        echo "<center>";
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/">Click Here</a> to go back.';
        echo "</center>";
    }
    public function delete(Request $request)
    {
        $id = $request->input('id');
        DB::table('students')->where('id', $id)->delete();
        echo "<center>";
        echo "Record deleted successfully.<br/>";
        echo '<a href = "/">Click Here</a> to go back.';
        echo "</center>";
    }
    public function update(Request $request)
    {
        $id = $request->input('id');
        $name = $request->input('name');
        $roll_no = $request->input('roll_no');
        DB::table('students')->where('id', $id)->update(
            ['name' => $name, 'roll_no' => $roll_no]
        );
        echo "<center>";
        echo "Record updated successfully.<br/>";
        echo '<a href = "/">Click Here</a> to go back.';
        echo "</center>";
    }
}
