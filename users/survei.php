<?php
    include "../model/Survei_model.php";
    include "../model/User_model.php";
    include "../model/Kampus_model.php";

    session_start();
    $username = $_SESSION['username'];

    $survei = new Survei_model();
    $user = new User_model();
    $kmp = new Kampus_model();

    $row = mysql_fetch_array($user->kampus($username));
    $kampus = $row['asal_kampus'];

    $row = mysql_fetch_array($kmp->viewKampus($kampus));
    $id = $row['id'];
    $nama_kampus = $row['nama_kampus'];

    $result = $survei->pertanyaan();

?>
<html>
<body>




            <?php
                if($nama_kampus == ''){
                    echo "maaf nama kampus anda tidak tersedia di aplikasi ini";
                } else if($survei->viewUser($username) > 0){
                    echo "anda sudah mengisi survei";
                } else {
            ?>
            <form action="process/surveiProcess.php" method="post">
            <input type="text" name="id" value="<?php echo $id;?>" hidden>
                <table border=1>
                    <tr>
                        <th>NO</th>
                        <th>Pertanyaan</th>
                        <th>Pil 1</th>
                        <th>pil 2</th>
                        <th>Pil 3</th>
                        <th>Pil 4</th>
                        <th>Pil 5</th>
                    </tr>
                        <?php $i=1;
                        while($row = mysql_fetch_array($result)){?>
                        <tr>
                            <td><?php echo $i ?>
                            <td><?php echo $row["pertanyaan"] ?></td>
                            <td><input type="radio" name="pilihan<?php echo $i ?>" value="100"> <?php echo $row["pil1"] ?></td>
                            <td><input type="radio" name="pilihan<?php echo $i ?>" value="80"> <?php echo $row["pil2"] ?></td>
                            <td><input type="radio" name="pilihan<?php echo $i ?>" value="60"> <?php echo $row["pil3"] ?></td>
                            <td><input type="radio" name="pilihan<?php echo $i ?>" value="40"> <?php echo $row["pil4"] ?></td>
                            <td><input type="radio" name="pilihan<?php echo $i ?>" value="20"> <?php echo $row["pil5"] ?></td>
                        </tr>
                        <?php $i++;} ?>

                    </table>
                <input type="submit" value="survei"><br>
            </form>




    <?php
        }
    ?>
    <a href="process/logoutProcess.php">Logout</a>
</body>

</html>
