@extends('website.layouts.app')

  @section ('body')

    	<section class="bgwhite p-t-66 p-b-60">
		<div class="container">
			<div class="row">
            <div class="col-sm-10 col-md-6 p-b-30 m-l-r-auto">
                <!-- Block3 -->
                <div class="block3">
                    <a href="blog-detail.html" class="block3-img dis-block hov-img-zoom">
                        <img src="{{asset('website/images/1.jpg')}}" id="imgHeight">
                    </a>

                    <div class="block3-txt p-t-14">
                       <h6 class="p-b-7">
                        <a href="blog-detail.html" class="m-text11 ">
                         Very nice wishing card with great looking
                     </a>
                 </h6>
                 <p>
                    @guest
                    <a href="{{ route('login') }}" class="btn btn-sm btn-success " onclick="alert('you are not login plz first login')">Send Card</a>
                    @else
                    <a href="{{ route('sendCard.create') }}" class="btn btn-sm btn-info ">Send Card</a>
                    @endguest  
                </p>

                
            </div>
        </div>
    </div>
    </div>
		</div>
	</section>

  @endsection