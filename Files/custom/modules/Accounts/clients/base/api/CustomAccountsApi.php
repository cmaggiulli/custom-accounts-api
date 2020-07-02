<?php

if( !defined('sugarEntry') || !sugarEntry ) 
	die('Not A Valid Entry Point');

class CustomAccountsApi extends SugarApi
{
    public function registerApiRest()
    {
        return array(
            'LinkLeadsEndpoint' => array(
                'reqType' => 'GET',
                'noLoginRequired' => false,
                'path' => array('customer', '?', 'branch', '?',	'leads'),
                'pathVars' => array('', 'customer_id', '', 'branch_id', 'leads'),
                'method' => 'GetLeads',
                'shortHelp' => 'Retrieve Leads',
                'longHelp' => 'Retrieve Leads'
            )
        );
    }

    public function GetLeads($api, $args)
    {
		parse_str ( parse_url ( $args['data'] , PHP_URL_QUERY ) , $queryParams );

		$limit = isset( $queryParams['limit'] ) ? $queryParams['limit'] : 25;
		$offset = isset( $queryParams['offset'] ) ? $queryParams['offset'] : 0;
		
		$seed = BeanFactory::newBean('w002_ConsumerLeads');

		$q = new SugarQuery();
		$q->from($seed);
		$q->join('w002_consumerleads_accounts_1', array('alias' => 'c'));
		$q->where()->equals('customer_number_c', $args['customer_id']);
		$q->limit( $limit );
		$q->offset( $offset );
	
		return $q->execute();
    }


}
/*
 * F I L T E R S  
 * websource_c
 * date range (date_entered)
 * name like
 * total
 * lead_status_c 
 * 
 * POSTING B A C K
 * lead_status change (drop down)
 * serial number (text input)
 */
?>