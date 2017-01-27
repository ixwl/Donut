<?php
    $header_left_text = qa_opt( 'donut_top_bar_left_text' );
    $header_right_text = qa_opt( 'donut_top_bar_right_text' );
    $social_links = donut_generate_social_links();
?>
<header id="top-header">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="left-part pull-left">
                    
                    <?php if ( !empty( $header_left_text ) ): ?>
                        <?php echo $header_left_text ?>
                    <?php endif ?>

                </div> <!--  End of left part-->
                <div class="right-part pull-right hidden-xs">
                    
                    <?php if ( !empty( $header_right_text ) ): ?>
                        <?php echo $header_right_text ?>
                    <?php endif ?>

                    <?php if ( qa_opt( 'donut_show_top_social_icons' ) ): ?>
                        
                        <div class="top-html-block">
                            <div class="social-links">
                                
                                <?php foreach ( $social_links as $key => $value ): ?>
                                    <?php
                                    if ( !empty( $value ) ) {
                                        echo donut_get_social_link( $value, true ) . "\n";
                                    }
                                    ?>
                                <?php endforeach ?>

                            </div> <!--  End social links -->
                        </div> <!--  End of top html block -->

                    <?php endif ?>

                </div> <!--  End of right-part-->
            </div> <!--  End of col wrapper-->
        </div> <!--  End of Row-->
    </div> <!--  End of container-->
</header> <!--  End of top-header-->