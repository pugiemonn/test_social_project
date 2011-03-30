<?php
class User {
    public function get_user($user_id) {
        $sql = sprintf('SELECT * FROM user WHERE id = %d',
                        mysql_real_escape_string($user_id));
    }
}

class UserItem {
    public $obj = array(); 
    public function get_user_item($user_id) {
        $sql    = sprintf('SELECT i.id AS id, ui.num AS num, i.name AS name, i.category_id AS category_id FROM user_item ui INNER JOIN items i ON ui.item_id = i.id WHERE user_id = %d',
                        mysql_real_escape_string($user_id));
        $result = mysql_query($sql) or die(mysql_error());         
        while($c=mysql_fetch_assoc($result)) {
            $obj [] = $c;
        }
        return $obj;
    }

    public function add_user_item($user_id, $item_id) {
        $sql    = sprintf('SELECT COUNT(*) FROM user_item WHERE user_id=%d AND item_id=%d',
                        mysql_real_escape_string($user_id),
                        mysql_real_escape_string($item_id)
                    );
        $result = mysql_query($sql) or die(mysql_error());         
        $c = mysql_fetch_row($result);
        if($c[0]==0) {
            $sql = sprintf('INSERT INTO `user_item` (`user_id`, `item_id`, `num`) VALUES (%d, %d, %d)',
                        mysql_real_escape_string($user_id),
                        mysql_real_escape_string($item_id),
                        mysql_real_escape_string(10)
                    );
            mysql_query($sql) or die(mysql_error());
        } else {
            //echo "huga";
            $sql = sprintf('UPDATE `user_item` SET `num`=`num`+10 WHERE `user_id`=%d AND `item_id`=%d', 
                        mysql_real_escape_string($user_id),
                        mysql_real_escape_string($item_id)
                    );
            mysql_query($sql) or die(mysql_error());
        }
        
    }
}

?>
