<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    // 1. HALAMAN UTAMA ADMIN / LOGIN FORM
    public function admin(Request $request)
    {
        if (! session('project_admin')) {
            return view('admin.projects');
        }

        return view('admin.projects', [
            'projects' => Project::orderBy('sort_order')->orderBy('id')->get(),
        ]);
    }

    // 2. PROCESS LOGIN
    public function login(Request $request)
    {
        if (! $this->authenticate($request)) {
            return back()->withErrors(['password' => 'Password admin salah.'])->withInput();
        }

        session(['project_admin' => true]);
        return redirect()->route('projects.admin');
    }

    // 3. TAMBAH PROJECT
    public function store(Request $request)
    {
        $data = $this->validateProject($request);
        Project::create($data);

        return redirect()->route('projects.admin')->with('status', 'Project berhasil ditambahkan.');
    }

    // 4. UPDATE PROJECT
    public function update(Request $request, $id)
    {
        $data = $this->validateProject($request);
        $project = Project::findOrFail($id);
        $project->update($data);

        return redirect()->route('projects.admin')->with('status', 'Project berhasil diperbarui.');
    }

    // 5. DELETE PROJECT
    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();

        return redirect()->route('projects.admin')->with('status', 'Project berhasil dihapus.');
    }

    // 6. LOGOUT
    public function logout()
    {
        session()->forget('project_admin');
        return redirect('/')->with('status', 'Berhasil keluar.');
    }

    // -------------------------------------------------------------
    // PRIVATE HELPER METHODS
    // -------------------------------------------------------------

    /**
     * Method Verifikasi Password Admin
     */
    private function authenticate(Request $request): bool
    {
        $inputPassword = $request->input('password');
        
        $adminPassword = config('PROJECT_ADMIN_PASSWORD', env('PROJECT_ADMIN_PASSWORD'));

        return $inputPassword === $adminPassword;
    }

    /**
     * Helper Validasi Data Project
     */
    private function validateProject(Request $request): array
    {
        $data = $request->validate([
            'title'        => 'required|string|max:255',
            'category'     => 'nullable|string|max:255',
            'banner_image' => 'nullable|string|max:255',
            'description'  => 'nullable|string',
            'features'     => 'nullable|string',
            'tags'         => 'nullable|string',
            'link'         => 'nullable|string|max:255',
            'sort_order'   => 'nullable|integer|min:0',
        ]);

        $data['features']   = array_filter(array_map('trim', explode("\n", (string) $request->input('features', ''))));
        $data['tags']       = array_filter(array_map('trim', explode(',', (string) $request->input('tags', ''))));
        $data['sort_order'] = (int) ($data['sort_order'] ?? 0);

        return $data;
    }
}