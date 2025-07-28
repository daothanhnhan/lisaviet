<link rel="stylesheet" href="/plugin/fonts/themify/themify-icons.css">
<script type="text/javascript">
    function load_url (id, name, price) {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
           // document.getElementById("demo").innerHTML = this.responseText;
           // alert(this.responseText);
           // alert('thanh cong.');
           // window.location.href = "/gio-hang";
           if (confirm('Thêm sản phẩm thành công, bạn có muốn thanh toán luôn không')) {
                  window.location = '/gio-hang';
              }else{
                  location.reload();
              }  
          }
        };
        xhttp.open("POST", "/functions/ajax-add-cart.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("product_id="+id+"&product_name="+name+"&product_price="+price+"&product_quantity=1&action=add");
        xhttp.send();        
    }
</script>
<footer class="site-footer_lisaviet footer-default_lisaviet">
    <div class="footer-main-content_lisaviet">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="footer-main-content_lisaviet-element">
                        <aside class="widget-footer">
                            <h3 class="widget-title-footer-lisaviet">GIỚI THIỆU</h3>
                            <div class="widget-content">
                                <div class="footer-link-lisaviet">
                                    <ul>
                                        <?= $rowConfig['content_home7'] ?>
                                    </ul>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-main-content_lisaviet-element">
                        <aside class="widget-footer">
                            <h3 class="widget-title-footer-lisaviet">Thông tin liên hệ</h3>
                            <div class="widget-content">
                                <?php include DIR_CONTACT."MS_CONTACT_LISAVIET_0004.php";?>
                            </div>
                        </aside>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="footer-main-content_lisaviet-element">
                        <aside class="widget-footer">
                            <h3 class="widget-title-footer-lisaviet">Thông tin</h3>
                            <div class="widget-content">
                                <div class="footer-link-lisaviet">
                                    <ul>
                                        <?= $rowConfig['content_home7'] ?>
                                    </ul>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-main-content_lisaviet-element">
                        <aside class="widget-footer">
                            <h3 class="widget-title-footer-lisaviet">BẢN ĐỒ CHỈ ĐƯỜNG</h3>
                            <div class="widget-content">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14899.008602994956!2d105.80117!3d21.00257!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135aca36d40d79d%3A0x71723c13013d064f!2zMzcgxJDGsOG7nW5nIEzDqiBWxINuIEzGsMahbmcsIE5ow6JuIENow61uaCwgVGhhbmggWHXDom4sIEjDoCBO4buZaSwgVmlldG5hbQ!5e0!3m2!1sen!2sus!4v1534144527365" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area_lisaviet">
        <div class="container">
            <div class="copyright-content_lisaviet">
                <p class="copyright-text_lisaviet">© Copyright 2017. All rights reserved. Design by Goldbridge</p>
            </div>
        </div>
    </div>
</footer>