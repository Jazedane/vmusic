<form  method="post" name="searchdeals">
    <h5 class="display-5 text-left py-3">Find a favourite vehicle </h5>
<div class="form-group select">
    <select name="manufacturer_code" id="manufacturer_code" class="form-control" onchange="getState(this.value);">
    <option selected>Select Brand</option>
<?php $ret="SELECT * FROM tbl_manufacturer";
        $query= $dbh -> prepare($ret);
        $query-> execute();
        $results = $query -> fetchAll(PDO::FETCH_OBJ);
        if($query -> rowCount() > 0)
        {
        foreach($results as $result)
    {
?>
<option value="<?php echo htmlentities($result->manufacturer_code);?>"><?php echo htmlentities($result->manufacturer_name);?></option>
<?php }} ?>
</select>
</div>
    <div class="form-group select">
        <select name="model_code" id="model_code" class="form-control">
        <option selected>Select Model</option>
        </select>
</div>
<div class="form-group">
    <button type="submit" name="searchdeals" value="Filter" class="btn btn-block btn-warning"><i class="fa fa-search" aria-hidden="true"></i> Search Vehicle</button>
</div>
</form>
