@extends('layouts.app')
@section('content')



<div class="page-wrapper">

    <div class="page-header m-t-50">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <div class="d-inline">
                            <h4>Edit Purchase</h4>
                            {{-- <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="page-header-breadcrumb">
                        <ul class="breadcrumb-title">
                            <li class="breadcrumb-item">

                                    <p class="">Edit Purchase</p>

                            </li>


                            <li class="breadcrumb-item"><a href="{{ route('purchase.index') }}">Purchase List</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-body">





    <section class="section" >


        <div class="section-body">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <form action="{{route('purchase.update',['purchase'=>$Purchase['id']]) }}" method="post" id="editUser"
                                enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                @if(session('success') !== null)
                                <div class="succWrap">
                                    {{ session('success') }}
                                </div>
                                <!-- <div class='alert alert-success'>
                                {{ session('success') }}
                            </div> -->
                                @endif

                                @if(session('errors') !== null)

                                @foreach(session('errors') as $v)
                                @foreach($v as $e)

                                <div class="errorWrap"><strong>ERROR</strong>: {{ $e }} </div>


                                @endforeach

                                @endforeach
                                @endif


                                @if(session('error') !== null)
                                <div class="errorWrap"><strong>ERROR</strong>: {{session('error') }} </div>

                                @endif

                                @if(session('message') !== null)
                                <div class="errorWrap"><strong>ERROR</strong>: {{session('message') }} </div>

                                @endif
                                <div class="form-group row">
                                <div class="col-sm-4">
                                    <label class="col-form-label text-md-right " >Players</label>
                                    <select class="js-example-basic-single col-sm-12" name="player_id"    class="form-control selectric ">
                                        <option value="">Select</option>
                                        @foreach($player as $players)
                                        <option value="{{ $players['user_id'] }}" {{ ($Purchase['player_id'] == $players['user_id']) ? "selected":(old("player_id") == $players['user_id'] ? "selected":"") }}>{{ $players['name'] }}</option>
                                        @endforeach
                                    </select>
                                </div>


                                <div class="col-sm-4">
                                    <label class="col-form-label text-md-right " >User</label>
                                    <select class="js-example-basic-single col-sm-12" name="user_id"    class="form-control selectric ">
                                        <option value="">Select</option>
                                        @foreach($users as $user)
                                        <option value="{{ $user['user_id'] }}" {{ ($Purchase['user_id'] == $user['user_id']) ? "selected":(old("user_id") == $user['user_id'] ? "selected":"") }}>{{ $user['name'] }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-sm-4">
                                    <label class="col-form-label text-md-right " >Experience</label>
                                    <select id="exep" class="js-example-basic-single col-sm-12" name="experience_id"    class="form-control selectric ">
                                        <option value="">Select</option>
                                        @foreach($Experience as $Experiences)
                                        <option value="{{ $Experiences['id'] }}" {{ ($Purchase['experience_id'] == $Experiences['id']) ? "selected":(old("experience_id") == $Experiences['id'] ? "selected":"") }}>{{ $Experiences['title'] }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                    <div class="col-sm-4">
                                    <label class="col-form-label text-md-right ">Price</label>
                                    <input type="text" id="price" name="price" value="{{ old('price',$Purchase['price']) }}" class="form-control" >
                                    </div>



                                    <div class="col-sm-4">
                                        <label class="col-form-label text-md-right " >Status</label>
                                        <select class="js-example-basic-single col-sm-12" name="status_id"    class="form-control selectric ">
                                            <option value="">Select</option>
                                            @foreach($statuses as $statuse)
                                            <option value="{{ $statuse['id'] }}" {{ ($Purchase['status_id'] == $statuse['id']) ? "selected":(old("status_id") == $statuse['id'] ? "selected":"") }}>{{ $statuse['name'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>


                            </div>















                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right "></label>
                                <div class="col-sm-12 col-md-7 offset-5">
                                    <button type="submit" class="btn btn-blue">Update</button>
                                    <a href="{{ url('purchase_list') }}"
                                    class=" d-inline text-center btn font1 back" ><i
                                        class="icofont icofont-arrow-left" ></i>Back&nbsp;&nbsp;</a>
                                </div>
                            </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
        </div>
    </div>


    <script>
        $(document).ready(function() {

        $('#exep').on('change', function(e) {
            // var prop = $("#Prop").val();
            var exp_id = e.target.value;
        // console.log(exp_id);
        $('#price').val('');

            if (exp_id) {
                $.ajax({

                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        'Content-Type': 'application/json',
                        'Accept': 'application/vnd.api.v1+json'
                    },
                    url: "{{ url('getprice')}}" + "/" + exp_id,

                    type: "GET",

                    crossDomain: true,
                    beforeSend: function() {
                        $('#response').html("<img src='{{ asset('files/assets/images/ajax-loader.gif') }}' />");
                    },

                    success: function(responsedata) {
                        // $('#response').html('');
                        $("#room").empty();
                        // var rooms = responsedata.rooms;

                         var roomtypes = responsedata.price;
                        //  if(responsedata == ''){
                        //      swal("<h5>There Is No Room Type For This Property Please Create</h5>");
                        //      $("#roomtype").css('display','none');
                        //      return;
                        //  }

                    //    console.log(roomtypes);
        $('#price').val(roomtypes);

                        // $('#room').html(aaaa);
                    }
                })


            }

        });
        });
        </script>
@endsection









