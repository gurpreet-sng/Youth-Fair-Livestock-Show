<?php 
	include "./includes/db_include.php";
	$branch_id = $_SESSION['branch_id'];
  //ini_set('display_errors', 1);
	$uid = $_SESSION['uid'];
  if(isset($_GET['id']) && $_GET['id'] > 0){
    $id = $_GET['id'];
    $edit = query_by_id("SELECT * FROM form WHERE id='".$id."'",[],$conn)[0];
    
  }
if(isset($_POST['final_submit'])){
  $full_name                          = $_POST['full_name'];
  $dob                                = $_POST['dob'];
  $cont                               = $_POST['cont'];
  $email                              = $_POST['email'];
  $city                               = $_POST['city'];
  $state                              = $_POST['state'];
  $country                            = $_POST['country'];
  $marital_status                     = $_POST['marital_status'];
  $occupation                         = $_POST['occupation'];
  $gut_health                         = $_POST['gut_health'];
  $gut_health1                        = $_POST['gut_health1'];
  $thyroid_disorders                  = $_POST['thyroid_disorders'];
  $thyroid_disorders1                 = $_POST['thyroid_disorders1'];
  $auto_tmmunity                      = $_POST['auto_tmmunity'];
  $auto_tmmunity1                     = $_POST['auto_tmmunity1'];
  $chronic_inflammation               = $_POST['chronic_inflammation'];
  $chronic_inflammation1              = $_POST['chronic_inflammation1'];
  $obesity_overweight                 = $_POST['obesity_overweight'];
  $obesity_overweight1                = $_POST['obesity_overweight1'];
  $diabetes_insulin_resistance        = $_POST['diabetes_insulin_resistance'];
  $diabetes_insulin_resistance1       = $_POST['diabetes_insulin_resistance1'];
  $fatty_liver                        = $_POST['fatty_liver'];
  $fatty_liver1                       = $_POST['fatty_liver1'];
  $pcos_pcod                          = $_POST['pcos_pcod'];
  $pcos_pcod1                         = $_POST['pcos_pcod1'];
  $o_hormonal_issues                  = $_POST['o_hormonal_issues'];
  $o_hormonal_issues1                 = $_POST['o_hormonal_issues1'];
  $hypertension_high_blood_pressure   = $_POST['hypertension_high_blood_pressure'];
  $hypertension_high_blood_pressure1  = $_POST['hypertension_high_blood_pressure1'];
  $nasal_allergy                      = $_POST['nasal_allergy'];
  $nasal_allergy1                     = $_POST['nasal_allergy1'];
  $general_detox                      = $_POST['general_detox'];
  $general_detox1                     = $_POST['general_detox1'];
  $others                             = $_POST['others'];
  $medications                        = $_POST['medications'];
  $consultation_type                  = $_POST['consultation_type'];
  $schedule_when                      = $_POST['schedule_when'];
  $procedure_visits                   = $_POST['procedure_visits'];
  $diet_compliance                    = $_POST['diet_compliance'];
  $recovery_timeline                  = $_POST['recovery_timeline'];
  $antecedents                        = $_POST['antecedents'];
  $triggering_events                  = $_POST['triggering_events'];
  $mediators_perpetuators             = $_POST['mediators_perpetuators'];
  $assimilation                       = $_POST['assimilation'];
  $mental                             = $_POST['mental'];
  $emotional                          = $_POST['emotional'];
  $spiritual                          = $_POST['spiritual'];
  $defense_repair                     = $_POST['defense_repair'];
  $structural_integrity               = $_POST['structural_integrity'];
  $energy                             = $_POST['energy'];
  $communication                      = $_POST['communication'];
  $biotransformation                  = $_POST['biotransformation'];
  $transport                          = $_POST['transport'];
  $sleep_relaxation                   = $_POST['sleep_relaxation'];
  $exercise_movement                  = $_POST['exercise_movement'];
  $nutrition                          = $_POST['nutrition'];
  $stress                             = $_POST['stress'];
  $relationships                      = $_POST['relationships'];
  $patient_name                       = $_POST['patient_name'];
  $date                               = $_POST['date'];
  $uhid                               = $_POST['uhid'];
  $sleep_adequate                     = $_POST['sleep_adequate'];
  $sleep_slightly_disturbed           = $_POST['sleep_slightly_disturbed'];
  $sleep_severely_disturbed           = $_POST['sleep_severely_disturbed'];
  $sleep_duration                     = $_POST['sleep_duration'];
  $thirst_high                        = $_POST['thirst_high'];
  $thirst_adequate                    = $_POST['thirst_adequate'];
  $thirst_low                         = $_POST['thirst_low'];
  $thirst_quantity                    = $_POST['thirst_quantity'];
  $bowel_regular                      = $_POST['bowel_regular'];
  $bowel_constipated                  = $_POST['bowel_constipated'];
  $bowel_loose                        = $_POST['bowel_loose'];
  $bristol_score                      = $_POST['bristol_score'];
  $bowel_frequency                    = $_POST['bowel_frequency'];
  $blood_mucus                        = $_POST['blood_mucus'];
  $urine_frequency                    = $_POST['urine_frequency'];
  $incontinence                       = $_POST['incontinence'];
  $urine_frothy                       = $_POST['urine_frothy'];
  $urine_burning                      = $_POST['urine_burning'];
  $urine_blood                        = $_POST['urine_blood'];
  $appetite                           = $_POST['appetite'];
  $food_intolerance                   = $_POST['food_intolerance'];
  $menstruation                       = $_POST['menstruation'];
  $cycle_days                         = $_POST['cycle_days'];
  $bleeding_days                      = $_POST['bleeding_days'];
  $cramps                             = $_POST['cramps'];
  $clots                              = $_POST['clots'];
  $gravida                            = $_POST['gravida'];
  $para                               = $_POST['para'];
  $living_children                    = $_POST['living_children'];
  $abortion                           = $_POST['abortion'];
  $lmp                                = $_POST['lmp'];
  $obs_other                          = $_POST['obs_other'];
  $smoking                            = $_POST['smoking'];
  $smoking_duration                   = $_POST['smoking_duration'];
  $smoking_quantity                   = $_POST['smoking_quantity'];
  $alcohol                            = $_POST['alcohol'];
  $alcohol_duration                   = $_POST['alcohol_duration'];
  $alcohol_quantity                   = $_POST['alcohol_quantity'];
  $tobacco                            = $_POST['tobacco'];
  $tobacco_details                    = $_POST['tobacco_details'];
  $addictions_other                   = $_POST['addictions_other'];
  $tea_quantity                       = $_POST['tea_quantity'];
  $coffee_quantity                    = $_POST['coffee_quantity'];
  $other_drink_quantity               = $_POST['other_drink_quantity'];
  $diet_type                          = $_POST['diet_type'];
  $diet_other                         = $_POST['diet_other'];
  $activity_type                      = $_POST['activity_type'];
  $activity_duration                  = $_POST['activity_duration'];
  $activity_frequency                 = $_POST['activity_frequency'];
  $mediators_perpetuators1            = $_POST['mediators_perpetuators1'];
  $antecedents1                       = $_POST['antecedents1'];
  $preconception                      = $_POST['preconception'];
  $prenatal                           = $_POST['prenatal'];
  $triggering_events1                 = $_POST['triggering_events1'];
  $sidebar_top                        = $_POST['sidebar_top'];
  $sidebar_bottom                     = $_POST['sidebar_bottom'];
  $ev1_top                            = $_POST['ev1_top'];
  $ev1_mid                            = $_POST['ev1_mid'];
  $ev1_bot                            = $_POST['ev1_bot'];
  $ev2_top                            = $_POST['ev2_top'];
  $ev2_mid                            = $_POST['ev2_mid'];
  $ev2_bot                            = $_POST['ev2_bot'];
  $ev3_top                            = $_POST['ev3_top'];
  $ev3_mid                            = $_POST['ev3_mid'];
  $ev3_bot                            = $_POST['ev3_bot'];
  $ev4_top                            = $_POST['ev4_top'];
  $ev4_mid                            = $_POST['ev4_mid'];
  $ev4_bot                            = $_POST['ev4_bot'];
  $ev5_top                            = $_POST['ev5_top'];
  $ev5_mid                            = $_POST['ev5_mid'];
  $ev5_bot                            = $_POST['ev5_bot'];
  $ev6_top                            = $_POST['ev6_top'];
  $ev6_mid                            = $_POST['ev6_mid'];
  $ev6_bot                            = $_POST['ev6_bot'];
  $current_concerns                   = $_POST['current_concerns'];
  $signs_symptoms_diseases            = $_POST['signs_symptoms_diseases'];
  $patient_name1                      = $_POST['patient_name1'];
  $date1                              = $_POST['date1'];
  $doctor_name                        = $_POST['doctor_name'];
  $investigations                     = $_POST['investigations'];
  $open_field                         = $_POST['open_field'];

  $name1                              = $_POST['name1'];
  $date1                              = $_POST['date1'];
  $uhid1                              = $_POST['uhid1'];
  $doctor1                            = $_POST['doctor1'];

  $name2                              = $_POST['name2'];
  $date2                              = $_POST['date2'];
  $uhid2                              = $_POST['uhid2'];
  $doctor2                            = $_POST['doctor2'];

  $name3                              = $_POST['name3'];
  $date3                              = $_POST['date3'];
  $uhid3                              = $_POST['uhid3'];
  $doctor3                            = $_POST['doctor3'];

  $name4                              = $_POST['name4'];
  $date4                              = $_POST['date4'];
  $uhid4                              = $_POST['uhid4'];
  $doctor4                            = $_POST['doctor4'];

  $name5                              = $_POST['name5'];
  $date5                              = $_POST['date5'];
  $uhid5                              = $_POST['uhid5'];
  $doctor5                            = $_POST['doctor5'];

  $name6                              = $_POST['name6'];
  $date6                              = $_POST['date6'];
  $uhid6                              = $_POST['uhid6'];
  $doctor6                            = $_POST['doctor6'];

  $name7                              = $_POST['name7'];
  $date7                              = $_POST['date7'];
  $uhid7                              = $_POST['uhid7'];
  $doctor7                            = $_POST['doctor7'];

  $name8                              = $_POST['name8'];
  $date8                              = $_POST['date8'];
  $uhid8                              = $_POST['uhid8'];
  $doctor8                            = $_POST['doctor8'];

  $name9                              = $_POST['name9'];
  $date9                              = $_POST['date9'];
  $uhid9                              = $_POST['uhid9'];
  $doctor9                            = $_POST['doctor9'];

  $name10                              = $_POST['name10'];
  $date10                              = $_POST['date10'];
  $uhid10                              = $_POST['uhid10'];
  $doctor10                            = $_POST['doctor10'];

  $name11                              = $_POST['name11'];
  $date11                              = $_POST['date11'];
  $uhid11                              = $_POST['uhid11'];
  $doctor11                            = $_POST['doctor11'];

  $name12                              = $_POST['name12'];
  $date12                              = $_POST['date12'];
  $uhid12                              = $_POST['uhid12'];
  $doctor12                            = $_POST['doctor12'];

  $name13                              = $_POST['name13'];
  $date13                              = $_POST['date13'];
  $uhid13                              = $_POST['uhid13'];
  $doctor13                            = $_POST['doctor13'];

  $name14                              = $_POST['name14'];
  $date14                              = $_POST['date14'];
  $uhid14                              = $_POST['uhid14'];
  $doctor14                            = $_POST['doctor14'];

  $name15                              = $_POST['name15'];
  $date15                              = $_POST['date15'];
  $uhid15                              = $_POST['uhid15'];
  $doctor15                            = $_POST['doctor15'];

  $name16                              = $_POST['name16'];
  $date16                              = $_POST['date16'];
  $uhid16                              = $_POST['uhid16'];
  $doctor16                            = $_POST['doctor16'];

  $name17                              = $_POST['name17'];
  $date17                              = $_POST['date17'];
  $uhid17                              = $_POST['uhid17'];
  $doctor17                            = $_POST['doctor17'];

  $name18                              = $_POST['name18'];
  $date18                              = $_POST['date18'];
  $uhid18                              = $_POST['uhid18'];
  $doctor18                            = $_POST['doctor18'];

  $name19                              = $_POST['name19'];
  $date19                              = $_POST['date19'];
  $uhid19                              = $_POST['uhid19'];
  $doctor19                            = $_POST['doctor19'];

  $name20                              = $_POST['name20'];
  $date20                              = $_POST['date20'];
  $uhid20                              = $_POST['uhid20'];
  $doctor20                            = $_POST['doctor20'];

  


  //echo "<pre>"; print_r($_POST); die();
  // =============================================
  // INSERT QUERY
  // =============================================
    $sql = get_insert_id("INSERT INTO `form` (`full_name`, `dob`, `cont`, `email`, `city`, `state`, `country`,`marital_status`, `occupation`, `gut_health`, `gut_health1`,`thyroid_disorders`, `thyroid_disorders1`, `auto_tmmunity`, `auto_tmmunity1`,`chronic_inflammation`, `chronic_inflammation1`, `obesity_overweight`,`obesity_overweight1`, `diabetes_insulin_resistance`, `diabetes_insulin_resistance1`, `fatty_liver`, `fatty_liver1`, `pcos_pcod`, `pcos_pcod1`,`o_hormonal_issues`, `o_hormonal_issues1`, `hypertension_high_blood_pressure`, `hypertension_high_blood_pressure1`, `nasal_allergy`, `nasal_allergy1`,`general_detox`, `general_detox1`, `others`, `medications`, `consultation_type`, `schedule_when`, `procedure_visits`, `diet_compliance`,`recovery_timeline`, `antecedents`, `triggering_events`, `mediators_perpetuators`,`assimilation`,`mental`,`emotional`,`spiritual`, `defense_repair`, `structural_integrity`, `energy`,`communication`, `biotransformation`, `transport`, `sleep_relaxation`,   `exercise_movement`, `nutrition`, `stress`, `relationships`,`patient_name`, `date`, `uhid`, `sleep_adequate`, `sleep_slightly_disturbed`,
    `sleep_severely_disturbed`, `sleep_duration`, `thirst_high`, `thirst_adequate`, `thirst_low`, `thirst_quantity`, `bowel_regular`, `bowel_constipated`, `bowel_loose`, `bristol_score`, `bowel_frequency`, `blood_mucus`, `urine_frequency`, `incontinence`, `urine_frothy`, `urine_burning`, `urine_blood`, `appetite`, `food_intolerance`, `menstruation`, `cycle_days`, `bleeding_days`, `cramps`, `clots`, `gravida`, `para`, `living_children`, `abortion`, `lmp`, `obs_other`, `smoking`, `smoking_duration`, `smoking_quantity`, `alcohol`, `alcohol_duration`, `alcohol_quantity`, `tobacco`, `tobacco_details`, `addictions_other`, `tea_quantity`, `coffee_quantity`, `other_drink_quantity`, `diet_type`, `diet_other`, `activity_type`, `activity_duration`, `activity_frequency`,
    `mediators_perpetuators1`, `antecedents1`, `preconception`, `prenatal`, `triggering_events1`, `sidebar_top`, `sidebar_bottom`,
    `ev1_top`, `ev1_mid`, `ev1_bot`, `ev2_top`, `ev2_mid`, `ev2_bot`, `ev3_top`, `ev3_mid`, `ev3_bot`, `ev4_top`, `ev4_mid`, `ev4_bot`,
    `ev5_top`, `ev5_mid`, `ev5_bot`, `ev6_top`, `ev6_mid`, `ev6_bot`,`current_concerns`, `signs_symptoms_diseases`, `patient_name1`, `date1`,
    `doctor_name`, `investigations`, `open_field`) VALUES ('$full_name', '$dob', '$cont', '$email', '$city', '$state', '$country',
    '$marital_status', '$occupation', '$gut_health', '$gut_health1','$thyroid_disorders', '$thyroid_disorders1', '$auto_tmmunity', '$auto_tmmunity1','$chronic_inflammation', '$chronic_inflammation1', '$obesity_overweight','$obesity_overweight1', '$diabetes_insulin_resistance', '$diabetes_insulin_resistance1','$fatty_liver', '$fatty_liver1', '$pcos_pcod', '$pcos_pcod1',
    '$o_hormonal_issues', '$o_hormonal_issues1', '$hypertension_high_blood_pressure','$hypertension_high_blood_pressure1', '$nasal_allergy', '$nasal_allergy1','$general_detox', '$general_detox1', '$others', '$medications','$consultation_type', '$schedule_when', '$procedure_visits', '$diet_compliance','$recovery_timeline', '$antecedents', '$triggering_events', '$mediators_perpetuators',
    '$assimilation','$mental','$emotional','$spiritual', '$defense_repair', '$structural_integrity', '$energy','$communication', '$biotransformation', '$transport', '$sleep_relaxation','$exercise_movement', '$nutrition', '$stress', '$relationships','$patient_name', '$date', '$uhid', '$sleep_adequate', '$sleep_slightly_disturbed','$sleep_severely_disturbed', '$sleep_duration', '$thirst_high', '$thirst_adequate',
    '$thirst_low', '$thirst_quantity', '$bowel_regular', '$bowel_constipated','$bowel_loose', '$bristol_score', '$bowel_frequency', '$blood_mucus','$urine_frequency', '$incontinence', '$urine_frothy', '$urine_burning','$urine_blood', '$appetite', '$food_intolerance', '$menstruation','$cycle_days', '$bleeding_days', '$cramps', '$clots', '$gravida', '$para','$living_children', '$abortion', '$lmp', '$obs_other', '$smoking','$smoking_duration', '$smoking_quantity', '$alcohol', '$alcohol_duration','$alcohol_quantity', '$tobacco', '$tobacco_details', '$addictions_other','$tea_quantity', '$coffee_quantity', '$other_drink_quantity', '$diet_type','$diet_other', '$activity_type', '$activity_duration', '$activity_frequency','$mediators_perpetuators1', '$antecedents1', '$preconception', '$prenatal',
    '$triggering_events1', '$sidebar_top', '$sidebar_bottom','$ev1_top', '$ev1_mid', '$ev1_bot', '$ev2_top', '$ev2_mid', '$ev2_bot',
    '$ev3_top', '$ev3_mid', '$ev3_bot', '$ev4_top', '$ev4_mid', '$ev4_bot','$ev5_top', '$ev5_mid', '$ev5_bot', '$ev6_top', '$ev6_mid', '$ev6_bot','$current_concerns', '$signs_symptoms_diseases', '$patient_name1', '$date1','$doctor_name', '$investigations', '$open_field')",[],$conn);

    $sql1 = get_insert_id("INSERT INTO `form_diagnosis`(`form_id`, `name1`, `date1`, `uhid1`, `doctor1`, `name2`, `date2`, `uhid2`, `doctor2`, `name3`, `date3`, `uhid3`, `doctor3`, `name4`, `date4`, `uhid4`, `doctor4`, `name5`, `date5`, `uhid5`, `doctor5`, `name6`, `date6`, `uhid6`, `doctor6`, `name7`, `date7`, `uhid7`, `doctor7`, `name8`, `date8`, `uhid8`, `doctor8`, `name9`, `date9`, `uhid9`, `doctor9`, `name10`, `date10`, `uhid10`, `doctor10`, `name11`, `date11`, `uhid11`, `doctor11`, `name12`, `date12`, `uhid12`, `doctor12`, `name13`, `date13`, `uhid13`, `doctor13`, `name14`, `date14`, `uhid14`, `doctor14`, `name15`, `date15`, `uhid15`, `doctor15`, `name16`, `date16`, `uhid16`, `doctor16`, `name17`, `date17`, `uhid17`, `doctor17`, `name18`, `date18`, `uhid18`, `doctor18`, `name19`, `date19`, `uhid19`, `doctor19`, `name20`, `date20`, `uhid20`, `doctor20`, `status`) VALUES ('$sql','$name1','$date1','$uhid1','$doctor1','$name2','$date2','$uhid2','$doctor2','$name3','$date3','$uhid3','$doctor3','$name4','$date4','$uhid4','$doctor4','$name5','$date5','$uhid5','$doctor5','$name6','$date6','$uhid6','$doctor6','$name7','$date7','$uhid7','$doctor7','$name8','$date8','$uhid8','$doctor8','$name9','$date9','$uhid9','$doctor9','$name10','$date10','$uhid10','$doctor10','$name11','$date11','$uhid11','$doctor11','$name12','$date12','$uhid12','$doctor12','$name13','$date13','$uhid13','$doctor13','$name14','$date14','$uhid14','$doctor14','$name15','$date15','$uhid15','$doctor15','$name16','$date16','$uhid16','$doctor16','$name17','$date17','$uhid17','$doctor17','$name18','$date18','$uhid18','$doctor18','$name19','$date19','$uhid19','$doctor19','$name20','$date20','$uhid20','$doctor20','1'",[],$conn);

    $_SESSION['t']  = 1;
		$_SESSION['tmsg']  = "Form submitted successfully";
		echo '<meta http-equiv="refresh" content="0; url=custom_form.php" />';
		die();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Screening Form</title>
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;600&family=Source+Sans+3:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
      .table-wrapper.dignosis tr td{
        padding:0px;
      }
      .table-wrapper.dignosis tr td input {
          border-radius: 0px;
          width: 100%;
      }
      * { box-sizing: border-box; margin: 0; padding: 0; }

      body {
        /* font-family: 'Source Sans 3', sans-serif; */
        font-family: 'Montserrat SemiBold';
        font-weight: 300;
        background: #f5f2ee;
        color: #2c2c2c;
        padding: 40px 16px 60px;
      }
      img.logo{
        float: right;
        border-radius: 10px;
        width: 100px;
        background-color: #fff;
        margin-top: -21px;
      }
      .page {
        max-width: 900px;
        margin: 0 auto;
        background: #fff9f3;
        border-radius: 12px;
        box-shadow: 0 2px 24px rgba(0,0,0,0.08);
        overflow: hidden;
      }

      /* Header */
      .header {
        background: #02706F;
        color: white;
        padding: 32px 40px;
        text-align: center;
      }

      .header h1 {
        /* font-family: 'Lora', serif; */
        font-family: 'Montserrat SemiBold';
        font-size: 1.7rem;
        font-weight: 600;
        margin-bottom: 6px;
      }

      .header p {
        font-size: 0.85rem;
        opacity: 0.75;
        letter-spacing: 0.05em;
      }

      /* Success / Error banner */
      .banner {
        padding: 16px 40px;
        font-size: 0.9rem;
        font-weight: 400;
        display: flex;
        align-items: center;
        gap: 10px;
      }
      .banner.success { background: #e8f5e9; color: #2e7d32; border-bottom: 1px solid #c8e6c9; }
      .banner.error   { background: #fdecea; color: #c62828; border-bottom: 1px solid #f5c6cb; }

      /* Form body */
      form { padding: 36px 40px 40px; }

      /* Section titles */
      .section-title {
        /* font-family: 'Lora', serif; */
        font-family: 'Montserrat SemiBold';
        font-size: 1rem;
        font-weight: 600;
        color: #02706F;
        margin: 32px 0 16px;
        padding-bottom: 8px;
        border-bottom: 1px solid #e0dbd4;
      }

      .section-title:first-child { margin-top: 0; }

      /* Grid */
      .row { display: grid; gap: 16px; margin-bottom: 16px; }
      .row.col2 { grid-template-columns: 1fr 1fr; }
      .row.col3 { grid-template-columns: 1fr 1fr 1fr; }

      /* Fields */
      .field { display: flex; flex-direction: column; gap: 5px; }

      label {
        font-size: 0.72rem;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        color: #888;
        font-weight: 600;
      }

      input[type="text"],
      input[type="email"],
      input[type="tel"],
      select,
      textarea {
        width: 100%;
        padding: 10px 12px;
        border: 1px solid #ddd;
        border-radius: 6px;
        font-family: 'Montserrat SemiBold';
        /* font-family: 'Source Sans 3', sans-serif; */
        font-size: 0.9rem;
        font-weight: 300;
        color: #2c2c2c;
        background: #fff;
        outline: none;
        transition: border-color 0.2s, box-shadow 0.2s;
      }

      input:focus, select:focus, textarea:focus {
        border-color: #02706F;
        box-shadow: 0 0 0 3px rgba(44,95,95,0.1);
        background: #fff;
      }

      select { cursor: pointer; }
      textarea { resize: vertical; min-height: 80px; }

      /* Checkboxes */
      .check-grid {
        /* display: grid; */
        grid-template-columns: 1fr 1fr;
        gap: 8px;
        margin-bottom: 16px;
      }

      .check-item {
        display: flex;
        align-items: center;
        gap: 8px;
        padding: 10px 12px;
        border: 1px solid #ddd;
        border-radius: 6px;
        cursor: pointer;
        transition: border-color 0.2s, background 0.2s;
        background: #fafafa;
      }
      .check-grid label{
        margin:10px 0px;
      }

      .check-item:has(input:checked) {
        border-color: #02706F;
        background: #eaf2f2;
      }

      .check-item input[type="checkbox"] {
        width: 16px;
        height: 16px;
        accent-color: #02706F;
        cursor: pointer;
        flex-shrink: 0;
      }

      .check-item span {
        font-size: 0.85rem;
        color: #2c2c2c;
        line-height: 1.3;
      }

      /* Radio pills */
      .pill-row {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        margin-bottom: 16px;
      }

      .pill {
        display: flex;
        align-items: center;
        gap: 7px;
        padding: 8px 16px;
        border: 1px solid #ddd;
        border-radius: 50px;
        cursor: pointer;
        font-size: 0.85rem;
        color: #555;
        background: #fff;
        transition: all 0.2s;
      }

      .pill:has(input:checked) {
        border-color: #02706F;
        background: #eaf2f2;
        color: #02706F;
      }

      .pill input { accent-color: #02706F; cursor: pointer; }

      .pill-label {
        font-size: 0.72rem;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        color: #888;
        font-weight: 600;
        margin-bottom: 8px;
      }

      /* Submit button */
      .submit-row {
        margin-top: 32px;
        padding-top: 24px;
        border-top: 1px solid #e0dbd4;
        display: flex;
        justify-content: flex-end;
      }
      button {
        background: #02706F;
        color: white;
        border: none;
        padding: 13px 36px;
        border-radius: 7px;
        font-family: 'Montserrat SemiBold';
        /* font-family: 'Source Sans 3', sans-serif; */
        font-size: 0.9rem;
        font-weight: 600;
        letter-spacing: 0.04em;
        cursor: pointer;
        transition: background 0.2s, transform 0.15s;
      }
      button:hover { background: #1e4444; transform: translateY(-1px); }
      button[type="submit"] {
        background: #02706F;
        color: white;
        border: none;
        padding: 13px 36px;
        border-radius: 7px;
        /* font-family: 'Source Sans 3', sans-serif; */
        font-family: 'Montserrat SemiBold';
        font-size: 0.9rem;
        font-weight: 600;
        letter-spacing: 0.04em;
        cursor: pointer;
        transition: background 0.2s, transform 0.15s;
      }

      button[type="submit"]:hover { background: #1e4444; transform: translateY(-1px); }

      /* matrix css start  */

      .page-matrix {
        /* max-width: 900px; */
        margin: 0px auto;
        padding: 20px;
        /* background: #fff9f3; */
        /* border: 1.5px solid #b8b49a; */
        /* box-shadow: 0 2px 16px rgba(0,0,0,0.12); */
      }

      /* TOP HEADER */
      .top-header {
        display: grid;
        grid-template-columns: 200px 1fr;
        border-bottom: 1.5px solid #b8b49a;
      }

      .fm-badge {
        background: #3a7c7c;
        color: white;
        padding: 16px 18px;
        display: flex;
        flex-direction: column;
        justify-content: center;
      }

      .fm-badge .fm-label {
        font-size: 0.62rem;
        letter-spacing: 0.22em;
        text-transform: uppercase;
        font-weight: 600;
        opacity: 0.85;
        margin-bottom: 2px;
      }

      .fm-badge h1 {
        /* font-family: 'Libre Baskerville', serif; */
        font-family: 'Montserrat SemiBold';
        font-size: 1.1rem;
        font-weight: 700;
        line-height: 1.25;
        letter-spacing: 0.06em;
      }

      .top-title {
        padding: 14px 20px;
        display: flex;
        align-items: center;
        border-left: 1.5px solid #b8b49a;
        background: #3a7c7c;
      }

      .top-title h2 {
        /* font-family: 'Libre Baskerville', serif; */
        font-family: 'Montserrat SemiBold';
        font-size: 0.95rem;
        font-weight: 400;
        font-style: italic;
        color: #3a3a2e;
      }

      /* MAIN BODY */
      .main-body {
        display: grid;
        grid-template-columns: 200px 1fr;
        border-bottom: 1.5px solid #b8b49a;
      }

      /* Left panel */
      .left-panel {
        border-right: 1.5px solid #b8b49a;
        padding: 14px 12px 18px;
        /* background: #eceadb; */
        display: flex;
        flex-direction: column;
        gap: 12px;
      }

      .left-panel .panel-title {
        font-size: 0.68rem;
        font-weight: 700;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        color: #3a7c7c;
        border-bottom: 1.5px solid #3a7c7c;
        padding-bottom: 5px;
        margin-bottom: 2px;
      }

      .left-field label {
        display: block;
        font-size: 0.66rem;
        color: #3a7c7c;
        font-weight: 600;
        letter-spacing: 0.06em;
        margin-bottom: 5px;
      }

      .left-field textarea {
        width: 100%;
        background: #fff;
        border: 1px solid #c5c0a8;
        padding: 7px 8px;
        /* font-family: 'Source Sans 3', sans-serif; */
        font-family: 'Montserrat SemiBold';
        font-size: 0.8rem;
        font-weight: 300;
        color: #2c2c20;
        resize: none;
        outline: none;
        min-height: 78px;
        transition: border-color 0.2s;
      }

      .left-field textarea:focus { border-color: #3a7c7c; }

      /* Right panel */
      .right-panel {
        padding: 16px 14px 14px;
      }

      /* Physiology 3-column grid */
      .physio-grid {
        display: grid;
        grid-template-columns: 1fr 110px 1fr;
        grid-template-rows: auto auto auto;
        gap: 10px 8px;
        align-items: start;
      }

      .phys-box {
        display: flex;
        flex-direction: column;
        gap: 5px;
      }

      .phys-box label {
        font-size: 0.66rem;
        font-weight: 700;
        color: #3a3a2e;
        letter-spacing: 0.05em;
        text-align: center;
        display: block;
      }

      .phys-box textarea {
        width: 100%;
        background: #fff;
        border: 1px solid #c5c0a8;
        padding: 6px 8px;
        /* font-family: 'Source Sans 3', sans-serif; */
        font-family: 'Montserrat SemiBold';
        font-size: 0.78rem;
        font-weight: 300;
        color: #2c2c20;
        resize: none;
        outline: none;
        height: 62px;
        transition: border-color 0.2s;
      }

      .phys-box textarea:focus { border-color: #3a7c7c; }

      /* Circle center — spans all 3 rows in column 2 */
      .circle-center {
        grid-column: 2;
        /* grid-row: 1 / 4; */
        display: flex;
        align-items: center;
        justify-content: center;
        padding-top: 18px;
      }
      .scene {
        position: relative;
        width: 370px;
        height: 115px;
      }

      .node {
        position: absolute;
        transform: translate(-50%, -50%);
        font-family: 'Cormorant Garamond', serif;
        font-size: 17px;
        font-weight: 400;
        color: #1e5f72;
        letter-spacing: 0.06em;
        z-index: 2;
        animation: fadeIn 0.6s ease both;
        white-space: nowrap;
      }

      .node-mental {
          top: 109%;
          left: 6%;
          animation-delay: 0.1s;
      }
      .node-emotional { 
        top: 107%; 
        left: 114%; 
        animation-delay: 0.25s; 
      }
      .node-spiritual {
          top: 181%;
          left: 59%;
          animation-delay: 0.4s;
      }

    svg.arrows {
      position: absolute;
      top: 90%;
      /* inset: 0; */
      width: 108%;
      /* height: 150%; */
      overflow: visible;
      z-index: 1;
    }

      svg.arrows path {
        fill: none;
        stroke: #2b7a8e;
        stroke-width: 3px;
        stroke-linecap: round;
        stroke-dasharray: 400;
        stroke-dashoffset: 400;
        animation: drawPath 1.1s ease forwards;
      }

      svg.arrows path:nth-of-type(1) { animation-delay: 0.7s; }
      svg.arrows path:nth-of-type(2) { animation-delay: 1.1s; }
      svg.arrows path:nth-of-type(3) { animation-delay: 1.5s; }

      @keyframes drawPath {
        to { stroke-dashoffset: 0; }
      }
      @keyframes fadeIn {
        from { opacity: 0; transform: translate(-50%, -50%) scale(0.85); }
        to   { opacity: 1; transform: translate(-50%, -50%) scale(1); }
      }
      .circle-wrap {
        position: relative;
        width: 96px;
        height: 96px;
      }

      .circle-wrap svg {
        width: 100%;
        height: 100%;
      }

      .circle-label {
        position: absolute;
        font-size: 0.58rem;
        font-weight: 700;
        color: #3a7c7c;
        letter-spacing: 0.04em;
        text-align: center;
        line-height: 1.2;
        pointer-events: none;
      }

      .circle-label.mental   { top: 22%; left: -2px; }
      .circle-label.emotional { top: 22%; right: -4px; }
      .circle-label.spiritual { bottom: 2%; left: 50%; transform: translateX(-50%); white-space: nowrap; }

      /* Transport row — full width under grid */
      .transport-wrap {
        margin-top: 10px;
        display: flex;
        justify-content: center;
      }

      .transport-box {
        width: 52%;
        display: flex;
        flex-direction: column;
        gap: 5px;
      }

      .transport-box label {
        font-size: 0.66rem;
        font-weight: 700;
        color: #3a3a2e;
        letter-spacing: 0.05em;
        text-align: center;
        display: block;
      }

      .transport-box textarea {
        width: 100%;
        /* background: #f5f3e8; */
        border: 1px solid #c5c0a8;
        padding: 6px 8px;
        /* font-family: 'Source Sans 3', sans-serif; */
        font-family: 'Montserrat SemiBold';
        font-size: 0.78rem;
        font-weight: 300;
        color: #2c2c20;
        resize: none;
        outline: none;
        height: 50px;
        transition: border-color 0.2s;
      }

      .transport-box textarea:focus { border-color: #3a7c7c; }

      /* LIFESTYLE SECTION */
      .lifestyle-section {
        border-top: 1.5px solid #b8b49a;
        /* background: #eceadb; */
      }

      .lifestyle-header {
        text-align: center;
        padding: 8px 10px;
        border-bottom: 1px solid #b8b49a;
        font-size: 0.7rem;
        font-weight: 700;
        letter-spacing: 0.14em;
        text-transform: uppercase;
        color: #3a3a2e;
        /* background: #e4e1d0; */
      }

      .lifestyle-grid {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
      }

      .lifestyle-col {
        padding: 10px 10px 14px;
        border-right: 1px solid #b8b49a;
        display: flex;
        flex-direction: column;
        gap: 6px;
      }

      .lifestyle-col:last-child { border-right: none; }

      .lifestyle-col label {
        font-size: 0.63rem;
        font-weight: 700;
        letter-spacing: 0.07em;
        color: #3a7c7c;
        text-transform: uppercase;
      }

      .lifestyle-col textarea {
        width: 100%;
        flex: 1;
        /* background: #f0eedd; */
        border: 1px solid #c5c0a8;
        padding: 6px 8px;
        /* font-family: 'Source Sans 3', sans-serif; */
        font-family: 'Montserrat SemiBold';
        font-size: 0.78rem;
        font-weight: 300;
        color: #2c2c20;
        resize: none;
        outline: none;
        min-height: 88px;
        transition: border-color 0.2s;
      }

      .lifestyle-col textarea:focus { border-color: #3a7c7c; }

      /* FOOTER */
      .form-footer {
        padding: 9px 20px;
        display: flex;
        align-items: center;
        gap: 24px;
        border-top: 1px solid #b8b49a;
        /* background: #f5f3e6; */
      }

      .footer-field {
        display: flex;
        align-items: center;
        gap: 6px;
        flex: 1;
      }

      .footer-field label {
        font-size: 0.7rem;
        font-weight: 700;
        color: #3a3a2e;
        letter-spacing: 0.05em;
        white-space: nowrap;
      }

      .footer-field input {
        flex: 1;
        background: transparent;
        border: none;
        border-bottom: 1px solid #b8b49a;
        padding: 3px 4px;
        /* font-family: 'Source Sans 3', sans-serif; */
        font-family: 'Montserrat SemiBold';
        font-size: 0.82rem;
        font-weight: 300;
        color: #2c2c20;
        outline: none;
        transition: border-color 0.2s;
        min-width: 0;
      }

      .footer-field input:focus { border-bottom-color: #3a7c7c; }

      .footer-field.uhid { flex: 0 0 140px; }

      .print-btn {
        background: #3a7c7c;
        color: white;
        border: none;
        padding: 6px 16px;
        /* font-family: 'Source Sans 3', sans-serif; */
        font-family: 'Montserrat SemiBold';
        font-size: 0.72rem;
        font-weight: 600;
        letter-spacing: 0.08em;
        cursor: pointer;
        border-radius: 3px;
        flex-shrink: 0;
        transition: background 0.2s;
      }
      .print-btn:hover { background: #2a5c5c; }

      @media print {
        body { background: white; padding: 0; }
        /* .page { box-shadow: none; } */
        .print-btn { display: none; }
        textarea { border-color: #ccc !important; }
      }

      @media (max-width: 600px) {
        .top-header { grid-template-columns: 1fr; }
        .top-title { border-left: none; border-top: 1px solid #b8b49a; }
        .main-body { grid-template-columns: 1fr; }
        .left-panel { border-right: none; border-bottom: 1.5px solid #b8b49a; }
        .physio-grid { grid-template-columns: 1fr; }
        .circle-center { display: none; }
        .lifestyle-grid { grid-template-columns: 1fr 1fr; }
        .lifestyle-col:nth-child(2n) { border-right: none; }
      }

      /* matrix css ends  */

      /* Personal history starts  */

      .page-history {
        /* max-width: 720px; */
        margin: 0px auto;
        padding:20px;
        background: #fff9f3;
        border-radius: 12px;
        /* box-shadow: 0 2px 24px rgba(0,0,0,0.08); */
        overflow: hidden;
      }

      /* ── Header ── */
      .header {
        background: #02706F;
        color: white;
        padding: 32px 40px;
        text-align: center;
      }

      .header h1 {
        /* font-family: 'Lora', serif; */
        font-family: 'Montserrat SemiBold';
        font-size: 1.7rem;
        font-weight: 600;
        margin-bottom: 6px;
      }

      .header p {
        font-size: 0.85rem;
        opacity: 0.75;
        letter-spacing: 0.05em;
      }

      /* ── Form body ── */
      .form-body { padding: 36px 40px 44px; }

      /* ── Section titles ── */
      .section-title {
        /* font-family: 'Lora', serif; */
        font-family: 'Montserrat SemiBold';
        font-size: 1rem;
        font-weight: 600;
        color: #02706F;
        margin: 30px 0 16px;
        padding-bottom: 8px;
        border-bottom: 1px solid #e0dbd4;
      }

      .section-title:first-child { margin-top: 0; }

      /* ── Field label ── */
      .field-label {
        font-size: 0.72rem;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        color: #888;
        font-weight: 600;
        margin-bottom: 6px;
        display: block;
      }

      /* ── Text inputs ── */
      input[type="text"],
      input[type="number"],
      input[type="date"],
      select {
        padding: 9px 12px;
        border: 1px solid #ddd;
        border-radius: 6px;
        /* font-family: 'Source Sans 3', sans-serif; */
        font-family: 'Montserrat SemiBold';
        font-size: 0.88rem;
        font-weight: 300;
        color: #2c2c2c;
        background: #fff;
        outline: none;
        transition: border-color 0.2s, box-shadow 0.2s;
      }

      input[type="text"]:focus,
      input[type="number"]:focus,
      select:focus {
        border-color: #02706F;
        box-shadow: 0 0 0 3px rgba(44,95,95,0.1);
        background: #fff;
      }

      select { cursor: pointer; width: 100%; }

      textarea {
        width: 100%;
        padding: 9px 12px;
        border: 1px solid #ddd;
        border-radius: 6px;
        /* font-family: 'Source Sans 3', sans-serif; */
        font-family: 'Montserrat SemiBold';
        font-size: 0.88rem;
        font-weight: 300;
        color: #2c2c2c;
        background: #fafafa;
        outline: none;
        resize: vertical;
        min-height: 70px;
        transition: border-color 0.2s, box-shadow 0.2s;
      }

      textarea:focus {
        border-color: #02706F;
        box-shadow: 0 0 0 3px rgba(44,95,95,0.1);
        background: #fff;
      }

      .input-full  { width: 100%; }
      .input-sm    { width: 70px; }
      .input-md    { width: 110px; }
      .input-lg    { width: 160px; }

      /* ── Grid layouts ── */
      .grid2 { display: grid; grid-template-columns: 1fr 1fr; gap: 14px; margin-bottom: 14px; }
      .grid3 { display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 14px; margin-bottom: 14px; }
      .grid4 { display: grid; grid-template-columns: 1fr 1fr 1fr 1fr; gap: 12px; margin-bottom: 14px; }

      /* ── Checkbox cards ── */
      .check-group {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        margin-bottom: 14px;
      }

      .check-card {
        display: flex;
        align-items: center;
        gap: 8px;
        padding: 9px 14px;
        border: 1px solid #ddd;
        border-radius: 6px;
        cursor: pointer;
        background: #fff;
        font-size: 0.85rem;
        color: #2c2c2c;
        font-weight: 300;
        transition: border-color 0.2s, background 0.2s;
        user-select: none;
      }

      .check-card:has(input:checked) {
        border-color: #02706F;
        background: #eaf2f2;
        color: #02706F;
      }

      .check-card input[type="checkbox"] {
        width: 15px;
        height: 15px;
        accent-color: #02706F;
        cursor: pointer;
        flex-shrink: 0;
      }

      /* ── Radio pills ── */
      .pill-group {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        margin-bottom: 14px;
      }

      .pill {
        display: flex;
        align-items: center;
        gap: 7px;
        padding: 8px 16px;
        border: 1px solid #ddd;
        border-radius: 50px;
        cursor: pointer;
        font-size: 0.85rem;
        color: #555;
        background: #fafafa;
        transition: all 0.2s;
        user-select: none;
      }

      .pill:has(input:checked) {
        border-color: #02706F;
        background: #eaf2f2;
        color: #02706F;
      }

      .pill input[type="radio"],
      .pill input[type="checkbox"] {
        accent-color: #02706F;
        cursor: pointer;
        width: 14px;
        height: 14px;
      }

      /* ── Inline field row (label + input side by side) ── */
      .inline-row {
        display: flex;
        align-items: center;
        gap: 8px;
        flex-wrap: wrap;
        margin-bottom: 10px;
      }

      .inline-row .lbl {
        font-size: 0.82rem;
        color: #555;
        white-space: nowrap;
      }

      /* ── Inset card (sub-fields) ── */
      .inset-card {
        background: #fff;
        border: 1px solid #e8e4de;
        border-radius: 8px;
        padding: 16px 18px;
        margin-bottom: 14px;
      }

      .inset-card .field-label { color: #777; }

      /* ── Yes/No mini pills ── */
      .yn-group { display: flex; gap: 8px; }
      .yn-group .pill { padding: 6px 14px; font-size: 0.82rem; }

      /* ── Bullet addon items (Addictions / Habits) ── */
      .addon-list {
        display: flex;
        flex-direction: column;
        gap: 12px;
      }

      .addon-item {
        background: #fff;
        border: 1px solid #e8e4de;
        border-radius: 8px;
        padding: 14px 16px;
      }

      .addon-item .addon-title {
        font-size: 0.78rem;
        letter-spacing: 0.07em;
        text-transform: uppercase;
        color: #02706F;
        font-weight: 600;
        margin-bottom: 10px;
      }

      .addon-item .inline-row { margin-bottom: 0; }

      /* ── Submit ── */
      .submit-row {
        margin-top: 32px;
        padding-top: 24px;
        border-top: 1px solid #e0dbd4;
        display: flex;
        justify-content: flex-end;
      }

      button[type="submit"] {
        background: #02706F;
        color: white;
        border: none;
        padding: 13px 36px;
        border-radius: 7px;
        /* font-family: 'Source Sans 3', sans-serif; */
        font-family: 'Montserrat SemiBold';
        font-size: 0.9rem;
        font-weight: 600;
        letter-spacing: 0.04em;
        cursor: pointer;
        transition: background 0.2s, transform 0.15s;
      }

      button[type="submit"]:hover { background: #1e4444; transform: translateY(-1px); }
      button[type="submit"]:active { transform: translateY(0); }

      /* ── Responsive ── */
      @media (max-width: 580px) {
        .form-body { padding: 24px 20px 32px; }
        .header { padding: 24px 20px; }
        .grid2, .grid3, .grid4 { grid-template-columns: 1fr; }
      }

      /* Personal Hostory end */

      /* Medicine Timeline starts  */

      /* ── Outer page wrapper ── */
      .page-medicine {
        /* max-width: 860px; */
        margin: 0px auto;
        border: 1.5px solid #8aaa30;
        background: #fff9f3
        font-size: 12px;
        color: #222;
      }

      /* ══════════════════════════════════════
        ROW 1 — Title box  |  Mediators area
      ══════════════════════════════════════ */
      .row1 {
        display: grid;
        grid-template-columns: 200px 1fr;
        background: #c2d44e;
      }

      /* Teal title */
      .title-box {
        background: #3a9090;
        color: #fff;
        padding: 12px 14px;
      }

      .title-box .pre {
        font-size: 0.62rem;
        letter-spacing: 0.2em;
        font-weight: bold;
        display: block;
        margin-bottom: 1px;
      }

      .title-box h2 {
        font-size: 1.08rem;
        font-weight: bold;
        letter-spacing: 0.07em;
        line-height: 1.25;
        text-transform: uppercase;
      }

      /* Mediators top-right */
      .mediators-cell {
        padding: 10px 14px 10px 18px;
        background: #c2d44e;
      }

      .cell-title {
        font-weight: bold;
        font-size: 0.8rem;
        color: #2a3d00;
        margin-bottom: 6px;
      }

      .white-box {
        background: #fff;
        border: 1.5px solid #6a8820;
        padding: 6px 8px;
        /* font-family: Arial, sans-serif; */
        font-family: 'Montserrat SemiBold';
        font-size: 11px;
        color: #222;
        resize: none;
        outline: none;
        display: block;
      }

      .white-box:focus { border-color: #3a9090; }

      /* ══════════════════════════════════════
        ROW 2 — Antecedents area  |  Triggers
      ══════════════════════════════════════ */
      .row2 {
        display: grid;
        grid-template-columns: 200px 1fr;
      }

      /* LEFT: olive-green antecedents panel */
      .antecedents-panel {
        background: #c2d44e;
        padding: 6px 12px 10px;
        position: relative;
        border-right: 2px dashed #6a8820;
      }

      .antecedents-panel .panel-label {
        font-weight: bold;
        font-size: 0.78rem;
        color: #2a3d00;
        margin-bottom: 6px;
      }

      .antecedents-panel textarea.white-box {
        width: 100%;
        height: 96px;
      }

      /* Preconception + Prenatal row */
      .pre-row {
        display: flex;
        gap: 6px;
        margin-top: 8px;
        align-items: stretch;
      }

      /* Preconception: rotated label + textarea side-by-side */
      .preconception-block {
        display: flex;
        flex: 1;
        border: 1.5px solid #6a8820;
      }

      .rot-label {
        writing-mode: vertical-rl;
        transform: rotate(180deg);
        font-size: 0.65rem;
        font-weight: bold;
        color: #2a3d00;
        background: #b0c840;
        padding: 6px 4px;
        display: flex;
        align-items: center;
        justify-content: center;
        white-space: nowrap;
        letter-spacing: 0.04em;
        flex-shrink: 0;
        width: 18px;
      }

      .preconception-block textarea {
        flex: 1;
        background: #fff;
        border: none;
        border-left: 1px solid #6a8820;
        padding: 5px 4px;
        /* font-family: Arial, sans-serif; */
        font-family: 'Montserrat SemiBold';
        font-size: 10px;
        resize: none;
        outline: none;
        min-height: 70px;
      }

      .preconception-block textarea:focus { background: #f9fff0; }

      /* Prenatal column */
      .prenatal-block {
        display: flex;
        flex-direction: column;
        border: 1.5px solid #6a8820;
        width: 52px;
        flex-shrink: 0;
      }

      .prenatal-rot {
        writing-mode: vertical-rl;
        transform: rotate(180deg);
        font-size: 0.65rem;
        font-weight: bold;
        color: #2a3d00;
        background: #c2d44e;
        padding: 6px 3px;
        display: flex;
        align-items: center;
        justify-content: center;
        white-space: nowrap;
        letter-spacing: 0.04em;
        border-bottom: 1px solid #6a8820;
        flex-shrink: 0;
      }

      .prenatal-block textarea {
        flex: 1;
        background: #fff;
        border: none;
        padding: 4px;
        /* font-family: Arial, sans-serif; */
        font-family: 'Montserrat SemiBold';
        font-size: 10px;
        resize: none;
        outline: none;
      }

      .prenatal-block textarea:focus { background: #f9fff0; }

      /* RIGHT: slightly lighter green with triggers */
      .triggers-cell {
        background: #d4e060;
        padding: 10px 14px 10px 18px;
        border-left: none;
      }

      .triggers-cell textarea.white-box {
        width: 230px;
        height: 118px;
      }

      /* ══════════════════════════════════════
        ROW 3 — Timeline  (white background)
      ══════════════════════════════════════ */
      .row3 {
        display: grid;
        grid-template-columns: 200px 1fr;
        background: #fff;
        border-top: 1.5px solid #8aaa30;
      }

      /* Left sidebar in timeline row */
      .timeline-sidebar {
        background: #c2d44e;
        border-right: 2px dashed #6a8820;
        display: flex;
        align-items: stretch;
        padding: 8px 10px 10px 12px;
        gap: 6px;
      }

      .timeline-sidebar .rot-label {
        min-height: 100px;
        width: 18px;
      }

      .sidebar-boxes {
        display: flex;
        flex-direction: column;
        gap: 6px;
        flex: 1;
      }

      .sidebar-boxes textarea {
        flex: 1;
        background: #fff;
        border: 1.5px solid #6a8820;
        padding: 5px 4px;
        /* font-family: Arial, sans-serif; */
        font-family: 'Montserrat SemiBold';
        font-size: 10px;
        resize: none;
        outline: none;
        min-height: 44px;
      }

      .sidebar-boxes textarea:focus { border-color: #3a9090; }

      /* Timeline right panel */
      .timeline-panel {
        background: #fff;
        padding: 10px 12px 14px 10px;
        position: relative;
        min-height: 170px;
      }

      /* Birth + arrow row */
      .birth-line {
        display: flex;
        align-items: flex-start;
        gap: 4px;
      }

      .birth-label {
        writing-mode: vertical-rl;
        transform: rotate(180deg);
        font-size: 0.65rem;
        font-weight: bold;
        color: #2a3d00;
        white-space: nowrap;
        letter-spacing: 0.04em;
        margin-top: 4px;
        flex-shrink: 0;
      }

      /* Arrow track */
      .arrow-track {
        flex: 1;
        position: relative;
        height: 150px;
        margin-right: 88px; /* space for Current Concerns */
      }

      /* Horizontal arrow */
      .h-arrow {
        position: absolute;
        top: 22px;
        left: 0;
        right: 0;
        height: 0;
        display: flex;
        align-items: center;
      }

      .h-arrow-line {
        flex: 1;
        height: 2px;
        background: #888;
      }

      .h-arrow-head {
        width: 0;
        height: 0;
        border-top: 9px solid transparent;
        border-bottom: 9px solid transparent;
        border-left: 18px solid #888;
        flex-shrink: 0;
      }

      /* Event columns — 6 across the timeline */
      .events-row {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
      }

      .event-col {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 58px;
      }

      /* Top box sits on the arrow line */
      .ev-top {
        width: 52px;
        height: 22px;
        border: 1.5px solid #666;
        background: #fff;
        /* font-family: Arial, sans-serif; */
        font-family: 'Montserrat SemiBold';
        font-size: 9px;
        padding: 2px 3px;
        resize: none;
        outline: none;
        overflow: hidden;
        margin-bottom: 2px; /* aligns bottom of box to arrow top */
        margin-top: 4px;
      }

      .ev-top:focus { border-color: #3a9090; }

      /* Tick line (teal, connecting arrow to lower boxes) */
      .ev-tick {
        width: 1.5px;
        height: 12px;
        background: #3a9090;
      }

      /* Two boxes below the arrow */
      .ev-mid, .ev-bot {
        width: 48px;
        height: 20px;
        border: 1.5px solid #666;
        background: #fff;
        /* font-family: Arial, sans-serif; */
        font-family: 'Montserrat SemiBold';
        font-size: 9px;
        padding: 2px 3px;
        resize: none;
        outline: none;
        overflow: hidden;
        margin-top: 2px;
      }

      .ev-mid:focus, .ev-bot:focus { border-color: #3a9090; }

      /* Current Concerns — absolutely positioned on the right */
      .current-concerns {
        position: absolute;
        right: 0;
        top: 0;
        width: 84px;
        display: flex;
        flex-direction: column;
        align-items: flex-end;
        gap: 5px;
      }

      .cc-label {
        font-size: 0.68rem;
        font-weight: bold;
        color: #2a3d00;
        text-align: right;
        line-height: 1.3;
        white-space: nowrap;
      }

      .cc-box {
        width: 76px;
        height: 90px;
        border: 1.5px solid #666;
        background: #fff;
        /* font-family: Arial, sans-serif; */
        font-family: 'Montserrat SemiBold';
        font-size: 10px;
        padding: 5px;
        resize: none;
        outline: none;
      }

      .cc-box:focus { border-color: #3a9090; }

      /* ══════════════════════════════════════
        ROW 4 — Signs, Symptoms or Diseases
      ══════════════════════════════════════ */
      .row4 {
        background: #d4e060;
        border-top: 1.5px solid #8aaa30;
        padding: 10px 14px 14px;
      }

      .row4 .cell-title {
        margin-bottom: 8px;
      }

      .row4 textarea.white-box {
        width: 100%;
        height: 64px;
      }

      /* ══════════════════════════════════════
        FOOTER
      ══════════════════════════════════════ */
      .footer {
        border-top: 1px solid #aaa;
        background: #f5f5f5;
        padding: 6px 14px;
        display: flex;
        flex-wrap: wrap;
        gap: 0 28px;
        align-items: center;
      }

      .f-field {
        display: flex;
        align-items: center;
        gap: 15px;
        height: 40px;
      }

      .f-field label {
        font-size: 0.7rem;
        color: #444;
        white-space: nowrap;
      }

      .f-field input {
        border: none;
        border-bottom: 1px solid #888;
        background: transparent;
        padding: 2px 3px;
        font-size: 0.75rem;
        /* font-family: Arial, sans-serif; */
        font-family: 'Montserrat SemiBold';
        outline: none;
        min-width: 90px;
      }

      .f-field input:focus { border-bottom-color: #3a9090; }

      /* Medicine Timeline Ends  */

      @media (max-width: 580px) {
        form, .header, .banner { padding-left: 20px; padding-right: 20px; }
        .row.col2, .row.col3, .check-grid { grid-template-columns: 1fr; }
      }
      footer, #paymentModal, #whatsappMessageModal{
        display:none;
      }
      
      /* Table starts  */
      .page-table {
        background: #fff9f3;
        /* width: 480px; */
        padding: 36px 32px 40px;
        box-shadow: 0 2px 20px rgba(0,0,0,0.08), 0 0 0 1px rgba(0,0,0,0.04);
      }

      .table-wrapper {
        width: 100%;
        border: 1.5px solid #1a1a1a;
      }

      table {
        width: 100%;
        border-collapse: collapse;
        /* font-family: 'IBM Plex Mono', monospace; */
        font-family: 'Montserrat SemiBold';
        font-size: 10px;
      }

      thead tr {
        background: #ffffff;
      }

      thead th {
        border: 1px solid #1a1a1a;
        padding: 6px 8px;
        text-align: left;
        /* font-family: 'IBM Plex Sans', sans-serif; */
        font-family: 'Montserrat SemiBold';
        font-weight: 600;
        font-size: 16px;
        letter-spacing: 0.04em;
        text-transform: uppercase;
        line-height: 1.3;
        vertical-align: top;
      }

      thead th.highlight {
        background: #cce4ff;
        color: #003a6e;
      }

      thead th .subtext {
        display: block;
        font-weight: 600;
        font-size: 16px;
        color: #555;
        margin-top: 1px;
      }

      thead th.highlight .subtext {
        color: #2a5f9e;
      }

      tbody tr {
        height: 40px;
      }

      tbody tr:nth-child(even) {
        background: #fafafa;
      }

      tbody td {
        border: 1px solid #c8c8c8;
        padding: 0 8px;
        height: 25px;
      }

      .footer {
        margin-top: 24px;
        /* font-family: 'IBM Plex Sans', sans-serif; */
        font-family: 'Montserrat SemiBold';
        font-size: 10px;
        color: #333;
      }

      .footer .label {
        font-weight: 500;
        margin-bottom: 6px;
        letter-spacing: 0.02em;
      }

      .footer .line {
        border-bottom: 1px solid #1a1a1a;
        margin-bottom: 10px;
        height: 18px;
      }
      /* Table ends  */

      @media print {
    		.printbtn,.prev,.next {
    		    display: none;
    		}
    		body{
		        /* font-family: 'Roboto', sans-serif!important; */
            font-family: 'Montserrat SemiBold';
		    }
		  }
    </style>
  </head>
  <body>

    <div class="page">
      <?php if (isset($_GET['success'])): ?>
        <div class="banner success">
          ✅ Form submitted successfully! Patient ID: <strong>#<?= htmlspecialchars($_GET['id']) ?></strong>
        </div>
      <?php elseif (isset($_GET['error'])): ?>
        <div class="banner error">
          ❌ Something went wrong. Please try again.
        </div>
      <?php endif; ?>

      <form method="POST" id="main_form">
        <div class="registration_form" >
            <div class="step" id="step1">
                <div class="header">
                  <img src="upload/salebrity.png" class="logo">
                    <h1>Patient Screening Form</h1>
                    <p>Please fill in all sections as accurately as possible</p>
                </div>
                
                <!-- Registration -->
                <p class="section-title">Registration Details</p>

                <div class="row col2">
                    <div class="field">
                        <label for="full_name">Full Name </label>
                        <input type="text" id="full_name" name="full_name" value="<?=isset($edit) ? $edit['full_name'] : ''?>" placeholder="As per official records" required>
                    </div>
                    <div class="field">
                      <label for="dob">Date of Birth (DD/MM/YYYY)</label>
                      <input type="date" id="dob" class="date" name="dob" value="<?=isset($edit) ? $edit['dob'] : ''?>" placeholder="DD/MM/YYYY">
                    </div>
                </div>

                <div class="row col2">
                    <div class="field">
                        <label for="cell">Cell No. (with country code)</label>
                        <input type="number" id="cont" name="cont" value="<?=isset($edit) ? $edit['cont'] : ''?>" placeholder="+91 98765 43210">
                    </div>
                    <div class="field">
                        <label for="email">Email ID</label>
                        <input type="email" id="email" name="email" value="<?=isset($edit) ? $edit['email'] :''?>" placeholder="you@email.com">
                    </div>
                </div>

                <div class="row col3">
                    <div class="field">
                        <label for="city">City</label>
                        <input type="text" id="city" name="city" value="<?=isset($edit) ? $edit['city'] : ''?>" placeholder="City">
                    </div>
                    <div class="field">
                        <label for="state">State / Province</label>
                        <input type="text" id="state" name="state" value="<?=isset($edit) ? $edit['state'] : ''?>" placeholder="State">
                    </div>
                    <div class="field">
                        <label for="country">Country</label>
                        <input type="text" id="country" name="country" value="<?=isset($edit) ? $edit['country'] : ''?>" placeholder="Country">
                    </div>
                </div>

                <div class="row col2">
                    <div class="field">
                        <label for="marital_status">Marital Status</label>
                        <select id="marital_status" name="marital_status">
                          <option value="">Select…</option>
                          <option value="Single" <?=isset($edit) && $edit['marital_status']=='Single' ? 'selected' : ''?>>Single</option>
                          <option value="Married" <?=isset($edit) && $edit['marital_status']=='Married' ? 'selected' : ''?>>Married</option>
                          <option value="Divorced" <?=isset($edit) && $edit['marital_status']=='Divorced' ? 'selected' : ''?>>Divorced</option>
                          <option value="Other" <?=isset($edit) && $edit['marital_status']=='Other' ? 'selected' : ''?>>Other</option>
                        </select>
                    </div>
                    <div class="field">
                        <label for="occupation">Occupation</label>
                        <input type="text" id="occupation" name="occupation" value="<?=isset($edit) ? $edit['occupation'] : ''?>" placeholder="Your occupation">
                    </div>
                </div>

                <!-- Health Concerns -->
                <p class="section-title">Top Health Concerns</p>
                <div class="check-grid">
                    <label class="check-item"><input type="checkbox" name="gut_health" <?=isset($edit) && $edit['gut_health']=='Gut Health' ? 'checked' : ''?> value="Gut Health"><span>Gut Health</span></label>

                    <input type="text" id="gut_health1" name="gut_health1" value="<?=isset($edit) ? $edit['gut_health1'] : ''?>" placeholder="Gut Health">

                    <label class="check-item"><input type="checkbox" name="thyroid_disorders" <?=isset($edit) && $edit['thyroid_disorders']=='Thyroid Disorders' ? 'checked' : ''?> value="Thyroid Disorders"><span>Thyroid Disorders</span></label>

                    <input type="text" id="thyroid_disorders1" name="thyroid_disorders1" value="<?=isset($edit) ? $edit['thyroid_disorders1'] : ''?>" placeholder="Thyroid Disorders">

                    <label class="check-item"><input type="checkbox" name="auto_tmmunity" <?=isset($edit) && $edit['auto_tmmunity']=='Auto Immunity' ? 'checked' : ''?> value="Auto Immunity"><span>Auto Immunity</span></label>
                    
                    <input type="text" id="auto_tmmunity1" name="auto_tmmunity1" value="<?=isset($edit) ? $edit['auto_tmmunity1'] : ''?>" placeholder="Auto Immunity">

                    <label class="check-item"><input type="checkbox" name="chronic_inflammation" <?=isset($edit) && $edit['chronic_inflammation']=='Chronic Inflammation' ? 'checked' : ''?> value="Chronic Inflammation"><span>Chronic Inflammation</span></label>

                    <input type="text" id="chronic_inflammation1" name="chronic_inflammation1" value="<?=isset($edit) ? $edit['chronic_inflammation1'] : ''?>" placeholder="Chronic Inflammation">

                    <label class="check-item"><input type="checkbox" name="obesity_overweight" <?=isset($edit) && $edit['obesity_overweight']=='Obesity / Overweight' ? 'checked' : ''?> value="Obesity / Overweight"><span>Obesity / Overweight</span></label>

                    <input type="text" id="obesity_overweight1" name="obesity_overweight1" value="<?=isset($edit) ? $edit['obesity_overweight1'] : ''?>" placeholder="Obesity / Overweight">

                    <label class="check-item"><input type="checkbox" name="diabetes_insulin_resistance" <?=isset($edit) && $edit['diabetes_insulin_resistance']=='Diabetes / Insulin Resistance' ? 'checked' : ''?> value="Diabetes / Insulin Resistance"><span>Diabetes / Insulin Resistance</span></label>

                    <input type="text" id="diabetes_insulin_resistance1" name="diabetes_insulin_resistance1" value="<?=isset($edit) ? $edit['diabetes_insulin_resistance1'] : ''?>" placeholder="Diabetes / Insulin Resistance">

                    <label class="check-item"><input type="checkbox" name="fatty_liver" <?=isset($edit) && $edit['fatty_liver']=='Fatty Liver' ? 'checked' : ''?> value="Fatty Liver"><span>Fatty Liver</span></label>

                    <input type="text" id="fatty_liver1" name="fatty_liver1" value="<?=isset($edit) ? $edit['fatty_liver1'] : ''?>" placeholder="Fatty Liver">

                    <label class="check-item"><input type="checkbox" name="pcos_pcod" <?=isset($edit) && $edit['pcos_pcod']=='PCOS / PCOD' ? 'checked' : ''?> value="PCOS / PCOD"><span>PCOS / PCOD</span></label>

                    <input type="text" id="pcos_pcod1" name="pcos_pcod1" value="<?=isset($edit) ? $edit['pcos_pcod1'] : ''?>" placeholder="PCOS / PCOD">

                    <label class="check-item"><input type="checkbox" name="o_hormonal_issues" <?=isset($edit) && $edit['o_hormonal_issues']=='Other Hormonal Issues' ? 'checked' : ''?> value="Other Hormonal Issues"><span>Other Hormonal Issues</span></label>

                    <input type="text" id="o_hormonal_issues1" name="o_hormonal_issues1" value="<?=isset($edit) ? $edit['o_hormonal_issues1'] : ''?>" placeholder="Other Hormonal Issues">

                    <label class="check-item"><input type="checkbox" name="hypertension_high_blood_pressure" <?=isset($edit) && $edit['hypertension_high_blood_pressure']=='Hypertension / High Blood Pressure' ? 'checked' : ''?> value="Hypertension / High Blood Pressure"><span>Hypertension / High Blood Pressure</span></label>

                    <input type="text" id="hypertension_high_blood_pressure1" name="hypertension_high_blood_pressure1" value="<?=isset($edit) ? $edit['hypertension_high_blood_pressure1'] : ''?>" placeholder="Hypertension / High Blood Pressure">

                    <label class="check-item"><input type="checkbox" name="nasal_allergy" <?=isset($edit) && $edit['nasal_allergy']=='Nasal Allergy' ? 'checked' : ''?> value="Nasal Allergy"><span>Nasal Allergy</span></label>

                    <input type="text" id="nasal_allergy1" name="nasal_allergy1" value="<?=isset($edit) ? $edit['nasal_allergy1'] : ''?>" placeholder="Nasal Allergy">

                    <label class="check-item"><input type="checkbox" name="general_detox" <?=isset($edit) && $edit['general_detox']=='General Detox / Elective Wellness / Longevity / Restoration' ? 'checked' : ''?> value="General Detox / Elective Wellness / Longevity / Restoration"><span>General Detox / Elective Wellness / Longevity / Restoration</span></label>

                    <input type="text" id="general_detox1" name="general_detox1" value="<?=isset($edit) ? $edit['general_detox1'] : ''?>" placeholder="General Detox / Elective Wellness / Longevity / Restoration">

                    <label class="check-item" style="grid-column:1/-1"><input type="checkbox" name="others" <?=isset($edit) && $edit['others']=='Other' ? 'checked' : ''?> value="Other"><span>Other</span></label>
                    <input type="text" id="others1" name="others1" value="<?=isset($edit) ? $edit['others1'] : ''?>" placeholder="Other">
                </div>

                <!-- Medications -->
                <p class="section-title">Current Medications / Supplements</p>
                <div class="field">
                    <label for="medications">List any current medications or supplements (if any)</label>
                    <textarea id="medications" name="medications" value="<?=isset($edit) ? $edit['medications'] : ''?>" placeholder="e.g. Metformin 500mg, Vitamin D3…"></textarea>
                </div>

                <!-- Preferences -->
                <p class="section-title">Your Preferences</p>

                <p class="pill-label">Consultation Type</p>
                <div class="pill-row">
                    <label class="pill"><input type="radio" name="consultation_type" <?=isset($edit) && $edit['consultation_type']=='Online (video call)' ? 'checked' : ''?> value="Online (video call)"> Online (video call)</label>

                    <label class="pill"><input type="radio" name="consultation_type" <?=isset($edit) && $edit['consultation_type']=='Offline (in person)' ? 'checked' : ''?> value="Offline (in person)"> Offline (in person)</label>
                </div>

                <p class="pill-label">When to schedule?</p>
                <div class="pill-row">
                    <label class="pill"><input type="radio" name="schedule_when" <?=isset($edit) && $edit['schedule_when']=='This Week' ? 'checked' : ''?> value="This Week"> This Week</label>
                    <label class="pill"><input type="radio" name="schedule_when" <?=isset($edit) && $edit['schedule_when']=='Next Week' ? 'checked' : ''?> value="Next Week"> Next Week</label>
                    <label class="pill"><input type="radio" name="schedule_when" <?=isset($edit) && $edit['schedule_when']=='Next Month' ? 'checked' : ''?> value="Next Month"> Next Month</label>
                </div>

                <p class="pill-label">Can you visit twice a week for 3 weeks (~2 hrs/visit)?</p>
                <div class="pill-row">
                    <label class="pill"><input type="radio" name="procedure_visits" <?=isset($edit) && $edit['procedure_visits']=='Yes' ? 'checked' : ''?> value="Yes"> Yes</label>
                    <label class="pill"><input type="radio" name="procedure_visits" <?=isset($edit) && $edit['procedure_visits']=='No' ? 'checked' : ''?> value="No"> No</label>
                </div>

                <p class="pill-label">If we recommend a diet, how much can you follow?</p>
                <div class="pill-row">
                    <label class="pill"><input type="radio" name="diet_compliance" <?=isset($edit) && $edit['diet_compliance']=='100%' ? 'checked' : ''?> value="100%"> 100%</label>
                    <label class="pill"><input type="radio" name="diet_compliance" <?=isset($edit) && $edit['diet_compliance']=='75%' ? 'checked' : ''?> value="75%"> 75%</label>
                    <label class="pill"><input type="radio" name="diet_compliance" <?=isset($edit) && $edit['diet_compliance']=='50%' ? 'checked' : ''?> value="50%"> 50%</label>
                    <label class="pill"><input type="radio" name="diet_compliance" <?=isset($edit) && $edit['diet_compliance']=='25%' ? 'checked' : ''?> value="25%"> 25%</label>
                </div>

                <p class="pill-label">How soon do you expect to feel better after starting treatment?</p>
                <div class="pill-row">
                    <label class="pill"><input type="radio" name="recovery_timeline" <?=isset($edit) && $edit['recovery_timeline']=='Within 1 week' ? 'checked' : ''?> value="Within 1 week"> Within 1 week</label>

                    <label class="pill"><input type="radio" name="recovery_timeline" <?=isset($edit) && $edit['recovery_timeline']=='3 to 4 weeks' ? 'checked' : ''?> value="3 to 4 weeks"> 3–4 weeks</label>

                    <label class="pill"><input type="radio" name="recovery_timeline" <?=isset($edit) && $edit['recovery_timeline']=='6 to 8 weeksher' ? 'checked' : ''?> value="6 to 8 weeks"> 6–8 weeks</label>
                </div>
                <button type="button" class="prev">Prev</button>
                <button type="button" class="next">Next</button>
            </div>

            <!-- Matrix starts  -->
            <div id="step2" class="step" style="display:none;">
                <div class="page-matrix">
                    <!-- Header -->
                    <div class="top-header">
                        <div class="fm-badge">
                        <!-- <span class="fm-label">Functional</span> -->
                        <h1>ROOT CAUSE <br>MATRIX</h1>
                        </div>
                        <div class="top-title">
                          <div class="fm-badge">
                          <h1 style="color:#fff;">Physiology and Function: Organizing the Patient's Clinical Imbalances</h1>
                          </div>
                          <img src="upload/salebrity.png" class="logo" style="width: 90px;margin: 0px 11px;margin-top: 0px;">
                        </div>
                    </div>

                    <!-- Main body -->
                    <div class="main-body">
                        <!-- Left: Retelling the Story -->
                        <div class="left-panel">
                        <div class="panel-title">Retelling the Patient's Story</div>

                        <div class="left-field">
                            <label for="antecedents">Antecedents</label>
                            <textarea id="antecedents" name="antecedents"><?=$edit['antecedents']?></textarea>
                        </div>

                        <div class="left-field">
                            <label for="triggering_events">Triggering Events</label>
                            <textarea id="triggering_events" name="triggering_events"><?=$edit['triggering_events']?></textarea>
                        </div>

                        <div class="left-field">
                            <label for="mediators_perpetuators">Mediators/Perpetuators</label>
                            <textarea id="mediators_perpetuators" name="mediators_perpetuators"><?=$edit['mediators_perpetuators']?></textarea>
                        </div>
                        </div>

                        <!-- Right: Physiology grid -->
                        <div class="right-panel">
                        <div class="physio-grid">

                            <!-- Row 1 -->
                            <div class="phys-box">
                            <label for="assimilation">Assimilation</label>
                            <textarea id="assimilation" name="assimilation"><?=$edit['assimilation']?></textarea>
                            </div>

                            <!-- Circle: spans rows 1–3 in col 2 -->
                            <div class="circle-center">
                              <!-- <div class="circle-wrap">
                                <svg viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="50" cy="50" r="40" stroke="#3a7c7c" stroke-width="1.5" fill="none"/>
                                <circle cx="50" cy="50" r="24" stroke="#3a7c7c" stroke-width="1" stroke-dasharray="4 3" fill="none"/> -->
                                <!-- curved arrows -->
                                <!-- <path d="M50 10 A40 40 0 0 1 90 50" stroke="#3a7c7c" stroke-width="1.5" fill="none" marker-end="url(#a1)"/>
                                <path d="M90 50 A40 40 0 0 1 50 90" stroke="#3a7c7c" stroke-width="1.5" fill="none" marker-end="url(#a1)"/>
                                <path d="M50 90 A40 40 0 0 1 10 50" stroke="#3a7c7c" stroke-width="1.5" fill="none" marker-end="url(#a1)"/>
                                <path d="M10 50 A40 40 0 0 1 50 10" stroke="#3a7c7c" stroke-width="1.5" fill="none" marker-end="url(#a1)"/>
                                <defs>
                                    <marker id="a1" markerWidth="5" markerHeight="5" refX="4" refY="2.5" orient="auto">
                                    <path d="M0,0 L5,2.5 L0,5 Z" fill="#3a7c7c"/>
                                    </marker>
                                </defs>
                                </svg>
                                <span class="circle-label mental">Mental</span>
                                <span class="circle-label emotional">Emotional</span>
                                <span class="circle-label spiritual">Spiritual</span>
                              </div> -->

                              <div class="scene">
                                <svg class="arrows" viewBox="0 0 380 360">
                                  <defs>
                                    <marker id="arr-end" markerWidth="8" markerHeight="8" refX="7" refY="3" orient="auto">
                                      <path d="M0,0 L0,6 L8,3 z" fill="#2b7a8e"/>
                                    </marker>
                                    <marker id="arr-start" markerWidth="8" markerHeight="8" refX="1" refY="3" orient="auto-start-reverse">
                                      <path d="M0,0 L0,6 L8,3 z" fill="#2b7a8e"/>
                                    </marker>
                                  </defs>

                                  <!-- Mental ↔ Emotional: arc curving upward (bidirectional) -->
                                  <path
                                    d="M 128,72 C 158,18 222,18 252,72"
                                    marker-start="url(#arr-start)"
                                    marker-end="url(#arr-end)"
                                  />

                                  <!-- Emotional ↔ Spiritual: arc curving right (bidirectional) -->
                                  <path
                                    d="M 300,108 C 344,192 318,268 244,294"
                                    marker-start="url(#arr-start)"
                                    marker-end="url(#arr-end)"
                                  />

                                  <!-- Spiritual ↔ Mental: arc curving left (bidirectional) -->
                                  <path
                                    d="M 136,294 C 62,268 36,192 80,108"
                                    marker-start="url(#arr-start)"
                                    marker-end="url(#arr-end)"
                                  />
                                </svg>

                                <div class="node node-mental">Mental</div>
                                <input type="text" style="position: relative;top: 68%;left: -72%;" id="mental" name="mental" value="<?=isset($edit) ? $edit['mental'] : ''?>" placeholder="Mental">

                                <div class="node node-emotional">Emotional</div>
                                <input type="text" style="position: relative;top: 34%;right: -72%;" id="emotional" name="emotional" value="<?=isset($edit) ? $edit['emotional'] : ''?>" placeholder="Emotional">

                                <div class="node node-spiritual">Spiritual</div>
                                <input style="position: relative;top: 128%;right: -6%;" type="text" id="spiritual" name="spiritual" value="<?=isset($edit) ? $edit['spiritual'] : ''?>" placeholder="Spiritual">

                              </div>
                            </div>

                            <div class="phys-box">
                            <label for="defense_repair">Defense &amp; Repair</label>
                            <textarea id="defense_repair" name="defense_repair"><?=$edit['defense_repair']?></textarea>
                            </div>

                            <!-- Row 2 -->
                            <div class="phys-box">
                            <label for="structural_integrity">Structural Integrity</label>
                            <textarea id="structural_integrity" name="structural_integrity"><?=$edit['structural_integrity']?></textarea>
                            </div>

                            <div></div><!-- circle column placeholder -->

                            <div class="phys-box">
                            <label for="energy">Energy</label>
                            <textarea id="energy" name="energy"><?=$edit['energy']?></textarea>
                            </div>

                            <!-- Row 3 -->
                            <div class="phys-box">
                            <label for="communication">Communication</label>
                            <textarea id="communication" name="communication"><?=$edit['communication']?></textarea>
                            </div>

                            <div></div>

                            <div class="phys-box">
                            <label for="biotransformation">Biotransformation &amp; Elimination</label>
                            <textarea id="biotransformation" name="biotransformation"><?=$edit['biotransformation']?></textarea>
                            </div>

                        </div>

                        <!-- Transport -->
                        <div class="transport-wrap">
                            <div class="transport-box">
                            <label for="transport">Transport</label>
                            <textarea id="transport" name="transport"><?=$edit['transport']?></textarea>
                            </div>
                        </div>

                        </div>
                    </div>

                    <!-- Lifestyle -->
                    <div class="lifestyle-section">
                        <div class="lifestyle-header">Modifiable Personal Lifestyle Factors</div>
                        <div class="lifestyle-grid">
                        <div class="lifestyle-col">
                            <label for="sleep_relaxation">Sleep &amp; Relaxation</label>
                            <textarea id="sleep_relaxation" name="sleep_relaxation"><?=$edit['sleep_relaxation']?></textarea>
                        </div>
                        <div class="lifestyle-col">
                            <label for="exercise_movement">Exercise &amp; Movement</label>
                            <textarea id="exercise_movement" name="exercise_movement"><?=$edit['exercise_movement']?></textarea>
                        </div>
                        <div class="lifestyle-col">
                            <label for="nutrition">Nutrition</label>
                            <textarea id="nutrition" name="nutrition"><?=$edit['nutrition']?></textarea>
                        </div>
                        <div class="lifestyle-col">
                            <label for="stress">Stress</label>
                            <textarea id="stress" name="stress"><?=$edit['stress']?></textarea>
                        </div>
                        <div class="lifestyle-col">
                            <label for="relationships">Relationships</label>
                            <textarea id="relationships" name="relationships"><?=$edit['relationships']?></textarea>
                        </div>
                        </div>
                    </div>

                    <!-- Footer -->
                    <div class="form-footer">
                        <div class="footer-field">
                        <label for="patient_name">Name:</label>
                        <input type="text" id="patient_name" name="patient_name" value="<?=isset($edit) ? $edit['patient_name'] : ''?>">
                        </div>
                        <div class="footer-field">
                        <label for="form_date">Date:</label>
                        <input type="date" class="date" id="form_date" name="date" value="<?=isset($edit) ? $edit['date'] : ''?>" placeholder="DD/MM/YYYY">
                        </div>
                        <div class="footer-field uhid">
                        <label for="uhid">UHID:</label>
                        <input type="text" id="uhid" name="uhid" value="<?=isset($edit) ? $edit['uhid'] : ''?>">
                        </div>
                        <!-- <button type="button" class="print-btn" onclick="window.print()">Print</button> -->
                    </div>
                </div>

                <button type="button" class="prev">Prev</button>
                <button type="button" class="next">Next</button>
            </div>
            <!-- matrix ends -->

            <!-- Personal History Starts -->
            <div id="step3" class="step" style="display:none;">
              <div class="page-history">
                <!-- Header -->
                <div class="header">
                    <img src="upload/salebrity.png" class="logo">
                    <h1>Personal History &amp; Lifestyle</h1>
                    <p>Please fill in all sections as accurately as possible</p>
                </div>
                <!-- ── Sleep ── -->
                <p class="section-title">Sleep</p>

                <span class="field-label">Sleep Quality</span>
                <div class="check-group">
                <label class="check-card"><input type="checkbox" name="sleep_adequate" value="Adequate" <?=isset($edit) && $edit['sleep_adequate']=='Adequate' ? 'checked' : ''?>> Adequate</label>

                <label class="check-card"><input type="checkbox" name="sleep_slightly_disturbed" <?=isset($edit) && $edit['sleep_slightly_disturbed']=='Slightly / occasionally disturbed' ? 'checked' : ''?> value="Slightly / occasionally disturbed"> Slightly / occasionally disturbed</label>

                <label class="check-card"><input type="checkbox" name="sleep_severely_disturbed" <?=isset($edit) && $edit['sleep_severely_disturbed']=='Severely disturbed' ? 'checked' : ''?> value="Severely disturbed"> Severely disturbed</label>
                </div>

                <div class="grid2">
                <div>
                    <span class="field-label">Duration (hours/night)</span>
                    <input type="number" name="sleep_duration" class="input-full" value="<?=isset($edit) ? $edit['sleep_duration']: ''?>" placeholder="e.g. 7" min="0" max="24" step="0.5">
                </div>
                </div>

                <!-- ── Thirst ── -->
                <p class="section-title">Thirst &amp; Hydration</p>

                <span class="field-label">Thirst Level</span>
                <div class="check-group">
                <label class="check-card"><input type="checkbox" name="thirst_high" value="High" <?=isset($edit) && $edit['thirst_high']=='High' ? 'checked' : ''?>> High</label>
                <label class="check-card"><input type="checkbox" name="thirst_adequate" value="Adequate"<?=isset($edit) && $edit['thirst_adequate']=='Adequate' ? 'checked' : ''?>> Adequate</label>
                <label class="check-card"><input type="checkbox" name="thirst_low" value="Low" <?=isset($edit) && $edit['thirst_low']=='Low' ? 'checked' : ''?>> Low</label>
                </div>

                <div class="grid2">
                <div>
                    <span class="field-label">Quantity (litres/day)</span>
                    <input type="number" name="thirst_quantity" class="input-full" value="<?=isset($edit) ? $edit['thirst_quantity'] : ''?>" placeholder="e.g. 2.5" min="0" step="0.5">
                </div>
                </div>

                <!-- ── Bowel ── -->
                <p class="section-title">Bowel Habits</p>

                <span class="field-label">Bowel Pattern</span>
                <div class="check-group">
                <label class="check-card"><input type="checkbox" name="bowel_regular" value="Low" <?=isset($edit) && $edit['bowel_regular']=='Regular with nil to occasional constipation' ? 'checked' : ''?>> Regular with nil to occasional constipation</label>

                <label class="check-card"><input type="checkbox" name="bowel_constipated" value="Constipated / incomplete feeling of evacuation" <?=isset($edit) && $edit['bowel_constipated']=='Constipated / incomplete feeling of evacuation' ? 'checked' : ''?>> Constipated / incomplete feeling of evacuation</label>

                <label class="check-card"><input type="checkbox" name="bowel_loose" value="Loose stools / incompletely formed stools" <?=isset($edit) && $edit['bowel_loose']=='Loose stools / incompletely formed stools' ? 'checked' : ''?>> Loose stools / incompletely formed stools</label>
                </div>

                <div class="inset-card">
                <div class="grid3">
                    <div>
                    <span class="field-label">Bristol Stool Score (1–7)</span>
                    <input type="number" name="bristol_score" class="input-full" value="<?=isset($edit) ? $edit['bristol_score'] : ''?>" placeholder="4–5" min="1" max="7">
                    </div>
                    <div>
                    <span class="field-label">Frequency (times/day)</span>
                    <input type="text" name="bowel_frequency" class="input-full" value="<?=isset($edit) ? $edit['bowel_frequency'] : ''?>" placeholder="e.g. 1–2">
                    </div>
                    <div>
                    <span class="field-label">Blood / Mucus in stool</span>
                    <div class="yn-group pill-group">
                        <label class="pill"><input type="radio" name="blood_mucus" <?=isset($edit) && $edit['blood_mucus']=='Yes' ? 'checked' : ''?> value="Yes"> Yes</label>
                        <label class="pill"><input type="radio" name="blood_mucus" <?=isset($edit) && $edit['blood_mucus']=='No' ? 'checked' : ''?> value="No"> No</label>
                    </div>
                    </div>
                </div>
                </div>

                <!-- ── Urination ── -->
                <p class="section-title">Urination</p>

                <span class="field-label">Frequency</span>
                <div class="pill-group">
                <label class="pill"><input type="radio" name="urine_frequency" <?=isset($edit) && $edit['urine_frequency']=='Increased' ? 'checked' : ''?> value="Increased"> Increased frequency</label>

                <label class="pill"><input type="radio" name="urine_frequency" <?=isset($edit) && $edit['urine_frequency']=='Normal' ? 'checked' : ''?> value="Normal"> Normal frequency</label>

                <label class="pill"><input type="radio" name="urine_frequency" <?=isset($edit) && $edit['urine_frequency']=='Reduced' ? 'checked' : ''?> value="Reduced"> Reduced frequency</label>
                </div>

                <div class="inset-card">
                <div class="grid4">
                    <div>
                    <span class="field-label">Incontinence</span>
                    <div class="yn-group">
                        <label class="pill"><input type="radio" name="incontinence" <?=isset($edit) && $edit['incontinence']=='Yes' ? 'checked' : ''?> value="Yes"> Yes</label>
                        <label class="pill"><input type="radio" name="incontinence" <?=isset($edit) && $edit['incontinence']=='No' ? 'checked' : ''?> value="No"> No</label>
                    </div>
                    </div>
                    <div>
                    <span class="field-label">Frothy</span>
                    <div class="yn-group">
                        <label class="pill"><input type="radio" name="urine_frothy" <?=isset($edit) && $edit['urine_frothy']=='Yes' ? 'checked' : ''?> value="Yes"> Yes</label>
                        <label class="pill"><input type="radio" name="urine_frothy" <?=isset($edit) && $edit['urine_frothy']=='No' ? 'checked' : ''?> value="No"> No</label>
                    </div>
                    </div>
                    <div>
                    <span class="field-label">Burning</span>
                    <div class="yn-group">
                        <label class="pill"><input type="radio" name="urine_burning" <?=isset($edit) && $edit['urine_burning']=='Yes' ? 'checked' : ''?> value="Yes"> Yes</label>
                        <label class="pill"><input type="radio" name="urine_burning" <?=isset($edit) && $edit['urine_burning']=='No' ? 'checked' : ''?> value="No"> No</label>
                    </div>
                    </div>
                    
                </div>
                <div class="grid4">
                    <div>
                    
                    <span class="field-label">Blood in urine</span>
                    <div class="yn-group">
                        <label class="pill"><input type="radio" name="urine_blood" <?=isset($edit) && $edit['urine_blood']=='Yes' ? 'checked' : ''?> value="Yes"> Yes</label>
                        <label class="pill"><input type="radio" name="urine_blood" <?=isset($edit) && $edit['urine_blood']=='No' ? 'checked' : ''?> value="No"> No</label>
                    </div>
                    </div>
                </div>
                </div>

                <!-- ── Appetite ── -->
                <p class="section-title">Appetite</p>

                <span class="field-label">Appetite Level</span>
                <div class="pill-group">
                <label class="pill"><input type="radio" name="appetite" <?=isset($edit) && $edit['appetite']=='High' ? 'checked' : ''?> value="High"> High</label>
                <label class="pill"><input type="radio" name="appetite" <?=isset($edit) && $edit['appetite']=='Average' ? 'checked' : ''?> value="Average"> Average</label>
                <label class="pill"><input type="radio" name="appetite" <?=isset($edit) && $edit['appetite']=='Low' ? 'checked' : ''?> value="Low"> Low</label>
                </div>

                <div class="grid2">
                <div>
                    <span class="field-label">Food Intolerance / Allergy (if any)</span>
                    <input type="text" name="food_intolerance" value="<?=isset($edit) ? $edit['food_intolerance'] : ''?>" class="input-full" placeholder="e.g. Gluten, Lactose…">
                </div>
                </div>

                <!-- ── Menstruation ── -->
                <p class="section-title">Menstruation</p>

                <span class="field-label">Pattern</span>
                <div class="pill-group">
                <label class="pill"><input type="radio" name="menstruation" <?=isset($edit) && $edit['menstruation']=='Regular' ? 'checked' : ''?> value="Regular"> Regular</label>

                <label class="pill"><input type="radio" name="menstruation" <?=isset($edit) && $edit['menstruation']=='Regularly irregular' ? 'checked' : ''?> value="Regularly irregular"> Regularly irregular</label>

                <label class="pill"><input type="radio" name="menstruation" <?=isset($edit) && $edit['menstruation']=='Irregularly regular' ? 'checked' : ''?> value="Irregularly regular"> Irregularly regular</label>

                <label class="pill"><input type="radio" name="menstruation" <?=isset($edit) && $edit['menstruation']=='Irregular' ? 'checked' : ''?> value="Irregular"> Irregular</label>
                </div>

                <div class="inset-card">
                <div class="grid4">
                    <div>
                    <span class="field-label">Cycle (days)</span>
                    <input type="number" name="cycle_days" value="<?=isset($edit) ? $edit['cycle_days'] : ''?>" class="input-full" placeholder="28" min="1" max="60">
                    </div>
                    <div>
                    <span class="field-label">Bleeding (days)</span>
                    <input type="number" name="bleeding_days" value="<?=isset($edit) ? $edit['bleeding_days'] : ''?>" class="input-full" placeholder="5" min="1" max="14">
                    </div>
                    <div>
                    <span class="field-label">Cramps</span>
                    <div class="yn-group">
                        <label class="pill"><input type="radio" name="cramps" <?=isset($edit) && $edit['cramps']=='Increased' ? 'Yes' : ''?> value="Yes"> Yes</label>
                        <label class="pill"><input type="radio" name="cramps" <?=isset($edit) && $edit['cramps']=='Increased' ? 'No' : ''?> value="No"> No</label>
                    </div>
                    </div>
                    <div>
                    <span class="field-label">Clots</span>
                    <div class="yn-group">
                        <label class="pill"><input type="radio" name="clots" <?=isset($edit) && $edit['clots']=='Increased' ? 'Yes' : ''?> value="Yes"> Yes</label>
                        <label class="pill"><input type="radio" name="clots" <?=isset($edit) && $edit['clots']=='Increased' ? 'No' : ''?> value="No"> No</label>
                    </div>
                    </div>
                </div>
                </div>

                <!-- ── Obs & Gynec ── -->
                <p class="section-title">Obs &amp; Gynec History</p>

                <div class="grid4">
                <div>
                    <span class="field-label">Gravida (G)</span>
                    <input type="number" name="gravida" value="<?=isset($edit) ? $edit['gravida'] : ''?>" class="input-full" placeholder="0" min="0">
                </div>
                <div>
                    <span class="field-label">Para (P)</span>
                    <input type="number" name="para" value="<?=isset($edit) ? $edit['para'] : ''?>" class="input-full" placeholder="0" min="0">
                </div>
                <div>
                    <span class="field-label">Living Children (L)</span>
                    <input type="number" name="living_children" value="<?=isset($edit) ? $edit['living_children'] : ''?>" class="input-full" placeholder="0" min="0">
                </div>
                <div>
                    <span class="field-label">Abortion (A)</span>
                    <input type="number" name="abortion" value="<?=isset($edit) ? $edit['abortion'] : ''?>" class="input-full" placeholder="0" min="0">
                </div>
                </div>

                <div class="grid2">
                <div>
                    <span class="field-label">Last Menstrual Period (LMP)</span>
                    <input type="text" name="lmp" value="<?=isset($edit) ? $edit['lmp'] : ''?>" class="input-full" placeholder="DD/MM/YYYY">
                </div>
                <div>
                    <span class="field-label">Others, if any</span>
                    <input type="text" name="obs_other" value="<?=isset($edit) ? $edit['obs_other'] : ''?>" class="input-full" placeholder="Additional notes…">
                </div>
                </div>

                <!-- ── Addictions ── -->
                <p class="section-title">Addictions</p>

                <div class="addon-list">

                <div class="addon-item">
                    <div class="addon-title">Smoking</div>
                    <div class="pill-group" style="margin-bottom:10px">
                    <label class="pill"><input type="radio" name="smoking" <?=isset($edit) && $edit['smoking']=='Yes' ? 'checked' : ''?> value="Yes"> Yes</label>
                    <label class="pill"><input type="radio" name="smoking" <?=isset($edit) && $edit['smoking']=='No' ? 'checked' : ''?> value="No"> No</label>
                    </div>
                    <div class="grid2">
                    <div>
                        <span class="field-label">Duration (years)</span>
                        <input type="number" name="smoking_duration" value="<?=isset($edit) ? $edit['smoking_duration'] : ''?>" class="input-full" placeholder="e.g. 5" min="0">
                    </div>
                    <div>
                        <span class="field-label">Quantity per day</span>
                        <input type="text" name="smoking_quantity" value="<?=isset($edit) ? $edit['smoking_quantity'] : ''?>" class="input-full" placeholder="e.g. 10 cigarettes">
                    </div>
                    </div>
                </div>

                <div class="addon-item">
                    <div class="addon-title">Alcohol</div>
                    <div class="pill-group" style="margin-bottom:10px">
                    <label class="pill"><input type="radio" name="alcohol" <?=isset($edit) && $edit['alcohol']=='Yes' ? 'checked' : ''?> value="Yes"> Yes</label>
                    <label class="pill"><input type="radio" name="alcohol" <?=isset($edit) && $edit['alcohol']=='No' ? 'checked' : ''?> value="No"> No</label>
                    </div>
                    <div class="grid2">
                    <div>
                        <span class="field-label">Duration (years)</span>
                        <input type="number" name="alcohol_duration" value="<?=isset($edit) ? $edit['alcohol_duration'] : ''?>" class="input-full" placeholder="e.g. 3" min="0">
                    </div>
                    <div>
                        <span class="field-label">Quantity (per week / month)</span>
                        <input type="text" name="alcohol_quantity" value="<?=isset($edit) ? $edit['alcohol_quantity'] : ''?>" class="input-full" placeholder="e.g. 2 drinks/week">
                    </div>
                    </div>
                </div>

                <div class="addon-item">
                    <div class="addon-title">Tobacco (chewing / gutka)</div>
                    <div class="pill-group" style="margin-bottom:10px">
                    <label class="pill"><input type="radio" name="tobacco" <?=isset($edit) && $edit['tobacco']=='Yes' ? 'checked' : ''?> value="Yes"> Yes</label>
                    <label class="pill"><input type="radio" name="tobacco" <?=isset($edit) && $edit['tobacco']=='No' ? 'checked' : ''?> value="No"> No</label>
                    </div>
                    <div>
                    <span class="field-label">Details</span>
                    <input type="text" name="tobacco_details" value="<?=isset($edit) ? $edit['tobacco_details'] : ''?>" class="input-full" placeholder="Type, frequency…">
                    </div>
                </div>

                <div class="addon-item">
                    <div class="addon-title">Others</div>
                    <input type="text" name="addictions_other" value="<?=isset($edit) ? $edit['addictions_other'] : ''?>" class="input-full" placeholder="Any other addiction details…">
                </div>

                </div>

                <!-- ── Habits ── -->
                <p class="section-title">Habits</p>

                <div class="grid3">
                <div>
                    <span class="field-label">Tea (cups/day)</span>
                    <input type="number" name="tea_quantity" value="<?=isset($edit) ? $edit['tea_quantity'] : ''?>" class="input-full" placeholder="e.g. 2" min="0" step="0.5">
                </div>
                <div>
                    <span class="field-label">Coffee (cups/day)</span>
                    <input type="number" name="coffee_quantity" value="<?=isset($edit) ? $edit['coffee_quantity'] : ''?>" class="input-full" placeholder="e.g. 1" min="0" step="0.5">
                </div>
                <div>
                    <span class="field-label">Other (cups/day)</span>
                    <input type="text" name="other_drink_quantity" value="<?=isset($edit) ? $edit['other_drink_quantity'] : ''?>" class="input-full" placeholder="e.g. 2 glasses juice">
                </div>
                </div>

                <!-- ── Diet ── -->
                <p class="section-title">Diet</p>

                <span class="field-label">Diet Type</span>
                <div class="pill-group">
                <label class="pill"><input type="radio" name="diet_type" <?=isset($edit) && $edit['diet_type']=='Vegetarian' ? 'checked' : ''?> value="Vegetarian"> Vegetarian</label>
                <label class="pill"><input type="radio" name="diet_type" <?=isset($edit) && $edit['diet_type']=='Mixed' ? 'checked' : ''?> value="Mixed"> Mixed</label>
                </div>

                <div class="grid2">
                <div>
                    <span class="field-label">Other (specify)</span>
                    <input type="text" name="diet_other" value="<?=isset($edit) ? $edit['diet_other'] : ''?>" class="input-full" placeholder="e.g. Vegan, Keto…">
                </div>
                </div>

                <!-- ── Physical Activity ── -->
                <p class="section-title">Physical Activity</p>

                <div class="grid3">
                <div>
                    <span class="field-label">Type</span>
                    <input type="text" name="activity_type" value="<?=isset($edit) ? $edit['activity_type'] : ''?>" class="input-full" placeholder="e.g. Walking, Yoga">
                </div>
                <div>
                    <span class="field-label">Duration (hours)</span>
                    <input type="number" name="activity_duration" value="<?=isset($edit) ? $edit['activity_duration'] : ''?>" class="input-full" placeholder="e.g. 1" min="0" step="0.5">
                </div>
                <div>
                  <span class="field-label">Frequency (per week)</span>
                  <input type="number" name="activity_frequency" value="<?=isset($edit) ? $edit['activity_frequency'] : ''?>" class="input-full" placeholder="e.g. 5" min="0" max="7">
                </div>
                
                </div>
                <!-- Footer -->
                  <div class="form-footer">
                      <div class="footer-field">
                      <label for="patient_name">Name:</label>
                      <input type="text" id="patient_name" name="patient_name" value="<?=isset($edit) ? $edit['patient_name'] : ''?>">
                      </div>
                      <div class="footer-field">
                      <label for="form_date">Date:</label>
                      <input type="date" class="date" id="form_date" name="date" value="<?=isset($edit) ? $edit['date'] : ''?>" placeholder="DD/MM/YYYY">
                      </div>
                      <div class="footer-field uhid">
                      <label for="uhid">UHID:</label>
                      <input type="text" id="uhid" name="uhid" value="<?=isset($edit) ? $edit['uhid'] : ''?>">
                      </div>
                      <!-- <button type="button" class="print-btn" onclick="window.print()">Print</button> -->
                  </div>
              </div>
              <button type="button" class="prev">Prev</button>
              <button type="button" class="next">Next</button>
            </div>
            <!-- Personal History Ends  -->

            <!-- Medicine Timeline Starts  -->
            <div id="step4" class="step" style="display:none;">
                <div class="page-medicine">
                    <!-- ══ ROW 1: Title | Mediators ══ -->
                    <div class="row1">
                        <div class="title-box">
                        <!-- <span class="pre">FUNCTIONAL</span> -->
                        <h2>Disease Progression<br>Timeline</h2>
                        </div>
                        <div class="mediators-cell">
                        <div class="cell-title">Mediators/Perpetuators</div>
                        <textarea class="white-box" name="mediators_perpetuators1" style="width:240px; height:80px;"><?=$edit['mediators_perpetuators1']?></textarea>
                        </div>
                    </div>

                    <!-- ══ ROW 2: Antecedents | Triggers ══ -->
                    <div class="row2">

                        <div class="antecedents-panel">
                        <div class="panel-label">Antecedents</div>
                        <textarea class="white-box" name="antecedents1" style="width:100%; height:96px;"><?=$edit['antecedents1']?></textarea>

                        <div class="pre-row">
                          <!-- Preconception -->
                          <div class="preconception-block">
                            <div class="rot-label">Preconception</div>
                            <textarea name="preconception" placeholder=""><?=$edit['preconception']?></textarea>
                          </div>
                          <!-- Prenatal -->
                          <div class="prenatal-block">
                            <div class="prenatal-rot">Prenatal</div>
                            <textarea name="prenatal" placeholder=""><?=$edit['prenatal']?></textarea>
                          </div>
                          
                        </div>
                        <!-- <div class="timeline-sidebar"> -->
                          <div class="rot-label">Preconception</div>
                          <div class="sidebar-boxes">
                              <textarea name="sidebar_top" placeholder=""><?=$edit['sidebar_top']?></textarea>
                              <textarea name="sidebar_bottom" placeholder=""><?=$edit['sidebar_bottom']?></textarea>
                          </div>
                        <!-- </div> -->
                        </div>

                        <div class="triggers-cell">
                          <div class="cell-title">Triggers or Triggering Events</div>
                          <textarea class="white-box" name="triggering_events1" style="width:230px; height:118px;"><?=$edit['triggering_events1']?></textarea>
                        </div>
                        
                    </div>

                    <!-- ══ ROW 3: Timeline ══ -->
                    <div class="row3">

                        <!-- Sidebar -->
                        <div class="timeline-sidebar">
                          <div class="rot-label">Preconception</div>
                          <div class="sidebar-boxes">
                              <textarea name="sidebar_top" placeholder=""><?=$edit['sidebar_top']?></textarea>
                              <textarea name="sidebar_bottom" placeholder=""><?=$edit['sidebar_bottom']?></textarea>
                          </div>
                        </div>

                        <!-- Timeline panel -->
                        <div class="timeline-panel">
                        <div class="birth-line">
                            <div class="birth-label">Birth</div>

                            <div class="arrow-track">
                            <!-- Horizontal arrow -->
                            <div class="h-arrow">
                                <div class="h-arrow-line"></div>
                                <div class="h-arrow-head"></div>
                            </div>

                            <!-- 6 event columns -->
                            <div class="events-row">

                                <div class="event-col">
                                <textarea class="ev-top"  name="ev1_top"><?=$edit['ev1_top']?></textarea>
                                <div class="ev-tick"></div>
                                <textarea class="ev-mid"  name="ev1_mid"><?=$edit['ev1_mid']?></textarea>
                                <textarea class="ev-bot"  name="ev1_bot"><?=$edit['ev1_bot']?></textarea>
                                </div>

                                <div class="event-col">
                                <textarea class="ev-top"  name="ev2_top"><?=$edit['ev2_top']?></textarea>
                                <div class="ev-tick"></div>
                                <textarea class="ev-mid"  name="ev2_mid"><?=$edit['ev2_mid']?></textarea>
                                <textarea class="ev-bot"  name="ev2_bot"><?=$edit['ev2_bot']?></textarea>
                                </div>

                                <div class="event-col">
                                <textarea class="ev-top"  name="ev3_top"><?=$edit['ev3_top']?></textarea>
                                <div class="ev-tick"></div>
                                <textarea class="ev-mid"  name="ev3_mid"><?=$edit['ev3_mid']?></textarea>
                                <textarea class="ev-bot"  name="ev3_bot"><?=$edit['ev3_bot']?></textarea>
                                </div>

                                <div class="event-col">
                                <textarea class="ev-top"  name="ev4_top"><?=$edit['ev4_top']?></textarea>
                                <div class="ev-tick"></div>
                                <textarea class="ev-mid"  name="ev4_mid"><?=$edit['ev4_mid']?></textarea>
                                <textarea class="ev-bot"  name="ev4_bot"><?=$edit['ev4_bot']?></textarea>
                                </div>

                                <div class="event-col">
                                <textarea class="ev-top"  name="ev5_top"><?=$edit['ev5_top']?></textarea>
                                <div class="ev-tick"></div>
                                <textarea class="ev-mid"  name="ev5_mid"><?=$edit['ev5_mid']?></textarea>
                                <textarea class="ev-bot"  name="ev5_bot"><?=$edit['ev5_bot']?></textarea>
                                </div>

                                <div class="event-col">
                                <textarea class="ev-top"  name="ev6_top"><?=$edit['ev6_top']?></textarea>
                                <div class="ev-tick"></div>
                                <textarea class="ev-mid"  name="ev6_mid"><?=$edit['ev6_mid']?></textarea>
                                <textarea class="ev-bot"  name="ev6_bot"><?=$edit['ev6_bot']?></textarea>
                                </div>

                            </div><!-- /events-row -->

                            </div><!-- /arrow-track -->
                        </div><!-- /birth-line -->

                        <!-- Current Concerns -->
                        <div class="current-concerns">
                            <div class="cc-label">Current Concerns</div>
                            <textarea class="cc-box" name="current_concerns"><?=$edit['current_concerns']?></textarea>
                        </div>

                        </div><!-- /timeline-panel -->
                    </div><!-- /row3 -->

                    <!-- ══ ROW 4: Signs & Symptoms ══ -->
                    <div class="row4">
                        <div class="cell-title">Signs, Symptoms or Diseases Reported</div>
                        <textarea class="white-box" name="signs_symptoms_diseases"><?=$edit['signs_symptoms_diseases']?></textarea>
                    </div>

                    <!-- ══ FOOTER ══ -->
                    <div class="footer">
                        <div class="f-field">
                        <label for="uhid">UHID:</label>
                        <input type="text" id="uhid" name="uhid" value="<?=isset($edit) ? $edit['uhid'] : ''?>" style="min-width:70px">
                        </div>
                        <div class="f-field">
                        <label for="patient_name">Patient Name:</label>
                        <input type="text" id="patient_name" name="patient_name1" value="<?=isset($edit) ? $edit['patient_name1'] : ''?>" style="min-width:160px">
                        </div>
                        <div class="f-field">
                        <label for="date">Date:</label>
                        <input type="text" id="date" name="date1" value="<?=isset($edit) ? $edit['date1'] : ''?>"style="min-width:100px">
                        </div>
                        <div class="f-field">
                        <label for="doctor_name">Doctor Name:</label>
                        <input type="text" id="doctor_name" name="doctor_name" value="<?=isset($edit) ? $edit['doctor_name'] : ''?>" style="min-width:130px">
                        </div>
                    </div>
                </div>
                <button type="button" class="prev">Prev</button>
                <button type="button" class="next">Next</button>
            </div>
            <!-- Medicine Timeline Ends  -->

            <!-- Table starts -->
            <div id="step5" class="step" style="display:none;">
              <div class="page-table" style="margin-bottom:20px;">
                <div class="table-wrapper" >
                  <table>
                    <thead>
                      <tr>
                        <th style="width:10%">Parameter</th>
                        <th style="width:15%">Reference<br>Range</th>
                        <th style="width:50%"> _____ /
                          <span class="subtext">Month/Year</span>
                        </th>
                        <th style="width:25%">Interpretation</th>
                      </tr>
                    </thead>
                    <tbody>
                      <!-- 24 empty rows -->
                      <tr><td></td><td></td><td></td><td></td></tr>
                      <tr><td></td><td></td><td></td><td></td></tr>
                      <tr><td></td><td></td><td></td><td></td></tr>
                      <tr><td></td><td></td><td></td><td></td></tr>
                      <tr><td></td><td></td><td></td><td></td></tr>
                      <tr><td></td><td></td><td></td><td></td></tr>
                      <tr><td></td><td></td><td></td><td></td></tr>
                      <tr><td></td><td></td><td></td><td></td></tr>
                      <tr><td></td><td></td><td></td><td></td></tr>
                      <tr><td></td><td></td><td></td><td></td></tr>
                      <tr><td></td><td></td><td></td><td></td></tr>
                      <tr><td></td><td></td><td></td><td></td></tr>
                      <tr><td></td><td></td><td></td><td></td></tr>
                      <tr><td></td><td></td><td></td><td></td></tr>
                      <tr><td></td><td></td><td></td><td></td></tr>
                      <tr><td></td><td></td><td></td><td></td></tr>
                      <tr><td></td><td></td><td></td><td></td></tr>
                      <tr><td></td><td></td><td></td><td></td></tr>
                      <tr><td></td><td></td><td></td><td></td></tr>
                      <tr><td></td><td></td><td></td><td></td></tr>
                      <tr><td></td><td></td><td></td><td></td></tr>
                      <tr><td></td><td></td><td></td><td></td></tr>
                    </tbody>
                  </table>
                  
                </div>
                <div class="other_investigation" style="margin-top:5px;">
                  <label for="investigations">Other investigations: :</label>
                  <textarea cols="5" rows="5" name="investigations"><?=$edit['investigations'] ?></textarea>
                </div>
              </div>
              <button type="button" class="prev">Prev</button>
              <button type="button" class="next">Next</button>
            </div>
            <!-- Table Ends -->
            <!-- Table starts -->
            <div id="step6" class="step" style="display:none;">
              <div class="page-table" style="margin-bottom:20px;">
                <div class="header" style="padding: 40px 40px;margin-bottom: 20px;">
                    <img src="upload/salebrity.png" class="logo" style="margin-top: -30px;">
                    <h1>Diagnosis</h1>
                </div>
                <div class="table-wrapper dignosis" >
                  <table>
                    <thead>
                      <tr>
                        <th style="width:30%">Name</th>
                        <th style="width:25%">Date</th>
                        <th style="width:20%">UHID</th>
                        <th style="width:30%">Doctor name</th>
                      </tr>
                    </thead>
                    <tbody>
                      <!-- 24 empty rows -->
                      <tr>
                        <td><input type="text" name="name1" <?=isset($edit) ? $edit['name1'] : ''?>></td>
                        <td><input type="date" name="date1" <?=isset($edit) ? $edit['date1'] : ''?>></td>
                        <td><input type="text" name="uhid1" <?=isset($edit) ? $edit['uhid1'] : ''?>></td>
                        <td><input type="text" name="doctor1" <?=isset($edit) ? $edit['doctor1'] : ''?>></td>
                      </tr>
                      <tr>
                        <td><input type="text" name="name2" <?=isset($edit) ? $edit['name2'] : ''?>></td>
                        <td><input type="date" name="date2" <?=isset($edit) ? $edit['date2'] : ''?>></td>
                        <td><input type="text" name="uhid2" <?=isset($edit) ? $edit['uhid2'] : ''?>></td>
                        <td><input type="text" name="doctor2" <?=isset($edit) ? $edit['doctor2'] : ''?>></td>
                      </tr>
                      <tr>
                        <td><input type="text" name="name3" <?=isset($edit) ? $edit['name3'] : ''?>></td>
                        <td><input type="date" name="date3" <?=isset($edit) ? $edit['date3'] : ''?>></td>
                        <td><input type="text" name="uhid3" <?=isset($edit) ? $edit['uhid3'] : ''?>></td>
                        <td><input type="text" name="doctor3" <?=isset($edit) ? $edit['doctor3'] : ''?>></td>
                      </tr>
                      <tr>
                        <td><input type="text" name="name4" <?=isset($edit) ? $edit['name4'] : ''?>></td>
                        <td><input type="date" name="date4" <?=isset($edit) ? $edit['date4'] : ''?>></td>
                        <td><input type="text" name="uhid4" <?=isset($edit) ? $edit['uhid4'] : ''?>></td>
                        <td><input type="text" name="doctor4" <?=isset($edit) ? $edit['doctor4'] : ''?>></td>
                      </tr>
                      <tr>
                        <td><input type="text" name="name5" <?=isset($edit) ? $edit['name5'] : ''?>></td>
                        <td><input type="date" name="date5" <?=isset($edit) ? $edit['date5'] : ''?>></td>
                        <td><input type="text" name="uhid5" <?=isset($edit) ? $edit['uhid5'] : ''?>></td>
                        <td><input type="text" name="doctor5" <?=isset($edit) ? $edit['doctor5'] : ''?>></td>
                      </tr>
                      <tr>
                        <td><input type="text" name="name6" <?=isset($edit) ? $edit['name6'] : ''?>></td>
                        <td><input type="date" name="date6" <?=isset($edit) ? $edit['date6'] : ''?>></td>
                        <td><input type="text" name="uhid6" <?=isset($edit) ? $edit['uhid6'] : ''?>></td>
                        <td><input type="text" name="doctor6" <?=isset($edit) ? $edit['doctor6'] : ''?>></td>
                      </tr>
                      <tr>
                        <td><input type="text" name="name7" <?=isset($edit) ? $edit['name7'] : ''?>></td>
                        <td><input type="date" name="date7" <?=isset($edit) ? $edit['date7'] : ''?>></td>
                        <td><input type="text" name="uhid7" <?=isset($edit) ? $edit['uhid7'] : ''?>></td>
                        <td><input type="text" name="doctor7" <?=isset($edit) ? $edit['doctor7'] : ''?>></td>
                      </tr>
                      <tr>
                        <td><input type="text" name="name8" <?=isset($edit) ? $edit['name8'] : ''?>></td>
                        <td><input type="date" name="date8" <?=isset($edit) ? $edit['date8'] : ''?>></td>
                        <td><input type="text" name="uhid8" <?=isset($edit) ? $edit['uhid8'] : ''?>></td>
                        <td><input type="text" name="doctor8" <?=isset($edit) ? $edit['doctor8'] : ''?>></td>
                      </tr>
                      <tr>
                        <td><input type="text" name="name9" <?=isset($edit) ? $edit['name9'] : ''?>></td>
                        <td><input type="date" name="date9" <?=isset($edit) ? $edit['date9'] : ''?>></td>
                        <td><input type="text" name="uhid9" <?=isset($edit) ? $edit['uhid9'] : ''?>></td>
                        <td><input type="text" name="doctor9" <?=isset($edit) ? $edit['doctor9'] : ''?>></td>
                      </tr>
                      <tr>
                        <td><input type="text" name="name10" <?=isset($edit) ? $edit['name10'] : ''?>></td>
                        <td><input type="date" name="date10" <?=isset($edit) ? $edit['date10'] : ''?>></td>
                        <td><input type="text" name="uhid10" <?=isset($edit) ? $edit['uhid10'] : ''?>></td>
                        <td><input type="text" name="doctor10" <?=isset($edit) ? $edit['doctor10'] : ''?>></td>
                      </tr>
                      <tr>
                        <td><input type="text" name="name11" <?=isset($edit) ? $edit['name11'] : ''?>></td>
                        <td><input type="date" name="date11" <?=isset($edit) ? $edit['date11'] : ''?>></td>
                        <td><input type="text" name="uhid11" <?=isset($edit) ? $edit['uhid11'] : ''?>></td>
                        <td><input type="text" name="doctor11" <?=isset($edit) ? $edit['doctor11'] : ''?>></td>
                      </tr>
                      <tr>
                        <td><input type="text" name="name12" <?=isset($edit) ? $edit['name12'] : ''?>></td>
                        <td><input type="date" name="date12" <?=isset($edit) ? $edit['date12'] : ''?>></td>
                        <td><input type="text" name="uhid12" <?=isset($edit) ? $edit['uhid12'] : ''?>></td>
                        <td><input type="text" name="doctor12" <?=isset($edit) ? $edit['doctor12'] : ''?>></td>
                      </tr>
                      <tr>
                        <td><input type="text" name="name13" <?=isset($edit) ? $edit['name13'] : ''?>></td>
                        <td><input type="date" name="date13" <?=isset($edit) ? $edit['date13'] : ''?>></td>
                        <td><input type="text" name="uhid13" <?=isset($edit) ? $edit['uhid13'] : ''?>></td>
                        <td><input type="text" name="doctor13" <?=isset($edit) ? $edit['doctor13'] : ''?>></td>
                      </tr>
                      <tr>
                        <td><input type="text" name="name14" <?=isset($edit) ? $edit['name14'] : ''?>></td>
                        <td><input type="date" name="date14" <?=isset($edit) ? $edit['date14'] : ''?>></td>
                        <td><input type="text" name="uhid14" <?=isset($edit) ? $edit['uhid14'] : ''?>></td>
                        <td><input type="text" name="doctor14" <?=isset($edit) ? $edit['doctor14'] : ''?>></td>
                      </tr>
                      <tr>
                        <td><input type="text" name="name15" <?=isset($edit) ? $edit['name15'] : ''?>></td>
                        <td><input type="date" name="date15" <?=isset($edit) ? $edit['date15'] : ''?>></td>
                        <td><input type="text" name="uhid15" <?=isset($edit) ? $edit['uhid15'] : ''?>></td>
                        <td><input type="text" name="doctor15" <?=isset($edit) ? $edit['doctor15'] : ''?>></td>
                      </tr>
                      <tr>
                        <td><input type="text" name="name16" <?=isset($edit) ? $edit['name16'] : ''?>></td>
                        <td><input type="date" name="date16" <?=isset($edit) ? $edit['date16'] : ''?>></td>
                        <td><input type="text" name="uhid16" <?=isset($edit) ? $edit['uhid16'] : ''?>></td>
                        <td><input type="text" name="doctor16" <?=isset($edit) ? $edit['doctor16'] : ''?>></td>
                      </tr>
                      <tr>
                        <td><input type="text" name="name17" <?=isset($edit) ? $edit['name17'] : ''?>></td>
                        <td><input type="date" name="date17" <?=isset($edit) ? $edit['date17'] : ''?>></td>
                        <td><input type="text" name="uhid17" <?=isset($edit) ? $edit['uhid17'] : ''?>></td>
                        <td><input type="text" name="doctor17" <?=isset($edit) ? $edit['doctor17'] : ''?>></td>
                      </tr>
                      <tr>
                        <td><input type="text" name="name18" <?=isset($edit) ? $edit['name18'] : ''?>></td>
                        <td><input type="date" name="date18" <?=isset($edit) ? $edit['date18'] : ''?>></td>
                        <td><input type="text" name="uhid18" <?=isset($edit) ? $edit['uhid18'] : ''?>></td>
                        <td><input type="text" name="doctor18" <?=isset($edit) ? $edit['doctor18'] : ''?>></td>
                      </tr>
                      <tr>
                        <td><input type="text" name="name19" <?=isset($edit) ? $edit['name19'] : ''?>></td>
                        <td><input type="date" name="date19" <?=isset($edit) ? $edit['date19'] : ''?>></td>
                        <td><input type="text" name="uhid19" <?=isset($edit) ? $edit['uhid19'] : ''?>></td>
                        <td><input type="text" name="doctor19" <?=isset($edit) ? $edit['doctor19'] : ''?>></td>
                      </tr>
                      <tr>
                        <td><input type="text" name="name20" <?=isset($edit) ? $edit['name20'] : ''?>></td>
                        <td><input type="date" name="date20" <?=isset($edit) ? $edit['date20'] : ''?>></td>
                        <td><input type="text" name="uhid20" <?=isset($edit) ? $edit['uhid20'] : ''?>></td>
                        <td><input type="text" name="doctor20" <?=isset($edit) ? $edit['doctor20'] : ''?>></td>
                      </tr>
                    </tbody>
                  </table>
                  
                </div>
                <div class="other_investigation" style="margin-top:5px;">
                  <label for="investigations">Other investigations: :</label>
                  <textarea cols="5" rows="5" name="investigations"><?=$edit['investigations'] ?></textarea>
                </div>
              </div>
              <button type="button" class="prev">Prev</button>
              <button type="button" class="next">Next</button>
            </div>
            <!-- Table Ends -->

            <!-- Table starts -->
            <div id="step7" class="step" style="display:none;">
              <div class="page-table" style="margin-bottom:20px;">
                <div class="header" style="padding: 40px 40px;margin-bottom: 20px;">
                    <img src="upload/salebrity.png" class="logo" style="margin-top: -30px;">
                    <h1>Follow Up Consultation</h1>
                </div>
                <div class="" >
                  <label for="doctor_name" style="margin-bottom:5px;">Open Field Text Box:</label>
                  <textarea cols="5" rows="30" name="open_field"><?=$edit['open_field'] ?></textarea>
                </div>
                
              </div>
              <button type="button" class="prev">Prev</button>
             <?php if(!isset($_GET['id'])){ ?>
              <button type="submit" name="final_submit">Submit Form →</button>
              <?php } ?>
            </div>
            <!-- Table Ends -->
        </div>
        

        <div class="submit-row" >
          <button type="button" onclick="window.print();" class="printbtn btn btn-info">Print</button>
        </div>

      </form>
    </div>

  </body>
</html>

<?php //include "footer.php";	?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
  $(document).ready(function() {
    
   // dp();
    var currentStep = 1;
    var totalSteps = $('.step').length;

    $('.next').click(function() {
     
      $('#step' + currentStep).hide();
      currentStep++;
      $('#step' + currentStep).show();
      
    });

    $('.prev').click(function() {
     
      $('#step' + currentStep).hide();
      currentStep--;
      $('#step' + currentStep).show();
    });
  });
</script>
