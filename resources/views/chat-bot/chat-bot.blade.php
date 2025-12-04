<!DOCTYPE html>
<html>
   <head>
      <title>Feel Great Chat Bot</title>
      <link rel="stylesheet" type="text/css" href="{{ asset('chat-bot/css/reset.css') }}" />
		<link rel="stylesheet" type="text/css" href="{{ asset('chat-bot/css/index.css') }}" />
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
      <!-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css"> -->
      <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
   </head>
   <body>
      <!-- <div class="chatpopup" id="chat_bot" style="display:none;">
         <h1 class="title">Feel Great Chat Bot</h1>
         <div class="chat"></div>
         <div class="busy"></div>
         <div class="input">
            <input type="text" placeholder="Type your reply here!" />
            <a>Send</a>
         </div>
      </div> -->
      <input type="checkbox" id="check"> <label class="chat-btn" for="check"> <i class="fa fa-commenting-o comment"></i> <i class="fa fa-times close" id="close_chat"></i> </label>
      <div class="wrapper" id="chat_me" style="display:none;">
         <div class="header">
            <h6>Nancy EHLEN</h6>
         </div>
         <div class="chat-form">
            <input type="hidden" id="route_name" name="route_name" value="feedback">
            <input type="hidden" id="route_url" name="route_url" value="{{\Request::url()}}">
            <div class="chat"></div>
            <div class="busy"></div>
            <div class="input">
               <input id="bottom_input" type="text" placeholder="Type your reply here!" />
               <a>Send</a>
            </div>
         </div>
      </div>
<script>
         $(document).ready(function(){
           $("#close_chat").click(function(){
            $("#chat_me").hide();
             $("#chat_me, #back-to-top").css("z-index", "0000");
           });
           $(".comment").click(function(){
            $("#chat_me").show();
             $("#chat_me, #back-to-top").css("z-index", "1111");
           });
         });
</script>
      <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script> -->
      <!-- <script type="text/javascript" src="js/jquery-1.7.2.js"></script> -->
      <script type="text/javascript" src="{{ asset('chat-bot/js/chat-bot.js') }}"></script>
		<script type="text/javascript" src="{{ asset('chat-bot/js/index.js') }}"></script>
   </body>
</html>