<?php
/**
 * WebEngine CMS
 * https://webenginecms.org/
 * 
 * @version 1.2.0
 * @author Lautaro Angelico <http://lautaroangelico.com/>
 * @copyright (c) 2013-2019 Lautaro Angelico, All Rights Reserved
 * 
 * Licensed under the MIT license
 * http://opensource.org/licenses/MIT
 */

# Login block
if(!isLoggedIn()) {
	echo '<div class="panel panel-sidebar">';
		echo '<div class="panel-heading">';
			echo '<h3 class="panel-title">'.lang('module_titles_txt_2',true).' <a href="'.__BASE_URL__.'forgotpassword" class="btn btn-primary btn-xs pull-right">'.lang('login_txt_4',true).'</a></h3>';
		echo '</div>';
		echo '<div class="panel-body">';
			echo '<form action="'.__BASE_URL__.'login" method="post">';
				echo '<div class="form-group">';
					echo '<input type="text" class="form-control" id="loginBox1" name="webengineLogin_user" required>';
				echo '</div>';
				echo '<div class="form-group">';
					echo '<input type="password" class="form-control" id="loginBox2" name="webengineLogin_pwd" required>';
				echo '</div>';
				echo '<button type="submit" name="webengineLogin_submit" value="submit" class="btn btn-primary">'.lang('login_txt_3',true).'</button>';
			echo '</form>';
		echo '</div>';
	echo '</div>';
}

# Usercp block
if(isLoggedIn()) {
echo '<div class="panel panel-sidebar panel-usercp">';
	echo '<div class="panel-heading">';
		echo '<h3 class="panel-title">'.lang('usercp_menu_title',true).' <a href="'.__BASE_URL__.'logout" class="btn btn-primary btn-xs pull-right">logout</a></h3>';
	echo '</div>';
	echo '<div class="panel-body">';
			templateBuildUsercp();
	echo '</div>';
echo '</div>';
}

# Server info block
if(is_array($srvInfo)) {
	echo '<div class="panel panel-sidebar">';
		echo '<div class="panel-heading">';
			echo '<h3 class="panel-title">'.lang('sidebar_srvinfo_txt_1',true).'</h3>';
		echo '</div>';
		echo '<div class="panel-body">';
			echo '<table class="table">';
			
				$common = new \common();
                $result = $common->muonline->query_fetch_single("select COUNT(*) as Activos FROM "._TBL_MS_." WHERE ConnectTM >= (GETDATE() -1) and (DisConnectTM >= ConnectTM) and DisConnectTM < GETDATE()");
                
				echo '<tr><td>Version:</td><td>Season 6</td></tr>';
				echo '<tr><td>Experience:</td><td>5000x</td></tr>';
				echo '<tr><td>Drop:</td><td>80%</td></tr>';
				echo '<tr><td>'.lang('sidebar_srvinfo_txt_2',true).'</td><td style="font-weight:bold;">'.number_format($srvInfo[0]).'</td></tr>';
				echo '<tr><td>'.lang('sidebar_srvinfo_txt_3',true).'</td><td style="font-weight:bold;">'.number_format($srvInfo[1]).'</td></tr>';
				echo '<tr><td>'.lang('sidebar_srvinfo_txt_4',true).'</td><td style="font-weight:bold;">'.number_format($srvInfo[2]).'</td></tr>';
				echo '<tr><td>'.lang('sidebar_srvinfo_txt_5',true).'</td><td style="color:#00ff00;font-weight:bold;">'.number_format($srvInfo[3]).'</td></tr>';
                echo '<tr><td>Active Today</td><td style="color:#00aa00;font-weight:bold;">'.$result['Activos'].'</td></tr>';
			echo '</table>';
		echo '</div>';
	echo '</div>';
}

# Top Level
$levelRankingData = LoadCacheData('rankings_resets.cache');
$topLevelLimit = 5;
if(is_array($levelRankingData)) {
    $topLevel = array_slice($levelRankingData, 0, $topLevelLimit+1);
    echo '<div class="panel panel-sidebar">';
        echo '<div class="panel-heading">';
            echo '<h3 class="panel-title">'.lang('rankings_txt_2',true).'<a href="'.__BASE_URL__.'rankings/resets" class="btn btn-primary btn-xs pull-right" style="text-align:center;width:22px;">+</a></h3>';
        echo '</div>';
        echo '<div class="panel-body">';
            echo '<table class="table table-condensed">';
                echo '<tr>';
                    echo '<th></th>';
                    echo '<th>Character</th>';
                    echo '<th class="text-center">RR</th>';
                echo '</tr>';
                foreach($topLevel as $key => $row) {
                    if($key == 0) continue;
                    echo '<tr>';
                        echo '<td><img src="'.getPlayerClassAvatar($row[1], false).'" width="20px" height="auto" style="-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;-khtml-border-radius: 50%;"/></td>';
                        echo '<td>'.playerProfile($row[0]).'</td>';
                        echo '<td class="text-center">'.number_format($row[2]).'</td>';
                    echo '</tr>';
                }
            echo '</table>';
        echo '</div>';
    echo '</div>';
}

# Discord Block
echo '<iframe src="https://discordapp.com/widget?id=435662503150616578&theme=dark" width="338" height="400" allowtransparency="true" frameborder="0"></iframe>';

/*
# Default block
echo '<div class="panel panel-sidebar">';
	echo '<div class="panel-heading">';
		echo '<h3 class="panel-title">Title</h3>';
	echo '</div>';
	echo '<div class="panel-body">';
		
	echo '</div>';
echo '</div>';
*/