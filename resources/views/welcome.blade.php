<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        <div id="app">
            hihello!!!
            <example-component>

            </example-component>

        </div>
    </body>

    <script src="{{ mix('/js/app.js') }}"></script>
</html>
