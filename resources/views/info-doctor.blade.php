<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infor Doctor</title>
    @vite('resources/js/app.js')
</head>
<body>
    <div id="app">
        <info-doctor :employee-id={{ $employeeID }} ></info-doctor>
    </div>
    {{-- <script src="{{ mix('js/app.js') }}"></script> --}}
</body>
</html>