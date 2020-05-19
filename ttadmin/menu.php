<?php include("header.php") ?>
    <div class="content-wrapper">
        <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
                <thead>
                    <tr>
                    <th>ID</th>
                    <th>Başlık</th>
                    <th>Adres</th>
                    <th>Aktiflik</th>
                    </tr>
                </thead>
                <tbody>
                    <?php         
                        $sql = "select * from menu";
                        $result = mysqli_query($conn,$sql);
                        while($row=mysqli_fetch_array($result))
                        {
                        echo '<tr>';
                        echo '<td>'.$row['ID'].'</td>';
                        echo '<td>'.$row['TITLE'].'</td>';
                        echo '<td>'.$row['URL'].'</td>';
                        echo '<td>'.$row['AC'].'</td>';
                        echo '</tr>';
                        }
                    ?>
                </tbody>
             </table>
         </div>
    </div>
<?php include("footer.php") ?>