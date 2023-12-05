@extends('layouts.web')

@section('content')
<style>
 
</style>
    <section class="about_us_page pt-5">
        <div class="container my-5" >
            <div class="row justify-content-around mt-2">
                <div class="col-lg-12 mb-4" >
                    <div class="d-flex flex-column align-items-center mb-4">
                        <h2 class="fs-1 ">About Us</h2>
                        <div class="seperator"></div>
                    </div>
                    <p>
                        My Dispute Resolution Partner (MyDRP) believes in healthy competition for the evolving nature of justice. MyDRP provides a platform to facilitate dispute resolution and claim management. It provides an effective mean of connecting the dispute initiators (plaintiffs) and provides prospective contract-based jobs for consultants, claim and forensic experts in the field of construction, trade, finance and digital industries.
                    </p>
                    <div class="text-center pt-5 pb-4 rounded shadow-sm"style="background-color: #e9e8e8;">
                        <i><h4>Vision Statement</h4>
                        <p>
                            <i class="fas fa-quote-left pe-2"></i>
                            To be a market leader in connecting dispute resolution experts and claim consultants with companies needing fee-based and/or ownership-oriented mode of dispute resolution management. 
                            <i class="fas fa-quote-right ps-2"></i>
                        </i></p>
                    </div>
                     <p class="mt-4">
                        We understand that sometimes companies may no longer be able to finance their rightful legal cases while they may have a good or even an affirmed chance of winning a case. However, due to lack of funds or due to the expanding work of a company; it may no longer be possible to finance a case. Through MyDRP you can engage and use the expertise available globally and that too at minimal fee basis or completely financed through an ownership-oriented model by sharing a percentage of win with the respective consultant firm.<br /><br />
                        By working through this platform, we will be investing in:
                    </p>
                </div>
            </div>
            <div class="row mb-5 d-flex align-items-center justify-content-center">
                <div class="col-lg-6 mb-4" >
                    <h4 class="mb-3">Access to Justice:</h4>
                    <p>
                        MyDRP provides an easy-to-use platform which dynamically connects a dispute resolution seeker with the desired consultant firm. With greater access to each other and on <i>financially viable terms</i> – the access to justice is expanded to a greater<i> Equitable-framework. We believe everyone deserves access to justice. </i>
                    </p>
                </div>
                <div class="col-lg-6">
                    <img class="img-about" src="{{ asset('assets/image/justice.jpg') }}" width="100%" />
                </div>
            </div>
            <div class="row mb-5 d-flex align-items-center justify-content-center">
                <div class="col-lg-6 second-image">
                    <img class="img-about" src="{{ asset('assets/image/law.jpg') }}" width="100%" />
                </div>
                <div class="col-lg-6 mb-4 second-text" >
                    <h4 class="mb-3">The Rule of Law:</h4>
                    <p>
                        We <i>believe</i> in the effective Rule of Law. Even<i> though the concept of the Rule of Law is an intrinsic and abstract idea and</i> is founded upon philosophy and morality – we still believe that the developing and evolving nature of justice would achieve its zenith under the struggle towards the<i> Rule of Law.</i> Ownership-orientated mindset at the heart of legal finance tries elevate the reach towards a greater Rule of Law.
                    </p>
                </div>
            </div>
            <div class="row mb-5 d-flex align-items-center justify-content-center">
                <div class="col-lg-6 mb-4" >
                    <h4 class="mb-3">Legal and Para-Legal Experts:</h4>
                    <p>
                        We find that there is no active place of job seeking for the legal and paralegal experts which may just be job or project based. At MyDRP we provide desired opportunities to legal and paralegal experts suiting their specific needs and goals. MyDRP can provide alternative opportunities for retired experts, experts who would like to work for themselves with their own goals or institutions who would want to concentrate themselves in their own industry or expand into other industries and regions.
                    </p>
                </div>
                <div class="col-lg-6">
                    <img class="img-about" src="{{ asset('assets/image/legal-experts.jpg') }}" width="100%" />
                </div>
            </div>
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-lg-6 forth-image">
                    <img class="img-about" src="{{ asset('assets/image/legal.jpg') }}" width="100%" />
                </div>
                <div class="col-lg-6 mb-4 forth-text" >
                    <h4 class="mb-3">Integration of the Legal, Dispute and Finance Industry:</h4>
                    <p>
                        Coming to know who is who in the legal, dispute and finance industry will bring greater integration between the essential players leading to <i>Equitable justice.</i> Such integration would be based upon mutual cohesion, harmony, value and benefits. MyDRP seeks to integrate the essential players on a dynamic basis further increasing their effectiveness and efficiency. 
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection