<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Http;

class Dashboard extends Component
{
    public $userData = [];

    public function mount()
    {
        $token = Session::get('auth_token');

        if (!$token) {
            return redirect()->route('login');
        }

        $response = Http::withHeaders([
            'Authorization' => "Bearer $token"
        ])->get('https://dev-api.siakad.wanara.digital/api/user');

        $this->userData = $response->json();
    }

    public function logout()
    {
        $token = Session::get('auth_token');

        if ($token) {
            Http::withHeaders([
                'Authorization' => "Bearer $token"
            ])->post('https://dev-api.siakad.wanara.digital/api/logout');
        }

        Session::forget('auth_token');
        return redirect()->route('login');
    }

    public function render()
    {
        return view('livewire.auth.dashboard')
            ->layout('layouts.app');
    }
}
