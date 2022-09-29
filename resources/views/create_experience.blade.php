@extends('layouts.app')
@section('content')
<style>
.jFiler-input-choose-btn {
    background: black!important;
}



</style>



<div class="page-wrapper">

    <div class="page-header m-t-50">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <div class="d-inline">
                            <h4>Create Experience</h4>
                            {{-- <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="page-header-breadcrumb">
                        <ul class="breadcrumb-title">
                            <li class="breadcrumb-item">

                                    <p class="">Create Experience</p>

                            </li>


                            <li class="breadcrumb-item"><a href="{{ route('experience.index') }}">Experience List</a>
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

                            <form action="{{ route('experience.store') }}" method="post" id="addUser"
                            enctype="multipart/form-data">
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
                                    <select class="js-example-basic-single col-sm-12" name="player_id"    class="form-control selectric " required>
                                        <option value="" >Select</option>
                                        @foreach($users as $user)
                                        <option value="{{ $user['user_id'] }}" {{ (old("id") == $user['user_id'] ? "selected":"") }}>{{ $user['name'] }}</option>
                                        @endforeach
                                    </select>
                                </div>


                                <div class="col-sm-4">
                                <label class="col-form-label text-md-right ">Title</label>
                                <input  name="title" class="summernote-simple form-control" required>

                                </div>

                                <div class="col-sm-4">
                                <label class="col-form-label text-md-right ">Description</label>
                                <input name="description"  class="summernote-simple form-control" required>

                                </div>
                                <div class="col-sm-4">
                                    <label class="col-form-label text-md-right ">Price</label>
                                    <input name="price"  class="summernote-simple form-control" required>

                                    </div>
                                <div class="col-sm-4">
                                    <label class="col-form-label text-md-right " >Status</label>
                                    <select class="js-example-basic-single col-sm-12" name="status_id"    class="form-control selectric " required>
                                        <option value="" disabled>Select</option>
                                        @foreach($statuses as $statuse)
                                        <option value="{{ $statuse['id'] }}" {{ (old("id") == $statuse['id'] ? "selected":"") }}>{{ $statuse['name'] }}</option>
                                        @endforeach
                                    </select>
                                </div>


                                <div class="col-sm-4 text-center">

                                    <label class="col-form-label text-md-right ">General Photos</label>

                                    <input type="file" name="file[]" id="filer_input" multiple="multiple" class="form-control" required>                                </div>


                        </div>













                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right "></label>
                            <div class="col-sm-12 col-md-7 offset-5">
                                <button type="submit" class="btn ">Create Experience</button>
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
@endsection







































