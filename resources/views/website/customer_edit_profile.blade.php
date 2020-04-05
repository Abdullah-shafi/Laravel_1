@extends('layout/r_main')

@section('title')
Property Rental Managemnet System |Edit Profile
@endsection

@section('start')


    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img" style="background-image: url(img/bg-img/hero1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <h3 class="breadcumb-title">Edit Profile</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->
@endsection

@section('middle')
 

 @foreach ($users as $user)
            <div class="row justify-content-center">
                <!-- Single Team Member -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-team-member mb-100 wow fadeInUp" data-wow-delay="250ms">
                        <!-- Team Member Thumb -->
                        <div class="team-member-thumb">
                            <img src="image/{{ $user->c_image }}" alt="">
                        </div>
                        <!-- Team Member Info -->
                        <center>
        
         <form method="post">
    <table>
      <tr>
        <td>Id : </td>
        <td><input type="text" readonly name="id" value="{{ $user->customer_id }}"></td>
      </tr>
       <tr><td><br></td></tr>
      <tr>
        <td>UserName :</td>
        <td><input type="text" readonly name="uname" value="{{ $user->username }}"></td>
      </tr>
       <tr><td><br></td></tr>
      <tr>
        <td>Name :</td>
        <td><input type="text" name="name" value="{{ $user->name }}"></td>
      </tr>
       <tr><td><br></td></tr>
      <tr>
        <td>Email :</td>
        <td><input type="email" name="email" value="{{ $user->email }}"></td>
      </tr>
      <tr><td><br></td></tr>
       <tr>
        <td>Mobile_No :</td>
        <td><input type="number" maxlength="11" name="phone" value="{{ $user->phone }}"></td>
      </tr>
      
        <td></td>
        <td><a href="customer_edit_profile" class="btn south-btn mt-50 wow fadeInUp" data-wow-delay="300ms">Update</a></td>
      </tr>
    </table>
  </form>
      
         </center>
                    </div>
                </div>

     </div>
     @endforeach
        </div>
    </section>

@endsection