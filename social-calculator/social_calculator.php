<?php

/**
 * Plugin Name: Social Calculator
 * Plugin URI: https://www.mywebsite.com/calculator
 * Description: The very first plugin that I have ever created.
 * Version: 1.0
 * Author: Atul Sharma
 * Author URI: https://localhost/myproject/
 */

use PrestoPlayer\Integrations\Tutor\Tutor;

include(plugin_dir_path(__FILE__) . 'fpdf.php');
// include( plugin_dir_path( __FILE__ ).'fpdf/fpdf.php');
if (isset($_POST['submit'])) {

    $E_S = $_POST['Employee_Size'];
    $S_R = 1000;
    $C_F = $_POST['Followers'];
    $C_R = $_POST['Combined_Reach'];
    $P_P = $_POST['Percent_Par'];
    $T_A_S = $_POST['TOTAL_AD_SPEND'];
    $C_P_I = $_POST['COST_PER_IMPRESSION'];
    $A_I = $_POST['AD_IMPRESSIONS'];
    $T_E = $_POST['TOTAL_EARNED'];
    $T_G = $_POST['TOTAL_GAINED'];
    $A_D = $_POST['AVG_DEAL'];
    $O_D = $_POST['OF_DEAL'];
    ob_end_clean();
    if ($C_R && $C_P_I && $T_E && $A_D) {
        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 20);
        $pdf->SetTextColor(87, 154, 246);
        $pdf->Cell($fpdf->w, 10, "Employee Advocacy Results\n\n", 0, 1, "C");   
        $pdf->SetAutoPageBreak(true);
        $pdf->SetLeftMargin(40);
        $pdf->SetTextColor(0, 0, 0);
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(65, 10, 'Employee_Size', 1, 0);
        $pdf->Cell(65, 10, $E_S, 1, 1);
        $pdf->Cell(65, 10, 'Social_Reach', 1, 0);
        $pdf->Cell(65, 10, $S_R, 1, 1);
        $pdf->Cell(65, 10, 'Followers', 1, 0);
        $pdf->Cell(65, 10, $C_F, 1, 1);
        $pdf->Cell(65, 10, 'Combined_Reach', 1, 0);
        $pdf->Cell(65, 10, $C_R, 1, 1);
        $pdf->Cell(65, 10, 'Percent_Par', 1, 0);
        $pdf->Cell(65, 10, $P_P, 1, 1);
        $pdf->Cell(65, 10, 'TOTAL_AD_SPEND', 1, 0);
        $pdf->Cell(65, 10, $T_A_S, 1, 1);
        $pdf->Cell(65, 10, 'COST_PER_IMPRESSION', 1, 0);
        $pdf->Cell(65, 10, $C_P_I, 1, 1);
        $pdf->Cell(65, 10, 'AD_IMPRESSIONS', 1, 0);
        $pdf->Cell(65, 10, $A_I, 1, 1);
        $pdf->Cell(65, 10, 'TOTAL_EARNED', 1, 0);
        $pdf->Cell(65, 10, $T_E, 1, 1);
        $pdf->Cell(65, 10, 'TOTAL_$_GAINED', 1, 0);
        $pdf->Cell(65, 10, $T_G, 1, 1);
        $pdf->Cell(65, 10, 'AVG_DEAL', 1, 0);
        $pdf->Cell(65, 10, $A_D, 1, 1);
        $pdf->Cell(65, 10, 'OF_DEAL', 1, 0);
        $pdf->Cell(65, 10, $O_D, 1, 1);
        $pdf->Output();
    }
}
function mydata1()
{
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo site_url(); ?>/wp-content/plugins/social-calculator/social_calculator.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script type='text/javascript' src="<?php echo site_url(); ?>/wp-content/plugins/social-calculator/social_calculator.js"></script>
        <title>Document</title>
    </head>

    <body>
        <form method="post" target="_blank" id="myForm">
            <div class="info-cols">
                <div class="info_col_left">
                    <div class="card" class="form_box">
                        <div class="form-cont">
                            <label class="callabel" for="Employee">EMPLOYEE SIZE</label>
                            <input type="text" autocomplete="off" name="Employee_Size" value="" class="calinput" placeholder="Enter Number" id="col1" oninput="this.value=this.value.replace(/[^0-9]/g,'');">
                        </div>
                    </div>
                    <div class="card" class="form_box">
                        <div class="form-cont">
                            <label class="callabel" for="Employee">COMPANY FOLLOWERS</label><br>
                            <input type="text" autocomplete="off" name="Followers" value="" class="calinput" placeholder="Enter Number" id="col3" oninput="this.value=this.value.replace(/[^0-9]/g,'');">
                        </div>
                    </div>
                    <div class="card" class="form_box">
                        <div class="form-cont">
                            <label class="callabel" for="Employee">PERCENT EMPLOYEE PARTICIPATION</label><br>
                            <input type="text" autocomplete="off" name="Percent_Par" value="" class="calinput" placeholder="Enter Number" id="col5" oninput="this.value=this.value.replace(/[^0-9]/g,'');">
                        </div>
                    </div>
                    <div class="card" class="form_box">
                        <div class="form-cont">
                            <label class="callabel" for="Employee">TOTAL AD SPEND</label><br>
                            <input type="text" autocomplete="off" value="" name="TOTAL_AD_SPEND" class="calinput" placeholder="Enter Number" id="col6" oninput="this.value=this.value.replace(/[^0-9]/g,'');">
                        </div>

                    </div>
                    <div class="card" class="form_box">
                        <div class="form-cont">
                            <label class="callabel" for="Employee">AD IMPRESSIONS</label><br>
                            <input type="text" autocomplete="off" value="" class="calinput" name="AD_IMPRESSIONS" placeholder="Enter Number" id="col8" oninput="this.value=this.value.replace(/[^0-9]/g,'');">
                        </div>

                    </div>
                    <div class="card" class="form_box">
                        <div class="form-cont"> <label class="callabel" for="Employee">TOTAL $ GAINED</label><br>
                            <input type="text" autocomplete="off" value="" class="calinput" name="TOTAL_GAINED" placeholder="Enter Number" id="col10" oninput="this.value=this.value.replace(/[^0-9]/g,'');">
                        </div>

                    </div>

                    <div class="card" class="form_box">
                        <div class="form-cont">
                            <label class="callabel" for="Employee"># OF DEALS</label>
                            <input type="text" autocomplete="off" value="" class="calinput" name="OF_DEAL" placeholder="Enter Number" id="col12" oninput="this.value=this.value.replace(/[^0-9]/g,'');">
                        </div>

                    </div>
                </div>
                <div class="info_col_right">
                    <div id="cardresult">
                        <h1>Employee Advocacy Results</h1>
                        <div>
                            <p>Your Potential Results By Activating Employee Advocacy at Your Organization</p>
                        </div>
                        <div>
                            <h3>Employee Social Reach</h3>
                            <input type="text" autocomplete="off" name="Social_Reach" value="1000" class="calinput" readonly id="col2">
                        </div>
                        <div>
                            <h3>Combined Social Reach</h3>
                            <input type="text" autocomplete="off" name="Combined_Reach" value="0" class="calinput" placeholder="COMBINED SOCIAL REACH" id="col4" readonly>
                        </div>
                        <div>
                            <h3>Cost Per Impression</h3>
                            <input type="text" autocomplete="off" value="0" class="calinput" name="COST_PER_IMPRESSION" placeholder="COST PER IMPRESSION" id="col7" readonly>
                        </div>
                        <div>
                            <h3>Total Earned Media Value</h3>
                            <input type="text" autocomplete="off" value="0" class="calinput" name="TOTAL_EARNED" placeholder="TOTAL EARNED MEDIA VALUE" id="col9" readonly>
                        </div>
                        <div>
                            <h3>Average Deal Size</h3>
                            <input type="text" autocomplete="off" class="calinput" data-decimal="5"  value="0" name="AVG_DEAL" placeholder="AVERAGE DEAL SIZE" readonly id="col11">
                        </div>
                        <div class="result_btn">
                            <button type="submit" name="submit" id="caldownload" class ="caldownload" >Get Your Results</button>
                        </div>
                    </div>

                </div>
            </div>
        </form>
    </body>

    </html>

<?php
}
$page_obj = get_page_by_title('social-calculator', 'OBJECT', 'page');
if (empty($page_obj)) {

    $page_args = array(
        'comment_status' => 'close',
        'ping_status'    => 'close',
        'post_author'    => 1,
        'post_title'     => ucwords('social-calculator'),
        'post_name'      => strtolower(str_replace(' ', '-', trim('social-calculator'))),
        'post_status'    => 'publish',
        'post_content'   => do_shortcode('[social-calculator]'),
        'post_type'      => 'page',
        'post_parent'    => 'id_of_the_parent_page_if_it_available'
    );
    $page_id = wp_insert_post($page_args);
}

add_shortcode('social-calculator', 'mydata1');
function deactivate_plugin()
{
    $page = get_page_by_path('/social-calculator/');
    if ($page) {
        wp_delete_post($page->ID, true);
    }
}
register_deactivation_hook(__FILE__, 'deactivate_plugin');
?>