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
                                    <h4>Experience List</h4>
                                    {{-- <span>HTML5 buttons provides the local file saving features</span> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="page-header-breadcrumb">
                                <ul class="breadcrumb-title">
                                    <li class="breadcrumb-item">
                                        <a href="#"> <i class="feather icon-home"></i> </a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ route('experience.index') }}">Experience List</a>
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
                        <div class='succWrap'>
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
                                        <div class="row ">
                                            <div class="col-sm-4">
                                                @if(collect(session('permissions'))->contains('Create experience'))

                                                <a class="btn btn-dark" href="{{ route('experience.create') }}" role="button">Add New</a>
                                            @endif
                                            </div>
                                            <div class="col-sm-4">
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="col">
                                                    <ul id="pagination" class="" style="display: -webkit-box;">
                                                        <li style="padding: 2px;"><a href="{{ route('experience.index',$page=1) }}" class="btn  @if($pagination['current_page']==1) {{ "disabled" }} @endif" style="box-shadow: 0 2px 6px #acb5f6;
                               border-radius:30px">First</a></li>
                                                        @php
                                                        if(isset($pagination['links']['previous']))
                                                        {
                                                        # code...
                                                        $endurl = explode("?page=",$pagination['links']['previous']);
                                                        $page = $endurl[1];

                                                        @endphp
                                                        <li style="padding: 2px;"><a href="{{ route('experience.index',$page) }}" class="btn " style="box-shadow: 0 2px 6px #acb5f6;
                       border-radius:30px">Previous</a></li>
                                                        @php
                                                        }
                                                        @endphp






                                                        @php
                                                        if(isset($pagination['links']['next']))
                                                        {
                                                        $endurl = explode("?page=",$pagination['links']['next']);
                                                        $page = $endurl[1];
                                                        // echo
                                                        @endphp
                                                        <li style="padding: 2px;"> <a href="{{ route('experience.index',$page) }}" class="btn " style="box-shadow: 0 2px 6px #acb5f6;
                      border-radius:30px">Next</a></li>
                                                        @php
                                                        }

                                                        @endphp

                                                        @php
                                                        if($pagination['total_pages']>1)
                                                        {
                                                        @endphp
                                                        <li style="padding: 2px;"> <a href="{{ route('experience.index',$pagination['total_pages']) }}" class="btn  float-right" style="box-shadow: 0 2px 6px #acb5f6;
                      border-radius:30px">Last</a> </li>

                                                        @php
                                                        }

                                                        @endphp

                                                    </ul>

                                                    {{-- <a href="{{ route('product_categories.create') }}" class="btn btn-primary float-right">Add New</a> --}}

                                                </div>
                                            </div>
                                        </div>

                                        <div class="dt-responsive table-responsive">
                                            <table id="basic-btn" class="table table-striped table-bordered nowrap">
                                                <thead>
                                                    <tr>
                                                        <th>Actions</th>
                                                        <th>Image</th>
                                                        <th>Title</th>
                                                        <th>Description</th>
                                                        <th>Price</th>
                                                        <th>Created At</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($Experience as $Experienc)
                                                    @php
                                                    $id=$Experienc['id'];
                                                    @endphp


                                                    <tr>
                                                        <td style="display: -webkit-box;">
                                                            <!-- <a  data-toggle="tooltip" data-placement="top" title="View" href="{{ url('experience/'.$id.'/edit') }}" role="button" style="color: #007bff;padding: 0.5rem;"><i class="fa fa-eye"></i></a> -->
                                                            @if(collect(session('permissions'))->contains('Update experience'))

                                                            <a data-toggle="tooltip" class=" d-inline font1 edit-confirmation" data-placement="top" title="Edit" href="{{ url('experience/'.$id.'/edit') }}" role="button" style="color: #007bff;padding: 0.5rem;"><i class="icofont icofont-ui-edit"></i></a>
                                                            @endif
                                                            <form id="delete_from_{{$Experienc['id']}}" method="POST" action="{{ route('experience.destroy', $Experienc['id']) }}">
                                                                {{ csrf_field() }}
                                                                {{ method_field('DELETE') }}

                                                                <div class="form-group">


                                                                    @if(collect(session('permissions'))->contains('Delete experience'))

                                                                    <a data-toggle="tooltip" class="_delete_data" data-placement="top" title="Delete" href="javascript:void(0);" data-id="{{$Experienc['id']}}" role="button" style="color: #007bff;padding: 0.5rem;"><i class="icofont icofont-trash"></i></a>
@endif
                                                                </div>
                                                            </form>
                                                        </td>
<td>    <img style="display: block;margin-left: auto;margin-right: auto;" src="{{ isset($Experienc['Assets']['data'][0]['links']) ? $Experienc['Assets']['data'][0]['links']['full'].'?width=100&height=75' : asset('img/no-image.gif')  }}"/></td>
                                                        <td>
                                                            {{ $Experienc['title'] }}
                                                        </td>

                                                        <td>{{ $Experienc['description'] }}</td>


                                                        <td>{{ $Experienc['price'] }}</td>


                                                        <td>{{ date("Y-m-d H:i:s",$Experienc['created_at']) }}</td>



                                                    </tr>



                                                    @endforeach








                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                    @php

                                    $first =(($pagination['current_page']-1) * $pagination['per_page']) + 1;

                                    if($pagination['current_page']==$pagination['total_pages'])
                                    {

                                    $last = ((($pagination['current_page']-1) * $pagination['per_page']) + $pagination['count']);
                                    }
                                    else
                                    {
                                    $last = ($pagination['current_page'] * $pagination['per_page']);

                                    }


                                    $total = $pagination['total'];

                                    @endphp


                                    <p style="font-size:15px;margin-top:-17px;" class="ml-4">Showing {{ $first }} to {{ $last }} of {{ $total }}</p>
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
