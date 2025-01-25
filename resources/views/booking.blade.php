@extends('master.master')

@section('dynblock')

<script>
    $(document).ready(function() {
        $('.dropdown-toggle').dropdown();
    });
</script>

<body>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title text-center text-primary text-uppercase">Tour Booking</h6>
                <h1 class="mb-5">Book A <span class="text-primary text-uppercase">Tour</span></h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="img/about-1.jpg" style="margin-top: 25%;">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="img/about-2.jpg">
                        </div>
                        <div class="col-6 text-end">

                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded w-85 wow zoomIn" data-wow-delay="0.7s" src="img/destination-2.jpg">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <form method="POST" action="booking">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input name="name" type="text" class="form-control" id="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input name="email" type="email" class="form-control" id="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating date" id="date3" data-target-input="nearest">
                                        <input name="start" type="date" class="form-control datetimepicker-input" id="departure" placeholder="Departure date" data-target="#date3" data-toggle="datetimepicker" />
                                        <label for="departure">Departure date</label>
                                    </div>
                                </div>
                               

                               
                                <div class="col-md-6">
                                    <div class="form-floating">
                                    <select id="myDropdown" name="txt_country">
                                      @foreach ($v_show as $item) 
                            
                                     <option value="{{$item->id}}"> {{$item->country}}
                                         
                                 
                                         </option>
                                      
                                     @endforeach 
                                     </select>
                                      
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input name="amount" type="integer" class="form-control" id="number" placeholder="Number of people">
                                        <label for="number">Number of people</label>
                                    </div>
                                </div>
                                <!-- <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select" id="select1">
                                            <option value="1"> 1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                        <label for="select1">Select destination</label>
                                    </div>
                                </div> -->


                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea name="s_request" class="form-control" placeholder="Special Request" id="message" style="height: 100px"></textarea>
                                        <label for="message">Special Request</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Book Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@stop