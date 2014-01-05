Gallery Page Template
=====================

A template which can be used in wordpress for image gallery pages. 

The images are loaded in and the left and right sides are clickable for navigation.

It uses the `get_the_title()` function in wordpress to get the gallery name so you will need to name each gallery folder the same as your gallery pages.

I have added some CSS to this however you will most likely be better off using your own to get everything lined up, one thing I would suggest is setting a background colour to the buttons while trying to get everything positioned correctly as this makes it a lot easier :)

Few places need edited before use:

You need to add the path to the directory which contains the folders which hold each galleries images, these should be named the same as your page names in wordpress

> Line 16 - `if ($handle = opendir('path to directory'.$galleryName.'/')){`


You need to add the path to the galleries folder again, please note this is what it would be if browsing to it not the path on the server.

> Line 47, 69 and 85 - `path to gallery directory"+galleryName+"/"+myImages[counter]+"")`

You need to add the path to a loader image such as a small spinner GIF

> Line 105 - `<img id="loader" src="path to loader image" />`

This is being used for the gallery pages on http://www.markmackayphotography.com/
