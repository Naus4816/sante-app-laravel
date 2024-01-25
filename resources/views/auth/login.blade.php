<x-guest-layout>
    <div class="container ">
        <div class="login-container">
          
            <div class="login-info">
                <h2>Bienvenue sur Santé-App</h2>
                <p>Rejoignez-nous et découvrez le moyen premium de vérifier votre état de santé, de gérer vos rendez-vous et de rester au courant de vos besoins médicaux en toute simplicité.</p>
                <p>Vous n'avez pas de compte ? <a href="{{ route('register') }}" style="color: #3490dc;">Inscrivez-vous maintenant</a></p>
            </div>
        
            <div class="login-form">
                <div class="card">
                    <div class="card-header text-center">
                        <h2 class="my-0">Connectez-vous à votre compte</h2>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <x-label for="email" :value="__('Email')" />
                                <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
                            </div>
                            <div class="form-group">
                                <x-label for="password" :value="__('Mot de passe')" />
                                <x-input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
                            </div>
                            <div class="form-group">
                                <label for="remember_me" class="flex items-center">
                                    <input id="remember_me" type="checkbox" class="form-checkbox" name="remember">
                                    <span class="ml-2">{{ __('Se souvenir de moi') }}</span>
                                </label>
                            </div>
                            <div class="form-group">
                                @if (Route::has('password.request'))
                                    <a class="text-sm" href="{{ route('password.request') }}" style="color: #3490dc;">
                                        {{ __('Mot de passe oublié ?') }}
                                    </a>
                                @endif
                            </div>
                            <div class="form-group">
                                <x-button class="btn btn-primary btn-block">
                                    {{ __('Se connecter') }}
                                </x-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #fff;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container {
            max-width: 1200px;
            
        }
        .card {
            border: none;
            border-radius: 20px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            overflow: hidden;
            transition: all 0.3s ease;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0,0,0,0.2);
        }
        .card-header {
            background: linear-gradient(135deg, #6AC8FF 0%, #3A8DFF 100%);
            color: #fff;
            padding: 20px;
        }
        .card-body {
            background-color: #fff;
            padding: 40px 20px;
        }
        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        .login-info {
            color: #333;
            margin-right: 50px;
            flex: 1;
        }
        .login-info h2 {
            font-size: 2rem;
            font-weight: 400;
            margin-bottom: 20px;
        }
        .login-info p {
            font-size: 1rem;
            line-height: 1.6;
            margin-bottom: 20px;
        }
        .login-form {
            flex: 1;
        }
        .form-control {
            border-radius: 10px;
            margin-bottom: 20px;
            padding: 25px 15px;
            border: 1px solid #ced4da;
        }
        .btn-primary {
            background-color: #3490dc;
            border: none;
            padding: 15px 30px;
            border-radius: 20px;
            font-size: 1rem;
        }
        .btn-primary:hover {
            background-color: #2779bd;
        }
        .text-sm {
            font-size: 0.875rem;
        }
    </style>
</x-guest-layout>