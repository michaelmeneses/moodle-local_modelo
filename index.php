<?php

/**
 * Component 'local_desempenho'.
 *
 * @package   local_desempenho
 * @copyright 2017 Michael Meneses  {@link http://michaelmeneses.com.br}
 * @license   UNIPRE {@link http://www.cursounipre.com.br}
 */

require_once('../../config.php');

$courseid = optional_param('courseid', 0, PARAM_INT);

if ($courseid) {
    $course = $DB->get_record('course', array('id' => $courseid), '*', MUST_EXIST);
    $context = context_course::instance($course->id, MUST_EXIST);
    require_login($course);
} else {
    $context = context_system::instance();
}

$PAGE->set_context($context);
$PAGE->set_pagelayout('incourse');
$PAGE->set_heading(get_string('myperformance', 'local_desempenho'));
$PAGE->set_title(get_string('myperformance', 'local_desempenho'));
$PAGE->set_url('/local/mady/index.php');

//$output = $PAGE->get_renderer('local_desempenho');

echo $OUTPUT->header();

echo "<table class='table'>
  <tr>
    <th>Company</th>
    <th>Contact</th>
    <th>Country</th>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>
  </tr>
  <tr>
    <td>Centro comercial Moctezuma</td>
    <td>Francisco Chang</td>
    <td>Mexico</td>
  </tr>
  <tr>
    <td>Ernst Handel</td>
    <td>Roland Mendel</td>
    <td>Austria</td>
  </tr>
  <tr>
    <td>Island Trading</td>
    <td>Helen Bennett</td>
    <td>UK</td>
  </tr>
  <tr>
    <td>Laughing Bacchus Winecellars</td>
    <td>Yoshi Tannamuri</td>
    <td>Canada</td>
  </tr>
  <tr>
    <td>Magazzini Alimentari Riuniti</td>
    <td>Giovanni Rovelli</td>
    <td>Italy</td>
  </tr>
</table>";

echo $OUTPUT->footer();
