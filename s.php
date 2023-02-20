
<?php

include "./header.php";

		$connect = mysqli_connect("localhost","steamtrophy_ana","paMFxJ^.t(!_","steamtrophy_ana");
		$connect->set_charset("utf8");
	if(isset($_GET["steamid"]))
	{
		$steamid = $_GET["steamid"];
		$sql = "select * from veriler where steamid = '" .$steamid. "'";
		$result=mysqli_query($connect, $sql);
		$row = mysqli_fetch_array($result);
		
		$oyuncuismi = $row['personaname'];
		
		
		$sql_basarim = "select * from toplambasarim where steamid = '" .$steamid. "'";
		$result_basarim=mysqli_query($connect, $sql_basarim);
		$row_basarim = mysqli_fetch_array($result_basarim);
		
		// $basarimimizkac = $row_basarim['basarim'];
		
		// if ($basarimimizkac == NULL or $basarimimizkac == 0 or $basarimimizkac == "")
			// $basarimimizkac = "Hesaplanmadı";
		
	// $toplambasari = 0;
		
	$url = file_get_contents("https://api.steampowered.com/IPlayerService/GetSteamLevel/v1/?key=7940FDEF0CDFC71C51F81F6364967801&steamid=$steamid");
	
	$oyunlarurl = file_get_contents("https://api.steampowered.com/IPlayerService/GetOwnedGames/v1/?key=7940FDEF0CDFC71C51F81F6364967801&steamid=$steamid");
	


	$content = json_decode($url, true);
	$contentoyunlar = json_decode($oyunlarurl, true);
	

	$basarimlarsay = 0 ;
	

	

	
	$toplamoyunsayisi = $contentoyunlar['response']['game_count'];
	
	// $oyunisimleri = 
	

		
		$steamlevel = $content['response']['player_level'];
		$profileicon = $row['avatar'];
		
		
	}
	else
		header("Location: index.php");
?>

<script src="https://yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
<script src="https://yastatic.net/share2/share.js" async></script>



<style>

html, body {
  margin: 0;
  padding: 0;
  overflow-x: hidden;
}
   @media (min-width: 870px) {
body {
    margin-left: 20px !important;
}}
   @media (max-width: 870px) {
body {
    margin-left: 7px !important;
}}

    .game-table {
        margin-bottom: 1rem;
        color: #acacac;
    }
.table {
    width: 95%!important;

}
    .game-table tr, .game-table td {
        /*padding: 0px;*/

        padding: 0;
        vertical-align: middle;
        border-top: none;

    }

    .game-table th {
        border-top: none;
    }

    .game-table tr {
    border-bottom: 1px solid hsl(216, 25%, 26%);
    
}

    .game-table td img {
        width: 100%;
    margin-top: 2px;
        
    }

    .game-table .gicon {
        width: 100px;
        padding: 0;
    }

 
    @media (max-width: 860px) {

        .prices {
            width: 100%;
            margin-bottom: 15px;
        }

    }

    .tooltip-icon:hover {
        fill: #ff5938;
        cursor: pointer;
    }

    .share-panel {
        padding: 15px;
        margin-bottom: 20px;
        border: 1px solid #6f6985;
        border-radius: 5px;
        font-size: 14px;
        word-break: break-all;
    }

    .header-player h1 {
        font-size: 1.5rem;
    }

    .pi h2 {
        font-size: 1.25rem;
    }

    .ya-share2 li {
        border: 0px !important;
    }

    .ya-share2 {
        display: inline-block;
    }

    .acc-faq-wrap {
        border: 1px solid rgb(50, 63, 83);
        padding: 15px;
        font-size: 14px;
        margin-top: 15px;
        margin-bottom: 15px;
    }

    .acc-faq-wrap h3 {
        font-size: 20px;
    }

    .acc-faq-wrap ul {
        margin-bottom: 0;
    }

    .acc-faq-wrap > div {
        margin-bottom: 15px;
    }

    .acc-faq-wrap > div:last-child {
        margin-bottom: 0;
    }
    

</style>

                    <div class="fanpay">
              
            </div>
        
        <div class="row header-player mb-5">
  <div class="col-md-4 col-12">
                <div class="d-lg-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                        <img src= <?php echo $profileicon ?> id="img-uploaded" class="avatar-xxl"
                             alt="<?php echo $steamlevel ?> - steam id <?php echo $steamid ?>">
                        <div class="ml-3">
                            <h1 class="mb-0 text-white"><?php echo $oyuncuismi ?></h1>
<h6 class="mb-0 text-white">Level : <?php echo $steamlevel ?></h6>
                     
  
  <?php /** $completed_games = 0;
foreach($contentoyunlar['response']['games'] as $gelenoyun) {
    $oyunid = $gelenoyun['appid'];

    $url = "http://api.steampowered.com/ISteamUserStats/GetPlayerAchievements/v0001/?appid=$oyunid&key=$api_key&steamid=$steamid";
    $json = file_get_contents($url);
    $data = json_decode($json, true);

    $achievements = $data["playerstats"]["achievements"];
    $achieved = 0;
    $not_achieved = 0;
    foreach ($achievements as $achievement) {
        if ($achievement["achieved"]) {
            $achieved++;
        } else {
            $not_achieved++;
        }
    }

    $percentage_achieved = ($achieved / ($achieved + $not_achieved)) * 100;

    if($percentage_achieved == 100) {
        $completed_games++;
    }
}
echo "Kullanıcının tamamladığı oyunların sayısı: $completed_games";
        
**/ ?>
                         
                            </ul>

                        </div>

                    </div>
          
 </div>
                    </div>
                </div> 	
                    
    <style>
 

   .button {
  color: black;
}

#button {
  color: black;
}
   .totaloyun {
            width: 75%;
  display: flex;
 color: black;
} 
  .buttons {
            width: 99%;
  display: flex;
 color: black;
} 
   
    @media screen and (max-width: 766px) {   
.buttons {
            width: auto;
  display: flex;
 color: black;
} }
 @media screen and (max-width: 766px) {   
 .totaloyun  {
            width: auto;
  display: flex;
 color: black;
} }
 @media screen and (max-width: 766px) {   
.buttons button {
    margin-left: 5px;
} }   


.totaloyun button {
    margin-top: 10px;
   margin-left: 5px;
  margin-right: 5px;
    width: 33%;
  border: 1px solid black;
  border-radius: 5px;
  padding: 10px;
  font-size: 18px; }
  
  
.buttons button {
    margin-top: 40px;
    margin-right: 5px;
    width: 33%;
  border: 1px solid black;
  border-radius: 5px;
  padding: 10px;
  font-size: 18px;
  
}
.black-text {
  color: black;
}
#black-text {
  color: black;
}


    </style>
                   <div class="buttons">
             <button id="black-text"><a href="./profildetay.php?steamid=<?php echo $steamid ?>" class="black-text">Oyunlar:  <?php echo $toplamoyunsayisi ?> </a> </button>
                <button id="black-text"><a href="./profilbasari.php?steamid=<?php echo $steamid ?>" class="black-text">Başarımlar </a></button>
                <button id="black-text"><a href="./profilrehber.php?steamid=<?php echo $steamid ?>" class="black-text">Rehberler </a></button>
                   </div> 
                 <br> <div class="totaloyun">

                    <div class="table-responsive">
                       <table class="table game-table">
                            <tbody>  
                            <tr>
                                <div class="iki-yana-hizala">
                                <th></th><center>
                                <th  class="gname">Oyunlar</th>
                                <th class="text-center">Kazanılan Başarımlar</th>
                                <th class="text-center">Kazanılmayan Başarımlar</th>
                                 <th class="text-center">Başarım Yüzdesi</th></center></div>
<?php
$api_key = "7940FDEF0CDFC71C51F81F6364967801";

foreach($contentoyunlar['response']['games'] as $gelenoyun) {
    $oyunid = $gelenoyun['appid'];

    $url = "https://api.steampowered.com/ISteamUserStats/GetPlayerAchievements/v0001/?appid=$oyunid&key=$api_key&steamid=$steamid";
    $json = file_get_contents($url);
    $data = json_decode($json, true);

    $achievements = $data["playerstats"]["achievements"];
    $achieved = 0;
    $not_achieved = 0;
    foreach ($achievements as $achievement) {
        if ($achievement["achieved"]) {
            $achieved++;
        } else {
            $not_achieved++;
        }
    }

    $url_oyun = file_get_contents("https://store.steampowered.com/api/appdetails?appids=$oyunid");
    $oyun_detay = json_decode($url_oyun, true);
    $oyun_isim = $oyun_detay["$oyunid"]['data']['name'];
    $oyun_icon = "https://cdn.cloudflare.steamstatic.com/steam/apps/$oyunid/capsule_184x69.jpg";
  

    $percentage_achieved = ($achieved / ($achieved + $not_achieved)) * 100;


    ?>

    <tr>
      <td class="gname">
    <img src="<?php echo $oyun_icon ?>" onerror="this.src='/assets/images/applogo.svg'" style="width:120px;height:60px;">
</td>
<style>
 @media screen and (max-width: 766px) {   
    td.sasa {

    text-align: center;
    }   }
    
</style>

        <td align="left" class="sasa"><?php echo $oyun_isim ?></td>
        <td align="center" class="gname"><?php echo $achieved ?></td>
        <td align="center" class="gname"><?php echo $not_achieved ?></td>
        
         <td align="center" class="gname"><?php echo (int) $percentage_achieved . "%"; ?></td>
    </tr>
    <?php } ?>

							</center>
                                                        </tbody>
                        </table> 
						
						
						
                    </div>
                </div>
            </div>
			
        

<?php
include "./footer.php";
 
?>
 
