
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<!--<link href="<?php echo base_url('/assets/css/bootstrap.min.css'); ?>" type="text/css" rel="stylesheet" />-->
<link href="../../../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="../../../assets/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />

<script type="text/jscript" src="../../../assets/js/bootstrap.min.js" >
</script>




<title>todo</title>
</head>

<body>

   
    
    <form method="post" action= "<?php echo (site_url('/todo')) ?>">
  
    <label>Name</label>
    <input class="input-xxlarge" type="text" name="task"  placeholder="Some text " size="50" >

    <span class="help-block"></span>
    </label>
    <input type="submit" name="submit" class="btn"></button>
    </form>
   
   <h4>My Todo List</h4>
   
        
   	
	 	 
			
</body>
</html>
