<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Review Mail</title>

    <style>
        .bg-custom{
            background-color: rgb(33, 37, 41);
        }

        .title-custom{
            text-align: center;
            color: rgb(254, 209, 54);
        }

        .flex-custom{
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .message-custom{
            width: 300px;
            text-align: center;
            border: 2px solid rgb(254, 209, 54);
            color: white;
        }
    </style>
</head>
<body class="bg-custom">
    
    {{-- INIZIO HEADER --}}
    <header class="title-custom">
        <h1>Time counters</h1>
        <h2>Thanks for your review {{$name}}.</h2>
        <h3>Your opinion is very important to us, thank you for your support!</h3>
    </header>
    {{-- FINE HEADER --}}

    {{-- INIZIO MAIN --}}
    <main>
        <section class="flex-custom">
            <div class="message-custom">
                <p>Your review:</p>
                <p>{{$comment}}</p>
                <p>From: {{$email}}</p>
            </div>
        </section>
    </main>
    {{-- FINE MAIN --}}

</body>
</html>