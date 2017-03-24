<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('news/create'); ?>
<table>
    <tr>
        <td><label for="cname">Complete name</label></td>
        <td><input type="input" name="cname" size="50"></td>
    </tr>
    <tr>
        <td><label for="nname">Nickname</label></td>
        <td><textarea name="nname" rows="1" cols="20"></textarea></td>
    </tr>
    <tr>
        <td><label for="email">Email Address</label></td>
        <td><input type="input" name="email" size="50"></td>
    </tr>
    <tr>
        <td><label for="home_address">Home Address</label></td>
        <td><textarea name="home_address" rows="10" cols="40"></textarea></td>
    </tr>
    <tr>
        <td><label for="gender">Gender</label></td>
        <td><textarea name="gender" rows="1" cols="10"></textarea></td>
    </tr>
    <tr>
        <td><label for="cpnumber">Cellphone Number</label></td>
        <td><textarea name="cpnumber" rows="1" cols="30"></textarea></td>
    </tr>
    <tr>
        <td><label for="comments">Comments</label></td>
        <td><textarea name="comments" rows="10" cols="40"></textarea></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="submit" value="Create news item" /></td>
    </tr>
</table>
</form>