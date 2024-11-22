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

        $website->site_name = "CMS";
        $website->site_title = "CMS For Website";

        // Site Logo

        $website->site_logo = "logo.png";
        $website->site_WhiteLogo = "white-logo.png";
        $website->site_favicon = "favicon.png";

        //Site Info
        $website->site_email = "info@mail.com";
        $website->site_phone = "0123456789";
        $website->site_address = "123 Main St, Anytown USA";
        $website->site_description = "Amet minim mollit non deserunt ullamco sit aliqua dolor amet.
        officia consequat enim velit mollit.";

        $website->site_map = "https://www.google.com/maps/place/Bangladesh/@23.4260355,89.0699506,7z/data=!4m6!3m5!1s0x30adaaed80e18ba7:0xf2d28e0c4e1fc6b!8m2!3d23.684994!4d90.356331!16zL20vMDE2MmI?entry=ttu&g_ep=EgoyMDI0MTExOC4wIKXMDSoJLDEwMjExMjM0SAFQAw%3D%3D";

        $website->site_copyright = "Copyright &copy;" . date('Y') . "Your Company Name";

        // Theme Color
        $website->primary_color = "#007BFF";
        $website->secondary_color = "#FFFFFF";
        $website->title_color = "#333333";
        $website->text_color = "#ee4500";
        $website->body_color = "#ff00ff";
        $website->primary_font = "Arial, sans-serif";
        $website->secondary_font = "Arial, sans-serif";

        // Seo Tag
        $website->meta_title = " Build Your Website With Dynamic Modules";
        $website->meta_keywords = "Page Builder  Unleash creativity   Dynamic Modules";
        $website->meta_description = "Empower your online presence with dynamic modules and an intuitive page builder. Unleash creativity to design your unique website effortlessly. Start now!";

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
