<?php $this->load->view('front_end/templates/tmp_header'); ?>
<div class="data_column_a">
    <div class="data_entry_view">
        <form name="frmLogin" id="frmLogin" action="http://noonacademy.com/index.php?page_id=check_login" method="POST" accept-charset="utf-8">
            <fieldset>
                <legend>Login Information</legend>
                <label>Enter Username</label>
                <input type="text" name="Username"  id="Username" required="required">
                <label>Enter Password</label>
                <input type="password" name="Password" id="Passwrod" required="required">


                <label>  </label>
                <input type="submit" name="Submit" id="Login" value="Login Now">
            </fieldset>
        </form>
    </div>
</div>
<div class="data_column_b">
    <div class="content_tiles">
        <div class="tile_content"><img src="<?php echo base_url('images/front_end/content_tiles/login_page.jpg');?>"/></div>
        <div class="title_heading">Anywhere, Anytime</div>
        <div class="tile_short_note">Educating People</div>
        <div class="tile_menu_link"><a href="#">Read More</a></div>
    </div>
</div></div><!-- end of content_container --><div class="clear_all">&nbsp;</div>
<?php $this->load->view('front_end/templates/tmp_footer'); ?>