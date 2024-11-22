<?php

namespace Database\Seeders;

use App\Models\MailSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MailSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $mailSetting = new MailSetting();

        $mailSetting->mail_driver = "smtp";
        $mailSetting->mail_host = "Smtp-relay.sendinblue.com";
        $mailSetting->mail_port = 587;
        $mailSetting->mail_encryption = "null";
        $mailSetting->mail_username = "omprakash.jha@himanshusofttech.com";
        $mailSetting->mail_password = "GNmf3zKrOBHtdJ17";

        $mailSetting->mail_form_name = "PixelCMS";
        $mailSetting->mail_form_address = "admin@pixelcms.com";
        $mailSetting->mail_reply_email_address = "admin@pixelcms.com";

        $mailSetting->save();

    }
}
