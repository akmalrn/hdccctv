<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Configuration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ConfigurationController extends Controller
{
    public function index()
    {
        $configuration = Configuration::first();
        return view('backend.configuration.index', compact('configuration'));
    }

    public function storeOrUpdate(Request $request)
    {
        $request->validate([
            'path' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:8192',
            'path_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:8192',
            'website_name' => 'nullable|string',
            'title' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
            'meta_descriptions' => 'nullable|string',
            'footer' => 'nullable|string',
            'path_building' => 'nullable',
            'path_building_2' => 'nullable',
            'title_building' => 'nullable',
            'overview_building' => 'nullable',
            'description' => 'nullable',
            'areas_building' => 'nullable',
            'parkings_building' => 'nullable',
            'units_building' => 'nullable',
            'bedrooms_building' => 'nullable',
            'features_building' => 'nullable',
            'youtube_superiotiry' => 'nullable',
        ]);

        $data = [
            'website_name' => $request->input('website_name'),
            'title' => $request->input('title'),
            'meta_keywords' => $request->input('meta_keywords'),
            'meta_descriptions' => $request->input('meta_descriptions'),
            'footer' => $request->input('footer'),
            'title_building' => $request->input('title_building'),
            'overview_building' => $request->input('overview_building'),
            'description' => $request->input('description'),
            'areas_building' => $request->input('areas_building'),
            'parkings_building' => $request->input('parkings_building'),
            'units_building' => $request->input('units_building'),
            'bedrooms_building' => $request->input('bedrooms_building'),
            'features_building' => $request->input('features_building'),
            'youtube_superiotiry' => $request->input('youtube_superiotiry'),
        ];

        if ($request->hasFile('path')) {
            $oldPath = Configuration::find(1)->path ?? null;
            if ($oldPath && File::exists(($oldPath))) {
                File::delete(($oldPath));
            }
            $image = $request->file('path');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $destinationPath = ('uploads/configuration');
            $image->move($destinationPath, $imageName);
            $data['path'] = 'uploads/configuration/' . $imageName;
        }

        if ($request->hasFile('path_logo')) {
            $oldPathLogo = Configuration::find(1)->path_logo ?? null;
            if ($oldPathLogo && File::exists(($oldPathLogo))) {
                File::delete(($oldPathLogo));
            }
            $logo = $request->file('path_logo');
            $logoName = time() . '_' . $logo->getClientOriginalName();
            $destinationPath = ('uploads/configuration');
            $logo->move($destinationPath, $logoName);
            $data['path_logo'] = 'uploads/configuration/' . $logoName;
        }

        if ($request->hasFile('path_building')) {
            $oldPathLogo = Configuration::find(1)->path_building ?? null;
            if ($oldPathLogo && File::exists(($oldPathLogo))) {
                File::delete(($oldPathLogo));
            }
            $logo = $request->file('path_building');
            $logoName = time() . '_' . $logo->getClientOriginalName();
            $destinationPath = ('uploads/configuration');
            $logo->move($destinationPath, $logoName);
            $data['path_building'] = 'uploads/configuration/' . $logoName;
        }

        if ($request->hasFile('path_building_2')) {
            $oldPathLogo = Configuration::find(1)->path_building_2 ?? null;
            if ($oldPathLogo && File::exists(($oldPathLogo))) {
                File::delete(($oldPathLogo));
            }
            $logo = $request->file('path_building_2');
            $logoName = time() . '_' . $logo->getClientOriginalName();
            $destinationPath = ('uploads/configuration');
            $logo->move($destinationPath, $logoName);
            $data['path_building_2'] = 'uploads/configuration/' . $logoName;
        }

        Configuration::updateOrCreate(
            ['id' => 1],
            $data
        );

        return redirect()->back()->with('success', 'Configuration has been successfully saved or updated.');
    }
}
