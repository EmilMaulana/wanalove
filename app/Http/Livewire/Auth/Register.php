<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class Register extends Component
{
    public $name = '';
    public $email = '';
    public $password = '';
    public $password_confirmation = '';
    public $errorMessage = '';

    private $apiBase = "https://dev-api.siakad.wanara.digital/api";

    public function register()
    {
        $this->validate([
            'name' => 'required|string|min:3',
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed',
        ]);

        $response = Http::post("{$this->apiBase}/register", [
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
            'password_confirmation' => $this->password_confirmation,
        ]);

        $data = $response->json();

        if (isset($data['token'])) {
            Session::put('auth_token', $data['token']);
            return redirect()->route('dashboard');
        }

        if (isset($data['errors']) && is_array($data['errors'])) {
            foreach ($data['errors'] as $field => $messages) {
                $this->addError($field, implode(', ', $messages));
            }
        } else {
            $this->errorMessage = $data['message'] ?? 'Registrasi gagal';
        }
    }

    public function render()
    {
        return view('livewire.auth.register')
            ->layout('layouts.app');
    }
}
