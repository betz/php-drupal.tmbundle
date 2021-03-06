/**
 * Implements hook_entity_view_alter().
 */
function <?php print $basename; ?>_entity_view_alter(&\$build, \$type) {
  ${1:if (\$build['#view_mode'] == 'full' && isset(\$build['an_additional_field'])) {
    // Change its weight.
    \$build['an_additional_field']['#weight'] = -10;

    // Add a #post_render callback to act on the rendered HTML of the entity.
    \$build['#post_render'][] = 'my_module_node_post_render';
  \}}
}

$2