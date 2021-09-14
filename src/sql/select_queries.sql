SELECT u.name, e.event_date, e.description, c.category_name FROM Event as e LEFT JOIN User as u on e.user_id = u.id LEFT JOIN Event_Category as c on e.event_category_id = c.id where c.category_name = 'Birthday';
SELECT u.name, e.event_date, e.description, c.category_name FROM Event as e INNER JOIN User as u on e.user_id = u.id LEFT JOIN Event_Category as c on e.event_category_id = c.id order by e.event_date;
SELECT u.name, e.event_date, e.description, c.category_name FROM Event as e LEFT JOIN User as u on e.user_id = u.id LEFT JOIN Event_Category as c on e.event_category_id = c.id where e.event_date between '2021-09-01' and '2021-09-30' order by e.event_date;
SELECT MAX(e.event_date) as date FROM Event as e LEFT JOIN User as u on e.user_id = u.id LEFT JOIN Event_Category as c on e.event_category_id = c.id WHERE e.event_date between '2021-09-01' and '2021-11-30' order by e.event_date;
SELECT COUNT(e.id) as event_count FROM Event as e LEFT JOIN User as u on e.user_id = u.id LEFT JOIN Event_Category as c on e.event_category_id = c.id WHERE e.event_date between '2021-09-01' and '2021-11-30' order by e.event_date;
SELECT c.category_name, COUNT(e.id) as event_count FROM Event as e LEFT JOIN Event_Category as c on e.event_category_id = c.id GROUP BY c.category_name;


