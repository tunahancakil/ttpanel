<?php include "header.php";
	if (isset($_GET['title'])) {
		$content = $_GET['title'];
		$sql_page = "select * from page where TITLE = '".$content."' and ACTIVE = 1";
        $result_page = mysqli_query($conn,$sql_page);
        $row_page = mysqli_fetch_assoc($result_page);
	}
?>
    <section id="columns" class="offcanvas-siderbars">
        <div class="container">
            <div class="wrap-container transparent-bg">
                <div class="row mtop40">
                    <section class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div id="content">  
                            <h1 class="text-center bigc">Hakkımızda</h1>
                            <strong>Biz Kimiz?</strong><br />
                            <?php echo $row_page['DESCRIPTION'] ?>
                        </div>
                    </section> 
                </div>
            </div>
        </div>
    </section>
</section> 
<?php include "footer.php"?>