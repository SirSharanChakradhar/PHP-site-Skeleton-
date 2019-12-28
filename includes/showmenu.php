<?php
require "includes/dbh.inc.php";

function show_menu(){
    require "includes/dbh.inc.php";
    $conn = mysqli_connect();
    $menus = '';
    $menus = gmm(null)($conn);
}


function gmm( $conn, $parent_id=NULL){
    require "includes/dbh.inc.php";
    $menu = '';
    $sql = '';
    if(is_null($parent_id) ) {
        $sql="select * from 'gi_kitting' where 'parent_id'=NULL";
    }
    else{
        $sql="select * from 'gi_kitting' where 'parent_id'=$parent_id";
    }
    $result = mysqli_query($conn,$sql);

    while($row = mysqli_fetch_assoc($result)){
        if( $row['page']){
        $menu .='<li><a href="'.$row['page'].'">'.$row['title'].'</a></li>';
        }
        else{
            $menu .='<li><a href="#">'.$row['title'].'</a></li>';
        }
        $menu .= '<ul class="menu-list">'.gmm($conn,$row['id']).'</ul>';
    }
    return $menu;
    
}