@extends('layouts.app')
@section('content')



<div class="page-wrapper">

    <div class="page-header m-t-50">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <div class="d-inline">
                            <h4>Edit User</h4>
                            {{-- <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="page-header-breadcrumb">
                        <ul class="breadcrumb-title">
                            <li class="breadcrumb-item">

                                    <p class="">Edit User</p>

                            </li>


                            <li class="breadcrumb-item"><a href="{{ route('user.index') }}">User List</a>
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

                            <form action="{{route('users.update',['user'=>$user['id']]) }}" method="post" id="editUser"
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
                                        <div class="errorWrap">
                                            {{ $e }}
                                        </div>
                                        @endforeach

                                        @endforeach
                                        {{-- <div class='alert alert-red'>
                                    {{ session('error') }}
                                </div> --}}
                                @endif

                                <div class="form-group row">
                                    <div class="col-sm-4">
                                    <label class="col-form-label text-md-right ">User name</label>
                                    <input type="text" name="name" value="{{ old('name',$user['name']) }}" class="form-control" required>
                                    </div>


                                    <div class="col-sm-4">
                                    <label class="col-form-label text-md-right ">Email Address</label>
                                    <input type="email" name="email" value="{{ old('email',$user['email']) }}" class="summernote-simple form-control" required>

                                    </div>

                                    <div class="col-sm-4">
                                    <label class="col-form-label text-md-right ">Mobile Number</label>
                                    <input type="number" name="mobile" value="{{ old('mobile',$user['mobile']) }}" class="summernote-simple form-control" required>

                                    </div>

                                    <div class="col-sm-4">
                                    <label class="col-form-label text-md-right ">Password</label>
                                    <input type="password" name="password"  class="summernote-simple form-control" required>

                                    </div>

                                    <div class="col-sm-4">
                                    <label class="col-form-label text-md-right ">Password Conformation</label>
                                    <input type="password" name="password_confirmation"  class="summernote-simple form-control" required>

                                    </div>





                                    @php

                                    $userrolesarr = [];

                                    foreach($user['roles']['data'] as $userrolesdata)
                                    {

                                        $userrolesarr[] = $userrolesdata['id'];
                                    }
                                    @endphp

                                    <div class="col-sm-3">
                                    <label class="col-form-label text-md-right ">Roles</label>
                                    <select  class="js-example-basic-single col-sm-12"  name="roles[]" id="" placeholder="Role" required multiple class="form-control selectric">
                                        <option value="">Select</option>
                                        @foreach($roles as $role)

                                            <option value="{{ $role['id'] }}" {{ (collect($userrolesarr)->contains($role['id'])) ? 'selected':((collect(old('roles'))->contains($role['id'])) ? 'selected':'') }}>{{ $role['name'] }}</option>
                                        @endforeach
                                    </select>

                                    </div>



<!-- Modal large-->
<button type="button" class="btn waves-effect" data-toggle="modal" data-target="#default-Modal" style="margin-top: 30px;height:40px">+</button>




                                               <!-- Modal large-->

                            </div>















                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right "></label>
                                <div class="col-sm-12 col-md-7 offset-5">
                                    <button type="submit" class="btn btn-blue">Update</button>
                                    <a href="{{ url('user_list') }}"
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

        <div class="modal fade" id="default-Modal1" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Role</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>
                    </div>
                    <div class="modal-body">
                    <form action="{{ route('roles.store') }}" method="post" id="addrole"
enctype="multipart/form-data">
@csrf
                    <div class="form-group row">
<div class="col-sm-4 offset-1">
<label class="col-form-label text-md-right ">Role name</label>
<input type="text" name="name" value="{{ old('name') }}" class="form-control" required>
</div>

<div class="col-sm-4 offset-1">
<label class="col-form-label text-md-right ">Permissions</label>
<select  class="col-sm-12"  name="permissions[]" id="" placeholder="Role" required class="form-control selectric" multiple required>
    <option value="">Select</option>
    @foreach($permissions as $permission)
        <option value="{{ $permission['id'] }}" {{ (collect(old('permissions'))->contains($permission['id'])) ? 'selected':'' }}>{{ $permission['name'] }}</option>
    @endforeach
</select>
</div>


                    </div>








                    </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
        </div>
    </div>








































@endsection
{{-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script type="text/javascript">

$(function() {


    var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){

  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Password And Confirm Password Must Be Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;

validatePassword;

});
</script>


 --}}
