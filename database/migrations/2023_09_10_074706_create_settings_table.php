<?php

use App\Models\setting;
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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('label');
            $table->string('value')->nullable();
            $table->string('type');
            $table->timestamps();
        });

        setting::create([
            'key'=>'_site_name',
            'label'=>'judul situs',
            'value'=>'website sederhana',
            'type'=>'text',
        ]);
        setting::create([
            'key'=>'_location',
            'label'=>'Alamat',
            'value'=>'Setu, Kabupaten bekasi, Indonesia',
            'type'=>'text',
        ]);
        setting::create([
            'key'=>'_instagram',
            'label'=>'Instagram',
            'value'=>'https://www.instagram.com/',
            'type'=>'text',
        ]);
        setting::create([
            'key'=>'_linkedin',
            'label'=>'Linkedin',
            'value'=>'https://twitter.com',
            'type'=>'text',
        ]);
        setting::create([
            'key'=>'_github',
            'label'=>'Github',
            'value'=>'https://www.facebook.com',
            'type'=>'text',
        ]);
        setting::create([
            'key'=>'_whatsapp',
            'label'=>'Whatsapp',
            'value'=>'https://wa.me/+6289598767232',
            'type'=>'text',
        ]);
        setting::create([
            'key'=>'_site_description',
            'label'=>'Site Description',
            'value'=>'Website sederhana, dengan admin filament dan framework laravel',
            'type'=>'text',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
