{{-- <section id="why-choose" class="why-choose-section backgroud-style {{isset($class) ? $class : ''}}">
    <div class="container">
        <div class="section-title mb20 headline text-center ">
            <span class="subtitle text-uppercase">{{env('APP_NAME')}} @lang('labels.frontend.layouts.partials.advantages')</span>
            <h2>Reason <span>Why Choose {{env('APP_NAME')}}.</span></h2>
        </div>
        <div class="extra-features-content">
            <div class="row">
                @foreach($reasons->take(9) as $item)
                    <div class="extra-left-content col-md-4 col-sm-6">
                        <div class="extra-icon-text text-left">
                            <div class="features-icon gradient-bg text-center">
                                <i class="{{$item->icon}}"></i>
                            </div>
                            <div class="features-text">
                                <div class="features-text-title">
                                    <h3>{{$item->title}}</h3>
                                </div>
                                <div class="features-text-dec">
                                    <span>{{$item->content}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
            @endforeach
            <!-- // extra-left-content -->
            </div><!-- /row -->
        </div>
    </div>
</section> --}}


<div class="container-fluid" style="background:#73A4B4;padding-top:100px;padding-bottom:100px;">
        <div class="container">
        
        <div class="row">

        <div class="four col-md-3">
            <div class="counter-box colored">
               <img src="/diplome.png" width="100"/> <br>
                <span class="counter">1500</span>
                <p>Etudiants</p>
            </div>
        </div>
        <div class="four col-md-3">
            <div class="counter-box">
                <img src="/video.png" width="100"/> <br>
                <span class="counter">300</span>
                <p>Cours</p>
            </div>
        </div>
        <div class="four col-md-3">
            <div class="counter-box">
               <img src="/buildings.png" width="100"/> <br>
                <span class="counter">100</span>
                <p>Entreprises connectées</p>
            </div>
        </div>
        <div class="four col-md-3">
            <div class="counter-box">
                 <img src="/countries.png" width="100"/> <br>
                <span class="counter">20</span>
                <p>Pays</p>
            </div>
        </div>
    </div>	
    </div>
</div> 
@push('after-scripts')     
  <script>       
    $(document).ready(function() {

            $('.counter').each(function () {
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        }, {
            duration: 4000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });
    
    });  
    </script>
    <style>


        .counter-box {
            display: block;
            padding: 40px 20px 37px;
            text-align: center
        }

        .counter-box p {
            margin: 5px 0 0;
            padding: 0;
            color: white;
            font-size: 18px;
            font-weight: 500
        }

        .counter-box i {
            font-size: 60px;
            margin: 0 0 15px;
            color: white;
        }

.counter{
 color: white;
}

    

        .counter-box.colored p,
        .counter-box.colored i,
        .counter-box.colored .counter {
            color:white;
        }
    </style>



@endpush
