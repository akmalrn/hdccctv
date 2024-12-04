<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\CategoryService;
use App\Models\admin\Service;
use App\Models\admin\TypeService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    public function index(Request $request)
    {
        $services = Service::all();
        return view('backend.service.index', compact('services'));
    }

    public function create()
    {
        return view('backend.service.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'path' => 'required|image|mimes:jpeg,png,jpg,gif,webp,svg',
            'title' => 'required|string|max:255',
            'overview' => 'required|string',
            'description' => 'required|string',
        ]);

        $imageName = null;

        if ($request->hasFile('path')) {
            $file = $request->file('path');
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move(('uploads/sliders'), $imageName);
        }

        Service::create([
            'title' => $request->title,
            'overview' => $request->overview,
            'description' => $request->description,
            'path' => $imageName,
        ]);

        return redirect()->route('services.index')->with('success', 'Service added successfully.');
    }

    public function show(Service $service)
    {
        return view('services.show', compact('service'));
    }

    public function edit(Service $service)
    {
        $typeservices = TypeService::all();
        $categoryservice = CategoryService::all();
        return view('backend.service.edit', compact('service', 'categoryservice', 'typeservices'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'path' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp,svg',
            'title' => 'required|string|max:255',
            'overview' => 'required|string',
            'description' => 'required|string',
        ]);

        $service = Service::findOrFail($id);

        $imageName = $service->path;

        if ($request->hasFile('path')) {
            if (file_exists(public_path('uploads/sliders/' . $service->path))) {
                unlink(public_path('uploads/sliders/' . $service->path));
            }

            $file = $request->file('path');
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/sliders'), $imageName);
        }

        $service->update([
            'title' => $request->title,
            'overview' => $request->overview,
            'description' => $request->description,
            'path' => $imageName,
        ]);

        return redirect()->route('services.index')->with('success', 'Service updated successfully.');
    }

    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();

        return redirect()->route('services.index')->with('success', 'Service deleted successfully.');
    }
}
