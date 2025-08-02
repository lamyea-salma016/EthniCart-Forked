@extends('layouts.app')

@section('title', 'EthniCart | Terms of Service')
<link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

@section('content')
  <!-- Hero Section -->
<section class="relative bg-gradient-to-br from-emerald-900 via-emerald-800 to-green-700 py-20 overflow-hidden">
    <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.05"%3E%3Cpath d="M30 30c0-11.046-8.954-20-20-20s-20 8.954-20 20 8.954 20 20 20 20-8.954 20-20zm0 0c0 11.046 8.954 20 20 20s20-8.954 20-20-8.954-20-20-20-20 8.954-20 20z"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-30"></div>
    
    <div class="relative max-w-7xl mx-auto px-4 text-center">
        <div class="inline-block mb-6">
            <div class="bg-white/20 backdrop-blur-sm rounded-full px-6 py-3 border border-white/30">
                <span class="text-white font-medium">📜 আমাদের নিয়ম • Our Terms</span>
            </div>
        </div>
        
        <h1 class="text-5xl md:text-6xl font-bold text-white mb-6 leading-tight">
            Terms of Service
        </h1>
        
        <p class="text-xl md:text-2xl text-white/90 max-w-4xl mx-auto mb-8 leading-relaxed">
            Building trust through transparency. Your journey with authentic Bangladesh starts with understanding our commitment to you.
        </p>
        
        <div class="bg-white/10 backdrop-blur-sm rounded-lg p-4 border border-white/20 inline-block">
            <div class="text-sm text-white/80">Last updated: January 15, 2025</div>
        </div>
    </div>
</section>

<!-- Main Content Section -->
<section class="bg-gradient-to-b from-green-50 to-white py-16">
    <div class="max-w-4xl mx-auto px-4">
        
        <!-- Quick Navigation -->
        <div class="bg-white rounded-3xl shadow-lg p-8 mb-12">
            <h2 class="text-2xl font-bold text-emerald-900 mb-6">Quick Navigation</h2>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                <a href="#acceptance" class="bg-emerald-50 hover:bg-emerald-100 p-4 rounded-xl transition-colors duration-300">
                    <div class="text-emerald-600 font-semibold text-sm">1. Acceptance</div>
                </a>
                <a href="#services" class="bg-emerald-50 hover:bg-emerald-100 p-4 rounded-xl transition-colors duration-300">
                    <div class="text-emerald-600 font-semibold text-sm">2. Our Services</div>
                </a>
                <a href="#accounts" class="bg-emerald-50 hover:bg-emerald-100 p-4 rounded-xl transition-colors duration-300">
                    <div class="text-emerald-600 font-semibold text-sm">3. User Accounts</div>
                </a>
                <a href="#orders" class="bg-emerald-50 hover:bg-emerald-100 p-4 rounded-xl transition-colors duration-300">
                    <div class="text-emerald-600 font-semibold text-sm">4. Orders & Payment</div>
                </a>
                <a href="#shipping" class="bg-emerald-50 hover:bg-emerald-100 p-4 rounded-xl transition-colors duration-300">
                    <div class="text-emerald-600 font-semibold text-sm">5. Shipping</div>
                </a>
                <a href="#returns" class="bg-emerald-50 hover:bg-emerald-100 p-4 rounded-xl transition-colors duration-300">
                    <div class="text-emerald-600 font-semibold text-sm">6. Returns</div>
                </a>
            </div>
        </div>

        <!-- Terms Content -->
        <div class="space-y-12">
            
            <!-- Section 1: Acceptance of Terms -->
            <div id="acceptance" class="bg-white rounded-3xl shadow-lg p-8">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 bg-emerald-100 rounded-full flex items-center justify-center mr-4">
                        <span class="text-emerald-600 text-xl">✅</span>
                    </div>
                    <h2 class="text-3xl font-bold text-emerald-900">1. Acceptance of Terms</h2>
                </div>
                <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
                    <p class="mb-4">
                        Welcome to EthniCart! By accessing or using our website and services, you agree to be bound by these Terms of Service. If you do not agree to these terms, please do not use our platform.
                    </p>
                    <p class="mb-4">
                        These terms apply to all visitors, users, and customers who access or use EthniCart's e-commerce platform for authentic Bangladeshi products.
                    </p>
                </div>
            </div>

            <!-- Section 2: Our Services -->
            <div id="services" class="bg-white rounded-3xl shadow-lg p-8">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center mr-4">
                        <span class="text-orange-600 text-xl">🛍️</span>
                    </div>
                    <h2 class="text-3xl font-bold text-emerald-900">2. Our Services</h2>
                </div>
                <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
                    <p class="mb-4">
                        EthniCart provides an online marketplace for authentic Bangladeshi products including:
                    </p>
                    <div class="bg-green-50 p-6 rounded-2xl mb-4">
                        <ul class="space-y-2">
                            <li>• Traditional handicrafts and artisan products</li>
                            <li>• Regional food products and delicacies</li>
                            <li>• Textiles and clothing items</li>
                            <li>• Cultural and heritage items</li>
                        </ul>
                    </div>
                    <p class="mb-4">
                        We connect customers directly with local artisans and producers across Bangladesh, ensuring authenticity and supporting traditional craftsmanship.
                    </p>
                </div>
            </div>

            <!-- Section 3: User Accounts -->
            <div id="accounts" class="bg-white rounded-3xl shadow-lg p-8">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center mr-4">
                        <span class="text-purple-600 text-xl">👤</span>
                    </div>
                    <h2 class="text-3xl font-bold text-emerald-900">3. User Accounts</h2>
                </div>
                <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
                    <p class="mb-4">
                        To make purchases, you must create an account and provide accurate, complete information. You are responsible for:
                    </p>
                    <div class="grid md:grid-cols-2 gap-6 mb-6">
                        <div class="bg-emerald-50 p-6 rounded-2xl">
                            <h4 class="font-bold text-emerald-900 mb-3">Your Responsibilities</h4>
                            <ul class="space-y-2 text-sm">
                                <li>• Maintaining account security</li>
                                <li>• Keeping information updated</li>
                                <li>• Protecting your password</li>
                                <li>• Reporting unauthorized access</li>
                            </ul>
                        </div>
                        <div class="bg-amber-50 p-6 rounded-2xl">
                            <h4 class="font-bold text-amber-900 mb-3">Account Usage</h4>
                            <ul class="space-y-2 text-sm">
                                <li>• One account per person</li>
                                <li>• Accurate personal information</li>
                                <li>• Valid contact details</li>
                                <li>• Compliance with our policies</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section 4: Orders and Payment -->
            <div id="orders" class="bg-white rounded-3xl shadow-lg p-8">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                        <span class="text-blue-600 text-xl">💳</span>
                    </div>
                    <h2 class="text-3xl font-bold text-emerald-900">4. Orders and Payment</h2>
                </div>
                <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
                    <div class="bg-gradient-to-r from-emerald-50 to-green-50 p-6 rounded-2xl mb-6">
                        <h4 class="font-bold text-emerald-900 mb-3">Order Process</h4>
                        <p class="mb-4">
                            When you place an order, you make an offer to purchase products. We reserve the right to accept or decline your order for any reason.
                        </p>
                    </div>
                    
                    <div class="grid md:grid-cols-2 gap-6 mb-6">
                        <div class="bg-white border-2 border-emerald-200 p-6 rounded-2xl">
                            <h4 class="font-bold text-emerald-900 mb-3">Payment Methods</h4>
                            <ul class="space-y-2 text-sm">
                                <li>• Credit/Debit Cards</li>
                                <li>• Mobile Banking (bKash, Nagad)</li>
                                <li>• Bank Transfer</li>
                                <li>• Cash on Delivery (select areas)</li>
                            </ul>
                        </div>
                        <div class="bg-white border-2 border-amber-200 p-6 rounded-2xl">
                            <h4 class="font-bold text-amber-900 mb-3">Pricing</h4>
                            <ul class="space-y-2 text-sm">
                                <li>• Prices in Bangladeshi Taka (BDT)</li>
                                <li>• Subject to change without notice</li>
                                <li>• Inclusive of applicable taxes</li>
                                <li>• Shipping charges separate</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section 5: Shipping and Delivery -->
            <div id="shipping" class="bg-white rounded-3xl shadow-lg p-8">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mr-4">
                        <span class="text-green-600 text-xl">🚚</span>
                    </div>
                    <h2 class="text-3xl font-bold text-emerald-900">5. Shipping and Delivery</h2>
                </div>
                <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
                    <div class="bg-gradient-to-r from-green-50 to-emerald-50 p-6 rounded-2xl mb-6">
                        <p class="mb-4">
                            We strive to deliver authentic products safely and promptly. Delivery times may vary based on product availability and location.
                        </p>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                        <div class="bg-blue-50 p-6 rounded-2xl text-center">
                            <div class="text-3xl mb-3">🏙️</div>
                            <h4 class="font-bold text-blue-900 mb-2">Dhaka City</h4>
                            <p class="text-sm text-blue-700">1-2 business days</p>
                        </div>
                        <div class="bg-orange-50 p-6 rounded-2xl text-center">
                            <div class="text-3xl mb-3">🌆</div>
                            <h4 class="font-bold text-orange-900 mb-2">Major Cities</h4>
                            <p class="text-sm text-orange-700">3-5 business days</p>
                        </div>
                        <div class="bg-purple-50 p-6 rounded-2xl text-center">
                            <div class="text-3xl mb-3">🏘️</div>
                            <h4 class="font-bold text-purple-900 mb-2">Rural Areas</h4>
                            <p class="text-sm text-purple-700">5-7 business days</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section 6: Returns and Refunds -->
            <div id="returns" class="bg-white rounded-3xl shadow-lg p-8">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center mr-4">
                        <span class="text-red-600 text-xl">🔄</span>
                    </div>
                    <h2 class="text-3xl font-bold text-emerald-900">6. Returns and Refunds</h2>
                </div>
                <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
                    <div class="bg-gradient-to-r from-red-50 to-pink-50 p-6 rounded-2xl mb-6">
                        <p class="mb-4">
                            We want you to be completely satisfied with your authentic Bangladeshi products. Our return policy ensures your peace of mind.
                        </p>
                    </div>
                    
                    <div class="grid md:grid-cols-2 gap-6 mb-6">
                        <div class="bg-green-50 p-6 rounded-2xl">
                            <h4 class="font-bold text-green-900 mb-3">✅ Returnable Items</h4>
                            <ul class="space-y-2 text-sm">
                                <li>• Damaged during shipping</li>
                                <li>• Significantly different from description</li>
                                <li>• Manufacturing defects</li>
                                <li>• Wrong item sent</li>
                            </ul>
                        </div>
                        <div class="bg-red-50 p-6 rounded-2xl">
                            <h4 class="font-bold text-red-900 mb-3">❌ Non-Returnable Items</h4>
                            <ul class="space-y-2 text-sm">
                                <li>• Perishable food items</li>
                                <li>• Custom/personalized products</li>
                                <li>• Items used or damaged by customer</li>
                                <li>• Products without original packaging</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="bg-yellow-50 p-6 rounded-2xl">
                        <h4 class="font-bold text-yellow-900 mb-3">Return Process</h4>
                        <p class="text-sm mb-3">
                            Contact us within 7 days of delivery to initiate a return. We'll provide return instructions and arrange pickup where possible.
                        </p>
                        <p class="text-sm">
                            Refunds will be processed within 5-10 business days after we receive and inspect the returned item.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Additional Terms -->
            <div class="bg-white rounded-3xl shadow-lg p-8">
                <h2 class="text-3xl font-bold text-emerald-900 mb-6">Additional Terms</h2>
                <div class="grid md:grid-cols-2 gap-8">
                    <div>
                        <h4 class="font-bold text-gray-900 mb-3">Privacy & Data</h4>
                        <p class="text-gray-600 text-sm mb-4">
                            Your privacy is important to us. Please review our Privacy Policy to understand how we collect, use, and protect your information.
                        </p>
                        
                        <h4 class="font-bold text-gray-900 mb-3">Intellectual Property</h4>
                        <p class="text-gray-600 text-sm mb-4">
                            All content on EthniCart, including images, text, and logos, is protected by copyright and trademark laws.
                        </p>
                    </div>
                    
                    <div>
                        <h4 class="font-bold text-gray-900 mb-3">Limitation of Liability</h4>
                        <p class="text-gray-600 text-sm mb-4">
                            EthniCart's liability for any claim related to products or services is limited to the purchase price of the specific product.
                        </p>
                        
                        <h4 class="font-bold text-gray-900 mb-3">Changes to Terms</h4>
                        <p class="text-gray-600 text-sm">
                            We may update these terms periodically. Continued use of our services constitutes acceptance of updated terms.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Section -->
        <div class="bg-gradient-to-r from-emerald-600 to-green-600 rounded-3xl p-8 text-white text-center mt-16">
            <h3 class="text-3xl font-bold mb-6">Questions About Our Terms?</h3>
            <p class="text-xl mb-8 max-w-3xl mx-auto leading-relaxed">
                We're here to help! Contact our customer service team for any questions about these terms or your EthniCart experience.
            </p>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-4xl mx-auto">
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20">
                    <div class="text-3xl mb-4">📧</div>
                    <h4 class="text-lg font-bold mb-2">Email Support</h4>
                    <p class="text-white/90 text-sm">support@ethnicart.com</p>
                </div>
                
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20">
                    <div class="text-3xl mb-4">📞</div>
                    <h4 class="text-lg font-bold mb-2">Phone Support</h4>
                    <p class="text-white/90 text-sm">+880 1XXX-XXXXXX</p>
                </div>
                
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20">
                    <div class="text-3xl mb-4">💬</div>
                    <h4 class="text-lg font-bold mb-2">Live Chat</h4>
                    <p class="text-white/90 text-sm">Available 9 AM - 9 PM</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection