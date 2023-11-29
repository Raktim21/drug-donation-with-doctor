@extends('frontend.layouts.app')

@section('content')
<section class="corona-section py-5">
    <div class="container">
        <div class="row">
            <div class="d-none col-5 d-lg-block ">
                <div class="corona-bg">
                </div>
            </div>
            <div class="col-12 col-lg-7">
                <div class="corona-text">
                    <h2>আমাদের সম্পর্কে</h2>
                    <p>
                    এই ওয়েবসাইটটি বানানোর মূল লক্ষ্য ও উদ্দেশ্য হল আত্ম মানবতার সেবা করা। 
আমরা বিভিন্ন রোগ-বালাইয়ের জন্য ঔষধ সেবন করে থাকি। একটা পর্যায়ে গিয়ে কিছু ঔষধ উচ্ছিষ্ট হিসেবে থেকে যায়। যা পরবর্তীতে মেয়াদ উত্তীর্ণ হয়ে নষ্ট হয়ে যেতে পারে। কিন্তু এসব ঔষধ যদি কেনার সামর্থ্য নেই এমন কাউকে দিয়ে দেই। সেক্ষেত্রে আপনার অব্যবহৃত ওষুধ দানের মাধ্যমেই আরেকজনের কল্যাণ বয়ে আনবে।
                    </p>
                    <p>
                    আপনি চাইলে আমাদের মাধ্যমে কোন অব্যবহৃত ঔষধ দান করতে পারবেন। কিংবা কারো দানকৃত ঔষধ গ্রহণ করতে পারবেন।
                    </p>
                    
                </div>
            </div>
        </div>
    </div>
</section>


<section class="how-to-word py-5">
    <div class="container">
        <div class="section-title text-center">
            <h1>কিভাবে কাজ করে ?</h1>
        </div>
        <div class="row mt-5 justify-content-center">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="how-work-box">
                    <span>১</span>
                    <h4>রেজিস্ট্রেশন</h4>
                    <p>
                    Sign up on our platform to connect with donors and access medicine 
                    </p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="how-work-box">
                    <span>২</span>
                    <h4>ঔষধের জন্য অনুরোধ/দান</h4>
                    <p>
                    Submit your medicine needs, and we'll match you with available 
                    </p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="how-work-box">
                    <span>৩</span>
                    <h4>ঔষধ গ্রহণ/প্রদান</h4>
                    <p>
                    Once matched, receive donated medicines conveniently at your chosen location.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
