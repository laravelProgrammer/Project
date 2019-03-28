@extends('website.layouts.app')

@section('body')
<br><br>


 <section class="bgwhite p-t-66 p-b-60">
        <div class="container">
            <div class="row">
             <div class="col-md-2 p-b-30">
             </div>

                <div class="col-md-8 p-b-30">
                 @if(count($errors) > 0)
                 @foreach($errors->all() as $error)
                 <p class="alert alert-danger">{{$error}}</p>
                 @endforeach
                 @endif 
                    <form class="leave-comment"  method="POST" action="{{ route('login') }}">
                        {{csrf_field()}}
                        <h4 class="m-text26 p-b-36 p-t-15" >
                            <b>Login Here</b>
                        </h4>

                        <div class="bo4 of-hidden size15 m-b-20">
                            
                              <input  type="email" class="form-control" name="email" value="{{ old('email') }}" required  placeholder="Enter Email">
                        </div>

                    

                        <div class="bo4 of-hidden size15 m-b-20">
                           <input id="password" type="password" class="form-control" name="password" required placeholder="Enter Password">
                        </div>

                    

                        <div class="w-size25">
                            <!-- Button -->
                           

                            <button type="submit" class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">
                                    Login Here
                                </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


@endsection
