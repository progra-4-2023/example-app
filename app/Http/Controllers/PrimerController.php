<?php


namespace App\Http\Controllers;


use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Artisan;


class PrimerController extends BaseController
{
    function index(){
        /* Lógica de negocio */
        return view('mis-views.primer-view', [
            'texto' => 'Hola Mundo'
        ]);
    }
    function show(Request $request, $texto='nada'){

        Artisan::call('app:send-emails --user=Luis');

        $agent = $request->header('user-agent');
        if($texto == 'here'){
            return redirect()->route('mi-controller', ['texto' => 'there']);
        }
        /* Lógica de negocio */
        
        
        $session_counter = $request->session()->get('session_counter', 0);
        $session_counter++;
        $request->session()->put('session_counter', $session_counter);

        $cache_counter = Cache::get('cache_counter', 0);
        $cache_counter++;
        Cache::put('cache_counter', $cache_counter);

        return view('mis-views.primer-view', [
            'texto' => $texto . '-' . $agent,
            'records' => [1,2,3],
            'session_counter' => $session_counter,
            'cache_counter' => $cache_counter,
        ]);
    }
    
}
