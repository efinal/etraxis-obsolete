/*------------------------------------------------------------------------------------------------*/
/*                                                                                                */
/*  eTraxis - Records tracking web-based system.                                                  */
/*  Copyright (C) 2009 by Artem Rodygin                                                           */
/*                                                                                                */
/*  This program is free software; you can redistribute it and/or modify                          */
/*  it under the terms of the GNU General Public License as published by                          */
/*  the Free Software Foundation; either version 2 of the License, or                             */
/*  (at your option) any later version.                                                           */
/*                                                                                                */
/*  This program is distributed in the hope that it will be useful,                               */
/*  but WITHOUT ANY WARRANTY; without even the implied warranty of                                */
/*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the                                 */
/*  GNU General Public License for more details.                                                  */
/*                                                                                                */
/*  You should have received a copy of the GNU General Public License along                       */
/*  with this program; if not, write to the Free Software Foundation, Inc.,                       */
/*  51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.                                   */
/*                                                                                                */
/*------------------------------------------------------------------------------------------------*/
/*  Server type: MySQL 5.0                                                                        */
/*------------------------------------------------------------------------------------------------*/

use etraxis;
set @dbname = 'etraxis';

/*------------------------------------------------------------------------------------------------*/

update tbl_sys_vars
set var_value = '2.1'
where var_name = 'FEATURE_LEVEL';

/*------------------------------------------------------------------------------------------------*/

alter table tbl_fields drop index ix_fields_name;
alter table tbl_fields drop index ix_fields_order;

alter table tbl_fields add column removal_time int null after field_name;
update tbl_fields set removal_time = 0;
alter table tbl_fields modify column removal_time int not null;

alter table tbl_fields add constraint unique ix_fields_name
(
    state_id,
    field_name,
    removal_time
);

alter table tbl_fields add constraint unique ix_fields_order
(
    state_id,
    field_order,
    removal_time
);

/*------------------------------------------------------------------------------------------------*/
