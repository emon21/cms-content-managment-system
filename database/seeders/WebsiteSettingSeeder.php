<?php

namespace Database\Seeders;

use App\Models\WebsiteSetting;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class WebsiteSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $website = new WebsiteSetting();

        # Site Name

        $website->site_name = "Your Company Name";
        $website->site_title = "Your Company Website";

        // Site Logo

        $website->site_logo = "logo.png";
        $website->site_WhiteLogo = "white-logo.png";
        $website->site_favicon = "favicon.png";

        //Site Info
        $website->site_email = "info@mail.com";
        $website->site_phone = "0123456789";
        $website->site_address = "123 Main St, Anytown USA";
        $website->site_description = "This is the description of your website.";
        $website->site_map = "demo map";
        $website->site_copyright = "Copyright &copy; 2023 Your Company Name";

        // Theme Color
        $website->primary_color = "#007BFF";
        $website->secondary_color = "#FFFFFF";
        $website->title_color = "#333333";
        $website->text_color = "#ee4500";
        $website->body_color = "#ff00ff";
        $website->primary_font = "Arial, sans-serif";
        $website->secondary_font = "Arial, sans-serif";
        $website->tertiary_font = "tttt";

        // Seo Tag
        $website->meta_title = " meta title";
        $website->meta_description = "ttweyy";
        $website->meta_keywords = "yeyryet y ";

        $website->meta_author = "yyyy";

        // Social Media Link
        $website->site_facebook = "fb";
        $website->site_twitter = "tw";
        $website->site_instagram = "in";
        $website->site_linkedin = "ld";
        $website->site_youtube = "yu";

        $website->save();
    }
}
