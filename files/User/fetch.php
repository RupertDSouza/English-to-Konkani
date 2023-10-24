<?php

    function fetch($row1, $row2, $word){
    $srting="SELECT $row1 FROM `all_words` WHERE $row2='$word'
            UNION
            SELECT $row1 FROM `table_a` WHERE $row2='$word'
            UNION
            SELECT $row1 FROM `table_b` WHERE $row2='$word'
            UNION
            SELECT $row1 FROM `table_c` WHERE $row2='$word'
            UNION
            SELECT $row1 FROM `table_d` WHERE $row2='$word'
            UNION
            SELECT $row1 FROM `table_e` WHERE $row2='$word'
            UNION
            SELECT $row1 FROM `table_f` WHERE $row2='$word'
            UNION
            SELECT $row1 FROM `table_g` WHERE $row2='$word'
            UNION
            SELECT $row1 FROM `table_h` WHERE $row2='$word'
            UNION
            SELECT $row1 FROM `table_i` WHERE $row2='$word'
            UNION
            SELECT $row1 FROM `table_j` WHERE $row2='$word'
            UNION
            SELECT $row1 FROM `table_k` WHERE $row2='$word'
            UNION
            SELECT $row1 FROM `table_l` WHERE $row2='$word'
            UNION
            SELECT $row1 FROM `table_m` WHERE $row2='$word'
            UNION
            SELECT $row1 FROM `table_n` WHERE $row2='$word'
            UNION
            SELECT $row1 FROM `table_o` WHERE $row2='$word'
            UNION
            SELECT $row1 FROM `table_p` WHERE $row2='$word'
            UNION
            SELECT $row1 FROM `table_q` WHERE $row2='$word'
            UNION
            SELECT $row1 FROM `table_r` WHERE $row2='$word'
            UNION
            SELECT $row1 FROM `table_s` WHERE $row2='$word'
            UNION
            SELECT $row1 FROM `table_t` WHERE $row2='$word'
            UNION
            SELECT $row1 FROM `table_u` WHERE $row2='$word'
            UNION
            SELECT $row1 FROM `table_v` WHERE $row2='$word'
            UNION
            SELECT $row1 FROM `table_w` WHERE $row2='$word'
            UNION
            SELECT $row1 FROM `table_x` WHERE $row2='$word'
            UNION
            SELECT $row1 FROM `table_y` WHERE $row2='$word'
            UNION
            SELECT $row1 FROM `table_z` WHERE $row2='$word'";

        return $srting;
    }
?>