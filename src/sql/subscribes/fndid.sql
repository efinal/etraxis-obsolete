select

    subscribe_name,
    carbon_copy,
    subscribe_type,
    subscribe_flags,
    subscribe_param

from tbl_subscribes
where subscribe_id = %1 and account_id = %2
