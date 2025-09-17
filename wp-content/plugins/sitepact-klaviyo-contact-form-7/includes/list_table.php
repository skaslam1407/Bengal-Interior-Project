<?php
class KLCF_List_Table extends WP_List_Table
{
    public function prepare_items()
    {
        $columns = $this->get_columns();
        $hidden = $this->get_hidden_columns();
        $sortable = $this->get_sortable_columns();

        $data = $this->table_data();
        usort( $data, array( &$this, 'sort_data' ) );

        $perPage = 10;
        $currentPage = $this->get_pagenum();
        $totalItems = count($data);

        $this->set_pagination_args( array(
            'total_items' => $totalItems,
            'per_page'    => $perPage
        ) );

        $data = array_slice($data,(($currentPage-1)*$perPage),$perPage);

        $this->_column_headers = array($columns, $hidden, $sortable);
        $this->items = $data;
    }

    public function get_columns()
    {
        $columns = array(
            'id'               => 'ID',
            'post_id'          => 'Form Name',
            'response_code'    => 'Response Code',
            'date_time'        => 'Date Time',
            'response'         => 'Response',
            'request'          => 'Request',
            'response_message' => 'Response Message',
            'action'           => 'Action',
            
        );

        return $columns;
    }

    public function get_hidden_columns()
    {
        return array();
    }

    public function get_sortable_columns()
    {
        return array('post_id' => array('Form Name', false));
    }

    private function table_data()
    {   
        $log = new KLCF_log();
        $data = $log->KLCF_get_logs();       

        return $data;
    }

    public function column_default( $item, $column_name )
    {
        global $wp;
        $KLCF_Main = new KLCF_Main();

        switch( $column_name ) {
            case 'id';
              return $item[ $column_name ]."<br><a href='".add_query_arg( $wp->query_vars ,"/wp-admin/admin.php?page=klaviyo-contact-form-7-log&id=".$item['id'])."'>View</a>";
            case 'post_id':

              $post_id = $item[ $column_name ];
              return get_post($post_id)->post_title;

            case 'response_code':
              return $item[ $column_name ];
            case 'response':
              return $KLCF_Main->klcf_char_limit($item[ $column_name ]);
            case 'request':
              return $KLCF_Main->klcf_char_limit($item[ $column_name ]);
            case 'response_message':
              return $item[ $column_name ];  
            case 'action':
              return "<a class='btn btn-primary' href='".add_query_arg( $wp->query_vars ,"&resubmit_id=".$item['id'])."'>Resubmit</a>";
            case 'date_time':
              return date('d-M-Y H:i a',strtotime($item[ 'time' ]));

            default:
                return print_r( $item, true ) ;
        }

    }

    private function sort_data( $a, $b )
    {
        // Set defaults
        $orderby = 'id';
        $order = 'asc';

        // If orderby is set, use this as the sort column
        if(!empty($_GET['orderby']))
        {
            $orderby = sanitize_text_field($_GET['orderby']);
        }

        // If order is set use this as the order
        if(!empty($_GET['order']))
        {
            $order = sanitize_text_field($_GET['order']);
        }


        $result = strcmp( $a[$orderby], $b[$orderby] );

        if($order === 'asc')
        {
            return $result;
        }

        return -$result;
    }
}
