<?php
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('@import "EXT:cardcontent/Configuration/PageTS/setup.typoscript"');

	$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
	$iconRegistry->registerIcon(
		'mimetypes-x-content-cardcontent',
		\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
		['source' => 'EXT:cardcontent/Resources/Public/Images/Icons/mimetypes-x-content-cardcontent.svg']
	);

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['tt_content_drawItem']['cardcontent'] = \Brightside\Cardcontent\Hooks\PageLayoutView\ContentElementPreviewRenderer::class;
