<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('website_settings', function (Blueprint $table) {
            $table->id();
            $table->string('site_name');
            $table->string('site_title');
            $table->string('site_logo');
            $table->string('site_WhiteLogo');
            $table->string('site_favicon');
            $table->string('site_email');
            $table->string('site_phone');
            $table->string('site_address');
            $table->string('site_description');
            $table->string('site_map');
            $table->string('site_copyright');

            # Color Settings
            $table->string('primary_color');
            $table->string('secondary_color');
            $table->string('title_color');
            $table->string('text_color');
            $table->string('body_color');


            # Font Settings
            $table->string('primary_font');
            $table->string('secondary_font');
            $table->string('tertiary_font');

            # Theme Settings
            
            # SEO Settings
            $table->string('meta_title');
            $table->string('meta_description');
            $table->string('meta_keywords');
            $table->string('meta_author'); 
            
            # Social Link
            $table->string('site_facebook');
            $table->string('site_twitter');
            $table->string('site_instagram');
            $table->string('site_linkedin');
            $table->string('site_youtube'); 

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('website_settings');
    }
};
