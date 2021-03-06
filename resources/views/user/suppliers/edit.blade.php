@extends('layouts.main')
@section('title')
    <title>Edit Supplier</title>
@endsection
@section('main-content')
    <div class="container-fluid mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h4 class="text-center">Edit Supplier</h4>
                <form action="{{route('supplier.update' , $supplier->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $supplier->name }}" required>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                        @enderror

                    </div>

                    <div class="mb-3">
                        <label for="code" class="form-label">Supplier Code</label>
                        <input type="text" class="form-control @error('code') is-invalid @enderror" id="code" name="code" value="{{ $supplier->supplier_code}}" required>

                        @error('code')
                        <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{  $supplier->email  }}" required>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                        @enderror
                    </div>


                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="text" class="form-control @error('phone_number') is-invalid @enderror" id="phone" name="phone_number" value="{{ $supplier->phone_number }}" required>

                        @error('phone_number')
                        <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="address">Address</label>
                        <textarea class="form-control @error('address') is-invalid @enderror" id="address" rows="3" name="address"  required>{{ $supplier->address }}</textarea>

                        @error('address')
                        <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="country" class="form-label">Country</label>
                        <select class="form-select @error('country') is-invalid @enderror" name="country" id="country" required >
                            <option selected>select country</option>
                            @foreach($country as $row)
                                @if($supplier->country_id == $row->id)
                                <option value="{{$row->id}}" selected>{{$row->country_name}}</option>
                                @else
                                    <option value="{{$row->id}}">{{$row->country_name}}</option>
                                @endif
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

                    <button type="submit" class="btn btn-primary">Update</button>
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
        fetchState();
        fetchCity();
        function fetchState(){
            let id = {{$supplier->country_id}};
            ajaxsetup();
            $.ajax({
                type:'get',
                url:"/state/fetch/"+id,
                dataType:'json',
                success: function(response){
                    let state =  $('#state').empty();
                    $.each(response.state,function(key,val){

                        if({{$supplier->state_id}} == val.id ){
                            state.append('<option value ="'+val.id+'" selected>'+val.state_name +'</option>');
                        }else{
                            state.append('<option value ="'+val.id+'" >'+val.state_name +'</option>');
                        }

                    });
                }
            })
        }

        function fetchCity(){
            let id = {{$supplier->state_id}};
            ajaxsetup();
            $.ajax({
                type:'get',
                url:"/city/fetch/"+id,
                dataType:'json',
                success: function(response){
                    console.log(response);
                    let city =  $('#city').empty();
                    $.each(response.city,function(key,val){
                        if({{$supplier->city_id}} == val.id ){
                            city.append('<option value ="'+val.id+'" selected>'+val.city_name +'</option>');
                        }else{
                            city.append('<option value ="'+val.id+'">'+val.city_name +'</option>');
                        }


                    });
                }
            })
        }
    </script>
@endsection
