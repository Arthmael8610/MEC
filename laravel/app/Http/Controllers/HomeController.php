<?php

namespace App\Http\Controllers;

use App\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //session()->put('error', 'Sorry Registration is Required, contact support@citizenwarfare.com for more information.');
        $pubEvents = Event::where('private', 0)->with('organization')->get();
        $sorted = [];

        $today = Carbon::now()->setTimezone(session()->get('timezone'))->format('Y-m-d');
        $startOfWeek = Carbon::today()->startOfWeek()->setTimezone(session()->get('timezone'))->format('Y-m-d');
        $endOfWeek = Carbon::today()->endOfWeek()->setTimezone(session()->get('timezone'))->format('Y-m-d');

        $startOfMonth = Carbon::today()->startOfMonth()->setTimezone(session()->get('timezone'))->format('Y-m-d');
        $endOfMonth = Carbon::today()->endOfMonth()->setTimezone(session()->get('timezone'))->format('Y-m-d');

        foreach ($pubEvents as $event){

            $parsed = Carbon::parse($event->start_date)->setTimezone(session()->get('timezone'))->format('Y-m-d');
            if($parsed == $today){
                 $sorted['today'][] = $event;
            }
            if($parsed < $endOfWeek && $parsed > $startOfWeek){
                $sorted['thisWeek'][] = $event;
            }
            if($parsed > $startOfMonth && $parsed < $endOfMonth){
                $sorted['thisMonth'][] = $event;
            }
        }

        $steps = array([
            'element' => '#one',
            'intro' => 'Here you will quickly see what is going on.'
        ],[
            'element' =>'#two',
            'intro' => 'Get the latest news about StarCitizen here!'
            ]
        );
        $json_steps = json_encode($steps);
        //dd($json_steps);

        return view('home')->with('sorted', $sorted);
    }

    public function Privacy()
    {
        //dd($this->data);
        return view('privacy');
    }

    public function Terms()
    {
        return view('terms');
    }

    public function Dev()
    {
        return view('aboutdev');
    }

    public function Faq()
    {
        return view('faq');
    }

    public function discord()
    {
        //token url https://discordapp.com/api/oauth2/token
        $code = Input::get('code');
        $state = Input::get('state');

        $data = [
            'client_id' => '522885672248279041',
            'client_secret' => 'IZJfKhbZzF4Jdxv_LdRwgF-3RF7OCqUI',
            'grant_type' => 'authorization_code',
            'code' => $code,
            'redirect_uri' => 'https://events.citizenwarfare.com/bot/discord/',
            'scope' => 'bot webhook.incoming',
        ];

        $endpoint = 'https://discordapp.com/api/oauth2/token';
        $headers = 'Content-Type : application/x-www-form-urlencoded';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $endpoint);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, $headers);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

        $result = curl_exec($ch);

        if($result != false){
            dd($result);
        }else{
            dd('no idea!', $result);
        }



    }
}
