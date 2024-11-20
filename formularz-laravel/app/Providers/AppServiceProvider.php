<?php

namespace App\Providers;

use App\View\Components\Buttons\SubmitInput;
use App\View\Components\Input\CakeOrderForm;
use App\View\Components\Input\ContactForm;
use App\View\Components\Input\DateInput;
use App\View\Components\Input\EmailInput;
use App\View\Components\Input\SelectInput;
use App\View\Components\Input\TextareaInput;
use App\View\Components\Input\TextInput;
use App\View\Layouts\Footer;
use App\View\Layouts\Header;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        Blade::component('header', Header::class);
        Blade::component('footer', Footer::class);
        Blade::component('text-input', TextInput::class);
        Blade::component('textarea-input', TextareaInput::class);
        Blade::component('select-input', SelectInput::class);
        Blade::component('date-input', DateInput::class);
        Blade::component('email-input', EmailInput::class);
        Blade::component('submit-input', SubmitInput::class);
        Blade::component('contact-form', ContactForm::class);
        Blade::component('cake-order-form', CakeOrderForm::class);

    }
}
