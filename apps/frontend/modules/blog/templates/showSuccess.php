<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $blog_entry->getId() ?></td>
    </tr>
    <tr>
      <th>Title:</th>
      <td><?php echo $blog_entry->getTitle() ?></td>
    </tr>
    <tr>
      <th>Body:</th>
      <td><?php echo $blog_entry->getBody() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('blog/edit?id='.$blog_entry->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('blog/index') ?>">List</a>
