<?php
class AdminModel extends CI_Model{

    public function order_list(){
        
        $query = $this->db->query('SELECT order_details.order_number AS order_number, customer_table.Cust_Name AS Cust_Name, customer_table.Cust_ID_Number AS Cust_ID_Number, order_details.order_date AS order_date, order_details.payment_status AS payment_status, order_details.order_status AS order_status
                                    FROM order_details
                                    INNER JOIN customer_table ON customer_table.Cust_Id = order_details.customer_id
                                    ORDER BY order_number DESC');
        return $query;
    }

    public function get_stats_home(){
        $count_items = $this->db->query('SELECT SUM(item_quantity.stable_quantity) AS c FROM item_quantity');
        $count_rent = $this->db->query('SELECT sum(order_item.quantity) AS c FROM order_item WHERE order_item.return_status = "pending"');
        $count_pending_order = $this->db->query('SELECT COUNT(order_number) AS c FROM order_details WHERE order_status  = "pending"');
        $count_completed_order = $this->db->query("SELECT COUNT(order_number) AS c FROM order_details WHERE order_status  = 'complete'");
        $count_customer = $this->db->query('SELECT COUNT(customer_table.Cust_Id) AS c FROM customer_table');

        $finance = $this->db->query('SELECT 
                                    @tot_payed := SUM(COALESCE(pt.pay_item_payed, 0)) AS total_payed, 
                                    SUM(dd.amount) AS deposit, SUM(db.balance) AS deposit_balance,
                                    @dc := if (DATEDIFF(CURDATE(),oi.rented_date) = 0, DATEDIFF(NOW(),oi.rented_date) + 1, DATEDIFF(NOW(),oi.rented_date)) AS DAY,
                                    @tot := SUM(if(@dc = 1, @dr := rate.char_1_day * oi.quantity * @dc, 
                                        if(@dc <= 3, @dr := rate.Char_3_day * oi.quantity * @dc,
                                            if(@dc <= 7, @dr := rate.Char_7_day * oi.quantity * @dc, 
                                                @dr := rate.Char_30_day * oi.quantity * @dc
                                            )
                                        )
                                    )) AS Rent
                                    
                                    FROM order_details AS o 
                                    LEFT JOIN payment_item_details pt ON pt.pay_item_order_id = o.order_number
                                    LEFT JOIN diposit_details dd ON dd.order_number = o.order_number
                                    LEFT JOIN deposit_balance db ON db.order_number = o.order_number
                                    INNER JOIN order_item oi ON oi.order_id = o.order_number
                                    INNER JOIN item_rent_rate_table rate ON rate.item_code = oi.item_code');

        return array(
            'count_items' => $count_items->row()->c,
            'count_rent' => $count_rent->row()->c,
            'count_pending_order' => $count_pending_order->row()->c,
            'count_completed_order' => $count_completed_order->row()->c,
            'count_customer' => $count_customer->row()->c,
            'tot_payed' => $finance->row()->total_payed
        );
    }

}