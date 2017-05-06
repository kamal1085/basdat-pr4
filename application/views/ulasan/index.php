<?php if (!$this) {
    exit(header('HTTP/1.0 403 Forbidden'));
} ?>

<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Komentar</h3>
                </div>
                <div class="panel-body">
                    <form accept-charset="UTF-8" role="form">
                        <fieldset>
                            <div class="form-group">
                                <label for="kode_produk" class="control-label">Kode Produk</label>
                                <input class="form-control" placeholder="Kode Produk" name="kode_produk" type="text"
                                       required>
                            </div>
                            <div class="form-group">
                                <label for="rating" class="control-label">Rating</label>
                                <br>
                                <div class="stars">
                                  <form action="">
                                    <input class="star star-5" id="star-5" type="radio" name="star" value="1"/>
                                    <label class="star star-5" for="star-5"></label>
                                    <input class="star star-4" id="star-4" type="radio" name="star" value="2" />
                                    <label class="star star-4" for="star-4"></label>
                                    <input class="star star-3" id="star-3" type="radio" name="star" value="3" />
                                    <label class="star star-3" for="star-3"></label>
                                    <input class="star star-2" id="star-2" type="radio" name="star" value="4" />
                                    <label class="star star-2" for="star-2"></label>
                                    <input class="star star-1" id="star-1" type="radio" name="star" value="5" />
                                    <label class="star star-1" for="star-1"></label>
                                  </form>
                                </div>

                                
                                <!-- <input class="form-control" placeholder="Rating" name="rating" type="text"                                     required> -->
                            </div>
                            <div class="form-group">
                                <label for="komentar" class="control-label">Komentar</label>
                               <textarea class="form-control" placeholder="Enter comment here..." name="komentar" required></textarea>
                            </div>
                        </fieldset>
                        <hr/>
                        <input class="btn btn-lg btn-primary btn-block" type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    
     $( '[data-role="ratingbar"]' )
    .ratingbar()
    .click(function() {

     // Grab value
     alert( $( this ).attr( 'data-value' ) );

     return false;
});
</script>

