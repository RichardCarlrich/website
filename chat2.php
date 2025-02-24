<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<div> 
    <div id="limit" class="container-fluid">
        <div>
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
                    margin-top: 50px;
                }
                #msg {
                    height: 50px;
                    width: 100%;
                    border: 1px solid green;
                    border-radius: 8px;
                    padding: 0 10px;
                    background-color: lightyellow;
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
                setInterval(displaychat, 100);
            </script>
            <div id="chats"></div>
            <form action="chatinsert.php" method="POST" class="chatinput">
                <div class="chatSendInput">
                    <img src='deafaultuser.jpg'><input type="text" name="msg" id="msg" placeholder="Type your message here">
                    <button type="submit" class="btn btn-lg btn-success" style="border-radius:15%; outline: none; margin-left: 10px;"><span class="glyphicon glyphicon-send"></span></button>
                </div>
            </form>
        </div>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            $localhost = "localhost";
            $usernamew = "root";
            $passwordw = "";
            $db = "expdb";
            $conn = mysqli_connect($localhost, $usernamew, $passwordw, $db);
            if (!$conn) {
                echo "Connection error";
            } else {

                $sql = "UPDATE counter SET visit=visit+1 WHERE id = 3";
                $result = mysqli_query($conn, $sql);
            }
        }

        ?>
    </div>
</div>