<!DOCTYPE html>
<html>
<head>
    <title>Contoh AJAX dengan PHP</title>
    <script>
        function updateRelay() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    // Tanggapan dari server
                    console.log(this.responseText);
                }
            };
            xhttp.open("GET", "update_relay.php", true);
            xhttp.send();
        }
    </script>
</head>
<body>

<button type="button" onclick="updateRelay()">Perbarui Relay</button>

</body>
</html>
