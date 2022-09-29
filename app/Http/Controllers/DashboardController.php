<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redis;
use GuzzleHttp\Client;
class DashboardController extends Controller
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


    public function index(Request $request,$page = 1)
    {



//         $sdate= date("Y-m-d");
//             $edate= date("Y-m-d", strtotime("+6 day"));
// // return($sdate);
// $cid =session()->get('company_id');
//         $token = session()->get('token');
//         // try{

//             try {

//                 $call = Http::withToken($token)->withHeaders(['Accept' => 'application/vnd.api.v1+json', 'Content-Type' => 'application/json'])->get(config('global.url') . 'api/'.$cid.'/order');

//                 $response = json_decode($call->getBody()->getContents(), true);
//                 //  return $response;
//             } catch (\Exception $e) {
//                 //buy a beer


//             }
//             $order = $response['data'];

//             try {

//                 $call = Http::withToken($token)->withHeaders(['Accept' => 'application/vnd.api.v1+json', 'Content-Type' => 'application/json'])->get(config('global.url') . 'api/'.$cid.'/delivery');

//                 $response = json_decode($call->getBody()->getContents(), true);
//                 //  return $response;
//             } catch (\Exception $e) {
//                 //buy a beer


//             }
//             $delivery = $response['data'];

//             try{

//                 $chcall = Http::withToken($token)->withHeaders(['Accept'=>'application/vnd.api.v1+json','Content-Type'=>'application/json'])->get(config('global.url') . 'api/'.$cid.'/getDirectInvoice');

//                 $cresponse = json_decode($chcall->getBody()->getContents(), true);
//                     // return $cresponse;
//             }catch (\Exception $e){



//             }

//             $directinvoice = $cresponse['data'];

//         try{

//             $chcall = Http::withToken($token)->withHeaders(['Accept'=>'application/vnd.api.v1+json','Content-Type'=>'application/json'])->get(config('global.url') . 'api/enquiryChart/'.$sdate.'/'.$edate);

//             $cresponse = json_decode($chcall->getBody()->getContents(), true);
//                 // return $cresponse;
//         }catch (\Exception $e){



//         }

//         $chart = $cresponse['enquiry_chart'];



//         try{

//             $chcall = Http::withToken($token)->withHeaders(['Accept'=>'application/vnd.api.v1+json','Content-Type'=>'application/json'])->get(config('global.url') . 'api/company');

//             $cresponse = json_decode($chcall->getBody()->getContents(), true);
//                 // return $cresponse;
//         }catch (\Exception $e){



//         }

//         $company = $cresponse['data'];
//         // $ch=[];
//         // foreach($chart as $cha)
//         // {

//         //     $ch[]= "'".$cha."'";

//         // }


//         // $chart = implode(',', $ch);

//         // $chart1 = $cresponse['enquiry_chart']['datasets'];

//         // $ch1=[];
//         // foreach($chart1 as $cha1)
//         // {

//         //     $ch1[]= "'".$cha1."'";

//         // }

//         // $chart1 = implode(',', $ch1);
//         // return $chart.$chart1;


//         // confirmation flow under

//         try{

//             $chcall = Http::withToken($token)->withHeaders(['Accept'=>'application/vnd.api.v1+json','Content-Type'=>'application/json'])->get(config('global.url') . 'api/confirmationChart/'.$sdate.'/'.$edate);

//             $conresponse = json_decode($chcall->getBody()->getContents(), true);
//                 // return $cresponse;
//         }catch (\Exception $e){



//         }

//         $confirm = $conresponse['confirmation_chart'];
//         // $conf=[];
//         // foreach($confirm as $cfm)
//         // {

//         //     $conf[]= "'".$cfm."'";

//         // }


//         // $confirm = implode(',', $conf);

//         // $confirm1 = $conresponse['confirmation_chart']['datasets'];

//         // $conf1=[];
//         // foreach($confirm1 as $cfm1)
//         // {

//         //     $conf1[]= "'".$cfm1."'";

//         // }

//         // $confirm1 = implode(',', $conf1);

//         // end of confirmation

// // Delivery Flow Under this code





// // try{

// //     $chcall = Http::withToken($token)->withHeaders(['Accept'=>'application/vnd.api.v1+json','Content-Type'=>'application/json'])->get(config('global.url') . 'api/deliveryChart/'.$sdate.'/'.$edate);

// //     $delresponse = json_decode($chcall->getBody()->getContents(), true);
// //         // return $cresponse;
// // }catch (\Exception $e){



// // }

// // $delivery = $delresponse['delivery_chart'];
// // $del=[];
// // foreach($delivery as $dry)
// // {

// //     $del[]= "'".$dry."'";

// // }


// // $delivery = implode(',', $del);

// // $delivery1 = $delresponse['delivery_chart']['datasets'];

// // $del1=[];
// // foreach($delivery1 as $dry1)
// // {

// //     $del1[]= "'".$dry1."'";

// // }

// // $delivery1 = implode(',', $del1);









// End Delivery Flow Under this code

        // $pagination = $response['meta']['pagination'];

        // $lastpage = $pagination['total_pages'];


        //   return view('dashboard', compact('dashboard','birthalerts','chart','confirm','delivery'));
          return view('dashboard');

        //   return view('dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {



           return view('create_confirmation');
    }






// enquiry chart start on 26.08.21 on click function

    public function enquirychart(Request $request)
    {
    // return $request->sdate;
    // $id=session()->get('property_id');

    $sdate=$request->sdate;

    $edate=$request->edate;

    $token = session()->get('token');
    try{

        $call = Http::withToken($token)->withHeaders(['Accept'=>'application/vnd.api.v1+json','Content-Type'=>'application/json'])->get(config('global.url') . 'api/enquiryChart/'.$sdate.'/'.$edate);

        $response = json_decode($call->getBody()->getContents(), true);
        //   return $response;
    }catch (\Exception $e){

    }
    $enchart = $response['enquiry_chart'];

//     $enc=[];
//     foreach($enchart as $enc1)
//     {

//         $enc[]= '"'.$enc1.'"';

//     }


//     $enchart = implode(',', $enc);

//     $enchart1 = $response['enquiry_chart']['datasets'];

//     $ery1=[];
//     foreach($enchart1 as $dry1)
//     {

//         $ery1[]= '"'.$dry1.'"';

//     }

//     $enchart1 = implode(',', $ery1);



// $data=[];
// $data['enc']=$enchart;

// $data['ery1']=$enchart1;



//     return $data;

return $enchart;
    }

//End enquiry chart start on 26.08.21 on click function


// confirmation chart start on 26.08.21 on click function
public function confirmationchart(Request $request)
{
// return $request->sdate1;
// $id=session()->get('property_id');

$sdate=$request->sdate;

$edate=$request->edate;

$token = session()->get('token');
try{

    $call = Http::withToken($token)->withHeaders(['Accept'=>'application/vnd.api.v1+json','Content-Type'=>'application/json'])->get(config('global.url') . 'api/confirmationChart/'.$sdate.'/'.$edate);

    $conresponse = json_decode($call->getBody()->getContents(), true);
    //   return $conresponse;
}catch (\Exception $e){

}
$conchart = $conresponse['confirmation_chart'];

//     $enc=[];
//     foreach($enchart as $enc1)
//     {

//         $enc[]= '"'.$enc1.'"';

//     }


//     $enchart = implode(',', $enc);

//     $enchart1 = $response['enquiry_chart']['datasets'];

//     $ery1=[];
//     foreach($enchart1 as $dry1)
//     {

//         $ery1[]= '"'.$dry1.'"';

//     }

//     $enchart1 = implode(',', $ery1);



// $data=[];
// $data['enc']=$enchart;

// $data['ery1']=$enchart1;



//     return $data;

return $conchart;
}
//End confirmation chart start on 26.08.21 on click function




// Delivery chart start on 26.08.21 on click function
public function deliverychart(Request $request)
{
// return $request->sdate1;
// $id=session()->get('property_id');

$sdate=$request->sdate;

$edate=$request->edate;

$token = session()->get('token');
try{

    $call = Http::withToken($token)->withHeaders(['Accept'=>'application/vnd.api.v1+json','Content-Type'=>'application/json'])->get(config('global.url') . 'api/deliveryChart/'.$sdate.'/'.$edate);

    $dvyresponse = json_decode($call->getBody()->getContents(), true);
    //   return $conresponse;
}catch (\Exception $e){

}
$drychart = $dvyresponse['delivery_chart'];

//     $enc=[];
//     foreach($enchart as $enc1)
//     {

//         $enc[]= '"'.$enc1.'"';

//     }


//     $enchart = implode(',', $enc);

//     $enchart1 = $response['enquiry_chart']['datasets'];

//     $ery1=[];
//     foreach($enchart1 as $dry1)
//     {

//         $ery1[]= '"'.$dry1.'"';

//     }

//     $enchart1 = implode(',', $ery1);



// $data=[];
// $data['enc']=$enchart;

// $data['ery1']=$enchart1;



//     return $data;

return $drychart;
}
//End Delivery chart start on 26.08.21 on click function





    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $session = session()->get('token');


        $response = Http::withToken($session)->withHeaders(['Accept'=>'application/vnd.api.v1+json','Content-Type'=>'application/json'])->post(config('global.url').'api/confCommission',

        [

            "property_id"=>$request->property_id,
            "from"=>$request->from,

            "to"=>$request->to,
         "percentage"=>$request->percentage,



            "status_id"=>$request->status_id,

        ]);


        if($response->status()===201){

            return redirect()->route('commission.create')->with('success','Booking Commission Created Successfully!');
        }else{

            $request->flash();

            return redirect()->route('commission.create')->with('error',$response['errors']);
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
        try{

            $call = Http::withToken($token)->withHeaders(['Accept'=>'application/vnd.api.v1+json','Content-Type'=>'application/json'])->get(config('global.url') . '/api/confCommission/'.$id);

            $response = json_decode($call->getBody()->getContents(), true);
            //  return $response;
        }catch (\Exception $e){
            //buy a beer


        }
         $confCommission = $response['data'];



            return view(
                'view_commission', compact(
                    'confCommission'
                )
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $session = session()->get('token');

        try{

            $call = Http::withToken($session)->withHeaders(['Accept'=>'application/vnd.api.v1+json','Content-Type'=>'application/json'])->get(config('global.url') . '/api/property');

            $response = json_decode($call->getBody()->getContents(), true);
            //  return $response;
        }catch (\Exception $e){
            //buy a beer


        }
         $property = $response['data'];
         try{

            $call = Http::withToken($session)->withHeaders(['Accept'=>'application/vnd.api.v1+json','Content-Type'=>'application/json'])->get(config('global.url') . '/api/confStatus');

            $response = json_decode($call->getBody()->getContents(), true);
            //  return $response;
        }catch (\Exception $e){
            //buy a beer


        }
         $statuses = $response['data'];

        $response = Http::withToken($session)->withHeaders(['Accept'=>'application/vnd.api.v1+json','Content-Type'=>'application/json'])->get(config('global.url') . '/api/confCommission/' . $id);





        if($response->ok()){

            $commission =   $response->json()['data'];

          //   return $commission;

            return view('edit_commission', compact(
               'commission','statuses','property'
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

        $response = Http::withToken($session)->withHeaders(['Accept'=>'application/vnd.api.v1+json','Content-Type'=>'application/json'])->put(config('global.url').'/api/confCommission/'.$id,
        [
            "_method"=> 'PUT',
            "property_id"=>$request->property_id,
            "from"=>$request->from,

            "to"=>$request->to,
            "percentage"=>$request->percentage,



            "status_id"=>$request->status_id
        ]

      );


        // if($response->headers()['Content-Type'][0]=="text/html; charset=UTF-8"){
        //     return redirect()->route('home');
        // }
        if($response->status()===200){
            return redirect()->back()->with('success','Booking Commission Updated Successfully!');
        }else{
            return redirect()->back()->with('error',$response->json()['message']);
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

        $response=Http::withToken($session)->withHeaders(['Accept'=>'application/vnd.api.v1+json','Content-Type'=>'application/json'])->delete(config('global.url').'api/confCommission/'.$id);

        if($response->status()==204){
            // roomtype.index
             return redirect()->route('commission.index')->with('success','Booking Commission Deleted Sucessfully !..');
        }
        else{


             return redirect()->route('commission.index')->with('error',$response->json()['message']);
        }

    }
}
