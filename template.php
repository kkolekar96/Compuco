<?php


function compuco_menu_tree__main_menu($variables)
{
  $tree = reset($variables["#tree"]);

  // Check if this is a child menu (not the top-level menu)
  if (!empty($tree['#original_link']['depth']) && $tree['#original_link']['depth'] > 1) {
    return '<ul class="dropdown-menu">' . $variables['tree'] . '</ul>';
  } else {
    return '<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button><div class="collapse navbar-collapse" id="navbarSupportedContent"><ul class="navbar-nav me-auto mb-2 mb-lg-0">' . $variables['tree'] . '</ul></div></div></nav>';
  }

}

function compuco_preprocess_menu_link(&$variables)
{

  if ($variables['element']['#original_link']['menu_name'] == 'main-menu') {

    $element = &$variables['element'];

    // Add Bootstrap classes to the menu
    $element['#attributes']['class'][] = 'nav-item';

    // If the menu item has children, make it a dropdown
    if (!empty($element['#below'])) {
      $element['#attributes']['class'][] = 'dropdown';
      $element['#localized_options']['attributes']['class'][] = 'nav-link dropdown-toggle';
      $element['#localized_options']['attributes']['id'][] = 'navbarDropdown';
      $element['#localized_options']['attributes']['role'][] = 'button';
      $element['#localized_options']['attributes']['data-bs-toggle'] = 'dropdown';
    } else {
      $element['#localized_options']['attributes']['class'][] = 'nav-link';
    }
  }
}
