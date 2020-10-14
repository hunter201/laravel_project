<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Phonebook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class TestController extends Controller
{


    public function index(Request $request)
    {
        $categories = DB::table('categories')
            ->orderBy('category', 'asc')
            ->get();

        $res = DB::table('categories')
            ->where('id', '>', '3')
            ->get();
        $greeting = 'Добро пожаловать на наш сайт!';
        return view('index', [
            'categories' => $categories, 'greeting' => $greeting,
            'res' => $res,
        ]);
    }

    public function getTable()
    {   
        $arr = array('a' => 4, 'b' => 10);
        $json = json_encode($arr);
        $categories = DB::table('categories')->get();
        $users = Phonebook::orderBy('name')->paginate(10);
        return view('test.result', compact('users', 'categories', 'json'));
    }

    public function auth(Request $request)
    {
        $id = 2;
        if ($request->isMethod('GET')) return view("test.show", ['id' => $id]);
        if ($request->isMethod('POST')) {
            $method = $request->method();
            $res = $request->all();
            $email = htmlspecialchars($res['email']);
            $pass = htmlspecialchars($res['password']);
            $queryEmail = DB::select('select * from users where email=?', [$email]);

            //проверка на уникальность учетной записи в БД
            if (count($queryEmail) == 1) {

                if (password_verify($pass, $queryEmail['pass']))
                    return view("test.result", ['method' => $method, 'result' => 'Вход выполнен',]);
                else {
                    return view("test.result", ['method' => $method, 'result' => 'Password is wrong',]);
                }
            } else
                return view("test.result", ['method' => $method, 'result' => 'Error',]);
        }
    }

    public function register(Request $request)
    {
        $id = 1;

        if ($request->isMethod('GET')) return view("test.show", ['id' => $id]);

        if ($request->isMethod('POST')) {
            $method = $request->method();
            $res = $request->all();
            $email = htmlspecialchars($res['email']);
            $pass = password_hash(htmlspecialchars($res['password']), PASSWORD_DEFAULT);
            DB::statement('insert into users(email,pass) values (?,?)', [$email, $pass]);
            return view("test.result", ['method' => $method, 'result' => $res,]);
        }
    }

    public function getData(Request $request)
    {

        $result = DB::table('cards')->get();

        $categories = DB::table('categories')->get();
        return view('catalog.fridges', ['result' => $result, 'categories' => $categories,]);
    }

    public function search(Request $request)
    {   
        $s = $request->search;
        $users = Phonebook::where("email", 'LIKE', "%{$s}%")->orderBy('name')->paginate(10);
        $categories = DB::table('categories')->get();
        return view('test.result', compact('s', 'users', 'categories'));
    }
}
