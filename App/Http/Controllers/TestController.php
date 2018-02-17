<?php
namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// use app\Http\Requests;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function show()
    {
        return view('test', ['message' => 'Hello!']);
    }
}
?>
