<?php

/**
 * Lazy Images for Contao Open Source CMS
 *
 * @copyright  DerHaeuptling 2017
 * @author     Martin Schwenzer <mail@derhaeuptling.com>
 * @author     Sebastijan Ribarić <sebastijan.ribaric@media-8.org>
 * @package    Lazy Images
 * @license    http://opensource.org/licenses/lgpl-3.0.html 
 */


$GLOBALS['TL_LANG']['tl_settings']['lazy_legend'] = 'Lazy Images';

$GLOBALS['TL_LANG']['tl_settings']['lazyPlaceholder'] = [
    'Lazy Images type',
    'Select which type and technique will be used for rendering placeholder images.',
];
$GLOBALS['TL_LANG']['tl_settings']['transparent'] = [
	'Transparent placeholder',
	'A transparent placeholder image will be generated and inlined.',
];
$GLOBALS['TL_LANG']['tl_settings']['thumbnail'] = [
	'Thumbnail placeholder',
	'A thumbnail placeholder image will be generated and inlined.',
];
$GLOBALS['TL_LANG']['tl_settings']['intrinsic'] = [
	'Intrinsic ratio (no placeholder)',
	'The intrinsic ratio trick is used. While this results in the smallest HTML document size, this may conflict with existing CSS. For more information see http://alistapart.com/article/creating-intrinsic-ratios-for-video.',
];
$GLOBALS['TL_LANG']['tl_settings']['intrinsicThumb'] = [
	'Intrinsic ratio + thumbnail placeholder',
	'The intrinsic ratio trick is used. While this results in the smallest HTML document size, this may conflict with existing CSS. For more information see http://alistapart.com/article/creating-intrinsic-ratios-for-video.',
];
$GLOBALS['TL_LANG']['tl_settings']['lazyMaxWith'] = [
	'Maximum width of the transparent placeholder',
	'Maximum width of the transparent placeholder image. A smaller value will be used, if possible as natural number. Default is max width 200 Pixel. Enter number unitless.',
];
$GLOBALS['TL_LANG']['tl_settings']['lazyThumbnailWidth'] = [
	'Fixed Thumbnail with',
	'With of the thumbnail image. Default is 50 Pixel. Enter a unitless number.',
];