<?php

use Sendportal\Base\Models\EmailServiceType;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMailgunEmailServiceType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        EmailServiceType::unguard();

        EmailServiceType::create([
            'id' => EmailServiceType::MAILGUN,
            'name' => 'Mailgun'
        ]);
    }
}