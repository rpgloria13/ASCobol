<h2><?php echo $title; ?></h2>

<table border='1' cellpadding='4'>
    <tr>
        <td><strong>Complete name</strong></td>
        <td><strong>Nickname</strong></td>
        <td><strong>Email Address</strong></td>
        <td><strong>Home Address</strong></td>
        <td><strong>Gender</strong></td>
        <td><strong>Cellphone number</strong></td>
        <td><strong>Comments</strong></td>
        <td><strong>Actions</strong></td>

    </tr>
    <?php foreach ($news as $news_item): ?>
        <tr>
            <td><?php echo $news_item['cname']; ?></td>
            <td><?php echo $news_item['nname']; ?></td>
            <td><?php echo $news_item['email']; ?></td>
            <td><?php echo $news_item['home_address']; ?></td>
            <td><?php echo $news_item['gender']; ?></td>
            <td><?php echo $news_item['cpnumber']; ?></td>
            <td><?php echo $news_item['comments']; ?></td>
            <td>
                <!--<a href="<?php echo site_url('news/'.$news_item['id']); ?>">View</a> |-->
                <a href="<?php echo site_url('news/edit/'.$news_item['id']); ?>">Edit</a> |
                <a href="<?php echo site_url('news/delete/'.$news_item['id']); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>