<button class="cart-toggle hvr-bounce-in" data-toggle="modal" data-target="#myModal">
  <span class="inner">
    <i class="fa fa-shopping-basket fa-2x" aria-hidden="true"></i>
</span>
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title" id="myModalLabel">Faça Seu Pedido</h2>
                <div class="modal-subtitle">
                    Seu pedido será respondido o mais breve possivel.
                </div>
            </div>
            <div class="modal-body">
               
                    <?php echo do_shortcode('[contact-form-7 id="77" title="Contact form 1"]' );; ?>
              
            </div>
        </div>
    </div>
</div>