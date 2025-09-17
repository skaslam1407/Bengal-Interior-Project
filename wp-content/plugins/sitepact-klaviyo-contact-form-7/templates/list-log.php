<style type="text/css">
th, td {
    padding: 5px !important;
}
</style>
<div class="wrap ">

    <div id="icon-options-general" class="icon32">  </div>
    <h1> <?php esc_attr_e( 'Log', 'klaviyo-contact-form-7' ); ?>
        <a href="<?php echo admin_url( 'admin.php?page=klaviyo-contact-form-7-log' ); ?>" class="page-title-action"><?php _e( 'Back', 'klaviyo-contact-form-7' ); ?></a>
    </h1>


    <div class="klaviyo-contact-form-7" v-cloak>

        <div id="post-body" class="metabox-holder ">
        <table class="form-table" id="klaviyo-contact-form-7">
        <thead>
        <tr valign="top">
            <th scope="row"> <?php _e( 'Form ID', 'klaviyo-contact-form-7' ); ?></th>
            <th scope="row"> <?php _e( 'Request Data', 'klaviyo-contact-form-7' ); ?></th>
            <th scope="row"> <?php _e( 'Response Code', 'klaviyo-contact-form-7' ); ?></th>
            <th scope="row"> <?php _e( 'Response Data', 'klaviyo-contact-form-7' ); ?></th>
            <th scope="row"> <?php _e( 'Response Message', 'klaviyo-contact-form-7' ); ?></th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($data as $row){
        ?>
        <tr valign="top">
            <td scope="row"><?php echo $row['post_id'];?></td>
            <td scope="row"><?php echo $row['response_code'];?></td>
            <td scope="row"><?php echo $row['request'];?></td>
            <td scope="row"><?php echo $row['response'];?></td>
            <td scope="row"><button>Resubmit</button></td>
        </tr>
        <?php } ?>
        </tbody>
        <tfoot>
        <tr valign="top">
            <th scope="row"> <?php _e( 'Form ID', 'klaviyo-contact-form-7' ); ?></th>
            <th scope="row"> <?php _e( 'Request Data', 'klaviyo-contact-form-7' ); ?></th>
            <th scope="row"> <?php _e( 'Response Code', 'klaviyo-contact-form-7' ); ?></th>
            <th scope="row"> <?php _e( 'Response Data', 'klaviyo-contact-form-7' ); ?></th>
            <th scope="row"> <?php _e( 'Response Message', 'klaviyo-contact-form-7' ); ?></th>
        </tr>
        </tfoot>
        </table>
        </div>
        <!-- #post-body .metabox-holder .columns-2 -->

        <br class="clear">
    </div>
    <!-- #poststuff -->

</div> <!-- .wrap -->
<script type="text/javascript">
jQuery(document).ready( function () {
    jQuery('#klaviyo-contact-form-7').DataTable();
} );
</script>