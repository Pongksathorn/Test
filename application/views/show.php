<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
    <br>
    <div class="row">
        <div class="col-lg-1">
            <?php //echo $_SESSION["name"] ; 
            ?>
        </div>
        <div class="col-lg-12">
            <div class="contact-widget">
                <div class="cw-item">
                    <div class="ci-text">
                        <h3>ข้อมูลขบวนรถไฟ</h3>
                    </div>
                </div>
            </div>
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>ขบวนที่</th>
                        <th>สถานีต้นทาง</th>
                        <th>เวลาออกจากสถานีต้นทาง</th>
                        <th>เวลาถึงสถานีห้วยราช</th>
                        <th>เวลาออกจากสถานีห้วยราช</th>
                        <th>สถานีปลายทาง</th>
                        <th>เวลาถึงสถานีปลายทาง</th>
                        <th>หมายเหตุ</th>
                    </tr>
                </thead>
                 <tbody>
                    <?php foreach ($query->result_array() as $rs) { ?>
                        <tr>
                            <td><?php echo $rs['Car_id']; ?></td>
                            <td><?php echo $rs['ds']; ?></td>
                            <td><?php echo $rs['outds']; ?></td>
                            <td><?php echo $rs['tohuy']; ?></td>
                            <td><?php echo $rs['outhuy']; ?></td>
                            <td><?php echo $rs['terminal']; ?></td>
                            <td><?php echo $rs['toterminal']; ?></td>
                            <td><?php echo $rs['note']; ?></td>

                        </tr>


                    <?php }; ?>
                </tbody>
            </table>
            <br>
            <br>
        </div>
</body>
</html>

