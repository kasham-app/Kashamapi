<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }} - Authorization</title>

    <!-- Styles -->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            border: none;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 400px;
            padding: 20px;
            border-radius: 5px;
            background-color: #fff;
        }

        .card-header {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .intro-text {
            font-size: 1rem;
            margin-bottom: 20px;
            color: #444;
        }

        .scopes ul {
            padding-left: 20px;
            list-style-type: disc;
        }

        .buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 25px;
        }

        .btn-approve, .btn-cancel {
            padding: 10px 20px;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            text-transform: uppercase;
            cursor: pointer;
        }

        .btn-approve {
            background-color: #4285F4;
            color: white;
        }

        .btn-cancel {
            background-color: #DB4437;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                Authorization Request
            </div>
            <div class="card-body">
                <p class="intro-text"><strong>{{ $client->name }}</strong> is requesting permission to access your account.</p>

                @if (count($scopes) > 0)
                    <div class="scopes">
                        <p><strong>This application will be able to:</strong></p>
                        <ul>
                            @foreach ($scopes as $scope)
                                <li>{{ $scope->description }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="buttons">
                    <form method="post" action="{{ route('passport.authorizations.approve') }}">
                        @csrf
                        <!-- Hidden fields here -->

                        <button type="submit" class="btn btn-approve">Allow</button>
                    </form>

                    <form method="post" action="{{ route('passport.authorizations.deny') }}">
                        @csrf
                        @method('DELETE')
                        <!-- Hidden fields here -->

                        <button class="btn btn-cancel">Deny</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
