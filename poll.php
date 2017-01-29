<script src="http://code.jquery.com/jquery-2.1.1.js"></script>
<script>
    setInterval(function(){$.ajax({
        url: "http://www.eska.pl/indexajax.php?action=NewsMultimediaPoll&start=increment",
        type: "POST",
        data: "cmm=75735&index=5&count=9&version=v4",
    });}, 300)


</script>
