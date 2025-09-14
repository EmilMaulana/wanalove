<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class Login extends Component
{
    public $email = '';
    public $password = '';
    public $errorMessage = '';

    private $apiBase = "https://dev-api.siakad.wanara.digital/api";

    public function login()
    {
        $response = Http::post("{$this->apiBase}/login", [
            'email' => $this->email,
            'password' => $this->password,
        ]);

        $data = $response->json();

        if (isset($data['token'])) {
            Session::put('auth_token', $data['token']);

            // Ubah redirect ke index.blade.php
            return redirect()->route('home'); 
        } else {
            $this->errorMessage = $data['message'] ?? 'Login gagal';
        }
    }

    public function render()
    {
        return view('livewire.auth.login')
            ->layout('layouts.app'); // tetap pakai layout app
    }
}
