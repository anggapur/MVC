<?php

namespace app\providers;


abstract class Alert {
    public function getAlert($for)
    {
        if(isset($_SESSION['alert']['state']) && $_SESSION['alert']['state'] == $for)
        {   
            echo '<div class="alert alert-'.$_SESSION['alert']['color'].'">';
            echo $_SESSION['alert']['status'];        
            echo '</div>';
            unset($_SESSION['alert']);
        }
    }
}