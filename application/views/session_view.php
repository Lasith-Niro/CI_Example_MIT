<!DOCTYPE html> 
    <html lang = "en">
    
    <head> 
        <meta charset = "utf-8"> 
        <title>CodeIgniter Session Example</title> 
    </head>
        
    <body> 
        Welcome <?php echo $this->session->userdata('name'); ?> 
        <br> 
        <a href = 'http://localhost/my-site/index.php/sessionex/unset_session_data'>
            Click Here</a> to unset session data. 
    </body>
        
</html>