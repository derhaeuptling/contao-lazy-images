# contao-lazy-images
Contao Plugin for loading images with LazySizes.js while preventing reflow in the browser, whenever an image is loaded.

To prevent the reflow a transparent data:image placeholder with the correct aspect ratio is inlined.

## why preventing the reflow
![Alt text](../screenshot/image.jpg?raw=true)

while the reflow is ugly and consumes computing power it also prevents issues with JavaScript layout solutions.

JS libs like Masonry or GreenSock measure dimensions and than layout elements.
If anything is changing layout afterwards, like an image that got (lazy)loaded, the prebuild layout gets messed up.
In such a case the JS functions has to be updated any time an image is loaded.

Inlining a tiny placeholder prevents this issue from happening upfront.


## LazySizes
[LazySizes](https://github.com/aFarkas/lazysizes) is a high performance and SEO friendly lazy loader for images (responsive and normal), iframes and more, that detects any visibility changes triggered through user interaction, CSS or JavaScript without configuration.
