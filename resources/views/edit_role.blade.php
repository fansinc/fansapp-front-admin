@extends('layouts.app')
@section('content')






<div class="page-wrapper">

    <div class="page-header m-t-50">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <div class="d-inline">
                            <h4>Edit Role</h4>
                            {{-- <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="page-header-breadcrumb">
                        <ul class="breadcrumb-title">
                            <li class="breadcrumb-item">

                                    <p class="">Edit Role</p>

                            </li>


                            <li class="breadcrumb-item"><a href="{{ route('role.index') }}">Role List</a>
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

                            <form action="{{route('roles.update',['role'=>$role['id']]) }}" method="post" id="editRole"
                                enctype="multipart/form-data">
                                @method('PUT')
                                @csrf

                                @if(session('success') !== null)
                                <div class="succWrap">
                                {{ session('success') }}
                                </div>

                                @endif

                                @if(session('error') !== null)

                                        @foreach(session('error') as $v)
                                        @foreach($v as $e)
                                        <div class='alert alert-red'>
                                            {{ $e }}
                                        </div>
                                        @endforeach

                                        @endforeach
                                        {{-- <div class='alert alert-red'>
                                    {{ session('error') }}
                                </div> --}}
                                @endif
                                <div class="form-group row">

                                    <div class="col-sm-4 offset-1">
                                        <label class="col-form-label text-md-right ">Role name</label>
                                        <input type="text" name="name" value="{{ old('name',$role['name']) }}" class="form-control" required>
                                    </div>

                                    @php

                                    $rolepermissionsarr = [];

                                    foreach($role['permissions']['data'] as $rolepermissionsdata)
                                    {

                                        $rolepermissionsarr[] = $rolepermissionsdata['id'];
                                    }
                                    @endphp


                                    <div class="col-sm-4 offset-1">
                                        <label class="col-form-label text-md-right ">Permissions</label>
                                        <select  class="js-example-basic-single col-sm-12"  name="permissions[]" id="" placeholder="Role" required class="form-control selectric" multiple required>
                                            <option value="">Select</option>
                                            @foreach($permissions as $permission)
                                                <option value="{{ $permission['id'] }}" {{ (collect($rolepermissionsarr)->contains($permission['id'])) ? 'selected':((collect(old('permissions'))->contains($permission['id'])) ? 'selected':'') }}>{{ $permission['name'] }}</option>
                                            @endforeach
                                        </select>

                                    </div>







<!-- Modal large-->
{{-- <button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#default-Modal" style="margin-top: 30px;height:40px">+</button> --}}




                                               <!-- Modal large-->

                            </div>
















                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right "></label>
                                <div class="col-sm-12 col-md-7 offset-5">
                                    <button type="submit" class="btn btn-blue">Update</button>
                                    <a href="{{ url('role_list') }}"
                                    class=" d-inline text-center btn btn-blue font1 back" ><i
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


@endsection









