<style>a.tab-button {display: inline-block;  height: 25px;  width: 70px;  -webkit-background-size: auto 34px;  -moz-background-size: auto 34px;  background-size: auto 30px;  color: #fff;font-size: 11px;  line-height: 25px;  font-weight: bold;  background-color: #00b050;  border-radius: 5px;  text-align: center; margin-top: 10px;}
    a.tab-button.active{display: inline-block;  height: 25px;  width: 70px;  -webkit-background-size: auto 34px;  -moz-background-size: auto 34px;  background-size: auto 30px;  color: #fff;font-size: 11px;  line-height: 25px;  font-weight: bold;  background-color: #f79646;  border-radius: 5px;  text-align: center; margin-top: 10px;}
</style>
<div class="h-content">
    <div style="clear: both"></div>
    <div class="h-list">
        <div style="margin-top: 10px; font-size: 15px;"><div id="lich-su" class="content" style="text-align: center;">
                <a href="javascript:void(0);" class="tab-button tab-button1 active" onclick="lichsu(1);">Đào Rương</a>
                <a href="javascript:void(0);" class="tab-button tab-button2" onclick="lichsu(2);">Đổi Quà</a></div>
            <table id="customers" class="table-role" style="margin-top: 10px;">
                <tr>
                    <th>Mã GD</th>
                    <th>Ngày</th>
                    <th>Quà</th> 
                    <th>Điểm</th>
                </tr>
                <?php
                foreach ($history as $key => $value) {
                    ?>
                    <tr>
                        <td><?php echo $value["id"]; ?></td>
                        <td><?php $date = new DateTime($value["exchange_date"]);
                echo $date->format('d-m-Y H:i:s'); ?></td>
                        <td><?php echo $value["reward_name"]; ?></td>  
                        <td><?php echo $value["tournament_money"]; ?></td>
                    </tr>
<?php } ?>
            </table>
        </div>

<?php //echo var_dump($this->data["history"])  ?>
        <!--<div class="message success">Tạm thời chưa có dữ liệu. </div>-->
    </div>
