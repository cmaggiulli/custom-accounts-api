# custom-accounts-api

## Description
Enclosed is a SugarCRM 7.x extension which creates a new RESTful services by extending the Accounts API module.  

The endpoint takes the `customer_id` and `branch_id` as path parameters and the `data` as a repeating query parameter.  It then uses `SugarQuery` ORM to retrieve the data from MySQL and return as JSON.  

