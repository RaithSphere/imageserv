<?

use PHPImageWorkshop\ImageWorkshop; // Use the namespace of ImageWorkshop
 
require_once('ImageWorkshop.php'); // Be sure of the path to the class

$image = $_GET['image'];

$path = "$image";

$norwayLayer = ImageWorkshop::initFromPath('/home/raith/images/images/'.$path);
 
// This is the text layer
//$textLayer = ImageWorkshop::initTextLayer('© RaithSphe.re', '/home/raith/images/mark/arial.ttf', 11, 'ffffff', 0);

$watermarkLayer = ImageWorkshop::initFromPath('/home/raith/images/mark/watermark.png');
 
// We add the text layer 12px from the Left and 12px from the Bottom ("LB") of the norway layer:
$norwayLayer->addLayerOnTop($watermarkLayer, 5, 5, "LB");
 
$image = $norwayLayer->getResult();
header('Content-type: image/jpeg');
imagejpeg($image, null, 95); // We chose to show a JPG with a quality of 95%
exit;

?>