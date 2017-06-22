@inject('starpack', 'Skyrpex\Starpack\Starpack')
@inject('auth', 'Illuminate\Contracts\Auth\Guard')
@inject('config', 'Illuminate\Contracts\Config\Repository')

<!DOCTYPE html>
<html lang="{{ $config['app.locale'] }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ $config['app.name'] }}</title>

  {{-- Include the app stylesheets --}}
  @foreach ($starpack->assets('app.css') as $href)
    <link rel="stylesheet" href="{{ $href }}">
  @endforeach

  {{-- Pass required data to the scripts --}}
  {!! $starpack->addMandatoryScriptGlobals() !!}

  {{-- Pass custom data to the scripts --}}
  {{!! $starpack->addScriptGlobals([
    'USER' => $auth->user(),
    'APP_DEBUG' => $config['app.debug'],
  ]) !!}}
</head>
<body>
  {{-- Include the app scripts --}}
  @foreach ($starpack->assets('app.js') as $src)
    <script src="{{ $src }}" crossorigin="anonymous"></script>
  @endforeach
</body>
</html>
