<!DOCTYPE html>
<html>
<head>
    <title>Chat</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

    <style type="text/css">
        .list-group{
            overflow-x: scroll;
            height: 200px;
            width: 191px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row" id="app">
            <h6 class="list-group-item active col-md-2 offset-5">Chat Room</h6>
            <ul class="list-group offset-5" v-chat-scroll>
              <message v-for="value in chat.message" color='success'>@{{ value }}</message>
            </ul>
            <input type="text" name="" class="form-control offset-5 col-md-2" placeholder="Type your message.." v-model="message" @keyup.enter="send">
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>
</html>