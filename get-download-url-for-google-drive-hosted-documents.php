<?php
    // Does not depend on Drive SDK
    // but can be used with Drive SDK such as using the Drive SDK to get the ID.
    // This code will generate direct download links for files in Google Drive.
    public static function getDownloadLink($file) {
        $fileID = $file->google_id;

        switch($file->mime_type) {
            case 'application/vnd.google-apps.document':
                return 'https://docs.google.com/document/d/' . $fileID . '/export?format=doc';
            case 'application/vnd.google-apps.spreadsheet':
                return 'https://docs.google.com/spreadsheets/d/' . $fileID . '/export?format=xlsx';
            case 'application/vnd.google-apps.presentation':
                return 'https://docs.google.com/presentation/d/' . $fileID . '/export?format=pptx';
            case 'application/vnd.google-apps.map':
                return 'https://www.google.com/maps/d/' . $fileID . '/export?format=kml';
            case 'application/vnd.google-apps.folder':
            case 'application/vnd.google-apps.folder+shared':
                return false;
            default:
                return 'https://drive.google.com/uc?export=download&confirm=no_antivirus&id=' . $fileID;
        }
    }
    // Feel free to add more mime type cases as you see fit.
    // If using the Drive SDK to get fileID, your array map would include something like 'downloadUrl' => $this->getDownloadLink($file),
    // then you could use some js to append it on a frontend somewhere by calling file.downloadUrl as a short example.
    // jQuery example is provided below for calling it on a frontend
?>

<script>
  jQuery(document).ready(function($) {
  	function generateGSearchFileResults(file, isSearchResults = false) {
		jQuery('<li>')
			.appendTo('.YOUR_DIV_CLASS') // CHANGE TO YOUR DIV CLASS
			.append(isSearchResults ? '' : jQuery('<div/>')
				.append(!file.downloadUrl ? '' :
					jQuery('<a href="' + file.downloadUrl + '" target="_blank" class="pull-right"><i class="fa fa-download" aria-hidden="true"></i></a>')
						.addClass('gsearch_result_download')
				)
      });
</script>
