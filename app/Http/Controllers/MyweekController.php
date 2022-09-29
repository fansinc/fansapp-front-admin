<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redis;
use GuzzleHttp\Client;

class MyweekController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(Http $client)
    {

        $this->client = $client;
    }


    public function index(Request $request, $page = 1)
    {
        //

        $token = session()->get('token');
        try {

            $call = Http::withToken($token)->withHeaders(['Accept' => 'application/vnd.api.v1+json', 'Content-Type' => 'application/json'])->get(config('global.url') . 'api/MyWeek?page=' . $page);

            $response = json_decode($call->getBody()->getContents(), true);
            //   return $response;
        } catch (\Exception $e) {
            //buy a beer


        }
        $MyWeek = $response['data'];
        $pagination = $response['meta']['pagination'];

        $lastpage = $pagination['total_pages'];

        // if ($response =='') {
        return view('myweek_list', compact('MyWeek', 'pagination', 'lastpage'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $token = session()->get('token');
        try {

            $call = Http::withToken($token)->withHeaders(['Accept' => 'application/vnd.api.v1+json', 'Content-Type' => 'application/json'])->get(config('global.url') . 'api/users?limit=1000');

            $response = json_decode($call->getBody()->getContents(), true);
            //  return $response;
        } catch (\Exception $e) {
            //buy a beer


        }
        $users = $response['data'];


        try {

            $call = Http::withToken($token)->withHeaders(['Accept' => 'application/vnd.api.v1+json', 'Content-Type' => 'application/json'])->get(config('global.url') . 'api/ConfStatus?limit=1000');

            $response = json_decode($call->getBody()->getContents(), true);
            //  return $response;
        } catch (\Exception $e) {
            //buy a beer


        }
        $statuses = $response['data'];
        // return $users;
        return view(
            'create_myweek',
            compact(
                'users',
'statuses'

            )
        );

        //    return view('create_room');
    }





    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $session = session()->get('token');

        $fileext = '';
        $filename = '';
        if ($request->file('file') !== null) {
            $files =$request->file('file');
            $response = Http::withToken($session);


            // return ($request->file('file'));
            foreach($files as $k => $ufile)
            {
                $filename = fopen($ufile, 'r');
                $fileext = $ufile->getClientOriginalName();
                $response = $response->attach('file['.$k.']', $filename,$fileext);
            }

            $response = $response->withHeaders(['Accept'=>'application/vnd.api.v1+json'])->post(config('global.url') . 'api/MyWeek',
            [
            [
                'name' => 'player_id',
                'contents' => $request->player_id
            ],

            [
                'name' => 'status_id',
                'contents' => $request->status_id
            ],

            ]);


        }


else{


        $response = Http::withToken($session)->withHeaders(['Accept'=>'application/vnd.api.v1+json','Content-Type'=>'application/json'])->post(config('global.url').'api/MyWeek',

        [
"player_id"=>$request->player_id,


"status_id"=>$request->status_id,

        ]);
        }

        if($response->status()===201){

            return redirect()->route('myweek.create')->with('success','MyWeek Created Successfully!');
        }else{

            $request->flash();

            if (isset($response['errors'])) {
                return redirect()->back()->with('errors', $response['errors']);
            } else if (isset($response['error'])) {
                return redirect()->back()->with('error', $response['error']);
            } else if (isset($response['message'])) {
                return redirect()->back()->with('message', $response['message']);
            }

            // return redirect()->route('news.create')->with('error',$response['errors']);
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $token = session()->get('token');
        try {

            $call = Http::withToken($token)->withHeaders(['Accept' => 'application/vnd.api.v1+json', 'Content-Type' => 'application/json'])->get(config('global.url') . 'api/MyWeek/' . $id);

            $response = json_decode($call->getBody()->getContents(), true);
            //  return $response;
        } catch (\Exception $e) {
            //buy a beer


        }
        $MyWeek = $response['data'];



        return view(
            'view_myweek',
            compact(
                'MyWeek'
            )
        );
    }













    //End update user payment

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $session = session()->get('token');

        try {

            $call = Http::withToken($session)->withHeaders(['Accept' => 'application/vnd.api.v1+json', 'Content-Type' => 'application/json'])->get(config('global.url') . 'api/users?limit=1000');

            $response = json_decode($call->getBody()->getContents(), true);
            //  return $response;
        } catch (\Exception $e) {
            //buy a beer


        }
        $users = $response['data'];




        try {

            $call = Http::withToken($session)->withHeaders(['Accept' => 'application/vnd.api.v1+json', 'Content-Type' => 'application/json'])->get(config('global.url') . 'api/ConfStatus?limit=1000');

            $response = json_decode($call->getBody()->getContents(), true);
            //  return $response;
        } catch (\Exception $e) {
            //buy a beer


        }
        $statuses = $response['data'];


        $response = Http::withToken($session)->withHeaders(['Accept' => 'application/vnd.api.v1+json', 'Content-Type' => 'application/json'])->get(config('global.url') . 'api/MyWeek/' . $id);





        if ($response->ok()) {

            $MyWeek =   $response->json()['data'];

            //   return $Booking;

            return view('edit_myweek', compact(
                'MyWeek',
                'users',
                'statuses',

            ));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $session = session()->get('token');


        $response = Http::withToken($session)->withHeaders(['Accept' => 'application/vnd.api.v1+json', 'Content-Type' => 'application/json'])->post(
            config('global.url') . 'api/MyWeek/' . $id,
            [
                "_method" => 'PUT',


                "player_id"=>$request->player_id,

                "status_id"=>$request->status_id,

            ]

        );


        if ($response->status() === 200) {
            return redirect()->back()->with('success', 'Myweek Updated Successfully!');
        } else {
            // return $response;
            if (isset($response['errors'])) {
                return redirect()->back()->with('errors', $response['errors']);
            } else if (isset($response['error'])) {
                return redirect()->back()->with('error', $response['error']);
            } else if (isset($response['message'])) {
                return redirect()->back()->with('message', $response['message']);
            }
        }
    }







    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $session = session()->get('token');

        $response = Http::withToken($session)->withHeaders(['Accept' => 'application/vnd.api.v1+json', 'Content-Type' => 'application/json'])->delete(config('global.url') . 'api/MyWeek/' . $id);

        if ($response->status() == 204) {
            // roomtype.index
            return redirect()->back()->with('success', 'Myweek Deleted Sucessfully !..');
        } else {


            return redirect()->back()->with('error', $response->json()['message']);
        }
    }
}
