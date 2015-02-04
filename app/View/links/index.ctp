<h1>Enlaces disponibles</h1>
<?php foreach ($links as $link): ?>
 
<a href="<?php echo $link['Link']['url']; ?>"><?php echo $link['Link']['title']; ?></a>
 
Añadido: <?php echo $link['Link']['created']; ?>
<?php endforeach; ?>
 
<?php echo $html->link('Añadir enlace', '/links/add');?>