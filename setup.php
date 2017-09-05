<html>
<head>
    <title>Set Webhooks</title>
    <script src="https://unpkg.com/vue/dist/vue.js"></script>
    <style>
        .txt {
            width: 80%;
        }
    </style>
</head>
<body>
<div id="app">
    <form :action="set_webhook" method="post" enctype="multipart/form-data">
        Enter your Bot Token: <input class="txt" type="text" v-model="token"/><br>
        Enter your Bot Url: <input class="txt" type="text" name="url" v-model="bot_url"/><br>
        MAX Connections?: <input class="txt" type="text" name="max_connections" value="40"/><br>
        Enter your Certificate (only if self-signed): <input type="file" name="certificate" id="fileToUpload"/><br>
        <br/>
        <input type="submit" value="Set Webhook" name="submit">
    </form>
</div>
<script>
    new Vue({
        el: '#app',
        data: {
            token: 'YOUR_BOT_TOKEN',
//            port: 8443
        },
        computed: {
            set_webhook: function () {
                return 'https://api.telegram.org/bot' + this.token + '/setwebhook'
            },
            bot_url: function () {
<?php
		echo 'return "https://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['REQUEST_URI']).'/?apikey=" + this.token';
?>
            }
        }
    })
</script>
</body>
</html>
