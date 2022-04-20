<footer class="footer center mt-auto">
    <div class="container margin-top-medium">



        <div class="row  from-right">

            <div class="col-sm-12 col-md-4 mt-5 mb-5 border-title center ">
                <h2 class="">Reha Squad</h2>
                <ul class="list teleadr">
                    <li><i class="fas fa-map-marker-alt"></i> Morenowe Wzgórze 26/1, 80-283 Gdańsk</li>
                    <li><a href="tel:600086251" class="fas fa-phone"><span> 600-086-251</span></a></li>
                    <li>
                        <a href="https://www.facebook.com/rehasquad" class="fab fa-facebook-square"></a>
                        <a href="https://www.instagram.com/rehasquad/" class="fab fa-instagram"></a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-12 col-md-4 mt-5 mb-5 border-title center ">
                <h2 class="">Nawigacja</h2>
                <ul class="list">
                    <li class=""><a href="<?php echo get_home_url() ?>">Start</a>
                    <li>
                    <li class=""><a href="<?php echo get_home_url() ?>/On">Ziemowit Kabuła</a>
                    <li>
                    <li class=""><a href="<?php echo get_home_url() ?>/Ona">Katarzyna Kabuła</a>
                    <li>
                    <li class=""><a href="<?php echo get_home_url() ?>/oferta">Oferta</a></li>
                    <li class=""><a href="<?php echo get_home_url() ?>/cennik">Cennik</a></li>
                    <li class=""><a href="<?php echo get_home_url() ?>/kontakt">Kontakt</a></li>
                </ul>
            </div>
            <div class="col-sm-12 col-md-4 mt-5 mb-5 border-title center ">
                <h2>Godziny Pracy</h2>
                <span class="kontakt-notka">Godziny otwarcia gabinetu są zmienne. W celu rezerwacji terminu zapraszamy do skorzystania z platformy medfile. Reszta informacji na temat godzin otwarcia w zakładce kontakt. </span>
                
            </div>
        </div>
    </div>

    </div>
</footer>

<?php
wp_footer();
?>
<?php

$meta_query = array(
    'relation' => 'AND',
    array(
        'key' => 'start',
        'value' => date('Ymd'),
        'type' => 'DATE',
        'compare' => '<='
    ),
    array(
        'key' => 'koniec',
        'value' => date('Ymd'),
        'type' => 'DATE',
        'compare' => '>='
    )
);

$args = array(
    "post_type" => 'komunikat',
    "meta_query" => $meta_query
);
$modalIds = array();
$komunikaty = new WP_Query($args);

if ($komunikaty->have_posts()) {
    while ($komunikaty->have_posts()) : $komunikaty->the_post();
        render_modal(get_the_title(), get_the_content(), get_the_ID());
        array_push($modalIds, get_the_ID());
    endwhile;
}



if (count($modalIds)  > 0) {
    echo '<script>$(document).ready(function(){';
    renderScriptToOpenModal($modalIds);
    echo '});</script>';
}


function render_modal($title, $content, $id)
{


    echo '    <div class="modal fade" id="modal' . $id . '" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">' . $title . '</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ' . $content . '
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>                
            </div>
        </div>
    </div>
</div>';
}
function renderScriptToOpenModal($idsArray)
{
    foreach ($idsArray as &$value) {
        echo '
            $("#modal' . $value . '").modal("show");
            ';
    }
}

?>

</body>

</html>