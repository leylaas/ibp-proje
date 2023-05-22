@extends('layouts.frontbase')

@section('content')

    <!-- Contact Section Begin -->
    <section class="contact-section spad" style="padding-top: 200px;padding-left: 200px ">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <div class="leave-comment">
                        <div class="section-title contact-title">
                            <span>Shipping information</span>
                        </div>
                        {{--                        <h3 style="color: white ; padding-bottom: 15px;">{{Session::get('info')}} </h3>--}}
                        @include('home.messages')
                        <form action="{{route("storeorder",['id'=> $data->id])}}" method="post"> {{--send product id --}}
                            @csrf
                            <input type="text" name="name" value="{{Auth::user()->name }}" placeholder="Name & Surname" required>
                            <input type="tel" name="phone" placeholder="Phone Number" required>
                            <input type="email" name="email" placeholder="Email">
                            <div class="section-title contact-title">
                                <span>Payment information</span>
                            </div>
                            <input type="tel" name="holder" placeholder="Card Holder">
                            <input type="number" name="number" placeholder="Card Number">
                            <input type="text" name="date" placeholder="Exp. Date">
                            <input type="text" name="code" placeholder="Security Code">
                            <button type="submit" class="primary-btn pricing-btn"
                                    style="background-color: #f36100; color: white ; text-align: center;">COMPLETE ORDER
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->



@endsection
