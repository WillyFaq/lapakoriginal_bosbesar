<?php
    
/*    $q = $this->Menu_model->get_where(["level" => $this->session->userdata('user')->level, "sts_menu" => 1]);
    $res = $q->result_array();
    $menu = [];
    foreach ($res as $row) {
        $menu[$row['parent_menu']][] = $row;
    }

    foreach ($menu as $key => $value) {
        if($key!="MAIN"){
            echo '<hr class="sidebar-divider">';
            echo '<div class="sidebar-heading">'.$key.'</div>';
        }
        foreach ($value as $a => $b) {
            echo '<li class="nav-item" id="'.$b['nama_menu'].'">';
            echo '<a class="nav-link" href="'.base_url($b['link_menu']).'">';
            echo '<i class="fas fa-fw '.$b['icon_menu'].'"></i>';
            echo '<span>'.$b['nama_menu'].'</span>';
            echo '</a></li>';
            break;
        }
        break;
    }*/
?>


<li class="nav-item active" id="dahsboard">
    <a class="nav-link" href="<?= base_url("dahsboard"); ?>">
        <i class="fas fa-fw fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span>
    </a>
</li>
<hr class="sidebar-divider">
<div class="sidebar-heading">Masuk ke</div>
<li class="nav-item active">
    <a class="nav-link" href="<?= base_url("../kopasus/dahsboard"); ?>" target="blank">
        <i class="fab fa-fw fa-fw fa-opencart"></i>
        <span>Kopasus</span>
    </a>
</li>
<li class="nav-item active">
    <a class="nav-link" href="<?= base_url("../material/dahsboard"); ?>" target="blank">
        <i class="fas fa-fw fas fa-fw fa-tools"></i>
        <span>Material</span>
    </a>
</li>


