<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SectionController extends Controller
{
    public function index () {
        $section = Section::all();
        return view('backoffice.pages.sections.section', compact('section'));
    }

    public function edit (Section $id) {
        $section = $id;
        return view('backoffice.pages.sections.sectionEdit', compact('section'));
    }

    public function update (Request $request, Section $id) {
        $section = $id;
        $request->validate([
            "video"=> "required",
            "logo" => "required", 
            "sect1_title" => "required",
            "sect1_subtitle" => "required",
            "sect1_bg" => "required",
            "sect2_title" => "required",
            "sect2_subtitle" => "required",
            "sect2_bg" => "required",
            "sect3_title" => "required",
            "sect3_subtitle" => "required",
            "sect3_bg" => "required",
            "sect4_title" => "required",
            "sect4_subtitle" => "required",
            "sect4_bg" => "required"
        ]);
        
        Storage::disk('public')->delete('img/'. $section->logo);
        Storage::disk('public')->delete('img/'. $section->sect1_bg);
        Storage::disk('public')->delete('img/'. $section->sect2_bg);
        Storage::disk('public')->delete('img/'. $section->sect3_bg);
        Storage::disk('public')->delete('img/'. $section->sect4_bg);
        

        $section->video = $request->video;
        $section->logo = $request->file('logo')->hashName();
        
        $section->sect1_title = $request->sect1_title;
        $section->sect1_subtitle = $request->sect1_subtitle;
        $section->sect1_bg = $request->file('sect1_bg')->hashName();
        
        $section->sect2_title = $request->sect2_title;
        $section->sect2_subtitle = $request->sect2_subtitle;
        $section->sect2_bg = $request->file('sect2_bg')->hashName();
        
        $section->sect3_title = $request->sect3_title;
        $section->sect3_subtitle = $request->sect3_subtitle;
        $section->sect3_bg = $request->file('sect3_bg')->hashName();

        $section->sect4_title = $request->sect4_title;
        $section->sect4_subtitle = $request->sect4_subtitle;
        $section->sect4_bg = $request->file('sect4_bg')->hashName();

        $request->file('logo')->storePublicly('img', 'public');
        $request->file('sect1_bg')->storePublicly('img', 'public');
        $request->file('sect2_bg')->storePublicly('img', 'public');
        $request->file('sect3_bg')->storePublicly('img', 'public');
        $request->file('sect4_bg')->storePublicly('img', 'public');

        $section->save();

        return redirect()->route('section')->with('message', "Style des sections modifié avec succès");

    }



}
