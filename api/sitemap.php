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

        parse_str($this->request->data, $request); // parse request
        $siteUniqId = $request['siteUniqId'];

		// publish sitemap for page types
		Publish::PublishSiteMap($siteUniqId);
		// return a json response
		return new Tonic\Response(Tonic\Response::OK); 

	}
}

?>
