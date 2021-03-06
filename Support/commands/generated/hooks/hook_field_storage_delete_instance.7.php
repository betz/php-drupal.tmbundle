/**
 * Implements hook_field_storage_delete_instance().
 */
function <?php print $basename; ?>_field_storage_delete_instance(\$instance) {
  ${1:\$field = field_info_field(\$instance['field_name']);
  \$table_name = _field_sql_storage_tablename(\$field);
  \$revision_name = _field_sql_storage_revision_tablename(\$field);
  db_update(\$table_name)
    ->fields(array('deleted' => 1))
    ->condition('entity_type', \$instance['entity_type'])
    ->condition('bundle', \$instance['bundle'])
    ->execute();
  db_update(\$revision_name)
    ->fields(array('deleted' => 1))
    ->condition('entity_type', \$instance['entity_type'])
    ->condition('bundle', \$instance['bundle'])
    ->execute();}
}

$2