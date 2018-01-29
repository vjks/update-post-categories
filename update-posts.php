<?php
/********************************************************************************************
Plugin Name: Peak Sales Recruiting Category Updater
Version: 0.1
Description: Updates 
Author: Vijay Kumar
Author URI: https://www.vjks.net
Plugin URI: https://www.vjks.net
********************************************************************************************/

//Version check
global $wp_version;	
$exit_msg='Course Importer requires WordPress 2.5 or newer. <a href="http://codex.wordpress.org/Upgrading_WordPress">Please update!</a>';

//make sure version is correct
if (version_compare($wp_version,"2.5","<"))
{
	exit ($exit_msg);
}

//include( plugin_dir_path(__FILE__) . 'post_ids.php');

//This hook calls the update_courses function when the plugin is activated.
register_activation_hook( __FILE__, 'update_peak_posts' );

function update_peak_posts () {
	//set name for error log file
	//$errorLogName = plugin_dir_path(__FILE__) . "devlog_Failed.txt";

/*
	//set the arguments for productArray, grab only udemy products
	$postArgs = array(
		'post_type'		   => 'post',	// We want to get all the course post types
		//'author'	   	   => '22',		// all authors
		'post_status'      => 'any',// We want to get all the published courses
		'posts_per_page' 	   => -1,
		'suppress_filters' => true	
	);
	
	$postsArray = get_posts( $postArgs );
*/

$posts = array (
array(1495,"364",""),
array(1058,"364",""),
array(842,"364",""),
array(845,"364",""),
array(1185,"364",""),
array(2027,"364",""),
array(2505,"364",""),
array(2552,"364",""),
array(2789,"364",""),
array(12188,"364",""),
array(4202,"364",""),
array(4269,"364",""),
array(4951,"364",""),
array(4946,"364",""),
array(5862,"364",""),
array(6094,"364",""),
array(6195,"364",""),
array(6333,"364",""),
array(6981,"364",""),
array(6551,"364",""),
array(6611,"364",""),
array(7371,"364",""),
array(7374,"364",""),
array(7378,"364",""),
array(6954,"364",""),
array(7974,"364",""),
array(8500,"364",""),
array(12211,"364",""),
array(61,"364",""),
array(13811,"364",""),
array(14406,"364",""),
array(2404,"364","366"),
array(810,"364","367"),
array(1663,"364",""),
array(7753,"364",""),
array(1659,"364","366"),
array(1986,"364","366"),
array(706,"364",""),
array(14830,"364",""),
array(2604,"366",""),
array(4132,"366",""),
array(4257,"366",""),
array(911,"366",""),
array(556,"366",""),
array(8682,"368",""),
array(14149,"368",""),
array(14742,"368",""),
array(14847,"368",""),
array(16021,"368",""),
array(9056,"368",""),
array(9433,"368",""),
array(9299,"368",""),
array(14949,"368",""),
array(15017,"368",""),
array(16023,"368",""),
array(10524,"368",""),
array(3376,"365",""),
array(64,"365",""),
array(788,"365",""),
array(2252,"365",""),
array(4534,"365",""),
array(5832,"365",""),
array(5865,"365",""),
array(6151,"365",""),
array(6201,"365",""),
array(6254,"365",""),
array(6215,"365",""),
array(6355,"365",""),
array(6980,"365",""),
array(636,"365",""),
array(2397,"365",""),
array(6581,"365",""),
array(7363,"365",""),
array(12205,"365",""),
array(7368,"365",""),
array(6768,"365",""),
array(7369,"365",""),
array(7373,"365",""),
array(7383,"365",""),
array(7525,"365",""),
array(7539,"365",""),
array(7804,"365",""),
array(8302,"365",""),
array(8327,"365",""),
array(2559,"365",""),
array(12301,"365",""),
array(15106,"365",""),
array(16016,"365",""),
array(1956,"365","367"),
array(765,"365","367"),
array(786,"365","367"),
array(789,"365","367"),
array(832,"365","367"),
array(1664,"365","367"),
array(1703,"365","367"),
array(1910,"365","367"),
array(1969,"365","367"),
array(2128,"365","367"),
array(2345,"365","367"),
array(2531,"365","367"),
array(2542,"365","367"),
array(2743,"365","367"),
array(2762,"365","367"),
array(2905,"365","367"),
array(3976,"365","367"),
array(4451,"365","367"),
array(4461,"365","367"),
array(4954,"365","367"),
array(5266,"365","367"),
array(13853,"365","367"),
array(740,"365","367"),
array(2196,"365","367"),
array(836,"365","367"),
array(814,"365","367"),
array(4555,"369",""),
array(6970,"369",""),
array(6976,"369",""),
array(6336,"369",""),
array(6428,"369",""),
array(6982,"369",""),
array(6537,"369",""),
array(6626,"369",""),
array(7376,"369",""),
array(7381,"369",""),
array(7719,"369",""),
array(7756,"369",""),
array(9267,"369",""),
array(14028,"369",""),
array(14246,"369",""),
array(684,"369",""),
array(4481,"369",""),
array(10786,"369",""),
array(3378,"366","340"),
array(39,"366","340"),
array(534,"366","340"),
array(584,"366","340"),
array(14060,"366","340"),
array(14774,"366","340"),
array(14624,"366","340"),
array(5297,"366","340"),
array(4747,"366","340"),
array(6650,"366","340"),
array(9354,"366","340"),
array(9471,"366","340"),
array(14106,"340",""),
array(14208,"340",""),
array(14209,"340",""),
array(14222,"340",""),
array(14252,"340",""),
array(14282,"340",""),
array(14354,"340",""),
array(14422,"340",""),
array(14460,"340",""),
array(14499,"340",""),
array(14619,"340",""),
array(14685,"340",""),
array(14679,"340",""),
array(14721,"340",""),
array(14863,"340",""),
array(14239,"340",""),
array(14375,"340",""),
array(14390,"340",""),
array(14674,"340",""),
array(14769,"340",""),
array(14412,"340",""),
array(14441,"340",""),
array(14592,"340",""),
array(14505,"340",""),
array(527,"367",""),
array(554,"367",""),
array(590,"367",""),
array(599,"367",""),
array(681,"367",""),
array(714,"367",""),
array(821,"367",""),
array(1819,"367",""),
array(1878,"367",""),
array(2056,"367",""),
array(2286,"367",""),
array(2392,"367",""),
array(2515,"367",""),
array(2595,"367",""),
array(2682,"367",""),
array(2685,"367",""),
array(2708,"367",""),
array(2733,"367",""),
array(2759,"367",""),
array(2845,"367",""),
array(2880,"367",""),
array(3749,"367",""),
array(4142,"367",""),
array(4158,"367",""),
array(4210,"367",""),
array(4384,"367",""),
array(4390,"367",""),
array(4403,"367",""),
array(4424,"367",""),
array(4543,"367",""),
array(4591,"367",""),
array(4729,"367",""),
array(4798,"367",""),
array(4835,"367",""),
array(4868,"367",""),
array(5269,"367",""),
array(5271,"367",""),
array(5835,"367",""),
array(5856,"367",""),
array(5840,"367",""),
array(12196,"367",""),
array(6972,"367",""),
array(6977,"367",""),
array(6353,"367",""),
array(807,"367",""),
array(6434,"367",""),
array(6585,"367",""),
array(6606,"367",""),
array(6619,"367",""),
array(6620,"367",""),
array(6653,"367",""),
array(7361,"367",""),
array(7362,"367",""),
array(7365,"367",""),
array(7375,"367",""),
array(7379,"367",""),
array(6914,"367",""),
array(7559,"367",""),
array(559,"367",""),
array(9492,"367",""),
array(9731,"367",""),
array(2307,"367",""),
array(9833,"367",""),
array(12209,"367",""),
array(10716,"367",""),
array(10751,"367",""),
array(12210,"367",""),
array(10849,"367",""),
array(12213,"367",""),
array(12215,"367",""),
array(12172,"367",""),
array(13084,"367",""),
array(13039,"367",""),
array(13153,"367",""),
array(13235,"367",""),
array(13324,"367",""),
array(13430,"367",""),
array(13440,"367",""),
array(13513,"367",""),
array(13654,"367",""),
array(13721,"367",""),
array(13758,"367",""),
array(13800,"367",""),
array(13849,"367",""),
array(13872,"367",""),
array(13870,"367",""),
array(13896,"367",""),
array(13900,"367",""),
array(13925,"367",""),
array(13945,"367",""),
array(14039,"367",""),
array(14047,"367",""),
array(14087,"367",""),
array(14114,"367",""),
array(14162,"367",""),
array(14168,"367",""),
array(14179,"367",""),
array(9682,"367",""),
array(14381,"367",""),
array(14418,"367",""),
array(13392,"367",""),
array(14477,"367",""),
array(14614,"367",""),
array(14730,"367",""),
array(14764,"367",""),
array(16020,"367",""),
array(16019,"367",""),
array(847,"367","366"),
array(1168,"367","366"),
array(1816,"367","366"),
array(2318,"367","366"),
array(2752,"367","366"),
array(3924,"367","366"),
array(6207,"367","366"),
array(9487,"367","366"),
array(9511,"367","366"),
array(1136,"367","366"),
array(692,"367","366"),
array(14896,"367","366"),
array(14899,"367","366"),
array(15324,"367","366"),
array(997,"367","366"),
array(2171,"367","366"),
array(819,"367","366"),
array(3984,"367","366"),
array(1067,"367","366"),
array(924,"367","366"),
array(2452,"367","366"),
array(9283,"367","366"),
array(28,"366",""),
array(530,"366",""),
array(12176,"366",""),
array(537,"366",""),
array(545,"366",""),
array(555,"366",""),
array(557,"366",""),
array(12177,"366",""),
array(680,"366",""),
array(690,"366",""),
array(12179,"366",""),
array(873,"366",""),
array(877,"366",""),
array(935,"366",""),
array(1065,"366",""),
array(1079,"366",""),
array(1098,"366",""),
array(1640,"366",""),
array(1660,"366",""),
array(1694,"366",""),
array(2040,"366",""),
array(2068,"366",""),
array(2110,"366",""),
array(2118,"366",""),
array(2340,"366",""),
array(2354,"366",""),
array(2359,"366",""),
array(2358,"366",""),
array(2654,"366",""),
array(2665,"366",""),
array(2767,"366",""),
array(2869,"366",""),
array(2894,"366",""),
array(12189,"366",""),
array(12190,"366",""),
array(3826,"366",""),
array(3835,"366",""),
array(4038,"366",""),
array(4165,"366",""),
array(4388,"366",""),
array(4392,"366",""),
array(4585,"366",""),
array(4597,"366",""),
array(4776,"366",""),
array(5823,"366",""),
array(6974,"366",""),
array(6131,"366",""),
array(6211,"366",""),
array(6351,"366",""),
array(6381,"366",""),
array(639,"366",""),
array(6983,"366",""),
array(6517,"366",""),
array(6642,"366",""),
array(7360,"366",""),
array(7377,"366",""),
array(7369,"366",""),
array(7382,"366",""),
array(7380,"366",""),
array(7384,"366",""),
array(7460,"366",""),
array(7571,"366",""),
array(8160,"366",""),
array(8366,"366",""),
array(8949,"366",""),
array(10054,"366",""),
array(2792,"366",""),
array(10189,"366",""),
array(12214,"366",""),
array(12212,"366",""),
array(12216,"366",""),
array(13067,"366",""),
array(12201,"366",""),
array(13419,"366",""),
array(13570,"366",""),
array(13651,"366",""),
array(1860,"366",""),
array(13782,"366",""),
array(13908,"366",""),
array(13922,"366",""),
array(14006,"366",""),
array(14289,"366",""),
array(14433,"366",""),
array(546,"366",""),
array(14753,"366",""),
array(14796,"366",""),
array(14859,"366",""),
array(14868,"366",""),
array(14918,"366",""),
array(16018,"366",""),
array(16022,"366",""),
array(15283,"366",""),
array(564,"366",""),
array(1052,"366",""),
array(4476,"366",""),
array(6975,"366",""),
array(875,"366",""),
array(882,"366",""),
array(856,"366",""),
array(919,"366",""),
array(1195,"366",""),
array(7366,"366",""),
array(9416,"366",""),
array(12194,"366",""),
array(598,"366",""),
array(906,"366",""),
array(13123,"366",""),
array(969,"366",""),
array(1162,"366",""),
array(10653,"366",""),
array(12038,"366",""),
array(16017,"366",""),
array(14450,"366",""),
array(569,"340",""),
array(1009,"340",""),
array(1047,"340",""),
array(1686,"340",""),
array(1844,"340",""),
array(2311,"340",""),
array(1918,"340",""),
array(1128,"340",""),
array(993,"340",""),
array(12186,"340",""),
array(1016,"366",""),
array(1113,"366",""),
array(2378,"366",""),
array(4089,"366",""),
array(4149,"366",""),
array(6971,"366",""),
array(12410,"366",""),
array(16024,"366",""),
array(886,"366",""),
array(1026,"366",""),
array(1070,"366",""),
array(13216,"366",""),
array(14426,"366",""),
array(972,"366",""),
array(2379,"366",""),
array(2805,"366",""),
array(3713,"366","")
);
	$append = false; // Replaces the current categories. True causes it to append it to the end. 
	for( $row = 0; $row < count( $posts ); $row++ ) { // count( $posts )
		//error_log( $row, 3, plugin_dir_path( __FILE__ ). "devlog.txt" );
		for( $col = 0; $col < 3; $col++ ) {
			error_log( $col, 3, plugin_dir_path( __FILE__ ). "devlog.txt" );
			$post_ID = $posts[ $row ][ 0 ];
			error_log( "PostID: " . $post_ID . PHP_EOL, 3, plugin_dir_path( __FILE__ ). "devlog.txt" );
			
			$post_categories = array( $posts[ $row ][ 1 ] );
			error_log("Category: " . $posts[ $row ][ 1 ] . PHP_EOL, 3, plugin_dir_path( __FILE__ ). "devlog.txt" );
			
			error_log( "Sub Category" . $posts[ $row ][ 2 ]  . PHP_EOL . PHP_EOL, 3, plugin_dir_path( __FILE__ ). "devlog.txt" );
			if( !empty( $posts[ $row ][ 2 ] ) ) {
				array_push( $post_categories, $posts[ $row ][ 2 ]);
				error_log( "Sub Category" . $posts[ $row ][ 2 ]  . PHP_EOL, 3, plugin_dir_path( __FILE__ ). "devlog.txt" );
			}
		}
		wp_set_post_categories( $post_ID, $post_categories, $append ); 
	}
}