<?php

require_once APPPATH . "/core/Backend_Model.php";

class m_tooldotphatuong extends Backend_Model {
    private $db;

    function __construct() {
        parent::__construct();
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        if (empty($this->db))
            $this->db = $this->load->database(array('db' => 'system_info', 'type' => 'slave'), true);
    }

    function add_tournament($params) {
        if (empty($params)) {
            return 0;
        }

        $this->db->insert('event_dotphatuong_tournament', $params);
        return $this->db->affected_rows();
    }

    function edit_tournament($params) {
        if (empty($params) || empty($params['id'])) {
            return 0;
        }

        $this->db
                ->set('tournament_name', $params['tournament_name'])
                ->set('tournament_date_start', $params['tournament_date_start'])
                ->set('tournament_date_end', $params['tournament_date_end'])
                ->set('tournament_status', $params['tournament_status'])
                ->where("id", $params['id']);

        $this->db->update("event_dotphatuong_tournament");
        return $this->db->affected_rows();
    }

    function tournament_list() {
        $this->datatables_config = array(
            "table" => "event_dotphatuong_tournament",
            "select" => "
                    SELECT SQL_CALC_FOUND_ROWS *
                    FROM event_dotphatuong_tournament",
            "order_by" => " Order By id DESC",
            "columnmaps" => array(
            )
        );
        return $this->_bindingdata();
    }

    function tournament_get_by_id($id) {
        $db = $this->db
                ->select('*')
                ->from('event_dotphatuong_tournament')
                ->where('id', $id)
                ->get();

        return $db->result();
    }

    function tournament_list_name_id() {
        $db = $this->db
                ->select('id, tournament_name', false)
                ->from('event_dotphatuong_tournament')
                ->order_by("id", "DESC")
                ->get();

        return $db->result();
    }

    function get_dotphatuong_gift($tournament_id) {
        $where = "WHERE tournament_id = $tournament_id";
        $this->datatables_config = array(
            "table" => "event_dotphatuong_gift",
            "select" => "
                    SELECT SQL_CALC_FOUND_ROWS *
                    FROM event_dotphatuong_gift",
            "where" => $where,
            "order_by" => " Order By id DESC",
            "columnmaps" => array(
            )
        );
        return $this->_bindingdata();
    }

    function add_dotphatuong_gift($params) {
        if (empty($params)) {
            return 0;
        }

        $this->db->insert('event_dotphatuong_gift', $params);
        return $this->db->affected_rows();
    }

    function get_dotphatuong_gift_details($id) {
        $db = $this->db
                ->select('*')
                ->from('event_dotphatuong_gift')
                ->where('id', $id)
                ->get();

        return $db->result();
    }

    function edit_dotphatuong_gift($params) {
        if (empty($params) || empty($params['id'])) {
            return 0;
        }

        $this->db
                ->set('tournament_id', $params['tournament_id'])
                ->set('item_name', $params['item_name'])
                ->set('item_id', $params['item_id'])
                ->set('item_quantity', $params['item_quantity'])
                ->set('conditions_receiving_gifts', $params['conditions_receiving_gifts'])
                ->set('item_img', $params['item_img'])
                ->where("id", $params['id']);

        $this->db->update("event_dotphatuong_gift");

        return $this->db->affected_rows();
    }

    //History
    function get_exchange_history($tournament_id, $startdate, $enddate) {
        $where = " WHERE tournament_id = $tournament_id AND exchange_date >= '$startdate' AND exchange_date <= '$enddate'";
        $this->datatables_config = array(
            "table" => "event_dotphatuong_history",
            "select" => "
                    SELECT SQL_CALC_FOUND_ROWS *
                    FROM event_dotphatuong_history",
            "where" => $where,
            "order_by" => " ORDER BY id DESC",
            "columnmaps" => array(
            )
        );
        return $this->_bindingdata();
    }
//
//    function get_exchange_history_excel($tournament_id, $startdate, $enddate) {
//        $query = "SELECT eteh.id, eteh.exchange_date, etr.pakage_name, etr.pakage_price, etr.vip_required, eteh.exchange_status";
//        $query .= " FROM event_dotphatuong_exchange_history eteh LEFT JOIN event_dotphatuong_gift_pakage etr ON (eteh.pakage_id = etr.id)";
//        $query .= " WHERE eteh.tournament_id = $tournament_id AND eteh.exchange_date >= '$startdate' AND eteh.exchange_date <= '$enddate'";
//        $query .= " ORDER BY eteh.exchange_date DESC";
//
//        $result = $this->db->query($query);
//        return $result->result_array();
//    }

}

?>
