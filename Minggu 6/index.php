<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Praktikum minggu 5</title>
</head>
<body>
    <form method="GET" onsubmit="show()">
        <div>
            <label for="">Mangga 15000/kg </label>
            <input type="number" name="mangga" id="mangga" required>
        </div>
            <label for="">Jambu 13000/kg </label>
            <input type="number" name="jambu" id="jambu" required>
        <div>
            <label for="">Salak 10000/kg </label>
            <input type="number" name="salak" id="salak" required>
        </div>

        <input type="submit" name="submit" value="hitung">
    </form>
    <br><br>
    <div id="hasil">

    </div>

    <script type="text/javascript">
        <?php
            
            class mangga{
                private $harga;
                public function __construct($jumlah)
                {
                    $this->jumlah = $jumlah;
                    $this->harga = 15000;
                }
            
                public function jumlahMangga(){
                    return $this->jumlah;
                }

                public function manggaPerkilo(){
                    return $this->harga;
                }
            }

            class jambu{
                private $harga;
                public function __construct($jumlah)
                {
                    $this->jumlah = $jumlah;
                    $this->harga = 13000;
                }

                public function jumlahJambu(){
                    return $this->jumlah;
                }

                public function jambuPerkilo(){
                    return $this->harga;
                }
            }

            class salak{
                private $harga;
                public function __construct($jumlah)
                {
                    $this->jumlah = $jumlah;
                    $this->harga = 10000;
                }

                public function jumlahSalak(){
                    return $this->jumlah;
                }

                public function salakPerkilo(){
                    return $this->harga;
                }
            }
            
        ?>
        

        function show(){
            event.preventDefault()
 
            var nMangga = document.getElementById('mangga').value;
            var nJambu = document.getElementById('jambu').value;
            var nSalak = document.getElementById('salak').value;

            var manggaPerkilo = 15000;
            var jambuPerkilo = 13000;
            var salakPerkilo = 10000;

            var total = nMangga*manggaPerkilo + nJambu*jambuPerkilo + nSalak*salakPerkilo;
            
            output = document.getElementById('hasil');
            // output.innerHTML = "tes";
            output.innerHTML = "Mangga "+nMangga+" kilo = "+nMangga*manggaPerkilo +"<br>"+"Jambu "+nJambu+" kilo = "+nJambu*jambuPerkilo+"<br>"+"Salak "+nSalak+" kilo = "+ nSalak*salakPerkilo+"<br>"+"<br><br><b>Total Belanja = </b>" + "<b>"+total+"</b>";
        }
        
         
        
    </script>
</body>
</html>