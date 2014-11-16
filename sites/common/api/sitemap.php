<?php


/**
 * This is a public API call to publish a sitemap
 * @uri /sitemap/publish
 */
class SiteMapResource extends Tonic\Resource {

    /**
     * @method POST
     */
    function publish() {

        $siteUniqId = SITE_UNIQ_ID;
		$root = '../../../';
		// publish sitemap for page types
		Publish::PublishSiteMap($siteUniqId, $root);
		// return a json response
		return new Tonic\Response(Tonic\Response::OK); 

	}
}

?>
