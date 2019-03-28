@extends('website.layouts.app')

@section ('body')

<section class="bgwhite p-t-66 p-b-60">
	<div class="container">
		<div class="row">
			

			<div class="col-md-8 p-b-30">
				<form class="leave-comment" method="post" action="{{route('profile.update',$user->id)}}">
					{{csrf_field()}}
					{{method_field('PUT')}}
					<h4 class="m-text26 p-b-36 p-t-15">
						<i class="fa fa-user"></i> Edit Record
					</h4>

					<div class="bo4 of-hidden size15 m-b-20">
						<input class="sizefull s-text7 p-l-22 p-r-22" type="text" readonly="true" value="{{$user->id}}">
					</div>

					<div class="bo4 of-hidden size15 m-b-20">
						<input class="sizefull s-text7 p-l-22 p-r-22" type="text" value="{{$user->name}}"name="name">
					</div>

					<div class="bo4 of-hidden size15 m-b-20">
						<input class="sizefull s-text7 p-l-22 p-r-22" type="text"  value="{{$user->email}}" name="email">
					</div>

					<div class="bo4 of-hidden size15 m-b-20">
						<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="password" placeholder="Enter new password">
					</div>

					<div class="w-size25">
						<!-- Button -->


						<button class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">
                                Update
                            </button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

@endsection