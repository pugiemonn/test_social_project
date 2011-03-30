<?php
class User {
    public function get_user($user_id) {
        $sql = sprintf('SELECT * FROM user WHERE id = %d',
                        mysql_real_escape_string($user_id));
    }
}

class UserItem {
    public function get_user_item($user_id) {
        $obj    = array();
        $sql    = sprintf('SELECT i.id AS id, ui.num AS num, i.name AS name, i.category_id AS category_id FROM user_item ui INNER JOIN items i ON ui.item_id = i.id WHERE user_id = %d',
                        mysql_real_escape_string($user_id));
        $result = mysql_query($sql) or die(mysql_error());         
        while($c=mysql_fetch_assoc($result)) {
            $obj [] = $c;
        }
        return $obj;
    }
}

?>
