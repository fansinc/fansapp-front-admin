@extends('layouts.app')
@section('content')



<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="row align-items-end">
                        <div class="col-lg-8">
                            <div class="page-header-title">
                                <div class="d-inline">
                                    <h4>My Profile</h4>
                                    {{-- <span>HTML5 buttons provides the local file saving features</span> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="page-header-breadcrumb">
                                <ul class="breadcrumb-title">
                                    <li class="breadcrumb-item">
                                        <a href="index-1.htm"> <i class="feather icon-home"></i> </a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ route('profile.index') }}">My Profile</a>
                                    </li>
                                    {{-- <li class="breadcrumb-item"><a href="#!">Button</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#!">HTML5 Data-Export</a>
                                    </li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Page-header end -->

                    <!-- Page-body start -->
                    <div class="page-body">
                        @if(session('success') !== null)
                        <div class='alert alert-success'>
                            {{ session('success') }}
                        </div>
                        @endif
                        @if(session('error') !== null)
                        @foreach(session('error') as $k =>$v)
                        <div class='alert alert-danger'>
                            {{ $v[0] }}
                        </div>
                        @endforeach
                        @endif
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- HTML5 Export Buttons table start -->
                                <div class="card">
                                    <div class="card-header table-card-header">
                                        {{-- <h5>HTML5 Export Buttons</h5> --}}
                                    </div>
                                    <div class="card-block">
                                        <div class="dt-responsive table-responsive">
                                            <table id="basic-btn" class="table table-striped table-bordered nowrap">
                                                <thead>
                                                    <tr>
                                                    <th>Name</th>
                                                        <th>E-Mail</th>
                                                        <!-- <th>Category Image</th>
                                                        <th>Status</th> -->
                                                        <th>Created At</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>






                <tr>
                @php
                                                        $id=$profile['id'];
                                                    @endphp
                <td>
                        {{ $profile['name'] }}
                    </td>

                    </td>
                    <td><span class="text-center justify-content-center" style="padding-top:10px;">{{ $profile['email'] }}</span>

                    </td>
                    <td>{{ date("Y-m-d H:i:s",$profile['created_at']) }}</td>
                    <td>
                            <div class="d-flex">
                            <ul class="list-group">

                  <li class="list-group-item border1"><a href="{{ url('profile/'.$id.'/edit') }}"
                                        class=" d-inline text-center btn btn-link font1 edit-confirmation" style="font-size: 13px!important;" ><i
                                            class="icofont icofont-ui-edit" ></i>Edit&nbsp;&nbsp;</a>&nbsp;&nbsp; <span><a href="{{ url('change_password') }}"
                                        class=" d-inline text-center btn btn-link font1" style="font-size: 13px!important;"><i
                                            class="icofont icofont-ui-edit" ></i>Change Password&nbsp;&nbsp;</a>&nbsp;&nbsp;</span>


                                            </li>



                </ul>

                            </div>
                        </td>
                </tr>

                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- HTML5 Export Buttons end -->

                                                          </div>
                        </div>
                    </div>
                    <!-- Page-body end -->
                </div>
            </div>
        </div>

    </div>
</div>

<style>
    .pagination {

        display: none;
        float: left;
        margin-left: 10px;
        /* float:right; */
    }
</style>

@endsection
