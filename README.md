# Universal page browser for TYPO3 CMS

A TYPO3 CMS compatible v8 version of EXT:pagebrowse developped by [Dmitry Dulepov](https://github.com/dmitryd).

---

This is a "universal page browser for TYPO3 CMS" extension. It allows TYPO3 extension developers to easily build a page browser into their extensions.

## What does it do?

It provides the API to create a page browser. Developers need to supply the following parameters:
+ current page
+ number of pages

Optionally developers can say how many pages they want to see. It is also possible to customize the look of all links in the page browser. Several hooks exist to let developers do more flexible customization.

Typical usage from PHP:
<pre>
protected function getListGetPageBrowser($numberOfPages) {
	// Get default configuration
	$conf = $GLOBALS['TSFE']->tmpl->setup['plugin.']['tx_pagebrowse_pi1.'];
	// Modify this configuration
	$conf += array(
		'pageParameterName' => $this->prefixId . '|page',
		'numberOfPages' => $numberOfPages,
	);
	// Get page browser
	$cObj = t3lib_div::makeInstance('tslib_cObj');
	/* @var $cObj tslib_cObj */
	$cObj->start(array(), '');
	return $cObj->cObjGetSingle('USER', $conf);
}
</pre>

See the manual at doc/manual.sxw for more information and a list of all available options.

## Notes

This extension was built in "pibase" times and it does not support recent TYPO3 technologies (such as Extbase or FLUID). However it is still the most lightweight and simple page browser for TYPO3 around.