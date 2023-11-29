@extends('frontend.layouts.app')

@section('content')
<section class="menagement-section py-4">
    <div class="custom-container">
        <div class="menagement-main-box">
            <div class="row">
                <div class="col-12 mb-5 mt-3">
                    <div class="section-title text-center">
                        <h2>Support Team</h2>
                        
                    </div>
                </div>
            </div>
             <div class="row">
                 <div class="col-12 col-sm-6 col-md-4">
                    <div class="menagement-box">
                        <div class="menagement-photo">
                            <img src="{{asset('frontend_assets/teams/amit.jpg')}}" alt="">
                        </div>
                        <div class="menagement-details">
                            <h5>Amit Hassan Shuvo</h5>
                            <span>Mobile: 01861153337</span>
                            <span>Roll: 06</span>
                            <span>MSc in CSE, Batch-30th</span>
                            <span>Dhaka International University</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                   <div class="menagement-box">
                        <div class="menagement-photo">
                        <img src="{{asset('frontend_assets/teams/mahafijur.jpg')}}" alt="">
                        </div>
                        <div class="menagement-details">
                            <h5>Md. Mahafijur Rahman Sohag</h5>
                            <span>Mobile: 01723019475</span>
                            <span>Roll: 11</span>
                            <span>MSc in CSE, Batch-30th</span>
                            <span>Dhaka International University</span>
                           

                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="menagement-box">
                        <div class="menagement-photo">
                        <img src="{{asset('frontend_assets/teams/foysal.jpg')}}" alt="">
                        </div>
                        <div class="menagement-details">
                        <h5>Md. Faysal</h5>
                            <span>Mobile: 01784064180</span>
                            <span>Roll: 12</span>
                            <span>MSc in CSE, Batch-30th</span>
                            <span>Dhaka International University</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="menagement-box">
                        <div class="menagement-photo">
                            <img src="https://rnisecuritiesltd.com/public/frontend/images/menagement/default.jpg" alt="">
                        </div>
                        <div class="menagement-details">
                        <h5>Selina Akter Happy</h5>
                            <span>Mobile: 01647663888</span>
                            <span>Roll: 08 </span>
                            <span>MSc in CSE, Batch-30th</span>
                            <span>Dhaka International University</span>
                           

                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="menagement-box">
                        <div class="menagement-photo">
                            <img src="https://rnisecuritiesltd.com/public/frontend/images/menagement/default.jpg" alt="">
                        </div>
                        <div class="menagement-details">
                        <h5>Suhi Akter</h5>
                            <span>Mobile: 01765232620</span>
                            <span>Roll: 13 </span>
                            <span>MSc in CSE, Batch-30th</span>
                            <span>Dhaka International University</span>
                            

                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="menagement-box">
                        <div class="menagement-photo">
                        <img src="{{asset('frontend_assets/teams/nahid.jpg')}}" alt="">
                        </div>
                        <div class="menagement-details">
                        <h5>Md. Nahid Hasan</h5>
                            <span>Mobile: 01943148215</span>
                            <span>Roll: 02 </span>
                            <span>MSc in CSE, Batch-30th</span>
                            <span>Dhaka International University</span>
                           

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
