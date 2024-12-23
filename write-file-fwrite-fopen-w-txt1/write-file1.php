<?php
$file =fopen('demo-content3.txt','w');

$text ="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id augue vitae orci lobortis vestibulum. Nam cursus faucibus est tincidunt lobortis. Ut bibendum erat vel augue tempus, non euismod tellus tempus. Quisque malesuada condimentum velit, vel gravida ex malesuada non. Quisque vel vestibulum lorem. Integer eu nisl libero. Fusce vel sagittis sem. Fusce viverra accumsan magna, in interdum mauris semper sit amet. Praesent blandit arcu tortor, sagittis tristique libero auctor sit amet. Pellentesque elit diam, semper et blandit ut, interdum quis lacus. Curabitur felis sem, feugiat eu nulla quis, rutrum ultrices tellus. Maecenas malesuada quam in erat pharetra, et dictum lectus mollis. Nullam suscipit placerat sagittis. Proin ut lacus a dui viverra semper. Etiam nec posuere nisl.

Sed hendrerit commodo quam et rhoncus. Integer turpis neque, viverra id risus eu, fermentum luctus tellus. Nam luctus vestibulum enim, egestas rutrum mi pharetra at. Quisque in arcu vel libero fermentum tincidunt eget a nisl. Curabitur sed elit vitae nisi mattis elementum in et lorem. In hac habitasse platea dictumst. Phasellus iaculis velit quam, ac euismod eros bibendum sed. Curabitur elementum, justo vitae condimentum imperdiet, tellus erat finibus leo, quis semper lorem mauris malesuada augue.";
fwrite($file,$text);
?>