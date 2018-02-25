<?php
//var_dump(APPPATH . 'views/event/template/header.php');die;
//var_dump(file_exists(APPPATH . 'views/event/template/header.php'));
//die;
include APPPATH . 'views/event/template/header.php';
include APPPATH . 'views/event/template/navigation.php';
?>
<style type="text/css">
    #main-content{
        padding-top: 10px;
    }
</style>      
<script type="text/javascript">

    function show_loading() {
        $("#loading").fadeIn("fast");
        return true;
    }
</script>
<div id="main-content"  class="col-xs-12">
    <div>                   
        <div>Tích lũy hiện tại: <span>10,000</span></div>
        <div class="" style="text-align: center;">              
            <table id="customers">
                <tr>                    
                    <th>Mệnh giá nạp</th>
                    <th>Kim Cương</th>
                    <th>Khuyến mãi</th>
                    <th>Kim Cương KM</th>
                    <th></th>
                </tr>
                <tr>                    
                    <td>20,000</td>
                    <td>200</td>
                    <td>50%</td>
                    <td>100</td>
                    <td>Đã nhận</td>
                </tr>
                <tr>                    
                    <td>20,000</td>
                    <td>200</td>
                    <td>50%</td>
                    <td>100</td> 
                    <td>
                        <?php                        
                        $init_data = array("userinfo" => $user, "condition" => $key, "items" => $value, "origin_money" => $money, "use" == $result, "tester" => $tester);
                        $data = $controler->encrypt(json_encode($init_data));
                        $token = md5($controler->get_event() . $data . $secret);
                        ?>
                        <form action="" method="POST">    
                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                            <input type="hidden" name="token" value="<?php echo $token ?>">
                            <input type="hidden" name="data" value="<?php echo $data; ?>">
                            <input type="submit" name="nhan" style="margin-top:0px" onclick="return show_loading();" value="Nhận">
                        </form> 
                    </td>
                </tr>
                <tr>                    
                    <td>20,000</td>
                    <td>200</td>
                    <td>50%</td>
                    <td>100</td> 
                    <td>Chưa đủ điều kiện</td>
                </tr>
            </table>                               
        </div>
        <div class="line"></div>
        <div class="message-error"><?php echo $message ?></div>       
    </div>        
</div>
<script type="text/javascript">
    $(function () {
        $(".popup-overlay").click(function () {
            $(".popup-overlay").fadeOut();
        });
    });
</script>
<div id="popup" class="popup-overlay">
    <div class="popup">
        <div class="popup-title">Thông báo</div>
        <div class="popup-content">
            <div class="popup-message">   
                Cũng bởi lý do các chị em rất ít khi xuất hiện trong game nên.
                <?php echo $message ?>
            </div>        
        </div>
    </div>
</div>
<?php
include APPPATH . 'views/event/template/footer.php';
?>
