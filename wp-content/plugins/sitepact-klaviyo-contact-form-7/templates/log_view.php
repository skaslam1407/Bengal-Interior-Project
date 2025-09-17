<?php
//print_rr($result);
$post_id          = $result["post_id"] ? $result["post_id"] : "";
$title            = get_post($post_id)->post_title." (".$post_id.")";
$request_data     = $result["request"] ? $result["request"] : "";
$response_code    = $result["response_code"] ? $result["response_code"] : "";
$response_data    = $result["response"] ? $result["response"] : "";
$response_message = $result["response_message"] ? $result["response_message"] : "";
?>

<div class="wrap">

    <div id="icon-options-general" class="icon32">  </div>
    <h1> <?php esc_attr_e( 'Log', 'advanced-form-integration' ); ?>
        <a href="<?php echo admin_url( 'admin.php?page=klaviyo-contact-form-7-log' ); ?>" class="page-title-action"><?php _e( 'Back', 'klaviyo-contact-form-7' ); ?></a>
    </h1>


    <div v-cloak>

        <div id="post-body" class="metabox-holder ">
            <table class="form-table">
                <tr valign="top">
                    <th scope="row"> <?php _e( 'Form Name', 'advanced-form-integration' ); ?></th>
                    <td>
                        <p>
                            <?php echo $title; ?>
                        </p>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row"> <?php _e( 'Request Data', 'advanced-form-integration' ); ?></th>
                    <td>

                        <p>
                            <?php echo stripslashes( $request_data ); ?>
                        </p>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row"> <?php _e( 'Response Code', 'advanced-form-integration' ); ?></th>
                    <td>

                        <p>
                            <?php echo stripslashes( $response_code ); ?>
                        </p>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row"> <?php _e( 'Response Data', 'advanced-form-integration' ); ?></th>
                    <td>

                        <p>
                            <?php echo stripslashes( $response_data ); ?>
                        </p>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row"> <?php _e( 'Response Message', 'advanced-form-integration' ); ?></th>
                    <td>

                        <p>
                            <?php echo stripslashes( $response_message ); ?>
                        </p>
                    </td>
                </tr>
            </table>

        </div>
        
        <a href="<?php echo admin_url( 'admin.php?page=klaviyo-contact-form-7-log' ); ?>" class="page-title-action"><?php _e( 'Back', 'klaviyo-contact-form-7' ); ?></a>
        <!-- #post-body .metabox-holder .columns-2 -->

        <br class="clear">
    </div>
    <!-- #poststuff -->

</div> <!-- .wrap -->