<?php
      // Replace $YOUR_FUNCTION_THAT_FETCHES_FULL_URL; with your data point that pulls a full Google Drive URL.
      // This code example uses a regular expression to redact all of the URL except for the Doc/Folder ID which
      //can be used for other functions in an app using the Drive SDK or not.
              $doc_url = $YOUR_FUNCTION_THAT_CONTAINS_FULL_URL;
              $doc = explode('/', preg_replace('/(.*?)\?authuser=(.*?)&usp=drive_fs/', '$1', $doc_url));
      // EASY PEASY! Works with URLs of all types including but not limited to Google Drive for Desktop share links, web share links, and edit links.
      // Then just echo or print $doc as needed where you need the file/folder ID to be placed in your app's code.
?>
