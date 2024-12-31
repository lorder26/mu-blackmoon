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
				
				echo '<tr><td>Version:</td><td>S6</td></tr>';
				echo '<tr><td>Experience:</td><td>1500x</td></tr>';
				echo '<tr><td>Drop:</td><td>30%</td></tr>';
				
				echo '<tr><td>'.lang('sidebar_srvinfo_txt_2',true).'</td><td style="font-weight:bold;">'.number_format($srvInfo[0]).'</td></tr>';
				echo '<tr><td>'.lang('sidebar_srvinfo_txt_3',true).'</td><td style="font-weight:bold;">'.number_format($srvInfo[1]).'</td></tr>';
				echo '<tr><td>'.lang('sidebar_srvinfo_txt_4',true).'</td><td style="font-weight:bold;">'.number_format($srvInfo[2]).'</td></tr>';
				echo '<tr><td>'.lang('sidebar_srvinfo_txt_5',true).'</td><td style="color:#00ff00;font-weight:bold;">'.number_format($srvInfo[3]).'</td></tr>';
			echo '</table>';
		echo '</div>';
	echo '</div>';
}

# Top Level
$levelRankingData = LoadCacheData('rankings_level.cache');
$topLevelLimit = 3;
if(is_array($levelRankingData)) {
    $topLevel = array_slice($levelRankingData, 0, $topLevelLimit+1);
    echo '<div class="panel panel-sidebar">';
        echo '<div class="panel-heading">';
            echo '<h3 class="panel-title">'.lang('rankings_txt_1',true).'<a href="'.__BASE_URL__.'rankings/level" class="btn btn-primary btn-xs pull-right" style="text-align:center;width:22px;">+</a></h3>';
        echo '</div>';
        echo '<div class="panel-body">';
            echo '<table class="table table-condensed">';
                echo '<tr>';
                    echo '<th></th>';
                    echo '<th>Player</th>';
                    echo '<th class="text-center">Level</th>';
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

# Events Block
echo '<div class="panel panel-sidebar panel-sidebar-events">';
	echo '<div class="panel-heading">';
		echo '<h3 class="panel-title">Events</h3>';
	echo '</div>';
	echo '<div class="panel-body">';
		echo '<table class="table table-condensed">';
			echo '<tr>';
				echo '<td><span id="bloodcastle_name"></span><br /><span class="smalltext">Starts In</span></td>';
				echo '<td class="text-right"><span id="bloodcastle_next"></span><br /><span class="smalltext" id="bloodcastle"></span></td>';
			echo '</tr>';
			echo '<tr>';
				echo '<td><span id="devilsquare_name"></span><br /><span class="smalltext">Starts In</span></td>';
				echo '<td class="text-right"><span id="devilsquare_next"></span><br /><span class="smalltext" id="devilsquare"></span></td>';
			echo '</tr>';
			echo '<tr>';
				echo '<td><span id="chaoscastle_name"></span><br /><span class="smalltext">Starts In</span></td>';
				echo '<td class="text-right"><span id="chaoscastle_next"></span><br /><span class="smalltext" id="chaoscastle"></span></td>';
			echo '</tr>';
			echo '<tr>';
				echo '<td><span id="goldeninvasion_name"></span><br /><span class="smalltext">Starts In</span></td>';
				echo '<td class="text-right"><span id="goldeninvasion_next"></span><br /><span class="smalltext" id="goldeninvasion"></span></td>';
			echo '</tr>';
			echo '<tr>';
				echo '<td><span id="castlesiege_name"></span><br /><span class="smalltext">Starts In</span></td>';
				echo '<td class="text-right"><span id="castlesiege_next"></span><br /><span class="smalltext" id="castlesiege"></span></td>';
			echo '</tr>';
		echo '</table>';
	echo '</div>';
echo '</div>';

# Discord Block
echo '<iframe src="https://discordapp.com/widget?id=648219712051871754&theme=dark" width="350" height="500" allowtransparency="true" frameborder="0"></iframe>';

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