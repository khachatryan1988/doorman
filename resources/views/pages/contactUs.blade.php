@include('layouts.css')
@include('layouts.header')
<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12" style="margin-bottom: 95px; padding-top: 74px;">
                <h1 style="margin-bottom: 80px; padding-top: 130px;" class="text-white" >
                    {{__('messages.Հետադարձ կապ')}}
                </h1>
                <p class="text-white link-nav"><a href="/">{{__('messages.Գլխավոր էջ')}}</a></p>
            </div>


        </div>
    </div>
</section>
<div class="container">
    <div class="row section-title">
        <h3>Հարգելի հաճախորդ, հարցերի դեպքում կարող եք կապ հաստատել մեր հետ հետևյալ կոնտակտներով՝</h3><pre>
        <h4>Հեռախոսահամար՝ +(374) 33 22 22 50</h4><br>
        <h4>էլ․ հասցե <a href="mailto:office@doorman.am">office@doorman.am</a></h4>
    </div>
</div>

@include('layouts.footer')


