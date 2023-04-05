<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\SiteContent;
use Illuminate\Http\Request;

class SettingController extends Controller
{

    public function __construct()
    {
        $this->middleware('permission:crud-setting')->only('index', 'general', 'smtp', 'contact');
        $this->middleware('permission:service-setting')->only('service');
        $this->middleware('permission:blog-setting')->only('blog');
        $this->middleware('permission:product-setting')->only('product');
        $this->middleware('permission:team-setting')->only('team');
        $this->middleware('permission:academy-setting')->only('academy');
    }
    public function index()
    {
        $setting = SiteContent::first();
        return view('back.setting.index', compact('setting'));
    }
    public function general(Request $request)
    {

        $data = $request->validate([
            'site_name' => ['required', 'string', 'min:3', 'max:255'],
            'site_description' => ['required', 'string', 'min:3', 'max:255'],
            'footer_text' => ['required', 'string', 'min:5', 'max:255'],
            'site_favicon' => ['nullable'],
            'site_logo' => ['nullable'],
        ]);

        if($request->has('site_favicon')){
            $data['site_favicon'] = $request->file('site_favicon')->store('images/site/', 'public');
        }
        if($request->has('site_logo')){

            $data['site_logo'] = $request->file('site_logo')->store('images/site/', 'public');
        }

        $setting = SiteContent::first();

        $setting->update($data);

        return back()->with('status', 'General Setting has been updated');

    }
    public function contact(Request $request)
    {
        $data = $request->validate([
            'contact_heading' => ['required', 'string', 'min:3', 'max:255'],
            'contact_description' => ['required', 'string', 'min:3', 'max:255'],
            'contact_no' => ['required', 'string', 'min:3', 'max:255'],
            'contact_email' => ['required', 'string', 'min:3', 'max:255'],
            'contact_address' => ['required', 'string', 'min:3', 'max:255'],
        ]);

        $setting = SiteContent::first();
        $setting->update($data);
        return back()->with('status', 'Contact Setting has been updated');

    }
    public function smtp(Request $request)
    {
        $data = $request->validate([
            'MAIL_MAILER'=> ['required', 'string', 'min:1', 'max:255'],
            'MAIL_HOST'=> ['required', 'string', 'min:1', 'max:255'],
            'MAIL_PORT'=> ['required', 'string', 'min:1', 'max:255'],
            'MAIL_USERNAME'=> ['required', 'string', 'min:1', 'max:255'],
            'MAIL_PASSWORD'=> ['required', 'string', 'min:1', 'max:255'],
            'MAIL_ENCRYPTION'=> ['required', 'string', 'min:1', 'max:255'],
        ]);
        $setting = SiteContent::first();
        update_env('MAIL_MAILER', $request->MAIL_MAILER);
    }
    public function service(Request $request)
    {


        $data = $request->validate([
            'service_title'=> ['nullable'],
            'service_description'=> ['nullable'],
            'service_btn_text'=> ['required', 'string', 'min:1', 'max:255'],
            'service_enable'=> ['nullable'],
        ]);

        $data['service_enable'] = false;

        if($request->has('service_enable')){
            $data['service_enable'] = true;

        }

        $setting = SiteContent::first();
        $setting->update($data);
        return back()->with('status', 'Settings has been updated');

    }

    public function blog(Request $request){

        $data = $request->validate([
            'blog_title'=> ['required', 'string', 'min:1', 'max:255'],
            'blog_btn_text'=> ['nullable', 'string', 'min:1', 'max:255'],
            'blog_enable'=> ['nullable'],
        ]);

        $data['blog_enable'] = false;

        if($request->has('blog_enable')){
            $data['blog_enable'] = true;

        }

        $setting = SiteContent::first();
        $setting->update($data);
        return back()->with('status', 'Setting has been updated');

    }

    public function product(Request $request)
    {


        $data = $request->validate([
            'product_title'=> ['required', 'string', 'min:1', 'max:255'],
            'product_btn_text'=> ['nullable', 'string', 'min:1', 'max:255'],
            'product_enable'=> ['nullable'],
        ]);

        $data['product_enable'] = false;

        if($request->has('product_enable')){
            $data['product_enable'] = true;

        }


        $setting = SiteContent::first();
        $setting->update($data);
        return back()->with('status', 'Setting has been updated');

    }

    public function team(Request $request)
    {


        $data = $request->validate([
            'team_title'=> ['required', 'string', 'min:1', 'max:255'],
            'team_btn_text'=> ['nullable', 'string', 'min:1', 'max:255'],
            'team_enable'=> ['nullable'],
        ]);

        $data['team_enable'] = false;

        if($request->has('team_enable')){
            $data['team_enable'] = true;

        }



        $setting = SiteContent::first();
        $setting->update($data);
        return back()->with('status', 'Setting has been updated');

    }

    public function academy(Request $request)
    {

        $data = $request->validate([
            'academy_mail'=> ['nullable'],
            'academy_no'=> ['nullable'],
            'about_content' => ['required']
        ]);

        $setting = SiteContent::first();
        $setting->update($data);
        return back()->with('status', 'Setting has been updated');

    }
}
