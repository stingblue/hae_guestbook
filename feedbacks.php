<?php
    session_start();
    include('db.php');
    include('helper.php');

    $limit = 6;  
    $page  = $_GET["page"] ? htmlentities($_GET["page"] ) : 1;  
    $start_from = ($page - 1) * $limit;

    $sql = "SELECT COUNT(id) FROM feedbacks";  
    $rs_result = mysqli_query($conn, $sql);  
    $row = mysqli_fetch_row($rs_result);  
    $total_records = $row[0];  
    $paging = getPaging($page, $total_records, $limit, 'feedbacks.php?');

      
    $sql = "SELECT * FROM feedbacks ORDER BY date_created DESC LIMIT $start_from, $limit";  
    $rs_result = mysqli_query($conn, $sql);  
?>

<div class="row">
<?php  while ($row = mysqli_fetch_assoc($rs_result)) {  ?>   
    <div class="col-md-12 col-lg-6 col-xl-6">
        <p><?=$row["feedback_content"]?></p>
        <p class="guest-name"><?=$row["guest_name"]; ?>
            <?php if(isset($_SESSION['user_name']) && $_SESSION['role_id'] == '1') { ?>
                <span>
                    <a href="#" data-id='<?=$row["id"]?>' class='update-feedback'><i class="fa fa-pencil"></i></a>
                    <a href="#" data-id='<?=$row["id"]?>'' class='delete-feedback'><i class="fa fa-trash"></i></a>
                </span>
            <?php } ?>
        </p>
        <span class="timer"><?php echo date('jS M, Y \a\t h:i a', strtotime($row["date_created"])); ?></span>
    </div>
<?php  }  ?>  
</div>

<div class="row">
    <div class="d-flex justify-content-center m-auto">
        <ul class='pagination text-center' id="pagination">
            <?php if(!empty($paging['first'])) { ?>
                <li><a href='<?php echo $paging["first"];?>'><<</a></li>
            <?php } ?>
        <?php foreach($paging["pages"] as $value) { ?>  
                    <?php if($value["current_page"] == "yes") { ?>
                        <li class='active'"><a href='<?php echo $value["url"];?>'><?php echo $value["page"];?></a></li> 
                    <?php } else { ?>
                        <li><a href='<?php echo $value["url"];?>'><?php echo $value["page"];?></a></li>
                    <?php } ?>      
        <?php } ?>  
            <?php if(!empty($paging['last'])) { ?>
                <li><a href='<?php echo $paging["last"];?>'>>></a></li>
            <?php } ?>
        </ul>   
    </div>
</div>