<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('news/edit/'.$news_item['id']); ?>
<table>
    <tr>
        <td><label for="cname">Complete name</label></td>
        <td><input type="input" name="title" size="50" value="<?php echo $news_item['cname'] ?>" /></td>
    </tr>
    <tr>
        <td><label for="nname">Nickname</label></td>
        <td><textarea name="text" rows="1" cols="10"><?php echo $news_item['nname'] ?></textarea></td>
    </tr>
    <tr>
        <td><label for="email">Email Address</label></td>
        <td><input type="input" name="title" size="50" value="<?php echo $news_item['email'] ?>" /></td>
    </tr>
    <tr>
        <td><label for="home_address">Home Address</label></td>
        <td><textarea name="text" rows="10" cols="40"><?php echo $news_item['home_address'] ?></textarea></td>
    </tr>
    <tr>
        <td><label for="gender">Gender</label></td>
        <td><textarea name="text" rows="1" cols="10"><?php echo $news_item['gender'] ?></textarea></td>
    </tr>
    <tr>
        <td><label for="cpnumber">Cellphone Number</label></td>
        <td><textarea name="text" rows="1" cols="20"><?php echo $news_item['cpnumber'] ?></textarea></td>
    </tr>
    <tr>
        <td><label for="comments">Comments</label></td>
        <td><textarea name="text" rows="10" cols="40"><?php echo $news_item['comments'] ?></textarea></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="submit" value="Edit news item" /></td>
    </tr>
</table>
</form>