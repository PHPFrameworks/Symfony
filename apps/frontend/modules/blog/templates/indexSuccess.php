<h1>Blog entrys List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Title</th>
      <th>Body</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($blog_entrys as $blog_entry): ?>
    <tr>
      <td><a href="<?php echo url_for('blog/show?id='.$blog_entry->getId()) ?>"><?php echo $blog_entry->getId() ?></a></td>
      <td><?php echo $blog_entry->getTitle() ?></td>
      <td><?php echo $blog_entry->getBody() ?></td>
      <td><?php 
      	foreach($blog_entry->getComments() as $comment){
      		print $comment->getBody();
      	}
      ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('blog/new') ?>">New</a>
