<?php
/*
Plugin Name: Welcome NetHeberg WP
Plugin URI:
Description: Merci d'avoir choisi NetHeberg pour héberger votre site WordPress
Author: Valentin Gratz
Version: 0.0.2
Author URI: http://www.valentin-gratz.xyz
*/

// define( 'IMG_ASSETS_URL', IMG_URL . 'assets/' );

// crochet qui va executer generateCSS
function generateCSS(){
    wp_register_style('monCSSBootstrap', plugins_url('NetHebergWelcomeWP/assets/bootstrap.css'));
    wp_register_style('monCSS', plugins_url('NetHebergWelcomeWP/assets/style.css'));

}


add_action( 'admin_head', 'generateCSS' );

function displayAdminMenu(){

    wp_enqueue_style('monCSSBootstrap');
    wp_enqueue_style('monCSS');

    echo "<style>body{margin-top: 20px; background-color: darkgreen !important; color: white !important;}
    </style>
        <center><h1>Merci d'avoir choisi NetHeberg pour votre site !</h1></center><br>
        <br><center>
              <div class=\"akismet-masthead__logo-container\">
				<img class=\"balimgbr\" src=\"?php echo esc_url( plugins_url( '/assets/img/logo_netheberg.png', __FILE__ ) ); ?>\" alt=\"logo NetHeberg\" />
			  </div></center>
        <br>
        <br>
        <h2>Nous retrouver !</h2>
        <p></p>
            <ul><li>Site internet : <a href='http://www.netheberg.fr'>NetHeberg.fr</a></li>
                <li>Serveur Discord : <a href='https://discord.gg/j5yjUsKVWC'>https://discord.gg/j5yjUsKVWC</a></li></ul>
        <br><br><br><br>
        <div align=\"right\">Version 0.0.2</div>

    ";
}

function createMenu(){
    add_menu_page("NetHeberg Welcome",
        "NetHeberg Welcome",
        "manage_options",
        "NetHeberg Welcome",
        "displayAdminMenu",
        "",
        1);

}

 add_action('admin_menu', "createMenu"); //mettre en dehors de la function