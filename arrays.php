<?php
$_POST['name'] = 'pratik';
$_POST['information']['age']['years']=18;

print_r($_POST??'');
?>
<script>
    const post = <?= json_encode($_POST, JSON_UNESCAPED_UNICODE) ?>;
    console.log(post);
    
</script>