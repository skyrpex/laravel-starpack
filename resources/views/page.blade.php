@inject('starpack', 'Skyrpex\Starpack\Starpack')
@inject('config', 'Illuminate\Contracts\Config\Repository')
@inject('url', 'Illuminate\Contracts\Routing\UrlGenerator')

<!DOCTYPE html>
<html lang="{{ $config['app.locale'] }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ $config['app.name'] }}</title>

  @foreach ($starpack->assets('app.css') as $href)
    <link rel="stylesheet" href="{{ $href }}">
  @endforeach

  <script>
    var STARPACK = [
      {!! json_encode([
        'BASE_URL' => $url->to('/'),
        'WEBPACK_PUBLIC_PATH' => $url->to('assets'),
        'USER' => Request::user(),
      ]) !!}
    ];
  </script>
</head>
<body>
  @foreach ($starpack->assets('app.js') as $src)
    <script src="{{ $src }}" crossorigin="anonymous"></script>
  @endforeach
</body>
</html>
