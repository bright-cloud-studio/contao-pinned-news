<?php

/* Palettes */
$GLOBALS['TL_DCA']['tl_news']['palettes']['default'] = str_replace('{teaser_legend}','{pinned_legend},pinned;{teaser_legend}', $GLOBALS['TL_DCA']['tl_news']['palettes']['default']);

/* Fields */
$GLOBALS['TL_DCA']['tl_news']['fields']['pinned'] = array(
    'label'                   => &$GLOBALS['TL_LANG']['tl_news']['pinned'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array(),
    'sql'                     => "char(1) NOT NULL default ''"
);
