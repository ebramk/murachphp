<xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
	"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<title>index</title>

	</head>

	<body>
	<ul>
	<?php foreach ($products as $product) : ?>
		<li><a href="?product_id=<?php echo $product['productID'] ?>"><?php echo $product['productName']; ?></a></li>	
	<?php endforeach; ?>
	</ul>
	</body>
</html>
