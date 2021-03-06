select

    p.project_id,
    p.project_name,
    t.template_id,
    t.template_name,
    s.state_id,
    s.state_name,
    r.reminder_name,
    r.subject_text,
    r.group_id,
    r.group_flag

from

    tbl_accounts    a,
    tbl_projects    p,
    tbl_group_perms gp,
    tbl_membership  ms,
    tbl_templates   t,
    tbl_states      s,
    tbl_reminders   r

where

    p.project_id  = t.project_id   and
    t.template_id = s.template_id  and
    s.state_id    = r.state_id     and
    t.template_id = gp.template_id and
    ms.group_id   = gp.group_id    and
    ms.account_id = a.account_id   and

    p.is_suspended = 0  and
    t.is_locked    = 0  and
    a.account_id   = %1 and
    r.reminder_id  = %2 and

    mod(gp.perms, 2048) >= 1024
