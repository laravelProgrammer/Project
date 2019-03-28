@extends('website.layouts.app')

  @section('body')
    <section class="bgwhite p-t-66 p-b-60">
        <div class="container">
            <div class="row">
             <div class="col-md-2 p-b-30">
             </div>

                <div class="col-md-8 p-b-30">
                    <form class="leave-comment" action="{{route('sendCard.store')}}" method="post">
                        {{csrf_field()}}
                        <h4 class="m-text26 p-b-36 p-t-15">
                            Send Your Card
                        </h4>

                        <div class="bo4 of-hidden size15 m-b-20">
                            
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="name" placeholder="Full Name" required ="true"  pattern="[a-zA-Z\'\s]+" title="Only Alphabates Are Allowed" value="{{old('name')}}">
                        </div>

                    

                        <div class="bo4 of-hidden size15 m-b-20">
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="email" name="email" placeholder="Sender Email Address" required="true">
                        </div>

                        <textarea class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13 m-b-20" name="message" placeholder="Message" required="true"></textarea>

                        <div class="w-size25">
                            <!-- Button -->
                            <button class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">
                                Send
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


@endsection
