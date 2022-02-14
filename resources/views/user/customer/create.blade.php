@extends('layouts.main')
@section('title')
    <title>Add Customer</title>
@endsection
@section('main-content')
   <div class="container-fluid mt-5">
       <div class="row justify-content-center">
           <div class="col-md-6">
               <h4 class="text-center">Add New Customer</h4>
               <form action="{{route('customer.store')}}" method="post">
                   @csrf
                   <div class="mb-3">
                       <label for="name" class="form-label">Name</label>
                       <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>

                       @error('name')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                       @enderror
                   </div>
                   <div class="mb-3">
                       <label for="email" class="form-label">Email</label>
                       <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>

                       @error('email')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                       @enderror
                   </div>


                   <div class="mb-3">
                       <label for="phone" class="form-label">Phone Number</label>
                       <input type="text" class="form-control @error('phone_number') is-invalid @enderror" id="phone" name="phone_number" value="{{ old('phone_number') }}" required>

                       @error('phone_number')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                       @enderror
                   </div>
                   <div class="form-group mb-3">
                       <label for="address">Address</label>
                       <textarea class="form-control @error('address') is-invalid @enderror" id="address" rows="3" name="address"  required>{{ old('address') }}</textarea>

                       @error('address')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                       @enderror
                   </div>

                   <div class="mb-3">
                       <label for="country" class="form-label">Country</label>
                       <select class="form-select @error('country') is-invalid @enderror" name="country" id="country" required>
                           <option selected>select country</option>
                            @foreach($country as $row)
                               <option value="{{$row->id}}">{{$row->country_name}}</option>
                           @endforeach
                       </select>
                       @error('country')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                       @enderror
                   </div>

                   <div class="mb-3">
                       <label for="state" class="form-label">State</label>
                       <select class="form-select @error('state') is-invalid @enderror" name="state" id="state" required>
                           <option selected>select state</option>
                       </select>
                       @error('state')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                       @enderror
                   </div>

                   <div class="mb-3">
                       <label for="city" class="form-label">City</label>
                       <select class="form-select @error('city') is-invalid @enderror" name="city" id="city" required>
                           <option selected>select city</option>
                       </select>
                       @error('city')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                       @enderror
                   </div>

                   <button type="submit" class="btn btn-primary">Create</button>
               </form>
           </div>
       </div>
   </div>
@endsection
@section('script')
    <script>
        function ajaxsetup(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        }

        $(document).on('change','#country',function(e){
            let id = e.target.value;
            ajaxsetup();
            $.ajax({
                type:'get',
                url:"/state/fetch/"+id,
                dataType:'json',
                success: function(response){
                     let state =  $('#state').empty();
                     $.each(response.state,function(key,val){
                         state.append('<option value ="'+val.id+'">'+val.state_name +'</option>');
                     });
                }
            })
        })

        $(document).on('change','#state',function(e){
            let id = e.target.value;
            ajaxsetup();
            $.ajax({
                type:'get',
                url:"/city/fetch/"+id,
                dataType:'json',
                success: function(response){
                    console.log(response);
                    let city =  $('#city').empty();
                    $.each(response.city,function(key,val){
                        city.append('<option value ="'+val.id+'">'+val.city_name +'</option>');
                    });
                }
            })
        })
    </script>
@endsection
