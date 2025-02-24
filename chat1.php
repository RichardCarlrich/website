<form action="deletechat.php" method="GET">
    <button type="submit" class="btn btn-danger" style="position:absolute;top:20px;left:10px;">Delete all chat</button>
</form>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



<div id="limit" class="container-fluid"> 
    <style>
        .chatmsg {
            background-color: #075bff;
            border: 1px solid #075bff;
            border-radius: 10px;
            height: auto;
            width: 20%;
            padding: 8px;
            color: red;

        }

        .adchatmsg {
            background-color: #5FCF80;
            border: 1px solid #5FCF80;
            border-radius: 10px;
            height: auto;
            width: 20%;
            padding: 8px;
            color: white; 
        }

        .glyphicon{
            height: 25px;
            text-align: center;
        }

        .chatSendInput{
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 30px;
        }

        #chats { 
            height: auto;
            border-radius: 8px;
            background: url('wall.png');
            padding: 30px;
            min-height: 81%;
            margin-top: 60px;
        }

        #msg {
            height: 50px;
            width: 100%;
            border: 1px solid green;
            border-radius: 8px;
            background-color: lightyellow;
            padding: 0 10px;
            outline: none;
        }

        #limit {
            background-image: url('wall.jpg');
        }
    </style>

    <script>
        function displaychat() {

            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("chats").innerHTML = this.responseText;
                }
            }
            xmlhttp.open("GET", "chatdisplay.php", true);
            xmlhttp.send();
        }
        setInterval(displaychat, 10);
    </script>
    <div>
        <div id="chats">
        </div>
    </div>
    <div>
        <form action="adchatinsert.php" method="POST" class="chatinput"> 
            <div class="chatSendInput">
                <img src='admin.jpg' class="adminImage">
                <input type="text" name="msg" id="msg" placeholder="Type your message here">
                <button type="submit" class="btn btn-lg btn-success" style="border-radius:15px; outline: none; margin-left: 10px;"><span class="glyphicon glyphicon-send"></span></button>
            </div>
        </form>
    </div>
</div>