<?php namespace Theme\Admin;

class Admin
{
    public static function init()
    {
        add_action( 'admin_menu', array(__CLASS__, 'menuPage') );
    }

    public static function menuPage()
    {
        add_menu_page( 
            'Manager',
            'Additonal Content',
            'manage_options',
            'manager.php',
            array(__CLASS__, 'settingsPage')
        );
    }

    public static function settingsPage() {
        ?>
            <div class="wrap">
                
                <h1>Welcome To The Wordpress Manager</h1>
                <p>This page allows you to use additional features and functionality
                that's traditionaly not in Wordpress. This means you get a highly customised 
                product, tailored for your needs.</p>

                <p><a href="/admin/products">Manage Products</a></p>
                <p><a href="/admin/donations">Manage Donations</a></p>

            </div>
        <?php
	}

}