
@extends('layouts.app')
@section('content')


<div class="page-wrapper">

    <div class="page-header m-t-50">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <div class="d-inline">
                            <h4>Edit Profile</h4>
                            {{-- <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="page-header-breadcrumb">
                        <ul class="breadcrumb-title">
                            <li class="breadcrumb-item">

                                    <p class="">Edit Profile</p>

                            </li>


                            <li class="breadcrumb-item"><a href="{{ route('profile.index') }}">My profile</a>
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

                            <form class="dropzone" action="{{route('profile.update',['profile'=>1]) }}" method="post" id="editprofile"
                                enctype="multipart/form-data">
                                @method('PUT')
                                @csrf




                                @if(session('success') !== null)
                                    <div class='succWrap'>
                                        {{ session('success') }}
                                    </div>
                                @endif
                                @if(session('error') !== null)
                                <div class='errorWrap'>
                                    {{ session('error') }}
                                 </div>
                                @endif
                                <div class="form-group row">


                                    <div class="col-sm-4 offset-2">
                                    <label class="col-form-label text-md-right ">Profile Name</label>
                                    <input type="text" id="name" name="name" value="{{ old('name',$profile['name']) }}" class="form-control" required>
                                    </div>

                                    <div class="col-sm-4">
<label class="col-form-label text-md-right ">E-mail</label>
<input type="text" id="email" name="email" value="{{ old('email',$profile['email']) }}" class="form-control" required>
</div>





                                </div>















                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right "></label>
                                    <div class="col-sm-12 col-md-7 offset-5">
                                        <button type="submit" class="btn btn-primary">Update </button>
                                        <a href="{{ url('show_profile') }}"
                                        class=" d-inline text-center btn btn-secondary back" ><i
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
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<script type="text/javascript">
	$(document).ready(function (e) {
        $('#formsubmit').on('click', function () {

        });
		$('#upload').on('click', function () {
			var form_data = new FormData();
			var ins = document.getElementById('filer_input').files.length;
			for (var x = 0; x < ins; x++) {
				form_data.append("file[]", document.getElementById('filer_input').files[x]);
            }
            // alert(form_data);
            $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
			$.ajax({
                url: "http://ecommerce-api.hridham.com/api/ProdCat/1",
                headers:'Authorization: Bearer ' // point to server-side PHP script
                dataType: 'json', // what to expect back from the PHP script
                // headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
				cache: false,
				contentType: false,
				processData: false,
				data: {file:form_data},
				type: 'patch',
				success: function (response) {

					$('#msg').html(response); // display success response from the PHP script
				},
				error: function (response) {
                    // alert(response.message);

                    console.log(response);
					$('#msg').html(response); // display error response from the PHP script
				}
			});
		});
    });


    $(document).ready(function(){
    $("#formsubmit").click(function(){
        $("#myForm").submit(); // Submit the form
    });
});


</script>

