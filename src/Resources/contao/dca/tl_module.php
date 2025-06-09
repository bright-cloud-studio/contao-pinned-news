<?php

/* Palettes */
$GLOBALS['TL_DCA']['tl_module']['palettes']['newslist'] = str_replace('numberOfItems,','showPinned,numberOfItems,', $GLOBALS['TL_DCA']['tl_module']['palettes']['newslist']);


/* Fields */
$GLOBALS['TL_DCA']['tl_module']['fields']['showPinned'] = array(
    'label'                   => &$GLOBALS['TL_LANG']['tl_module']['showPinned'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array(),
    'sql'                     => "char(1) NOT NULL default ''"
);
