@extends('layouts.app')
@section('title', 'EthniCart | Join as Seller')
<link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

@section('content')
<div class="min-h-screen bg-gradient-to-br from-green-50 to-emerald-100">
    <!-- Hero Section -->
    <div class="relative overflow-hidden bg-gradient-to-r from-green-600 to-emerald-700 text-white">
        <div class="absolute inset-0 bg-black opacity-10"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold mb-6">
                    <span class="block">বিক্রেতা হিসেবে যোগ দিন</span>
                    <span class="block text-green-200 text-3xl md:text-4xl mt-2">Join as a Seller</span>
                </h1>
                <p class="text-xl md:text-2xl text-green-100 max-w-3xl mx-auto leading-relaxed">
                    EthniCart এর সাথে আপনার ব্যবসার নতুন যাত্রা শুরু করুন। 
                    সরাসরি উৎস থেকে সেরা দামে আপনার পণ্য বিক্রি করুন।
                </p>
            </div>
        </div>
    </div>

    <!-- Benefits Section -->
    <div class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                    বিক্রেতা হিসেবে আপনার সুবিধাসমূহ
                </h2>
                <p class="text-lg text-gray-600">Why choose EthniCart as your selling platform?</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Benefit 1 -->
                <div class="bg-gradient-to-br from-green-50 to-emerald-100 p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="w-12 h-12 bg-green-600 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">সর্বনিম্ন দাম নিশ্চিতকরণ</h3>
                    <p class="text-gray-600">আমরা মধ্যস্বত্বভোগী বাদ দিয়ে সরাসরি উৎস থেকে সর্বনিম্ন দামে পণ্য বিক্রির নিশ্চয়তা দিই।</p>
                </div>

                <!-- Benefit 2 -->
                <div class="bg-gradient-to-br from-green-50 to-emerald-100 p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="w-12 h-12 bg-green-600 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">প্রাক অর্থায়ন সুবিধা</h3>
                    <p class="text-gray-600">ছোট বিক্রেতাদের জন্য প্রাক অর্থায়ন সুবিধা। আপনার ব্যবসা বৃদ্ধিতে আমরা সহায়তা করি।</p>
                </div>

                <!-- Benefit 3 -->
                <div class="bg-gradient-to-br from-green-50 to-emerald-100 p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="w-12 h-12 bg-green-600 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">গুণমান নিশ্চয়তা</h3>
                    <p class="text-gray-600">শুধুমাত্র আসল পণ্য উৎপাদনকারীরাই বিক্রেতা হতে পারবেন। গুণমানের নিশ্চয়তা আমাদের প্রতিশ্রুতি।</p>
                </div>

                <!-- Benefit 4 -->
                <div class="bg-gradient-to-br from-green-50 to-emerald-100 p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="w-12 h-12 bg-green-600 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">দ্রুত বিক্রয় বৃদ্ধি</h3>
                    <p class="text-gray-600">আমাদের প্ল্যাটফর্মে লক্ষ লক্ষ ক্রেতার কাছে পৌঁছান এবং দ্রুত বিক্রয় বৃদ্ধি করুন।</p>
                </div>

                <!-- Benefit 5 -->
                <div class="bg-gradient-to-br from-green-50 to-emerald-100 p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="w-12 h-12 bg-green-600 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192L5.636 18.364M12 12h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">বিনামূল্যে মার্কেটিং সাপোর্ট</h3>
                    <p class="text-gray-600">আমাদের মার্কেটিং টিম আপনার পণ্যের প্রচারণায় সহায়তা করবে বিনামূল্যে।</p>
                </div>

                <!-- Benefit 6 -->
                <div class="bg-gradient-to-br from-green-50 to-emerald-100 p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="w-12 h-12 bg-green-600 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">২৪/৭ গ্রাহক সেবা</h3>
                    <p class="text-gray-600">যেকোনো সমস্যায় আমাদের দক্ষ কাস্টমার সার্ভিস টিম সর্বদা আপনার পাশে।</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Rules & Regulations Section -->
    <div class="py-16 bg-gradient-to-br from-green-50 to-emerald-100">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                    নিয়মাবলী ও শর্তাদি
                </h2>
                <p class="text-lg text-gray-600">Rules & Regulations for Sellers</p>
            </div>

            <div class="space-y-4">
                <!-- FAQ Item 1 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <button class="w-full text-left p-6 focus:outline-none focus:bg-green-50 hover:bg-green-50 transition-colors duration-200" onclick="toggleFAQ('faq1')">
                        <div class="flex justify-between items-center">
                            <h3 class="text-lg font-semibold text-gray-800">বিক্রেতা হতে কী কী যোগ্যতা লাগে? / What are the eligibility criteria?</h3>
                            <svg id="faq1-icon" class="w-5 h-5 text-green-600 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </div>
                    </button>
                    <div id="faq1-content" class="hidden px-6 pb-6">
                        <p class="text-gray-600 leading-relaxed">
                            আপনাকে অবশ্যই পণ্যের আসল উৎপাদনকারী হতে হবে। কোনো মধ্যস্বত্বভোগী বা রিসেলার বিক্রেতা হিসেবে যোগ দিতে পারবেন না। 
                            আপনার নিজস্ব কারখানা, ওয়ার্কশপ বা উৎপাদন ইউনিট থাকতে হবে।
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <button class="w-full text-left p-6 focus:outline-none focus:bg-green-50 hover:bg-green-50 transition-colors duration-200" onclick="toggleFAQ('faq2')">
                        <div class="flex justify-between items-center">
                            <h3 class="text-lg font-semibold text-gray-800">কী ধরনের ডকুমেন্ট লাগবে? / What documents are required?</h3>
                            <svg id="faq2-icon" class="w-5 h-5 text-green-600 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </div>
                    </button>
                    <div id="faq2-content" class="hidden px-6 pb-6">
                        <p class="text-gray-600 leading-relaxed">
                            ট্রেড লাইসেন্স, ব্যাংক অ্যাকাউন্ট তথ্য, জাতীয় পরিচয়পত্র, উৎপাদন ইউনিটের ছবি ও ঠিকানা, 
                            পণ্যের মান নিয়ন্ত্রণ সার্টিফিকেট (যদি থাকে) এবং ব্যবসায়িক রেজিস্ট্রেশন প্রমাণপত্র।
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <button class="w-full text-left p-6 focus:outline-none focus:bg-green-50 hover:bg-green-50 transition-colors duration-200" onclick="toggleFAQ('faq3')">
                        <div class="flex justify-between items-center">
                            <h3 class="text-lg font-semibold text-gray-800">প্রাক অর্থায়ন কীভাবে কাজ করে? / How does pre-funding work?</h3>
                            <svg id="faq3-icon" class="w-5 h-5 text-green-600 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </div>
                    </button>
                    <div id="faq3-content" class="hidden px-6 pb-6">
                        <p class="text-gray-600 leading-relaxed">
                            যোগ্য ছোট বিক্রেতাদের জন্য আমরা অগ্রিম অর্থায়ন প্রদান করি। এর মাধ্যমে আপনি কাঁচামাল কিনতে এবং 
                            উৎপাদন বৃদ্ধি করতে পারবেন। পরবর্তীতে বিক্রয়ের টাকা থেকে এই অর্থ কেটে রাখা হবে।
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <button class="w-full text-left p-6 focus:outline-none focus:bg-green-50 hover:bg-green-50 transition-colors duration-200" onclick="toggleFAQ('faq4')">
                        <div class="flex justify-between items-center">
                            <h3 class="text-lg font-semibold text-gray-800">জাল পণ্য বিক্রি করলে কী হবে? / What happens if fake products are sold?</h3>
                            <svg id="faq4-icon" class="w-5 h-5 text-green-600 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </div>
                    </button>
                    <div id="faq4-content" class="hidden px-6 pb-6">
                        <p class="text-gray-600 leading-relaxed">
                            জাল বা নকল পণ্য বিক্রি সম্পূর্ণ নিষিদ্ধ। যদি কোনো বিক্রেতা জাল পণ্য বিক্রি করেন বা 
                            মধ্যস্বত্বভোগী হিসেবে পরিচয় গোপন করেন, তাহলে তার অ্যাকাউন্ট স্থায়ীভাবে বন্ধ করে দেওয়া হবে।
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 5 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <button class="w-full text-left p-6 focus:outline-none focus:bg-green-50 hover:bg-green-50 transition-colors duration-200" onclick="toggleFAQ('faq5')">
                        <div class="flex justify-between items-center">
                            <h3 class="text-lg font-semibold text-gray-800">কমিশন কত এবং পেমেন্ট কখন পাবো? / Commission rate and payment schedule?</h3>
                            <svg id="faq5-icon" class="w-5 h-5 text-green-600 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </div>
                    </button>
                    <div id="faq5-content" class="hidden px-6 pb-6">
                        <p class="text-gray-600 leading-relaxed">
                            আমাদের কমিশন হার অত্যন্ত প্রতিযোগিতামূলক এবং পণ্যের ধরন অনুযায়ী ভিন্ন হয়। 
                            পেমেন্ট সাপ্তাহিক ভিত্তিতে প্রদান করা হয় এবং ডেলিভারি কনফার্মের ৭ দিন পর টাকা পাবেন।
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="py-16 bg-gradient-to-r from-green-600 to-emerald-700">
        <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                আজই শুরু করুন আপনার ব্যবসায়িক যাত্রা
            </h2>
            <p class="text-xl text-green-100 mb-8 max-w-2xl mx-auto">
                EthniCart এর সাথে যুক্ত হয়ে লক্ষ লক্ষ ক্রেতার কাছে পৌঁছান। 
                আপনার স্বপ্নের ব্যবসা গড়ে তুলুন আমাদের সাথে।
            </p>
            <a href="{{ route('seller.register') }}" 
               class="inline-flex items-center px-8 py-4 bg-white text-green-700 font-bold text-lg rounded-full hover:bg-green-50 transform hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-xl">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                </svg>
                এখনই রেজিস্ট্রেশন করুন
            </a>
            <p class="text-green-200 mt-4 text-sm">
                রেজিস্ট্রেশন সম্পূর্ণ বিনামূল্যে এবং মাত্র ৫ মিনিটে সম্পন্ন হবে
            </p>
        </div>
    </div>
</div>

<script>
function toggleFAQ(faqId) {
    const content = document.getElementById(faqId + '-content');
    const icon = document.getElementById(faqId + '-icon');
    
    if (content.classList.contains('hidden')) {
        content.classList.remove('hidden');
        icon.style.transform = 'rotate(180deg)';
    } else {
        content.classList.add('hidden');
        icon.style.transform = 'rotate(0deg)';
    }
}
</script>
@endsection