<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::table('sellers', function (Blueprint $table) {
        if (!Schema::hasColumn('sellers', 'phone')) {
            $table->string('phone')->unique()->nullable()->after('email');
        }
        if (!Schema::hasColumn('sellers', 'seller_image')) {
            $table->string('seller_image')->nullable()->after('phone');
        }
        if (!Schema::hasColumn('sellers', 'nid')) {
            $table->string('nid')->unique()->nullable()->after('password');
        }
        if (!Schema::hasColumn('sellers', 'nid_file')) {
            $table->string('nid_file')->nullable()->after('nid');
        }
        if (!Schema::hasColumn('sellers', 'production_area')) {
            $table->string('production_area')->nullable()->after('nid_file');
        }
        if (!Schema::hasColumn('sellers', 'business_type')) {
            $table->string('business_type')->nullable()->after('production_area');
        }
        if (!Schema::hasColumn('sellers', 'product_description')) {
            $table->text('product_description')->nullable()->after('business_type');
        }
        if (!Schema::hasColumn('sellers', 'proof_file')) {
            $table->string('proof_file')->nullable()->after('product_description');
        }
        if (!Schema::hasColumn('sellers', 'bank_account')) {
            $table->string('bank_account')->nullable()->after('proof_file');
        }
        if (!Schema::hasColumn('sellers', 'bank_name')) {
            $table->string('bank_name')->nullable()->after('bank_account');
        }
        if (!Schema::hasColumn('sellers', 'mobile_wallet')) {
            $table->string('mobile_wallet')->nullable()->after('bank_name');
        }
    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
{
    Schema::table('sellers', function (Blueprint $table) {
        $table->dropColumn([
            'phone',
            'seller_image',
            'nid',
            'nid_file',
            'production_area',
            'business_type',
            'product_description',
            'proof_file',
            'bank_account',
            'bank_name',
            'mobile_wallet'
        ]);
    });
}

};
