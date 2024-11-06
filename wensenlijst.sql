USE wenslijst_db;
DELETE wishes
FROM wishes
LEFT JOIN users ON wishes.user_id = users.id
WHERE users.id IS NULL;
