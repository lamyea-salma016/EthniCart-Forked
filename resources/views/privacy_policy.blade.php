@extends('layouts.app')
@section('title', 'EthniCart | Privacy Policy')
<link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

@section('content')
<div class="min-h-screen bg-gradient-to-br from-green-50 to-emerald-100">
    <!-- Hero Section -->
    <div class="relative overflow-hidden bg-gradient-to-r from-green-600 to-emerald-700 text-white">
        <div class="absolute inset-0 bg-black opacity-10"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold mb-6">
                    <span class="block">Privacy Policy</span>
                </h1>
                <p class="text-xl md:text-2xl text-green-100 max-w-3xl mx-auto leading-relaxed">
                    Your privacy is our priority. Learn how EthniCart collects, uses, and protects your information.
                </p>
            </div>
        </div>
    </div>

    <!-- Quick Navigation -->
    <div class="py-8 bg-white shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-wrap justify-center gap-4">
                <a href="#data-collection" class="px-4 py-2 bg-green-100 text-green-700 rounded-full hover:bg-green-200 transition-colors duration-200">Data Collection</a>
                <a href="#data-usage" class="px-4 py-2 bg-green-100 text-green-700 rounded-full hover:bg-green-200 transition-colors duration-200">Data Usage</a>
                <a href="#data-sharing" class="px-4 py-2 bg-green-100 text-green-700 rounded-full hover:bg-green-200 transition-colors duration-200">Data Sharing</a>
                <a href="#security" class="px-4 py-2 bg-green-100 text-green-700 rounded-full hover:bg-green-200 transition-colors duration-200">Security</a>
                <a href="#rights" class="px-4 py-2 bg-green-100 text-green-700 rounded-full hover:bg-green-200 transition-colors duration-200">Your Rights</a>
                <a href="#contact" class="px-4 py-2 bg-green-100 text-green-700 rounded-full hover:bg-green-200 transition-colors duration-200">Contact</a>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="py-16">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Introduction -->
            <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-6">Introduction</h2>
                <div class="space-y-4 text-gray-600">
                    <p class="leading-relaxed">
                        EthniCart respects your privacy and is committed to protecting your personal information. 
                        This Privacy Policy explains how we collect, use, store, and protect your data when you use our e-commerce platform.
                    </p>
                    <div class="bg-green-50 border-l-4 border-green-400 p-4 rounded">
                        <p class="text-green-800 font-medium">Last Updated: January 2025</p>
                    </div>
                </div>
            </div>

            <!-- Data Collection Section -->
            <div id="data-collection" class="bg-white rounded-xl shadow-lg p-8 mb-8">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-6">
                    <span class="flex items-center">
                        <svg class="w-8 h-8 text-green-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        Information We Collect
                    </span>
                </h2>
                
                <div class="grid md:grid-cols-2 gap-6">
                    <!-- For Buyers -->
                    <div class="bg-gradient-to-br from-green-50 to-emerald-100 p-6 rounded-lg">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4 text-green-700">For Buyers:</h3>
                        <ul class="space-y-2 text-gray-600">
                            <li>• Name, email, phone number</li>
                            <li>• Delivery addresses</li>
                            <li>• Payment information (encrypted)</li>
                            <li>• Order history and preferences</li>
                            <li>• Device and browser information</li>
                        </ul>
                    </div>

                    <!-- For Sellers -->
                    <div class="bg-gradient-to-br from-green-50 to-emerald-100 p-6 rounded-lg">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4 text-green-700">For Sellers:</h3>
                        <ul class="space-y-2 text-gray-600">
                            <li>• Business name and registration</li>
                            <li>• Contact and address details</li>
                            <li>• Bank account information</li>
                            <li>• Product listings and inventory</li>
                            <li>• Sales and financial records</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Data Usage Section -->
            <div id="data-usage" class="bg-white rounded-xl shadow-lg p-8 mb-8">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-6">
                    <span class="flex items-center">
                        <svg class="w-8 h-8 text-green-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                        How We Use Your Information
                    </span>
                </h2>
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="bg-gradient-to-br from-green-50 to-emerald-100 p-6 rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-800 mb-3">Service Provision</h3>
                        <p class="text-gray-600">Processing orders, payments, deliveries, and providing customer support.</p>
                    </div>
                    <div class="bg-gradient-to-br from-green-50 to-emerald-100 p-6 rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-800 mb-3">Communication</h3>
                        <p class="text-gray-600">Order updates, promotional offers, important notices, and customer service.</p>
                    </div>
                    <div class="bg-gradient-to-br from-green-50 to-emerald-100 p-6 rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-800 mb-3">Platform Improvement</h3>
                        <p class="text-gray-600">Enhancing user experience, developing new features, and fixing issues.</p>
                    </div>
                    <div class="bg-gradient-to-br from-green-50 to-emerald-100 p-6 rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-800 mb-3">Security & Compliance</h3>
                        <p class="text-gray-600">Fraud prevention, security monitoring, and meeting legal requirements.</p>
                    </div>
                </div>
            </div>

            <!-- Data Sharing Section -->
            <div id="data-sharing" class="bg-white rounded-xl shadow-lg p-8 mb-8">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-6">
                    <span class="flex items-center">
                        <svg class="w-8 h-8 text-green-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.367 2.684 3 3 0 00-5.367-2.684z"></path>
                        </svg>
                        Information Sharing
                    </span>
                </h2>
                <div class="space-y-6">
                    <div class="bg-red-50 border-l-4 border-red-400 p-4 rounded">
                        <h3 class="font-semibold text-red-800 mb-2">We Never:</h3>
                        <p class="text-red-700">Sell, rent, or trade your personal information to third parties.</p>
                    </div>
                    
                    <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 rounded">
                        <h3 class="font-semibold text-yellow-800 mb-2">Limited Sharing With:</h3>
                        <ul class="text-yellow-700 space-y-1">
                            <li>• Payment processors (for transactions)</li>
                            <li>• Delivery partners (for shipping)</li>
                            <li>• Sellers (order-related information only)</li>
                            <li>• Legal authorities (when required by law)</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Security Section -->
            <div id="security" class="bg-white rounded-xl shadow-lg p-8 mb-8">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-6">
                    <span class="flex items-center">
                        <svg class="w-8 h-8 text-green-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                        </svg>
                        Security Measures
                    </span>
                </h2>
                <div class="grid md:grid-cols-3 gap-6">
                    <div class="flex items-center p-4 bg-green-50 rounded-lg">
                        <svg class="w-6 h-6 text-green-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                        <span class="text-gray-700">SSL Encryption</span>
                    </div>
                    <div class="flex items-center p-4 bg-green-50 rounded-lg">
                        <svg class="w-6 h-6 text-green-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"></path>
                        </svg>
                        <span class="text-gray-700">Secure Passwords</span>
                    </div>
                    <div class="flex items-center p-4 bg-green-50 rounded-lg">
                        <svg class="w-6 h-6 text-green-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span class="text-gray-700">Access Control</span>
                    </div>
                    <div class="flex items-center p-4 bg-green-50 rounded-lg">
                        <svg class="w-6 h-6 text-green-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4"></path>
                        </svg>
                        <span class="text-gray-700">Data Backup</span>
                    </div>
                    <div class="flex items-center p-4 bg-green-50 rounded-lg">
                        <svg class="w-6 h-6 text-green-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                        <span class="text-gray-700">Regular Updates</span>
                    </div>
                    <div class="flex items-center p-4 bg-green-50 rounded-lg">
                        <svg class="w-6 h-6 text-green-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        </svg>
                        <span class="text-gray-700">24/7 Monitoring</span>
                    </div>
                </div>
            </div>

            <!-- User Rights Section -->
            <div id="rights" class="bg-white rounded-xl shadow-lg p-8 mb-8">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-6">
                    <span class="flex items-center">
                        <svg class="w-8 h-8 text-green-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                        Your Rights
                    </span>
                </h2>
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="space-y-4">
                        <div class="bg-gradient-to-r from-green-100 to-emerald-100 p-4 rounded-lg">
                            <h3 class="font-semibold text-gray-800 mb-2">Access Your Data</h3>
                            <p class="text-gray-600 text-sm">Request a copy of your stored information</p>
                        </div>
                        <div class="bg-gradient-to-r from-green-100 to-emerald-100 p-4 rounded-lg">
                            <h3 class="font-semibold text-gray-800 mb-2">Correct Information</h3>
                            <p class="text-gray-600 text-sm">Update or fix incorrect data</p>
                        </div>
                        <div class="bg-gradient-to-r from-green-100 to-emerald-100 p-4 rounded-lg">
                            <h3 class="font-semibold text-gray-800 mb-2">Delete Account</h3>
                            <p class="text-gray-600 text-sm">Request deletion of your personal data</p>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <div class="bg-gradient-to-r from-green-100 to-emerald-100 p-4 rounded-lg">
                            <h3 class="font-semibold text-gray-800 mb-2">Data Portability</h3>
                            <p class="text-gray-600 text-sm">Transfer your data to another service</p>
                        </div>
                        <div class="bg-gradient-to-r from-green-100 to-emerald-100 p-4 rounded-lg">
                            <h3 class="font-semibold text-gray-800 mb-2">Restrict Processing</h3>
                            <p class="text-gray-600 text-sm">Limit how we use your information</p>
                        </div>
                        <div class="bg-gradient-to-r from-green-100 to-emerald-100 p-4 rounded-lg">
                            <h3 class="font-semibold text-gray-800 mb-2">Withdraw Consent</h3>
                            <p class="text-gray-600 text-sm">Opt out of marketing communications</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Information -->
            <div id="contact" class="bg-gradient-to-r from-green-600 to-emerald-700 rounded-xl shadow-lg p-8 text-white">
                <h2 class="text-2xl md:text-3xl font-bold mb-6">
                    <span class="flex items-center">
                        <svg class="w-8 h-8 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        Contact Us
                    </span>
                </h2>
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <h3 class="text-xl font-semibold mb-4 text-green-100">Privacy Questions:</h3>
                        <div class="space-y-3">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-3 text-green-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                <span>privacy@ethnicart.com</span>
                            </div>
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-3 text-green-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                                <span>+880-1XXX-XXXXXX</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-4 text-green-100">Address:</h3>
                        <div class="flex items-start">
                            <svg class="w-5 h-5 mr-3 mt-1 text-green-200 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <span>
                                EthniCart Limited<br>
                                Gulshan-2, Dhaka-1212<br>
                                Bangladesh
                            </span>
                        </div>
                    </div>
                </div>
                
                <div class="mt-8 pt-6 border-t border-green-500">
                    <p class="text-green-100 text-center">
                        We respond to all privacy inquiries within 30 days and are committed to protecting your personal information.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});
</script>
@endsection