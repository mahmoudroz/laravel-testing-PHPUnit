<html>
    <head>

    </head>
    <body>
        <h1>لا حول ولا قوة الا بالله العلي العظيم</h1>
        <table>
            <tr>
                <th>@lang('site.name')</th>
            </tr>
            @foreach($rows as $row)
            <tr>
                <td>{{$row->name}}</td>
            </tr>
            @endforeach

        </table>
    </body>
</html>
