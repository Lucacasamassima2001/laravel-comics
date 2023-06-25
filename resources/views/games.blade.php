<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Games</title>
    @vite('resources/js/app.js')

</head>
<body>
    @include('partials/header') 

    <main>
        <h1>Here we'll show all our newest Games.</h1>
    </main>

    @include('partials/footer')
    
</body>
</html>


<style lang="scss" scoped>
    main{
        height: 600px;
        padding: 2em;
    }

    h1{
        color: white;
    }



</style>