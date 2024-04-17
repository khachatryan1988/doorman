{{--@include('layouts.css')--}}
{{--@include('layouts.header')--}}

<section class="services-area pb-150" style="background-color: #e2e7ea">
    <div class="container">
        <div class="row section-title">
            <h1>{{__('messages.Ինչ ծառայություններ ենք մենք առաջարկում մեր հաճախորդներին')}}</h1>
{{--            <p>Who are in extremely love with eco friendly system.</p>--}}
        </div>
        <div class="row">
            <div class="col-lg-6 single-service">
                <span class="lnr lnr-pencil"></span>
                <a href="{{ route('measurement') }}" target="_blank"><h4>{{__('messages.Չափագրում')}}</h4></a>
                <p>

                </p>
            </div>
            <div class="col-lg-6 single-service">
                <span class="lnr lnr-bullhorn"></span>
                <a href="{{ route('consultation') }}" target="_blank"><h4>{{__('messages.Խորհրդատվություն')}}</h4></a>
                <p>

                </p>
            </div>
            <div class="col-lg-6 single-service">
                <span class="lnr lnr-page-break"></span>
                <a href="{{ route('gateMaintenance') }}" target="_blank"><h4>{{__('messages.Դարպասի Սպասարկում')}}</h4></a>
                <p>

                </p>
            </div>
            <div class="col-lg-6 single-service">
                <span class="lnr lnr-construction"></span>
                <a href="{{ route('gateInstallation') }}" target="_blank"><h4>{{__('messages.Դարպասի Տեղադրում')}}</h4></a>
                <p>

                </p>
            </div>
        </div>
    </div>
</section>
