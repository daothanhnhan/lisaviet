<div class="gb-nav-search-lisaviet">
    <a href="javascript:"><i class="fa fa-search" aria-hidden="true"></i></a>
    <form action="/fa-search">
        <input type="text" name="" placeholder="Tìm kiếm">
    </form>
</div>
<script>
$(document).ready(function(){
    $(".gb-nav-search-lisaviet > a").click(function(){
        $(this).next().children().fadeToggle(800).focus();
    });
});
</script>