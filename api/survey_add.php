<?php include_once "../db/base.php";
dd($_POST);
$sub['subject'] = $_POST['subject'];
$sub['acive'] = 1;
$sub['level'] = 0;
$sub['vote'] = 0;

if (isset($_POST['subject_id'])) {
    $sub['id'] = $_POST['subject_id'];
}

$subject->save($sub);
$opt_subject_id = $subject->find(['subject' => $_POST['subject']])['id'];
echo $opt_subject_id;

if (isset($_POST['opt'])) {
    
    foreach ($_POST['opt'] as $opt) {
        if ($opt != "") {
            $tmp = [
                'subject_id' => $opt_subject_id,
                'opt' => $opt,
                'vote' => 0,
            ];
            $options->save($tmp);
        }
    }
}
to("../admin_center.php?do=survey");
