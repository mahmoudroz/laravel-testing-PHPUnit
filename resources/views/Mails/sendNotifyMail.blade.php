<html lang="{{app()->getLocale()}}">
  <head>
      <title>لا حول ولا قوة الا بالله العلي العظيم</title>
  </head>
  <body>
        @isset($data['title'])
            <h2>
                {{$data['title']}}
            </h2>
        @endisset
        <h2>
        <span>
            {{$data['msg']}}
        </span>

  </body>
</html>
